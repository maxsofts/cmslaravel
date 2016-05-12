@extends('layouts.login')

@section('content')
    {!! Form::open(['url' => 'login']) !!}
        <h1>Login Form</h1>

<<<<<<< HEAD
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
=======
        <div>
>>>>>>> master
            {!! Form::email('email', old('email'), array('class'=>"form-control" ,'placeholder' => 'Email' ,'require'=>'required')) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
<<<<<<< HEAD
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
=======
        <div>
>>>>>>> master
            {!! Form::password('password', array('class' => 'form-control','placeholder' => 'Password' ,'require'=>'required')) !!}
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div>
            <button type="submit" class="btn btn-default submit" >Log in</button>
            <a class="reset_pass" href="{{url('/password/reset')}}">Lost your password?</a>
        </div>
        <div class="clearfix"></div>
        <div class="separator">
            <p class="change_link">New to site?
                <a href="{{url('/register')}}" class="to_register"> Create Account </a>
            </p>
        </div>
    {!! Form::close() !!}
@endsection
