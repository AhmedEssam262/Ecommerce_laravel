<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css"/>
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet"/>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {background-color: #daecd9;}
        .heading{
            padding-bottom: 50px;
        }
        .foot{
            padding-top: 100px;
        }
        .center{
            text-align: center;
        }
        .total_price{
            font-size: 20px;
            padding: 40px;
        }
    </style>
</head>
<body>
<div class="heading">
    <!-- header section strats -->
    @include('userlay/header')
</div>
@if(session()->has('del_message'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">x</button>
        {{session()->get('del_message')}}
    </div>
@endif
@if(session()->has('paid'))
    <div class="alert alert-success" style="text-align: center">
        <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">x</button>
        {{session()->get('paid')}}
    </div>
@endif
@if(session()->has('pay_message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">x</button>
        {{session()->get('pay_message')}}
    </div>
@endif
{{--
@dd($orders)
--}}
@if(count($orders)<1)
    <div class="center">
        <h1 style="font-size: 40px">No Product found</h1>
        <br>
        <h1><a href="{{route('userHome')}}">click here make your order</a></h1>
    </div>
@else
    <div class="center">
        <table>
            <tr>
                <th>Product title</th>
                <th>Product quantity</th>
                <th>price</th>
                <th>payment status</th>
                <th>delivery status</th>
                <th>image</th>
                <th>action</th>
            </tr>
            @foreach($orders as $c)
                <tr>
                    <td>{{$c->product_title}}</td>
                    <td>{{$c->quantity}}</td>
                    <td>{{$c->price}}</td>
                    <td>{{$c->payment_status}}</td>
                    <td>{{$c->delivery_status}}</td>
                    <td>
                        <img style="width:50px;height: 50px;" src="{{url('/Product/')}}/{{$c->image }}">
                    </td>
                    @if($c->delivery_status == 'proccessing')
                    <td>
                        <a href="{{url('user_order/delete',$c->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure that you wantto  cancel this order?')"
                        >Cancel</a>
                    </td>
                    @else
                        <td>
                            <h1>Not allowed</h1>
                        </td
                    @endif
                </tr>

            @endforeach
        </table>

    </div>

@endif
<!-- footer start -->
<div class="foot">
    @include('userlay/footer')
</div>
<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2022 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">Ahmed Essam</a>

    </p>
</div>
<!-- jQery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
</body>
</html>
