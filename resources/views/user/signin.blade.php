@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <h1>Login:</h1>
            @if(count($errors)> 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{route('user.signin')}}" method="post">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control" required autofocus>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
                {{csrf_field()}}
                <input type="hidden" name="_token" value="{{Session::token()}}">

            </form>
            <br />
            <p>Don't have an account ? <a href="{{route('user.signup')}}">Sign Up</a></p>
        </div>
    </div>
@endsection