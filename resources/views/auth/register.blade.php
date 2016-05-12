@extends('layouts.login')

@section('content')
    {!! Form::open(['url' => 'register']) !!}

    <h1>Create Account</h1>
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::text('name',null,array('class'=>"form-control" ,'placeholder' => 'Username' ,'require'=>'required')) !!}
        @if ($errors->has('name'))
            <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::email('email', null, array('class'=>"form-control" ,'placeholder' => 'Email' ,'require'=>'required')) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        {!! Form::password('password', array('class' => 'form-control','placeholder' => 'Password' ,'require'=>'required')) !!}
        @if ($errors->has('password'))
            <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        {!! Form::password('password_confirmation', array('class' => 'form-control','placeholder' => 'Password confirmation' ,'require'=>'required')) !!}
        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
        @endif
    </div>
    <div>
        <button type="submit" class="btn btn-default submit">Register</button>
    </div>
    <div class="clearfix"></div>
    <div class="separator">

        <p class="change_link">Already a member ?
            <a href="{{ url('/login') }}" class="to_register"> Log in </a>
        </p>

    </div>
    {!! Form::close() !!}
@endsection
