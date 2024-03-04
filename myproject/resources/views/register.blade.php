@extends('index')
@section('content')
<div class="container">
    <div class="row">

        @if(session()->has('success'))
        <div style="text-align: center; margin-top:20px;" class="alert atert-success col-md alert">
            <strong>{{ session()->get('success') }}</strong>
        </div>
        @endif
        <div class="col-3">

        </div>
        <div class="col-4">
        <div class="card" style="width: 18rem; color:#000;">
  
  <div class="card-body">
  <form action="{{ route('do_register') }}" method="post">
    @csrf
            <label>name</label>
            <input type="text" name="name" class="form-control">
            <label>address</label>
            <input type="address" name="address" class="form-control" >
            <label>mobile</label>
            <input type="number" name="mobile" class="form-control">
            <label>email</label>
            <input type="text" name="email" class="form-control">
            <label>password</label>
            <input type="text" name="password" class="form-control">
            <button type="submit"  name="submit" class="btn btn-success mt-2" >submit</button>


                 </form>

        </div>
    </div>
</div>



@endsection