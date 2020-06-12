@extends('layouts.admin')

@section('content')
<div>
    <div class="row">
        <div class="col-lg-6">
            <br>
            <h2 style="color: Red">Danh Sách Sản Phẩm</h2>
            <h4 style="margin-top:30px">{{$productsData->count()}} Sản Phẩm</h4>
        </div>

        <!-- add modal -->
        <div class="col-lg-6 right">
            <div style="margin-top:20px">
                <button type="btn" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#addModal">
                    <i class="fa fa-plus"></i> Thêm Product
                </button>
            </div>
            <!-- add modal -->
            @include('admin.product.partials.add_modal')
        </div>
    </div>

    <br>
    @include('common.errors')

    <!-- table -->
    <table class="table table-hover  table-bordered">
        <thead>
            <tr class="bg-info">
                <th>ID</th>
                <th>Product Name</th>
                <th style="width: 12%">Description</th>
                <th style="width: 6%">Image</th>
                <th>Price</th>
                <th>Brand</th>
                <th style="width: 6%;">Type</th>
                <th style="width: 5%;">Nation</th>
                <th style="width: 15%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productsData as $productsData)
            <tr>
                <td>{{$productsData->id}}</td>
                <td>{{$productsData->name}}</td>
                <td data-toggle="tooltip" data-placement="bottom" title="{{$productsData->desc}}">{{Str::limit($productsData->desc,40)}}</td>
                <td><img src="{{ $productsData->image }}" width="120" height="120" /></td>
                <td>{{$productsData->price}}</td>
                <td>{{$productsData->Brand->name}}</td>
                <td>{{$productsData->Types->name}}</td>
                <td>{{$productsData->Nation->name}}</td>
                <td>
                    <div class="row action-button">
                        <!-- delete button -->
                        <div class="action-delete">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delModal{{$productsData->id}}">
                                <i class="fa fa-btn fa-trash"></i> Delete
                            </button>

                            <!-- del modal -->
                            @include('admin.product.partials.del_modal')
                        </div>

                        <!-- edit button -->
                        <div class="action-edit">
                            <button type="submit" class="btn btn-outline-info edit" data-toggle="modal" data-target="#editModal{{$productsData->id}}">
                                <i class="fa fa-btn fa-edit"></i> Edit
                            </button>

                            <!-- edit modal -->
                            @include('admin.product.partials.edit_modal')
                        </div>


                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection