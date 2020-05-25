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
        @foreach($nations as $nation)
            <tr>
                <td> {{$nation->id}}</td>
                <td> {{$nation->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
   
</body>
</html>