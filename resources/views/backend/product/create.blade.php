@extends('backend.backend-master')
@section('title','Add product')
@section('main')
<div class="container">
    <div class="row py-4">
        <div class="col-9 mx-auto"><h2>Add product <span class="text-danger">{{Session::get('msg')}}</span> </h2>
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                <div class="mb-3 py-3">
                  <label for='input product name'  class="form-label">product Name:</label>
                  <input type="text" name="name" class="form-control" placeholder="Give a product name" >
                  <select name="category_id" class="form-select">
                    <option value="" disabled>---Choose A Category --</option>
                    @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-white">Product Title :</label>
                  <input type="text" name="title" class="form-control" placeholder="give a product Title">
                  @error('name')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-white">Product Price :</label>
                  <input type="number" name="price" class="form-control" placeholder="give a product Price">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-white">Product Short Description :</label>
                  <textarea name="short_desc" cols="8" rows="2" class="form-control" placeholder="Give a Short Derscription"></textarea>
                  @error('short_desc')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-white">Product Image :</label>
                  <input type="file" name="image" class="form-control">
                 
                </div>
                <button type="submit" class="btn btn-primary">Add product</button>
              </form>
        </div>
    </div>
</div>
@endsection