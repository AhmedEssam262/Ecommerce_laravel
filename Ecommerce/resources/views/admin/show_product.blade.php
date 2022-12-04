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
        .div_center{
            text-align: center;
            padding-top: 30px;
        }

        .img_product {
            width: 100%;
            height: 150px;
        }
        td{
            padding: 20px;
        }

        th{
            height: 50px;
        }
        .form-control-borderless {
            border: none;
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

                <table>

                    <thead style="color: #0c5460;background-color: #2caae1">
                    <tr>
                        <th scope="col">Category</th>
                        <th scope="col">title </th>
                        <th scope="col">description</th>
                        <th scope="col">quantity</th>
                        <th scope="col">price</th>
                        <th scope="col">discount_price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_data2 as  $data)
                        <tr style="border: #0000cc;background-color: #1f2937">
                            <th scope="row">{{$data->catagory}}</th>
                            <th scope="row">{{$data->title}}</th>
                            <td>{{$data->description}}</td>
                            <td>{{$data->quantity}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->discount_price}}</td>
                            <td>
                                <img src="Product/{{$data->image}}" class="img_product">
                            </img>
                            </td>
                            <td>
                                <a href="{{url('show_product/update',$data->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <a href="{{url('show_product/delete',$data->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
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
