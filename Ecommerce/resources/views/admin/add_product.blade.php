{{--<x-app-layout>
</x-app-layout>--}}
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
            position: relative;
            left: 25%;
            padding-top: 30px;
        }
        .input_cat{
            color: black;
        }
        .cat{
            padding-bottom: 15px;
        }
        label{
            display: inline-block;
            width: 200px;
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
            <div class="div_center">
                <h1 style="font-size: 48px;padding-bottom: 40px">Add Category</h1>
                {{--
                                form creation
                --}}
                <form action="{{ route('submit_product','$product-<id') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="cat">
                        <label>Product Title</label>
                        <input class="input_cat" type="text" name="title" placeholder="Enter title" required="">
                    </div>

                    <div class="cat">
                        <label>Product Description</label>
                        <input class="input_cat" type="text" name="description" placeholder="Enter description" required="">
                    </div>

                    <div class="cat">
                        <label>Product quantity</label>
                        <input class="input_cat" type="text" name="quantity" placeholder="Enter quantity" required="">
                    </div>

                    <div class="cat">
                        <label>Product category</label>
                        <select class="input_cat" style="width: 200px"  name="catagory">
                            <option value="" selected="" class="input_cat">none</option>

                        @foreach($category as $c)
                            <option value="{{$c->category_name}}" class="input_cat">{{$c->category_name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="cat">
                        <label>Product price</label>
                        <input class="input_cat" type="text" name="price" placeholder="Enter price" required="">
                    </div>

                    <div class="cat">
                        <label>Product discount price</label>
                        <input class="input_cat" type="text" name="discount_price" placeholder="Enter discount price" required="">
                    </div>

                    <div class="cat">
                        <label>Image</label>
                        <input  type="file" name="image" placeholder="Enter quantity" required="">
                    </div>
                    <button type="submit "  class="btn btn-primary"  name="submit">Add product</button>

                </form>
                <hr><br><br><br><br>
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Category</th>
                        <th scope="col">title </th>
                        <th scope="col">description</th>
                        <th scope="col">quantity</th>
                        <th scope="col">price</th>
                        <th scope="col">discount_price</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
        </div>
    </footer>
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
