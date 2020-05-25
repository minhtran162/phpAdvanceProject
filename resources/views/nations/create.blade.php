<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nation</title>
</head>
<body>
    <form method="post" action="{{ route('nations.store') }}">
        {{ csrf_field() }}
        <label>{{ trans('nation.label.name') }}</label><br/>
        <input name="name"><br/>
        @if ($errors->has('name'))                
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong><br/>
            </span>
        @endif


        <button>Submit</button>
    </form>

</body>
</html>