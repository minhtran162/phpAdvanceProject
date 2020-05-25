<!DOCTYPE html>
<html lang="en">
<title>Customer</title>
</head>
<body>
    <form method="post" action="{{ route('customers.store') }}">
        {{ csrf_field() }}
        <label>{{ trans('customer.label.name') }}</label><br/>
        <input name="name"><br/>
        @if ($errors->has('name'))                
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('customer.label.email') }}</label><br/>
        <input name="email"><br/>
        @if ($errors->has('email'))                
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong><br/>
            </span>
        @endif


        <label>{{ trans('customer.label.birthday') }}</label><br/>
        <input name="birthday"><br/>
        @if ($errors->has('birthday'))                
            <span class="help-block">
                <strong>{{ $errors->first('birthday') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('customer.label.address') }}</label><br/>
        <input name="address"><br/>
        @if ($errors->has('address'))                
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong><br/>
            </span>
        @endif

       

        <button>Submit</button>
    </form>

</body>
</html>