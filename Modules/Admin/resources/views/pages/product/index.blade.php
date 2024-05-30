<?php
?>
@extends('admin::layouts.admin')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản Lý Sản Phẩm</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6 d-flex">
                                        <a href="{{ route('admin.product.create') }}" class="btn btn-primary next-link__js">
                                            Thêm Mới
                                        </a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button class="btn btn-danger">Xóa Tất Cả</button>
                                    </div>
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
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">Code</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">Tên SP
                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">Mô tả
                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">Giá Bán
                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">Loại</th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">Created
                                                        </th>
                                                        <th class="sorting_disabled" rowspan="1" colspan="1">Thao Tác
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products as $products)
                                                        {{-- {{ $product->['id'] }} --}}
                                                        <tr id="2" class="odd">
                                                            <td class="dtr-control" tabindex="0">
                                                                {{ $products->code }}
                                                            </td>
                                                            <td>
                                                                {{ $products->name }}
                                                            </td>
                                                            {{-- <td>
                                            <img style="width: 100px;" src="#" alt="">
                                        </td> --}}
                                                            <td>
                                                                {{ $products->description }}
                                                            </td>
                                                            <td>
                                                                {{ $products->price }}
                                                            </td>
                                                            <td>
                                                                {{ $products->type }}
                                                            </td>
                                                            <td>
                                                                {{ $products->createdBy->firstName }}
                                                            </td>
                                                            <td>
                                                                <a href="{{route('admin.product.edit', $products->id)}}"
                                                                    id="edit-customer"
                                                                    class="btn btn-primary next-link__js">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                                <form style="display: inline;"
                                                                    action="admin/products/delete" method="POST"
                                                                    id="form-delete__js">
                                                                    <input type="hidden" name="_token"
                                                                        value="h56zaH9AKlHN2gjsfK2FLwHiVwCzrsTrVQESHUto">
                                                                    <input type="text" name="id" value="42"
                                                                        hidden="">
                                                                </form>
                                                                <button id="delete__js" class="btn btn-danger"
                                                                    {{-- url="{{ route('admin.product.delete') }}"> --}}
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
                                                aria-live="polite">Bản ghi từ 1 đến 10 tổng cộng 41 bản ghi</div>
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
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="table-crud" data-dt-idx="2" tabindex="0"
                                                            class="page-link">2</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="table-crud" data-dt-idx="3" tabindex="0"
                                                            class="page-link">3</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="table-crud" data-dt-idx="4" tabindex="0"
                                                            class="page-link">4</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="table-crud" data-dt-idx="5" tabindex="0"
                                                            class="page-link">5</a></li>
                                                    <li class="paginate_button page-item next" id="table-crud_next"><a
                                                            href="#" aria-controls="table-crud" data-dt-idx="6"
                                                            tabindex="0" class="page-link">Trang sau</a></li>
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
        <!-- /.content-wrapper -->



        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
@endsection
