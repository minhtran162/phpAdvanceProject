<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand</title>
</head>
<body>
<form method="post" action="{{ route('users.store') }}">
        {{ csrf_field() }}
        <label>{{ trans('user.label.username') }}</label><br/>
        <input name="name"><br/>
        @if ($errors->has('username'))                
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong><br/>
            </span>
        @endif

        <label>{{ trans('user.label.email') }}</label><br/>
        <input name="email"><br/>
        @if ($errors->has('email'))                
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong><br/>
            </span>
        @endif


        <label>{{ trans('user.label.password') }}</label><br/>
        <input name="password"><br/>
        @if ($errors->has('password'))                
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong><br/>
            </span>
        @endif

       

        <button>Submit</button>
    </form>

</body>
</html>