@extends('layout.index')
@section('content')

<div class="contanier">
    <div class="row">
     @if(session()->has('success'))

     <div style="text-align: center; margin-top:20px;"class="alert alert-success col-md-12">
        <strong>{{ session()->get('success')}}</strong>

     </div>
     @endif 
        <div class="col-3">

        </div>
        <div class="col-4">
            <form method="post" action="{{ route('do_login')}}">
                @csrf
            <label>email</label>
            <input type="text" name="email" class="form-control">
            <label>password</label>
            <input type="text" name="password" class="form-control">
            <button type="submit" class="btn btn-success mt-2">submit</button>
            </form>
        </div>
    </div>
</div>


@endsection