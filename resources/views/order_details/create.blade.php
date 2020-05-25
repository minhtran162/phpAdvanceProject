<!DOCTYPE html>
<html lang="en">
<title>order_detail</title>
</head>
<body>
    <form method="post" action="{{ route('order_details.store') }}">
        <!-- {{ csrf_field() }}
        <label>{{ trans('order_detail.label.name') }}</label><br/>
        <input name="name"><br/>
        @if ($errors->has('name'))                
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('order_detail.label.price') }}</label><br/>
        <input name="price"><br/>
        @if ($errors->has('price'))                
            <span class="help-block">
                <strong>{{ $errors->first('price') }}</strong><br/>
            </span>
        @endif


        <label>{{ trans('order_detail.label.quantity') }}</label><br/>
        <input name="quantity"><br/>
        @if ($errors->has('quantity'))                
            <span class="help-block">
                <strong>{{ $errors->first('quantity') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('order_detail.label.customer_id') }}</label><br/>
        <input name="customer_id"><br/>
        @if ($errors->has('customer_id'))                
            <span class="help-block">
                <strong>{{ $errors->first('customer_id') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('order_detail.label.order_id') }}</label><br/>
        <input name="order_id"><br/>
        @if ($errors->has('order_id'))                
            <span class="help-block">
                <strong>{{ $errors->first('order_id') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('order_detail.label.product_id') }}</label><br/>
        <input name="product_id"><br/>
        @if ($errors->has('product_id'))                
            <span class="help-block">
                <strong>{{ $errors->first('product_id') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('order_detail.label.total') }}</label><br/>
        <input name="total"><br/>
        @if ($errors->has('total'))                
            <span class="help-block">
                <strong>{{ $errors->first('total') }}</strong><br/>
            </span>
        @endif

       

        <button>Submit</button> -->
    </form>

</body>
</html>