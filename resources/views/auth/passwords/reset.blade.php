@extends('layouts.login')

@section('content')

    <h1>Reset Password</h1>

    {!! Form::open(['url' => 'password/reset']) !!}
    {{ Form::hidden('token', $token) }}
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
        <button type="submit" class="btn btn-default submit">Reset Password</button>
    </div>
    {!! Form::close() !!}

@endsection
