<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
{{--    <link--}}
{{--        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"--}}
{{--        rel="stylesheet"--}}
{{--        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"--}}
{{--        crossorigin="anonymous"--}}
{{--    />--}}
{{--    <link--}}
{{--        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"--}}
{{--        rel="stylesheet"--}}
{{--        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="--}}
{{--        crossorigin="anonymous" referrerpolicy="no-referrer"--}}
{{--    />--}}
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css"/>
    @livewireStyles
</head>
<body class="bg-dark text-white-50">
<header class="d-flex">
    <h1 class="m-3">Blog Post</h1>
    <a class="m-3 text-white display-6" href="{{route('posts.index')}}">All Posts</a>
</header>
