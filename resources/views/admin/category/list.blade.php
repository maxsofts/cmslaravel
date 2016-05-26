@extends('layouts.admin')
@section('content')

    <div class="right_col" role="main">

        <!-- top tiles -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> List Category</h2>
                    <a href="{{ url('admin/category/add') }}" class="btn btn-primary" style="margin-left: 20px">----   Thêm Danh mục mới
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
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Slug</th>
                            <th>Cate_parent_id</th>
                            <th colspan="2">Update / Delete</th>

                        </tr>
                        </thead>


                        <tbody>
                        @foreach( $data as $row)
                        <tr>
                            <td>{!! $row['id'] !!}</td>
                            <td>{!! $row['name'] !!}</td>
                            <td>{!! $row['description'] !!}</td>
                            <td>{!! $row['slug'] !!}</td>
                            <td>{!! $row['cate_parent_id'] !!}</td>
                            <td> <a href="{{ url('admin/category/edit',[$row['id']]) }}">Sửa</a></td>
                            <td> <a href="{{ url('admin/category/delete',[$row['id']]) }}">Xóa</a></td>
                        </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-sm-5">
                    Tổng Số Trang {!! $data->lastPage() !!}
                </div>
                <div class="col-sm-7 pull-right">
                    <div id="datatable_paginate" class="dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            @if($data->currentPage()!=1)
                            <li id="datatable_previous" class="paginate_button previous">
                                <a tabindex="0" data-dt-idx="0" aria-controls="datatable" href="{!! $data->url
                                ($data->currentPage() -1)!!}" >Previous</a>
                            </li>
                            @endif
                            <?php $stt=0?>
                           @for($i=1;$i<= $data->lastPage();$i++)

                            <li  class="paginate_button  {{ $data->currentPage() ==$i ? 'activi' : '' }}">
                                <a tabindex="0" data-dt-idx="0" aria-controls="datatable" href="{!! $data->url($i)
                                !!}">{!! $i !!}</a>
                            </li>
                            @endfor

                            @if($data->currentPage()!=$data->lastPage())
                                <li id="datatable_next" class="paginate_button next">
                                    <a tabindex="0" data-dt-idx="0" aria-controls="datatable" href="{!! $data->url($data->currentPage() +1) !!}">Next</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- /top tiles -->
        <br>
    </div>

@endsection()

