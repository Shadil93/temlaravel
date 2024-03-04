@extends('index')
@section('content')
<div class="container">
    <div class="row">
    @if(session()->has('success'))
        <div style="text-align: center; margin-top:20px;">
            <b>{{ session()->get('success') }}</b>
        </div>
        @endif
        <div class="col-3">

        </div>
        <div class="col-4">
        <div class="card" style="width: 18rem; color:#000;">
  
  <div class="card-body">
            <form action="{{ route('update',$data->id)}}" method="post">
                @csrf
                <label>name</label>
                <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                <label>mobile</label>
                <input type="mobile" name="mobile" class="form-control" value="{{ $data->mobile }}">
                <label>address</label>
                <input type="text" name="address" class="form-control" value="{{ $data->address }}">
                <label>email</label>
                <input type="text" name="email" class="form-control" value="{{ $data->email }}">
                
                <input type="submit" value="Update"  class="btn btn-success">
            </form>
        </div>
        </div>
        </div>
    </div>
</div>



@endsection