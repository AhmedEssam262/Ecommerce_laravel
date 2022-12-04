<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- plugins:css -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        .div_center{
            text-align: center;
            position: relative;
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
<div>
    <div >
        <div>

            <div class="div_center">
                <h1 style="font-size: 48px;padding-bottom: 40px">Edit Products</h1>

                <form action="{{ url('/submit_update_product',$product->id )}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="cat">
                        <label>Product Title</label>
                        <input class="input_cat" value="{{$product->title}}" type="text" name="title" placeholder="Enter title" required="">
                    </div>

                    <div class="cat">
                        <label>Product Description</label>
                        <input class="input_cat" type="text" value="{{$product->description}}" name="description" placeholder="Enter description" required="">
                    </div>

                    <div class="cat">
                        <label>Product quantity</label>
                        <input class="input_cat" type="text" value="{{$product->quantity}}" name="quantity" placeholder="Enter quantity" required="">
                    </div>

                    <div class="cat">
                        <label>Product category</label>
                        <select class="input_cat" style="width: 200px"  name="catagory">
                            <option value="{{$product->category}}" selected="" class="input_cat">none</option>
                            @foreach($category as $c)
                                <option value="{{$c->category_name}}" class="input_cat">{{$c->category_name}}</option>@endforeach
                        </select>
                    </div>
                    <div class="cat">
                        <label>Product price</label>
                        <input class="input_cat" value="{{$product->price}}" type="text" name="price" placeholder="Enter price" required="">
                    </div>

                    <div class="cat">
                        <label>Product discount price</label>
                        <input class="input_cat" value="{{$product->discount_price}}" type="text" name="discount_price" placeholder="Enter discount price" required="">
                    </div>
<br><br><br>
                    <div class="cat">
                        <label>Current Product Image :</label>
                        <img style="width:100px;height: 100px; position: relative;left: 47%" src="{{url('/Product/')}}/{{$product->image }}">
                    </div>

                    <div class="cat">
                        <label>Image</label>
                        <input  type="file" name="image"  value="{{$product->image}}" placeholder="Enter quantity" required="">
                    </div>
                    <button type="submit "  class="btn btn-primary"  name="submit">Add product</button>
                </form>
                <br>
                <br>
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

<!-- End custom js for this page -->
</body>
</html>
