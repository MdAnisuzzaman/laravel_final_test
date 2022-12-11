@extends('backend.backend-master')
@section('title','Category')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-10 mx-auto py-4">
            <h3 align="center">All Category
             <span class="text-danger">{{Session::get('msg')}}</span>   
            </h3>
            <div class="card mb-4">
                <div class="card-header text-center">
                    <i class="fas fa-table me-1"></i>
                   Showing Category Data
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category )
                                <tr>
                                <td>{{$loop->iteration }}</td>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{route('category.delete', $category->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you Sure To delete this Category?')" >Delete</a>
                                    <a href="{{route('category.edit',$category->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection