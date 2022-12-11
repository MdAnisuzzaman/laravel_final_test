@extends('backend.backend-master')
@section('title','Add Category')
@section('main')
<div class="section">
    <div class="row py-5">
        <div class="col-md-8 mx-auto"><h3>Add Category
            <span class="text-danger"> {{Session::get('msg')}}</span> </h3>
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="mb-3 py-3">
                  <label for='input category name'  class="form-label">Category Name:</label>
                  <input type="text" name="name" class="form-control" placeholder="Give a category name" >
                  @error('name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Category</button>
              </form>
        </div>
    </div>
</div>
@endsection