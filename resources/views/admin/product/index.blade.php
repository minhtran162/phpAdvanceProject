@extends('layouts.admin')

@section('content')
<div>
    <div class="row">
        <div class="col-lg-8">
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
    <table class="table table-bordered">
        <thead>
            <tr class="bg-info">
                <th>ID</th>
                <th>Product Name</th>
                <th style="width: 12%">Description</th>
                <th style="width: 3%">Image</th>
                <th>Price</th>
                <th>Brand</th>
                <th style="width: 10%;">Type</th>
                <th>Nation</th>
                <th style="width: 15%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productsData as $productsData)
            <tr>
                <td>{{$productsData->id}}</td>
                <td>{{$productsData->name}}</td>
                <td data-toggle="tooltip" data-placement="bottom" title="{{$productsData->desc}}">{{Str::limit($productsData->desc,40)}}</td>
                <td>{{Str::limit($productsData->image,20)}}</td>
                <td>{{$productsData->price}}</td>
                <td>{{$productsData->Brand->name}}</td>
                <td>{{$productsData->Type}}</td>
                <td>{{$productsData->Nation->name}}</td>
                <td>
                    <div class="row action-button">
                        <!-- delete button -->
                        <div class="action-delete">
                            <form action="{{ route('products.destroy',$productsData->id) }}" class="action-form" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i> Delete
                                </button>
                            </form>
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