@extends('layouts.admin')
@section('title', 'Danh sach product')

@section('content')

@foreach
<table>
    <tr>
        <td>ID</td>
        <td>Product Name</td>
        <td>Price</td>
        <td>Decripsion</td>

    </tr>
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->desc}}</td>


        <?php $brand = App\Models\Brand::find($product->brand_id) ?>
        <td> {{ $brand->name }}</td>

        <?php $type = App\Models\Type::find($product->type_id) ?>
        <td> {{ $type->name }}</td>

        <?php $nation = App\Models\Nation::find($product->nation_id) ?>
        <td> {{ $nation->name }}</td>

    </tr>

</table>

@endforeach

@endsection