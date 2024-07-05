@extends('layouts.main')

@section('container')
  <h1 class="text-center">{{ $title }}</h1>

  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/blog">
        @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}"> 
        @endif
        @if (request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}"> 
      @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if($posts->count())
  <div class="card mb-3">
    <img src="https://via.placeholder.com/1200x400" class="card-img-top" alt="Placeholder Image">
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
      <p>
        <small class="text-body-secondary">
          By. <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/blog?category= {{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
      </p>

      <p class="card-text">{{ $posts[0]->excerpt }}</p>

      <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
    </div>
  </div>
 

  <div class="container">
    <div class="row">
      @foreach ( $posts->skip(1) as $post )
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <div class="position-relative">
            <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7); bottom: 0;"><a href="/blog?category= {{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
            <img src="https://via.placeholder.com/500x400" class="card-img-top" alt="Placeholder Image">
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p>
              <small class="text-body-secondary">
                By. <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> {{ $post->created_at->diffForHumans() }}
              </small>
            </p>

            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  @else 
  <p class="text-center fs-4">No post found</p>
  @endif
  <div class="d-flex justify-content-center">
    {{ $posts->links() }}
  </div>
@endsection
