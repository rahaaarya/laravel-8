@extends('layouts.main')

@section('container')

<h1 class="mb-5 text-center">Post Categories</h1>

<div class="container">
  <div class="row justify-content-center">
    @foreach ($categories as $category)
    <div class="col-md-4 mb-4">
      <a href="/blog?category={{ $category->slug }}">
      <div class="card text-center h-100">
        <img src="https://via.placeholder.com/500x500" class="card-img-top" alt="{{ $category->name }}">
        <div class="card-body">
          <h3 class="card-title">
            <a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a>
          </h3>
        </div>
      </div>
    </a>
    </div>
    @endforeach
  </div>
</div>

@endsection
