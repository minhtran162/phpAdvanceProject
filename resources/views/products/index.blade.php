@extends('layouts.admin')
@section('title', 'Danh sach product')

@section('content')

<table style="border:1px">
    <tbody>
        <tr>
            <td>ID</td>
            <td>Product Name</td>
            <td>Price</td>
            <td>Description</td>
            <td>Brand</td>
            <td>Type</td>
            <td>Nation</td>
            <td> <a href="{{ route('products.create') }}">Create</a> </td>
        </tr>
        @foreach($products as $product)
        <tr>
            <td> {{$product->id}}</td>
            <td> {{$product->name}}</td>
            <td> {{$product->price}}</td>
            <td> {{ $product->desc }} </td>
            
            <?php $brand = App\Models\Brand::find($product->brand_id) ?>
            <td> {{ $brand->name }}</td>

            <?php $type = App\Models\Type::find($product ->type_id) ?>
            <td> {{ $type->name }}</td>

            <?php $nation = App\Models\Nation::find($product ->nation_id) ?>
            <td> {{ $nation->name }}</td>

            <td> <a href="{{ route('products.edit', $product->id) }}">Edit</a> </td>
            <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection