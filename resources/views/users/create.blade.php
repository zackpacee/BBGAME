@extends('layout')

@section('content')


@include ('layout.errors')
<div class="col-md-12 order-md-1">
<h1>Registration</h1>
</div>
<div class="col-md-8 order-md-1">
    <form method="POST" action="/register">
        {{ csrf_field()}}
  
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input name="first_name" type="text" class="form-control" id="firstName" placeholder="" value="" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input name="last_name" type="text" class="form-control" id="lastName" placeholder="" value="" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="userName">UserName</label>
                <input name="user_name" type="text" class="form-control" id="userName" placeholder="" value="" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="" value="" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="password_confirmation">Password Confirmation</label>
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="" value="" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="" value="" required>
            </div>

            



        </div>

        <div class="row">
            <div class=" col-md-3 float-left">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Create Player</button>
            </div>
        </div>
    </form>
</div>


@endsection