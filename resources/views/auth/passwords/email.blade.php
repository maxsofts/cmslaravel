@extends('layouts.login')

@section('content')

    <h1>Reset Password</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    {!! Form::open(['url' => 'password/email']) !!}
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::email('email', null, array('class'=>"form-control" ,'placeholder' => 'Email' ,'require'=>'required')) !!}
        @if ($errors->has('email'))
            <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
    <button type="submit" class="btn btn-default submit">
        <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
    </button>

    {!! Form::close() !!}
@endsection
