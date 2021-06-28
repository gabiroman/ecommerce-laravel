@extends('layouts.template')
@section('title', 'Create product')
@section('content')
    <h1>Here you can create a product</h1>
    <a href="{{route('products.index')}}">Volver</a>
    <div class="w-50 m-auto">
        <form action="{{route('products.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" name="name" value="{{old('name')}}">
              @error('name')
                  <p class="text-danger">*{{$message}}</p>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Price</label>
              <input type="number" class="form-control" name="price" value="{{old('price')}}">
              @error('price')
                  <p class="text-danger">*{{$message}}</p>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Description</label>
              <textarea  class="form-control" name="description" id="" cols="30" rows="5">{{old('description')}}</textarea>
              @error('description')
                  <p class="text-danger">*{{$message}}</p>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Image</label>
              <input type="text" class="form-control" name="image" value="{{old('image')}}">
              @error('image')
                  <p class="text-danger">*{{$message}}</p>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Category</label>
              <input type="text" class="form-control" name="category" value="{{old('category')}}">
              @error('category')
                  <p class="text-danger">*{{$message}}</p>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Stock</label>
              <input type="number" class="form-control" name="stock" value="{{old('stock')}}">
              @error('stock')
                  <p class="text-danger">*{{$message}}</p>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection