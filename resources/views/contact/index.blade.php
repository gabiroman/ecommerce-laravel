@extends('layouts.template')
@section('title', 'Contact')
@section('content')
    <h1>Here you can contact us</h1>
    @if (session('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('info')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="w-50 m-auto">
        <form action="{{route('contact.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
                @error('name')
                  <p class="text-danger">*{{$message}}</p>
                @enderror
              </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
                @error('email')
                  <p class="text-danger">*{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea class="form-control" name="message" rows="3"></textarea>
                @error('message')
                  <p class="text-danger">*{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection