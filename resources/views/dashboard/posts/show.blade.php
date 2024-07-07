@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h2 class="mb-3">{{ $post->title }}</h2>
     
      <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to my posts</a>
      <a href="" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
      <a href="" class="btn btn-danger"><i class="bi bi-trash3"></i> Delete</a>

      <div class="text-center my-4">
        <img src="https://via.placeholder.com/1200x400" class="img-fluid rounded" alt="Placeholder Image">
      </div>

      <article class="my-3 fs-5">
        {!! $post->content !!}
      </article>

      <div class="mt-4">
        <a href="/blog" class="btn btn-secondary">Back to Posts</a>
      </div>
    </div>
  </div>
</div>
@endsection