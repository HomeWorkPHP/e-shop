<?php
?>
@extends('admin::layouts.admin')

@section('content')
<div class="content-wrapper" style="min-height: 546.816px;">
    <section section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card card-default">

                        <div class="card-header">
                            <h3 class="card-title">Thông tin nhân sự</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!--card-body -->
                        <form action="{{ route('admin.profileAdmin.store') }}" method="post" id="store">
                            @csrf
                            <div class="card-body">
                                <div class="form-group col-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width:20%;">
                                            <span class="input-group-text" style="width:100%;">First Name</span>
                                        </div>
                                        <input id="first_name" type="text" value="" name="first_name"
                                            autocomplete="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width:20%;">
                                            <span class="input-group-text" style="width:100%;">Last Name</span>
                                        </div>
                                        <input id="last_name" type="text" value="" name="last_name" autocomplete=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width:20%;">
                                            <span class="input-group-text" style="width:100%;">Email</span>
                                        </div>
                                        <input id="email" type="email" value="" name="email" autocomplete=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend" style="width:20%;">
                                            <span class="input-group-text" style="width:100%;">Password</span>
                                        </div>
                                        <input id="password" type="password" value="" name="password" autocomplete=""
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-header text-center">
                                <button class="btn btn-success">Thêm Mới</button>
                                <a href="http://127.0.0.1:8000/admin/staffs" class="btn btn-danger next-link__js">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
