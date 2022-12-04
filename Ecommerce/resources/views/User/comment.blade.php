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
</head>
<body>
@if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">x</button>
        {{session()->get('message')}}
    </div>
@endif
<div class="hero_area">
    <!-- header section strats -->

    @include('userlay/header')
    <br>
    <br>

    <!-- slider section -->


@include("userlay.comment")
<!-- footer start -->
@include('userlay/footer')
<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2022 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">Ahmed Essam</a>

    </p>
</div>
<script type="text/javascript">
    function reply(caller){
        $('.replyDiv').insertAfter($(caller));
        $('.replyDiv').show();
        document.getElementById('commentId').value=$(caller).attr('data-name');

    }


</script>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
</script>
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
