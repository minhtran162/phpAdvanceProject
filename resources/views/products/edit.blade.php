@extends('layouts.admin')
@section('title', 'Edit Product')

@section('content')

<form action="{{ route('products.update', $product->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <h2>Edit Product</h2>

    Name Product: <input type="text" name="name" value="{{$product->name}}"><br><br>
    Price: <input type="number" name="price" id="" value="{{$product->price}}"><br><br>
    Description: <input type="text" name="description" value="{{ $product->desc }}"><br><br>
   
    Brand:
    <select name="brand_id"><br/>
        @foreach(App\Models\Brand::all() as $brand)
        <option value="{{$brand->id}}">{{ $brand->name }}</option>
        @endforeach
    </select>

    Type:
    <select name="type_id"><br/>
        @foreach(App\Models\Type::all() as $type)
        <option value="{{$type->id}}">{{ $type->name }}</option>
        @endforeach
    </select>

    Nation:
    <select name="nation_id"><br/>
        @foreach(App\Models\Nation::all() as $nation)
        <option value="{{$nation->id}}">{{ $nation->name }}</option>
        @endforeach
    </select>

    <input type="submit" value="UPDATE">
</form>
@endsection