@extends('layout')

@section('content')

<div class="col-md-8 order-md-1">
    <form method="POST" action="/players">
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

            <div class ="col-md-3 mb-5">
                <label for="gender">Gender</label>
                <select name="gender" class="custom-select d-block w-100" id="gender" required>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                </select>
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