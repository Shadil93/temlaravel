@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-0">

        </div>
        <div class="col-2">
            <table  class=" table table-danger">
                <tr>
                    <th>name</th>
                    <th>mobile</th>
                    <th>address</th>
                    <th>email</th>
                     
                    <th colspan="2">Action</th>


                </tr>
                @foreach( $data as $datas)

                <tr>
                    <td>{{$datas->name}}</td>
                    <td>{{ $datas-> mobile}}</td>
                    <td>{{ $datas->address}}</td>
                    <td>{{ $datas->email }}</td>
                    <td><a href="{{ route('edit',$datas->id) }}" class="btn btn-success">edit</a>
                    <td><a href="{{ route('delete',$datas->id) }}" class="btn btn-danger">delete</a>
                </td>
                </tr>

                @endforeach
            </table>
          
        </div>
    </div>
</div>



@endsection