<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 style="font-size: 48px;color: #0c5460;padding: 20px">Order Details</h1>

<h3>Customer Name : {{$order->name}}</h3>
<h3>Customer ID : {{$order->user_id}}</h3>
<h3>Customer Email : {{$order->email}}</h3>
<h3>Customer Phone No. : {{$order->phone}}</h3>
<h3>Customer address : {{$order->address}}</h3>
<hr>
<h3>Product ID : {{$order->product_id}}</h3>
<h3>Product Name : {{$order->product_title}}</h3>
<h3>Product Price : {{$order->price}}</h3>
<h3>Product Quantity : {{$order->quantity}}</h3>
<h3>Payment Status : {{$order->payment_status}}</h3>

<br>
<br>
<img src="Product/{{$order->image}}" style="width: 100px;height: 100px;text-align: center">

</body>
</html>
