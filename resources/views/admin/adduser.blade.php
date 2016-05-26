@extends('layouts.admin')
@section('content')

    <div class="right_col" role="main">

        <!-- top tiles -->
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">

                    <div class="row tile_count">
                        {!! Form::open(['url' => 'admin/user/add']) !!}
                        <h1>Add User</h1>

                        <div>
                            <div>
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                    {{--<div class="alert alert-danger">
                                        <ul>
                                            @if($erro) <li>{{ $erro }}</li> @endif

                                        </ul>
                                    </div>--}}
                            </div>
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {!! Form::text('name', old('name'), array('class'=>"form-control" ,'id'=>'name','placeholder' => 'Mời bạn nhập tên')) !!}

                            </div>
                            <div class="form-group">
                                {{ Form::label('email', 'email') }}
                                {!! Form::email('email', old('email'), array('id'=>'email','class'=>"form-control" ,'placeholder' => 'Mời bạn nhập Email đăng nhập' )) !!}

                            </div>



                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" rows="3" id="password" type="password" name="password"
                                       placeholder="mời bạn nhập password" />
                            </div>
                            <div class="form-group">
                                <label>Confirm password</label>
                                <input class="form-control" rows="3" id="confirmPassword" type="password"
                                       name="confirmPassword" placeholder="mời bạn xác nhận password" />
                            </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Them Thanh Vien</button>
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- /top tiles -->
        <br>
    </div>

@endsection()