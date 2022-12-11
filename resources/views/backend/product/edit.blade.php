@extends('backend.backend-master')
@section('title','Add product')
@section('main')
<div class="container">
    <div class="row py-4">
        <div class="col-9 mx-auto"><h2>Edit product  </h2>
            <form action="{{ route('product.update',$product->id) }}" method="POST">
               @csrf
                <div class="mb-3 py-3">
                  <label for='input product name'  class="form-label">product Name:</label>
                  <input type="text" name="name" class="form-control" placeholder="Give a product name" value={{ $product->name }} >
                </div>
                <div class="mb-3 py-3">
                  <label for='input product price'  class="form-label">product price:</label>
                  <input type="text" name="price" class="form-control" placeholder="Give a product price" value={{ $product->price }} >
                </div>
                <div class="mb-3 py-3">
                  <label for='input product short_desc'  class="form-label">product short_desc:</label>
                  <input type="text" name="short_desc" class="form-control" placeholder="Give a product short_desc" value={{ $product->short_desc }} >
                </div>
                <button type="submit" class="btn btn-primary">Update product</button>
              </form>
        </div>
    </div>
</div>
@endsection