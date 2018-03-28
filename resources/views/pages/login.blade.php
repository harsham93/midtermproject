@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title">
            <h1>User Login</h1>
        </div>
        <div class="card-body">
            <form action="/register" method="post">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" class="form-control" id="name">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" class="form-control" id="password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                    <label class="form-check-label" for="dropdownCheck2">
                        Remember me
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
        </div>
    </div>

@endsection