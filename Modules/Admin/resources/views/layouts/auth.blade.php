<?php
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('static/css/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('static/css/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('static/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
@yield("content")
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('static/js/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('static/js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('static/js/adminlte.min.js')}}"></script>
</body>
</html>
