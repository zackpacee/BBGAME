@extends('layout')

@section('content')
<form class="form-signin"  method="POST" action="/login">
	{{ csrf_field()}}
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="email" class="sr-only">Email address</label>
      <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" class="form-control" placeholder="password" name="password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
@endsection