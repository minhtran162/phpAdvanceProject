@extends('layouts.master')

<title>Manage</title>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- left panel -->
            <div class="col-sm-2 sidenav" style="background-color:light-blue">
                <!-- user header -->
                <a href="" style="text-decoration: none">
                    <div class="user-details">
                        <img src="https://www.w3schools.com/howto/img_avatar.png" style="border-radius: 50%;width: 20%">
                    </div>
                </a>
                <div class="list-group">
                    <a href="{{route('index')}}" class="list-group-item {{Route::currentRouteName() == 'index' ? 'active' : ''}}">Admin Panel</a>
                    <a href="{{route('products.index')}}" class="list-group-item {{Route::currentRouteName() == 'products.index' ? 'active' : ''}}">Product</a>
                    <a href="{{route('brands.index')}}" class="list-group-item {{Route::currentRouteName() == 'brands.index' ? 'active' : ''}}">Brands</a>
                    <a href="{{route('types.index')}}" class="list-group-item {{Route::currentRouteName() == 'types.index' ? 'active' : ''}}">Types</a>
                    <a href="{{route('nations.index')}}" class="list-group-item {{Route::currentRouteName() == 'nations.index' ? 'active' : ''}}">Nations</a>
                    
                    <a href="{{route('home')}}" class="list-group-item" ><i class="fa fa-arrow-left"></i> Back to Home</a>
                </div>
            </div>

            <!-- right panel -->
            <div class="col-sm-10" style="background-color:white;margin-left: 16.5%">
                @yield('content')
            </div>
        </div>
    </div>
</body>