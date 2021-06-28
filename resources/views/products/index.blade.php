@extends('layouts.template')
@section('title', 'Products')
@section('content')
    <h1>Here are products</h1>
    <a class="btn btn-primary my-2" href="{{route('products.create')}}" role="button">Create</a>
    <div class="row justify-content-center">
        @foreach ($products as $product)
        <div class="card col-sm-4 mx-2 my-1" style="width: 18rem;">
            <img src="#" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">{{$product->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted text-center">$ {{$product->price}}</h6>
                <div class="d-flex justify-content-between">
                    <a href="{{route('products.show', $product)}}" class="btn btn-dark w-75">View</a>
                    <a href="#" class="btn btn-outline-dark"><i class="fas fa-cart-plus"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{$products->links()}}
@endsection
