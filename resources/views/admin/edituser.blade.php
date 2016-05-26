@extends('layouts.admin')
@section('content')

    <div class="right_col" role="main">

        <!-- top tiles -->
       <div class="container">
           <div class="row">
               <div class="col-sm-6 col-sm-offset-3">
                    <h3>Cập nhật mới</h3>
                   <div class="row tile_count">
                       <form action="{!! url('admin/user/update',$data['id'] ) !!}" method="POST">
                           {{--{!! route('admin.user.PostUser') !!}--}}
                           <input type="hidden"  name="_token" value="{!! csrf_token() !!}" />

                           <div class="form-group">
                               <label>Username</label>
                               <input class="form-control" disabled="disabled" id="name" name="name" placeholder=""
                                      value="{!!
                               $data['name']
                               !!}" />
                           </div>
                           <div class="form-group">
                               <label>Email</label>
                               <input class="form-control"  id="email" name="email" type="text"  value="{!!
                               $data['email']
                               !!}" />
                           </div>

                           <div class="form-group">
                               <label>Password</label>
                               <input class="form-control" rows="3" id="password" type="password" name="password" />
                           </div>

                          {{-- <div class="form-group">
                               <label>Confirm password</label>
                               <input class="form-control" rows="3"  name="Confirmpassword" placeholder="nhập lại pasword" />
                           </div>--}}
                           <button type="submit" class="btn btn-primary">Cập Nhật</button>

                           <form>

                   </div>
               </div>
           </div>
       </div>
        <!-- /top tiles -->
        <br>
    </div>

@endsection()