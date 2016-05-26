@extends('layouts.admin')
@section('content')

    <div class="right_col" role="main">

        <!-- top tiles -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> List Category</h2>
                    <a href="{{ url('admin/posts/add') }}" class="btn btn-primary" style="margin-left: 20px">----   Thêm Bài Viết
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
                    <p class="text-muted font-13 m-b-30">
                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
                    <form method="post" action="{{url('admin/posts/deleteall')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Options</th>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Tag</th>
                                <th colspan="2">Update / Delete</th>

                            </tr>
                            </thead>


                            <tbody>

                            @foreach( $data as $row)

                                <tr>

                                        <td><input type="checkbox" name="chk[]" value="{!! $row['id'] !!}"
                                                   class="checkbox"></td>

                                    <td>{!! $row['id'] !!}</td>
                                    <td>{!! $row['title'] !!}</td>

                                    <td>{!! $row['author'] !!}</td>
                                    <td>{!! $row['category'] !!}</td>
                                    <td>{!! $row['status'] !!}</td>
                                    <td>{!! $row['tags'] !!}</td>
                                    <td> <a href="{{ url('admin/posts/edit',[$row['id']]) }}">Sửa</a></td>
                                    <td> <a href="{{ url('admin/posts/delete',[$row['id']]) }}">Xóa</a></td>

                                </tr>
                            @endforeach





                            </tbody>
                        </table>
                    <label class="ck">

                        <div  style="position: relative;">
                            <input  type="checkbox" name="doneall" value="Chọn tất cả" id="select_checkbox">Check asll


                        </div>

                    </label>
                    <label class="i-c">
                        <span class="glyphicon   glyphicon-minus" id="delete" aria-hidden="true"></span>
                        <input type="submit" value="Delete" name="delete">
                    </label>
                    <label class="i-c">
                        <span class="glyphicon glyphicon-pencil" id="edit" aria-hidden="true"></span>
                        <input type="submit" value="Edit" name="editall">
                    </label>

                    </form>
                </div>
            </div>



        </div>

        <!-- /top tiles -->
        <br>
    </div>


@endsection()






