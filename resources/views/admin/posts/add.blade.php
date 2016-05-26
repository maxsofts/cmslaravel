@extends('layouts.admin')
@section('content')

    <div class="right_col" role="main">

        <!-- top tiles -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Thêm Danh Mục</h2>
                    <a href="{{ url('admin/posts/all') }}" class="btn btn-primary" style="margin-left:
                    20px">----Trở về Posts
                        ----</a>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ url('admin/posts/add')
                    }}" method="post">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Title</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input  type="text" id="title" name="title" required="required"
                                        class="form-control
                                col-md-7
                                col-xs-12">
                            </div>
                        </div>

                        <div class="form-group" >
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="author">author
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <select class="select2_multiple form-control" name="author" >
                                    @foreach($name as $row)
                                        <option value="{{$row['name']}}"  >{{$row['name']}}</option>

                                    @endforeach

                                </select>
                        </div>
                            <div class="clearfix" ></div>

                        <div class="form-group" style="margin-top: 10px;">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 ">Category</label>
                            <div class="col-md-6 col-sm-6 col-xs-12 ">
                                <select class="select2_multiple form-control" name="category[]" multiple="multiple">
                                    @foreach($data as $row)
                                    <option value="{{$row['name']}}"  >{{$row['name']}}</option>

                                        @endforeach

                                </select>

                            </div>
                        </div>


                        <div class="form-group ">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 ">Status</label>
                            <div class="col-md-6 col-sm-6 col-xs-12 ">
                                <select name="status"  class="form-control">
                                    <option>Public</option>
                                    <option>Private</option>

                                </select>

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="tags_1" type="text" class="tags form-control" name="tags" />
                                <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                <button type="submit" class="btn btn-success">--Thêm--</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

            <!-- /top tiles -->
            <br>
        </div>

@endsection()