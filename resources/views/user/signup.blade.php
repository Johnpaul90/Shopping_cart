@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-5 col-md-offset-4">
        <h1>Sign Up</h1>
        @if(count($errors)> 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>{{$error}}</p>
            @endforeach
        </div>
        @endif
        <form action="{{route('user.signup')}}" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" class="form-control" autofocus>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign up</button>
            {{csrf_field()}}
            <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
    </div>
</div>
@endsection