@extends('backend.backend-master')
@section('title','Add Category')
@section('main')
<div class="container">
    <div class="row py-4">
        <div class="col-7 mx-auto"><h3>Edit Category
            <span class="text-danger">{{ Session::get('msg') }}</span>
        </h3>
            <form action="{{ route('category.update',$category->id) }}" method="POST">
               @csrf
                <div class="mb-3 py-3">
                  <label for='input category name'  class="form-label">Category Name:</label>
                  <input type="text" name="name" class="form-control" placeholder="Give a category name" value={{ $category->name }} >
                </div>
                <button type="submit" class="btn btn-primary">Update Category</button>
              </form>
        </div>
    </div>
</div>
@endsection