@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h2 class="mb-3">{{ $post->title }}</h2>
     
      <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to my posts</a>
      <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
      <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure')"><span class="bi bi-trash3"></span> Delete</button>
        </form>


        @if ($post->image)
        <div class="text-center my-4" style="max-height: 350px; overflow:hidden;" >
          <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded"alt="{{ $post->category->name }}">
        </div>
        @else
        <div class="text-center my-4">
          <img src="https://via.placeholder.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid rounded" alt="Placeholder Image">
        </div>
        @endif

      <article class="my-3 fs-5">
        {!! $post->content !!}
      </article>
    </div>
  </div>
</div>
@endsection