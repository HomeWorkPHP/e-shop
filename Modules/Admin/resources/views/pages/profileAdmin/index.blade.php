<?php
?>
@extends('admin::layouts.admin')

@section('content')
    <div class="content-wrapper" style="min-height: 546.816px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản Lý Nhân Sự</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6 d-flex">
                                        <a href="{{ route('admin.profileAdmin.create') }}"
                                            class="btn btn-primary next-link__js">Thêm Mới</a>
                                    </div>
                                    <div class="col-6 text-right"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="table-crud_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dt-buttons btn-group flex-wrap"> <button
                                                    class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
                                                    aria-controls="table-crud" type="button"
                                                    style="background-color: rgb(40, 167, 69);"><i
                                                        class="fas fa-file-excel"></i></button> <button
                                                    class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                                                    aria-controls="table-crud" type="button"
                                                    style="background-color: rgb(40, 167, 69);"><i
                                                        class="fas fa-file-pdf"></i></button> </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="table-crud_filter" class="dataTables_filter"><label>Tìm kiếm<input
                                                        type="search" class="form-control form-control-sm" placeholder=""
                                                        aria-controls="table-crud" style="width: 250px;"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="table-crud"
                                                class="table table-bordered table-striped dataTable no-footer dtr-inline"
                                                aria-describedby="table-crud_info">
                                                <thead>
                                                    <tr>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">ID</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">First
                                                            Name</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">Last Name
                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">Email
                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">Thời gian
                                                            tạo</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">Thao Tác
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $data)
                                                        <tr id="1" class="odd">
                                                            <td class="dtr-control" tabindex="0">{{ $data->id }}</td>
                                                            <td>{{ $data->first_name }}</td>
                                                            <td>{{ $data->last_name }}</td>
                                                            <td>{{ $data->email }}</td>
                                                            <td><span class="badge badge-success">Hoạt động</span>
                                                            <td>
                                                                <a href="{{ route('admin.profileAdmin.edit') }}"
                                                                    id="edit-customer"
                                                                    class="btn btn-primary next-link__js">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                                {{-- <form style="display: inline;" action="http://127.0.0.1:8000/admin/staffs/delete"
                                                                    method="POST" id="form-delete__js">
                                                                    <input type="hidden" name="_token"
                                                                        value="lCEcbGXgMSBIVc436c8GSbGbWtC40iCVUcYpdT2J">
                                                                    <input type="text" name="id" value="1"
                                                                        hidden="">
                                                                </form> --}}
                                                                <button id="delete__js" class="btn btn-danger"
                                                                    url="http://127.0.0.1:8000/admin/staffs/delete">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="table-crud_info" role="status"
                                                aria-live="polite">Bản ghi từ 1 đến 1 tổng cộng 1 bản ghi</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="table-crud_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="table-crud_previous"><a href="#"
                                                            aria-controls="table-crud" data-dt-idx="0" tabindex="0"
                                                            class="page-link">Trang trước</a></li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                            aria-controls="table-crud" data-dt-idx="1" tabindex="0"
                                                            class="page-link">1</a></li>
                                                    <li class="paginate_button page-item next disabled"
                                                        id="table-crud_next"><a href="#" aria-controls="table-crud"
                                                            data-dt-idx="2" tabindex="0" class="page-link">Trang
                                                            sau</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
@endsection
