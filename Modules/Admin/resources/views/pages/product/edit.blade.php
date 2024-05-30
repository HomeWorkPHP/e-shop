<?php
?>
@extends('admin::layouts.admin')
{{-- @section('content')
    <div class="container">
        <h3>store Product</h3>
    <form action="" id="store-product">
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" name="code" id="code" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
                <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
        </div>
        <div class="form-group">
            <label for="type">type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Enter type">
        </div>
    </form>
    </div>
@endsection --}}
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

        <section section="" class="content">
            <div class="container-fluid">
                <div class="row">
                    <div id="form-data" hidden="" data-rules="}}"></div>
                    <form class="row" action="{{ route('admin.product.update', $products->id) }}" method="POST"
                        id="store-product">
                        @csrf
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin cơ bản</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="row">
                                    <div class="col-8">
                                        <div class="card-body row">
                                            <div class="form-group col-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend" style="width:auto;">
                                                        <span class="input-group-text" style="width:100%;">Code</span>
                                                    </div>
                                                    <input type="text" value="{{ $products->code }}" name="code"
                                                        id="code" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend" style="width:auto;">
                                                        <span class="input-group-text" style="width:100%;">Tên Sản
                                                            Phẩm</span>
                                                    </div>
                                                    <input id="name" value="{{ $products->name }}" type="text"
                                                        name="name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend" style="width:auto;">
                                                        <span class="input-group-text" style="width:100%;">Mô tả</span>
                                                    </div>
                                                    <textarea name="description" value="{{ $products->description }}" id="description" class="form-control"> </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend" style="width:auto;">
                                                        <span class="input-group-text" style="width:100%;">Giá Bán</span>
                                                    </div>
                                                    <input id="price" value="{{ $products->peice }}" type="text"
                                                        name="price" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <div class="input-group">
                                                    <div class="container">
                                                        <div class="preview">
                                                            <img id="img-preview" src="" />
                                                            <label for="file-input">Chọn Hình Ảnh</label>
                                                            <input hidden accept="image/*" type="file"
                                                                value="{{ $products->images }}" id="file-input"
                                                                name="images" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group col-12">
                                                <div class="input-group-prepend" style="width:auto;">
                                                    <span class="input-group-text" style="width:100%;">Type</span>
                                                </div>
                                                <select class="form-control" value="{{ $products->type }}" name="type"
                                                    id="type">
                                                    <option value="1">Điện thoại</option>
                                                    <option value="2">Laptop</option>
                                                    <option value="2">PC</option>
                                                    <option value="2">Phụ Kiện</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center" style="padding-bottom: 10px;">
                                        <button type="submit" class="btn btn-success">THÊM MỚI</button>
                                        <a href="{{ route('admin.product.create') }}" class="btn btn-danger">HỦY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
    <!-- ./wrapper -->
@endsection
@section('extra-js')
    {!! JsValidator::formRequest('Modules\Admin\App\Http\Requests\StoreProductRequest', 'store-product') !!}
@endsection
