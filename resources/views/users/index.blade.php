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
            @foreach($users as $user)
            <tr>
                <td> {{$user->id}}</td>
                <td> {{$user->username}}</td>
                <td> {{$user->email}}</td>
                <td> {{$user->password}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>