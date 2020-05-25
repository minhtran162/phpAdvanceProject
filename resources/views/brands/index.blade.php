<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tbody>
        @foreach($brands as $brand)
            <tr>
                <td> {{$brand->id}}</td>
                <td> {{$brand->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
   
</body>
</html>