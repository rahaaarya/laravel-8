@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    <main class="form-signin w-100 m-auto text-center">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <form>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput"><i class="bi bi-envelope-fill"></i> Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword"><i class="bi bi-lock-fill"></i> Password</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
    </main>
  </div>
</div>
@endsection