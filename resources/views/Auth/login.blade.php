@extends('layout.auth')
@section('content')
<div class="row justify-content-center" style="margin-top: 60px">
    <div class="col-md-4 col-md-offset-4">
        <h4>Login</h4>
        <form action="{{route('Auth.check')}}" method="POST">
            @if (Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
            @endif
            @csrf
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email hear..">
                <span class="text text-danger">@error('email')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password hear..">
                <span class="text text-danger">@error('password')
                    {{$message}}
                @enderror</span>
            </div>
            <button class="btn btn-block btn-primary">Login</button>
            <span>I don't have an account <a href="{{route('Auth.register')}}">create new</a></span>
        </form>
    </div>
</div>
@endsection