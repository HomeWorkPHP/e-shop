<?php
?>
@extends("admin::layouts.auth")
@section("content")
    <div class="login-box">
{{--        <p>{{$data}}</p>--}}
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b> Electronic Shop</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                @if($errors->has('login_failed'))
                    <div class="alert alert-danger" role="alert">
                        This is a danger alert—check it out!
                    </div>
                @endif
                <form action="{{route('admin.login.post')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-8">aber">
                            <label>Remember</label>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>

                </form>
                <p class="mb-1">
                    <a  href="{{route('admin.forgot_password')}}">I forgot my password</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection
