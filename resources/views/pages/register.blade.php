@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title">
            <h1>Sign Up!</h1>
        </div>
        <div class="card-body">
            <form action="/register" method="post">


                <div class="form-group">

                    <input name="name" class="form-control" id="name" placeholder="Name...">
                </div>

                <div class="form-group">

                    <input name="email" class="form-control" id="email" placeholder="Email...">
                </div>

                <div class="form-group">

                    <input name="password" class="form-control" id="password" placeholder="Password...">
                </div>

                <div class="form-group">

                    <input name="confirm password" class="form-control" id="confirm password" placeholder="Confirm Password...">
                </div>

                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </div>

@endsection