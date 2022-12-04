<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style>
        h1{
            text-align: center;
            font-size: 25px;
            font-weight: bold;
        }


        .img_product {
            width: 50px;
            height: 50px;
        }
        td{
            padding: 20px;
        }
        label{
            display: inline-block;
            width: 200px;

        }
        table, td {
            border: 1px solid black;
        }
        th {
            height: 80px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        .container{
            padding-bottom: 20px;
        }
        .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
            border: none;
            outline: none;
            box-shadow: none;
            color: aliceblue;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('adminlay.sidebar')
    <!-- partial -->
    @include('adminlay.navbar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <h1>All orders</h1>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"
                            aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
            @endif

            @if(session()->has('del_message'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert"
                            aria-hidden="true">x</button>
                    {{session()->get('del_message')}}
                </div>
            @endif
            <div class="container">
                <br/>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <form class="card card-sm" method="get" action="{{url('order/search')}}">
                            @csrf
                            <div class="card-body row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="fas fa-search h4 text-body"></i>
                                </div>
                                <!--end of col-->
                                <div class="col">
                                    <input class="form-control form-control-lg form-control-borderless" name="search" placeholder="Search topics or keywords">
                                </div>
                                <!--end of col-->
                                <div class="col-auto">
                                    <button class="btn btn-lg btn-success" type="submit">Search</button>
                                </div>
                                <!--end of col-->
                            </div>
                        </form>
                    </div>
                    <!--end of col-->
                </div>
            </div>            <div style="overflow-x: auto;">
                <table>
                    <thead style="color: #0c5460;background-color: #2caae1">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email </th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Product Title</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Delivery Status</th>
                        <th scope="col" style="padding: 15px">Image </th>
                        <th scope="col">Delivered </th>
                        <th scope="col">PDF</th>
                        <th scope="col">Send Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as  $order)
                        <tr style="border: #0000cc;background-color: #1f2937">
                            <th scope="row">{{$order->name}}</th>
                            <th scope="row">{{$order->email}}</th>
                            <td>{{$order->address}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->product_title}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->price}}</td>
                            <td>{{$order->payment_status}}</td>
                            <td>{{$order->delivery_status}}</td>
                            <td>
                                <img src="Product/{{$order->image}}" class="img_product">
                            </td>
                            <td>
                                @if($order->delivery_status=='proccessing')

                                    <a href="{{url('order/delivered',$order->id)}}" class="btn btn-success">Delivered</a>
                            <td>
                                <a href="{{url('order/create_pdf',$order->id)}}" class="btn btn-secondary">PDF file</a>
                            </td>
                            <td>
                                <a href="{{url('order/send_email',$order->id)}}" class="btn btn-secondary">Send Email</a>
                            </td>

                            @else
                                <h1 style="color: green">Delivered</h1>
                                <td>
                                    <a href="{{url('order/send_email',$order->id)}}" class="btn btn-secondary">Send Email</a>
                                </td>

                                <td>
                                    <a href="{{url('order/create_pdf',$order->id)}}" class="btn btn-secondary">PDF file</a>
                                </td>
                                @endif
                                </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!-- main-panel ends -->
<!-- page-body-wrapper ends -->
<!-- container-scroller -->
<!-- plugins:js -->
<script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
<script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="admin/assets/js/off-canvas.js"></script>
<script src="admin/assets/js/hoverable-collapse.js"></script>
<script src="admin/assets/js/misc.js"></script>
<script src="admin/assets/js/settings.js"></script>
<script src="admin/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="admin/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->

</body>
</html>
