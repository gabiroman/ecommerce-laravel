@extends('layouts.template')
@section('title', 'Product')
@section('content')
    <h1>Here is product {{ $product->name }}</h1>
    <a href="{{route('products.index')}}">Back</a>
    <a href="{{route('products.edit', $product)}}">Edit</a>
    <form action="{{route('products.destroy', $product)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
<!DOCTYPE html>