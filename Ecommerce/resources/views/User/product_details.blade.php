<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        body{background-color: #000}.card{border:none}.product{background-color: #eee}.brand{font-size: 13px}.act-price{color:red;font-weight: 700}.dis-price{text-decoration: line-through}.about{font-size: 14px}.color{margin-bottom:10px}label.radio{cursor: pointer}label.radio input{position: absolute;top: 0;left: 0;visibility: hidden;pointer-events: none}label.radio span{padding: 2px 9px;border: 2px solid #ff0000;display: inline-block;color: #ff0000;border-radius: 3px;text-transform: uppercase}label.radio input:checked+span{border-color: #ff0000;background-color: #ff0000;color: #fff}.btn-danger{background-color: #ff0000 !important;border-color: #ff0000 !important}.btn-danger:hover{background-color: #da0606 !important;border-color: #da0606 !important}.btn-danger:focus{box-shadow: none}.cart i{margin-right: 10px}
    </style>
    <script>
        function change_image(image){

            var container = document.getElementById("main-image");

            container.src = image.src;
        }
        document.addEventListener("DOMContentLoaded", function(event) {
        });
    </script>
</head>
<body>

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <img class="img_product" src="{{url('/Product/')}}/{{$product->image }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">title</span>
                                <h5 class="text-uppercase">{{$product->title }}</h5>
                                <div class="price d-flex flex-row align-items-center">
                                    @if($product->discount_price!=null)
                                    <span class="act-price">
                                        {{$product->discount_price}}
                                    </span>
                                    <?php
                                        $a = 100*(1 - $product->discount_price/$product->price);
                                        ?>
                                    <div class="ml-2"> <small class="dis-price">{{$product->price}}</small> <span>{{number_format($a, 0, '.', '')}}% OFF</span> </div>
                                    @else
                                        <span class="act-price">
                                        {{$product->price}}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <p class="about"> {{$product->description }}</p>
                            @if($product->catagory=='Shirt')
                            <div class="sizes mt-5">
                                <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="size" value="XXL"> <span>XXL</span> </label>
                            </div>
                            @endif
                            <form action="{{url('add_cart',$product->id)}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-f">
                                        <input type="number" value="1" name="quan" min="1" max="4" style="width:50px;margin:5px">
                                    </div>
                                    <div class="col-md-f">
                                        <input type="submit" value="Add to card">
                                    </div>

                                </div>
                            </form>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
