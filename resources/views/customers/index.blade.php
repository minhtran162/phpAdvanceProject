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
        @foreach($customers as $customer)
            <tr>
                <td> {{$customer->id}}</td>
                <td> {{$customer->name}}</td>
                <td> {{$customer->email}}</td>
                <td> {{$customer->birthday}}</td>
                <td> {{$customer->address}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
   
</body>
</html>