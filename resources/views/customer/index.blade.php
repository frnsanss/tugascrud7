{{-- @extends('app')
@section('content')
@if (session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
  <div class="card">
        <div class="card-header">
            <form class="row row-cols-auto g-1">
                <div class="col">
                 <input class="form-control" type="text" name="q" value="{{ $q }}" placeholder="Search here....">
                </div>
                <div class="col">
                 <button class="btn btn-success">Refresh</button>
                </div>
                <div class="col">
                    <a class="btn btn-primary" href="{{ route('customer.create') }}">Add</a>
                </div>
            </form>
        </div>
        <div class="card-body p-0 table-responsive    ">
           <table class="table table-bordered table-striped table-hover">
             <thead>
                <th>#</th>
                <th> Name</th>
                <th> Username</th>
                
                <th>Action</th>
             </thead>
           <?php $no = 1 ?>
           @foreach ($customers as $customer)
               <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $customer->customer_name }}</td>
                <td>{{ $customer->contact_name }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->city }}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('costomer.edit', $customer) }}">Edit</a>
                    <form action="{{ route('customer.destroy', $customer) }}" style="display: inline;" 
                    onsubmit="return comfirm('Delete?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
               </tr>
           @endforeach
        </table>
        </div>
    </div>
    @endsection --}}
    @extends('app')
@section('content')
@if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif
        <div class="card">
            <div class="card-header">
                <form action="" class="row row-cols-auto g-1">
                    <div class="col">
                        <input class="form-control" type="text" name="q" value="{{ $q }}" placeholder="Search here..." />
                    </div>
                    <div class="col">
                        <button class="btn btn-success">Refresh</button>
                </div>
                <div class="col">
                    <a class="btn btn-primary" href="{{ route('customer.create') }}">Add</a>
                </div>
            </form>
        </div>
        <div class="card-body p-0 table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <th>No</th>
                    <th>Customer Name</th>
                    <th>Contact Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Action</th>
                </thead>
                <?php $no = 1?>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $customer->customer_name }}</td>
                    <td>{{ $customer->contact_name }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{ route('customer.edit', $customer) }}">Edit</a>
                        <form method="POST" action="{{ route('customer.destroy', $customer) }}" style="display: inline;" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @endsection