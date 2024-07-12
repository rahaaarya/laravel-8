@extends('layouts.main')
@section('container')

<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h2 class="mb-3">{{ $post->title }}</h2>
      <p class="text-muted">
        By <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
        in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        <span class="mx-2">|</span>
        {{ $post->created_at->diffForHumans() }}
      </p>

      @if ($post->image)
        <div class="text-center" style="max-height: 350px; overflow:hidden;" >
          <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded"alt="{{ $post->category->name }}">
        </div>
        @else
        <div class="text-center">
          <img src="https://via.placeholder.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid rounded" alt="Placeholder Image">
        </div>
        @endif

      <article class="fs-5">
        {!! $post->content !!}
      </article>

      <div class="mt-4">
        <a href="/blog" class="btn btn-secondary">Back to Posts</a>
      </div>
    </div>
  </div>
</div>

@endsection
