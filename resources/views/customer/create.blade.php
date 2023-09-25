{{-- @extends('app')
@section('content')
    <div class="row">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endif
        <form method="POST" action="{{  route('customer.store') }}">
            @csrf
            <div class="mb-3">
              <label>Customer Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="customer_name" value="{{ old('customer_name') }}"/>
            </div>
            <div class="mb-3">6
                <label>Contact Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="contact_name" value="{{ old('customer_name') }}"/>
              </div>
              <div class="mb-3">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="{{ old('customer_name') }}"/>
              </div>
              <div class="mb-3">
                <label>City</label>
                <input type="text" class="form-control" name="city" value="{{ old('customer_name') }}"/>
              </div>
              <div class="mb-3">
                    <button class="btn btn-primary">Save</button>
                    <a class="btn btn-danger" href="{{ route('customer.index') }}">Back</a>
              </div>
        </form>
        </div>
@endsection --}}
@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form method="POST" action="{{ route('customer.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="">
                        Customer Name <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" name="customer_name" value="{{ old('customer_name') }}" />
                </div>
                <div class="mb-3">
                    <label for="">
                        Contact Name <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" name="contact_name" value="{{ old('contact_name') }}" />
                </div>
                <div class="mb-3">
                    <label for="">
                         Address <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}" />
                </div>
                <div class="mb-3">
                    <label for="">
                        City <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" name="city" value="{{ old('city') }}" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Save</button>
                    <a class="btn btn-danger" href="{{ route('customer.index') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection