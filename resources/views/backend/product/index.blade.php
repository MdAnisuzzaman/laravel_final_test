@extends('backend.backend-master')
@section('title','Add product')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-10 mx-auto py-4">
            <h2 align="center">All product
             <span class="text-danger">{{Session::get('msg')}}</span>   
            </h2>
            <div class="card mb-4">
                <div class="card-header text-center">
                    <i class="fas fa-table me-1"></i>
                   Showing product Data
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Id</th>
                                <th>Price</th>
                                <th>Short Description</th>
                                <th>Images</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product )
                                <tr>
                                <td>{{$loop->iteration }}</td>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->short_desc }}</td>
                                <td>{{ $product->image }}</td>
                                <td>
                                    <a href="{{route('product.delete', $product->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you Sure To delete this product?')" >Delete</a>
                                    <a href="{{route('product.edit',$product->id)}}" class="btn btn-sm btn-primary">Edit</a>
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
