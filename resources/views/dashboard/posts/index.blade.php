@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive">
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Create new post</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>   
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name }}</td>
        <td class="d-flex">
          <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-info me-2"><span class="bi bi-eye-fill"></span></a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning me-2"><span class="bi bi-pencil-square"></span></a>
          
          <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Are you sure')"><span class="bi bi-trash3"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>



@endsection
