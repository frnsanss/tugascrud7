<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        $user = new User([
              'name' => $request->name,
              'username' => $request->username,
              'password' => Hash::make($request->username),
        ]);
        
        return redirect()->route('login')->with('success', 'Registration Success. Please Logi!!');
    }

    // public function register_action(Request $request){
    //     $validate=$request->validate(
    //         [
    //             'name'=>['required','max:225'],
    //             'username'=>['required','max:255','unique:tb_user'],
    //             'password'=>['required','max:255'],
    //             'password_confirmation'=>['required','max:255','same:password'],
    //         ]
    //     );
    //     $validate['password']=hash::make($validate['password']);
    //     User::create($validate);
    //     return redirect('/login');
    // }

    public function login()
    {
        $data['title'] = 'login';
        return view('login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        if (Auth::attempt(['username' => $request->username,'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors('password', 'Wrong Username or Password!');
    }
  
    public function password()
    {
        $data['title'] = 'Change Password';
        return view('password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::finf(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->withErrors('password')->with('Wrong Username or Password!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
