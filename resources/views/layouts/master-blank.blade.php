<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Đăng nhập</title>
        <base href="{{asset('public/backend')}}/">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        @include('layouts.head')
  </head>
    <body class="pb-0">
        @yield('content')
        @include('layouts.footer-script')
    </body>
</html>
