@extends('admin.layouts.master')

@section('title')
    Trang chủ
@endsection

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Trang chủ</h1>
    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
    <span class="sr-only">Loading...</span>

    <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
    <span class="sr-only">Loading...</span>

    <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
    <span class="sr-only">Loading...</span>

    <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
    <span class="sr-only">Loading...</span>

    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    <span class="sr-only">Loading...</span>

    <a class="btn btn-default" href="path/to/settings" aria-label="Settings">
        <i class="fa fa-cog" aria-hidden="true"></i>
    </a>

    <a class="btn btn-danger" href="path/to/settings" aria-label="Delete">
        <i class="fa fa-trash-o" aria-hidden="true"></i>
    </a>

    <a class="btn btn-primary" href="#navigation-main" aria-label="Skip to main navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </a>
    <i class="fa fa-refresh fa-spin fa-3x fa-fw" aria-hidden="true"></i>
    <span class="sr-only">Refreshing...</span>

    <i class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true"></i>
    <span class="sr-only">Saving. Hang tight!</span>
    <div class="input-group margin-bottom-sm">
        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
        <input class="form-control" type="text" placeholder="Email address">
    </div>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
        <input class="form-control" type="password" placeholder="Password">
    </div>
    <a href="path/to/shopping/cart" class="btn btn-primary" aria-label="View 3 items in your shopping cart">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    </a>
    <i class="fa fa-battery-half" aria-hidden="true"></i>
    <span class="sr-only">Battery level: 50%</span>
@endsection
