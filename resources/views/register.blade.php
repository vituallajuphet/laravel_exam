@extends('layouts.app')
@section('content')
<div class="container">
        <h3>Register Account</h3>
        <div>
            <form class="">
            <div class="form-group">
                <label for="exampleInputEmail1">Full name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/login"> Back to login</a>
        </form>
        </div>
</div>
@endsection
