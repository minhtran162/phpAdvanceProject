@extends('layouts.admin')
@section('title', 'Danh sach product')
@section('content')
<form method="post" action="{{ route('products.store') }}">
    {{ csrf_field() }}

    <label>{{ trans('product.label.name') }}</label><br />
    <input name="name"><br />

    @if ($errors->has('name'))
    <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong><br />
    </span>
    @endif

    <label>{{ trans('product.label.price') }}</label><br />
    <input name="price"><br />

    <label>{{ trans('product.label.desc') }}</label><br />
    <input name="desc"><br />

    @if ($errors->has('desc'))
    <span class="help-block">
        <strong>{{ $errors->first('desc') }}</strong><br />
    </span>
    @endif

    <?php $brands = App\Models\Brand::all() ?>
    <select name="brand_id"><br />

        @foreach($brands as $brand)
        <option value="{{$brand->id}}">{{ $brand->name }}</option>
        @endforeach
    </select>

    <?php $types = App\Models\Type::all() ?>
    <select name="type_id"><br />

        @foreach($types as $type)
        <option value="{{$type->id}}">{{ $type->name }}</option>
        @endforeach
    </select>

    <?php $nations = App\Models\Nation::all() ?>
    <select name="nation_id"><br />

        @foreach($nations as $nation)
        <option value="{{$nation->id}}">{{ $nation->name }}</option>
        @endforeach
    </select>

    <button>Submit</button>
</form>
@endsection