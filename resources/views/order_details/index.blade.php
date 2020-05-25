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
        @foreach($order_details as $order_detail)
            <tr>
                <td> {{$order_detail->id}}</td>
                <td> {{$order_detail->name}}</td>
                <td> {{$order_detail->price}}</td>
                <td> {{$order_detail->quantity}}</td>
                <td> {{$order_detail->customer_id}}</td>
                <td> {{$order_detail->order_id}}</td>
                <td> {{$order_detail->product_id}}</td>
                <td> {{$order_detail->total}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
   
</body>
</html>