@extends('layouts.master')

<title>Manage</title>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- left panel -->
            <div class="col-sm-2 sidenav" style="background-color:light-blue">
                <div class="list-group">
                    <a href="{{route('index')}}" class="list-group-item {{Route::currentRouteName() == 'index' ? 'active' : ''}}">Admin Panel</a>
                    <a href="{{route('products.index')}}" class="list-group-item {{Route::currentRouteName() == 'products.index' ? 'active' : ''}}">Product</a>
                    <a href="{{route('brands.index')}}" class="list-group-item {{Route::currentRouteName() == 'brands.index' ? 'active' : ''}}">Brand</a>
                    <a href="{{route('types.index')}}" class="list-group-item {{Route::currentRouteName() == 'types.index' ? 'active' : ''}}">Type</a>
                    <a href="{{route('nations.index')}}" class="list-group-item {{Route::currentRouteName() == 'nations.index' ? 'active' : ''}}">Nation</a>
                    
                    <a href="/" class="list-group-item" style="margin-top: 55vh"><i class="fa fa-arrow-left"></i> Back to Home</a>
                </div>
            </div>

            <!-- right panel -->
            <div class="col-sm-10" style="background-color:white">
                @yield('content')
            </div>
        </div>
    </div>
</body>