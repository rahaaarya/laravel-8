@extends('layouts.main')
@section('container')
<article>
  <h2>{{ $post->title }}</h2>
  {{-- <h5>{{ $post->author }}</h5> --}}
  <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug}} "  class="text-decoration-none"> {{ $post->category->name }}</a></p>
    {!! $post->content !!}
</article>

<a href="/blog" class="d-block mt-3">Back to Posts</a>
@endsection