<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('/admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('/admin/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href={{asset('"admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet href="{{asset('admin/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}" />
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

        @-moz-keyframes flash {
            0% {
                opacity: 1; }
            25% {
                opacity: 0; }
            50% {
                opacity: 1; }
            75% {
                opacity: 0; }
            100% {
                opacity: 1; } }

        @-webkit-keyframes flash {
            0% {
                opacity: 1; }
            25% {
                opacity: 0; }
            50% {
                opacity: 1; }
            75% {
                opacity: 0; }
            100% {
                opacity: 1; } }

        @-o-keyframes flash {
            0% {
                opacity: 1; }
            25% {
                opacity: 0; }
            50% {
                opacity: 1; }
            75% {
                opacity: 0; }
            100% {
                opacity: 1; } }

        @-ms-keyframes flash {
            0% {
                opacity: 1; }
            25% {
                opacity: 0; }
            50% {
                opacity: 1; }
            75% {
                opacity: 0; }
            100% {
                opacity: 1; } }

        @keyframes flash {
            0% {
                opacity: 1; }
            25% {
                opacity: 0; }
            50% {
                opacity: 1; }
            75% {
                opacity: 0; }
            100% {
                opacity: 1; } }

        @-moz-keyframes bounce {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            40% {
                -webkit-transform: translateY(-30px);
                -moz-transform: translateY(-30px);
                -ms-transform: translateY(-30px);
                -o-transform: translateY(-30px);
                transform: translateY(-30px); }
            50% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            60% {
                -webkit-transform: translateY(-15px);
                -moz-transform: translateY(-15px);
                -ms-transform: translateY(-15px);
                -o-transform: translateY(-15px);
                transform: translateY(-15px); }
            80% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-webkit-keyframes bounce {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            40% {
                -webkit-transform: translateY(-30px);
                -moz-transform: translateY(-30px);
                -ms-transform: translateY(-30px);
                -o-transform: translateY(-30px);
                transform: translateY(-30px); }
            50% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            60% {
                -webkit-transform: translateY(-15px);
                -moz-transform: translateY(-15px);
                -ms-transform: translateY(-15px);
                -o-transform: translateY(-15px);
                transform: translateY(-15px); }
            80% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-o-keyframes bounce {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            40% {
                -webkit-transform: translateY(-30px);
                -moz-transform: translateY(-30px);
                -ms-transform: translateY(-30px);
                -o-transform: translateY(-30px);
                transform: translateY(-30px); }
            50% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            60% {
                -webkit-transform: translateY(-15px);
                -moz-transform: translateY(-15px);
                -ms-transform: translateY(-15px);
                -o-transform: translateY(-15px);
                transform: translateY(-15px); }
            80% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-ms-keyframes bounce {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            40% {
                -webkit-transform: translateY(-30px);
                -moz-transform: translateY(-30px);
                -ms-transform: translateY(-30px);
                -o-transform: translateY(-30px);
                transform: translateY(-30px); }
            50% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            60% {
                -webkit-transform: translateY(-15px);
                -moz-transform: translateY(-15px);
                -ms-transform: translateY(-15px);
                -o-transform: translateY(-15px);
                transform: translateY(-15px); }
            80% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @keyframes bounce {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            40% {
                -webkit-transform: translateY(-30px);
                -moz-transform: translateY(-30px);
                -ms-transform: translateY(-30px);
                -o-transform: translateY(-30px);
                transform: translateY(-30px); }
            50% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            60% {
                -webkit-transform: translateY(-15px);
                -moz-transform: translateY(-15px);
                -ms-transform: translateY(-15px);
                -o-transform: translateY(-15px);
                transform: translateY(-15px); }
            80% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-moz-keyframes shake {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            10% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            20% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            30% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            40% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            50% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            60% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            70% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            80% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            90% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-webkit-keyframes shake {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            10% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            20% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            30% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            40% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            50% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            60% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            70% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            80% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            90% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-o-keyframes shake {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            10% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            20% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            30% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            40% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            50% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            60% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            70% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            80% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            90% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-ms-keyframes shake {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            10% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            20% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            30% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            40% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            50% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            60% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            70% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            80% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            90% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @keyframes shake {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            10% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            20% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            30% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            40% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            50% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            60% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            70% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            80% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            90% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-moz-keyframes tada {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            10% {
                -webkit-transform: scale(0.9) rotate(-3deg);
                -moz-transform: scale(0.9) rotate(-3deg);
                -ms-transform: scale(0.9) rotate(-3deg);
                -o-transform: scale(0.9) rotate(-3deg);
                transform: scale(0.9) rotate(-3deg); }
            20% {
                -webkit-transform: scale(0.9) rotate(-3deg);
                -moz-transform: scale(0.9) rotate(-3deg);
                -ms-transform: scale(0.9) rotate(-3deg);
                -o-transform: scale(0.9) rotate(-3deg);
                transform: scale(0.9) rotate(-3deg); }
            30% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            40% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            50% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            60% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            70% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            80% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            90% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            100% {
                -webkit-transform: scale(1) rotate(0);
                -moz-transform: scale(1) rotate(0);
                -ms-transform: scale(1) rotate(0);
                -o-transform: scale(1) rotate(0);
                transform: scale(1) rotate(0); } }

        @-webkit-keyframes tada {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            10% {
                -webkit-transform: scale(0.9) rotate(-3deg);
                -moz-transform: scale(0.9) rotate(-3deg);
                -ms-transform: scale(0.9) rotate(-3deg);
                -o-transform: scale(0.9) rotate(-3deg);
                transform: scale(0.9) rotate(-3deg); }
            20% {
                -webkit-transform: scale(0.9) rotate(-3deg);
                -moz-transform: scale(0.9) rotate(-3deg);
                -ms-transform: scale(0.9) rotate(-3deg);
                -o-transform: scale(0.9) rotate(-3deg);
                transform: scale(0.9) rotate(-3deg); }
            30% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            40% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            50% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            60% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            70% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            80% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            90% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            100% {
                -webkit-transform: scale(1) rotate(0);
                -moz-transform: scale(1) rotate(0);
                -ms-transform: scale(1) rotate(0);
                -o-transform: scale(1) rotate(0);
                transform: scale(1) rotate(0); } }

        @-o-keyframes tada {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            10% {
                -webkit-transform: scale(0.9) rotate(-3deg);
                -moz-transform: scale(0.9) rotate(-3deg);
                -ms-transform: scale(0.9) rotate(-3deg);
                -o-transform: scale(0.9) rotate(-3deg);
                transform: scale(0.9) rotate(-3deg); }
            20% {
                -webkit-transform: scale(0.9) rotate(-3deg);
                -moz-transform: scale(0.9) rotate(-3deg);
                -ms-transform: scale(0.9) rotate(-3deg);
                -o-transform: scale(0.9) rotate(-3deg);
                transform: scale(0.9) rotate(-3deg); }
            30% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            40% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            50% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            60% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            70% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            80% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            90% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            100% {
                -webkit-transform: scale(1) rotate(0);
                -moz-transform: scale(1) rotate(0);
                -ms-transform: scale(1) rotate(0);
                -o-transform: scale(1) rotate(0);
                transform: scale(1) rotate(0); } }

        @-ms-keyframes tada {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            10% {
                -webkit-transform: scale(0.9) rotate(-3deg);
                -moz-transform: scale(0.9) rotate(-3deg);
                -ms-transform: scale(0.9) rotate(-3deg);
                -o-transform: scale(0.9) rotate(-3deg);
                transform: scale(0.9) rotate(-3deg); }
            20% {
                -webkit-transform: scale(0.9) rotate(-3deg);
                -moz-transform: scale(0.9) rotate(-3deg);
                -ms-transform: scale(0.9) rotate(-3deg);
                -o-transform: scale(0.9) rotate(-3deg);
                transform: scale(0.9) rotate(-3deg); }
            30% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            40% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            50% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            60% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            70% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            80% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            90% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            100% {
                -webkit-transform: scale(1) rotate(0);
                -moz-transform: scale(1) rotate(0);
                -ms-transform: scale(1) rotate(0);
                -o-transform: scale(1) rotate(0);
                transform: scale(1) rotate(0); } }

        @keyframes tada {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            10% {
                -webkit-transform: scale(0.9) rotate(-3deg);
                -moz-transform: scale(0.9) rotate(-3deg);
                -ms-transform: scale(0.9) rotate(-3deg);
                -o-transform: scale(0.9) rotate(-3deg);
                transform: scale(0.9) rotate(-3deg); }
            20% {
                -webkit-transform: scale(0.9) rotate(-3deg);
                -moz-transform: scale(0.9) rotate(-3deg);
                -ms-transform: scale(0.9) rotate(-3deg);
                -o-transform: scale(0.9) rotate(-3deg);
                transform: scale(0.9) rotate(-3deg); }
            30% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            40% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            50% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            60% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            70% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            80% {
                -webkit-transform: scale(1.1) rotate(-3deg);
                -moz-transform: scale(1.1) rotate(-3deg);
                -ms-transform: scale(1.1) rotate(-3deg);
                -o-transform: scale(1.1) rotate(-3deg);
                transform: scale(1.1) rotate(-3deg); }
            90% {
                -webkit-transform: scale(1.1) rotate(3deg);
                -moz-transform: scale(1.1) rotate(3deg);
                -ms-transform: scale(1.1) rotate(3deg);
                -o-transform: scale(1.1) rotate(3deg);
                transform: scale(1.1) rotate(3deg); }
            100% {
                -webkit-transform: scale(1) rotate(0);
                -moz-transform: scale(1) rotate(0);
                -ms-transform: scale(1) rotate(0);
                -o-transform: scale(1) rotate(0);
                transform: scale(1) rotate(0); } }

        @-moz-keyframes swing {
            20%, 40%, 60%, 80%, 100% {
                -webkit-transform-origin: top center 50%;
                -moz-transform-origin: top center 50%;
                -ms-transform-origin: top center 50%;
                -o-transform-origin: top center 50%;
                transform-origin: top center 50%; }
            20% {
                -webkit-transform: rotate(15deg);
                -moz-transform: rotate(15deg);
                -ms-transform: rotate(15deg);
                -o-transform: rotate(15deg);
                transform: rotate(15deg); }
            40% {
                -webkit-transform: rotate(-10deg);
                -moz-transform: rotate(-10deg);
                -ms-transform: rotate(-10deg);
                -o-transform: rotate(-10deg);
                transform: rotate(-10deg); }
            60% {
                -webkit-transform: rotate(5deg);
                -moz-transform: rotate(5deg);
                -ms-transform: rotate(5deg);
                -o-transform: rotate(5deg);
                transform: rotate(5deg); }
            80% {
                -webkit-transform: rotate(-5deg);
                -moz-transform: rotate(-5deg);
                -ms-transform: rotate(-5deg);
                -o-transform: rotate(-5deg);
                transform: rotate(-5deg); }
            100% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg); } }

        @-webkit-keyframes swing {
            20%, 40%, 60%, 80%, 100% {
                -webkit-transform-origin: top center 50%;
                -moz-transform-origin: top center 50%;
                -ms-transform-origin: top center 50%;
                -o-transform-origin: top center 50%;
                transform-origin: top center 50%; }
            20% {
                -webkit-transform: rotate(15deg);
                -moz-transform: rotate(15deg);
                -ms-transform: rotate(15deg);
                -o-transform: rotate(15deg);
                transform: rotate(15deg); }
            40% {
                -webkit-transform: rotate(-10deg);
                -moz-transform: rotate(-10deg);
                -ms-transform: rotate(-10deg);
                -o-transform: rotate(-10deg);
                transform: rotate(-10deg); }
            60% {
                -webkit-transform: rotate(5deg);
                -moz-transform: rotate(5deg);
                -ms-transform: rotate(5deg);
                -o-transform: rotate(5deg);
                transform: rotate(5deg); }
            80% {
                -webkit-transform: rotate(-5deg);
                -moz-transform: rotate(-5deg);
                -ms-transform: rotate(-5deg);
                -o-transform: rotate(-5deg);
                transform: rotate(-5deg); }
            100% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg); } }

        @-o-keyframes swing {
            20%, 40%, 60%, 80%, 100% {
                -webkit-transform-origin: top center 50%;
                -moz-transform-origin: top center 50%;
                -ms-transform-origin: top center 50%;
                -o-transform-origin: top center 50%;
                transform-origin: top center 50%; }
            20% {
                -webkit-transform: rotate(15deg);
                -moz-transform: rotate(15deg);
                -ms-transform: rotate(15deg);
                -o-transform: rotate(15deg);
                transform: rotate(15deg); }
            40% {
                -webkit-transform: rotate(-10deg);
                -moz-transform: rotate(-10deg);
                -ms-transform: rotate(-10deg);
                -o-transform: rotate(-10deg);
                transform: rotate(-10deg); }
            60% {
                -webkit-transform: rotate(5deg);
                -moz-transform: rotate(5deg);
                -ms-transform: rotate(5deg);
                -o-transform: rotate(5deg);
                transform: rotate(5deg); }
            80% {
                -webkit-transform: rotate(-5deg);
                -moz-transform: rotate(-5deg);
                -ms-transform: rotate(-5deg);
                -o-transform: rotate(-5deg);
                transform: rotate(-5deg); }
            100% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg); } }

        @-ms-keyframes swing {
            20%, 40%, 60%, 80%, 100% {
                -webkit-transform-origin: top center 50%;
                -moz-transform-origin: top center 50%;
                -ms-transform-origin: top center 50%;
                -o-transform-origin: top center 50%;
                transform-origin: top center 50%; }
            20% {
                -webkit-transform: rotate(15deg);
                -moz-transform: rotate(15deg);
                -ms-transform: rotate(15deg);
                -o-transform: rotate(15deg);
                transform: rotate(15deg); }
            40% {
                -webkit-transform: rotate(-10deg);
                -moz-transform: rotate(-10deg);
                -ms-transform: rotate(-10deg);
                -o-transform: rotate(-10deg);
                transform: rotate(-10deg); }
            60% {
                -webkit-transform: rotate(5deg);
                -moz-transform: rotate(5deg);
                -ms-transform: rotate(5deg);
                -o-transform: rotate(5deg);
                transform: rotate(5deg); }
            80% {
                -webkit-transform: rotate(-5deg);
                -moz-transform: rotate(-5deg);
                -ms-transform: rotate(-5deg);
                -o-transform: rotate(-5deg);
                transform: rotate(-5deg); }
            100% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg); } }

        @keyframes swing {
            20%, 40%, 60%, 80%, 100% {
                -webkit-transform-origin: top center 50%;
                -moz-transform-origin: top center 50%;
                -ms-transform-origin: top center 50%;
                -o-transform-origin: top center 50%;
                transform-origin: top center 50%; }
            20% {
                -webkit-transform: rotate(15deg);
                -moz-transform: rotate(15deg);
                -ms-transform: rotate(15deg);
                -o-transform: rotate(15deg);
                transform: rotate(15deg); }
            40% {
                -webkit-transform: rotate(-10deg);
                -moz-transform: rotate(-10deg);
                -ms-transform: rotate(-10deg);
                -o-transform: rotate(-10deg);
                transform: rotate(-10deg); }
            60% {
                -webkit-transform: rotate(5deg);
                -moz-transform: rotate(5deg);
                -ms-transform: rotate(5deg);
                -o-transform: rotate(5deg);
                transform: rotate(5deg); }
            80% {
                -webkit-transform: rotate(-5deg);
                -moz-transform: rotate(-5deg);
                -ms-transform: rotate(-5deg);
                -o-transform: rotate(-5deg);
                transform: rotate(-5deg); }
            100% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg); } }

        @-moz-keyframes wobble {
            0% {
                -webkit-transform: translateX(0%);
                -moz-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                transform: translateX(0%); }
            15% {
                -webkit-transform: translateX(-25%) rotate(-5deg);
                -moz-transform: translateX(-25%) rotate(-5deg);
                -ms-transform: translateX(-25%) rotate(-5deg);
                -o-transform: translateX(-25%) rotate(-5deg);
                transform: translateX(-25%) rotate(-5deg); }
            30% {
                -webkit-transform: translateX(20%) rotate(3deg);
                -moz-transform: translateX(20%) rotate(3deg);
                -ms-transform: translateX(20%) rotate(3deg);
                -o-transform: translateX(20%) rotate(3deg);
                transform: translateX(20%) rotate(3deg); }
            45% {
                -webkit-transform: translateX(-15%) rotate(-3deg);
                -moz-transform: translateX(-15%) rotate(-3deg);
                -ms-transform: translateX(-15%) rotate(-3deg);
                -o-transform: translateX(-15%) rotate(-3deg);
                transform: translateX(-15%) rotate(-3deg); }
            60% {
                -webkit-transform: translateX(10%) rotate(2deg);
                -moz-transform: translateX(10%) rotate(2deg);
                -ms-transform: translateX(10%) rotate(2deg);
                -o-transform: translateX(10%) rotate(2deg);
                transform: translateX(10%) rotate(2deg); }
            75% {
                -webkit-transform: translateX(-5%) rotate(-1deg);
                -moz-transform: translateX(-5%) rotate(-1deg);
                -ms-transform: translateX(-5%) rotate(-1deg);
                -o-transform: translateX(-5%) rotate(-1deg);
                transform: translateX(-5%) rotate(-1deg); }
            100% {
                -webkit-transform: translateX(0%);
                -moz-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                transform: translateX(0%); } }

        @-webkit-keyframes wobble {
            0% {
                -webkit-transform: translateX(0%);
                -moz-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                transform: translateX(0%); }
            15% {
                -webkit-transform: translateX(-25%) rotate(-5deg);
                -moz-transform: translateX(-25%) rotate(-5deg);
                -ms-transform: translateX(-25%) rotate(-5deg);
                -o-transform: translateX(-25%) rotate(-5deg);
                transform: translateX(-25%) rotate(-5deg); }
            30% {
                -webkit-transform: translateX(20%) rotate(3deg);
                -moz-transform: translateX(20%) rotate(3deg);
                -ms-transform: translateX(20%) rotate(3deg);
                -o-transform: translateX(20%) rotate(3deg);
                transform: translateX(20%) rotate(3deg); }
            45% {
                -webkit-transform: translateX(-15%) rotate(-3deg);
                -moz-transform: translateX(-15%) rotate(-3deg);
                -ms-transform: translateX(-15%) rotate(-3deg);
                -o-transform: translateX(-15%) rotate(-3deg);
                transform: translateX(-15%) rotate(-3deg); }
            60% {
                -webkit-transform: translateX(10%) rotate(2deg);
                -moz-transform: translateX(10%) rotate(2deg);
                -ms-transform: translateX(10%) rotate(2deg);
                -o-transform: translateX(10%) rotate(2deg);
                transform: translateX(10%) rotate(2deg); }
            75% {
                -webkit-transform: translateX(-5%) rotate(-1deg);
                -moz-transform: translateX(-5%) rotate(-1deg);
                -ms-transform: translateX(-5%) rotate(-1deg);
                -o-transform: translateX(-5%) rotate(-1deg);
                transform: translateX(-5%) rotate(-1deg); }
            100% {
                -webkit-transform: translateX(0%);
                -moz-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                transform: translateX(0%); } }

        @-o-keyframes wobble {
            0% {
                -webkit-transform: translateX(0%);
                -moz-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                transform: translateX(0%); }
            15% {
                -webkit-transform: translateX(-25%) rotate(-5deg);
                -moz-transform: translateX(-25%) rotate(-5deg);
                -ms-transform: translateX(-25%) rotate(-5deg);
                -o-transform: translateX(-25%) rotate(-5deg);
                transform: translateX(-25%) rotate(-5deg); }
            30% {
                -webkit-transform: translateX(20%) rotate(3deg);
                -moz-transform: translateX(20%) rotate(3deg);
                -ms-transform: translateX(20%) rotate(3deg);
                -o-transform: translateX(20%) rotate(3deg);
                transform: translateX(20%) rotate(3deg); }
            45% {
                -webkit-transform: translateX(-15%) rotate(-3deg);
                -moz-transform: translateX(-15%) rotate(-3deg);
                -ms-transform: translateX(-15%) rotate(-3deg);
                -o-transform: translateX(-15%) rotate(-3deg);
                transform: translateX(-15%) rotate(-3deg); }
            60% {
                -webkit-transform: translateX(10%) rotate(2deg);
                -moz-transform: translateX(10%) rotate(2deg);
                -ms-transform: translateX(10%) rotate(2deg);
                -o-transform: translateX(10%) rotate(2deg);
                transform: translateX(10%) rotate(2deg); }
            75% {
                -webkit-transform: translateX(-5%) rotate(-1deg);
                -moz-transform: translateX(-5%) rotate(-1deg);
                -ms-transform: translateX(-5%) rotate(-1deg);
                -o-transform: translateX(-5%) rotate(-1deg);
                transform: translateX(-5%) rotate(-1deg); }
            100% {
                -webkit-transform: translateX(0%);
                -moz-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                transform: translateX(0%); } }

        @-ms-keyframes wobble {
            0% {
                -webkit-transform: translateX(0%);
                -moz-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                transform: translateX(0%); }
            15% {
                -webkit-transform: translateX(-25%) rotate(-5deg);
                -moz-transform: translateX(-25%) rotate(-5deg);
                -ms-transform: translateX(-25%) rotate(-5deg);
                -o-transform: translateX(-25%) rotate(-5deg);
                transform: translateX(-25%) rotate(-5deg); }
            30% {
                -webkit-transform: translateX(20%) rotate(3deg);
                -moz-transform: translateX(20%) rotate(3deg);
                -ms-transform: translateX(20%) rotate(3deg);
                -o-transform: translateX(20%) rotate(3deg);
                transform: translateX(20%) rotate(3deg); }
            45% {
                -webkit-transform: translateX(-15%) rotate(-3deg);
                -moz-transform: translateX(-15%) rotate(-3deg);
                -ms-transform: translateX(-15%) rotate(-3deg);
                -o-transform: translateX(-15%) rotate(-3deg);
                transform: translateX(-15%) rotate(-3deg); }
            60% {
                -webkit-transform: translateX(10%) rotate(2deg);
                -moz-transform: translateX(10%) rotate(2deg);
                -ms-transform: translateX(10%) rotate(2deg);
                -o-transform: translateX(10%) rotate(2deg);
                transform: translateX(10%) rotate(2deg); }
            75% {
                -webkit-transform: translateX(-5%) rotate(-1deg);
                -moz-transform: translateX(-5%) rotate(-1deg);
                -ms-transform: translateX(-5%) rotate(-1deg);
                -o-transform: translateX(-5%) rotate(-1deg);
                transform: translateX(-5%) rotate(-1deg); }
            100% {
                -webkit-transform: translateX(0%);
                -moz-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                transform: translateX(0%); } }

        @keyframes wobble {
            0% {
                -webkit-transform: translateX(0%);
                -moz-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                transform: translateX(0%); }
            15% {
                -webkit-transform: translateX(-25%) rotate(-5deg);
                -moz-transform: translateX(-25%) rotate(-5deg);
                -ms-transform: translateX(-25%) rotate(-5deg);
                -o-transform: translateX(-25%) rotate(-5deg);
                transform: translateX(-25%) rotate(-5deg); }
            30% {
                -webkit-transform: translateX(20%) rotate(3deg);
                -moz-transform: translateX(20%) rotate(3deg);
                -ms-transform: translateX(20%) rotate(3deg);
                -o-transform: translateX(20%) rotate(3deg);
                transform: translateX(20%) rotate(3deg); }
            45% {
                -webkit-transform: translateX(-15%) rotate(-3deg);
                -moz-transform: translateX(-15%) rotate(-3deg);
                -ms-transform: translateX(-15%) rotate(-3deg);
                -o-transform: translateX(-15%) rotate(-3deg);
                transform: translateX(-15%) rotate(-3deg); }
            60% {
                -webkit-transform: translateX(10%) rotate(2deg);
                -moz-transform: translateX(10%) rotate(2deg);
                -ms-transform: translateX(10%) rotate(2deg);
                -o-transform: translateX(10%) rotate(2deg);
                transform: translateX(10%) rotate(2deg); }
            75% {
                -webkit-transform: translateX(-5%) rotate(-1deg);
                -moz-transform: translateX(-5%) rotate(-1deg);
                -ms-transform: translateX(-5%) rotate(-1deg);
                -o-transform: translateX(-5%) rotate(-1deg);
                transform: translateX(-5%) rotate(-1deg); }
            100% {
                -webkit-transform: translateX(0%);
                -moz-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                transform: translateX(0%); } }

        @-moz-keyframes pulse {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            50% {
                -webkit-transform: scale(1.1, 1.1);
                -moz-transform: scale(1.1, 1.1);
                -ms-transform: scale(1.1, 1.1);
                -o-transform: scale(1.1, 1.1);
                transform: scale(1.1, 1.1); }
            100% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); } }

        @-webkit-keyframes pulse {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            50% {
                -webkit-transform: scale(1.1, 1.1);
                -moz-transform: scale(1.1, 1.1);
                -ms-transform: scale(1.1, 1.1);
                -o-transform: scale(1.1, 1.1);
                transform: scale(1.1, 1.1); }
            100% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); } }

        @-o-keyframes pulse {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            50% {
                -webkit-transform: scale(1.1, 1.1);
                -moz-transform: scale(1.1, 1.1);
                -ms-transform: scale(1.1, 1.1);
                -o-transform: scale(1.1, 1.1);
                transform: scale(1.1, 1.1); }
            100% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); } }

        @-ms-keyframes pulse {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            50% {
                -webkit-transform: scale(1.1, 1.1);
                -moz-transform: scale(1.1, 1.1);
                -ms-transform: scale(1.1, 1.1);
                -o-transform: scale(1.1, 1.1);
                transform: scale(1.1, 1.1); }
            100% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); } }

        @keyframes pulse {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            50% {
                -webkit-transform: scale(1.1, 1.1);
                -moz-transform: scale(1.1, 1.1);
                -ms-transform: scale(1.1, 1.1);
                -o-transform: scale(1.1, 1.1);
                transform: scale(1.1, 1.1); }
            100% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); } }

        @-moz-keyframes wiggle {
            0% {
                -webkit-transform: skewX(9deg);
                -moz-transform: skewX(9deg);
                -ms-transform: skewX(9deg);
                -o-transform: skewX(9deg);
                transform: skewX(9deg); }
            10% {
                -webkit-transform: skewX(-8deg);
                -moz-transform: skewX(-8deg);
                -ms-transform: skewX(-8deg);
                -o-transform: skewX(-8deg);
                transform: skewX(-8deg); }
            20% {
                -webkit-transform: skewX(7deg);
                -moz-transform: skewX(7deg);
                -ms-transform: skewX(7deg);
                -o-transform: skewX(7deg);
                transform: skewX(7deg); }
            30% {
                -webkit-transform: skewX(-6deg);
                -moz-transform: skewX(-6deg);
                -ms-transform: skewX(-6deg);
                -o-transform: skewX(-6deg);
                transform: skewX(-6deg); }
            40% {
                -webkit-transform: skewX(5deg);
                -moz-transform: skewX(5deg);
                -ms-transform: skewX(5deg);
                -o-transform: skewX(5deg);
                transform: skewX(5deg); }
            50% {
                -webkit-transform: skewX(-4deg);
                -moz-transform: skewX(-4deg);
                -ms-transform: skewX(-4deg);
                -o-transform: skewX(-4deg);
                transform: skewX(-4deg); }
            60% {
                -webkit-transform: skewX(3deg);
                -moz-transform: skewX(3deg);
                -ms-transform: skewX(3deg);
                -o-transform: skewX(3deg);
                transform: skewX(3deg); }
            70% {
                -webkit-transform: skewX(-2deg);
                -moz-transform: skewX(-2deg);
                -ms-transform: skewX(-2deg);
                -o-transform: skewX(-2deg);
                transform: skewX(-2deg); }
            80% {
                -webkit-transform: skewX(1deg);
                -moz-transform: skewX(1deg);
                -ms-transform: skewX(1deg);
                -o-transform: skewX(1deg);
                transform: skewX(1deg); }
            90% {
                -webkit-transform: skewX(0deg);
                -moz-transform: skewX(0deg);
                -ms-transform: skewX(0deg);
                -o-transform: skewX(0deg);
                transform: skewX(0deg); }
            100% {
                -webkit-transform: skewX(0deg);
                -moz-transform: skewX(0deg);
                -ms-transform: skewX(0deg);
                -o-transform: skewX(0deg);
                transform: skewX(0deg); } }

        @-webkit-keyframes wiggle {
            0% {
                -webkit-transform: skewX(9deg);
                -moz-transform: skewX(9deg);
                -ms-transform: skewX(9deg);
                -o-transform: skewX(9deg);
                transform: skewX(9deg); }
            10% {
                -webkit-transform: skewX(-8deg);
                -moz-transform: skewX(-8deg);
                -ms-transform: skewX(-8deg);
                -o-transform: skewX(-8deg);
                transform: skewX(-8deg); }
            20% {
                -webkit-transform: skewX(7deg);
                -moz-transform: skewX(7deg);
                -ms-transform: skewX(7deg);
                -o-transform: skewX(7deg);
                transform: skewX(7deg); }
            30% {
                -webkit-transform: skewX(-6deg);
                -moz-transform: skewX(-6deg);
                -ms-transform: skewX(-6deg);
                -o-transform: skewX(-6deg);
                transform: skewX(-6deg); }
            40% {
                -webkit-transform: skewX(5deg);
                -moz-transform: skewX(5deg);
                -ms-transform: skewX(5deg);
                -o-transform: skewX(5deg);
                transform: skewX(5deg); }
            50% {
                -webkit-transform: skewX(-4deg);
                -moz-transform: skewX(-4deg);
                -ms-transform: skewX(-4deg);
                -o-transform: skewX(-4deg);
                transform: skewX(-4deg); }
            60% {
                -webkit-transform: skewX(3deg);
                -moz-transform: skewX(3deg);
                -ms-transform: skewX(3deg);
                -o-transform: skewX(3deg);
                transform: skewX(3deg); }
            70% {
                -webkit-transform: skewX(-2deg);
                -moz-transform: skewX(-2deg);
                -ms-transform: skewX(-2deg);
                -o-transform: skewX(-2deg);
                transform: skewX(-2deg); }
            80% {
                -webkit-transform: skewX(1deg);
                -moz-transform: skewX(1deg);
                -ms-transform: skewX(1deg);
                -o-transform: skewX(1deg);
                transform: skewX(1deg); }
            90% {
                -webkit-transform: skewX(0deg);
                -moz-transform: skewX(0deg);
                -ms-transform: skewX(0deg);
                -o-transform: skewX(0deg);
                transform: skewX(0deg); }
            100% {
                -webkit-transform: skewX(0deg);
                -moz-transform: skewX(0deg);
                -ms-transform: skewX(0deg);
                -o-transform: skewX(0deg);
                transform: skewX(0deg); } }

        @-o-keyframes wiggle {
            0% {
                -webkit-transform: skewX(9deg);
                -moz-transform: skewX(9deg);
                -ms-transform: skewX(9deg);
                -o-transform: skewX(9deg);
                transform: skewX(9deg); }
            10% {
                -webkit-transform: skewX(-8deg);
                -moz-transform: skewX(-8deg);
                -ms-transform: skewX(-8deg);
                -o-transform: skewX(-8deg);
                transform: skewX(-8deg); }
            20% {
                -webkit-transform: skewX(7deg);
                -moz-transform: skewX(7deg);
                -ms-transform: skewX(7deg);
                -o-transform: skewX(7deg);
                transform: skewX(7deg); }
            30% {
                -webkit-transform: skewX(-6deg);
                -moz-transform: skewX(-6deg);
                -ms-transform: skewX(-6deg);
                -o-transform: skewX(-6deg);
                transform: skewX(-6deg); }
            40% {
                -webkit-transform: skewX(5deg);
                -moz-transform: skewX(5deg);
                -ms-transform: skewX(5deg);
                -o-transform: skewX(5deg);
                transform: skewX(5deg); }
            50% {
                -webkit-transform: skewX(-4deg);
                -moz-transform: skewX(-4deg);
                -ms-transform: skewX(-4deg);
                -o-transform: skewX(-4deg);
                transform: skewX(-4deg); }
            60% {
                -webkit-transform: skewX(3deg);
                -moz-transform: skewX(3deg);
                -ms-transform: skewX(3deg);
                -o-transform: skewX(3deg);
                transform: skewX(3deg); }
            70% {
                -webkit-transform: skewX(-2deg);
                -moz-transform: skewX(-2deg);
                -ms-transform: skewX(-2deg);
                -o-transform: skewX(-2deg);
                transform: skewX(-2deg); }
            80% {
                -webkit-transform: skewX(1deg);
                -moz-transform: skewX(1deg);
                -ms-transform: skewX(1deg);
                -o-transform: skewX(1deg);
                transform: skewX(1deg); }
            90% {
                -webkit-transform: skewX(0deg);
                -moz-transform: skewX(0deg);
                -ms-transform: skewX(0deg);
                -o-transform: skewX(0deg);
                transform: skewX(0deg); }
            100% {
                -webkit-transform: skewX(0deg);
                -moz-transform: skewX(0deg);
                -ms-transform: skewX(0deg);
                -o-transform: skewX(0deg);
                transform: skewX(0deg); } }

        @-ms-keyframes wiggle {
            0% {
                -webkit-transform: skewX(9deg);
                -moz-transform: skewX(9deg);
                -ms-transform: skewX(9deg);
                -o-transform: skewX(9deg);
                transform: skewX(9deg); }
            10% {
                -webkit-transform: skewX(-8deg);
                -moz-transform: skewX(-8deg);
                -ms-transform: skewX(-8deg);
                -o-transform: skewX(-8deg);
                transform: skewX(-8deg); }
            20% {
                -webkit-transform: skewX(7deg);
                -moz-transform: skewX(7deg);
                -ms-transform: skewX(7deg);
                -o-transform: skewX(7deg);
                transform: skewX(7deg); }
            30% {
                -webkit-transform: skewX(-6deg);
                -moz-transform: skewX(-6deg);
                -ms-transform: skewX(-6deg);
                -o-transform: skewX(-6deg);
                transform: skewX(-6deg); }
            40% {
                -webkit-transform: skewX(5deg);
                -moz-transform: skewX(5deg);
                -ms-transform: skewX(5deg);
                -o-transform: skewX(5deg);
                transform: skewX(5deg); }
            50% {
                -webkit-transform: skewX(-4deg);
                -moz-transform: skewX(-4deg);
                -ms-transform: skewX(-4deg);
                -o-transform: skewX(-4deg);
                transform: skewX(-4deg); }
            60% {
                -webkit-transform: skewX(3deg);
                -moz-transform: skewX(3deg);
                -ms-transform: skewX(3deg);
                -o-transform: skewX(3deg);
                transform: skewX(3deg); }
            70% {
                -webkit-transform: skewX(-2deg);
                -moz-transform: skewX(-2deg);
                -ms-transform: skewX(-2deg);
                -o-transform: skewX(-2deg);
                transform: skewX(-2deg); }
            80% {
                -webkit-transform: skewX(1deg);
                -moz-transform: skewX(1deg);
                -ms-transform: skewX(1deg);
                -o-transform: skewX(1deg);
                transform: skewX(1deg); }
            90% {
                -webkit-transform: skewX(0deg);
                -moz-transform: skewX(0deg);
                -ms-transform: skewX(0deg);
                -o-transform: skewX(0deg);
                transform: skewX(0deg); }
            100% {
                -webkit-transform: skewX(0deg);
                -moz-transform: skewX(0deg);
                -ms-transform: skewX(0deg);
                -o-transform: skewX(0deg);
                transform: skewX(0deg); } }

        @keyframes wiggle {
            0% {
                -webkit-transform: skewX(9deg);
                -moz-transform: skewX(9deg);
                -ms-transform: skewX(9deg);
                -o-transform: skewX(9deg);
                transform: skewX(9deg); }
            10% {
                -webkit-transform: skewX(-8deg);
                -moz-transform: skewX(-8deg);
                -ms-transform: skewX(-8deg);
                -o-transform: skewX(-8deg);
                transform: skewX(-8deg); }
            20% {
                -webkit-transform: skewX(7deg);
                -moz-transform: skewX(7deg);
                -ms-transform: skewX(7deg);
                -o-transform: skewX(7deg);
                transform: skewX(7deg); }
            30% {
                -webkit-transform: skewX(-6deg);
                -moz-transform: skewX(-6deg);
                -ms-transform: skewX(-6deg);
                -o-transform: skewX(-6deg);
                transform: skewX(-6deg); }
            40% {
                -webkit-transform: skewX(5deg);
                -moz-transform: skewX(5deg);
                -ms-transform: skewX(5deg);
                -o-transform: skewX(5deg);
                transform: skewX(5deg); }
            50% {
                -webkit-transform: skewX(-4deg);
                -moz-transform: skewX(-4deg);
                -ms-transform: skewX(-4deg);
                -o-transform: skewX(-4deg);
                transform: skewX(-4deg); }
            60% {
                -webkit-transform: skewX(3deg);
                -moz-transform: skewX(3deg);
                -ms-transform: skewX(3deg);
                -o-transform: skewX(3deg);
                transform: skewX(3deg); }
            70% {
                -webkit-transform: skewX(-2deg);
                -moz-transform: skewX(-2deg);
                -ms-transform: skewX(-2deg);
                -o-transform: skewX(-2deg);
                transform: skewX(-2deg); }
            80% {
                -webkit-transform: skewX(1deg);
                -moz-transform: skewX(1deg);
                -ms-transform: skewX(1deg);
                -o-transform: skewX(1deg);
                transform: skewX(1deg); }
            90% {
                -webkit-transform: skewX(0deg);
                -moz-transform: skewX(0deg);
                -ms-transform: skewX(0deg);
                -o-transform: skewX(0deg);
                transform: skewX(0deg); }
            100% {
                -webkit-transform: skewX(0deg);
                -moz-transform: skewX(0deg);
                -ms-transform: skewX(0deg);
                -o-transform: skewX(0deg);
                transform: skewX(0deg); } }

        @-moz-keyframes bounceOut {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            25% {
                -webkit-transform: scale(0.95, 0.95);
                -moz-transform: scale(0.95, 0.95);
                -ms-transform: scale(0.95, 0.95);
                -o-transform: scale(0.95, 0.95);
                transform: scale(0.95, 0.95); }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.1, 1.1);
                -moz-transform: scale(1.1, 1.1);
                -ms-transform: scale(1.1, 1.1);
                -o-transform: scale(1.1, 1.1);
                transform: scale(1.1, 1.1); }
            100% {
                opacity: 0;
                -webkit-transform: scale(0.3, 0.3);
                -moz-transform: scale(0.3, 0.3);
                -ms-transform: scale(0.3, 0.3);
                -o-transform: scale(0.3, 0.3);
                transform: scale(0.3, 0.3); } }

        @-webkit-keyframes bounceOut {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            25% {
                -webkit-transform: scale(0.95, 0.95);
                -moz-transform: scale(0.95, 0.95);
                -ms-transform: scale(0.95, 0.95);
                -o-transform: scale(0.95, 0.95);
                transform: scale(0.95, 0.95); }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.1, 1.1);
                -moz-transform: scale(1.1, 1.1);
                -ms-transform: scale(1.1, 1.1);
                -o-transform: scale(1.1, 1.1);
                transform: scale(1.1, 1.1); }
            100% {
                opacity: 0;
                -webkit-transform: scale(0.3, 0.3);
                -moz-transform: scale(0.3, 0.3);
                -ms-transform: scale(0.3, 0.3);
                -o-transform: scale(0.3, 0.3);
                transform: scale(0.3, 0.3); } }

        @-o-keyframes bounceOut {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            25% {
                -webkit-transform: scale(0.95, 0.95);
                -moz-transform: scale(0.95, 0.95);
                -ms-transform: scale(0.95, 0.95);
                -o-transform: scale(0.95, 0.95);
                transform: scale(0.95, 0.95); }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.1, 1.1);
                -moz-transform: scale(1.1, 1.1);
                -ms-transform: scale(1.1, 1.1);
                -o-transform: scale(1.1, 1.1);
                transform: scale(1.1, 1.1); }
            100% {
                opacity: 0;
                -webkit-transform: scale(0.3, 0.3);
                -moz-transform: scale(0.3, 0.3);
                -ms-transform: scale(0.3, 0.3);
                -o-transform: scale(0.3, 0.3);
                transform: scale(0.3, 0.3); } }

        @-ms-keyframes bounceOut {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            25% {
                -webkit-transform: scale(0.95, 0.95);
                -moz-transform: scale(0.95, 0.95);
                -ms-transform: scale(0.95, 0.95);
                -o-transform: scale(0.95, 0.95);
                transform: scale(0.95, 0.95); }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.1, 1.1);
                -moz-transform: scale(1.1, 1.1);
                -ms-transform: scale(1.1, 1.1);
                -o-transform: scale(1.1, 1.1);
                transform: scale(1.1, 1.1); }
            100% {
                opacity: 0;
                -webkit-transform: scale(0.3, 0.3);
                -moz-transform: scale(0.3, 0.3);
                -ms-transform: scale(0.3, 0.3);
                -o-transform: scale(0.3, 0.3);
                transform: scale(0.3, 0.3); } }

        @keyframes bounceOut {
            0% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); }
            25% {
                -webkit-transform: scale(0.95, 0.95);
                -moz-transform: scale(0.95, 0.95);
                -ms-transform: scale(0.95, 0.95);
                -o-transform: scale(0.95, 0.95);
                transform: scale(0.95, 0.95); }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.1, 1.1);
                -moz-transform: scale(1.1, 1.1);
                -ms-transform: scale(1.1, 1.1);
                -o-transform: scale(1.1, 1.1);
                transform: scale(1.1, 1.1); }
            100% {
                opacity: 0;
                -webkit-transform: scale(0.3, 0.3);
                -moz-transform: scale(0.3, 0.3);
                -ms-transform: scale(0.3, 0.3);
                -o-transform: scale(0.3, 0.3);
                transform: scale(0.3, 0.3); } }

        @-moz-keyframes bounceOutUp {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); } }

        @-webkit-keyframes bounceOutUp {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); } }

        @-o-keyframes bounceOutUp {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); } }

        @-ms-keyframes bounceOutUp {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); } }

        @keyframes bounceOutUp {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); } }

        @-moz-keyframes bounceOutDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); } }

        @-webkit-keyframes bounceOutDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); } }

        @-o-keyframes bounceOutDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); } }

        @-ms-keyframes bounceOutDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); } }

        @keyframes bounceOutDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); } }

        @-moz-keyframes bounceOutLeft {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); } }

        @-webkit-keyframes bounceOutLeft {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); } }

        @-o-keyframes bounceOutLeft {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); } }

        @-ms-keyframes bounceOutLeft {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); } }

        @keyframes bounceOutLeft {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); } }

        @-moz-keyframes bounceOutRight {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); } }

        @-webkit-keyframes bounceOutRight {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); } }

        @-o-keyframes bounceOutRight {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); } }

        @-ms-keyframes bounceOutRight {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); } }

        @keyframes bounceOutRight {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            20% {
                opacity: 1;
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); } }

        @-moz-keyframes bounceIn {
            0% {
                opacity: 0;
                -webkit-transform: scale(0.3, 0.3);
                -moz-transform: scale(0.3, 0.3);
                -ms-transform: scale(0.3, 0.3);
                -o-transform: scale(0.3, 0.3);
                transform: scale(0.3, 0.3); }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.05, 1.05);
                -moz-transform: scale(1.05, 1.05);
                -ms-transform: scale(1.05, 1.05);
                -o-transform: scale(1.05, 1.05);
                transform: scale(1.05, 1.05); }
            70% {
                -webkit-transform: scale(0.9, 0.9);
                -moz-transform: scale(0.9, 0.9);
                -ms-transform: scale(0.9, 0.9);
                -o-transform: scale(0.9, 0.9);
                transform: scale(0.9, 0.9); }
            100% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); } }

        @-webkit-keyframes bounceIn {
            0% {
                opacity: 0;
                -webkit-transform: scale(0.3, 0.3);
                -moz-transform: scale(0.3, 0.3);
                -ms-transform: scale(0.3, 0.3);
                -o-transform: scale(0.3, 0.3);
                transform: scale(0.3, 0.3); }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.05, 1.05);
                -moz-transform: scale(1.05, 1.05);
                -ms-transform: scale(1.05, 1.05);
                -o-transform: scale(1.05, 1.05);
                transform: scale(1.05, 1.05); }
            70% {
                -webkit-transform: scale(0.9, 0.9);
                -moz-transform: scale(0.9, 0.9);
                -ms-transform: scale(0.9, 0.9);
                -o-transform: scale(0.9, 0.9);
                transform: scale(0.9, 0.9); }
            100% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); } }

        @-o-keyframes bounceIn {
            0% {
                opacity: 0;
                -webkit-transform: scale(0.3, 0.3);
                -moz-transform: scale(0.3, 0.3);
                -ms-transform: scale(0.3, 0.3);
                -o-transform: scale(0.3, 0.3);
                transform: scale(0.3, 0.3); }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.05, 1.05);
                -moz-transform: scale(1.05, 1.05);
                -ms-transform: scale(1.05, 1.05);
                -o-transform: scale(1.05, 1.05);
                transform: scale(1.05, 1.05); }
            70% {
                -webkit-transform: scale(0.9, 0.9);
                -moz-transform: scale(0.9, 0.9);
                -ms-transform: scale(0.9, 0.9);
                -o-transform: scale(0.9, 0.9);
                transform: scale(0.9, 0.9); }
            100% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); } }

        @-ms-keyframes bounceIn {
            0% {
                opacity: 0;
                -webkit-transform: scale(0.3, 0.3);
                -moz-transform: scale(0.3, 0.3);
                -ms-transform: scale(0.3, 0.3);
                -o-transform: scale(0.3, 0.3);
                transform: scale(0.3, 0.3); }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.05, 1.05);
                -moz-transform: scale(1.05, 1.05);
                -ms-transform: scale(1.05, 1.05);
                -o-transform: scale(1.05, 1.05);
                transform: scale(1.05, 1.05); }
            70% {
                -webkit-transform: scale(0.9, 0.9);
                -moz-transform: scale(0.9, 0.9);
                -ms-transform: scale(0.9, 0.9);
                -o-transform: scale(0.9, 0.9);
                transform: scale(0.9, 0.9); }
            100% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); } }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                -webkit-transform: scale(0.3, 0.3);
                -moz-transform: scale(0.3, 0.3);
                -ms-transform: scale(0.3, 0.3);
                -o-transform: scale(0.3, 0.3);
                transform: scale(0.3, 0.3); }
            50% {
                opacity: 1;
                -webkit-transform: scale(1.05, 1.05);
                -moz-transform: scale(1.05, 1.05);
                -ms-transform: scale(1.05, 1.05);
                -o-transform: scale(1.05, 1.05);
                transform: scale(1.05, 1.05); }
            70% {
                -webkit-transform: scale(0.9, 0.9);
                -moz-transform: scale(0.9, 0.9);
                -ms-transform: scale(0.9, 0.9);
                -o-transform: scale(0.9, 0.9);
                transform: scale(0.9, 0.9); }
            100% {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1); } }

        @-moz-keyframes bounceInDown {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateY(30px);
                -moz-transform: translateY(30px);
                -ms-transform: translateY(30px);
                -o-transform: translateY(30px);
                transform: translateY(30px); }
            80% {
                -webkit-transform: translateY(-10px);
                -moz-transform: translateY(-10px);
                -ms-transform: translateY(-10px);
                -o-transform: translateY(-10px);
                transform: translateY(-10px); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-webkit-keyframes bounceInDown {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateY(30px);
                -moz-transform: translateY(30px);
                -ms-transform: translateY(30px);
                -o-transform: translateY(30px);
                transform: translateY(30px); }
            80% {
                -webkit-transform: translateY(-10px);
                -moz-transform: translateY(-10px);
                -ms-transform: translateY(-10px);
                -o-transform: translateY(-10px);
                transform: translateY(-10px); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-o-keyframes bounceInDown {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateY(30px);
                -moz-transform: translateY(30px);
                -ms-transform: translateY(30px);
                -o-transform: translateY(30px);
                transform: translateY(30px); }
            80% {
                -webkit-transform: translateY(-10px);
                -moz-transform: translateY(-10px);
                -ms-transform: translateY(-10px);
                -o-transform: translateY(-10px);
                transform: translateY(-10px); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-ms-keyframes bounceInDown {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateY(30px);
                -moz-transform: translateY(30px);
                -ms-transform: translateY(30px);
                -o-transform: translateY(30px);
                transform: translateY(30px); }
            80% {
                -webkit-transform: translateY(-10px);
                -moz-transform: translateY(-10px);
                -ms-transform: translateY(-10px);
                -o-transform: translateY(-10px);
                transform: translateY(-10px); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @keyframes bounceInDown {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateY(30px);
                -moz-transform: translateY(30px);
                -ms-transform: translateY(30px);
                -o-transform: translateY(30px);
                transform: translateY(30px); }
            80% {
                -webkit-transform: translateY(-10px);
                -moz-transform: translateY(-10px);
                -ms-transform: translateY(-10px);
                -o-transform: translateY(-10px);
                transform: translateY(-10px); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-moz-keyframes bounceInUp {
            0% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateY(-30px);
                -moz-transform: translateY(-30px);
                -ms-transform: translateY(-30px);
                -o-transform: translateY(-30px);
                transform: translateY(-30px); }
            80% {
                -webkit-transform: translateY(10px);
                -moz-transform: translateY(10px);
                -ms-transform: translateY(10px);
                -o-transform: translateY(10px);
                transform: translateY(10px); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-webkit-keyframes bounceInUp {
            0% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateY(-30px);
                -moz-transform: translateY(-30px);
                -ms-transform: translateY(-30px);
                -o-transform: translateY(-30px);
                transform: translateY(-30px); }
            80% {
                -webkit-transform: translateY(10px);
                -moz-transform: translateY(10px);
                -ms-transform: translateY(10px);
                -o-transform: translateY(10px);
                transform: translateY(10px); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-o-keyframes bounceInUp {
            0% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateY(-30px);
                -moz-transform: translateY(-30px);
                -ms-transform: translateY(-30px);
                -o-transform: translateY(-30px);
                transform: translateY(-30px); }
            80% {
                -webkit-transform: translateY(10px);
                -moz-transform: translateY(10px);
                -ms-transform: translateY(10px);
                -o-transform: translateY(10px);
                transform: translateY(10px); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-ms-keyframes bounceInUp {
            0% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateY(-30px);
                -moz-transform: translateY(-30px);
                -ms-transform: translateY(-30px);
                -o-transform: translateY(-30px);
                transform: translateY(-30px); }
            80% {
                -webkit-transform: translateY(10px);
                -moz-transform: translateY(10px);
                -ms-transform: translateY(10px);
                -o-transform: translateY(10px);
                transform: translateY(10px); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @keyframes bounceInUp {
            0% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateY(-30px);
                -moz-transform: translateY(-30px);
                -ms-transform: translateY(-30px);
                -o-transform: translateY(-30px);
                transform: translateY(-30px); }
            80% {
                -webkit-transform: translateY(10px);
                -moz-transform: translateY(10px);
                -ms-transform: translateY(10px);
                -o-transform: translateY(10px);
                transform: translateY(10px); }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-moz-keyframes bounceInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateX(-30px);
                -moz-transform: translateX(-30px);
                -ms-transform: translateX(-30px);
                -o-transform: translateX(-30px);
                transform: translateX(-30px); }
            80% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-webkit-keyframes bounceInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateX(-30px);
                -moz-transform: translateX(-30px);
                -ms-transform: translateX(-30px);
                -o-transform: translateX(-30px);
                transform: translateX(-30px); }
            80% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-o-keyframes bounceInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateX(-30px);
                -moz-transform: translateX(-30px);
                -ms-transform: translateX(-30px);
                -o-transform: translateX(-30px);
                transform: translateX(-30px); }
            80% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-ms-keyframes bounceInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateX(-30px);
                -moz-transform: translateX(-30px);
                -ms-transform: translateX(-30px);
                -o-transform: translateX(-30px);
                transform: translateX(-30px); }
            80% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @keyframes bounceInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateX(-30px);
                -moz-transform: translateX(-30px);
                -ms-transform: translateX(-30px);
                -o-transform: translateX(-30px);
                transform: translateX(-30px); }
            80% {
                -webkit-transform: translateX(10px);
                -moz-transform: translateX(10px);
                -ms-transform: translateX(10px);
                -o-transform: translateX(10px);
                transform: translateX(10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-moz-keyframes bounceInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateX(30px);
                -moz-transform: translateX(30px);
                -ms-transform: translateX(30px);
                -o-transform: translateX(30px);
                transform: translateX(30px); }
            80% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-webkit-keyframes bounceInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateX(30px);
                -moz-transform: translateX(30px);
                -ms-transform: translateX(30px);
                -o-transform: translateX(30px);
                transform: translateX(30px); }
            80% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-o-keyframes bounceInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateX(30px);
                -moz-transform: translateX(30px);
                -ms-transform: translateX(30px);
                -o-transform: translateX(30px);
                transform: translateX(30px); }
            80% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-ms-keyframes bounceInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateX(30px);
                -moz-transform: translateX(30px);
                -ms-transform: translateX(30px);
                -o-transform: translateX(30px);
                transform: translateX(30px); }
            80% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @keyframes bounceInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); }
            60% {
                opacity: 1;
                -webkit-transform: translateX(30px);
                -moz-transform: translateX(30px);
                -ms-transform: translateX(30px);
                -o-transform: translateX(30px);
                transform: translateX(30px); }
            80% {
                -webkit-transform: translateX(-10px);
                -moz-transform: translateX(-10px);
                -ms-transform: translateX(-10px);
                -o-transform: translateX(-10px);
                transform: translateX(-10px); }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-moz-keyframes fadeOut {
            0% {
                opacity: 1; }
            100% {
                opacity: 0; } }

        @-webkit-keyframes fadeOut {
            0% {
                opacity: 1; }
            100% {
                opacity: 0; } }

        @-o-keyframes fadeOut {
            0% {
                opacity: 1; }
            100% {
                opacity: 0; } }

        @-ms-keyframes fadeOut {
            0% {
                opacity: 1; }
            100% {
                opacity: 0; } }

        @keyframes fadeOut {
            0% {
                opacity: 1; }
            100% {
                opacity: 0; } }

        @-moz-keyframes fadeOutUp {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px);
                opacity: 0; } }

        @-webkit-keyframes fadeOutUp {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px);
                opacity: 0; } }

        @-o-keyframes fadeOutUp {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px);
                opacity: 0; } }

        @-ms-keyframes fadeOutUp {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px);
                opacity: 0; } }

        @keyframes fadeOutUp {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px);
                opacity: 0; } }

        @-moz-keyframes fadeOutDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px);
                opacity: 0; } }

        @-webkit-keyframes fadeOutDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px);
                opacity: 0; } }

        @-o-keyframes fadeOutDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px);
                opacity: 0; } }

        @-ms-keyframes fadeOutDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px);
                opacity: 0; } }

        @keyframes fadeOutDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px);
                opacity: 0; } }

        @-moz-keyframes fadeOutRight {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px);
                opacity: 0; } }

        @-webkit-keyframes fadeOutRight {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px);
                opacity: 0; } }

        @-o-keyframes fadeOutRight {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px);
                opacity: 0; } }

        @-ms-keyframes fadeOutRight {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px);
                opacity: 0; } }

        @keyframes fadeOutRight {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px);
                opacity: 0; } }

        @-moz-keyframes fadeOutLeft {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px);
                opacity: 0; } }

        @-webkit-keyframes fadeOutLeft {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px);
                opacity: 0; } }

        @-o-keyframes fadeOutLeft {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px);
                opacity: 0; } }

        @-ms-keyframes fadeOutLeft {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px);
                opacity: 0; } }

        @keyframes fadeOutLeft {
            0% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px);
                opacity: 0; } }

        @-moz-keyframes fadeOutUpBig {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px);
                opacity: 0; } }

        @-webkit-keyframes fadeOutUpBig {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px);
                opacity: 0; } }

        @-o-keyframes fadeOutUpBig {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px);
                opacity: 0; } }

        @-ms-keyframes fadeOutUpBig {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px);
                opacity: 0; } }

        @keyframes fadeOutUpBig {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; }
            100% {
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px);
                opacity: 0; } }

        @-moz-keyframes fadeOutDownBig {
            0% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); } }

        @-webkit-keyframes fadeOutDownBig {
            0% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); } }

        @-o-keyframes fadeOutDownBig {
            0% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); } }

        @-ms-keyframes fadeOutDownBig {
            0% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); } }

        @keyframes fadeOutDownBig {
            0% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px); } }

        @-moz-keyframes fadeOutRightBig {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); } }

        @-webkit-keyframes fadeOutRightBig {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); } }

        @-o-keyframes fadeOutRightBig {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); } }

        @-ms-keyframes fadeOutRightBig {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); } }

        @keyframes fadeOutRightBig {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); } }

        @-moz-keyframes fadeOutLeftBig {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); } }

        @-webkit-keyframes fadeOutLeftBig {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); } }

        @-o-keyframes fadeOutLeftBig {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); } }

        @-ms-keyframes fadeOutLeftBig {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); } }

        @keyframes fadeOutLeftBig {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); }
            100% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); } }

        @-moz-keyframes fadeIn {
            0% {
                opacity: 0; }
            100% {
                opacity: 1; } }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0; }
            100% {
                opacity: 1; } }

        @-o-keyframes fadeIn {
            0% {
                opacity: 0; }
            100% {
                opacity: 1; } }

        @-ms-keyframes fadeIn {
            0% {
                opacity: 0; }
            100% {
                opacity: 1; } }

        @keyframes fadeIn {
            0% {
                opacity: 0; }
            100% {
                opacity: 1; } }

        @-moz-keyframes fadeInUp {
            0% {
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @-webkit-keyframes fadeInUp {
            0% {
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @-o-keyframes fadeInUp {
            0% {
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @-ms-keyframes fadeInUp {
            0% {
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @keyframes fadeInUp {
            0% {
                -webkit-transform: translateY(20px);
                -moz-transform: translateY(20px);
                -ms-transform: translateY(20px);
                -o-transform: translateY(20px);
                transform: translateY(20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @-moz-keyframes fadeInDown {
            0% {
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @-webkit-keyframes fadeInDown {
            0% {
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @-o-keyframes fadeInDown {
            0% {
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @-ms-keyframes fadeInDown {
            0% {
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @keyframes fadeInDown {
            0% {
                -webkit-transform: translateY(-20px);
                -moz-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @-moz-keyframes fadeInRight {
            0% {
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; } }

        @-webkit-keyframes fadeInRight {
            0% {
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; } }

        @-o-keyframes fadeInRight {
            0% {
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; } }

        @-ms-keyframes fadeInRight {
            0% {
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; } }

        @keyframes fadeInRight {
            0% {
                -webkit-transform: translateX(20px);
                -moz-transform: translateX(20px);
                -ms-transform: translateX(20px);
                -o-transform: translateX(20px);
                transform: translateX(20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; } }

        @-moz-keyframes fadeInLeft {
            0% {
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; } }

        @-webkit-keyframes fadeInLeft {
            0% {
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; } }

        @-o-keyframes fadeInLeft {
            0% {
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; } }

        @-ms-keyframes fadeInLeft {
            0% {
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; } }

        @keyframes fadeInLeft {
            0% {
                -webkit-transform: translateX(-20px);
                -moz-transform: translateX(-20px);
                -ms-transform: translateX(-20px);
                -o-transform: translateX(-20px);
                transform: translateX(-20px);
                opacity: 0; }
            100% {
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                opacity: 1; } }

        @-moz-keyframes fadeInUpBig {
            0% {
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @-webkit-keyframes fadeInUpBig {
            0% {
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @-o-keyframes fadeInUpBig {
            0% {
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @-ms-keyframes fadeInUpBig {
            0% {
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @keyframes fadeInUpBig {
            0% {
                -webkit-transform: translateY(2000px);
                -moz-transform: translateY(2000px);
                -ms-transform: translateY(2000px);
                -o-transform: translateY(2000px);
                transform: translateY(2000px);
                opacity: 0; }
            100% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
                opacity: 1; } }

        @-moz-keyframes fadeInDownBig {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-webkit-keyframes fadeInDownBig {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-o-keyframes fadeInDownBig {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-ms-keyframes fadeInDownBig {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @keyframes fadeInDownBig {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
                -moz-transform: translateY(-2000px);
                -ms-transform: translateY(-2000px);
                -o-transform: translateY(-2000px);
                transform: translateY(-2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); } }

        @-moz-keyframes fadeInRightBig {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-webkit-keyframes fadeInRightBig {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-o-keyframes fadeInRightBig {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-ms-keyframes fadeInRightBig {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @keyframes fadeInRightBig {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
                -moz-transform: translateX(2000px);
                -ms-transform: translateX(2000px);
                -o-transform: translateX(2000px);
                transform: translateX(2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-moz-keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-webkit-keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-o-keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-ms-keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
                -moz-transform: translateX(-2000px);
                -ms-transform: translateX(-2000px);
                -o-transform: translateX(-2000px);
                transform: translateX(-2000px); }
            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0); } }

        @-moz-keyframes flip {
            0% {
                -webkit-transform: perspective(400px) rotateY(0);
                -moz-transform: perspective(400px) rotateY(0);
                -ms-transform: perspective(400px) rotateY(0);
                -o-transform: perspective(400px) rotateY(0);
                transform: perspective(400px) rotateY(0);
                -webkit-animation-timing-function: ease-out;
                -moz-animation-timing-function: ease-out;
                -ms-animation-timing-function: ease-out;
                -o-animation-timing-function: ease-out;
                animation-timing-function: ease-out; }
            40% {
                -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -webkit-animation-timing-function: ease-out;
                -moz-animation-timing-function: ease-out;
                -ms-animation-timing-function: ease-out;
                -o-animation-timing-function: ease-out;
                animation-timing-function: ease-out; }
            50% {
                -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; }
            80% {
                -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
                transform: perspective(400px) rotateY(360deg) scale(0.95);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; }
            100% {
                -webkit-transform: perspective(400px) scale(1);
                -moz-transform: perspective(400px) scale(1);
                -ms-transform: perspective(400px) scale(1);
                -o-transform: perspective(400px) scale(1);
                transform: perspective(400px) scale(1);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; } }

        @-webkit-keyframes flip {
            0% {
                -webkit-transform: perspective(400px) rotateY(0);
                -moz-transform: perspective(400px) rotateY(0);
                -ms-transform: perspective(400px) rotateY(0);
                -o-transform: perspective(400px) rotateY(0);
                transform: perspective(400px) rotateY(0);
                -webkit-animation-timing-function: ease-out;
                -moz-animation-timing-function: ease-out;
                -ms-animation-timing-function: ease-out;
                -o-animation-timing-function: ease-out;
                animation-timing-function: ease-out; }
            40% {
                -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -webkit-animation-timing-function: ease-out;
                -moz-animation-timing-function: ease-out;
                -ms-animation-timing-function: ease-out;
                -o-animation-timing-function: ease-out;
                animation-timing-function: ease-out; }
            50% {
                -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; }
            80% {
                -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
                transform: perspective(400px) rotateY(360deg) scale(0.95);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; }
            100% {
                -webkit-transform: perspective(400px) scale(1);
                -moz-transform: perspective(400px) scale(1);
                -ms-transform: perspective(400px) scale(1);
                -o-transform: perspective(400px) scale(1);
                transform: perspective(400px) scale(1);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; } }

        @-o-keyframes flip {
            0% {
                -webkit-transform: perspective(400px) rotateY(0);
                -moz-transform: perspective(400px) rotateY(0);
                -ms-transform: perspective(400px) rotateY(0);
                -o-transform: perspective(400px) rotateY(0);
                transform: perspective(400px) rotateY(0);
                -webkit-animation-timing-function: ease-out;
                -moz-animation-timing-function: ease-out;
                -ms-animation-timing-function: ease-out;
                -o-animation-timing-function: ease-out;
                animation-timing-function: ease-out; }
            40% {
                -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -webkit-animation-timing-function: ease-out;
                -moz-animation-timing-function: ease-out;
                -ms-animation-timing-function: ease-out;
                -o-animation-timing-function: ease-out;
                animation-timing-function: ease-out; }
            50% {
                -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; }
            80% {
                -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
                transform: perspective(400px) rotateY(360deg) scale(0.95);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; }
            100% {
                -webkit-transform: perspective(400px) scale(1);
                -moz-transform: perspective(400px) scale(1);
                -ms-transform: perspective(400px) scale(1);
                -o-transform: perspective(400px) scale(1);
                transform: perspective(400px) scale(1);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; } }

        @-ms-keyframes flip {
            0% {
                -webkit-transform: perspective(400px) rotateY(0);
                -moz-transform: perspective(400px) rotateY(0);
                -ms-transform: perspective(400px) rotateY(0);
                -o-transform: perspective(400px) rotateY(0);
                transform: perspective(400px) rotateY(0);
                -webkit-animation-timing-function: ease-out;
                -moz-animation-timing-function: ease-out;
                -ms-animation-timing-function: ease-out;
                -o-animation-timing-function: ease-out;
                animation-timing-function: ease-out; }
            40% {
                -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -webkit-animation-timing-function: ease-out;
                -moz-animation-timing-function: ease-out;
                -ms-animation-timing-function: ease-out;
                -o-animation-timing-function: ease-out;
                animation-timing-function: ease-out; }
            50% {
                -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; }
            80% {
                -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
                transform: perspective(400px) rotateY(360deg) scale(0.95);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; }
            100% {
                -webkit-transform: perspective(400px) scale(1);
                -moz-transform: perspective(400px) scale(1);
                -ms-transform: perspective(400px) scale(1);
                -o-transform: perspective(400px) scale(1);
                transform: perspective(400px) scale(1);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; } }

        @keyframes flip {
            0% {
                -webkit-transform: perspective(400px) rotateY(0);
                -moz-transform: perspective(400px) rotateY(0);
                -ms-transform: perspective(400px) rotateY(0);
                -o-transform: perspective(400px) rotateY(0);
                transform: perspective(400px) rotateY(0);
                -webkit-animation-timing-function: ease-out;
                -moz-animation-timing-function: ease-out;
                -ms-animation-timing-function: ease-out;
                -o-animation-timing-function: ease-out;
                animation-timing-function: ease-out; }
            40% {
                -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -webkit-animation-timing-function: ease-out;
                -moz-animation-timing-function: ease-out;
                -ms-animation-timing-function: ease-out;
                -o-animation-timing-function: ease-out;
                animation-timing-function: ease-out; }
            50% {
                -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; }
            80% {
                -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
                -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
                transform: perspective(400px) rotateY(360deg) scale(0.95);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; }
            100% {
                -webkit-transform: perspective(400px) scale(1);
                -moz-transform: perspective(400px) scale(1);
                -ms-transform: perspective(400px) scale(1);
                -o-transform: perspective(400px) scale(1);
                transform: perspective(400px) scale(1);
                -webkit-animation-timing-function: ease-in;
                -moz-animation-timing-function: ease-in;
                -ms-animation-timing-function: ease-in;
                -o-animation-timing-function: ease-in;
                animation-timing-function: ease-in; } }

        @-moz-keyframes flipInX {
            0% {
                -webkit-transform: perspective(400px) rotateX(90deg);
                -moz-transform: perspective(400px) rotateX(90deg);
                -ms-transform: perspective(400px) rotateX(90deg);
                -o-transform: perspective(400px) rotateX(90deg);
                transform: perspective(400px) rotateX(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            40% {
                -webkit-transform: perspective(400px) rotateX(-10deg);
                -moz-transform: perspective(400px) rotateX(-10deg);
                -ms-transform: perspective(400px) rotateX(-10deg);
                -o-transform: perspective(400px) rotateX(-10deg);
                transform: perspective(400px) rotateX(-10deg); }
            70% {
                -webkit-transform: perspective(400px) rotateX(10deg);
                -moz-transform: perspective(400px) rotateX(10deg);
                -ms-transform: perspective(400px) rotateX(10deg);
                -o-transform: perspective(400px) rotateX(10deg);
                transform: perspective(400px) rotateX(10deg); }
            100% {
                -webkit-transform: perspective(400px) rotateX(0deg);
                -moz-transform: perspective(400px) rotateX(0deg);
                -ms-transform: perspective(400px) rotateX(0deg);
                -o-transform: perspective(400px) rotateX(0deg);
                transform: perspective(400px) rotateX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @-webkit-keyframes flipInX {
            0% {
                -webkit-transform: perspective(400px) rotateX(90deg);
                -moz-transform: perspective(400px) rotateX(90deg);
                -ms-transform: perspective(400px) rotateX(90deg);
                -o-transform: perspective(400px) rotateX(90deg);
                transform: perspective(400px) rotateX(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            40% {
                -webkit-transform: perspective(400px) rotateX(-10deg);
                -moz-transform: perspective(400px) rotateX(-10deg);
                -ms-transform: perspective(400px) rotateX(-10deg);
                -o-transform: perspective(400px) rotateX(-10deg);
                transform: perspective(400px) rotateX(-10deg); }
            70% {
                -webkit-transform: perspective(400px) rotateX(10deg);
                -moz-transform: perspective(400px) rotateX(10deg);
                -ms-transform: perspective(400px) rotateX(10deg);
                -o-transform: perspective(400px) rotateX(10deg);
                transform: perspective(400px) rotateX(10deg); }
            100% {
                -webkit-transform: perspective(400px) rotateX(0deg);
                -moz-transform: perspective(400px) rotateX(0deg);
                -ms-transform: perspective(400px) rotateX(0deg);
                -o-transform: perspective(400px) rotateX(0deg);
                transform: perspective(400px) rotateX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @-o-keyframes flipInX {
            0% {
                -webkit-transform: perspective(400px) rotateX(90deg);
                -moz-transform: perspective(400px) rotateX(90deg);
                -ms-transform: perspective(400px) rotateX(90deg);
                -o-transform: perspective(400px) rotateX(90deg);
                transform: perspective(400px) rotateX(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            40% {
                -webkit-transform: perspective(400px) rotateX(-10deg);
                -moz-transform: perspective(400px) rotateX(-10deg);
                -ms-transform: perspective(400px) rotateX(-10deg);
                -o-transform: perspective(400px) rotateX(-10deg);
                transform: perspective(400px) rotateX(-10deg); }
            70% {
                -webkit-transform: perspective(400px) rotateX(10deg);
                -moz-transform: perspective(400px) rotateX(10deg);
                -ms-transform: perspective(400px) rotateX(10deg);
                -o-transform: perspective(400px) rotateX(10deg);
                transform: perspective(400px) rotateX(10deg); }
            100% {
                -webkit-transform: perspective(400px) rotateX(0deg);
                -moz-transform: perspective(400px) rotateX(0deg);
                -ms-transform: perspective(400px) rotateX(0deg);
                -o-transform: perspective(400px) rotateX(0deg);
                transform: perspective(400px) rotateX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @-ms-keyframes flipInX {
            0% {
                -webkit-transform: perspective(400px) rotateX(90deg);
                -moz-transform: perspective(400px) rotateX(90deg);
                -ms-transform: perspective(400px) rotateX(90deg);
                -o-transform: perspective(400px) rotateX(90deg);
                transform: perspective(400px) rotateX(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            40% {
                -webkit-transform: perspective(400px) rotateX(-10deg);
                -moz-transform: perspective(400px) rotateX(-10deg);
                -ms-transform: perspective(400px) rotateX(-10deg);
                -o-transform: perspective(400px) rotateX(-10deg);
                transform: perspective(400px) rotateX(-10deg); }
            70% {
                -webkit-transform: perspective(400px) rotateX(10deg);
                -moz-transform: perspective(400px) rotateX(10deg);
                -ms-transform: perspective(400px) rotateX(10deg);
                -o-transform: perspective(400px) rotateX(10deg);
                transform: perspective(400px) rotateX(10deg); }
            100% {
                -webkit-transform: perspective(400px) rotateX(0deg);
                -moz-transform: perspective(400px) rotateX(0deg);
                -ms-transform: perspective(400px) rotateX(0deg);
                -o-transform: perspective(400px) rotateX(0deg);
                transform: perspective(400px) rotateX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @keyframes flipInX {
            0% {
                -webkit-transform: perspective(400px) rotateX(90deg);
                -moz-transform: perspective(400px) rotateX(90deg);
                -ms-transform: perspective(400px) rotateX(90deg);
                -o-transform: perspective(400px) rotateX(90deg);
                transform: perspective(400px) rotateX(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            40% {
                -webkit-transform: perspective(400px) rotateX(-10deg);
                -moz-transform: perspective(400px) rotateX(-10deg);
                -ms-transform: perspective(400px) rotateX(-10deg);
                -o-transform: perspective(400px) rotateX(-10deg);
                transform: perspective(400px) rotateX(-10deg); }
            70% {
                -webkit-transform: perspective(400px) rotateX(10deg);
                -moz-transform: perspective(400px) rotateX(10deg);
                -ms-transform: perspective(400px) rotateX(10deg);
                -o-transform: perspective(400px) rotateX(10deg);
                transform: perspective(400px) rotateX(10deg); }
            100% {
                -webkit-transform: perspective(400px) rotateX(0deg);
                -moz-transform: perspective(400px) rotateX(0deg);
                -ms-transform: perspective(400px) rotateX(0deg);
                -o-transform: perspective(400px) rotateX(0deg);
                transform: perspective(400px) rotateX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @-moz-keyframes flipOutX {
            0% {
                -webkit-transform: perspective(400px) rotateX(0deg);
                -moz-transform: perspective(400px) rotateX(0deg);
                -ms-transform: perspective(400px) rotateX(0deg);
                -o-transform: perspective(400px) rotateX(0deg);
                transform: perspective(400px) rotateX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: perspective(400px) rotateX(90deg);
                -moz-transform: perspective(400px) rotateX(90deg);
                -ms-transform: perspective(400px) rotateX(90deg);
                -o-transform: perspective(400px) rotateX(90deg);
                transform: perspective(400px) rotateX(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-webkit-keyframes flipOutX {
            0% {
                -webkit-transform: perspective(400px) rotateX(0deg);
                -moz-transform: perspective(400px) rotateX(0deg);
                -ms-transform: perspective(400px) rotateX(0deg);
                -o-transform: perspective(400px) rotateX(0deg);
                transform: perspective(400px) rotateX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: perspective(400px) rotateX(90deg);
                -moz-transform: perspective(400px) rotateX(90deg);
                -ms-transform: perspective(400px) rotateX(90deg);
                -o-transform: perspective(400px) rotateX(90deg);
                transform: perspective(400px) rotateX(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-o-keyframes flipOutX {
            0% {
                -webkit-transform: perspective(400px) rotateX(0deg);
                -moz-transform: perspective(400px) rotateX(0deg);
                -ms-transform: perspective(400px) rotateX(0deg);
                -o-transform: perspective(400px) rotateX(0deg);
                transform: perspective(400px) rotateX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: perspective(400px) rotateX(90deg);
                -moz-transform: perspective(400px) rotateX(90deg);
                -ms-transform: perspective(400px) rotateX(90deg);
                -o-transform: perspective(400px) rotateX(90deg);
                transform: perspective(400px) rotateX(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-ms-keyframes flipOutX {
            0% {
                -webkit-transform: perspective(400px) rotateX(0deg);
                -moz-transform: perspective(400px) rotateX(0deg);
                -ms-transform: perspective(400px) rotateX(0deg);
                -o-transform: perspective(400px) rotateX(0deg);
                transform: perspective(400px) rotateX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: perspective(400px) rotateX(90deg);
                -moz-transform: perspective(400px) rotateX(90deg);
                -ms-transform: perspective(400px) rotateX(90deg);
                -o-transform: perspective(400px) rotateX(90deg);
                transform: perspective(400px) rotateX(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @keyframes flipOutX {
            0% {
                -webkit-transform: perspective(400px) rotateX(0deg);
                -moz-transform: perspective(400px) rotateX(0deg);
                -ms-transform: perspective(400px) rotateX(0deg);
                -o-transform: perspective(400px) rotateX(0deg);
                transform: perspective(400px) rotateX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: perspective(400px) rotateX(90deg);
                -moz-transform: perspective(400px) rotateX(90deg);
                -ms-transform: perspective(400px) rotateX(90deg);
                -o-transform: perspective(400px) rotateX(90deg);
                transform: perspective(400px) rotateX(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-moz-keyframes flipInY {
            0% {
                -webkit-transform: perspective(400px) rotateY(90deg);
                -moz-transform: perspective(400px) rotateY(90deg);
                -ms-transform: perspective(400px) rotateY(90deg);
                -o-transform: perspective(400px) rotateY(90deg);
                transform: perspective(400px) rotateY(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            40% {
                -webkit-transform: perspective(400px) rotateY(-10deg);
                -moz-transform: perspective(400px) rotateY(-10deg);
                -ms-transform: perspective(400px) rotateY(-10deg);
                -o-transform: perspective(400px) rotateY(-10deg);
                transform: perspective(400px) rotateY(-10deg); }
            70% {
                -webkit-transform: perspective(400px) rotateY(10deg);
                -moz-transform: perspective(400px) rotateY(10deg);
                -ms-transform: perspective(400px) rotateY(10deg);
                -o-transform: perspective(400px) rotateY(10deg);
                transform: perspective(400px) rotateY(10deg); }
            100% {
                -webkit-transform: perspective(400px) rotateY(0deg);
                -moz-transform: perspective(400px) rotateY(0deg);
                -ms-transform: perspective(400px) rotateY(0deg);
                -o-transform: perspective(400px) rotateY(0deg);
                transform: perspective(400px) rotateY(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @-webkit-keyframes flipInY {
            0% {
                -webkit-transform: perspective(400px) rotateY(90deg);
                -moz-transform: perspective(400px) rotateY(90deg);
                -ms-transform: perspective(400px) rotateY(90deg);
                -o-transform: perspective(400px) rotateY(90deg);
                transform: perspective(400px) rotateY(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            40% {
                -webkit-transform: perspective(400px) rotateY(-10deg);
                -moz-transform: perspective(400px) rotateY(-10deg);
                -ms-transform: perspective(400px) rotateY(-10deg);
                -o-transform: perspective(400px) rotateY(-10deg);
                transform: perspective(400px) rotateY(-10deg); }
            70% {
                -webkit-transform: perspective(400px) rotateY(10deg);
                -moz-transform: perspective(400px) rotateY(10deg);
                -ms-transform: perspective(400px) rotateY(10deg);
                -o-transform: perspective(400px) rotateY(10deg);
                transform: perspective(400px) rotateY(10deg); }
            100% {
                -webkit-transform: perspective(400px) rotateY(0deg);
                -moz-transform: perspective(400px) rotateY(0deg);
                -ms-transform: perspective(400px) rotateY(0deg);
                -o-transform: perspective(400px) rotateY(0deg);
                transform: perspective(400px) rotateY(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @-o-keyframes flipInY {
            0% {
                -webkit-transform: perspective(400px) rotateY(90deg);
                -moz-transform: perspective(400px) rotateY(90deg);
                -ms-transform: perspective(400px) rotateY(90deg);
                -o-transform: perspective(400px) rotateY(90deg);
                transform: perspective(400px) rotateY(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            40% {
                -webkit-transform: perspective(400px) rotateY(-10deg);
                -moz-transform: perspective(400px) rotateY(-10deg);
                -ms-transform: perspective(400px) rotateY(-10deg);
                -o-transform: perspective(400px) rotateY(-10deg);
                transform: perspective(400px) rotateY(-10deg); }
            70% {
                -webkit-transform: perspective(400px) rotateY(10deg);
                -moz-transform: perspective(400px) rotateY(10deg);
                -ms-transform: perspective(400px) rotateY(10deg);
                -o-transform: perspective(400px) rotateY(10deg);
                transform: perspective(400px) rotateY(10deg); }
            100% {
                -webkit-transform: perspective(400px) rotateY(0deg);
                -moz-transform: perspective(400px) rotateY(0deg);
                -ms-transform: perspective(400px) rotateY(0deg);
                -o-transform: perspective(400px) rotateY(0deg);
                transform: perspective(400px) rotateY(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @-ms-keyframes flipInY {
            0% {
                -webkit-transform: perspective(400px) rotateY(90deg);
                -moz-transform: perspective(400px) rotateY(90deg);
                -ms-transform: perspective(400px) rotateY(90deg);
                -o-transform: perspective(400px) rotateY(90deg);
                transform: perspective(400px) rotateY(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            40% {
                -webkit-transform: perspective(400px) rotateY(-10deg);
                -moz-transform: perspective(400px) rotateY(-10deg);
                -ms-transform: perspective(400px) rotateY(-10deg);
                -o-transform: perspective(400px) rotateY(-10deg);
                transform: perspective(400px) rotateY(-10deg); }
            70% {
                -webkit-transform: perspective(400px) rotateY(10deg);
                -moz-transform: perspective(400px) rotateY(10deg);
                -ms-transform: perspective(400px) rotateY(10deg);
                -o-transform: perspective(400px) rotateY(10deg);
                transform: perspective(400px) rotateY(10deg); }
            100% {
                -webkit-transform: perspective(400px) rotateY(0deg);
                -moz-transform: perspective(400px) rotateY(0deg);
                -ms-transform: perspective(400px) rotateY(0deg);
                -o-transform: perspective(400px) rotateY(0deg);
                transform: perspective(400px) rotateY(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @keyframes flipInY {
            0% {
                -webkit-transform: perspective(400px) rotateY(90deg);
                -moz-transform: perspective(400px) rotateY(90deg);
                -ms-transform: perspective(400px) rotateY(90deg);
                -o-transform: perspective(400px) rotateY(90deg);
                transform: perspective(400px) rotateY(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            40% {
                -webkit-transform: perspective(400px) rotateY(-10deg);
                -moz-transform: perspective(400px) rotateY(-10deg);
                -ms-transform: perspective(400px) rotateY(-10deg);
                -o-transform: perspective(400px) rotateY(-10deg);
                transform: perspective(400px) rotateY(-10deg); }
            70% {
                -webkit-transform: perspective(400px) rotateY(10deg);
                -moz-transform: perspective(400px) rotateY(10deg);
                -ms-transform: perspective(400px) rotateY(10deg);
                -o-transform: perspective(400px) rotateY(10deg);
                transform: perspective(400px) rotateY(10deg); }
            100% {
                -webkit-transform: perspective(400px) rotateY(0deg);
                -moz-transform: perspective(400px) rotateY(0deg);
                -ms-transform: perspective(400px) rotateY(0deg);
                -o-transform: perspective(400px) rotateY(0deg);
                transform: perspective(400px) rotateY(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @-moz-keyframes flipOutY {
            0% {
                -webkit-transform: perspective(400px) rotateY(0deg);
                -moz-transform: perspective(400px) rotateY(0deg);
                -ms-transform: perspective(400px) rotateY(0deg);
                -o-transform: perspective(400px) rotateY(0deg);
                transform: perspective(400px) rotateY(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: perspective(400px) rotateY(90deg);
                -moz-transform: perspective(400px) rotateY(90deg);
                -ms-transform: perspective(400px) rotateY(90deg);
                -o-transform: perspective(400px) rotateY(90deg);
                transform: perspective(400px) rotateY(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-webkit-keyframes flipOutY {
            0% {
                -webkit-transform: perspective(400px) rotateY(0deg);
                -moz-transform: perspective(400px) rotateY(0deg);
                -ms-transform: perspective(400px) rotateY(0deg);
                -o-transform: perspective(400px) rotateY(0deg);
                transform: perspective(400px) rotateY(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: perspective(400px) rotateY(90deg);
                -moz-transform: perspective(400px) rotateY(90deg);
                -ms-transform: perspective(400px) rotateY(90deg);
                -o-transform: perspective(400px) rotateY(90deg);
                transform: perspective(400px) rotateY(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-o-keyframes flipOutY {
            0% {
                -webkit-transform: perspective(400px) rotateY(0deg);
                -moz-transform: perspective(400px) rotateY(0deg);
                -ms-transform: perspective(400px) rotateY(0deg);
                -o-transform: perspective(400px) rotateY(0deg);
                transform: perspective(400px) rotateY(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: perspective(400px) rotateY(90deg);
                -moz-transform: perspective(400px) rotateY(90deg);
                -ms-transform: perspective(400px) rotateY(90deg);
                -o-transform: perspective(400px) rotateY(90deg);
                transform: perspective(400px) rotateY(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-ms-keyframes flipOutY {
            0% {
                -webkit-transform: perspective(400px) rotateY(0deg);
                -moz-transform: perspective(400px) rotateY(0deg);
                -ms-transform: perspective(400px) rotateY(0deg);
                -o-transform: perspective(400px) rotateY(0deg);
                transform: perspective(400px) rotateY(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: perspective(400px) rotateY(90deg);
                -moz-transform: perspective(400px) rotateY(90deg);
                -ms-transform: perspective(400px) rotateY(90deg);
                -o-transform: perspective(400px) rotateY(90deg);
                transform: perspective(400px) rotateY(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @keyframes flipOutY {
            0% {
                -webkit-transform: perspective(400px) rotateY(0deg);
                -moz-transform: perspective(400px) rotateY(0deg);
                -ms-transform: perspective(400px) rotateY(0deg);
                -o-transform: perspective(400px) rotateY(0deg);
                transform: perspective(400px) rotateY(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: perspective(400px) rotateY(90deg);
                -moz-transform: perspective(400px) rotateY(90deg);
                -ms-transform: perspective(400px) rotateY(90deg);
                -o-transform: perspective(400px) rotateY(90deg);
                transform: perspective(400px) rotateY(90deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-moz-keyframes lightSpeedIn {
            0% {
                -webkit-transform: translateX(100%) skewX(-30deg);
                -moz-transform: translateX(100%) skewX(-30deg);
                -ms-transform: translateX(100%) skewX(-30deg);
                -o-transform: translateX(100%) skewX(-30deg);
                transform: translateX(100%) skewX(-30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            60% {
                -webkit-transform: translateX(-20%) skewX(30deg);
                -moz-transform: translateX(-20%) skewX(30deg);
                -ms-transform: translateX(-20%) skewX(30deg);
                -o-transform: translateX(-20%) skewX(30deg);
                transform: translateX(-20%) skewX(30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            80% {
                -webkit-transform: translateX(0%) skewX(-15deg);
                -moz-transform: translateX(0%) skewX(-15deg);
                -ms-transform: translateX(0%) skewX(-15deg);
                -o-transform: translateX(0%) skewX(-15deg);
                transform: translateX(0%) skewX(-15deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(0%) skewX(0deg);
                -moz-transform: translateX(0%) skewX(0deg);
                -ms-transform: translateX(0%) skewX(0deg);
                -o-transform: translateX(0%) skewX(0deg);
                transform: translateX(0%) skewX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @-webkit-keyframes lightSpeedIn {
            0% {
                -webkit-transform: translateX(100%) skewX(-30deg);
                -moz-transform: translateX(100%) skewX(-30deg);
                -ms-transform: translateX(100%) skewX(-30deg);
                -o-transform: translateX(100%) skewX(-30deg);
                transform: translateX(100%) skewX(-30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            60% {
                -webkit-transform: translateX(-20%) skewX(30deg);
                -moz-transform: translateX(-20%) skewX(30deg);
                -ms-transform: translateX(-20%) skewX(30deg);
                -o-transform: translateX(-20%) skewX(30deg);
                transform: translateX(-20%) skewX(30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            80% {
                -webkit-transform: translateX(0%) skewX(-15deg);
                -moz-transform: translateX(0%) skewX(-15deg);
                -ms-transform: translateX(0%) skewX(-15deg);
                -o-transform: translateX(0%) skewX(-15deg);
                transform: translateX(0%) skewX(-15deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(0%) skewX(0deg);
                -moz-transform: translateX(0%) skewX(0deg);
                -ms-transform: translateX(0%) skewX(0deg);
                -o-transform: translateX(0%) skewX(0deg);
                transform: translateX(0%) skewX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @-o-keyframes lightSpeedIn {
            0% {
                -webkit-transform: translateX(100%) skewX(-30deg);
                -moz-transform: translateX(100%) skewX(-30deg);
                -ms-transform: translateX(100%) skewX(-30deg);
                -o-transform: translateX(100%) skewX(-30deg);
                transform: translateX(100%) skewX(-30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            60% {
                -webkit-transform: translateX(-20%) skewX(30deg);
                -moz-transform: translateX(-20%) skewX(30deg);
                -ms-transform: translateX(-20%) skewX(30deg);
                -o-transform: translateX(-20%) skewX(30deg);
                transform: translateX(-20%) skewX(30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            80% {
                -webkit-transform: translateX(0%) skewX(-15deg);
                -moz-transform: translateX(0%) skewX(-15deg);
                -ms-transform: translateX(0%) skewX(-15deg);
                -o-transform: translateX(0%) skewX(-15deg);
                transform: translateX(0%) skewX(-15deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(0%) skewX(0deg);
                -moz-transform: translateX(0%) skewX(0deg);
                -ms-transform: translateX(0%) skewX(0deg);
                -o-transform: translateX(0%) skewX(0deg);
                transform: translateX(0%) skewX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @-ms-keyframes lightSpeedIn {
            0% {
                -webkit-transform: translateX(100%) skewX(-30deg);
                -moz-transform: translateX(100%) skewX(-30deg);
                -ms-transform: translateX(100%) skewX(-30deg);
                -o-transform: translateX(100%) skewX(-30deg);
                transform: translateX(100%) skewX(-30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            60% {
                -webkit-transform: translateX(-20%) skewX(30deg);
                -moz-transform: translateX(-20%) skewX(30deg);
                -ms-transform: translateX(-20%) skewX(30deg);
                -o-transform: translateX(-20%) skewX(30deg);
                transform: translateX(-20%) skewX(30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            80% {
                -webkit-transform: translateX(0%) skewX(-15deg);
                -moz-transform: translateX(0%) skewX(-15deg);
                -ms-transform: translateX(0%) skewX(-15deg);
                -o-transform: translateX(0%) skewX(-15deg);
                transform: translateX(0%) skewX(-15deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(0%) skewX(0deg);
                -moz-transform: translateX(0%) skewX(0deg);
                -ms-transform: translateX(0%) skewX(0deg);
                -o-transform: translateX(0%) skewX(0deg);
                transform: translateX(0%) skewX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @keyframes lightSpeedIn {
            0% {
                -webkit-transform: translateX(100%) skewX(-30deg);
                -moz-transform: translateX(100%) skewX(-30deg);
                -ms-transform: translateX(100%) skewX(-30deg);
                -o-transform: translateX(100%) skewX(-30deg);
                transform: translateX(100%) skewX(-30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; }
            60% {
                -webkit-transform: translateX(-20%) skewX(30deg);
                -moz-transform: translateX(-20%) skewX(30deg);
                -ms-transform: translateX(-20%) skewX(30deg);
                -o-transform: translateX(-20%) skewX(30deg);
                transform: translateX(-20%) skewX(30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            80% {
                -webkit-transform: translateX(0%) skewX(-15deg);
                -moz-transform: translateX(0%) skewX(-15deg);
                -ms-transform: translateX(0%) skewX(-15deg);
                -o-transform: translateX(0%) skewX(-15deg);
                transform: translateX(0%) skewX(-15deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(0%) skewX(0deg);
                -moz-transform: translateX(0%) skewX(0deg);
                -ms-transform: translateX(0%) skewX(0deg);
                -o-transform: translateX(0%) skewX(0deg);
                transform: translateX(0%) skewX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; } }

        @-moz-keyframes lightSpeedOut {
            0% {
                -webkit-transform: translateX(0%) skewX(0deg);
                -moz-transform: translateX(0%) skewX(0deg);
                -ms-transform: translateX(0%) skewX(0deg);
                -o-transform: translateX(0%) skewX(0deg);
                transform: translateX(0%) skewX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(100%) skewX(-30deg);
                -moz-transform: translateX(100%) skewX(-30deg);
                -ms-transform: translateX(100%) skewX(-30deg);
                -o-transform: translateX(100%) skewX(-30deg);
                transform: translateX(100%) skewX(-30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-webkit-keyframes lightSpeedOut {
            0% {
                -webkit-transform: translateX(0%) skewX(0deg);
                -moz-transform: translateX(0%) skewX(0deg);
                -ms-transform: translateX(0%) skewX(0deg);
                -o-transform: translateX(0%) skewX(0deg);
                transform: translateX(0%) skewX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(100%) skewX(-30deg);
                -moz-transform: translateX(100%) skewX(-30deg);
                -ms-transform: translateX(100%) skewX(-30deg);
                -o-transform: translateX(100%) skewX(-30deg);
                transform: translateX(100%) skewX(-30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-o-keyframes lightSpeedOut {
            0% {
                -webkit-transform: translateX(0%) skewX(0deg);
                -moz-transform: translateX(0%) skewX(0deg);
                -ms-transform: translateX(0%) skewX(0deg);
                -o-transform: translateX(0%) skewX(0deg);
                transform: translateX(0%) skewX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(100%) skewX(-30deg);
                -moz-transform: translateX(100%) skewX(-30deg);
                -ms-transform: translateX(100%) skewX(-30deg);
                -o-transform: translateX(100%) skewX(-30deg);
                transform: translateX(100%) skewX(-30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-ms-keyframes lightSpeedOut {
            0% {
                -webkit-transform: translateX(0%) skewX(0deg);
                -moz-transform: translateX(0%) skewX(0deg);
                -ms-transform: translateX(0%) skewX(0deg);
                -o-transform: translateX(0%) skewX(0deg);
                transform: translateX(0%) skewX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(100%) skewX(-30deg);
                -moz-transform: translateX(100%) skewX(-30deg);
                -ms-transform: translateX(100%) skewX(-30deg);
                -o-transform: translateX(100%) skewX(-30deg);
                transform: translateX(100%) skewX(-30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @keyframes lightSpeedOut {
            0% {
                -webkit-transform: translateX(0%) skewX(0deg);
                -moz-transform: translateX(0%) skewX(0deg);
                -ms-transform: translateX(0%) skewX(0deg);
                -o-transform: translateX(0%) skewX(0deg);
                transform: translateX(0%) skewX(0deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1; }
            100% {
                -webkit-transform: translateX(100%) skewX(-30deg);
                -moz-transform: translateX(100%) skewX(-30deg);
                -ms-transform: translateX(100%) skewX(-30deg);
                -o-transform: translateX(100%) skewX(-30deg);
                transform: translateX(100%) skewX(-30deg);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-moz-keyframes rotateOut {
            0% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(200deg);
                -moz-transform: rotate(200deg);
                -ms-transform: rotate(200deg);
                -o-transform: rotate(200deg);
                transform: rotate(200deg);
                opacity: 0; } }

        @-webkit-keyframes rotateOut {
            0% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(200deg);
                -moz-transform: rotate(200deg);
                -ms-transform: rotate(200deg);
                -o-transform: rotate(200deg);
                transform: rotate(200deg);
                opacity: 0; } }

        @-o-keyframes rotateOut {
            0% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(200deg);
                -moz-transform: rotate(200deg);
                -ms-transform: rotate(200deg);
                -o-transform: rotate(200deg);
                transform: rotate(200deg);
                opacity: 0; } }

        @-ms-keyframes rotateOut {
            0% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(200deg);
                -moz-transform: rotate(200deg);
                -ms-transform: rotate(200deg);
                -o-transform: rotate(200deg);
                transform: rotate(200deg);
                opacity: 0; } }

        @keyframes rotateOut {
            0% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(200deg);
                -moz-transform: rotate(200deg);
                -ms-transform: rotate(200deg);
                -o-transform: rotate(200deg);
                transform: rotate(200deg);
                opacity: 0; } }

        @-moz-keyframes rotateOutDownLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; } }

        @-webkit-keyframes rotateOutDownLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; } }

        @-o-keyframes rotateOutDownLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; } }

        @-ms-keyframes rotateOutDownLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; } }

        @keyframes rotateOutDownLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; } }

        @-moz-keyframes rotateOutUpLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; } }

        @-webkit-keyframes rotateOutUpLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; } }

        @-o-keyframes rotateOutUpLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; } }

        @-ms-keyframes rotateOutUpLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; } }

        @keyframes rotateOutUpLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; } }

        @-moz-keyframes rotateOutDownRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; } }

        @-webkit-keyframes rotateOutDownRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; } }

        @-o-keyframes rotateOutDownRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; } }

        @-ms-keyframes rotateOutDownRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; } }

        @keyframes rotateOutDownRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; } }

        @-moz-keyframes rotateOutUpRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; } }

        @-webkit-keyframes rotateOutUpRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; } }

        @-o-keyframes rotateOutUpRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; } }

        @-ms-keyframes rotateOutUpRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; } }

        @keyframes rotateOutUpRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; } }

        @-moz-keyframes rotateIn {
            0% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(-200deg);
                -moz-transform: rotate(-200deg);
                -ms-transform: rotate(-200deg);
                -o-transform: rotate(-200deg);
                transform: rotate(-200deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-webkit-keyframes rotateIn {
            0% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(-200deg);
                -moz-transform: rotate(-200deg);
                -ms-transform: rotate(-200deg);
                -o-transform: rotate(-200deg);
                transform: rotate(-200deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-o-keyframes rotateIn {
            0% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(-200deg);
                -moz-transform: rotate(-200deg);
                -ms-transform: rotate(-200deg);
                -o-transform: rotate(-200deg);
                transform: rotate(-200deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-ms-keyframes rotateIn {
            0% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(-200deg);
                -moz-transform: rotate(-200deg);
                -ms-transform: rotate(-200deg);
                -o-transform: rotate(-200deg);
                transform: rotate(-200deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @keyframes rotateIn {
            0% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(-200deg);
                -moz-transform: rotate(-200deg);
                -ms-transform: rotate(-200deg);
                -o-transform: rotate(-200deg);
                transform: rotate(-200deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: center center 50%;
                -moz-transform-origin: center center 50%;
                -ms-transform-origin: center center 50%;
                -o-transform-origin: center center 50%;
                transform-origin: center center 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-moz-keyframes rotateInDownLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-webkit-keyframes rotateInDownLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-o-keyframes rotateInDownLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-ms-keyframes rotateInDownLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @keyframes rotateInDownLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-moz-keyframes rotateInUpLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-webkit-keyframes rotateInUpLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-o-keyframes rotateInUpLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-ms-keyframes rotateInUpLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @keyframes rotateInUpLeft {
            0% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: left bottom 50%;
                -moz-transform-origin: left bottom 50%;
                -ms-transform-origin: left bottom 50%;
                -o-transform-origin: left bottom 50%;
                transform-origin: left bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-moz-keyframes rotateInUpRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-webkit-keyframes rotateInUpRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-o-keyframes rotateInUpRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-ms-keyframes rotateInUpRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @keyframes rotateInUpRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-moz-keyframes rotateInDownRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-webkit-keyframes rotateInDownRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-o-keyframes rotateInDownRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-ms-keyframes rotateInDownRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @keyframes rotateInDownRight {
            0% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(90deg);
                -moz-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                -o-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0; }
            100% {
                -webkit-transform-origin: right bottom 50%;
                -moz-transform-origin: right bottom 50%;
                -ms-transform-origin: right bottom 50%;
                -o-transform-origin: right bottom 50%;
                transform-origin: right bottom 50%;
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                opacity: 1; } }

        @-moz-keyframes hinge {
            0% {
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            20%, 60% {
                -webkit-transform: rotate(80deg);
                -moz-transform: rotate(80deg);
                -ms-transform: rotate(80deg);
                -o-transform: rotate(80deg);
                transform: rotate(80deg);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            40% {
                -webkit-transform: rotate(60deg);
                -moz-transform: rotate(60deg);
                -ms-transform: rotate(60deg);
                -o-transform: rotate(60deg);
                transform: rotate(60deg);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            80% {
                -webkit-transform: rotate(60deg) translateY(0);
                -moz-transform: rotate(60deg) translateY(0);
                -ms-transform: rotate(60deg) translateY(0);
                -o-transform: rotate(60deg) translateY(0);
                transform: rotate(60deg) translateY(0);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            100% {
                -webkit-transform: translateY(700px);
                -moz-transform: translateY(700px);
                -ms-transform: translateY(700px);
                -o-transform: translateY(700px);
                transform: translateY(700px);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-webkit-keyframes hinge {
            0% {
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            20%, 60% {
                -webkit-transform: rotate(80deg);
                -moz-transform: rotate(80deg);
                -ms-transform: rotate(80deg);
                -o-transform: rotate(80deg);
                transform: rotate(80deg);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            40% {
                -webkit-transform: rotate(60deg);
                -moz-transform: rotate(60deg);
                -ms-transform: rotate(60deg);
                -o-transform: rotate(60deg);
                transform: rotate(60deg);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            80% {
                -webkit-transform: rotate(60deg) translateY(0);
                -moz-transform: rotate(60deg) translateY(0);
                -ms-transform: rotate(60deg) translateY(0);
                -o-transform: rotate(60deg) translateY(0);
                transform: rotate(60deg) translateY(0);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            100% {
                -webkit-transform: translateY(700px);
                -moz-transform: translateY(700px);
                -ms-transform: translateY(700px);
                -o-transform: translateY(700px);
                transform: translateY(700px);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-o-keyframes hinge {
            0% {
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            20%, 60% {
                -webkit-transform: rotate(80deg);
                -moz-transform: rotate(80deg);
                -ms-transform: rotate(80deg);
                -o-transform: rotate(80deg);
                transform: rotate(80deg);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            40% {
                -webkit-transform: rotate(60deg);
                -moz-transform: rotate(60deg);
                -ms-transform: rotate(60deg);
                -o-transform: rotate(60deg);
                transform: rotate(60deg);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            80% {
                -webkit-transform: rotate(60deg) translateY(0);
                -moz-transform: rotate(60deg) translateY(0);
                -ms-transform: rotate(60deg) translateY(0);
                -o-transform: rotate(60deg) translateY(0);
                transform: rotate(60deg) translateY(0);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            100% {
                -webkit-transform: translateY(700px);
                -moz-transform: translateY(700px);
                -ms-transform: translateY(700px);
                -o-transform: translateY(700px);
                transform: translateY(700px);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-ms-keyframes hinge {
            0% {
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            20%, 60% {
                -webkit-transform: rotate(80deg);
                -moz-transform: rotate(80deg);
                -ms-transform: rotate(80deg);
                -o-transform: rotate(80deg);
                transform: rotate(80deg);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            40% {
                -webkit-transform: rotate(60deg);
                -moz-transform: rotate(60deg);
                -ms-transform: rotate(60deg);
                -o-transform: rotate(60deg);
                transform: rotate(60deg);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            80% {
                -webkit-transform: rotate(60deg) translateY(0);
                -moz-transform: rotate(60deg) translateY(0);
                -ms-transform: rotate(60deg) translateY(0);
                -o-transform: rotate(60deg) translateY(0);
                transform: rotate(60deg) translateY(0);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            100% {
                -webkit-transform: translateY(700px);
                -moz-transform: translateY(700px);
                -ms-transform: translateY(700px);
                -o-transform: translateY(700px);
                transform: translateY(700px);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @keyframes hinge {
            0% {
                -webkit-transform: rotate(0);
                -moz-transform: rotate(0);
                -ms-transform: rotate(0);
                -o-transform: rotate(0);
                transform: rotate(0);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            20%, 60% {
                -webkit-transform: rotate(80deg);
                -moz-transform: rotate(80deg);
                -ms-transform: rotate(80deg);
                -o-transform: rotate(80deg);
                transform: rotate(80deg);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            40% {
                -webkit-transform: rotate(60deg);
                -moz-transform: rotate(60deg);
                -ms-transform: rotate(60deg);
                -o-transform: rotate(60deg);
                transform: rotate(60deg);
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            80% {
                -webkit-transform: rotate(60deg) translateY(0);
                -moz-transform: rotate(60deg) translateY(0);
                -ms-transform: rotate(60deg) translateY(0);
                -o-transform: rotate(60deg) translateY(0);
                transform: rotate(60deg) translateY(0);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform-origin: top left 50%;
                -moz-transform-origin: top left 50%;
                -ms-transform-origin: top left 50%;
                -o-transform-origin: top left 50%;
                transform-origin: top left 50%;
                -webkit-animation-timing-function: ease-in-out;
                -moz-animation-timing-function: ease-in-out;
                -ms-animation-timing-function: ease-in-out;
                -o-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out; }
            100% {
                -webkit-transform: translateY(700px);
                -moz-transform: translateY(700px);
                -ms-transform: translateY(700px);
                -o-transform: translateY(700px);
                transform: translateY(700px);
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0; } }

        @-moz-keyframes rollIn {
            0% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
                -webkit-transform: translateX(-100%) rotate(-120deg);
                -moz-transform: translateX(-100%) rotate(-120deg);
                -ms-transform: translateX(-100%) rotate(-120deg);
                -o-transform: translateX(-100%) rotate(-120deg);
                transform: translateX(-100%) rotate(-120deg); }
            100% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform: translateX(0px) rotate(0deg);
                -moz-transform: translateX(0px) rotate(0deg);
                -ms-transform: translateX(0px) rotate(0deg);
                -o-transform: translateX(0px) rotate(0deg);
                transform: translateX(0px) rotate(0deg); } }

        @-webkit-keyframes rollIn {
            0% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
                -webkit-transform: translateX(-100%) rotate(-120deg);
                -moz-transform: translateX(-100%) rotate(-120deg);
                -ms-transform: translateX(-100%) rotate(-120deg);
                -o-transform: translateX(-100%) rotate(-120deg);
                transform: translateX(-100%) rotate(-120deg); }
            100% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform: translateX(0px) rotate(0deg);
                -moz-transform: translateX(0px) rotate(0deg);
                -ms-transform: translateX(0px) rotate(0deg);
                -o-transform: translateX(0px) rotate(0deg);
                transform: translateX(0px) rotate(0deg); } }

        @-o-keyframes rollIn {
            0% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
                -webkit-transform: translateX(-100%) rotate(-120deg);
                -moz-transform: translateX(-100%) rotate(-120deg);
                -ms-transform: translateX(-100%) rotate(-120deg);
                -o-transform: translateX(-100%) rotate(-120deg);
                transform: translateX(-100%) rotate(-120deg); }
            100% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform: translateX(0px) rotate(0deg);
                -moz-transform: translateX(0px) rotate(0deg);
                -ms-transform: translateX(0px) rotate(0deg);
                -o-transform: translateX(0px) rotate(0deg);
                transform: translateX(0px) rotate(0deg); } }

        @-ms-keyframes rollIn {
            0% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
                -webkit-transform: translateX(-100%) rotate(-120deg);
                -moz-transform: translateX(-100%) rotate(-120deg);
                -ms-transform: translateX(-100%) rotate(-120deg);
                -o-transform: translateX(-100%) rotate(-120deg);
                transform: translateX(-100%) rotate(-120deg); }
            100% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform: translateX(0px) rotate(0deg);
                -moz-transform: translateX(0px) rotate(0deg);
                -ms-transform: translateX(0px) rotate(0deg);
                -o-transform: translateX(0px) rotate(0deg);
                transform: translateX(0px) rotate(0deg); } }

        @keyframes rollIn {
            0% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
                -webkit-transform: translateX(-100%) rotate(-120deg);
                -moz-transform: translateX(-100%) rotate(-120deg);
                -ms-transform: translateX(-100%) rotate(-120deg);
                -o-transform: translateX(-100%) rotate(-120deg);
                transform: translateX(-100%) rotate(-120deg); }
            100% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform: translateX(0px) rotate(0deg);
                -moz-transform: translateX(0px) rotate(0deg);
                -ms-transform: translateX(0px) rotate(0deg);
                -o-transform: translateX(0px) rotate(0deg);
                transform: translateX(0px) rotate(0deg); } }

        @-moz-keyframes rollOut {
            0% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform: translateX(0px) rotate(0deg);
                -moz-transform: translateX(0px) rotate(0deg);
                -ms-transform: translateX(0px) rotate(0deg);
                -o-transform: translateX(0px) rotate(0deg);
                transform: translateX(0px) rotate(0deg); }
            100% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
                -webkit-transform: translateX(-100%) rotate(-120deg);
                -moz-transform: translateX(-100%) rotate(-120deg);
                -ms-transform: translateX(-100%) rotate(-120deg);
                -o-transform: translateX(-100%) rotate(-120deg);
                transform: translateX(-100%) rotate(-120deg); } }

        @-webkit-keyframes rollOut {
            0% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform: translateX(0px) rotate(0deg);
                -moz-transform: translateX(0px) rotate(0deg);
                -ms-transform: translateX(0px) rotate(0deg);
                -o-transform: translateX(0px) rotate(0deg);
                transform: translateX(0px) rotate(0deg); }
            100% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
                -webkit-transform: translateX(-100%) rotate(-120deg);
                -moz-transform: translateX(-100%) rotate(-120deg);
                -ms-transform: translateX(-100%) rotate(-120deg);
                -o-transform: translateX(-100%) rotate(-120deg);
                transform: translateX(-100%) rotate(-120deg); } }

        @-o-keyframes rollOut {
            0% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform: translateX(0px) rotate(0deg);
                -moz-transform: translateX(0px) rotate(0deg);
                -ms-transform: translateX(0px) rotate(0deg);
                -o-transform: translateX(0px) rotate(0deg);
                transform: translateX(0px) rotate(0deg); }
            100% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
                -webkit-transform: translateX(-100%) rotate(-120deg);
                -moz-transform: translateX(-100%) rotate(-120deg);
                -ms-transform: translateX(-100%) rotate(-120deg);
                -o-transform: translateX(-100%) rotate(-120deg);
                transform: translateX(-100%) rotate(-120deg); } }

        @-ms-keyframes rollOut {
            0% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform: translateX(0px) rotate(0deg);
                -moz-transform: translateX(0px) rotate(0deg);
                -ms-transform: translateX(0px) rotate(0deg);
                -o-transform: translateX(0px) rotate(0deg);
                transform: translateX(0px) rotate(0deg); }
            100% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
                -webkit-transform: translateX(-100%) rotate(-120deg);
                -moz-transform: translateX(-100%) rotate(-120deg);
                -ms-transform: translateX(-100%) rotate(-120deg);
                -o-transform: translateX(-100%) rotate(-120deg);
                transform: translateX(-100%) rotate(-120deg); } }

        @keyframes rollOut {
            0% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
                opacity: 1;
                -webkit-transform: translateX(0px) rotate(0deg);
                -moz-transform: translateX(0px) rotate(0deg);
                -ms-transform: translateX(0px) rotate(0deg);
                -o-transform: translateX(0px) rotate(0deg);
                transform: translateX(0px) rotate(0deg); }
            100% {
                filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
                opacity: 0;
                -webkit-transform: translateX(-100%) rotate(-120deg);
                -moz-transform: translateX(-100%) rotate(-120deg);
                -ms-transform: translateX(-100%) rotate(-120deg);
                -o-transform: translateX(-100%) rotate(-120deg);
                transform: translateX(-100%) rotate(-120deg); } }

        /*-------------------------------------------------------------------*/
        /* === Boostrap Main SCSS === */
        /*!
 * Bootstrap v4.5.3 (https://getbootstrap.com/)
 * Copyright 2011-2020 The Bootstrap Authors
 * Copyright 2011-2020 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
        :root {
            --blue: #5E50F9;
            --indigo: #6610f2;
            --purple: #6a008a;
            --pink: #E91E63;
            --red: #f96868;
            --orange: #f2a654;
            --yellow: #f6e84e;
            --green: #46c35f;
            --teal: #58d8a3;
            --cyan: #57c7d4;
            --white: #ffffff;
            --gray: #6c757d;
            --gray-dark: #12151e;
            --blue: #5E50F9;
            --indigo: #6610f2;
            --purple: #6a008a;
            --pink: #E91E63;
            --red: #f96868;
            --orange: #f2a654;
            --yellow: #f6e84e;
            --green: #46c35f;
            --teal: #58d8a3;
            --cyan: #57c7d4;
            --white: #ffffff;
            --gray: #434a54;
            --gray-light: #aab2bd;
            --gray-lighter: #e8eff4;
            --gray-lightest: #e6e9ed;
            --black: #000000;
            --primary: #0090e7;
            --secondary: #e4eaec;
            --success: #00d25b;
            --info: #8f5fe8;
            --warning: #ffab00;
            --danger: #fc424a;
            --light: #ffffff;
            --dark: #0d0d0d;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

        *,
        *::before,
        *::after {
            box-sizing: border-box; }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

        article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
            display: block; }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #ffffff;
            text-align: left;
            background-color: #fff; }

        [tabindex="-1"]:focus:not(:focus-visible) {
            outline: 0 !important; }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible; }

        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: 0.5rem; }

        p {
            margin-top: 0;
            margin-bottom: 1rem; }

        abbr[title],
        abbr[data-original-title] {
            text-decoration: underline;
            text-decoration: underline dotted;
            cursor: help;
            border-bottom: 0;
            text-decoration-skip-ink: none; }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit; }

        ol,
        ul,
        dl {
            margin-top: 0;
            margin-bottom: 1rem; }

        ol ol,
        ul ul,
        ol ul,
        ul ol {
            margin-bottom: 0; }

        dt {
            font-weight: 700; }

        dd {
            margin-bottom: .5rem;
            margin-left: 0; }

        blockquote {
            margin: 0 0 1rem; }

        b,
        strong {
            font-weight: bolder; }

        small {
            font-size: 80%; }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline; }

        sub {
            bottom: -.25em; }

        sup {
            top: -.5em; }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent; }
        a:hover {
            color: #0056b3;
            text-decoration: underline; }

        a:not([href]):not([class]) {
            color: inherit;
            text-decoration: none; }
        a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none; }

        pre,
        code,
        kbd,
        samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em; }

        pre {
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
            -ms-overflow-style: scrollbar; }

        figure {
            margin: 0 0 1rem; }

        img {
            vertical-align: middle;
            border-style: none; }

        svg {
            overflow: hidden;
            vertical-align: middle; }

        table {
            border-collapse: collapse; }

        caption {
            padding-top: 0.9375rem;
            padding-bottom: 0.9375rem;
            color: #6c757d;
            text-align: left;
            caption-side: bottom; }

        th {
            text-align: inherit;
            text-align: -webkit-match-parent; }

        label {
            display: inline-block;
            margin-bottom: 0.5rem; }

        button {
            border-radius: 0; }

        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color; }

        input,
        button,
        select,
        optgroup,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit; }

        button,
        input {
            overflow: visible; }

        button,
        select {
            text-transform: none; }

        [role="button"] {
            cursor: pointer; }

        select {
            word-wrap: normal; }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button; }

        button:not(:disabled),
        [type="button"]:not(:disabled),
        [type="reset"]:not(:disabled),
        [type="submit"]:not(:disabled) {
            cursor: pointer; }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            padding: 0;
            border-style: none; }

        input[type="radio"],
        input[type="checkbox"] {
            box-sizing: border-box;
            padding: 0; }

        textarea {
            overflow: auto;
            resize: vertical; }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0; }

        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            padding: 0;
            margin-bottom: .5rem;
            font-size: 1.5rem;
            line-height: inherit;
            color: inherit;
            white-space: normal; }

        progress {
            vertical-align: baseline; }

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto; }

        [type="search"] {
            outline-offset: -2px;
            -webkit-appearance: none; }

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none; }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button; }

        output {
            display: inline-block; }

        summary {
            display: list-item;
            cursor: pointer; }

        template {
            display: none; }

        [hidden] {
            display: none !important; }

        h1, h2, h3, h4, h5, h6,
        .h1, .h2, .h3, .h4, .h5, .h6 {
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2; }

        h1, .h1 {
            font-size: 2.5rem; }

        h2, .h2 {
            font-size: 2rem; }

        h3, .h3 {
            font-size: 1.75rem; }

        h4, .h4 {
            font-size: 1.5rem; }

        h5, .h5 {
            font-size: 1.25rem; }

        h6, .h6 {
            font-size: 1rem; }

        .lead {
            font-size: 1.25rem;
            font-weight: 300; }

        .display-1 {
            font-size: 6rem;
            font-weight: 300;
            line-height: 1.2; }

        .display-2 {
            font-size: 5.5rem;
            font-weight: 300;
            line-height: 1.2; }

        .display-3 {
            font-size: 4.5rem;
            font-weight: 300;
            line-height: 1.2; }

        .display-4 {
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 1.2; }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1); }

        small,
        .small {
            font-size: 80%;
            font-weight: 400; }

        mark,
        .mark {
            padding: 0.2em;
            background-color: #fcf8e3; }

        .list-unstyled {
            padding-left: 0;
            list-style: none; }

        .list-inline {
            padding-left: 0;
            list-style: none; }

        .list-inline-item {
            display: inline-block; }
        .list-inline-item:not(:last-child) {
            margin-right: 0.5rem; }

        .initialism {
            font-size: 90%;
            text-transform: uppercase; }

        .blockquote {
            margin-bottom: 1rem;
            font-size: 1.25rem; }

        .blockquote-footer {
            display: block;
            font-size: 80%;
            color: #6c757d; }
        .blockquote-footer::before {
            content: "\2014\00A0"; }

        .img-fluid {
            max-width: 100%;
            height: auto; }

        .img-thumbnail {
            padding: 0.25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            max-width: 100%;
            height: auto; }

        .figure {
            display: inline-block; }

        .figure-img {
            margin-bottom: 0.5rem;
            line-height: 1; }

        .figure-caption {
            font-size: 90%;
            color: #6c757d; }

        code {
            font-size: 87.5%;
            color: #e83e8c;
            word-wrap: break-word; }
        a > code {
            color: inherit; }

        kbd {
            padding: 0.2rem 0.4rem;
            font-size: 87.5%;
            color: #fff;
            background-color: #212529;
            border-radius: 0.2rem; }
        kbd kbd {
            padding: 0;
            font-size: 100%;
            font-weight: 700; }

        pre {
            display: block;
            font-size: 87.5%;
            color: #212529; }
        pre code {
            font-size: inherit;
            color: inherit;
            word-break: normal; }

        .pre-scrollable {
            max-height: 340px;
            overflow-y: scroll; }

        .container,
        .container-fluid,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl {
            width: 100%;
            padding-right: 0.75rem;
            padding-left: 0.75rem;
            margin-right: auto;
            margin-left: auto; }

        @media (min-width: 576px) {
            .container, .container-sm {
                max-width: 540px; } }

        @media (min-width: 768px) {
            .container, .container-sm, .container-md {
                max-width: 720px; } }

        @media (min-width: 992px) {
            .container, .container-sm, .container-md, .container-lg {
                max-width: 960px; } }

        @media (min-width: 1200px) {
            .container, .container-sm, .container-md, .container-lg, .container-xl {
                max-width: 1140px; } }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -0.75rem;
            margin-left: -0.75rem; }

        .no-gutters {
            margin-right: 0;
            margin-left: 0; }
        .no-gutters > .col,
        .no-gutters > [class*="col-"] {
            padding-right: 0;
            padding-left: 0; }

        .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .lightGallery .image-tile, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
        .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
        .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
        .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
        .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 0.75rem;
            padding-left: 0.75rem; }

        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%; }

        .row-cols-1 > * {
            flex: 0 0 100%;
            max-width: 100%; }

        .row-cols-2 > * {
            flex: 0 0 50%;
            max-width: 50%; }

        .row-cols-3 > * {
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }

        .row-cols-4 > * {
            flex: 0 0 25%;
            max-width: 25%; }

        .row-cols-5 > * {
            flex: 0 0 20%;
            max-width: 20%; }

        .row-cols-6 > * {
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }

        .col-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%; }

        .col-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%; }

        .col-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }

        .col-3 {
            flex: 0 0 25%;
            max-width: 25%; }

        .col-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }

        .col-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%; }

        .col-6, .lightGallery .image-tile {
            flex: 0 0 50%;
            max-width: 50%; }

        .col-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%; }

        .col-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%; }

        .col-9 {
            flex: 0 0 75%;
            max-width: 75%; }

        .col-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%; }

        .col-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%; }

        .col-12 {
            flex: 0 0 100%;
            max-width: 100%; }

        .order-first {
            order: -1; }

        .order-last {
            order: 13; }

        .order-0 {
            order: 0; }

        .order-1 {
            order: 1; }

        .order-2 {
            order: 2; }

        .order-3 {
            order: 3; }

        .order-4 {
            order: 4; }

        .order-5 {
            order: 5; }

        .order-6 {
            order: 6; }

        .order-7 {
            order: 7; }

        .order-8 {
            order: 8; }

        .order-9 {
            order: 9; }

        .order-10 {
            order: 10; }

        .order-11 {
            order: 11; }

        .order-12 {
            order: 12; }

        .offset-1 {
            margin-left: 8.33333%; }

        .offset-2 {
            margin-left: 16.66667%; }

        .offset-3 {
            margin-left: 25%; }

        .offset-4 {
            margin-left: 33.33333%; }

        .offset-5 {
            margin-left: 41.66667%; }

        .offset-6 {
            margin-left: 50%; }

        .offset-7 {
            margin-left: 58.33333%; }

        .offset-8 {
            margin-left: 66.66667%; }

        .offset-9 {
            margin-left: 75%; }

        .offset-10 {
            margin-left: 83.33333%; }

        .offset-11 {
            margin-left: 91.66667%; }

        @media (min-width: 576px) {
            .col-sm {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%; }
            .row-cols-sm-1 > * {
                flex: 0 0 100%;
                max-width: 100%; }
            .row-cols-sm-2 > * {
                flex: 0 0 50%;
                max-width: 50%; }
            .row-cols-sm-3 > * {
                flex: 0 0 33.33333%;
                max-width: 33.33333%; }
            .row-cols-sm-4 > * {
                flex: 0 0 25%;
                max-width: 25%; }
            .row-cols-sm-5 > * {
                flex: 0 0 20%;
                max-width: 20%; }
            .row-cols-sm-6 > * {
                flex: 0 0 16.66667%;
                max-width: 16.66667%; }
            .col-sm-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%; }
            .col-sm-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%; }
            .col-sm-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%; }
            .col-sm-3 {
                flex: 0 0 25%;
                max-width: 25%; }
            .col-sm-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%; }
            .col-sm-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%; }
            .col-sm-6 {
                flex: 0 0 50%;
                max-width: 50%; }
            .col-sm-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%; }
            .col-sm-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%; }
            .col-sm-9 {
                flex: 0 0 75%;
                max-width: 75%; }
            .col-sm-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%; }
            .col-sm-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%; }
            .col-sm-12 {
                flex: 0 0 100%;
                max-width: 100%; }
            .order-sm-first {
                order: -1; }
            .order-sm-last {
                order: 13; }
            .order-sm-0 {
                order: 0; }
            .order-sm-1 {
                order: 1; }
            .order-sm-2 {
                order: 2; }
            .order-sm-3 {
                order: 3; }
            .order-sm-4 {
                order: 4; }
            .order-sm-5 {
                order: 5; }
            .order-sm-6 {
                order: 6; }
            .order-sm-7 {
                order: 7; }
            .order-sm-8 {
                order: 8; }
            .order-sm-9 {
                order: 9; }
            .order-sm-10 {
                order: 10; }
            .order-sm-11 {
                order: 11; }
            .order-sm-12 {
                order: 12; }
            .offset-sm-0 {
                margin-left: 0; }
            .offset-sm-1 {
                margin-left: 8.33333%; }
            .offset-sm-2 {
                margin-left: 16.66667%; }
            .offset-sm-3 {
                margin-left: 25%; }
            .offset-sm-4 {
                margin-left: 33.33333%; }
            .offset-sm-5 {
                margin-left: 41.66667%; }
            .offset-sm-6 {
                margin-left: 50%; }
            .offset-sm-7 {
                margin-left: 58.33333%; }
            .offset-sm-8 {
                margin-left: 66.66667%; }
            .offset-sm-9 {
                margin-left: 75%; }
            .offset-sm-10 {
                margin-left: 83.33333%; }
            .offset-sm-11 {
                margin-left: 91.66667%; } }

        @media (min-width: 768px) {
            .col-md {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%; }
            .row-cols-md-1 > * {
                flex: 0 0 100%;
                max-width: 100%; }
            .row-cols-md-2 > * {
                flex: 0 0 50%;
                max-width: 50%; }
            .row-cols-md-3 > * {
                flex: 0 0 33.33333%;
                max-width: 33.33333%; }
            .row-cols-md-4 > * {
                flex: 0 0 25%;
                max-width: 25%; }
            .row-cols-md-5 > * {
                flex: 0 0 20%;
                max-width: 20%; }
            .row-cols-md-6 > * {
                flex: 0 0 16.66667%;
                max-width: 16.66667%; }
            .col-md-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%; }
            .col-md-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%; }
            .col-md-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%; }
            .col-md-3, .lightGallery .image-tile {
                flex: 0 0 25%;
                max-width: 25%; }
            .col-md-4, .lightGallery .image-tile {
                flex: 0 0 33.33333%;
                max-width: 33.33333%; }
            .col-md-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%; }
            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%; }
            .col-md-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%; }
            .col-md-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%; }
            .col-md-9 {
                flex: 0 0 75%;
                max-width: 75%; }
            .col-md-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%; }
            .col-md-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%; }
            .col-md-12 {
                flex: 0 0 100%;
                max-width: 100%; }
            .order-md-first {
                order: -1; }
            .order-md-last {
                order: 13; }
            .order-md-0 {
                order: 0; }
            .order-md-1 {
                order: 1; }
            .order-md-2 {
                order: 2; }
            .order-md-3 {
                order: 3; }
            .order-md-4 {
                order: 4; }
            .order-md-5 {
                order: 5; }
            .order-md-6 {
                order: 6; }
            .order-md-7 {
                order: 7; }
            .order-md-8 {
                order: 8; }
            .order-md-9 {
                order: 9; }
            .order-md-10 {
                order: 10; }
            .order-md-11 {
                order: 11; }
            .order-md-12 {
                order: 12; }
            .offset-md-0 {
                margin-left: 0; }
            .offset-md-1 {
                margin-left: 8.33333%; }
            .offset-md-2 {
                margin-left: 16.66667%; }
            .offset-md-3 {
                margin-left: 25%; }
            .offset-md-4 {
                margin-left: 33.33333%; }
            .offset-md-5 {
                margin-left: 41.66667%; }
            .offset-md-6 {
                margin-left: 50%; }
            .offset-md-7 {
                margin-left: 58.33333%; }
            .offset-md-8 {
                margin-left: 66.66667%; }
            .offset-md-9 {
                margin-left: 75%; }
            .offset-md-10 {
                margin-left: 83.33333%; }
            .offset-md-11 {
                margin-left: 91.66667%; } }

        @media (min-width: 992px) {
            .col-lg {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%; }
            .row-cols-lg-1 > * {
                flex: 0 0 100%;
                max-width: 100%; }
            .row-cols-lg-2 > * {
                flex: 0 0 50%;
                max-width: 50%; }
            .row-cols-lg-3 > * {
                flex: 0 0 33.33333%;
                max-width: 33.33333%; }
            .row-cols-lg-4 > * {
                flex: 0 0 25%;
                max-width: 25%; }
            .row-cols-lg-5 > * {
                flex: 0 0 20%;
                max-width: 20%; }
            .row-cols-lg-6 > * {
                flex: 0 0 16.66667%;
                max-width: 16.66667%; }
            .col-lg-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%; }
            .col-lg-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%; }
            .col-lg-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%; }
            .col-lg-3, .lightGallery .image-tile {
                flex: 0 0 25%;
                max-width: 25%; }
            .col-lg-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%; }
            .col-lg-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%; }
            .col-lg-6 {
                flex: 0 0 50%;
                max-width: 50%; }
            .col-lg-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%; }
            .col-lg-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%; }
            .col-lg-9 {
                flex: 0 0 75%;
                max-width: 75%; }
            .col-lg-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%; }
            .col-lg-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%; }
            .col-lg-12 {
                flex: 0 0 100%;
                max-width: 100%; }
            .order-lg-first {
                order: -1; }
            .order-lg-last {
                order: 13; }
            .order-lg-0 {
                order: 0; }
            .order-lg-1 {
                order: 1; }
            .order-lg-2 {
                order: 2; }
            .order-lg-3 {
                order: 3; }
            .order-lg-4 {
                order: 4; }
            .order-lg-5 {
                order: 5; }
            .order-lg-6 {
                order: 6; }
            .order-lg-7 {
                order: 7; }
            .order-lg-8 {
                order: 8; }
            .order-lg-9 {
                order: 9; }
            .order-lg-10 {
                order: 10; }
            .order-lg-11 {
                order: 11; }
            .order-lg-12 {
                order: 12; }
            .offset-lg-0 {
                margin-left: 0; }
            .offset-lg-1 {
                margin-left: 8.33333%; }
            .offset-lg-2 {
                margin-left: 16.66667%; }
            .offset-lg-3 {
                margin-left: 25%; }
            .offset-lg-4 {
                margin-left: 33.33333%; }
            .offset-lg-5 {
                margin-left: 41.66667%; }
            .offset-lg-6 {
                margin-left: 50%; }
            .offset-lg-7 {
                margin-left: 58.33333%; }
            .offset-lg-8 {
                margin-left: 66.66667%; }
            .offset-lg-9 {
                margin-left: 75%; }
            .offset-lg-10 {
                margin-left: 83.33333%; }
            .offset-lg-11 {
                margin-left: 91.66667%; } }

        @media (min-width: 1200px) {
            .col-xl {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%; }
            .row-cols-xl-1 > * {
                flex: 0 0 100%;
                max-width: 100%; }
            .row-cols-xl-2 > * {
                flex: 0 0 50%;
                max-width: 50%; }
            .row-cols-xl-3 > * {
                flex: 0 0 33.33333%;
                max-width: 33.33333%; }
            .row-cols-xl-4 > * {
                flex: 0 0 25%;
                max-width: 25%; }
            .row-cols-xl-5 > * {
                flex: 0 0 20%;
                max-width: 20%; }
            .row-cols-xl-6 > * {
                flex: 0 0 16.66667%;
                max-width: 16.66667%; }
            .col-xl-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%; }
            .col-xl-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%; }
            .col-xl-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%; }
            .col-xl-3, .lightGallery .image-tile {
                flex: 0 0 25%;
                max-width: 25%; }
            .col-xl-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%; }
            .col-xl-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%; }
            .col-xl-6 {
                flex: 0 0 50%;
                max-width: 50%; }
            .col-xl-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%; }
            .col-xl-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%; }
            .col-xl-9 {
                flex: 0 0 75%;
                max-width: 75%; }
            .col-xl-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%; }
            .col-xl-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%; }
            .col-xl-12 {
                flex: 0 0 100%;
                max-width: 100%; }
            .order-xl-first {
                order: -1; }
            .order-xl-last {
                order: 13; }
            .order-xl-0 {
                order: 0; }
            .order-xl-1 {
                order: 1; }
            .order-xl-2 {
                order: 2; }
            .order-xl-3 {
                order: 3; }
            .order-xl-4 {
                order: 4; }
            .order-xl-5 {
                order: 5; }
            .order-xl-6 {
                order: 6; }
            .order-xl-7 {
                order: 7; }
            .order-xl-8 {
                order: 8; }
            .order-xl-9 {
                order: 9; }
            .order-xl-10 {
                order: 10; }
            .order-xl-11 {
                order: 11; }
            .order-xl-12 {
                order: 12; }
            .offset-xl-0 {
                margin-left: 0; }
            .offset-xl-1 {
                margin-left: 8.33333%; }
            .offset-xl-2 {
                margin-left: 16.66667%; }
            .offset-xl-3 {
                margin-left: 25%; }
            .offset-xl-4 {
                margin-left: 33.33333%; }
            .offset-xl-5 {
                margin-left: 41.66667%; }
            .offset-xl-6 {
                margin-left: 50%; }
            .offset-xl-7 {
                margin-left: 58.33333%; }
            .offset-xl-8 {
                margin-left: 66.66667%; }
            .offset-xl-9 {
                margin-left: 75%; }
            .offset-xl-10 {
                margin-left: 83.33333%; }
            .offset-xl-11 {
                margin-left: 91.66667%; } }

        .table, .jsgrid .jsgrid-table {
            width: 100%;
            margin-bottom: 1rem;
            color: #ffffff; }
        .table th, .jsgrid .jsgrid-table th,
        .table td,
        .jsgrid .jsgrid-table td {
            padding: 0.9375rem;
            vertical-align: top;
            border-top: 1px solid #2c2e33; }
        .table thead th, .jsgrid .jsgrid-table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #2c2e33; }
        .table tbody + tbody, .jsgrid .jsgrid-table tbody + tbody {
            border-top: 2px solid #2c2e33; }

        .table-sm th,
        .table-sm td {
            padding: 0.3rem; }

        .table-bordered {
            border: 1px solid #2c2e33; }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #2c2e33; }
        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px; }

        .table-borderless th,
        .table-borderless td,
        .table-borderless thead th,
        .table-borderless tbody + tbody {
            border: 0; }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #000000; }

        .table-hover tbody tr:hover {
            color: #212529;
            background-color: #000000; }

        .table-primary,
        .table-primary > th,
        .table-primary > td {
            background-color: #0084d5; }

        .table-primary th,
        .table-primary td,
        .table-primary thead th,
        .table-primary tbody + tbody {
            border-color: #7ac5f3; }

        .table-hover .table-primary:hover {
            background-color: #0074bc; }
        .table-hover .table-primary:hover > td,
        .table-hover .table-primary:hover > th {
            background-color: #0074bc; }

        .table-secondary,
        .table-secondary > th,
        .table-secondary > td {
            background-color: #d2d7d9; }

        .table-secondary th,
        .table-secondary td,
        .table-secondary thead th,
        .table-secondary tbody + tbody {
            border-color: #f1f4f5; }

        .table-hover .table-secondary:hover {
            background-color: #c4cbcd; }
        .table-hover .table-secondary:hover > td,
        .table-hover .table-secondary:hover > th {
            background-color: #c4cbcd; }

        .table-success,
        .table-success > th,
        .table-success > td {
            background-color: #00c154; }

        .table-success th,
        .table-success td,
        .table-success thead th,
        .table-success tbody + tbody {
            border-color: #7ae8aa; }

        .table-hover .table-success:hover {
            background-color: #00a849; }
        .table-hover .table-success:hover > td,
        .table-hover .table-success:hover > th {
            background-color: #00a849; }

        .table-info,
        .table-info > th,
        .table-info > td {
            background-color: #8457d5; }

        .table-info th,
        .table-info td,
        .table-info thead th,
        .table-info tbody + tbody {
            border-color: #c5acf3; }

        .table-hover .table-info:hover {
            background-color: #7543d0; }
        .table-hover .table-info:hover > td,
        .table-hover .table-info:hover > th {
            background-color: #7543d0; }

        .table-warning,
        .table-warning > th,
        .table-warning > td {
            background-color: #eb9d00; }

        .table-warning th,
        .table-warning td,
        .table-warning thead th,
        .table-warning tbody + tbody {
            border-color: #ffd37a; }

        .table-hover .table-warning:hover {
            background-color: #d28c00; }
        .table-hover .table-warning:hover > td,
        .table-hover .table-warning:hover > th {
            background-color: #d28c00; }

        .table-danger,
        .table-danger > th,
        .table-danger > td {
            background-color: #e83d44; }

        .table-danger th,
        .table-danger td,
        .table-danger thead th,
        .table-danger tbody + tbody {
            border-color: #fd9da1; }

        .table-hover .table-danger:hover {
            background-color: #e5262e; }
        .table-hover .table-danger:hover > td,
        .table-hover .table-danger:hover > th {
            background-color: #e5262e; }

        .table-light,
        .table-light > th,
        .table-light > td {
            background-color: #ebebeb; }

        .table-light th,
        .table-light td,
        .table-light thead th,
        .table-light tbody + tbody {
            border-color: white; }

        .table-hover .table-light:hover {
            background-color: #dedede; }
        .table-hover .table-light:hover > td,
        .table-hover .table-light:hover > th {
            background-color: #dedede; }

        .table-dark,
        .table-dark > th,
        .table-dark > td {
            background-color: #0c0c0c; }

        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody + tbody {
            border-color: #818181; }

        .table-hover .table-dark:hover {
            background-color: black; }
        .table-hover .table-dark:hover > td,
        .table-hover .table-dark:hover > th {
            background-color: black; }

        .table-active,
        .table-active > th,
        .table-active > td {
            background-color: rgba(0, 0, 0, 0.075); }

        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, 0.075); }
        .table-hover .table-active:hover > td,
        .table-hover .table-active:hover > th {
            background-color: rgba(0, 0, 0, 0.075); }

        .table .thead-dark th, .jsgrid .jsgrid-table .thead-dark th {
            color: #fff;
            background-color: #212529;
            border-color: #454d55; }

        .table .thead-light th, .jsgrid .jsgrid-table .thead-light th {
            color: #495057;
            background-color: #e9ecef;
            border-color: #2c2e33; }

        .table-dark {
            color: #fff;
            background-color: #212529; }
        .table-dark th,
        .table-dark td,
        .table-dark thead th {
            border-color: #454d55; }
        .table-dark.table-bordered {
            border: 0; }
        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, 0.05); }
        .table-dark.table-hover tbody tr:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.075); }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch; }
            .table-responsive-sm > .table-bordered {
                border: 0; } }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch; }
            .table-responsive-md > .table-bordered {
                border: 0; } }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch; }
            .table-responsive-lg > .table-bordered {
                border: 0; } }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch; }
            .table-responsive-xl > .table-bordered {
                border: 0; } }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch; }
        .table-responsive > .table-bordered {
            border: 0; }

        .form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
        .tt-query,
        .tt-hint {
            display: block;
            width: 100%;
            height: 2.875rem;
            padding: 0.56rem 0.75rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1;
            color: #495057;
            background-color: #2A3038;
            background-clip: padding-box;
            border: 1px solid #2c2e33;
            border-radius: 2px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
        @media (prefers-reduced-motion: reduce) {
            .form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
            .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
            .tt-query,
            .tt-hint {
                transition: none; } }
        .form-control::-ms-expand, .asColorPicker-input::-ms-expand, .dataTables_wrapper select::-ms-expand, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-ms-expand,
        .jsgrid .jsgrid-table .jsgrid-filter-row select::-ms-expand, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-ms-expand, .select2-container--default .select2-selection--single::-ms-expand, .select2-container--default .select2-selection--single .select2-search__field::-ms-expand, .typeahead::-ms-expand,
        .tt-query::-ms-expand,
        .tt-hint::-ms-expand {
            background-color: transparent;
            border: 0; }
        .form-control:-moz-focusring, .asColorPicker-input:-moz-focusring, .dataTables_wrapper select:-moz-focusring, .jsgrid .jsgrid-table .jsgrid-filter-row input:-moz-focusring[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select:-moz-focusring, .jsgrid .jsgrid-table .jsgrid-filter-row input:-moz-focusring[type=number], .select2-container--default .select2-selection--single:-moz-focusring, .select2-container--default .select2-selection--single .select2-search__field:-moz-focusring, .typeahead:-moz-focusring,
        .tt-query:-moz-focusring,
        .tt-hint:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #495057; }
        .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
        .tt-query:focus,
        .tt-hint:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
        .form-control::placeholder, .asColorPicker-input::placeholder, .dataTables_wrapper select::placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::placeholder,
        .jsgrid .jsgrid-table .jsgrid-filter-row select::placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::placeholder, .select2-container--default .select2-selection--single::placeholder, .select2-container--default .select2-selection--single .select2-search__field::placeholder, .typeahead::placeholder,
        .tt-query::placeholder,
        .tt-hint::placeholder {
            color: #4b5564;
            opacity: 1; }
        .form-control:disabled, .asColorPicker-input:disabled, .dataTables_wrapper select:disabled, .jsgrid .jsgrid-table .jsgrid-filter-row input:disabled[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select:disabled, .jsgrid .jsgrid-table .jsgrid-filter-row input:disabled[type=number], .select2-container--default .select2-selection--single:disabled, .select2-container--default .select2-selection--single .select2-search__field:disabled, .typeahead:disabled,
        .tt-query:disabled,
        .tt-hint:disabled, .form-control[readonly], .asColorPicker-input[readonly], .dataTables_wrapper select[readonly], .jsgrid .jsgrid-table .jsgrid-filter-row input[readonly][type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select[readonly], .jsgrid .jsgrid-table .jsgrid-filter-row input[readonly][type=number], .select2-container--default .select2-selection--single[readonly], .select2-container--default .select2-selection--single .select2-search__field[readonly], .typeahead[readonly],
        .tt-query[readonly],
        .tt-hint[readonly] {
            background-color: #e9ecef;
            opacity: 1; }

        input[type="date"].form-control, input.asColorPicker-input[type="date"], .jsgrid .jsgrid-table .jsgrid-filter-row input[type="date"][type=text], .jsgrid .jsgrid-table .jsgrid-filter-row input[type="date"][type=number], .select2-container--default input.select2-selection--single[type="date"], .select2-container--default .select2-selection--single input.select2-search__field[type="date"], input.typeahead[type="date"],
        input.tt-query[type="date"],
        input.tt-hint[type="date"],
        input[type="time"].form-control,
        input.asColorPicker-input[type="time"],
        .jsgrid .jsgrid-table .jsgrid-filter-row input[type="time"][type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row input[type="time"][type=number],
        .select2-container--default input.select2-selection--single[type="time"],
        .select2-container--default .select2-selection--single input.select2-search__field[type="time"],
        input.typeahead[type="time"],
        input.tt-query[type="time"],
        input.tt-hint[type="time"],
        input[type="datetime-local"].form-control,
        input.asColorPicker-input[type="datetime-local"],
        .jsgrid .jsgrid-table .jsgrid-filter-row input[type="datetime-local"][type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row input[type="datetime-local"][type=number],
        .select2-container--default input.select2-selection--single[type="datetime-local"],
        .select2-container--default .select2-selection--single input.select2-search__field[type="datetime-local"],
        input.typeahead[type="datetime-local"],
        input.tt-query[type="datetime-local"],
        input.tt-hint[type="datetime-local"],
        input[type="month"].form-control,
        input.asColorPicker-input[type="month"],
        .jsgrid .jsgrid-table .jsgrid-filter-row input[type="month"][type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row input[type="month"][type=number],
        .select2-container--default input.select2-selection--single[type="month"],
        .select2-container--default .select2-selection--single input.select2-search__field[type="month"],
        input.typeahead[type="month"],
        input.tt-query[type="month"],
        input.tt-hint[type="month"] {
            appearance: none; }

        select.form-control:focus::-ms-value, select.asColorPicker-input:focus::-ms-value, .dataTables_wrapper select:focus::-ms-value,
        .jsgrid .jsgrid-table .jsgrid-filter-row select:focus::-ms-value, .select2-container--default select.select2-selection--single:focus::-ms-value, .select2-container--default .select2-selection--single select.select2-search__field:focus::-ms-value, select.typeahead:focus::-ms-value,
        select.tt-query:focus::-ms-value,
        select.tt-hint:focus::-ms-value {
            color: #495057;
            background-color: #2A3038; }

        .form-control-file,
        .form-control-range {
            display: block;
            width: 100%; }

        .col-form-label {
            padding-top: calc(0.56rem + 1px);
            padding-bottom: calc(0.56rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1; }

        .col-form-label-lg {
            padding-top: calc(0.94rem + 1px);
            padding-bottom: calc(0.94rem + 1px);
            font-size: 1.25rem;
            line-height: 1.5; }

        .col-form-label-sm {
            padding-top: calc(0.5rem + 1px);
            padding-bottom: calc(0.5rem + 1px);
            font-size: 0.875rem;
            line-height: 1.5; }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding: 0.56rem 0;
            margin-bottom: 0;
            font-size: 0.875rem;
            line-height: 1;
            color: #212529;
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0; }
        .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
            padding-right: 0;
            padding-left: 0; }

        .form-control-sm {
            height: 2.575rem;
            padding: 0.5rem 0.81rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem; }

        .form-control-lg {
            height: 3.175rem;
            padding: 0.94rem 1.94rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem; }

        select.form-control[size], select.asColorPicker-input[size], .dataTables_wrapper select[size],
        .jsgrid .jsgrid-table .jsgrid-filter-row select[size], .select2-container--default select.select2-selection--single[size], .select2-container--default .select2-selection--single select.select2-search__field[size], select.typeahead[size],
        select.tt-query[size],
        select.tt-hint[size], select.form-control[multiple], select.asColorPicker-input[multiple], .dataTables_wrapper select[multiple],
        .jsgrid .jsgrid-table .jsgrid-filter-row select[multiple], .select2-container--default select.select2-selection--single[multiple], .select2-container--default .select2-selection--single select.select2-search__field[multiple], select.typeahead[multiple],
        select.tt-query[multiple],
        select.tt-hint[multiple] {
            height: auto; }

        textarea.form-control, textarea.asColorPicker-input, .select2-container--default textarea.select2-selection--single, .select2-container--default .select2-selection--single textarea.select2-search__field, textarea.typeahead,
        textarea.tt-query,
        textarea.tt-hint {
            height: auto; }

        .form-group {
            margin-bottom: 1rem; }

        .form-text {
            display: block;
            margin-top: 0.25rem; }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px; }
        .form-row > .col,
        .form-row > [class*="col-"] {
            padding-right: 5px;
            padding-left: 5px; }

        .form-check {
            position: relative;
            display: block;
            padding-left: 1.25rem; }

        .form-check-input {
            position: absolute;
            margin-top: 0.3rem;
            margin-left: -1.25rem; }
        .form-check-input[disabled] ~ .form-check-label,
        .form-check-input:disabled ~ .form-check-label {
            color: #6c7293; }

        .form-check-label {
            margin-bottom: 0; }

        .form-check-inline {
            display: inline-flex;
            align-items: center;
            padding-left: 0;
            margin-right: 0.75rem; }
        .form-check-inline .form-check-input {
            position: static;
            margin-top: 0;
            margin-right: 0.3125rem;
            margin-left: 0; }

        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #28a745; }

        .valid-tooltip {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: .1rem;
            font-size: 0.875rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgba(40, 167, 69, 0.9);
            border-radius: 0.25rem; }

        .was-validated :valid ~ .valid-feedback,
        .was-validated :valid ~ .valid-tooltip,
        .is-valid ~ .valid-feedback,
        .is-valid ~ .valid-tooltip {
            display: block; }

        .was-validated .form-control:valid, .was-validated .asColorPicker-input:valid, .was-validated .dataTables_wrapper select:valid, .dataTables_wrapper .was-validated select:valid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid[type=text],
        .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:valid, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:valid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid[type=number], .was-validated .select2-container--default .select2-selection--single:valid, .select2-container--default .was-validated .select2-selection--single:valid, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid, .was-validated .typeahead:valid,
        .was-validated .tt-query:valid,
        .was-validated .tt-hint:valid, .form-control.is-valid, .is-valid.asColorPicker-input, .dataTables_wrapper select.is-valid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=number], .select2-container--default .is-valid.select2-selection--single, .select2-container--default .select2-selection--single .is-valid.select2-search__field, .is-valid.typeahead,
        .is-valid.tt-query,
        .is-valid.tt-hint {
            border-color: #28a745;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
        .was-validated .form-control:valid:focus, .was-validated .asColorPicker-input:valid:focus, .was-validated .dataTables_wrapper select:valid:focus, .dataTables_wrapper .was-validated select:valid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid:focus[type=text],
        .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:valid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid:focus[type=number], .was-validated .select2-container--default .select2-selection--single:valid:focus, .select2-container--default .was-validated .select2-selection--single:valid:focus, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid:focus, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid:focus, .was-validated .typeahead:valid:focus,
        .was-validated .tt-query:valid:focus,
        .was-validated .tt-hint:valid:focus, .form-control.is-valid:focus, .is-valid.asColorPicker-input:focus, .dataTables_wrapper select.is-valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid:focus[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid:focus[type=number], .select2-container--default .is-valid.select2-selection--single:focus, .select2-container--default .select2-selection--single .is-valid.select2-search__field:focus, .is-valid.typeahead:focus,
        .is-valid.tt-query:focus,
        .is-valid.tt-hint:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }

        .was-validated textarea.form-control:valid, .was-validated textarea.asColorPicker-input:valid, .was-validated .select2-container--default textarea.select2-selection--single:valid, .select2-container--default .was-validated textarea.select2-selection--single:valid, .was-validated .select2-container--default .select2-selection--single textarea.select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated textarea.select2-search__field:valid, .was-validated textarea.typeahead:valid,
        .was-validated textarea.tt-query:valid,
        .was-validated textarea.tt-hint:valid, textarea.form-control.is-valid, textarea.is-valid.asColorPicker-input, .select2-container--default textarea.is-valid.select2-selection--single, .select2-container--default .select2-selection--single textarea.is-valid.select2-search__field, textarea.is-valid.typeahead,
        textarea.is-valid.tt-query,
        textarea.is-valid.tt-hint {
            padding-right: calc(1.5em + 0.75rem);
            background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem); }

        .was-validated .custom-select:valid, .custom-select.is-valid {
            border-color: #28a745;
            padding-right: calc(0.75em + 2.3125rem);
            background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
        .was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }

        .was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
            color: #28a745; }

        .was-validated .form-check-input:valid ~ .valid-feedback,
        .was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
        .form-check-input.is-valid ~ .valid-tooltip {
            display: block; }

        .was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
            color: #28a745; }
        .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
            border-color: #28a745; }

        .was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
            border-color: #34ce57;
            background-color: #34ce57; }

        .was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }

        .was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
            border-color: #28a745; }

        .was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
            border-color: #28a745; }

        .was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
            border-color: #28a745;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #dc3545; }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: .1rem;
            font-size: 0.875rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgba(220, 53, 69, 0.9);
            border-radius: 0.25rem; }

        .was-validated :invalid ~ .invalid-feedback,
        .was-validated :invalid ~ .invalid-tooltip,
        .is-invalid ~ .invalid-feedback,
        .is-invalid ~ .invalid-tooltip {
            display: block; }

        .was-validated .form-control:invalid, .was-validated .asColorPicker-input:invalid, .was-validated .dataTables_wrapper select:invalid, .dataTables_wrapper .was-validated select:invalid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid[type=text],
        .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:invalid, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:invalid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid[type=number], .was-validated .select2-container--default .select2-selection--single:invalid, .select2-container--default .was-validated .select2-selection--single:invalid, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid, .was-validated .typeahead:invalid,
        .was-validated .tt-query:invalid,
        .was-validated .tt-hint:invalid, .form-control.is-invalid, .is-invalid.asColorPicker-input, .dataTables_wrapper select.is-invalid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=number], .select2-container--default .is-invalid.select2-selection--single, .select2-container--default .select2-selection--single .is-invalid.select2-search__field, .is-invalid.typeahead,
        .is-invalid.tt-query,
        .is-invalid.tt-hint {
            border-color: #dc3545;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
        .was-validated .form-control:invalid:focus, .was-validated .asColorPicker-input:invalid:focus, .was-validated .dataTables_wrapper select:invalid:focus, .dataTables_wrapper .was-validated select:invalid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid:focus[type=text],
        .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:invalid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid:focus[type=number], .was-validated .select2-container--default .select2-selection--single:invalid:focus, .select2-container--default .was-validated .select2-selection--single:invalid:focus, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid:focus, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid:focus, .was-validated .typeahead:invalid:focus,
        .was-validated .tt-query:invalid:focus,
        .was-validated .tt-hint:invalid:focus, .form-control.is-invalid:focus, .is-invalid.asColorPicker-input:focus, .dataTables_wrapper select.is-invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid:focus[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid:focus[type=number], .select2-container--default .is-invalid.select2-selection--single:focus, .select2-container--default .select2-selection--single .is-invalid.select2-search__field:focus, .is-invalid.typeahead:focus,
        .is-invalid.tt-query:focus,
        .is-invalid.tt-hint:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }

        .was-validated textarea.form-control:invalid, .was-validated textarea.asColorPicker-input:invalid, .was-validated .select2-container--default textarea.select2-selection--single:invalid, .select2-container--default .was-validated textarea.select2-selection--single:invalid, .was-validated .select2-container--default .select2-selection--single textarea.select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated textarea.select2-search__field:invalid, .was-validated textarea.typeahead:invalid,
        .was-validated textarea.tt-query:invalid,
        .was-validated textarea.tt-hint:invalid, textarea.form-control.is-invalid, textarea.is-invalid.asColorPicker-input, .select2-container--default textarea.is-invalid.select2-selection--single, .select2-container--default .select2-selection--single textarea.is-invalid.select2-search__field, textarea.is-invalid.typeahead,
        textarea.is-invalid.tt-query,
        textarea.is-invalid.tt-hint {
            padding-right: calc(1.5em + 0.75rem);
            background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem); }

        .was-validated .custom-select:invalid, .custom-select.is-invalid {
            border-color: #dc3545;
            padding-right: calc(0.75em + 2.3125rem);
            background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
        .was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }

        .was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
            color: #dc3545; }

        .was-validated .form-check-input:invalid ~ .invalid-feedback,
        .was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
        .form-check-input.is-invalid ~ .invalid-tooltip {
            display: block; }

        .was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
            color: #dc3545; }
        .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
            border-color: #dc3545; }

        .was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
            border-color: #e4606d;
            background-color: #e4606d; }

        .was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }

        .was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
            border-color: #dc3545; }

        .was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
            border-color: #dc3545; }

        .was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }

        .form-inline {
            display: flex;
            flex-flow: row wrap;
            align-items: center; }
        .form-inline .form-check {
            width: 100%; }
        @media (min-width: 576px) {
            .form-inline label {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 0; }
            .form-inline .form-group {
                display: flex;
                flex: 0 0 auto;
                flex-flow: row wrap;
                align-items: center;
                margin-bottom: 0; }
            .form-inline .form-control, .form-inline .asColorPicker-input, .form-inline .dataTables_wrapper select, .dataTables_wrapper .form-inline select, .form-inline .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .form-inline input[type=text],
            .form-inline .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .form-inline select, .form-inline .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .form-inline input[type=number], .form-inline .select2-container--default .select2-selection--single, .select2-container--default .form-inline .select2-selection--single, .form-inline .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .form-inline .select2-search__field, .form-inline .typeahead,
            .form-inline .tt-query,
            .form-inline .tt-hint {
                display: inline-block;
                width: auto;
                vertical-align: middle; }
            .form-inline .form-control-plaintext {
                display: inline-block; }
            .form-inline .input-group, .form-inline .asColorPicker-wrap,
            .form-inline .custom-select {
                width: auto; }
            .form-inline .form-check {
                display: flex;
                align-items: center;
                justify-content: center;
                width: auto;
                padding-left: 0; }
            .form-inline .form-check-input {
                position: relative;
                flex-shrink: 0;
                margin-top: 0;
                margin-right: 0.25rem;
                margin-left: 0; }
            .form-inline .custom-control {
                align-items: center;
                justify-content: center; }
            .form-inline .custom-control-label {
                margin-bottom: 0; } }

        .btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a {
            display: inline-block;
            font-weight: 400;
            color: #ffffff;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 0.9375rem;
            line-height: 1;
            border-radius: 0.1875rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
        @media (prefers-reduced-motion: reduce) {
            .btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a {
                transition: none; } }
        .btn:hover, .fc button:hover, .ajax-upload-dragdrop .ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper .swal2-styled:hover, .wizard > .actions a:hover {
            color: #ffffff;
            text-decoration: none; }
        .btn:focus, .fc button:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .wizard > .actions a:focus, .btn.focus, .fc button.focus, .ajax-upload-dragdrop .focus.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .focus.swal2-styled, .wizard > .actions a.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
        .btn.disabled, .fc button.disabled, .ajax-upload-dragdrop .disabled.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .disabled.swal2-styled, .wizard > .actions a.disabled, .btn:disabled, .fc button:disabled, .ajax-upload-dragdrop .ajax-file-upload:disabled, .swal2-modal .swal2-buttonswrapper .swal2-styled:disabled, .wizard > .actions a:disabled {
            opacity: 0.65; }
        .btn:not(:disabled):not(.disabled), .fc button:not(:disabled):not(.disabled), .ajax-upload-dragdrop .ajax-file-upload:not(:disabled):not(.disabled), .swal2-modal .swal2-buttonswrapper .swal2-styled:not(:disabled):not(.disabled), .wizard > .actions a:not(:disabled):not(.disabled) {
            cursor: pointer; }

        a.btn.disabled, .ajax-upload-dragdrop a.disabled.ajax-file-upload, .swal2-modal .swal2-buttonswrapper a.disabled.swal2-styled, .wizard > .actions a.disabled,
        fieldset:disabled a.btn,
        fieldset:disabled .ajax-upload-dragdrop a.ajax-file-upload,
        .ajax-upload-dragdrop fieldset:disabled a.ajax-file-upload,
        fieldset:disabled .swal2-modal .swal2-buttonswrapper a.swal2-styled,
        .swal2-modal .swal2-buttonswrapper fieldset:disabled a.swal2-styled,
        fieldset:disabled .wizard > .actions a,
        .wizard > .actions fieldset:disabled a {
            pointer-events: none; }

        .btn-primary, .wizard > .actions a {
            color: #fff;
            background-color: #0090e7;
            border-color: #0090e7; }
        .btn-primary:hover, .wizard > .actions a:hover {
            color: #fff;
            background-color: #0078c1;
            border-color: #0070b4; }
        .btn-primary:focus, .wizard > .actions a:focus, .btn-primary.focus, .wizard > .actions a.focus {
            color: #fff;
            background-color: #0078c1;
            border-color: #0070b4;
            box-shadow: 0 0 0 0.2rem rgba(38, 161, 235, 0.5); }
        .btn-primary.disabled, .wizard > .actions a.disabled, .btn-primary:disabled, .wizard > .actions a:disabled {
            color: #fff;
            background-color: #0090e7;
            border-color: #0090e7; }
        .btn-primary:not(:disabled):not(.disabled):active, .wizard > .actions a:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .wizard > .actions a:not(:disabled):not(.disabled).active,
        .show > .btn-primary.dropdown-toggle,
        .wizard > .actions .show > a.dropdown-toggle {
            color: #fff;
            background-color: #0070b4;
            border-color: #0068a7; }
        .btn-primary:not(:disabled):not(.disabled):active:focus, .wizard > .actions a:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .wizard > .actions a:not(:disabled):not(.disabled).active:focus,
        .show > .btn-primary.dropdown-toggle:focus,
        .wizard > .actions .show > a.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(38, 161, 235, 0.5); }

        .btn-secondary {
            color: #212529;
            background-color: #e4eaec;
            border-color: #e4eaec; }
        .btn-secondary:hover {
            color: #212529;
            background-color: #ced9dc;
            border-color: #c6d3d7; }
        .btn-secondary:focus, .btn-secondary.focus {
            color: #212529;
            background-color: #ced9dc;
            border-color: #c6d3d7;
            box-shadow: 0 0 0 0.2rem rgba(199, 204, 207, 0.5); }
        .btn-secondary.disabled, .btn-secondary:disabled {
            color: #212529;
            background-color: #e4eaec;
            border-color: #e4eaec; }
        .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
        .show > .btn-secondary.dropdown-toggle {
            color: #212529;
            background-color: #c6d3d7;
            border-color: #bfcdd2; }
        .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
        .show > .btn-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(199, 204, 207, 0.5); }

        .btn-success {
            color: #fff;
            background-color: #00d25b;
            border-color: #00d25b; }
        .btn-success:hover {
            color: #fff;
            background-color: #00ac4a;
            border-color: #009f45; }
        .btn-success:focus, .btn-success.focus {
            color: #fff;
            background-color: #00ac4a;
            border-color: #009f45;
            box-shadow: 0 0 0 0.2rem rgba(38, 217, 116, 0.5); }
        .btn-success.disabled, .btn-success:disabled {
            color: #fff;
            background-color: #00d25b;
            border-color: #00d25b; }
        .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
        .show > .btn-success.dropdown-toggle {
            color: #fff;
            background-color: #009f45;
            border-color: #00923f; }
        .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
        .show > .btn-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(38, 217, 116, 0.5); }

        .btn-info {
            color: #fff;
            background-color: #8f5fe8;
            border-color: #8f5fe8; }
        .btn-info:hover {
            color: #fff;
            background-color: #783ee3;
            border-color: #7032e2; }
        .btn-info:focus, .btn-info.focus {
            color: #fff;
            background-color: #783ee3;
            border-color: #7032e2;
            box-shadow: 0 0 0 0.2rem rgba(160, 119, 235, 0.5); }
        .btn-info.disabled, .btn-info:disabled {
            color: #fff;
            background-color: #8f5fe8;
            border-color: #8f5fe8; }
        .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
        .show > .btn-info.dropdown-toggle {
            color: #fff;
            background-color: #7032e2;
            border-color: #6827e0; }
        .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
        .show > .btn-info.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(160, 119, 235, 0.5); }

        .btn-warning {
            color: #212529;
            background-color: #ffab00;
            border-color: #ffab00; }
        .btn-warning:hover {
            color: #212529;
            background-color: #d99100;
            border-color: #cc8900; }
        .btn-warning:focus, .btn-warning.focus {
            color: #212529;
            background-color: #d99100;
            border-color: #cc8900;
            box-shadow: 0 0 0 0.2rem rgba(222, 151, 6, 0.5); }
        .btn-warning.disabled, .btn-warning:disabled {
            color: #212529;
            background-color: #ffab00;
            border-color: #ffab00; }
        .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
        .show > .btn-warning.dropdown-toggle {
            color: #fff;
            background-color: #cc8900;
            border-color: #bf8000; }
        .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
        .show > .btn-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(222, 151, 6, 0.5); }

        .btn-danger {
            color: #fff;
            background-color: #fc424a;
            border-color: #fc424a; }
        .btn-danger:hover {
            color: #fff;
            background-color: #fb1c26;
            border-color: #fb101a; }
        .btn-danger:focus, .btn-danger.focus {
            color: #fff;
            background-color: #fb1c26;
            border-color: #fb101a;
            box-shadow: 0 0 0 0.2rem rgba(252, 94, 101, 0.5); }
        .btn-danger.disabled, .btn-danger:disabled {
            color: #fff;
            background-color: #fc424a;
            border-color: #fc424a; }
        .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
        .show > .btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #fb101a;
            border-color: #fa040f; }
        .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
        .show > .btn-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(252, 94, 101, 0.5); }

        .btn-light {
            color: #212529;
            background-color: #ffffff;
            border-color: #ffffff; }
        .btn-light:hover {
            color: #212529;
            background-color: #ececec;
            border-color: #e6e6e6; }
        .btn-light:focus, .btn-light.focus {
            color: #212529;
            background-color: #ececec;
            border-color: #e6e6e6;
            box-shadow: 0 0 0 0.2rem rgba(222, 222, 223, 0.5); }
        .btn-light.disabled, .btn-light:disabled {
            color: #212529;
            background-color: #ffffff;
            border-color: #ffffff; }
        .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
        .show > .btn-light.dropdown-toggle {
            color: #212529;
            background-color: #e6e6e6;
            border-color: #dfdfdf; }
        .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
        .show > .btn-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(222, 222, 223, 0.5); }

        .btn-dark {
            color: #fff;
            background-color: #0d0d0d;
            border-color: #0d0d0d; }
        .btn-dark:hover {
            color: #fff;
            background-color: black;
            border-color: black; }
        .btn-dark:focus, .btn-dark.focus {
            color: #fff;
            background-color: black;
            border-color: black;
            box-shadow: 0 0 0 0.2rem rgba(49, 49, 49, 0.5); }
        .btn-dark.disabled, .btn-dark:disabled {
            color: #fff;
            background-color: #0d0d0d;
            border-color: #0d0d0d; }
        .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
        .show > .btn-dark.dropdown-toggle {
            color: #fff;
            background-color: black;
            border-color: black; }
        .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
        .show > .btn-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(49, 49, 49, 0.5); }

        .btn-outline-primary, .wizard > .actions .disabled a {
            color: #0090e7;
            border-color: #0090e7; }
        .btn-outline-primary:hover, .wizard > .actions .disabled a:hover {
            color: #fff;
            background-color: #0090e7;
            border-color: #0090e7; }
        .btn-outline-primary:focus, .wizard > .actions .disabled a:focus, .btn-outline-primary.focus, .wizard > .actions .disabled a.focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 144, 231, 0.5); }
        .btn-outline-primary.disabled, .wizard > .actions .disabled a.disabled, .btn-outline-primary:disabled, .wizard > .actions .disabled a:disabled {
            color: #0090e7;
            background-color: transparent; }
        .btn-outline-primary:not(:disabled):not(.disabled):active, .wizard > .actions .disabled a:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active, .wizard > .actions .disabled a:not(:disabled):not(.disabled).active,
        .show > .btn-outline-primary.dropdown-toggle,
        .wizard > .actions .disabled .show > a.dropdown-toggle {
            color: #fff;
            background-color: #0090e7;
            border-color: #0090e7; }
        .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .wizard > .actions .disabled a:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .wizard > .actions .disabled a:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-primary.dropdown-toggle:focus,
        .wizard > .actions .disabled .show > a.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 144, 231, 0.5); }

        .btn-outline-secondary, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel {
            color: #e4eaec;
            border-color: #e4eaec; }
        .btn-outline-secondary:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:hover {
            color: #212529;
            background-color: #e4eaec;
            border-color: #e4eaec; }
        .btn-outline-secondary:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:focus, .btn-outline-secondary.focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .focus.editable-cancel {
            box-shadow: 0 0 0 0.2rem rgba(228, 234, 236, 0.5); }
        .btn-outline-secondary.disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .disabled.editable-cancel, .btn-outline-secondary:disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:disabled {
            color: #e4eaec;
            background-color: transparent; }
        .btn-outline-secondary:not(:disabled):not(.disabled):active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled).active,
        .show > .btn-outline-secondary.dropdown-toggle,
        .editable-container.editable-inline .editableform .control-group .editable-buttons .show > .dropdown-toggle.editable-cancel {
            color: #212529;
            background-color: #e4eaec;
            border-color: #e4eaec; }
        .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-secondary.dropdown-toggle:focus,
        .editable-container.editable-inline .editableform .control-group .editable-buttons .show > .dropdown-toggle.editable-cancel:focus {
            box-shadow: 0 0 0 0.2rem rgba(228, 234, 236, 0.5); }

        .btn-outline-success, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit {
            color: #00d25b;
            border-color: #00d25b; }
        .btn-outline-success:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:hover {
            color: #fff;
            background-color: #00d25b;
            border-color: #00d25b; }
        .btn-outline-success:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:focus, .btn-outline-success.focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .focus.editable-submit {
            box-shadow: 0 0 0 0.2rem rgba(0, 210, 91, 0.5); }
        .btn-outline-success.disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .disabled.editable-submit, .btn-outline-success:disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:disabled {
            color: #00d25b;
            background-color: transparent; }
        .btn-outline-success:not(:disabled):not(.disabled):active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled).active,
        .show > .btn-outline-success.dropdown-toggle,
        .editable-container.editable-inline .editableform .control-group .editable-buttons .show > .dropdown-toggle.editable-submit {
            color: #fff;
            background-color: #00d25b;
            border-color: #00d25b; }
        .btn-outline-success:not(:disabled):not(.disabled):active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-success.dropdown-toggle:focus,
        .editable-container.editable-inline .editableform .control-group .editable-buttons .show > .dropdown-toggle.editable-submit:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 210, 91, 0.5); }

        .btn-outline-info {
            color: #8f5fe8;
            border-color: #8f5fe8; }
        .btn-outline-info:hover {
            color: #fff;
            background-color: #8f5fe8;
            border-color: #8f5fe8; }
        .btn-outline-info:focus, .btn-outline-info.focus {
            box-shadow: 0 0 0 0.2rem rgba(143, 95, 232, 0.5); }
        .btn-outline-info.disabled, .btn-outline-info:disabled {
            color: #8f5fe8;
            background-color: transparent; }
        .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
        .show > .btn-outline-info.dropdown-toggle {
            color: #fff;
            background-color: #8f5fe8;
            border-color: #8f5fe8; }
        .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-info.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(143, 95, 232, 0.5); }

        .btn-outline-warning {
            color: #ffab00;
            border-color: #ffab00; }
        .btn-outline-warning:hover {
            color: #212529;
            background-color: #ffab00;
            border-color: #ffab00; }
        .btn-outline-warning:focus, .btn-outline-warning.focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 171, 0, 0.5); }
        .btn-outline-warning.disabled, .btn-outline-warning:disabled {
            color: #ffab00;
            background-color: transparent; }
        .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
        .show > .btn-outline-warning.dropdown-toggle {
            color: #212529;
            background-color: #ffab00;
            border-color: #ffab00; }
        .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 171, 0, 0.5); }

        .btn-outline-danger {
            color: #fc424a;
            border-color: #fc424a; }
        .btn-outline-danger:hover {
            color: #fff;
            background-color: #fc424a;
            border-color: #fc424a; }
        .btn-outline-danger:focus, .btn-outline-danger.focus {
            box-shadow: 0 0 0 0.2rem rgba(252, 66, 74, 0.5); }
        .btn-outline-danger.disabled, .btn-outline-danger:disabled {
            color: #fc424a;
            background-color: transparent; }
        .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
        .show > .btn-outline-danger.dropdown-toggle {
            color: #fff;
            background-color: #fc424a;
            border-color: #fc424a; }
        .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(252, 66, 74, 0.5); }

        .btn-outline-light {
            color: #ffffff;
            border-color: #ffffff; }
        .btn-outline-light:hover {
            color: #212529;
            background-color: #ffffff;
            border-color: #ffffff; }
        .btn-outline-light:focus, .btn-outline-light.focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
        .btn-outline-light.disabled, .btn-outline-light:disabled {
            color: #ffffff;
            background-color: transparent; }
        .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
        .show > .btn-outline-light.dropdown-toggle {
            color: #212529;
            background-color: #ffffff;
            border-color: #ffffff; }
        .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

        .btn-outline-dark {
            color: #0d0d0d;
            border-color: #0d0d0d; }
        .btn-outline-dark:hover {
            color: #fff;
            background-color: #0d0d0d;
            border-color: #0d0d0d; }
        .btn-outline-dark:focus, .btn-outline-dark.focus {
            box-shadow: 0 0 0 0.2rem rgba(13, 13, 13, 0.5); }
        .btn-outline-dark.disabled, .btn-outline-dark:disabled {
            color: #0d0d0d;
            background-color: transparent; }
        .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
        .show > .btn-outline-dark.dropdown-toggle {
            color: #fff;
            background-color: #0d0d0d;
            border-color: #0d0d0d; }
        .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(13, 13, 13, 0.5); }

        .btn-link {
            font-weight: 400;
            color: #007bff;
            text-decoration: none; }
        .btn-link:hover {
            color: #0056b3;
            text-decoration: underline; }
        .btn-link:focus, .btn-link.focus {
            text-decoration: underline; }
        .btn-link:disabled, .btn-link.disabled {
            color: #6c757d;
            pointer-events: none; }

        .btn-lg, .btn-group-lg > .btn, .fc .btn-group-lg > button, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled, .wizard > .actions .btn-group-lg > a {
            padding: 1rem 3rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.1875rem; }

        .btn-sm, .btn-group-sm > .btn, .fc .btn-group-sm > button, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled, .wizard > .actions .btn-group-sm > a, .fc button {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.1875rem; }

        .btn-block {
            display: block;
            width: 100%; }
        .btn-block + .btn-block {
            margin-top: 0.5rem; }

        input[type="submit"].btn-block,
        input[type="reset"].btn-block,
        input[type="button"].btn-block {
            width: 100%; }

        .fade {
            transition: opacity 0.15s linear; }
        @media (prefers-reduced-motion: reduce) {
            .fade {
                transition: none; } }
        .fade:not(.show) {
            opacity: 0; }

        .collapse:not(.show) {
            display: none; }

        .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            transition: height 0.35s ease; }
        @media (prefers-reduced-motion: reduce) {
            .collapsing {
                transition: none; } }

        .dropup,
        .dropright,
        .dropdown,
        .dropleft {
            position: relative; }

        .dropdown-toggle {
            white-space: nowrap; }
        .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent; }
        .dropdown-toggle:empty::after {
            margin-left: 0; }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: 0.5rem 0;
            margin: 0.125rem 0 0;
            font-size: 1rem;
            color: #ffffff;
            text-align: left;
            list-style: none;
            background-color: #191c24;
            background-clip: padding-box;
            border: 1px solid #2c2e33;
            border-radius: 0.25rem; }

        .dropdown-menu-left {
            right: auto;
            left: 0; }

        .dropdown-menu-right {
            right: 0;
            left: auto; }

        @media (min-width: 576px) {
            .dropdown-menu-sm-left {
                right: auto;
                left: 0; }
            .dropdown-menu-sm-right {
                right: 0;
                left: auto; } }

        @media (min-width: 768px) {
            .dropdown-menu-md-left {
                right: auto;
                left: 0; }
            .dropdown-menu-md-right {
                right: 0;
                left: auto; } }

        @media (min-width: 992px) {
            .dropdown-menu-lg-left {
                right: auto;
                left: 0; }
            .dropdown-menu-lg-right {
                right: 0;
                left: auto; } }

        @media (min-width: 1200px) {
            .dropdown-menu-xl-left {
                right: auto;
                left: 0; }
            .dropdown-menu-xl-right {
                right: 0;
                left: auto; } }

        .dropup .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: 0.125rem; }

        .dropup .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0;
            border-right: 0.3em solid transparent;
            border-bottom: 0.3em solid;
            border-left: 0.3em solid transparent; }

        .dropup .dropdown-toggle:empty::after {
            margin-left: 0; }

        .dropright .dropdown-menu {
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0;
            margin-left: 0.125rem; }

        .dropright .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0;
            border-bottom: 0.3em solid transparent;
            border-left: 0.3em solid; }

        .dropright .dropdown-toggle:empty::after {
            margin-left: 0; }

        .dropright .dropdown-toggle::after {
            vertical-align: 0; }

        .dropleft .dropdown-menu {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: 0;
            margin-right: 0.125rem; }

        .dropleft .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: ""; }

        .dropleft .dropdown-toggle::after {
            display: none; }

        .dropleft .dropdown-toggle::before {
            display: inline-block;
            margin-right: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0.3em solid;
            border-bottom: 0.3em solid transparent; }

        .dropleft .dropdown-toggle:empty::after {
            margin-left: 0; }

        .dropleft .dropdown-toggle::before {
            vertical-align: 0; }

        .dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
            right: auto;
            bottom: auto; }

        .dropdown-divider {
            height: 0;
            margin: 0.5rem 0;
            overflow: hidden;
            border-top: 1px solid #2c2e33; }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: 0.25rem 1.5rem;
            clear: both;
            font-weight: 400;
            color: #ffffff;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0; }
        .dropdown-item:hover, .dropdown-item:focus {
            color: #16181b;
            text-decoration: none;
            background-color: #13151b; }
        .dropdown-item.active, .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #007bff; }
        .dropdown-item.disabled, .dropdown-item:disabled {
            color: #6c757d;
            pointer-events: none;
            background-color: transparent; }

        .dropdown-menu.show {
            display: block; }

        .dropdown-header {
            display: block;
            padding: 0.5rem 1.5rem;
            margin-bottom: 0;
            font-size: 0.875rem;
            color: #ffffff;
            white-space: nowrap; }

        .dropdown-item-text {
            display: block;
            padding: 0.25rem 1.5rem;
            color: #ffffff; }

        .btn-group, .fc .fc-button-group,
        .btn-group-vertical {
            position: relative;
            display: inline-flex;
            vertical-align: middle; }
        .btn-group > .btn, .fc .fc-button-group > .btn, .fc .btn-group > button, .fc .fc-button-group > button, .ajax-upload-dragdrop .btn-group > .ajax-file-upload, .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled, .wizard > .actions .btn-group > a, .fc .wizard > .actions .fc-button-group > a, .wizard > .actions .fc .fc-button-group > a,
        .btn-group-vertical > .btn,
        .fc .btn-group-vertical > button,
        .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled,
        .wizard > .actions .btn-group-vertical > a {
            position: relative;
            flex: 1 1 auto; }
        .btn-group > .btn:hover, .fc .fc-button-group > .btn:hover, .fc .btn-group > button:hover, .fc .fc-button-group > button:hover, .ajax-upload-dragdrop .btn-group > .ajax-file-upload:hover, .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:hover, .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:hover, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:hover, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:hover, .wizard > .actions .btn-group > a:hover, .fc .wizard > .actions .fc-button-group > a:hover, .wizard > .actions .fc .fc-button-group > a:hover,
        .btn-group-vertical > .btn:hover,
        .fc .btn-group-vertical > button:hover,
        .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:hover,
        .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:hover,
        .wizard > .actions .btn-group-vertical > a:hover {
            z-index: 1; }
        .btn-group > .btn:focus, .fc .fc-button-group > .btn:focus, .fc .btn-group > button:focus, .fc .fc-button-group > button:focus, .ajax-upload-dragdrop .btn-group > .ajax-file-upload:focus, .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:focus, .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:focus, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:focus, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:focus, .wizard > .actions .btn-group > a:focus, .fc .wizard > .actions .fc-button-group > a:focus, .wizard > .actions .fc .fc-button-group > a:focus, .btn-group > .btn:active, .fc .fc-button-group > .btn:active, .fc .btn-group > button:active, .fc .fc-button-group > button:active, .ajax-upload-dragdrop .btn-group > .ajax-file-upload:active, .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:active, .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:active, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:active, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:active, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:active, .wizard > .actions .btn-group > a:active, .fc .wizard > .actions .fc-button-group > a:active, .wizard > .actions .fc .fc-button-group > a:active, .btn-group > .btn.active, .fc .fc-button-group > .btn.active, .fc .btn-group > button.active, .fc .fc-button-group > button.active, .ajax-upload-dragdrop .btn-group > .active.ajax-file-upload, .fc .ajax-upload-dragdrop .fc-button-group > .active.ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group > .active.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group > .active.swal2-styled, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .active.swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .active.swal2-styled, .wizard > .actions .btn-group > a.active, .fc .wizard > .actions .fc-button-group > a.active, .wizard > .actions .fc .fc-button-group > a.active,
        .btn-group-vertical > .btn:focus,
        .fc .btn-group-vertical > button:focus,
        .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:focus,
        .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:focus,
        .wizard > .actions .btn-group-vertical > a:focus,
        .btn-group-vertical > .btn:active,
        .fc .btn-group-vertical > button:active,
        .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:active,
        .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:active,
        .wizard > .actions .btn-group-vertical > a:active,
        .btn-group-vertical > .btn.active,
        .fc .btn-group-vertical > button.active,
        .ajax-upload-dragdrop .btn-group-vertical > .active.ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .active.swal2-styled,
        .wizard > .actions .btn-group-vertical > a.active {
            z-index: 1; }

        .btn-toolbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start; }
        .btn-toolbar .input-group, .btn-toolbar .asColorPicker-wrap {
            width: auto; }

        .btn-group > .btn:not(:first-child), .fc .fc-button-group > .btn:not(:first-child), .fc .btn-group > button:not(:first-child), .fc .fc-button-group > button:not(:first-child), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:first-child), .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:not(:first-child), .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:not(:first-child), .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:not(:first-child), .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:not(:first-child), .wizard > .actions .btn-group > a:not(:first-child), .fc .wizard > .actions .fc-button-group > a:not(:first-child), .wizard > .actions .fc .fc-button-group > a:not(:first-child),
        .btn-group > .btn-group:not(:first-child),
        .fc .fc-button-group > .btn-group:not(:first-child),
        .fc .btn-group > .fc-button-group:not(:first-child),
        .fc .fc-button-group > .fc-button-group:not(:first-child) {
            margin-left: -1px; }

        .btn-group > .btn:not(:last-child):not(.dropdown-toggle), .fc .fc-button-group > .btn:not(:last-child):not(.dropdown-toggle), .fc .btn-group > button:not(:last-child):not(.dropdown-toggle), .fc .fc-button-group > button:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:not(:last-child):not(.dropdown-toggle), .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:not(:last-child):not(.dropdown-toggle), .wizard > .actions .btn-group > a:not(:last-child):not(.dropdown-toggle), .fc .wizard > .actions .fc-button-group > a:not(:last-child):not(.dropdown-toggle), .wizard > .actions .fc .fc-button-group > a:not(:last-child):not(.dropdown-toggle),
        .btn-group > .btn-group:not(:last-child) > .btn,
        .fc .fc-button-group > .btn-group:not(:last-child) > .btn,
        .fc .btn-group > .fc-button-group:not(:last-child) > .btn,
        .fc .fc-button-group > .fc-button-group:not(:last-child) > .btn,
        .fc .btn-group > .btn-group:not(:last-child) > button,
        .fc .fc-button-group > .btn-group:not(:last-child) > button,
        .fc .btn-group > .fc-button-group:not(:last-child) > button,
        .fc .fc-button-group > .fc-button-group:not(:last-child) > button,
        .ajax-upload-dragdrop .btn-group > .btn-group:not(:last-child) > .ajax-file-upload,
        .fc .ajax-upload-dragdrop .fc-button-group > .btn-group:not(:last-child) > .ajax-file-upload,
        .ajax-upload-dragdrop .fc .fc-button-group > .btn-group:not(:last-child) > .ajax-file-upload,
        .fc .ajax-upload-dragdrop .btn-group > .fc-button-group:not(:last-child) > .ajax-file-upload,
        .ajax-upload-dragdrop .fc .btn-group > .fc-button-group:not(:last-child) > .ajax-file-upload,
        .fc .ajax-upload-dragdrop .fc-button-group > .fc-button-group:not(:last-child) > .ajax-file-upload,
        .ajax-upload-dragdrop .fc .fc-button-group > .fc-button-group:not(:last-child) > .ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .btn-group > .btn-group:not(:last-child) > .swal2-styled,
        .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .btn-group:not(:last-child) > .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .btn-group:not(:last-child) > .swal2-styled,
        .fc .swal2-modal .swal2-buttonswrapper .btn-group > .fc-button-group:not(:last-child) > .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .fc .btn-group > .fc-button-group:not(:last-child) > .swal2-styled,
        .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .fc-button-group:not(:last-child) > .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .fc-button-group:not(:last-child) > .swal2-styled,
        .wizard > .actions .btn-group > .btn-group:not(:last-child) > a,
        .fc .wizard > .actions .fc-button-group > .btn-group:not(:last-child) > a,
        .wizard > .actions .fc .fc-button-group > .btn-group:not(:last-child) > a,
        .fc .wizard > .actions .btn-group > .fc-button-group:not(:last-child) > a,
        .wizard > .actions .fc .btn-group > .fc-button-group:not(:last-child) > a,
        .fc .wizard > .actions .fc-button-group > .fc-button-group:not(:last-child) > a,
        .wizard > .actions .fc .fc-button-group > .fc-button-group:not(:last-child) > a {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0; }

        .btn-group > .btn:not(:first-child), .fc .fc-button-group > .btn:not(:first-child), .fc .btn-group > button:not(:first-child), .fc .fc-button-group > button:not(:first-child), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:first-child), .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:not(:first-child), .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:not(:first-child), .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:not(:first-child), .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:not(:first-child), .wizard > .actions .btn-group > a:not(:first-child), .fc .wizard > .actions .fc-button-group > a:not(:first-child), .wizard > .actions .fc .fc-button-group > a:not(:first-child),
        .btn-group > .btn-group:not(:first-child) > .btn,
        .fc .fc-button-group > .btn-group:not(:first-child) > .btn,
        .fc .btn-group > .fc-button-group:not(:first-child) > .btn,
        .fc .fc-button-group > .fc-button-group:not(:first-child) > .btn,
        .fc .btn-group > .btn-group:not(:first-child) > button,
        .fc .fc-button-group > .btn-group:not(:first-child) > button,
        .fc .btn-group > .fc-button-group:not(:first-child) > button,
        .fc .fc-button-group > .fc-button-group:not(:first-child) > button,
        .ajax-upload-dragdrop .btn-group > .btn-group:not(:first-child) > .ajax-file-upload,
        .fc .ajax-upload-dragdrop .fc-button-group > .btn-group:not(:first-child) > .ajax-file-upload,
        .ajax-upload-dragdrop .fc .fc-button-group > .btn-group:not(:first-child) > .ajax-file-upload,
        .fc .ajax-upload-dragdrop .btn-group > .fc-button-group:not(:first-child) > .ajax-file-upload,
        .ajax-upload-dragdrop .fc .btn-group > .fc-button-group:not(:first-child) > .ajax-file-upload,
        .fc .ajax-upload-dragdrop .fc-button-group > .fc-button-group:not(:first-child) > .ajax-file-upload,
        .ajax-upload-dragdrop .fc .fc-button-group > .fc-button-group:not(:first-child) > .ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .btn-group > .btn-group:not(:first-child) > .swal2-styled,
        .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .btn-group:not(:first-child) > .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .btn-group:not(:first-child) > .swal2-styled,
        .fc .swal2-modal .swal2-buttonswrapper .btn-group > .fc-button-group:not(:first-child) > .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .fc .btn-group > .fc-button-group:not(:first-child) > .swal2-styled,
        .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .fc-button-group:not(:first-child) > .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .fc-button-group:not(:first-child) > .swal2-styled,
        .wizard > .actions .btn-group > .btn-group:not(:first-child) > a,
        .fc .wizard > .actions .fc-button-group > .btn-group:not(:first-child) > a,
        .wizard > .actions .fc .fc-button-group > .btn-group:not(:first-child) > a,
        .fc .wizard > .actions .btn-group > .fc-button-group:not(:first-child) > a,
        .wizard > .actions .fc .btn-group > .fc-button-group:not(:first-child) > a,
        .fc .wizard > .actions .fc-button-group > .fc-button-group:not(:first-child) > a,
        .wizard > .actions .fc .fc-button-group > .fc-button-group:not(:first-child) > a {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0; }

        .dropdown-toggle-split {
            padding-right: 0.5625rem;
            padding-left: 0.5625rem; }
        .dropdown-toggle-split::after,
        .dropup .dropdown-toggle-split::after,
        .dropright .dropdown-toggle-split::after {
            margin-left: 0; }
        .dropleft .dropdown-toggle-split::before {
            margin-right: 0; }

        .btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split, .fc .btn-group-sm > button + .dropdown-toggle-split, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload + .dropdown-toggle-split, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled + .dropdown-toggle-split, .wizard > .actions .btn-group-sm > a + .dropdown-toggle-split, .fc button + .dropdown-toggle-split {
            padding-right: 0.375rem;
            padding-left: 0.375rem; }

        .btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split, .fc .btn-group-lg > button + .dropdown-toggle-split, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload + .dropdown-toggle-split, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled + .dropdown-toggle-split, .wizard > .actions .btn-group-lg > a + .dropdown-toggle-split {
            padding-right: 2.25rem;
            padding-left: 2.25rem; }

        .btn-group-vertical {
            flex-direction: column;
            align-items: flex-start;
            justify-content: center; }

        .btn-group-vertical > .btn,
        .fc .btn-group-vertical > button,
        .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled,
        .wizard > .actions .btn-group-vertical > a,
        .btn-group-vertical > .btn-group,
        .fc .btn-group-vertical > .fc-button-group {
            width: 100%; }
        .btn-group-vertical > .btn:not(:first-child), .fc .btn-group-vertical > button:not(:first-child), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:not(:first-child), .wizard > .actions .btn-group-vertical > a:not(:first-child),
        .btn-group-vertical > .btn-group:not(:first-child),
        .fc .btn-group-vertical > .fc-button-group:not(:first-child) {
            margin-top: -1px; }
        .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle), .fc .btn-group-vertical > button:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:not(:last-child):not(.dropdown-toggle), .wizard > .actions .btn-group-vertical > a:not(:last-child):not(.dropdown-toggle),
        .btn-group-vertical > .btn-group:not(:last-child) > .btn,
        .fc .btn-group-vertical > .fc-button-group:not(:last-child) > .btn,
        .fc .btn-group-vertical > .btn-group:not(:last-child) > button,
        .fc .btn-group-vertical > .fc-button-group:not(:last-child) > button,
        .ajax-upload-dragdrop .btn-group-vertical > .btn-group:not(:last-child) > .ajax-file-upload,
        .fc .ajax-upload-dragdrop .btn-group-vertical > .fc-button-group:not(:last-child) > .ajax-file-upload,
        .ajax-upload-dragdrop .fc .btn-group-vertical > .fc-button-group:not(:last-child) > .ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn-group:not(:last-child) > .swal2-styled,
        .fc .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .fc-button-group:not(:last-child) > .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .fc .btn-group-vertical > .fc-button-group:not(:last-child) > .swal2-styled,
        .wizard > .actions .btn-group-vertical > .btn-group:not(:last-child) > a,
        .fc .wizard > .actions .btn-group-vertical > .fc-button-group:not(:last-child) > a,
        .wizard > .actions .fc .btn-group-vertical > .fc-button-group:not(:last-child) > a {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0; }
        .btn-group-vertical > .btn:not(:first-child), .fc .btn-group-vertical > button:not(:first-child), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:not(:first-child), .wizard > .actions .btn-group-vertical > a:not(:first-child),
        .btn-group-vertical > .btn-group:not(:first-child) > .btn,
        .fc .btn-group-vertical > .fc-button-group:not(:first-child) > .btn,
        .fc .btn-group-vertical > .btn-group:not(:first-child) > button,
        .fc .btn-group-vertical > .fc-button-group:not(:first-child) > button,
        .ajax-upload-dragdrop .btn-group-vertical > .btn-group:not(:first-child) > .ajax-file-upload,
        .fc .ajax-upload-dragdrop .btn-group-vertical > .fc-button-group:not(:first-child) > .ajax-file-upload,
        .ajax-upload-dragdrop .fc .btn-group-vertical > .fc-button-group:not(:first-child) > .ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn-group:not(:first-child) > .swal2-styled,
        .fc .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .fc-button-group:not(:first-child) > .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .fc .btn-group-vertical > .fc-button-group:not(:first-child) > .swal2-styled,
        .wizard > .actions .btn-group-vertical > .btn-group:not(:first-child) > a,
        .fc .wizard > .actions .btn-group-vertical > .fc-button-group:not(:first-child) > a,
        .wizard > .actions .fc .btn-group-vertical > .fc-button-group:not(:first-child) > a {
            border-top-left-radius: 0;
            border-top-right-radius: 0; }

        .btn-group-toggle > .btn, .fc .btn-group-toggle > button, .ajax-upload-dragdrop .btn-group-toggle > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .swal2-styled, .wizard > .actions .btn-group-toggle > a,
        .btn-group-toggle > .btn-group > .btn,
        .fc .btn-group-toggle > .fc-button-group > .btn,
        .fc .btn-group-toggle > .btn-group > button,
        .fc .btn-group-toggle > .fc-button-group > button,
        .ajax-upload-dragdrop .btn-group-toggle > .btn-group > .ajax-file-upload,
        .fc .ajax-upload-dragdrop .btn-group-toggle > .fc-button-group > .ajax-file-upload,
        .ajax-upload-dragdrop .fc .btn-group-toggle > .fc-button-group > .ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .btn-group > .swal2-styled,
        .fc .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .fc-button-group > .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .fc .btn-group-toggle > .fc-button-group > .swal2-styled,
        .wizard > .actions .btn-group-toggle > .btn-group > a,
        .fc .wizard > .actions .btn-group-toggle > .fc-button-group > a,
        .wizard > .actions .fc .btn-group-toggle > .fc-button-group > a {
            margin-bottom: 0; }
        .btn-group-toggle > .btn input[type="radio"], .fc .btn-group-toggle > button input[type="radio"], .ajax-upload-dragdrop .btn-group-toggle > .ajax-file-upload input[type="radio"], .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .swal2-styled input[type="radio"], .wizard > .actions .btn-group-toggle > a input[type="radio"],
        .btn-group-toggle > .btn input[type="checkbox"],
        .fc .btn-group-toggle > button input[type="checkbox"],
        .ajax-upload-dragdrop .btn-group-toggle > .ajax-file-upload input[type="checkbox"],
        .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .swal2-styled input[type="checkbox"],
        .wizard > .actions .btn-group-toggle > a input[type="checkbox"],
        .btn-group-toggle > .btn-group > .btn input[type="radio"],
        .fc .btn-group-toggle > .fc-button-group > .btn input[type="radio"],
        .fc .btn-group-toggle > .btn-group > button input[type="radio"],
        .fc .btn-group-toggle > .fc-button-group > button input[type="radio"],
        .ajax-upload-dragdrop .btn-group-toggle > .btn-group > .ajax-file-upload input[type="radio"],
        .fc .ajax-upload-dragdrop .btn-group-toggle > .fc-button-group > .ajax-file-upload input[type="radio"],
        .ajax-upload-dragdrop .fc .btn-group-toggle > .fc-button-group > .ajax-file-upload input[type="radio"],
        .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .btn-group > .swal2-styled input[type="radio"],
        .fc .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .fc-button-group > .swal2-styled input[type="radio"],
        .swal2-modal .swal2-buttonswrapper .fc .btn-group-toggle > .fc-button-group > .swal2-styled input[type="radio"],
        .wizard > .actions .btn-group-toggle > .btn-group > a input[type="radio"],
        .fc .wizard > .actions .btn-group-toggle > .fc-button-group > a input[type="radio"],
        .wizard > .actions .fc .btn-group-toggle > .fc-button-group > a input[type="radio"],
        .btn-group-toggle > .btn-group > .btn input[type="checkbox"],
        .fc .btn-group-toggle > .fc-button-group > .btn input[type="checkbox"],
        .fc .btn-group-toggle > .btn-group > button input[type="checkbox"],
        .fc .btn-group-toggle > .fc-button-group > button input[type="checkbox"],
        .ajax-upload-dragdrop .btn-group-toggle > .btn-group > .ajax-file-upload input[type="checkbox"],
        .fc .ajax-upload-dragdrop .btn-group-toggle > .fc-button-group > .ajax-file-upload input[type="checkbox"],
        .ajax-upload-dragdrop .fc .btn-group-toggle > .fc-button-group > .ajax-file-upload input[type="checkbox"],
        .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .btn-group > .swal2-styled input[type="checkbox"],
        .fc .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .fc-button-group > .swal2-styled input[type="checkbox"],
        .swal2-modal .swal2-buttonswrapper .fc .btn-group-toggle > .fc-button-group > .swal2-styled input[type="checkbox"],
        .wizard > .actions .btn-group-toggle > .btn-group > a input[type="checkbox"],
        .fc .wizard > .actions .btn-group-toggle > .fc-button-group > a input[type="checkbox"],
        .wizard > .actions .fc .btn-group-toggle > .fc-button-group > a input[type="checkbox"] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none; }

        .input-group, .asColorPicker-wrap {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%; }
        .input-group > .form-control, .asColorPicker-wrap > .form-control, .input-group > .asColorPicker-input, .asColorPicker-wrap > .asColorPicker-input, .dataTables_wrapper .input-group > select, .dataTables_wrapper .asColorPicker-wrap > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number], .select2-container--default .input-group > .select2-selection--single, .select2-container--default .asColorPicker-wrap > .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field, .input-group > .typeahead, .asColorPicker-wrap > .typeahead,
        .input-group > .tt-query,
        .asColorPicker-wrap > .tt-query,
        .input-group > .tt-hint,
        .asColorPicker-wrap > .tt-hint,
        .input-group > .form-control-plaintext,
        .asColorPicker-wrap > .form-control-plaintext,
        .input-group > .custom-select,
        .asColorPicker-wrap > .custom-select,
        .input-group > .custom-file,
        .asColorPicker-wrap > .custom-file {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
            margin-bottom: 0; }
        .input-group > .form-control + .form-control, .asColorPicker-wrap > .form-control + .form-control, .input-group > .asColorPicker-input + .form-control, .asColorPicker-wrap > .asColorPicker-input + .form-control, .dataTables_wrapper .input-group > select + .form-control, .dataTables_wrapper .asColorPicker-wrap > select + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .form-control, .select2-container--default .input-group > .select2-selection--single + .form-control, .select2-container--default .asColorPicker-wrap > .select2-selection--single + .form-control, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .form-control, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .form-control, .input-group > .typeahead + .form-control, .asColorPicker-wrap > .typeahead + .form-control, .input-group > .tt-query + .form-control, .asColorPicker-wrap > .tt-query + .form-control, .input-group > .tt-hint + .form-control, .asColorPicker-wrap > .tt-hint + .form-control, .input-group > .form-control + .asColorPicker-input, .asColorPicker-wrap > .form-control + .asColorPicker-input, .input-group > .asColorPicker-input + .asColorPicker-input, .asColorPicker-wrap > .asColorPicker-input + .asColorPicker-input, .dataTables_wrapper .input-group > select + .asColorPicker-input, .dataTables_wrapper .asColorPicker-wrap > select + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .asColorPicker-input, .select2-container--default .input-group > .select2-selection--single + .asColorPicker-input, .select2-container--default .asColorPicker-wrap > .select2-selection--single + .asColorPicker-input, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .asColorPicker-input, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .asColorPicker-input, .input-group > .typeahead + .asColorPicker-input, .asColorPicker-wrap > .typeahead + .asColorPicker-input, .input-group > .tt-query + .asColorPicker-input, .asColorPicker-wrap > .tt-query + .asColorPicker-input, .input-group > .tt-hint + .asColorPicker-input, .asColorPicker-wrap > .tt-hint + .asColorPicker-input, .dataTables_wrapper .input-group > .form-control + select, .dataTables_wrapper .asColorPicker-wrap > .form-control + select, .dataTables_wrapper .input-group > .asColorPicker-input + select, .dataTables_wrapper .asColorPicker-wrap > .asColorPicker-input + select, .dataTables_wrapper .input-group > select + select, .dataTables_wrapper .asColorPicker-wrap > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > input[type=text] + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > input[type=text] + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > select + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > select + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > input[type=number] + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > input[type=number] + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + select, .select2-container--default .dataTables_wrapper .input-group > .select2-selection--single + select, .dataTables_wrapper .select2-container--default .input-group > .select2-selection--single + select, .select2-container--default .dataTables_wrapper .asColorPicker-wrap > .select2-selection--single + select, .dataTables_wrapper .select2-container--default .asColorPicker-wrap > .select2-selection--single + select, .select2-container--default .select2-selection--single .dataTables_wrapper .input-group > .select2-search__field + select, .dataTables_wrapper .select2-container--default .select2-selection--single .input-group > .select2-search__field + select, .select2-container--default .select2-selection--single .dataTables_wrapper .asColorPicker-wrap > .select2-search__field + select, .dataTables_wrapper .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + select, .dataTables_wrapper .input-group > .typeahead + select, .dataTables_wrapper .asColorPicker-wrap > .typeahead + select, .dataTables_wrapper .input-group > .tt-query + select, .dataTables_wrapper .asColorPicker-wrap > .tt-query + select, .dataTables_wrapper .input-group > .tt-hint + select, .dataTables_wrapper .asColorPicker-wrap > .tt-hint + select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .asColorPicker-input + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .asColorPicker-input + input[type=text], .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > select + input[type=text], .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + input[type=text], .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-selection--single + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > .select2-selection--single + input[type=text], .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-selection--single + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > .select2-selection--single + input[type=text], .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-search__field + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > .select2-search__field + input[type=text], .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-search__field + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .typeahead + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .typeahead + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .tt-query + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .tt-query + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .tt-hint + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .tt-hint + input[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .asColorPicker-input + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .asColorPicker-input + select,
        .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > select + select,
        .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > select + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + select,
        .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-selection--single + select, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > .select2-selection--single + select,
        .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-selection--single + select, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > .select2-selection--single + select,
        .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-search__field + select, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > .select2-search__field + select,
        .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-search__field + select, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .typeahead + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .typeahead + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .tt-query + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .tt-query + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .tt-hint + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .tt-hint + select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .asColorPicker-input + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .asColorPicker-input + input[type=number], .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > select + input[type=number], .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + input[type=number], .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-selection--single + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > .select2-selection--single + input[type=number], .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-selection--single + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > .select2-selection--single + input[type=number], .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-search__field + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > .select2-search__field + input[type=number], .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-search__field + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .typeahead + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .typeahead + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .tt-query + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .tt-query + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .tt-hint + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .tt-hint + input[type=number], .select2-container--default .input-group > .form-control + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .form-control + .select2-selection--single, .select2-container--default .input-group > .asColorPicker-input + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .asColorPicker-input + .select2-selection--single, .dataTables_wrapper .select2-container--default .input-group > select + .select2-selection--single, .select2-container--default .dataTables_wrapper .input-group > select + .select2-selection--single, .dataTables_wrapper .select2-container--default .asColorPicker-wrap > select + .select2-selection--single, .select2-container--default .dataTables_wrapper .asColorPicker-wrap > select + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > input[type=text] + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > input[type=text] + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > select + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > select + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > input[type=number] + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > input[type=number] + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .select2-selection--single, .select2-container--default .input-group > .select2-selection--single + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .select2-selection--single + .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .select2-selection--single, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .select2-selection--single, .select2-container--default .input-group > .typeahead + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .typeahead + .select2-selection--single, .select2-container--default .input-group > .tt-query + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .tt-query + .select2-selection--single, .select2-container--default .input-group > .tt-hint + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .tt-hint + .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .form-control + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .form-control + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .asColorPicker-input + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .asColorPicker-input + .select2-search__field, .dataTables_wrapper .select2-container--default .select2-selection--single .input-group > select + .select2-search__field, .select2-container--default .select2-selection--single .dataTables_wrapper .input-group > select + .select2-search__field, .dataTables_wrapper .select2-container--default .select2-selection--single .asColorPicker-wrap > select + .select2-search__field, .select2-container--default .select2-selection--single .dataTables_wrapper .asColorPicker-wrap > select + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > input[type=text] + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > input[type=text] + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > select + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > select + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > input[type=number] + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > input[type=number] + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .select2-selection--single + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-selection--single + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .typeahead + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .typeahead + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .tt-query + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .tt-query + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .tt-hint + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .tt-hint + .select2-search__field, .input-group > .form-control + .typeahead, .asColorPicker-wrap > .form-control + .typeahead, .input-group > .asColorPicker-input + .typeahead, .asColorPicker-wrap > .asColorPicker-input + .typeahead, .dataTables_wrapper .input-group > select + .typeahead, .dataTables_wrapper .asColorPicker-wrap > select + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .typeahead, .select2-container--default .input-group > .select2-selection--single + .typeahead, .select2-container--default .asColorPicker-wrap > .select2-selection--single + .typeahead, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .typeahead, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .typeahead, .input-group > .typeahead + .typeahead, .asColorPicker-wrap > .typeahead + .typeahead, .input-group > .tt-query + .typeahead, .asColorPicker-wrap > .tt-query + .typeahead, .input-group > .tt-hint + .typeahead, .asColorPicker-wrap > .tt-hint + .typeahead,
        .input-group > .form-control + .tt-query,
        .asColorPicker-wrap > .form-control + .tt-query,
        .input-group > .asColorPicker-input + .tt-query,
        .asColorPicker-wrap > .asColorPicker-input + .tt-query,
        .dataTables_wrapper .input-group > select + .tt-query,
        .dataTables_wrapper .asColorPicker-wrap > select + .tt-query,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .tt-query,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .tt-query,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .tt-query,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .tt-query,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .tt-query,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .tt-query,
        .select2-container--default .input-group > .select2-selection--single + .tt-query,
        .select2-container--default .asColorPicker-wrap > .select2-selection--single + .tt-query,
        .select2-container--default .select2-selection--single .input-group > .select2-search__field + .tt-query,
        .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .tt-query,
        .input-group > .typeahead + .tt-query,
        .asColorPicker-wrap > .typeahead + .tt-query,
        .input-group > .tt-query + .tt-query,
        .asColorPicker-wrap > .tt-query + .tt-query,
        .input-group > .tt-hint + .tt-query,
        .asColorPicker-wrap > .tt-hint + .tt-query,
        .input-group > .form-control + .tt-hint,
        .asColorPicker-wrap > .form-control + .tt-hint,
        .input-group > .asColorPicker-input + .tt-hint,
        .asColorPicker-wrap > .asColorPicker-input + .tt-hint,
        .dataTables_wrapper .input-group > select + .tt-hint,
        .dataTables_wrapper .asColorPicker-wrap > select + .tt-hint,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .tt-hint,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .tt-hint,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .tt-hint,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .tt-hint,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .tt-hint,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .tt-hint,
        .select2-container--default .input-group > .select2-selection--single + .tt-hint,
        .select2-container--default .asColorPicker-wrap > .select2-selection--single + .tt-hint,
        .select2-container--default .select2-selection--single .input-group > .select2-search__field + .tt-hint,
        .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .tt-hint,
        .input-group > .typeahead + .tt-hint,
        .asColorPicker-wrap > .typeahead + .tt-hint,
        .input-group > .tt-query + .tt-hint,
        .asColorPicker-wrap > .tt-query + .tt-hint,
        .input-group > .tt-hint + .tt-hint,
        .asColorPicker-wrap > .tt-hint + .tt-hint,
        .input-group > .form-control + .custom-select,
        .asColorPicker-wrap > .form-control + .custom-select,
        .input-group > .asColorPicker-input + .custom-select,
        .asColorPicker-wrap > .asColorPicker-input + .custom-select,
        .dataTables_wrapper .input-group > select + .custom-select,
        .dataTables_wrapper .asColorPicker-wrap > select + .custom-select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .custom-select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .custom-select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .custom-select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .custom-select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .custom-select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .custom-select,
        .select2-container--default .input-group > .select2-selection--single + .custom-select,
        .select2-container--default .asColorPicker-wrap > .select2-selection--single + .custom-select,
        .select2-container--default .select2-selection--single .input-group > .select2-search__field + .custom-select,
        .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .custom-select,
        .input-group > .typeahead + .custom-select,
        .asColorPicker-wrap > .typeahead + .custom-select,
        .input-group > .tt-query + .custom-select,
        .asColorPicker-wrap > .tt-query + .custom-select,
        .input-group > .tt-hint + .custom-select,
        .asColorPicker-wrap > .tt-hint + .custom-select,
        .input-group > .form-control + .custom-file,
        .asColorPicker-wrap > .form-control + .custom-file,
        .input-group > .asColorPicker-input + .custom-file,
        .asColorPicker-wrap > .asColorPicker-input + .custom-file,
        .dataTables_wrapper .input-group > select + .custom-file,
        .dataTables_wrapper .asColorPicker-wrap > select + .custom-file,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .custom-file,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .custom-file,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .custom-file,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .custom-file,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .custom-file,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .custom-file,
        .select2-container--default .input-group > .select2-selection--single + .custom-file,
        .select2-container--default .asColorPicker-wrap > .select2-selection--single + .custom-file,
        .select2-container--default .select2-selection--single .input-group > .select2-search__field + .custom-file,
        .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .custom-file,
        .input-group > .typeahead + .custom-file,
        .asColorPicker-wrap > .typeahead + .custom-file,
        .input-group > .tt-query + .custom-file,
        .asColorPicker-wrap > .tt-query + .custom-file,
        .input-group > .tt-hint + .custom-file,
        .asColorPicker-wrap > .tt-hint + .custom-file,
        .input-group > .form-control-plaintext + .form-control,
        .asColorPicker-wrap > .form-control-plaintext + .form-control,
        .input-group > .form-control-plaintext + .asColorPicker-input,
        .asColorPicker-wrap > .form-control-plaintext + .asColorPicker-input,
        .dataTables_wrapper .input-group > .form-control-plaintext + select,
        .dataTables_wrapper .asColorPicker-wrap > .form-control-plaintext + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control-plaintext + input[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control-plaintext + input[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control-plaintext + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control-plaintext + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control-plaintext + input[type=number],
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control-plaintext + input[type=number],
        .select2-container--default .input-group > .form-control-plaintext + .select2-selection--single,
        .select2-container--default .asColorPicker-wrap > .form-control-plaintext + .select2-selection--single,
        .select2-container--default .select2-selection--single .input-group > .form-control-plaintext + .select2-search__field,
        .select2-container--default .select2-selection--single .asColorPicker-wrap > .form-control-plaintext + .select2-search__field,
        .input-group > .form-control-plaintext + .typeahead,
        .asColorPicker-wrap > .form-control-plaintext + .typeahead,
        .input-group > .form-control-plaintext + .tt-query,
        .asColorPicker-wrap > .form-control-plaintext + .tt-query,
        .input-group > .form-control-plaintext + .tt-hint,
        .asColorPicker-wrap > .form-control-plaintext + .tt-hint,
        .input-group > .form-control-plaintext + .custom-select,
        .asColorPicker-wrap > .form-control-plaintext + .custom-select,
        .input-group > .form-control-plaintext + .custom-file,
        .asColorPicker-wrap > .form-control-plaintext + .custom-file,
        .input-group > .custom-select + .form-control,
        .asColorPicker-wrap > .custom-select + .form-control,
        .input-group > .custom-select + .asColorPicker-input,
        .asColorPicker-wrap > .custom-select + .asColorPicker-input,
        .dataTables_wrapper .input-group > .custom-select + select,
        .dataTables_wrapper .asColorPicker-wrap > .custom-select + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .custom-select + input[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-select + input[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .custom-select + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-select + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .custom-select + input[type=number],
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-select + input[type=number],
        .select2-container--default .input-group > .custom-select + .select2-selection--single,
        .select2-container--default .asColorPicker-wrap > .custom-select + .select2-selection--single,
        .select2-container--default .select2-selection--single .input-group > .custom-select + .select2-search__field,
        .select2-container--default .select2-selection--single .asColorPicker-wrap > .custom-select + .select2-search__field,
        .input-group > .custom-select + .typeahead,
        .asColorPicker-wrap > .custom-select + .typeahead,
        .input-group > .custom-select + .tt-query,
        .asColorPicker-wrap > .custom-select + .tt-query,
        .input-group > .custom-select + .tt-hint,
        .asColorPicker-wrap > .custom-select + .tt-hint,
        .input-group > .custom-select + .custom-select,
        .asColorPicker-wrap > .custom-select + .custom-select,
        .input-group > .custom-select + .custom-file,
        .asColorPicker-wrap > .custom-select + .custom-file,
        .input-group > .custom-file + .form-control,
        .asColorPicker-wrap > .custom-file + .form-control,
        .input-group > .custom-file + .asColorPicker-input,
        .asColorPicker-wrap > .custom-file + .asColorPicker-input,
        .dataTables_wrapper .input-group > .custom-file + select,
        .dataTables_wrapper .asColorPicker-wrap > .custom-file + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .custom-file + input[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-file + input[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .custom-file + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-file + select,
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .custom-file + input[type=number],
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-file + input[type=number],
        .select2-container--default .input-group > .custom-file + .select2-selection--single,
        .select2-container--default .asColorPicker-wrap > .custom-file + .select2-selection--single,
        .select2-container--default .select2-selection--single .input-group > .custom-file + .select2-search__field,
        .select2-container--default .select2-selection--single .asColorPicker-wrap > .custom-file + .select2-search__field,
        .input-group > .custom-file + .typeahead,
        .asColorPicker-wrap > .custom-file + .typeahead,
        .input-group > .custom-file + .tt-query,
        .asColorPicker-wrap > .custom-file + .tt-query,
        .input-group > .custom-file + .tt-hint,
        .asColorPicker-wrap > .custom-file + .tt-hint,
        .input-group > .custom-file + .custom-select,
        .asColorPicker-wrap > .custom-file + .custom-select,
        .input-group > .custom-file + .custom-file,
        .asColorPicker-wrap > .custom-file + .custom-file {
            margin-left: -1px; }
        .input-group > .form-control:focus, .asColorPicker-wrap > .form-control:focus, .input-group > .asColorPicker-input:focus, .asColorPicker-wrap > .asColorPicker-input:focus, .dataTables_wrapper .input-group > select:focus, .dataTables_wrapper .asColorPicker-wrap > select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input:focus[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select:focus,
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input:focus[type=number], .select2-container--default .input-group > .select2-selection--single:focus, .select2-container--default .asColorPicker-wrap > .select2-selection--single:focus, .select2-container--default .select2-selection--single .input-group > .select2-search__field:focus, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field:focus, .input-group > .typeahead:focus, .asColorPicker-wrap > .typeahead:focus,
        .input-group > .tt-query:focus,
        .asColorPicker-wrap > .tt-query:focus,
        .input-group > .tt-hint:focus,
        .asColorPicker-wrap > .tt-hint:focus,
        .input-group > .custom-select:focus,
        .asColorPicker-wrap > .custom-select:focus,
        .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label,
        .asColorPicker-wrap > .custom-file .custom-file-input:focus ~ .custom-file-label {
            z-index: 3; }
        .input-group > .custom-file .custom-file-input:focus, .asColorPicker-wrap > .custom-file .custom-file-input:focus {
            z-index: 4; }
        .input-group > .form-control:not(:last-child), .asColorPicker-wrap > .form-control:not(:last-child), .input-group > .asColorPicker-input:not(:last-child), .asColorPicker-wrap > .asColorPicker-input:not(:last-child), .dataTables_wrapper .input-group > select:not(:last-child), .dataTables_wrapper .asColorPicker-wrap > select:not(:last-child), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input:not(:last-child)[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input:not(:last-child)[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select:not(:last-child),
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select:not(:last-child), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input:not(:last-child)[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input:not(:last-child)[type=number], .select2-container--default .input-group > .select2-selection--single:not(:last-child), .select2-container--default .asColorPicker-wrap > .select2-selection--single:not(:last-child), .select2-container--default .select2-selection--single .input-group > .select2-search__field:not(:last-child), .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field:not(:last-child), .input-group > .typeahead:not(:last-child), .asColorPicker-wrap > .typeahead:not(:last-child),
        .input-group > .tt-query:not(:last-child),
        .asColorPicker-wrap > .tt-query:not(:last-child),
        .input-group > .tt-hint:not(:last-child),
        .asColorPicker-wrap > .tt-hint:not(:last-child),
        .input-group > .custom-select:not(:last-child),
        .asColorPicker-wrap > .custom-select:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0; }
        .input-group > .form-control:not(:first-child), .asColorPicker-wrap > .form-control:not(:first-child), .input-group > .asColorPicker-input:not(:first-child), .asColorPicker-wrap > .asColorPicker-input:not(:first-child), .dataTables_wrapper .input-group > select:not(:first-child), .dataTables_wrapper .asColorPicker-wrap > select:not(:first-child), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input:not(:first-child)[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input:not(:first-child)[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select:not(:first-child),
        .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select:not(:first-child), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input:not(:first-child)[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input:not(:first-child)[type=number], .select2-container--default .input-group > .select2-selection--single:not(:first-child), .select2-container--default .asColorPicker-wrap > .select2-selection--single:not(:first-child), .select2-container--default .select2-selection--single .input-group > .select2-search__field:not(:first-child), .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field:not(:first-child), .input-group > .typeahead:not(:first-child), .asColorPicker-wrap > .typeahead:not(:first-child),
        .input-group > .tt-query:not(:first-child),
        .asColorPicker-wrap > .tt-query:not(:first-child),
        .input-group > .tt-hint:not(:first-child),
        .asColorPicker-wrap > .tt-hint:not(:first-child),
        .input-group > .custom-select:not(:first-child),
        .asColorPicker-wrap > .custom-select:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0; }

        .input-group > .custom-file,
        .asColorPicker-wrap > .custom-file {
            display: flex;
            align-items: center; }
        .input-group > .custom-file:not(:last-child) .custom-file-label, .asColorPicker-wrap > .custom-file:not(:last-child) .custom-file-label,
        .input-group > .custom-file:not(:last-child) .custom-file-label::after,
        .asColorPicker-wrap > .custom-file:not(:last-child) .custom-file-label::after {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0; }
        .input-group > .custom-file:not(:first-child) .custom-file-label, .asColorPicker-wrap > .custom-file:not(:first-child) .custom-file-label {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0; }

        .input-group-prepend,
        .input-group-append {
            display: flex; }
        .input-group-prepend .btn, .input-group-prepend .fc button, .fc .input-group-prepend button, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload, .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled, .input-group-prepend .wizard > .actions a, .wizard > .actions .input-group-prepend a,
        .input-group-append .btn,
        .input-group-append .fc button,
        .fc .input-group-append button,
        .input-group-append .ajax-upload-dragdrop .ajax-file-upload,
        .ajax-upload-dragdrop .input-group-append .ajax-file-upload,
        .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled,
        .input-group-append .wizard > .actions a,
        .wizard > .actions .input-group-append a {
            position: relative;
            z-index: 2; }
        .input-group-prepend .btn:focus, .input-group-prepend .fc button:focus, .fc .input-group-prepend button:focus, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload:focus, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload:focus, .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled:focus, .input-group-prepend .wizard > .actions a:focus, .wizard > .actions .input-group-prepend a:focus,
        .input-group-append .btn:focus,
        .input-group-append .fc button:focus,
        .fc .input-group-append button:focus,
        .input-group-append .ajax-upload-dragdrop .ajax-file-upload:focus,
        .ajax-upload-dragdrop .input-group-append .ajax-file-upload:focus,
        .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled:focus,
        .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled:focus,
        .input-group-append .wizard > .actions a:focus,
        .wizard > .actions .input-group-append a:focus {
            z-index: 3; }
        .input-group-prepend .btn + .btn, .input-group-prepend .fc button + .btn, .fc .input-group-prepend button + .btn, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + .btn, .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + .btn, .input-group-prepend .wizard > .actions a + .btn, .wizard > .actions .input-group-prepend a + .btn, .input-group-prepend .fc .btn + button, .fc .input-group-prepend .btn + button, .input-group-prepend .fc button + button, .fc .input-group-prepend button + button, .input-group-prepend .ajax-upload-dragdrop .fc .ajax-file-upload + button, .fc .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop .input-group-prepend .fc .ajax-file-upload + button, .fc .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + button, .input-group-prepend .swal2-modal .swal2-buttonswrapper .fc .swal2-styled + button, .fc .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper .input-group-prepend .fc .swal2-styled + button, .fc .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + button, .input-group-prepend .wizard > .actions .fc a + button, .fc .input-group-prepend .wizard > .actions a + button, .wizard > .actions .input-group-prepend .fc a + button, .fc .wizard > .actions .input-group-prepend a + button, .input-group-prepend .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .btn + .ajax-file-upload, .input-group-prepend .fc .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .fc button + .ajax-file-upload, .fc .input-group-prepend .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc .input-group-prepend button + .ajax-file-upload, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + .ajax-file-upload, .input-group-prepend .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .input-group-prepend .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + .ajax-file-upload, .input-group-prepend .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .wizard > .actions a + .ajax-file-upload, .wizard > .actions .input-group-prepend .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .input-group-prepend a + .ajax-file-upload, .input-group-prepend .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .btn + .swal2-styled, .input-group-prepend .fc .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .fc button + .swal2-styled, .fc .input-group-prepend .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .input-group-prepend button + .swal2-styled, .input-group-prepend .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop .input-group-prepend .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + .swal2-styled, .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + .swal2-styled, .input-group-prepend .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .wizard > .actions a + .swal2-styled, .wizard > .actions .input-group-prepend .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .input-group-prepend a + .swal2-styled, .input-group-prepend .wizard > .actions .btn + a, .wizard > .actions .input-group-prepend .btn + a, .input-group-prepend .fc .wizard > .actions button + a, .wizard > .actions .input-group-prepend .fc button + a, .fc .input-group-prepend .wizard > .actions button + a, .wizard > .actions .fc .input-group-prepend button + a, .input-group-prepend .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop .input-group-prepend .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + a, .input-group-prepend .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper .input-group-prepend .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + a, .input-group-prepend .wizard > .actions a + a, .wizard > .actions .input-group-prepend a + a,
        .input-group-prepend .btn + .input-group-text,
        .input-group-prepend .fc button + .input-group-text,
        .fc .input-group-prepend button + .input-group-text,
        .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .input-group-text,
        .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + .input-group-text,
        .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + .input-group-text,
        .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + .input-group-text,
        .input-group-prepend .wizard > .actions a + .input-group-text,
        .wizard > .actions .input-group-prepend a + .input-group-text,
        .input-group-prepend .input-group-text + .input-group-text,
        .input-group-prepend .input-group-text + .btn,
        .input-group-prepend .fc .input-group-text + button,
        .fc .input-group-prepend .input-group-text + button,
        .input-group-prepend .ajax-upload-dragdrop .input-group-text + .ajax-file-upload,
        .ajax-upload-dragdrop .input-group-prepend .input-group-text + .ajax-file-upload,
        .input-group-prepend .swal2-modal .swal2-buttonswrapper .input-group-text + .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .input-group-prepend .input-group-text + .swal2-styled,
        .input-group-prepend .wizard > .actions .input-group-text + a,
        .wizard > .actions .input-group-prepend .input-group-text + a,
        .input-group-append .btn + .btn,
        .input-group-append .fc button + .btn,
        .fc .input-group-append button + .btn,
        .input-group-append .ajax-upload-dragdrop .ajax-file-upload + .btn,
        .ajax-upload-dragdrop .input-group-append .ajax-file-upload + .btn,
        .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn,
        .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled + .btn,
        .input-group-append .wizard > .actions a + .btn,
        .wizard > .actions .input-group-append a + .btn,
        .input-group-append .fc .btn + button,
        .fc .input-group-append .btn + button,
        .input-group-append .fc button + button,
        .fc .input-group-append button + button,
        .input-group-append .ajax-upload-dragdrop .fc .ajax-file-upload + button,
        .fc .input-group-append .ajax-upload-dragdrop .ajax-file-upload + button,
        .ajax-upload-dragdrop .input-group-append .fc .ajax-file-upload + button,
        .fc .ajax-upload-dragdrop .input-group-append .ajax-file-upload + button,
        .input-group-append .swal2-modal .swal2-buttonswrapper .fc .swal2-styled + button,
        .fc .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + button,
        .swal2-modal .swal2-buttonswrapper .input-group-append .fc .swal2-styled + button,
        .fc .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled + button,
        .input-group-append .wizard > .actions .fc a + button,
        .fc .input-group-append .wizard > .actions a + button,
        .wizard > .actions .input-group-append .fc a + button,
        .fc .wizard > .actions .input-group-append a + button,
        .input-group-append .ajax-upload-dragdrop .btn + .ajax-file-upload,
        .ajax-upload-dragdrop .input-group-append .btn + .ajax-file-upload,
        .input-group-append .fc .ajax-upload-dragdrop button + .ajax-file-upload,
        .ajax-upload-dragdrop .input-group-append .fc button + .ajax-file-upload,
        .fc .input-group-append .ajax-upload-dragdrop button + .ajax-file-upload,
        .ajax-upload-dragdrop .fc .input-group-append button + .ajax-file-upload,
        .input-group-append .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload,
        .ajax-upload-dragdrop .input-group-append .ajax-file-upload + .ajax-file-upload,
        .input-group-append .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload,
        .ajax-upload-dragdrop .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .input-group-append .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload,
        .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled + .ajax-file-upload,
        .input-group-append .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload,
        .ajax-upload-dragdrop .input-group-append .wizard > .actions a + .ajax-file-upload,
        .wizard > .actions .input-group-append .ajax-upload-dragdrop a + .ajax-file-upload,
        .ajax-upload-dragdrop .wizard > .actions .input-group-append a + .ajax-file-upload,
        .input-group-append .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .input-group-append .btn + .swal2-styled,
        .input-group-append .fc .swal2-modal .swal2-buttonswrapper button + .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .input-group-append .fc button + .swal2-styled,
        .fc .input-group-append .swal2-modal .swal2-buttonswrapper button + .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .fc .input-group-append button + .swal2-styled,
        .input-group-append .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .input-group-append .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled,
        .ajax-upload-dragdrop .input-group-append .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .input-group-append .ajax-file-upload + .swal2-styled,
        .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled + .swal2-styled,
        .input-group-append .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .input-group-append .wizard > .actions a + .swal2-styled,
        .wizard > .actions .input-group-append .swal2-modal .swal2-buttonswrapper a + .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .wizard > .actions .input-group-append a + .swal2-styled,
        .input-group-append .wizard > .actions .btn + a,
        .wizard > .actions .input-group-append .btn + a,
        .input-group-append .fc .wizard > .actions button + a,
        .wizard > .actions .input-group-append .fc button + a,
        .fc .input-group-append .wizard > .actions button + a,
        .wizard > .actions .fc .input-group-append button + a,
        .input-group-append .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a,
        .wizard > .actions .input-group-append .ajax-upload-dragdrop .ajax-file-upload + a,
        .ajax-upload-dragdrop .input-group-append .wizard > .actions .ajax-file-upload + a,
        .wizard > .actions .ajax-upload-dragdrop .input-group-append .ajax-file-upload + a,
        .input-group-append .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a,
        .wizard > .actions .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + a,
        .swal2-modal .swal2-buttonswrapper .input-group-append .wizard > .actions .swal2-styled + a,
        .wizard > .actions .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled + a,
        .input-group-append .wizard > .actions a + a,
        .wizard > .actions .input-group-append a + a,
        .input-group-append .btn + .input-group-text,
        .input-group-append .fc button + .input-group-text,
        .fc .input-group-append button + .input-group-text,
        .input-group-append .ajax-upload-dragdrop .ajax-file-upload + .input-group-text,
        .ajax-upload-dragdrop .input-group-append .ajax-file-upload + .input-group-text,
        .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + .input-group-text,
        .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled + .input-group-text,
        .input-group-append .wizard > .actions a + .input-group-text,
        .wizard > .actions .input-group-append a + .input-group-text,
        .input-group-append .input-group-text + .input-group-text,
        .input-group-append .input-group-text + .btn,
        .input-group-append .fc .input-group-text + button,
        .fc .input-group-append .input-group-text + button,
        .input-group-append .ajax-upload-dragdrop .input-group-text + .ajax-file-upload,
        .ajax-upload-dragdrop .input-group-append .input-group-text + .ajax-file-upload,
        .input-group-append .swal2-modal .swal2-buttonswrapper .input-group-text + .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .input-group-append .input-group-text + .swal2-styled,
        .input-group-append .wizard > .actions .input-group-text + a,
        .wizard > .actions .input-group-append .input-group-text + a {
            margin-left: -1px; }

        .input-group-prepend {
            margin-right: -1px; }

        .input-group-append {
            margin-left: -1px; }

        .input-group-text {
            display: flex;
            align-items: center;
            padding: 0.56rem 0.75rem;
            margin-bottom: 0;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 2px; }
        .input-group-text input[type="radio"],
        .input-group-text input[type="checkbox"] {
            margin-top: 0; }

        .input-group-lg > .form-control:not(textarea), .input-group-lg > .asColorPicker-input:not(textarea), .dataTables_wrapper .input-group-lg > select:not(textarea), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > input:not(textarea)[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > select:not(textarea), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > input:not(textarea)[type=number], .select2-container--default .input-group-lg > .select2-selection--single:not(textarea), .select2-container--default .select2-selection--single .input-group-lg > .select2-search__field:not(textarea), .input-group-lg > .typeahead:not(textarea),
        .input-group-lg > .tt-query:not(textarea),
        .input-group-lg > .tt-hint:not(textarea),
        .input-group-lg > .custom-select {
            height: 3.175rem; }

        .input-group-lg > .form-control, .input-group-lg > .asColorPicker-input, .dataTables_wrapper .input-group-lg > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > input[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > input[type=number], .select2-container--default .input-group-lg > .select2-selection--single, .select2-container--default .select2-selection--single .input-group-lg > .select2-search__field, .input-group-lg > .typeahead,
        .input-group-lg > .tt-query,
        .input-group-lg > .tt-hint,
        .input-group-lg > .custom-select,
        .input-group-lg > .input-group-prepend > .input-group-text,
        .input-group-lg > .input-group-append > .input-group-text,
        .input-group-lg > .input-group-prepend > .btn,
        .fc .input-group-lg > .input-group-prepend > button,
        .ajax-upload-dragdrop .input-group-lg > .input-group-prepend > .ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .input-group-lg > .input-group-prepend > .swal2-styled,
        .wizard > .actions .input-group-lg > .input-group-prepend > a,
        .input-group-lg > .input-group-append > .btn,
        .fc .input-group-lg > .input-group-append > button,
        .ajax-upload-dragdrop .input-group-lg > .input-group-append > .ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .input-group-lg > .input-group-append > .swal2-styled,
        .wizard > .actions .input-group-lg > .input-group-append > a {
            padding: 0.94rem 1.94rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem; }

        .input-group-sm > .form-control:not(textarea), .input-group-sm > .asColorPicker-input:not(textarea), .dataTables_wrapper .input-group-sm > select:not(textarea), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > input:not(textarea)[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > select:not(textarea), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > input:not(textarea)[type=number], .select2-container--default .input-group-sm > .select2-selection--single:not(textarea), .select2-container--default .select2-selection--single .input-group-sm > .select2-search__field:not(textarea), .input-group-sm > .typeahead:not(textarea),
        .input-group-sm > .tt-query:not(textarea),
        .input-group-sm > .tt-hint:not(textarea),
        .input-group-sm > .custom-select {
            height: 2.575rem; }

        .input-group-sm > .form-control, .input-group-sm > .asColorPicker-input, .dataTables_wrapper .input-group-sm > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > input[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > input[type=number], .select2-container--default .input-group-sm > .select2-selection--single, .select2-container--default .select2-selection--single .input-group-sm > .select2-search__field, .input-group-sm > .typeahead,
        .input-group-sm > .tt-query,
        .input-group-sm > .tt-hint,
        .input-group-sm > .custom-select,
        .input-group-sm > .input-group-prepend > .input-group-text,
        .input-group-sm > .input-group-append > .input-group-text,
        .input-group-sm > .input-group-prepend > .btn,
        .fc .input-group-sm > .input-group-prepend > button,
        .ajax-upload-dragdrop .input-group-sm > .input-group-prepend > .ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .input-group-sm > .input-group-prepend > .swal2-styled,
        .wizard > .actions .input-group-sm > .input-group-prepend > a,
        .input-group-sm > .input-group-append > .btn,
        .fc .input-group-sm > .input-group-append > button,
        .ajax-upload-dragdrop .input-group-sm > .input-group-append > .ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .input-group-sm > .input-group-append > .swal2-styled,
        .wizard > .actions .input-group-sm > .input-group-append > a {
            padding: 0.5rem 0.81rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem; }

        .input-group-lg > .custom-select,
        .input-group-sm > .custom-select {
            padding-right: 1.75rem; }

        .input-group > .input-group-prepend > .btn, .asColorPicker-wrap > .input-group-prepend > .btn, .fc .input-group > .input-group-prepend > button, .fc .asColorPicker-wrap > .input-group-prepend > button, .ajax-upload-dragdrop .input-group > .input-group-prepend > .ajax-file-upload, .ajax-upload-dragdrop .asColorPicker-wrap > .input-group-prepend > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .input-group > .input-group-prepend > .swal2-styled, .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-prepend > .swal2-styled, .wizard > .actions .input-group > .input-group-prepend > a, .wizard > .actions .asColorPicker-wrap > .input-group-prepend > a,
        .input-group > .input-group-prepend > .input-group-text,
        .asColorPicker-wrap > .input-group-prepend > .input-group-text,
        .input-group > .input-group-append:not(:last-child) > .btn,
        .asColorPicker-wrap > .input-group-append:not(:last-child) > .btn,
        .fc .input-group > .input-group-append:not(:last-child) > button,
        .fc .asColorPicker-wrap > .input-group-append:not(:last-child) > button,
        .ajax-upload-dragdrop .input-group > .input-group-append:not(:last-child) > .ajax-file-upload,
        .ajax-upload-dragdrop .asColorPicker-wrap > .input-group-append:not(:last-child) > .ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .input-group > .input-group-append:not(:last-child) > .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-append:not(:last-child) > .swal2-styled,
        .wizard > .actions .input-group > .input-group-append:not(:last-child) > a,
        .wizard > .actions .asColorPicker-wrap > .input-group-append:not(:last-child) > a,
        .input-group > .input-group-append:not(:last-child) > .input-group-text,
        .asColorPicker-wrap > .input-group-append:not(:last-child) > .input-group-text,
        .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
        .asColorPicker-wrap > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
        .fc .input-group > .input-group-append:last-child > button:not(:last-child):not(.dropdown-toggle),
        .fc .asColorPicker-wrap > .input-group-append:last-child > button:not(:last-child):not(.dropdown-toggle),
        .ajax-upload-dragdrop .input-group > .input-group-append:last-child > .ajax-file-upload:not(:last-child):not(.dropdown-toggle),
        .ajax-upload-dragdrop .asColorPicker-wrap > .input-group-append:last-child > .ajax-file-upload:not(:last-child):not(.dropdown-toggle),
        .swal2-modal .swal2-buttonswrapper .input-group > .input-group-append:last-child > .swal2-styled:not(:last-child):not(.dropdown-toggle),
        .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-append:last-child > .swal2-styled:not(:last-child):not(.dropdown-toggle),
        .wizard > .actions .input-group > .input-group-append:last-child > a:not(:last-child):not(.dropdown-toggle),
        .wizard > .actions .asColorPicker-wrap > .input-group-append:last-child > a:not(:last-child):not(.dropdown-toggle),
        .input-group > .input-group-append:last-child > .input-group-text:not(:last-child),
        .asColorPicker-wrap > .input-group-append:last-child > .input-group-text:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0; }

        .input-group > .input-group-append > .btn, .asColorPicker-wrap > .input-group-append > .btn, .fc .input-group > .input-group-append > button, .fc .asColorPicker-wrap > .input-group-append > button, .ajax-upload-dragdrop .input-group > .input-group-append > .ajax-file-upload, .ajax-upload-dragdrop .asColorPicker-wrap > .input-group-append > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .input-group > .input-group-append > .swal2-styled, .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-append > .swal2-styled, .wizard > .actions .input-group > .input-group-append > a, .wizard > .actions .asColorPicker-wrap > .input-group-append > a,
        .input-group > .input-group-append > .input-group-text,
        .asColorPicker-wrap > .input-group-append > .input-group-text,
        .input-group > .input-group-prepend:not(:first-child) > .btn,
        .asColorPicker-wrap > .input-group-prepend:not(:first-child) > .btn,
        .fc .input-group > .input-group-prepend:not(:first-child) > button,
        .fc .asColorPicker-wrap > .input-group-prepend:not(:first-child) > button,
        .ajax-upload-dragdrop .input-group > .input-group-prepend:not(:first-child) > .ajax-file-upload,
        .ajax-upload-dragdrop .asColorPicker-wrap > .input-group-prepend:not(:first-child) > .ajax-file-upload,
        .swal2-modal .swal2-buttonswrapper .input-group > .input-group-prepend:not(:first-child) > .swal2-styled,
        .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-prepend:not(:first-child) > .swal2-styled,
        .wizard > .actions .input-group > .input-group-prepend:not(:first-child) > a,
        .wizard > .actions .asColorPicker-wrap > .input-group-prepend:not(:first-child) > a,
        .input-group > .input-group-prepend:not(:first-child) > .input-group-text,
        .asColorPicker-wrap > .input-group-prepend:not(:first-child) > .input-group-text,
        .input-group > .input-group-prepend:first-child > .btn:not(:first-child),
        .asColorPicker-wrap > .input-group-prepend:first-child > .btn:not(:first-child),
        .fc .input-group > .input-group-prepend:first-child > button:not(:first-child),
        .fc .asColorPicker-wrap > .input-group-prepend:first-child > button:not(:first-child),
        .ajax-upload-dragdrop .input-group > .input-group-prepend:first-child > .ajax-file-upload:not(:first-child),
        .ajax-upload-dragdrop .asColorPicker-wrap > .input-group-prepend:first-child > .ajax-file-upload:not(:first-child),
        .swal2-modal .swal2-buttonswrapper .input-group > .input-group-prepend:first-child > .swal2-styled:not(:first-child),
        .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-prepend:first-child > .swal2-styled:not(:first-child),
        .wizard > .actions .input-group > .input-group-prepend:first-child > a:not(:first-child),
        .wizard > .actions .asColorPicker-wrap > .input-group-prepend:first-child > a:not(:first-child),
        .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child),
        .asColorPicker-wrap > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0; }

        .custom-control {
            position: relative;
            z-index: 1;
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5rem;
            color-adjust: exact; }

        .custom-control-inline {
            display: inline-flex;
            margin-right: 1rem; }

        .custom-control-input {
            position: absolute;
            left: 0;
            z-index: -1;
            width: 1rem;
            height: 1.25rem;
            opacity: 0; }
        .custom-control-input:checked ~ .custom-control-label::before {
            color: #fff;
            border-color: #007bff;
            background-color: #007bff; }
        .custom-control-input:focus ~ .custom-control-label::before {
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
        .custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
            border-color: #80bdff; }
        .custom-control-input:not(:disabled):active ~ .custom-control-label::before {
            color: #fff;
            background-color: #b3d7ff;
            border-color: #b3d7ff; }
        .custom-control-input[disabled] ~ .custom-control-label, .custom-control-input:disabled ~ .custom-control-label {
            color: #6c757d; }
        .custom-control-input[disabled] ~ .custom-control-label::before, .custom-control-input:disabled ~ .custom-control-label::before {
            background-color: #e9ecef; }

        .custom-control-label {
            position: relative;
            margin-bottom: 0;
            vertical-align: top; }
        .custom-control-label::before {
            position: absolute;
            top: 0.25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            pointer-events: none;
            content: "";
            background-color: #fff;
            border: #adb5bd solid 1px; }
        .custom-control-label::after {
            position: absolute;
            top: 0.25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            content: "";
            background: no-repeat 50% / 50% 50%; }

        .custom-checkbox .custom-control-label::before {
            border-radius: 0.25rem; }

        .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e"); }

        .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
            border-color: #007bff;
            background-color: #007bff; }

        .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e"); }

        .custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
            background-color: rgba(0, 123, 255, 0.5); }

        .custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
            background-color: rgba(0, 123, 255, 0.5); }

        .custom-radio .custom-control-label::before {
            border-radius: 50%; }

        .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e"); }

        .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
            background-color: rgba(0, 123, 255, 0.5); }

        .custom-switch {
            padding-left: 2.25rem; }
        .custom-switch .custom-control-label::before {
            left: -2.25rem;
            width: 1.75rem;
            pointer-events: all;
            border-radius: 0.5rem; }
        .custom-switch .custom-control-label::after {
            top: calc(0.25rem + 2px);
            left: calc(-2.25rem + 2px);
            width: calc(1rem - 4px);
            height: calc(1rem - 4px);
            background-color: #adb5bd;
            border-radius: 0.5rem;
            transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
        @media (prefers-reduced-motion: reduce) {
            .custom-switch .custom-control-label::after {
                transition: none; } }
        .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
            background-color: #fff;
            transform: translateX(0.75rem); }
        .custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
            background-color: rgba(0, 123, 255, 0.5); }

        .custom-select {
            display: inline-block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 1.75rem 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            vertical-align: middle;
            background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            appearance: none; }
        .custom-select:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
        .custom-select:focus::-ms-value {
            color: #495057;
            background-color: #2A3038; }
        .custom-select[multiple], .custom-select[size]:not([size="1"]) {
            height: auto;
            padding-right: 0.75rem;
            background-image: none; }
        .custom-select:disabled {
            color: #6c757d;
            background-color: #e9ecef; }
        .custom-select::-ms-expand {
            display: none; }
        .custom-select:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #495057; }

        .custom-select-sm {
            height: calc(1.5em + 0.5rem + 2px);
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-left: 0.5rem;
            font-size: 0.875rem; }

        .custom-select-lg {
            height: calc(1.5em + 1rem + 2px);
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1rem;
            font-size: 1.25rem; }

        .custom-file {
            position: relative;
            display: inline-block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            margin-bottom: 0; }

        .custom-file-input {
            position: relative;
            z-index: 2;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            margin: 0;
            opacity: 0; }
        .custom-file-input:focus ~ .custom-file-label {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
        .custom-file-input[disabled] ~ .custom-file-label,
        .custom-file-input:disabled ~ .custom-file-label {
            background-color: #e9ecef; }
        .custom-file-input:lang(en) ~ .custom-file-label::after {
            content: "Browse"; }
        .custom-file-input ~ .custom-file-label[data-browse]::after {
            content: attr(data-browse); }

        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 0.25rem; }
        .custom-file-label::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            display: block;
            height: calc(1.5em + 0.75rem);
            padding: 0.375rem 0.75rem;
            line-height: 1.5;
            color: #495057;
            content: "Browse";
            background-color: #e9ecef;
            border-left: inherit;
            border-radius: 0 0.25rem 0.25rem 0; }

        .custom-range {
            width: 100%;
            height: 1.4rem;
            padding: 0;
            background-color: transparent;
            appearance: none; }
        .custom-range:focus {
            outline: none; }
        .custom-range:focus::-webkit-slider-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
        .custom-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
        .custom-range:focus::-ms-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
        .custom-range::-moz-focus-outer {
            border: 0; }
        .custom-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -0.25rem;
            background-color: #007bff;
            border: 0;
            border-radius: 1rem;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            appearance: none; }
        @media (prefers-reduced-motion: reduce) {
            .custom-range::-webkit-slider-thumb {
                transition: none; } }
        .custom-range::-webkit-slider-thumb:active {
            background-color: #b3d7ff; }
        .custom-range::-webkit-slider-runnable-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem; }
        .custom-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: #007bff;
            border: 0;
            border-radius: 1rem;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            appearance: none; }
        @media (prefers-reduced-motion: reduce) {
            .custom-range::-moz-range-thumb {
                transition: none; } }
        .custom-range::-moz-range-thumb:active {
            background-color: #b3d7ff; }
        .custom-range::-moz-range-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem; }
        .custom-range::-ms-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: 0;
            margin-right: 0.2rem;
            margin-left: 0.2rem;
            background-color: #007bff;
            border: 0;
            border-radius: 1rem;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            appearance: none; }
        @media (prefers-reduced-motion: reduce) {
            .custom-range::-ms-thumb {
                transition: none; } }
        .custom-range::-ms-thumb:active {
            background-color: #b3d7ff; }
        .custom-range::-ms-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: transparent;
            border-color: transparent;
            border-width: 0.5rem; }
        .custom-range::-ms-fill-lower {
            background-color: #dee2e6;
            border-radius: 1rem; }
        .custom-range::-ms-fill-upper {
            margin-right: 15px;
            background-color: #dee2e6;
            border-radius: 1rem; }
        .custom-range:disabled::-webkit-slider-thumb {
            background-color: #adb5bd; }
        .custom-range:disabled::-webkit-slider-runnable-track {
            cursor: default; }
        .custom-range:disabled::-moz-range-thumb {
            background-color: #adb5bd; }
        .custom-range:disabled::-moz-range-track {
            cursor: default; }
        .custom-range:disabled::-ms-thumb {
            background-color: #adb5bd; }

        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
        @media (prefers-reduced-motion: reduce) {
            .custom-control-label::before,
            .custom-file-label,
            .custom-select {
                transition: none; } }

        .nav {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none; }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem; }
        .nav-link:hover, .nav-link:focus {
            text-decoration: none; }
        .nav-link.disabled {
            color: #6c757d;
            pointer-events: none;
            cursor: default; }

        .nav-tabs {
            border-bottom: 1px solid #2c2e33; }
        .nav-tabs .nav-item {
            margin-bottom: -1px; }
        .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem; }
        .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
            border-color: #2c2e33 #2c2e33 #2c2e33; }
        .nav-tabs .nav-link.disabled {
            color: #6c757d;
            background-color: transparent;
            border-color: transparent; }
        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            color: #ffffff;
            background-color: black;
            border-color: #2c2e33 #2c2e33 black; }
        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0; }

        .nav-pills .nav-link {
            border-radius: 0.25rem; }

        .nav-pills .nav-link.active,
        .nav-pills .show > .nav-link {
            color: #fff;
            background-color: #007bff; }

        .nav-fill > .nav-link,
        .nav-fill .nav-item {
            flex: 1 1 auto;
            text-align: center; }

        .nav-justified > .nav-link,
        .nav-justified .nav-item {
            flex-basis: 0;
            flex-grow: 1;
            text-align: center; }

        .tab-content > .tab-pane {
            display: none; }

        .tab-content > .active {
            display: block; }

        .navbar {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: 0.5rem 1rem; }
        .navbar .container,
        .navbar .container-fluid, .navbar .container-sm, .navbar .container-md, .navbar .container-lg, .navbar .container-xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between; }

        .navbar-brand {
            display: inline-block;
            padding-top: 0.3125rem;
            padding-bottom: 0.3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap; }
        .navbar-brand:hover, .navbar-brand:focus {
            text-decoration: none; }

        .navbar-nav {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none; }
        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0; }
        .navbar-nav .dropdown-menu {
            position: static;
            float: none; }

        .navbar-text {
            display: inline-block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem; }

        .navbar-collapse {
            flex-basis: 100%;
            flex-grow: 1;
            align-items: center; }

        .navbar-toggler {
            padding: 0.25rem 0.75rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: 0.25rem; }
        .navbar-toggler:hover, .navbar-toggler:focus {
            text-decoration: none; }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            content: "";
            background: no-repeat center center;
            background-size: 100% 100%; }

        @media (max-width: 575.98px) {
            .navbar-expand-sm > .container,
            .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
                padding-right: 0;
                padding-left: 0; } }

        @media (min-width: 576px) {
            .navbar-expand-sm {
                flex-flow: row nowrap;
                justify-content: flex-start; }
            .navbar-expand-sm .navbar-nav {
                flex-direction: row; }
            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute; }
            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem; }
            .navbar-expand-sm > .container,
            .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
                flex-wrap: nowrap; }
            .navbar-expand-sm .navbar-collapse {
                display: flex !important;
                flex-basis: auto; }
            .navbar-expand-sm .navbar-toggler {
                display: none; } }

        @media (max-width: 767.98px) {
            .navbar-expand-md > .container,
            .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
                padding-right: 0;
                padding-left: 0; } }

        @media (min-width: 768px) {
            .navbar-expand-md {
                flex-flow: row nowrap;
                justify-content: flex-start; }
            .navbar-expand-md .navbar-nav {
                flex-direction: row; }
            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute; }
            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem; }
            .navbar-expand-md > .container,
            .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
                flex-wrap: nowrap; }
            .navbar-expand-md .navbar-collapse {
                display: flex !important;
                flex-basis: auto; }
            .navbar-expand-md .navbar-toggler {
                display: none; } }

        @media (max-width: 991.98px) {
            .navbar-expand-lg > .container,
            .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
                padding-right: 0;
                padding-left: 0; } }

        @media (min-width: 992px) {
            .navbar-expand-lg {
                flex-flow: row nowrap;
                justify-content: flex-start; }
            .navbar-expand-lg .navbar-nav {
                flex-direction: row; }
            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute; }
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem; }
            .navbar-expand-lg > .container,
            .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
                flex-wrap: nowrap; }
            .navbar-expand-lg .navbar-collapse {
                display: flex !important;
                flex-basis: auto; }
            .navbar-expand-lg .navbar-toggler {
                display: none; } }

        @media (max-width: 1199.98px) {
            .navbar-expand-xl > .container,
            .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
                padding-right: 0;
                padding-left: 0; } }

        @media (min-width: 1200px) {
            .navbar-expand-xl {
                flex-flow: row nowrap;
                justify-content: flex-start; }
            .navbar-expand-xl .navbar-nav {
                flex-direction: row; }
            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute; }
            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem; }
            .navbar-expand-xl > .container,
            .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
                flex-wrap: nowrap; }
            .navbar-expand-xl .navbar-collapse {
                display: flex !important;
                flex-basis: auto; }
            .navbar-expand-xl .navbar-toggler {
                display: none; } }

        .navbar-expand {
            flex-flow: row nowrap;
            justify-content: flex-start; }
        .navbar-expand > .container,
        .navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
            padding-right: 0;
            padding-left: 0; }
        .navbar-expand .navbar-nav {
            flex-direction: row; }
        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute; }
        .navbar-expand .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem; }
        .navbar-expand > .container,
        .navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
            flex-wrap: nowrap; }
        .navbar-expand .navbar-collapse {
            display: flex !important;
            flex-basis: auto; }
        .navbar-expand .navbar-toggler {
            display: none; }

        .navbar-light .navbar-brand {
            color: rgba(0, 0, 0, 0.9); }
        .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
            color: rgba(0, 0, 0, 0.9); }

        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, 0.5); }
        .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
            color: rgba(0, 0, 0, 0.7); }
        .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(0, 0, 0, 0.3); }

        .navbar-light .navbar-nav .show > .nav-link,
        .navbar-light .navbar-nav .active > .nav-link,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .nav-link.active {
            color: rgba(0, 0, 0, 0.9); }

        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, 0.5);
            border-color: rgba(0, 0, 0, 0.1); }

        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

        .navbar-light .navbar-text {
            color: rgba(0, 0, 0, 0.5); }
        .navbar-light .navbar-text a {
            color: rgba(0, 0, 0, 0.9); }
        .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
            color: rgba(0, 0, 0, 0.9); }

        .navbar-dark .navbar-brand {
            color: #fff; }
        .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
            color: #fff; }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.5); }
        .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
            color: rgba(255, 255, 255, 0.75); }
        .navbar-dark .navbar-nav .nav-link.disabled {
            color: rgba(255, 255, 255, 0.25); }

        .navbar-dark .navbar-nav .show > .nav-link,
        .navbar-dark .navbar-nav .active > .nav-link,
        .navbar-dark .navbar-nav .nav-link.show,
        .navbar-dark .navbar-nav .nav-link.active {
            color: #fff; }

        .navbar-dark .navbar-toggler {
            color: rgba(255, 255, 255, 0.5);
            border-color: rgba(255, 255, 255, 0.1); }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

        .navbar-dark .navbar-text {
            color: rgba(255, 255, 255, 0.5); }
        .navbar-dark .navbar-text a {
            color: #fff; }
        .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
            color: #fff; }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #191c24;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem; }
        .card > hr {
            margin-right: 0;
            margin-left: 0; }
        .card > .list-group {
            border-top: inherit;
            border-bottom: inherit; }
        .card > .list-group:first-child {
            border-top-width: 0;
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px); }
        .card > .list-group:last-child {
            border-bottom-width: 0;
            border-bottom-right-radius: calc(0.25rem - 1px);
            border-bottom-left-radius: calc(0.25rem - 1px); }
        .card > .card-header + .list-group,
        .card > .list-group + .card-footer {
            border-top: 0; }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem; }

        .card-title {
            margin-bottom: 0.75rem; }

        .card-subtitle {
            margin-top: -0.375rem;
            margin-bottom: 0; }

        .card-text:last-child {
            margin-bottom: 0; }

        .card-link:hover {
            text-decoration: none; }

        .card-link + .card-link {
            margin-left: 1.25rem; }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid rgba(0, 0, 0, 0.125); }
        .card-header:first-child {
            border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; }

        .card-footer {
            padding: 0.75rem 1.25rem;
            background-color: rgba(0, 0, 0, 0.03);
            border-top: 1px solid rgba(0, 0, 0, 0.125); }
        .card-footer:last-child {
            border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px); }

        .card-header-tabs {
            margin-right: -0.625rem;
            margin-bottom: -0.75rem;
            margin-left: -0.625rem;
            border-bottom: 0; }

        .card-header-pills {
            margin-right: -0.625rem;
            margin-left: -0.625rem; }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1.25rem;
            border-radius: calc(0.25rem - 1px); }

        .card-img,
        .card-img-top,
        .card-img-bottom {
            flex-shrink: 0;
            width: 100%; }

        .card-img,
        .card-img-top {
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px); }

        .card-img,
        .card-img-bottom {
            border-bottom-right-radius: calc(0.25rem - 1px);
            border-bottom-left-radius: calc(0.25rem - 1px); }

        .card-deck .card {
            margin-bottom: 15px; }

        @media (min-width: 576px) {
            .card-deck {
                display: flex;
                flex-flow: row wrap;
                margin-right: -15px;
                margin-left: -15px; }
            .card-deck .card {
                flex: 1 0 0%;
                margin-right: 15px;
                margin-bottom: 0;
                margin-left: 15px; } }

        .card-group > .card {
            margin-bottom: 15px; }

        @media (min-width: 576px) {
            .card-group {
                display: flex;
                flex-flow: row wrap; }
            .card-group > .card {
                flex: 1 0 0%;
                margin-bottom: 0; }
            .card-group > .card + .card {
                margin-left: 0;
                border-left: 0; }
            .card-group > .card:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0; }
            .card-group > .card:not(:last-child) .card-img-top,
            .card-group > .card:not(:last-child) .card-header {
                border-top-right-radius: 0; }
            .card-group > .card:not(:last-child) .card-img-bottom,
            .card-group > .card:not(:last-child) .card-footer {
                border-bottom-right-radius: 0; }
            .card-group > .card:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0; }
            .card-group > .card:not(:first-child) .card-img-top,
            .card-group > .card:not(:first-child) .card-header {
                border-top-left-radius: 0; }
            .card-group > .card:not(:first-child) .card-img-bottom,
            .card-group > .card:not(:first-child) .card-footer {
                border-bottom-left-radius: 0; } }

        .card-columns .card {
            margin-bottom: 0.75rem; }

        @media (min-width: 576px) {
            .card-columns {
                column-count: 3;
                column-gap: 1.25rem;
                orphans: 1;
                widows: 1; }
            .card-columns .card {
                display: inline-block;
                width: 100%; } }

        .accordion {
            overflow-anchor: none; }
        .accordion > .card {
            overflow: hidden; }
        .accordion > .card:not(:last-of-type) {
            border-bottom: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0; }
        .accordion > .card:not(:first-of-type) {
            border-top-left-radius: 0;
            border-top-right-radius: 0; }
        .accordion > .card > .card-header {
            border-radius: 0;
            margin-bottom: -1px; }

        .breadcrumb {
            display: flex;
            flex-wrap: wrap;
            padding: 0.56rem 1.13rem;
            margin-bottom: 1rem;
            font-size: 0.875rem;
            list-style: none;
            background-color: transparent;
            border-radius: 0.25rem; }

        .breadcrumb-item {
            display: flex; }
        .breadcrumb-item + .breadcrumb-item {
            padding-left: 0.5rem; }
        .breadcrumb-item + .breadcrumb-item::before {
            display: inline-block;
            padding-right: 0.5rem;
            color: #6c757d;
            content: "/"; }
        .breadcrumb-item + .breadcrumb-item:hover::before {
            text-decoration: underline; }
        .breadcrumb-item + .breadcrumb-item:hover::before {
            text-decoration: none; }
        .breadcrumb-item.active {
            color: #495057; }

        .pagination, .jsgrid .jsgrid-pager {
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: 0.25rem; }

        .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a,
        .jsgrid .jsgrid-pager .jsgrid-pager-page a {
            position: relative;
            display: block;
            padding: 0.5rem 0.75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #007bff;
            background-color: #000000;
            border: 1px solid #dee2e6; }
        .page-link:hover, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:hover,
        .jsgrid .jsgrid-pager .jsgrid-pager-page a:hover {
            z-index: 2;
            color: #0056b3;
            text-decoration: none;
            background-color: #e9ecef;
            border-color: #dee2e6; }
        .page-link:focus, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:focus,
        .jsgrid .jsgrid-pager .jsgrid-pager-page a:focus {
            z-index: 3;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }

        .page-item:first-child .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:first-child a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a,
        .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:first-child a,
        .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a {
            margin-left: 0;
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem; }

        .page-item:last-child .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:last-child a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a,
        .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:last-child a,
        .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a {
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem; }

        .page-item.active .page-link, .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item.active a, .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a,
        .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item.active a,
        .jsgrid .jsgrid-pager .active.jsgrid-pager-page a {
            z-index: 3;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff; }

        .page-item.disabled .page-link, .jsgrid .jsgrid-pager .disabled.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .disabled.jsgrid-pager-page .page-link, .page-item.disabled .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item.disabled a, .jsgrid .jsgrid-pager .disabled.jsgrid-pager-nav-button a,
        .page-item.disabled .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item.disabled a,
        .jsgrid .jsgrid-pager .disabled.jsgrid-pager-page a {
            color: #6c757d;
            pointer-events: none;
            cursor: auto;
            background-color: #fff;
            border-color: #dee2e6; }

        .pagination-lg .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-lg a,
        .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-lg a {
            padding: 0.75rem 1.5rem;
            font-size: 1.25rem;
            line-height: 1.5; }

        .pagination-lg .page-item:first-child .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:first-child .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:first-child .page-link, .pagination-lg .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-lg .page-item:first-child a, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:first-child a,
        .pagination-lg .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-lg .page-item:first-child a,
        .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:first-child a {
            border-top-left-radius: 0.3rem;
            border-bottom-left-radius: 0.3rem; }

        .pagination-lg .page-item:last-child .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:last-child .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:last-child .page-link, .pagination-lg .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-lg .page-item:last-child a, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:last-child a,
        .pagination-lg .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-lg .page-item:last-child a,
        .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:last-child a {
            border-top-right-radius: 0.3rem;
            border-bottom-right-radius: 0.3rem; }

        .pagination-sm .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-sm a,
        .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-sm a {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5; }

        .pagination-sm .page-item:first-child .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:first-child .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:first-child .page-link, .pagination-sm .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-sm .page-item:first-child a, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:first-child a,
        .pagination-sm .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-sm .page-item:first-child a,
        .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:first-child a {
            border-top-left-radius: 0.2rem;
            border-bottom-left-radius: 0.2rem; }

        .pagination-sm .page-item:last-child .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:last-child .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:last-child .page-link, .pagination-sm .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-sm .page-item:last-child a, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:last-child a,
        .pagination-sm .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-sm .page-item:last-child a,
        .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:last-child a {
            border-top-right-radius: 0.2rem;
            border-bottom-right-radius: 0.2rem; }

        .badge {
            display: inline-block;
            padding: 0.25em 0.4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
        @media (prefers-reduced-motion: reduce) {
            .badge {
                transition: none; } }
        a.badge:hover, a.badge:focus {
            text-decoration: none; }
        .badge:empty {
            display: none; }

        .btn .badge, .fc button .badge, .ajax-upload-dragdrop .ajax-file-upload .badge, .swal2-modal .swal2-buttonswrapper .swal2-styled .badge, .wizard > .actions a .badge {
            position: relative;
            top: -1px; }

        .badge-pill {
            padding-right: 0.6em;
            padding-left: 0.6em;
            border-radius: 10rem; }

        .badge-primary {
            color: #fff;
            background-color: #0090e7; }
        a.badge-primary:hover, a.badge-primary:focus {
            color: #fff;
            background-color: #0070b4; }
        a.badge-primary:focus, a.badge-primary.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 144, 231, 0.5); }

        .badge-secondary {
            color: #212529;
            background-color: #e4eaec; }
        a.badge-secondary:hover, a.badge-secondary:focus {
            color: #212529;
            background-color: #c6d3d7; }
        a.badge-secondary:focus, a.badge-secondary.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(228, 234, 236, 0.5); }

        .badge-success, .preview-list .preview-item .preview-thumbnail .badge.badge-online {
            color: #fff;
            background-color: #00d25b; }
        a.badge-success:hover, .preview-list .preview-item .preview-thumbnail a.badge.badge-online:hover, a.badge-success:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-online:focus {
            color: #fff;
            background-color: #009f45; }
        a.badge-success:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-online:focus, a.badge-success.focus, .preview-list .preview-item .preview-thumbnail a.focus.badge.badge-online {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 210, 91, 0.5); }

        .badge-info, .preview-list .preview-item .preview-thumbnail .badge.badge-offline {
            color: #fff;
            background-color: #8f5fe8; }
        a.badge-info:hover, .preview-list .preview-item .preview-thumbnail a.badge.badge-offline:hover, a.badge-info:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-offline:focus {
            color: #fff;
            background-color: #7032e2; }
        a.badge-info:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-offline:focus, a.badge-info.focus, .preview-list .preview-item .preview-thumbnail a.focus.badge.badge-offline {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(143, 95, 232, 0.5); }

        .badge-warning, .preview-list .preview-item .preview-thumbnail .badge.badge-busy {
            color: #212529;
            background-color: #ffab00; }
        a.badge-warning:hover, .preview-list .preview-item .preview-thumbnail a.badge.badge-busy:hover, a.badge-warning:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-busy:focus {
            color: #212529;
            background-color: #cc8900; }
        a.badge-warning:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-busy:focus, a.badge-warning.focus, .preview-list .preview-item .preview-thumbnail a.focus.badge.badge-busy {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(255, 171, 0, 0.5); }

        .badge-danger {
            color: #fff;
            background-color: #fc424a; }
        a.badge-danger:hover, a.badge-danger:focus {
            color: #fff;
            background-color: #fb101a; }
        a.badge-danger:focus, a.badge-danger.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(252, 66, 74, 0.5); }

        .badge-light {
            color: #212529;
            background-color: #ffffff; }
        a.badge-light:hover, a.badge-light:focus {
            color: #212529;
            background-color: #e6e6e6; }
        a.badge-light:focus, a.badge-light.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

        .badge-dark {
            color: #fff;
            background-color: #0d0d0d; }
        a.badge-dark:hover, a.badge-dark:focus {
            color: #fff;
            background-color: black; }
        a.badge-dark:focus, a.badge-dark.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(13, 13, 13, 0.5); }

        .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            background-color: #e9ecef;
            border-radius: 0.3rem; }
        @media (min-width: 576px) {
            .jumbotron {
                padding: 4rem 2rem; } }

        .jumbotron-fluid {
            padding-right: 0;
            padding-left: 0;
            border-radius: 0; }

        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem; }

        .alert-heading {
            color: inherit; }

        .alert-link {
            font-weight: 700; }

        .alert-dismissible {
            padding-right: 4rem; }
        .alert-dismissible .close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            padding: 0.75rem 1.25rem;
            color: inherit; }

        .alert-primary {
            color: #004b78;
            background-color: #cce9fa;
            border-color: #b8e0f8; }
        .alert-primary hr {
            border-top-color: #a1d6f6; }
        .alert-primary .alert-link {
            color: #002b45; }

        .alert-secondary {
            color: #777a7b;
            background-color: #fafbfb;
            border-color: #f7f9fa; }
        .alert-secondary hr {
            border-top-color: #e7edf0; }
        .alert-secondary .alert-link {
            color: #5e6061; }

        .alert-success {
            color: #006d2f;
            background-color: #ccf6de;
            border-color: #b8f2d1; }
        .alert-success hr {
            border-top-color: #a2eec3; }
        .alert-success .alert-link {
            color: #003a19; }

        .alert-info {
            color: #4a3179;
            background-color: #e9dffa;
            border-color: #e0d2f9; }
        .alert-info hr {
            border-top-color: #d1bcf6; }
        .alert-info .alert-link {
            color: #342255; }

        .alert-warning {
            color: #855900;
            background-color: #ffeecc;
            border-color: #ffe7b8; }
        .alert-warning hr {
            border-top-color: #ffde9f; }
        .alert-warning .alert-link {
            color: #523700; }

        .alert-danger {
            color: #832226;
            background-color: #fed9db;
            border-color: #fecacc; }
        .alert-danger hr {
            border-top-color: #feb1b4; }
        .alert-danger .alert-link {
            color: #5b171a; }

        .alert-light {
            color: #858585;
            background-color: white;
            border-color: white; }
        .alert-light hr {
            border-top-color: #f2f2f2; }
        .alert-light .alert-link {
            color: #6c6c6c; }

        .alert-dark {
            color: #070707;
            background-color: #cfcfcf;
            border-color: #bbbbbb; }
        .alert-dark hr {
            border-top-color: #aeaeae; }
        .alert-dark .alert-link {
            color: black; }

        @keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0; }
            to {
                background-position: 0 0; } }

        .progress {
            display: flex;
            height: 1rem;
            overflow: hidden;
            line-height: 0;
            font-size: 0.75rem;
            background-color: #000000;
            border-radius: 0.25rem; }

        .progress-bar {
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            background-color: #007bff;
            transition: width 0.6s ease; }
        @media (prefers-reduced-motion: reduce) {
            .progress-bar {
                transition: none; } }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-size: 1rem 1rem; }

        .progress-bar-animated {
            animation: progress-bar-stripes 1s linear infinite; }
        @media (prefers-reduced-motion: reduce) {
            .progress-bar-animated {
                animation: none; } }

        .media {
            display: flex;
            align-items: flex-start; }

        .media-body {
            flex: 1; }

        .list-group {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            border-radius: 0.25rem; }

        .list-group-item-action {
            width: 100%;
            color: #495057;
            text-align: inherit; }
        .list-group-item-action:hover, .list-group-item-action:focus {
            z-index: 1;
            color: #495057;
            text-decoration: none;
            background-color: #f8f9fa; }
        .list-group-item-action:active {
            color: #212529;
            background-color: #e9ecef; }

        .list-group-item {
            position: relative;
            display: block;
            padding: 0.75rem 1.25rem;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.125); }
        .list-group-item:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit; }
        .list-group-item:last-child {
            border-bottom-right-radius: inherit;
            border-bottom-left-radius: inherit; }
        .list-group-item.disabled, .list-group-item:disabled {
            color: #6c757d;
            pointer-events: none;
            background-color: #fff; }
        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff; }
        .list-group-item + .list-group-item {
            border-top-width: 0; }
        .list-group-item + .list-group-item.active {
            margin-top: -1px;
            border-top-width: 1px; }

        .list-group-horizontal {
            flex-direction: row; }
        .list-group-horizontal > .list-group-item:first-child {
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0; }
        .list-group-horizontal > .list-group-item:last-child {
            border-top-right-radius: 0.25rem;
            border-bottom-left-radius: 0; }
        .list-group-horizontal > .list-group-item.active {
            margin-top: 0; }
        .list-group-horizontal > .list-group-item + .list-group-item {
            border-top-width: 1px;
            border-left-width: 0; }
        .list-group-horizontal > .list-group-item + .list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px; }

        @media (min-width: 576px) {
            .list-group-horizontal-sm {
                flex-direction: row; }
            .list-group-horizontal-sm > .list-group-item:first-child {
                border-bottom-left-radius: 0.25rem;
                border-top-right-radius: 0; }
            .list-group-horizontal-sm > .list-group-item:last-child {
                border-top-right-radius: 0.25rem;
                border-bottom-left-radius: 0; }
            .list-group-horizontal-sm > .list-group-item.active {
                margin-top: 0; }
            .list-group-horizontal-sm > .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0; }
            .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px; } }

        @media (min-width: 768px) {
            .list-group-horizontal-md {
                flex-direction: row; }
            .list-group-horizontal-md > .list-group-item:first-child {
                border-bottom-left-radius: 0.25rem;
                border-top-right-radius: 0; }
            .list-group-horizontal-md > .list-group-item:last-child {
                border-top-right-radius: 0.25rem;
                border-bottom-left-radius: 0; }
            .list-group-horizontal-md > .list-group-item.active {
                margin-top: 0; }
            .list-group-horizontal-md > .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0; }
            .list-group-horizontal-md > .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px; } }

        @media (min-width: 992px) {
            .list-group-horizontal-lg {
                flex-direction: row; }
            .list-group-horizontal-lg > .list-group-item:first-child {
                border-bottom-left-radius: 0.25rem;
                border-top-right-radius: 0; }
            .list-group-horizontal-lg > .list-group-item:last-child {
                border-top-right-radius: 0.25rem;
                border-bottom-left-radius: 0; }
            .list-group-horizontal-lg > .list-group-item.active {
                margin-top: 0; }
            .list-group-horizontal-lg > .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0; }
            .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px; } }

        @media (min-width: 1200px) {
            .list-group-horizontal-xl {
                flex-direction: row; }
            .list-group-horizontal-xl > .list-group-item:first-child {
                border-bottom-left-radius: 0.25rem;
                border-top-right-radius: 0; }
            .list-group-horizontal-xl > .list-group-item:last-child {
                border-top-right-radius: 0.25rem;
                border-bottom-left-radius: 0; }
            .list-group-horizontal-xl > .list-group-item.active {
                margin-top: 0; }
            .list-group-horizontal-xl > .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0; }
            .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px; } }

        .list-group-flush {
            border-radius: 0; }
        .list-group-flush > .list-group-item {
            border-width: 0 0 1px; }
        .list-group-flush > .list-group-item:last-child {
            border-bottom-width: 0; }

        .list-group-item-primary {
            color: #004b78;
            background-color: #b8e0f8; }
        .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
            color: #004b78;
            background-color: #a1d6f6; }
        .list-group-item-primary.list-group-item-action.active {
            color: #ffffff;
            background-color: #004b78;
            border-color: #004b78; }

        .list-group-item-secondary {
            color: #777a7b;
            background-color: #f7f9fa; }
        .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
            color: #777a7b;
            background-color: #e7edf0; }
        .list-group-item-secondary.list-group-item-action.active {
            color: #ffffff;
            background-color: #777a7b;
            border-color: #777a7b; }

        .list-group-item-success {
            color: #006d2f;
            background-color: #b8f2d1; }
        .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
            color: #006d2f;
            background-color: #a2eec3; }
        .list-group-item-success.list-group-item-action.active {
            color: #ffffff;
            background-color: #006d2f;
            border-color: #006d2f; }

        .list-group-item-info {
            color: #4a3179;
            background-color: #e0d2f9; }
        .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
            color: #4a3179;
            background-color: #d1bcf6; }
        .list-group-item-info.list-group-item-action.active {
            color: #ffffff;
            background-color: #4a3179;
            border-color: #4a3179; }

        .list-group-item-warning {
            color: #855900;
            background-color: #ffe7b8; }
        .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
            color: #855900;
            background-color: #ffde9f; }
        .list-group-item-warning.list-group-item-action.active {
            color: #ffffff;
            background-color: #855900;
            border-color: #855900; }

        .list-group-item-danger {
            color: #832226;
            background-color: #fecacc; }
        .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
            color: #832226;
            background-color: #feb1b4; }
        .list-group-item-danger.list-group-item-action.active {
            color: #ffffff;
            background-color: #832226;
            border-color: #832226; }

        .list-group-item-light {
            color: #858585;
            background-color: white; }
        .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
            color: #858585;
            background-color: #f2f2f2; }
        .list-group-item-light.list-group-item-action.active {
            color: #ffffff;
            background-color: #858585;
            border-color: #858585; }

        .list-group-item-dark {
            color: #070707;
            background-color: #bbbbbb; }
        .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
            color: #070707;
            background-color: #aeaeae; }
        .list-group-item-dark.list-group-item-action.active {
            color: #ffffff;
            background-color: #070707;
            border-color: #070707; }

        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5; }
        .close:hover {
            color: #000;
            text-decoration: none; }
        .close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
            opacity: .75; }

        button.close {
            padding: 0;
            background-color: transparent;
            border: 0; }

        a.close.disabled {
            pointer-events: none; }

        .toast {
            flex-basis: 350px;
            max-width: 350px;
            font-size: 0.875rem;
            background-color: rgba(255, 255, 255, 0.85);
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
            opacity: 0;
            border-radius: 0.25rem; }
        .toast:not(:last-child) {
            margin-bottom: 0.75rem; }
        .toast.showing {
            opacity: 1; }
        .toast.show {
            display: block;
            opacity: 1; }
        .toast.hide {
            display: none; }

        .toast-header {
            display: flex;
            align-items: center;
            padding: 0.25rem 0.75rem;
            color: #6c757d;
            background-color: rgba(255, 255, 255, 0.85);
            background-clip: padding-box;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px); }

        .toast-body {
            padding: 0.75rem; }

        .modal-open {
            overflow: hidden; }
        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto; }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            display: none;
            width: 100%;
            height: 100%;
            overflow: hidden;
            outline: 0; }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: 10px;
            pointer-events: none; }
        .modal.fade .modal-dialog {
            transition: transform 0.4s ease;
            transform: translate(0, -50px); }
        @media (prefers-reduced-motion: reduce) {
            .modal.fade .modal-dialog {
                transition: none; } }
        .modal.show .modal-dialog {
            transform: none; }
        .modal.modal-static .modal-dialog {
            transform: scale(1.02); }

        .modal-dialog-scrollable {
            display: flex;
            max-height: calc(100% - 20px); }
        .modal-dialog-scrollable .modal-content {
            max-height: calc(100vh - 20px);
            overflow: hidden; }
        .modal-dialog-scrollable .modal-header,
        .modal-dialog-scrollable .modal-footer {
            flex-shrink: 0; }
        .modal-dialog-scrollable .modal-body {
            overflow-y: auto; }

        .modal-dialog-centered {
            display: flex;
            align-items: center;
            min-height: calc(100% - 20px); }
        .modal-dialog-centered::before {
            display: block;
            height: calc(100vh - 20px);
            height: min-content;
            content: ""; }
        .modal-dialog-centered.modal-dialog-scrollable {
            flex-direction: column;
            justify-content: center;
            height: 100%; }
        .modal-dialog-centered.modal-dialog-scrollable .modal-content {
            max-height: none; }
        .modal-dialog-centered.modal-dialog-scrollable::before {
            content: none; }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #000000;
            background-clip: padding-box;
            border: 1px solid #2c2e33;
            border-radius: 0.3rem;
            outline: 0; }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #000; }
        .modal-backdrop.fade {
            opacity: 0; }
        .modal-backdrop.show {
            opacity: 0.5; }

        .modal-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding: 1rem 1rem;
            border-bottom: 1px solid #2c2e33;
            border-top-left-radius: calc(0.3rem - 1px);
            border-top-right-radius: calc(0.3rem - 1px); }
        .modal-header .close {
            padding: 1rem 1rem;
            margin: -25px -26px -25px auto; }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.5; }

        .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: 0.9375rem; }

        .modal-footer {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            padding: 0.6875rem;
            border-top: 1px solid #2c2e33;
            border-bottom-right-radius: calc(0.3rem - 1px);
            border-bottom-left-radius: calc(0.3rem - 1px); }
        .modal-footer > * {
            margin: 0.25rem; }

        .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll; }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 30px auto; }
            .modal-dialog-scrollable {
                max-height: calc(100% - 60px); }
            .modal-dialog-scrollable .modal-content {
                max-height: calc(100vh - 60px); }
            .modal-dialog-centered {
                min-height: calc(100% - 60px); }
            .modal-dialog-centered::before {
                height: calc(100vh - 60px);
                height: min-content; }
            .modal-sm {
                max-width: 300px; } }

        @media (min-width: 992px) {
            .modal-lg,
            .modal-xl {
                max-width: 90%; } }

        @media (min-width: 1200px) {
            .modal-xl {
                max-width: 1140px; } }

        .tooltip {
            position: absolute;
            z-index: 1070;
            display: block;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: 0.75rem;
            word-wrap: break-word;
            opacity: 0; }
        .tooltip.show {
            opacity: 0.9; }
        .tooltip .arrow {
            position: absolute;
            display: block;
            width: 0.8rem;
            height: 0.4rem; }
        .tooltip .arrow::before {
            position: absolute;
            content: "";
            border-color: transparent;
            border-style: solid; }

        .bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
            padding: 0.4rem 0; }
        .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
            bottom: 0; }
        .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
            top: 0;
            border-width: 0.4rem 0.4rem 0;
            border-top-color: #000; }

        .bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
            padding: 0 0.4rem; }
        .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
            left: 0;
            width: 0.4rem;
            height: 0.8rem; }
        .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
            right: 0;
            border-width: 0.4rem 0.4rem 0.4rem 0;
            border-right-color: #000; }

        .bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
            padding: 0.4rem 0; }
        .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
            top: 0; }
        .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
            bottom: 0;
            border-width: 0 0.4rem 0.4rem;
            border-bottom-color: #000; }

        .bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
            padding: 0 0.4rem; }
        .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
            right: 0;
            width: 0.4rem;
            height: 0.8rem; }
        .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
            left: 0;
            border-width: 0.4rem 0 0.4rem 0.4rem;
            border-left-color: #000; }

        .tooltip-inner {
            max-width: 200px;
            padding: 0.4rem 0.75rem;
            color: #fff;
            text-align: center;
            background-color: #000;
            border-radius: 0.375rem; }

        .popover {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1060;
            display: block;
            max-width: 276px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: 0.875rem;
            word-wrap: break-word;
            background-color: #0d0d0d;
            background-clip: padding-box;
            border: 1px solid #2c2e33;
            border-radius: 0.3rem; }
        .popover .arrow {
            position: absolute;
            display: block;
            width: 1rem;
            height: 0.5rem;
            margin: 0 0.3rem; }
        .popover .arrow::before, .popover .arrow::after {
            position: absolute;
            display: block;
            content: "";
            border-color: transparent;
            border-style: solid; }

        .bs-popover-top, .bs-popover-auto[x-placement^="top"] {
            margin-bottom: 0.5rem; }
        .bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
            bottom: calc(-0.5rem - 1px); }
        .bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
            bottom: 0;
            border-width: 0.5rem 0.5rem 0;
            border-top-color: #2c2e33; }
        .bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
            bottom: 1px;
            border-width: 0.5rem 0.5rem 0;
            border-top-color: #0d0d0d; }

        .bs-popover-right, .bs-popover-auto[x-placement^="right"] {
            margin-left: 0.5rem; }
        .bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
            left: calc(-0.5rem - 1px);
            width: 0.5rem;
            height: 1rem;
            margin: 0.3rem 0; }
        .bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
            left: 0;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: #2c2e33; }
        .bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
            left: 1px;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: #0d0d0d; }

        .bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
            margin-top: 0.5rem; }
        .bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
            top: calc(-0.5rem - 1px); }
        .bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
            top: 0;
            border-width: 0 0.5rem 0.5rem 0.5rem;
            border-bottom-color: #2c2e33; }
        .bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
            top: 1px;
            border-width: 0 0.5rem 0.5rem 0.5rem;
            border-bottom-color: #0d0d0d; }
        .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 1rem;
            margin-left: -0.5rem;
            content: "";
            border-bottom: 1px solid #0d0d0d; }

        .bs-popover-left, .bs-popover-auto[x-placement^="left"] {
            margin-right: 0.5rem; }
        .bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
            right: calc(-0.5rem - 1px);
            width: 0.5rem;
            height: 1rem;
            margin: 0.3rem 0; }
        .bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
            right: 0;
            border-width: 0.5rem 0 0.5rem 0.5rem;
            border-left-color: #2c2e33; }
        .bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
            right: 1px;
            border-width: 0.5rem 0 0.5rem 0.5rem;
            border-left-color: #0d0d0d; }

        .popover-header {
            padding: 0.5rem 0.75rem;
            margin-bottom: 0;
            font-size: 1rem;
            background-color: #0d0d0d;
            border-bottom: 1px solid black;
            border-top-left-radius: calc(0.3rem - 1px);
            border-top-right-radius: calc(0.3rem - 1px); }
        .popover-header:empty {
            display: none; }

        .popover-body {
            padding: 0.5rem 0.75rem;
            color: #212529; }

        .carousel {
            position: relative; }

        .carousel.pointer-event {
            touch-action: pan-y; }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden; }
        .carousel-inner::after {
            display: block;
            clear: both;
            content: ""; }

        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: -100%;
            backface-visibility: hidden;
            transition: transform 0.6s ease-in-out; }
        @media (prefers-reduced-motion: reduce) {
            .carousel-item {
                transition: none; } }

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block; }

        .carousel-item-next:not(.carousel-item-left),
        .active.carousel-item-right {
            transform: translateX(100%); }

        .carousel-item-prev:not(.carousel-item-right),
        .active.carousel-item-left {
            transform: translateX(-100%); }

        .carousel-fade .carousel-item {
            opacity: 0;
            transition-property: opacity;
            transform: none; }

        .carousel-fade .carousel-item.active,
        .carousel-fade .carousel-item-next.carousel-item-left,
        .carousel-fade .carousel-item-prev.carousel-item-right {
            z-index: 1;
            opacity: 1; }

        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            z-index: 0;
            opacity: 0;
            transition: opacity 0s 0.6s; }
        @media (prefers-reduced-motion: reduce) {
            .carousel-fade .active.carousel-item-left,
            .carousel-fade .active.carousel-item-right {
                transition: none; } }

        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15%;
            color: #fff;
            text-align: center;
            opacity: 0.5;
            transition: opacity 0.15s ease; }
        @media (prefers-reduced-motion: reduce) {
            .carousel-control-prev,
            .carousel-control-next {
                transition: none; } }
        .carousel-control-prev:hover, .carousel-control-prev:focus,
        .carousel-control-next:hover,
        .carousel-control-next:focus {
            color: #fff;
            text-decoration: none;
            outline: 0;
            opacity: 0.9; }

        .carousel-control-prev {
            left: 0; }

        .carousel-control-next {
            right: 0; }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background: no-repeat 50% / 100% 100%; }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e"); }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e"); }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 15;
            display: flex;
            justify-content: center;
            padding-left: 0;
            margin-right: 15%;
            margin-left: 15%;
            list-style: none; }
        .carousel-indicators li {
            box-sizing: content-box;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: .5;
            transition: opacity 0.6s ease; }
        @media (prefers-reduced-motion: reduce) {
            .carousel-indicators li {
                transition: none; } }
        .carousel-indicators .active {
            opacity: 1; }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 20px;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center; }

        @keyframes spinner-border {
            to {
                transform: rotate(360deg); } }

        .spinner-border {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: text-bottom;
            border: 0.25em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            animation: spinner-border .75s linear infinite; }

        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
            border-width: 0.2em; }

        @keyframes spinner-grow {
            0% {
                transform: scale(0); }
            50% {
                opacity: 1;
                transform: none; } }

        .spinner-grow {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: text-bottom;
            background-color: currentColor;
            border-radius: 50%;
            opacity: 0;
            animation: spinner-grow .75s linear infinite; }

        .spinner-grow-sm {
            width: 1rem;
            height: 1rem; }

        .align-baseline {
            vertical-align: baseline !important; }

        .align-top {
            vertical-align: top !important; }

        .align-middle {
            vertical-align: middle !important; }

        .align-bottom {
            vertical-align: bottom !important; }

        .align-text-bottom {
            vertical-align: text-bottom !important; }

        .align-text-top {
            vertical-align: text-top !important; }

        .bg-primary {
            background-color: #0090e7 !important; }

        a.bg-primary:hover, a.bg-primary:focus,
        button.bg-primary:hover,
        button.bg-primary:focus {
            background-color: #0070b4 !important; }

        .bg-secondary {
            background-color: #e4eaec !important; }

        a.bg-secondary:hover, a.bg-secondary:focus,
        button.bg-secondary:hover,
        button.bg-secondary:focus {
            background-color: #c6d3d7 !important; }

        .bg-success, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm {
            background-color: #00d25b !important; }

        a.bg-success:hover, .swal2-modal .swal2-buttonswrapper a.swal2-styled.swal2-confirm:hover, a.bg-success:focus, .swal2-modal .swal2-buttonswrapper a.swal2-styled.swal2-confirm:focus,
        button.bg-success:hover,
        .swal2-modal .swal2-buttonswrapper button.swal2-styled.swal2-confirm:hover,
        button.bg-success:focus,
        .swal2-modal .swal2-buttonswrapper button.swal2-styled.swal2-confirm:focus {
            background-color: #009f45 !important; }

        .bg-info {
            background-color: #8f5fe8 !important; }

        a.bg-info:hover, a.bg-info:focus,
        button.bg-info:hover,
        button.bg-info:focus {
            background-color: #7032e2 !important; }

        .bg-warning {
            background-color: #ffab00 !important; }

        a.bg-warning:hover, a.bg-warning:focus,
        button.bg-warning:hover,
        button.bg-warning:focus {
            background-color: #cc8900 !important; }

        .bg-danger {
            background-color: #fc424a !important; }

        a.bg-danger:hover, a.bg-danger:focus,
        button.bg-danger:hover,
        button.bg-danger:focus {
            background-color: #fb101a !important; }

        .bg-light {
            background-color: #ffffff !important; }

        a.bg-light:hover, a.bg-light:focus,
        button.bg-light:hover,
        button.bg-light:focus {
            background-color: #e6e6e6 !important; }

        .bg-dark {
            background-color: #0d0d0d !important; }

        a.bg-dark:hover, a.bg-dark:focus,
        button.bg-dark:hover,
        button.bg-dark:focus {
            background-color: black !important; }

        .bg-white {
            background-color: #ffffff !important; }

        .bg-transparent {
            background-color: transparent !important; }

        .border, .loader-demo-box {
            border: 1px solid #2c2e33 !important; }

        .border-top {
            border-top: 1px solid #2c2e33 !important; }

        .border-right {
            border-right: 1px solid #2c2e33 !important; }

        .border-bottom {
            border-bottom: 1px solid #2c2e33 !important; }

        .border-left {
            border-left: 1px solid #2c2e33 !important; }

        .border-0 {
            border: 0 !important; }

        .border-top-0 {
            border-top: 0 !important; }

        .border-right-0 {
            border-right: 0 !important; }

        .border-bottom-0 {
            border-bottom: 0 !important; }

        .border-left-0 {
            border-left: 0 !important; }

        .border-primary {
            border-color: #0090e7 !important; }

        .border-secondary, .loader-demo-box {
            border-color: #e4eaec !important; }

        .border-success, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm {
            border-color: #00d25b !important; }

        .border-info {
            border-color: #8f5fe8 !important; }

        .border-warning {
            border-color: #ffab00 !important; }

        .border-danger {
            border-color: #fc424a !important; }

        .border-light {
            border-color: #ffffff !important; }

        .border-dark {
            border-color: #0d0d0d !important; }

        .border-white {
            border-color: #ffffff !important; }

        .rounded-sm {
            border-radius: 0.2rem !important; }

        .rounded, .loader-demo-box {
            border-radius: 0.25rem !important; }

        .rounded-top {
            border-top-left-radius: 0.25rem !important;
            border-top-right-radius: 0.25rem !important; }

        .rounded-right {
            border-top-right-radius: 0.25rem !important;
            border-bottom-right-radius: 0.25rem !important; }

        .rounded-bottom {
            border-bottom-right-radius: 0.25rem !important;
            border-bottom-left-radius: 0.25rem !important; }

        .rounded-left {
            border-top-left-radius: 0.25rem !important;
            border-bottom-left-radius: 0.25rem !important; }

        .rounded-lg {
            border-radius: 0.3rem !important; }

        .rounded-circle {
            border-radius: 50% !important; }

        .rounded-pill {
            border-radius: 50rem !important; }

        .rounded-0 {
            border-radius: 0 !important; }

        .clearfix::after {
            display: block;
            clear: both;
            content: ""; }

        .d-none {
            display: none !important; }

        .d-inline {
            display: inline !important; }

        .d-inline-block {
            display: inline-block !important; }

        .d-block {
            display: block !important; }

        .d-table {
            display: table !important; }

        .d-table-row {
            display: table-row !important; }

        .d-table-cell {
            display: table-cell !important; }

        .d-flex, .page-header, .loader-demo-box, .list-wrapper ul li, .lightGallery .image-tile .demo-gallery-poster, .swal2-modal, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link {
            display: flex !important; }

        .d-inline-flex {
            display: inline-flex !important; }

        @media (min-width: 576px) {
            .d-sm-none {
                display: none !important; }
            .d-sm-inline {
                display: inline !important; }
            .d-sm-inline-block {
                display: inline-block !important; }
            .d-sm-block {
                display: block !important; }
            .d-sm-table {
                display: table !important; }
            .d-sm-table-row {
                display: table-row !important; }
            .d-sm-table-cell {
                display: table-cell !important; }
            .d-sm-flex {
                display: flex !important; }
            .d-sm-inline-flex {
                display: inline-flex !important; } }

        @media (min-width: 768px) {
            .d-md-none {
                display: none !important; }
            .d-md-inline {
                display: inline !important; }
            .d-md-inline-block {
                display: inline-block !important; }
            .d-md-block {
                display: block !important; }
            .d-md-table {
                display: table !important; }
            .d-md-table-row {
                display: table-row !important; }
            .d-md-table-cell {
                display: table-cell !important; }
            .d-md-flex {
                display: flex !important; }
            .d-md-inline-flex {
                display: inline-flex !important; } }

        @media (min-width: 992px) {
            .d-lg-none {
                display: none !important; }
            .d-lg-inline {
                display: inline !important; }
            .d-lg-inline-block {
                display: inline-block !important; }
            .d-lg-block {
                display: block !important; }
            .d-lg-table {
                display: table !important; }
            .d-lg-table-row {
                display: table-row !important; }
            .d-lg-table-cell {
                display: table-cell !important; }
            .d-lg-flex {
                display: flex !important; }
            .d-lg-inline-flex {
                display: inline-flex !important; } }

        @media (min-width: 1200px) {
            .d-xl-none {
                display: none !important; }
            .d-xl-inline {
                display: inline !important; }
            .d-xl-inline-block {
                display: inline-block !important; }
            .d-xl-block {
                display: block !important; }
            .d-xl-table {
                display: table !important; }
            .d-xl-table-row {
                display: table-row !important; }
            .d-xl-table-cell {
                display: table-cell !important; }
            .d-xl-flex {
                display: flex !important; }
            .d-xl-inline-flex {
                display: inline-flex !important; } }

        @media print {
            .d-print-none {
                display: none !important; }
            .d-print-inline {
                display: inline !important; }
            .d-print-inline-block {
                display: inline-block !important; }
            .d-print-block {
                display: block !important; }
            .d-print-table {
                display: table !important; }
            .d-print-table-row {
                display: table-row !important; }
            .d-print-table-cell {
                display: table-cell !important; }
            .d-print-flex {
                display: flex !important; }
            .d-print-inline-flex {
                display: inline-flex !important; } }

        .embed-responsive {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden; }
        .embed-responsive::before {
            display: block;
            content: ""; }
        .embed-responsive .embed-responsive-item,
        .embed-responsive iframe,
        .embed-responsive embed,
        .embed-responsive object,
        .embed-responsive video {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0; }

        .embed-responsive-21by9::before {
            padding-top: 42.85714%; }

        .embed-responsive-16by9::before {
            padding-top: 56.25%; }

        .embed-responsive-4by3::before {
            padding-top: 75%; }

        .embed-responsive-1by1::before {
            padding-top: 100%; }

        .embed-responsive-21by9::before {
            padding-top: 42.85714%; }

        .embed-responsive-16by9::before {
            padding-top: 56.25%; }

        .embed-responsive-4by3::before {
            padding-top: 75%; }

        .embed-responsive-1by1::before {
            padding-top: 100%; }

        .flex-row {
            flex-direction: row !important; }

        .flex-column, .nav-tabs.nav-tabs-vertical, .nav-tabs.nav-tabs-vertical-custom, .nav-pills.nav-pills-vertical {
            flex-direction: column !important; }

        .flex-row-reverse {
            flex-direction: row-reverse !important; }

        .flex-column-reverse {
            flex-direction: column-reverse !important; }

        .flex-wrap {
            flex-wrap: wrap !important; }

        .flex-nowrap {
            flex-wrap: nowrap !important; }

        .flex-wrap-reverse {
            flex-wrap: wrap-reverse !important; }

        .flex-fill {
            flex: 1 1 auto !important; }

        .flex-grow-0 {
            flex-grow: 0 !important; }

        .flex-grow-1 {
            flex-grow: 1 !important; }

        .flex-shrink-0 {
            flex-shrink: 0 !important; }

        .flex-shrink-1 {
            flex-shrink: 1 !important; }

        .justify-content-start, .list-wrapper ul li {
            justify-content: flex-start !important; }

        .justify-content-end {
            justify-content: flex-end !important; }

        .justify-content-center {
            justify-content: center !important; }

        .justify-content-between, .page-header {
            justify-content: space-between !important; }

        .justify-content-around {
            justify-content: space-around !important; }

        .align-items-start {
            align-items: flex-start !important; }

        .align-items-end {
            align-items: flex-end !important; }

        .align-items-center, .page-header, .loader-demo-box, .list-wrapper ul li, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item {
            align-items: center !important; }

        .align-items-baseline {
            align-items: baseline !important; }

        .align-items-stretch {
            align-items: stretch !important; }

        .align-content-start {
            align-content: flex-start !important; }

        .align-content-end {
            align-content: flex-end !important; }

        .align-content-center {
            align-content: center !important; }

        .align-content-between {
            align-content: space-between !important; }

        .align-content-around {
            align-content: space-around !important; }

        .align-content-stretch {
            align-content: stretch !important; }

        .align-self-auto {
            align-self: auto !important; }

        .align-self-start {
            align-self: flex-start !important; }

        .align-self-end {
            align-self: flex-end !important; }

        .align-self-center {
            align-self: center !important; }

        .align-self-baseline {
            align-self: baseline !important; }

        .align-self-stretch {
            align-self: stretch !important; }

        @media (min-width: 576px) {
            .flex-sm-row {
                flex-direction: row !important; }
            .flex-sm-column {
                flex-direction: column !important; }
            .flex-sm-row-reverse {
                flex-direction: row-reverse !important; }
            .flex-sm-column-reverse {
                flex-direction: column-reverse !important; }
            .flex-sm-wrap {
                flex-wrap: wrap !important; }
            .flex-sm-nowrap {
                flex-wrap: nowrap !important; }
            .flex-sm-wrap-reverse {
                flex-wrap: wrap-reverse !important; }
            .flex-sm-fill {
                flex: 1 1 auto !important; }
            .flex-sm-grow-0 {
                flex-grow: 0 !important; }
            .flex-sm-grow-1 {
                flex-grow: 1 !important; }
            .flex-sm-shrink-0 {
                flex-shrink: 0 !important; }
            .flex-sm-shrink-1 {
                flex-shrink: 1 !important; }
            .justify-content-sm-start {
                justify-content: flex-start !important; }
            .justify-content-sm-end {
                justify-content: flex-end !important; }
            .justify-content-sm-center {
                justify-content: center !important; }
            .justify-content-sm-between {
                justify-content: space-between !important; }
            .justify-content-sm-around {
                justify-content: space-around !important; }
            .align-items-sm-start {
                align-items: flex-start !important; }
            .align-items-sm-end {
                align-items: flex-end !important; }
            .align-items-sm-center {
                align-items: center !important; }
            .align-items-sm-baseline {
                align-items: baseline !important; }
            .align-items-sm-stretch {
                align-items: stretch !important; }
            .align-content-sm-start {
                align-content: flex-start !important; }
            .align-content-sm-end {
                align-content: flex-end !important; }
            .align-content-sm-center {
                align-content: center !important; }
            .align-content-sm-between {
                align-content: space-between !important; }
            .align-content-sm-around {
                align-content: space-around !important; }
            .align-content-sm-stretch {
                align-content: stretch !important; }
            .align-self-sm-auto {
                align-self: auto !important; }
            .align-self-sm-start {
                align-self: flex-start !important; }
            .align-self-sm-end {
                align-self: flex-end !important; }
            .align-self-sm-center {
                align-self: center !important; }
            .align-self-sm-baseline {
                align-self: baseline !important; }
            .align-self-sm-stretch {
                align-self: stretch !important; } }

        @media (min-width: 768px) {
            .flex-md-row {
                flex-direction: row !important; }
            .flex-md-column {
                flex-direction: column !important; }
            .flex-md-row-reverse {
                flex-direction: row-reverse !important; }
            .flex-md-column-reverse {
                flex-direction: column-reverse !important; }
            .flex-md-wrap {
                flex-wrap: wrap !important; }
            .flex-md-nowrap {
                flex-wrap: nowrap !important; }
            .flex-md-wrap-reverse {
                flex-wrap: wrap-reverse !important; }
            .flex-md-fill {
                flex: 1 1 auto !important; }
            .flex-md-grow-0 {
                flex-grow: 0 !important; }
            .flex-md-grow-1 {
                flex-grow: 1 !important; }
            .flex-md-shrink-0 {
                flex-shrink: 0 !important; }
            .flex-md-shrink-1 {
                flex-shrink: 1 !important; }
            .justify-content-md-start {
                justify-content: flex-start !important; }
            .justify-content-md-end {
                justify-content: flex-end !important; }
            .justify-content-md-center {
                justify-content: center !important; }
            .justify-content-md-between {
                justify-content: space-between !important; }
            .justify-content-md-around {
                justify-content: space-around !important; }
            .align-items-md-start {
                align-items: flex-start !important; }
            .align-items-md-end {
                align-items: flex-end !important; }
            .align-items-md-center {
                align-items: center !important; }
            .align-items-md-baseline {
                align-items: baseline !important; }
            .align-items-md-stretch {
                align-items: stretch !important; }
            .align-content-md-start {
                align-content: flex-start !important; }
            .align-content-md-end {
                align-content: flex-end !important; }
            .align-content-md-center {
                align-content: center !important; }
            .align-content-md-between {
                align-content: space-between !important; }
            .align-content-md-around {
                align-content: space-around !important; }
            .align-content-md-stretch {
                align-content: stretch !important; }
            .align-self-md-auto {
                align-self: auto !important; }
            .align-self-md-start {
                align-self: flex-start !important; }
            .align-self-md-end {
                align-self: flex-end !important; }
            .align-self-md-center {
                align-self: center !important; }
            .align-self-md-baseline {
                align-self: baseline !important; }
            .align-self-md-stretch {
                align-self: stretch !important; } }

        @media (min-width: 992px) {
            .flex-lg-row {
                flex-direction: row !important; }
            .flex-lg-column {
                flex-direction: column !important; }
            .flex-lg-row-reverse {
                flex-direction: row-reverse !important; }
            .flex-lg-column-reverse {
                flex-direction: column-reverse !important; }
            .flex-lg-wrap {
                flex-wrap: wrap !important; }
            .flex-lg-nowrap {
                flex-wrap: nowrap !important; }
            .flex-lg-wrap-reverse {
                flex-wrap: wrap-reverse !important; }
            .flex-lg-fill {
                flex: 1 1 auto !important; }
            .flex-lg-grow-0 {
                flex-grow: 0 !important; }
            .flex-lg-grow-1 {
                flex-grow: 1 !important; }
            .flex-lg-shrink-0 {
                flex-shrink: 0 !important; }
            .flex-lg-shrink-1 {
                flex-shrink: 1 !important; }
            .justify-content-lg-start {
                justify-content: flex-start !important; }
            .justify-content-lg-end {
                justify-content: flex-end !important; }
            .justify-content-lg-center {
                justify-content: center !important; }
            .justify-content-lg-between {
                justify-content: space-between !important; }
            .justify-content-lg-around {
                justify-content: space-around !important; }
            .align-items-lg-start {
                align-items: flex-start !important; }
            .align-items-lg-end {
                align-items: flex-end !important; }
            .align-items-lg-center {
                align-items: center !important; }
            .align-items-lg-baseline {
                align-items: baseline !important; }
            .align-items-lg-stretch {
                align-items: stretch !important; }
            .align-content-lg-start {
                align-content: flex-start !important; }
            .align-content-lg-end {
                align-content: flex-end !important; }
            .align-content-lg-center {
                align-content: center !important; }
            .align-content-lg-between {
                align-content: space-between !important; }
            .align-content-lg-around {
                align-content: space-around !important; }
            .align-content-lg-stretch {
                align-content: stretch !important; }
            .align-self-lg-auto {
                align-self: auto !important; }
            .align-self-lg-start {
                align-self: flex-start !important; }
            .align-self-lg-end {
                align-self: flex-end !important; }
            .align-self-lg-center {
                align-self: center !important; }
            .align-self-lg-baseline {
                align-self: baseline !important; }
            .align-self-lg-stretch {
                align-self: stretch !important; } }

        @media (min-width: 1200px) {
            .flex-xl-row {
                flex-direction: row !important; }
            .flex-xl-column {
                flex-direction: column !important; }
            .flex-xl-row-reverse {
                flex-direction: row-reverse !important; }
            .flex-xl-column-reverse {
                flex-direction: column-reverse !important; }
            .flex-xl-wrap {
                flex-wrap: wrap !important; }
            .flex-xl-nowrap {
                flex-wrap: nowrap !important; }
            .flex-xl-wrap-reverse {
                flex-wrap: wrap-reverse !important; }
            .flex-xl-fill {
                flex: 1 1 auto !important; }
            .flex-xl-grow-0 {
                flex-grow: 0 !important; }
            .flex-xl-grow-1 {
                flex-grow: 1 !important; }
            .flex-xl-shrink-0 {
                flex-shrink: 0 !important; }
            .flex-xl-shrink-1 {
                flex-shrink: 1 !important; }
            .justify-content-xl-start {
                justify-content: flex-start !important; }
            .justify-content-xl-end {
                justify-content: flex-end !important; }
            .justify-content-xl-center {
                justify-content: center !important; }
            .justify-content-xl-between {
                justify-content: space-between !important; }
            .justify-content-xl-around {
                justify-content: space-around !important; }
            .align-items-xl-start {
                align-items: flex-start !important; }
            .align-items-xl-end {
                align-items: flex-end !important; }
            .align-items-xl-center {
                align-items: center !important; }
            .align-items-xl-baseline {
                align-items: baseline !important; }
            .align-items-xl-stretch {
                align-items: stretch !important; }
            .align-content-xl-start {
                align-content: flex-start !important; }
            .align-content-xl-end {
                align-content: flex-end !important; }
            .align-content-xl-center {
                align-content: center !important; }
            .align-content-xl-between {
                align-content: space-between !important; }
            .align-content-xl-around {
                align-content: space-around !important; }
            .align-content-xl-stretch {
                align-content: stretch !important; }
            .align-self-xl-auto {
                align-self: auto !important; }
            .align-self-xl-start {
                align-self: flex-start !important; }
            .align-self-xl-end {
                align-self: flex-end !important; }
            .align-self-xl-center {
                align-self: center !important; }
            .align-self-xl-baseline {
                align-self: baseline !important; }
            .align-self-xl-stretch {
                align-self: stretch !important; } }

        .float-left {
            float: left !important; }

        .float-right {
            float: right !important; }

        .float-none {
            float: none !important; }

        @media (min-width: 576px) {
            .float-sm-left {
                float: left !important; }
            .float-sm-right {
                float: right !important; }
            .float-sm-none {
                float: none !important; } }

        @media (min-width: 768px) {
            .float-md-left {
                float: left !important; }
            .float-md-right {
                float: right !important; }
            .float-md-none {
                float: none !important; } }

        @media (min-width: 992px) {
            .float-lg-left {
                float: left !important; }
            .float-lg-right {
                float: right !important; }
            .float-lg-none {
                float: none !important; } }

        @media (min-width: 1200px) {
            .float-xl-left {
                float: left !important; }
            .float-xl-right {
                float: right !important; }
            .float-xl-none {
                float: none !important; } }

        .user-select-all {
            user-select: all !important; }

        .user-select-auto {
            user-select: auto !important; }

        .user-select-none {
            user-select: none !important; }

        .overflow-auto {
            overflow: auto !important; }

        .overflow-hidden {
            overflow: hidden !important; }

        .position-static {
            position: static !important; }

        .position-relative {
            position: relative !important; }

        .position-absolute {
            position: absolute !important; }

        .position-fixed {
            position: fixed !important; }

        .position-sticky {
            position: sticky !important; }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030; }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030; }

        @supports (position: sticky) {
            .sticky-top {
                position: sticky;
                top: 0;
                z-index: 1020; } }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0; }

        .sr-only-focusable:active, .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            overflow: visible;
            clip: auto;
            white-space: normal; }

        .shadow-sm {
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }

        .shadow {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; }

        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }

        .shadow-none {
            box-shadow: none !important; }

        .w-25 {
            width: 25% !important; }

        .w-50 {
            width: 50% !important; }

        .w-75 {
            width: 75% !important; }

        .w-100 {
            width: 100% !important; }

        .w-auto {
            width: auto !important; }

        .h-25 {
            height: 25% !important; }

        .h-50 {
            height: 50% !important; }

        .h-75 {
            height: 75% !important; }

        .h-100 {
            height: 100% !important; }

        .h-auto {
            height: auto !important; }

        .mw-100 {
            max-width: 100% !important; }

        .mh-100 {
            max-height: 100% !important; }

        .min-vw-100 {
            min-width: 100vw !important; }

        .min-vh-100 {
            min-height: 100vh !important; }

        .vw-100 {
            width: 100vw !important; }

        .vh-100 {
            height: 100vh !important; }

        .m-0 {
            margin: 0 !important; }

        .mt-0, .demo-modal .modal-dialog,
        .my-0 {
            margin-top: 0 !important; }

        .mr-0, .rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item i,
        .mx-0 {
            margin-right: 0 !important; }

        .mb-0,
        .my-0 {
            margin-bottom: 0 !important; }

        .ml-0, .rtl .preview-list .preview-item .preview-thumbnail img i, .rtl .preview-list .preview-item .preview-thumbnail .preview-icon i, .rtl .list-wrapper .remove, .rtl .navbar .navbar-menu-wrapper .search-field,
        .mx-0 {
            margin-left: 0 !important; }

        .m-1 {
            margin: 0.25rem !important; }

        .mt-1, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel,
        .my-1 {
            margin-top: 0.25rem !important; }

        .mr-1,
        .mx-1 {
            margin-right: 0.25rem !important; }

        .mb-1,
        .my-1 {
            margin-bottom: 0.25rem !important; }

        .ml-1,
        .mx-1 {
            margin-left: 0.25rem !important; }

        .m-2 {
            margin: 0.5rem !important; }

        .mt-2, .template-demo > .btn-group, .fc .template-demo > .fc-button-group,
        .template-demo > .btn-group-vertical, .template-demo .circle-progress,
        .my-2 {
            margin-top: 0.5rem !important; }

        .mr-2, .template-demo > .btn-group, .fc .template-demo > .fc-button-group,
        .template-demo > .btn-group-vertical, .template-demo > .dropdown,
        .mx-2 {
            margin-right: 0.5rem !important; }

        .mb-2,
        .my-2 {
            margin-bottom: 0.5rem !important; }

        .ml-2, .btn-toolbar .btn-group + .btn-group, .btn-toolbar .fc .fc-button-group + .btn-group, .fc .btn-toolbar .fc-button-group + .btn-group, .btn-toolbar .fc .btn-group + .fc-button-group, .fc .btn-toolbar .btn-group + .fc-button-group, .btn-toolbar .fc .fc-button-group + .fc-button-group, .fc .btn-toolbar .fc-button-group + .fc-button-group,
        .mx-2 {
            margin-left: 0.5rem !important; }

        .m-3 {
            margin: 1rem !important; }

        .mt-3, .template-demo > .btn, .fc .template-demo > button, .ajax-upload-dragdrop .template-demo > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .template-demo > .swal2-styled, .wizard > .actions .template-demo > a, .template-demo > .btn-toolbar,
        .my-3 {
            margin-top: 1rem !important; }

        .mr-3, .template-demo > .btn, .fc .template-demo > button, .ajax-upload-dragdrop .template-demo > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .template-demo > .swal2-styled, .wizard > .actions .template-demo > a, .template-demo > .btn-toolbar,
        .mx-3 {
            margin-right: 1rem !important; }

        .mb-3, .template-demo .circle-progress-block,
        .my-3 {
            margin-bottom: 1rem !important; }

        .ml-3,
        .mx-3 {
            margin-left: 1rem !important; }

        .m-4 {
            margin: 1.5rem !important; }

        .mt-4,
        .my-4 {
            margin-top: 1.5rem !important; }

        .mr-4, .rtl .navbar .navbar-menu-wrapper .search-field,
        .mx-4 {
            margin-right: 1.5rem !important; }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important; }

        .ml-4,
        .mx-4 {
            margin-left: 1.5rem !important; }

        .m-5 {
            margin: 3rem !important; }

        .mt-5,
        .my-5 {
            margin-top: 3rem !important; }

        .mr-5,
        .mx-5 {
            margin-right: 3rem !important; }

        .mb-5,
        .my-5 {
            margin-bottom: 3rem !important; }

        .ml-5,
        .mx-5 {
            margin-left: 3rem !important; }

        .p-0 {
            padding: 0 !important; }

        .pt-0,
        .py-0 {
            padding-top: 0 !important; }

        .pr-0,
        .px-0 {
            padding-right: 0 !important; }

        .pb-0,
        .py-0 {
            padding-bottom: 0 !important; }

        .pl-0,
        .px-0 {
            padding-left: 0 !important; }

        .p-1 {
            padding: 0.25rem !important; }

        .pt-1,
        .py-1 {
            padding-top: 0.25rem !important; }

        .pr-1,
        .px-1 {
            padding-right: 0.25rem !important; }

        .pb-1,
        .py-1 {
            padding-bottom: 0.25rem !important; }

        .pl-1,
        .px-1 {
            padding-left: 0.25rem !important; }

        .p-2 {
            padding: 0.5rem !important; }

        .pt-2,
        .py-2 {
            padding-top: 0.5rem !important; }

        .pr-2,
        .px-2,
        .template-demo .circle-progress-block {
            padding-right: 0.5rem !important; }

        .pb-2,
        .py-2 {
            padding-bottom: 0.5rem !important; }

        .pl-2,
        .px-2,
        .template-demo .circle-progress-block {
            padding-left: 0.5rem !important; }

        .p-3 {
            padding: 1rem !important; }

        .pt-3,
        .py-3 {
            padding-top: 1rem !important; }

        .pr-3,
        .px-3 {
            padding-right: 1rem !important; }

        .pb-3,
        .py-3 {
            padding-bottom: 1rem !important; }

        .pl-3,
        .px-3 {
            padding-left: 1rem !important; }

        .p-4 {
            padding: 1.5rem !important; }

        .pt-4,
        .py-4 {
            padding-top: 1.5rem !important; }

        .pr-4,
        .px-4 {
            padding-right: 1.5rem !important; }

        .pb-4,
        .py-4 {
            padding-bottom: 1.5rem !important; }

        .pl-4,
        .px-4 {
            padding-left: 1.5rem !important; }

        .p-5 {
            padding: 3rem !important; }

        .pt-5,
        .py-5 {
            padding-top: 3rem !important; }

        .pr-5,
        .px-5 {
            padding-right: 3rem !important; }

        .pb-5,
        .py-5 {
            padding-bottom: 3rem !important; }

        .pl-5,
        .px-5 {
            padding-left: 3rem !important; }

        .m-n1 {
            margin: -0.25rem !important; }

        .mt-n1,
        .my-n1 {
            margin-top: -0.25rem !important; }

        .mr-n1,
        .mx-n1 {
            margin-right: -0.25rem !important; }

        .mb-n1,
        .my-n1 {
            margin-bottom: -0.25rem !important; }

        .ml-n1,
        .mx-n1 {
            margin-left: -0.25rem !important; }

        .m-n2 {
            margin: -0.5rem !important; }

        .mt-n2,
        .my-n2 {
            margin-top: -0.5rem !important; }

        .mr-n2,
        .mx-n2 {
            margin-right: -0.5rem !important; }

        .mb-n2,
        .my-n2 {
            margin-bottom: -0.5rem !important; }

        .ml-n2,
        .mx-n2 {
            margin-left: -0.5rem !important; }

        .m-n3 {
            margin: -1rem !important; }

        .mt-n3,
        .my-n3 {
            margin-top: -1rem !important; }

        .mr-n3,
        .mx-n3 {
            margin-right: -1rem !important; }

        .mb-n3,
        .my-n3 {
            margin-bottom: -1rem !important; }

        .ml-n3,
        .mx-n3 {
            margin-left: -1rem !important; }

        .m-n4 {
            margin: -1.5rem !important; }

        .mt-n4,
        .my-n4 {
            margin-top: -1.5rem !important; }

        .mr-n4,
        .mx-n4 {
            margin-right: -1.5rem !important; }

        .mb-n4,
        .my-n4 {
            margin-bottom: -1.5rem !important; }

        .ml-n4,
        .mx-n4 {
            margin-left: -1.5rem !important; }

        .m-n5 {
            margin: -3rem !important; }

        .mt-n5,
        .my-n5 {
            margin-top: -3rem !important; }

        .mr-n5,
        .mx-n5 {
            margin-right: -3rem !important; }

        .mb-n5,
        .my-n5 {
            margin-bottom: -3rem !important; }

        .ml-n5,
        .mx-n5 {
            margin-left: -3rem !important; }

        .m-auto {
            margin: auto !important; }

        .mt-auto,
        .my-auto {
            margin-top: auto !important; }

        .mr-auto, .rtl .list-wrapper .remove,
        .mx-auto {
            margin-right: auto !important; }

        .mb-auto,
        .my-auto {
            margin-bottom: auto !important; }

        .ml-auto, .list-wrapper .remove,
        .mx-auto {
            margin-left: auto !important; }

        @media (min-width: 576px) {
            .m-sm-0 {
                margin: 0 !important; }
            .mt-sm-0,
            .my-sm-0 {
                margin-top: 0 !important; }
            .mr-sm-0,
            .mx-sm-0 {
                margin-right: 0 !important; }
            .mb-sm-0,
            .my-sm-0 {
                margin-bottom: 0 !important; }
            .ml-sm-0,
            .mx-sm-0 {
                margin-left: 0 !important; }
            .m-sm-1 {
                margin: 0.25rem !important; }
            .mt-sm-1,
            .my-sm-1 {
                margin-top: 0.25rem !important; }
            .mr-sm-1,
            .mx-sm-1 {
                margin-right: 0.25rem !important; }
            .mb-sm-1,
            .my-sm-1 {
                margin-bottom: 0.25rem !important; }
            .ml-sm-1,
            .mx-sm-1 {
                margin-left: 0.25rem !important; }
            .m-sm-2 {
                margin: 0.5rem !important; }
            .mt-sm-2,
            .my-sm-2 {
                margin-top: 0.5rem !important; }
            .mr-sm-2,
            .mx-sm-2 {
                margin-right: 0.5rem !important; }
            .mb-sm-2,
            .my-sm-2 {
                margin-bottom: 0.5rem !important; }
            .ml-sm-2,
            .mx-sm-2 {
                margin-left: 0.5rem !important; }
            .m-sm-3 {
                margin: 1rem !important; }
            .mt-sm-3,
            .my-sm-3 {
                margin-top: 1rem !important; }
            .mr-sm-3,
            .mx-sm-3 {
                margin-right: 1rem !important; }
            .mb-sm-3,
            .my-sm-3 {
                margin-bottom: 1rem !important; }
            .ml-sm-3,
            .mx-sm-3 {
                margin-left: 1rem !important; }
            .m-sm-4 {
                margin: 1.5rem !important; }
            .mt-sm-4,
            .my-sm-4 {
                margin-top: 1.5rem !important; }
            .mr-sm-4,
            .mx-sm-4 {
                margin-right: 1.5rem !important; }
            .mb-sm-4,
            .my-sm-4 {
                margin-bottom: 1.5rem !important; }
            .ml-sm-4,
            .mx-sm-4 {
                margin-left: 1.5rem !important; }
            .m-sm-5 {
                margin: 3rem !important; }
            .mt-sm-5,
            .my-sm-5 {
                margin-top: 3rem !important; }
            .mr-sm-5,
            .mx-sm-5 {
                margin-right: 3rem !important; }
            .mb-sm-5,
            .my-sm-5 {
                margin-bottom: 3rem !important; }
            .ml-sm-5,
            .mx-sm-5 {
                margin-left: 3rem !important; }
            .p-sm-0 {
                padding: 0 !important; }
            .pt-sm-0,
            .py-sm-0 {
                padding-top: 0 !important; }
            .pr-sm-0,
            .px-sm-0 {
                padding-right: 0 !important; }
            .pb-sm-0,
            .py-sm-0 {
                padding-bottom: 0 !important; }
            .pl-sm-0,
            .px-sm-0 {
                padding-left: 0 !important; }
            .p-sm-1 {
                padding: 0.25rem !important; }
            .pt-sm-1,
            .py-sm-1 {
                padding-top: 0.25rem !important; }
            .pr-sm-1,
            .px-sm-1 {
                padding-right: 0.25rem !important; }
            .pb-sm-1,
            .py-sm-1 {
                padding-bottom: 0.25rem !important; }
            .pl-sm-1,
            .px-sm-1 {
                padding-left: 0.25rem !important; }
            .p-sm-2 {
                padding: 0.5rem !important; }
            .pt-sm-2,
            .py-sm-2 {
                padding-top: 0.5rem !important; }
            .pr-sm-2,
            .px-sm-2 {
                padding-right: 0.5rem !important; }
            .pb-sm-2,
            .py-sm-2 {
                padding-bottom: 0.5rem !important; }
            .pl-sm-2,
            .px-sm-2 {
                padding-left: 0.5rem !important; }
            .p-sm-3 {
                padding: 1rem !important; }
            .pt-sm-3,
            .py-sm-3 {
                padding-top: 1rem !important; }
            .pr-sm-3,
            .px-sm-3 {
                padding-right: 1rem !important; }
            .pb-sm-3,
            .py-sm-3 {
                padding-bottom: 1rem !important; }
            .pl-sm-3,
            .px-sm-3 {
                padding-left: 1rem !important; }
            .p-sm-4 {
                padding: 1.5rem !important; }
            .pt-sm-4,
            .py-sm-4 {
                padding-top: 1.5rem !important; }
            .pr-sm-4,
            .px-sm-4 {
                padding-right: 1.5rem !important; }
            .pb-sm-4,
            .py-sm-4 {
                padding-bottom: 1.5rem !important; }
            .pl-sm-4,
            .px-sm-4 {
                padding-left: 1.5rem !important; }
            .p-sm-5 {
                padding: 3rem !important; }
            .pt-sm-5,
            .py-sm-5 {
                padding-top: 3rem !important; }
            .pr-sm-5,
            .px-sm-5 {
                padding-right: 3rem !important; }
            .pb-sm-5,
            .py-sm-5 {
                padding-bottom: 3rem !important; }
            .pl-sm-5,
            .px-sm-5 {
                padding-left: 3rem !important; }
            .m-sm-n1 {
                margin: -0.25rem !important; }
            .mt-sm-n1,
            .my-sm-n1 {
                margin-top: -0.25rem !important; }
            .mr-sm-n1,
            .mx-sm-n1 {
                margin-right: -0.25rem !important; }
            .mb-sm-n1,
            .my-sm-n1 {
                margin-bottom: -0.25rem !important; }
            .ml-sm-n1,
            .mx-sm-n1 {
                margin-left: -0.25rem !important; }
            .m-sm-n2 {
                margin: -0.5rem !important; }
            .mt-sm-n2,
            .my-sm-n2 {
                margin-top: -0.5rem !important; }
            .mr-sm-n2,
            .mx-sm-n2 {
                margin-right: -0.5rem !important; }
            .mb-sm-n2,
            .my-sm-n2 {
                margin-bottom: -0.5rem !important; }
            .ml-sm-n2,
            .mx-sm-n2 {
                margin-left: -0.5rem !important; }
            .m-sm-n3 {
                margin: -1rem !important; }
            .mt-sm-n3,
            .my-sm-n3 {
                margin-top: -1rem !important; }
            .mr-sm-n3,
            .mx-sm-n3 {
                margin-right: -1rem !important; }
            .mb-sm-n3,
            .my-sm-n3 {
                margin-bottom: -1rem !important; }
            .ml-sm-n3,
            .mx-sm-n3 {
                margin-left: -1rem !important; }
            .m-sm-n4 {
                margin: -1.5rem !important; }
            .mt-sm-n4,
            .my-sm-n4 {
                margin-top: -1.5rem !important; }
            .mr-sm-n4,
            .mx-sm-n4 {
                margin-right: -1.5rem !important; }
            .mb-sm-n4,
            .my-sm-n4 {
                margin-bottom: -1.5rem !important; }
            .ml-sm-n4,
            .mx-sm-n4 {
                margin-left: -1.5rem !important; }
            .m-sm-n5 {
                margin: -3rem !important; }
            .mt-sm-n5,
            .my-sm-n5 {
                margin-top: -3rem !important; }
            .mr-sm-n5,
            .mx-sm-n5 {
                margin-right: -3rem !important; }
            .mb-sm-n5,
            .my-sm-n5 {
                margin-bottom: -3rem !important; }
            .ml-sm-n5,
            .mx-sm-n5 {
                margin-left: -3rem !important; }
            .m-sm-auto {
                margin: auto !important; }
            .mt-sm-auto,
            .my-sm-auto {
                margin-top: auto !important; }
            .mr-sm-auto,
            .mx-sm-auto {
                margin-right: auto !important; }
            .mb-sm-auto,
            .my-sm-auto {
                margin-bottom: auto !important; }
            .ml-sm-auto,
            .mx-sm-auto {
                margin-left: auto !important; } }

        @media (min-width: 768px) {
            .m-md-0 {
                margin: 0 !important; }
            .mt-md-0,
            .my-md-0 {
                margin-top: 0 !important; }
            .mr-md-0,
            .mx-md-0 {
                margin-right: 0 !important; }
            .mb-md-0,
            .my-md-0 {
                margin-bottom: 0 !important; }
            .ml-md-0,
            .mx-md-0 {
                margin-left: 0 !important; }
            .m-md-1 {
                margin: 0.25rem !important; }
            .mt-md-1,
            .my-md-1 {
                margin-top: 0.25rem !important; }
            .mr-md-1,
            .mx-md-1 {
                margin-right: 0.25rem !important; }
            .mb-md-1,
            .my-md-1 {
                margin-bottom: 0.25rem !important; }
            .ml-md-1,
            .mx-md-1 {
                margin-left: 0.25rem !important; }
            .m-md-2 {
                margin: 0.5rem !important; }
            .mt-md-2,
            .my-md-2 {
                margin-top: 0.5rem !important; }
            .mr-md-2,
            .mx-md-2 {
                margin-right: 0.5rem !important; }
            .mb-md-2,
            .my-md-2 {
                margin-bottom: 0.5rem !important; }
            .ml-md-2,
            .mx-md-2 {
                margin-left: 0.5rem !important; }
            .m-md-3 {
                margin: 1rem !important; }
            .mt-md-3,
            .my-md-3 {
                margin-top: 1rem !important; }
            .mr-md-3,
            .mx-md-3 {
                margin-right: 1rem !important; }
            .mb-md-3,
            .my-md-3 {
                margin-bottom: 1rem !important; }
            .ml-md-3,
            .mx-md-3 {
                margin-left: 1rem !important; }
            .m-md-4 {
                margin: 1.5rem !important; }
            .mt-md-4,
            .my-md-4 {
                margin-top: 1.5rem !important; }
            .mr-md-4,
            .mx-md-4 {
                margin-right: 1.5rem !important; }
            .mb-md-4,
            .my-md-4 {
                margin-bottom: 1.5rem !important; }
            .ml-md-4,
            .mx-md-4 {
                margin-left: 1.5rem !important; }
            .m-md-5 {
                margin: 3rem !important; }
            .mt-md-5,
            .my-md-5 {
                margin-top: 3rem !important; }
            .mr-md-5,
            .mx-md-5 {
                margin-right: 3rem !important; }
            .mb-md-5,
            .my-md-5 {
                margin-bottom: 3rem !important; }
            .ml-md-5,
            .mx-md-5 {
                margin-left: 3rem !important; }
            .p-md-0 {
                padding: 0 !important; }
            .pt-md-0,
            .py-md-0 {
                padding-top: 0 !important; }
            .pr-md-0,
            .px-md-0 {
                padding-right: 0 !important; }
            .pb-md-0,
            .py-md-0 {
                padding-bottom: 0 !important; }
            .pl-md-0,
            .px-md-0 {
                padding-left: 0 !important; }
            .p-md-1 {
                padding: 0.25rem !important; }
            .pt-md-1,
            .py-md-1 {
                padding-top: 0.25rem !important; }
            .pr-md-1,
            .px-md-1 {
                padding-right: 0.25rem !important; }
            .pb-md-1,
            .py-md-1 {
                padding-bottom: 0.25rem !important; }
            .pl-md-1,
            .px-md-1 {
                padding-left: 0.25rem !important; }
            .p-md-2 {
                padding: 0.5rem !important; }
            .pt-md-2,
            .py-md-2 {
                padding-top: 0.5rem !important; }
            .pr-md-2,
            .px-md-2 {
                padding-right: 0.5rem !important; }
            .pb-md-2,
            .py-md-2 {
                padding-bottom: 0.5rem !important; }
            .pl-md-2,
            .px-md-2 {
                padding-left: 0.5rem !important; }
            .p-md-3 {
                padding: 1rem !important; }
            .pt-md-3,
            .py-md-3 {
                padding-top: 1rem !important; }
            .pr-md-3,
            .px-md-3 {
                padding-right: 1rem !important; }
            .pb-md-3,
            .py-md-3 {
                padding-bottom: 1rem !important; }
            .pl-md-3,
            .px-md-3 {
                padding-left: 1rem !important; }
            .p-md-4 {
                padding: 1.5rem !important; }
            .pt-md-4,
            .py-md-4 {
                padding-top: 1.5rem !important; }
            .pr-md-4,
            .px-md-4 {
                padding-right: 1.5rem !important; }
            .pb-md-4,
            .py-md-4 {
                padding-bottom: 1.5rem !important; }
            .pl-md-4,
            .px-md-4 {
                padding-left: 1.5rem !important; }
            .p-md-5 {
                padding: 3rem !important; }
            .pt-md-5,
            .py-md-5 {
                padding-top: 3rem !important; }
            .pr-md-5,
            .px-md-5 {
                padding-right: 3rem !important; }
            .pb-md-5,
            .py-md-5 {
                padding-bottom: 3rem !important; }
            .pl-md-5,
            .px-md-5 {
                padding-left: 3rem !important; }
            .m-md-n1 {
                margin: -0.25rem !important; }
            .mt-md-n1,
            .my-md-n1 {
                margin-top: -0.25rem !important; }
            .mr-md-n1,
            .mx-md-n1 {
                margin-right: -0.25rem !important; }
            .mb-md-n1,
            .my-md-n1 {
                margin-bottom: -0.25rem !important; }
            .ml-md-n1,
            .mx-md-n1 {
                margin-left: -0.25rem !important; }
            .m-md-n2 {
                margin: -0.5rem !important; }
            .mt-md-n2,
            .my-md-n2 {
                margin-top: -0.5rem !important; }
            .mr-md-n2,
            .mx-md-n2 {
                margin-right: -0.5rem !important; }
            .mb-md-n2,
            .my-md-n2 {
                margin-bottom: -0.5rem !important; }
            .ml-md-n2,
            .mx-md-n2 {
                margin-left: -0.5rem !important; }
            .m-md-n3 {
                margin: -1rem !important; }
            .mt-md-n3,
            .my-md-n3 {
                margin-top: -1rem !important; }
            .mr-md-n3,
            .mx-md-n3 {
                margin-right: -1rem !important; }
            .mb-md-n3,
            .my-md-n3 {
                margin-bottom: -1rem !important; }
            .ml-md-n3,
            .mx-md-n3 {
                margin-left: -1rem !important; }
            .m-md-n4 {
                margin: -1.5rem !important; }
            .mt-md-n4,
            .my-md-n4 {
                margin-top: -1.5rem !important; }
            .mr-md-n4,
            .mx-md-n4 {
                margin-right: -1.5rem !important; }
            .mb-md-n4,
            .my-md-n4 {
                margin-bottom: -1.5rem !important; }
            .ml-md-n4,
            .mx-md-n4 {
                margin-left: -1.5rem !important; }
            .m-md-n5 {
                margin: -3rem !important; }
            .mt-md-n5,
            .my-md-n5 {
                margin-top: -3rem !important; }
            .mr-md-n5,
            .mx-md-n5 {
                margin-right: -3rem !important; }
            .mb-md-n5,
            .my-md-n5 {
                margin-bottom: -3rem !important; }
            .ml-md-n5,
            .mx-md-n5 {
                margin-left: -3rem !important; }
            .m-md-auto {
                margin: auto !important; }
            .mt-md-auto,
            .my-md-auto {
                margin-top: auto !important; }
            .mr-md-auto,
            .mx-md-auto {
                margin-right: auto !important; }
            .mb-md-auto,
            .my-md-auto {
                margin-bottom: auto !important; }
            .ml-md-auto,
            .mx-md-auto {
                margin-left: auto !important; } }

        @media (min-width: 992px) {
            .m-lg-0 {
                margin: 0 !important; }
            .mt-lg-0,
            .my-lg-0 {
                margin-top: 0 !important; }
            .mr-lg-0,
            .mx-lg-0 {
                margin-right: 0 !important; }
            .mb-lg-0,
            .my-lg-0 {
                margin-bottom: 0 !important; }
            .ml-lg-0,
            .mx-lg-0 {
                margin-left: 0 !important; }
            .m-lg-1 {
                margin: 0.25rem !important; }
            .mt-lg-1,
            .my-lg-1 {
                margin-top: 0.25rem !important; }
            .mr-lg-1,
            .mx-lg-1 {
                margin-right: 0.25rem !important; }
            .mb-lg-1,
            .my-lg-1 {
                margin-bottom: 0.25rem !important; }
            .ml-lg-1,
            .mx-lg-1 {
                margin-left: 0.25rem !important; }
            .m-lg-2 {
                margin: 0.5rem !important; }
            .mt-lg-2,
            .my-lg-2 {
                margin-top: 0.5rem !important; }
            .mr-lg-2,
            .mx-lg-2 {
                margin-right: 0.5rem !important; }
            .mb-lg-2,
            .my-lg-2 {
                margin-bottom: 0.5rem !important; }
            .ml-lg-2,
            .mx-lg-2 {
                margin-left: 0.5rem !important; }
            .m-lg-3 {
                margin: 1rem !important; }
            .mt-lg-3,
            .my-lg-3 {
                margin-top: 1rem !important; }
            .mr-lg-3,
            .mx-lg-3 {
                margin-right: 1rem !important; }
            .mb-lg-3,
            .my-lg-3 {
                margin-bottom: 1rem !important; }
            .ml-lg-3,
            .mx-lg-3 {
                margin-left: 1rem !important; }
            .m-lg-4 {
                margin: 1.5rem !important; }
            .mt-lg-4,
            .my-lg-4 {
                margin-top: 1.5rem !important; }
            .mr-lg-4,
            .mx-lg-4 {
                margin-right: 1.5rem !important; }
            .mb-lg-4,
            .my-lg-4 {
                margin-bottom: 1.5rem !important; }
            .ml-lg-4,
            .mx-lg-4 {
                margin-left: 1.5rem !important; }
            .m-lg-5 {
                margin: 3rem !important; }
            .mt-lg-5,
            .my-lg-5 {
                margin-top: 3rem !important; }
            .mr-lg-5,
            .mx-lg-5 {
                margin-right: 3rem !important; }
            .mb-lg-5,
            .my-lg-5 {
                margin-bottom: 3rem !important; }
            .ml-lg-5,
            .mx-lg-5 {
                margin-left: 3rem !important; }
            .p-lg-0 {
                padding: 0 !important; }
            .pt-lg-0,
            .py-lg-0 {
                padding-top: 0 !important; }
            .pr-lg-0,
            .px-lg-0 {
                padding-right: 0 !important; }
            .pb-lg-0,
            .py-lg-0 {
                padding-bottom: 0 !important; }
            .pl-lg-0,
            .px-lg-0 {
                padding-left: 0 !important; }
            .p-lg-1 {
                padding: 0.25rem !important; }
            .pt-lg-1,
            .py-lg-1 {
                padding-top: 0.25rem !important; }
            .pr-lg-1,
            .px-lg-1 {
                padding-right: 0.25rem !important; }
            .pb-lg-1,
            .py-lg-1 {
                padding-bottom: 0.25rem !important; }
            .pl-lg-1,
            .px-lg-1 {
                padding-left: 0.25rem !important; }
            .p-lg-2 {
                padding: 0.5rem !important; }
            .pt-lg-2,
            .py-lg-2 {
                padding-top: 0.5rem !important; }
            .pr-lg-2,
            .px-lg-2 {
                padding-right: 0.5rem !important; }
            .pb-lg-2,
            .py-lg-2 {
                padding-bottom: 0.5rem !important; }
            .pl-lg-2,
            .px-lg-2 {
                padding-left: 0.5rem !important; }
            .p-lg-3 {
                padding: 1rem !important; }
            .pt-lg-3,
            .py-lg-3 {
                padding-top: 1rem !important; }
            .pr-lg-3,
            .px-lg-3 {
                padding-right: 1rem !important; }
            .pb-lg-3,
            .py-lg-3 {
                padding-bottom: 1rem !important; }
            .pl-lg-3,
            .px-lg-3 {
                padding-left: 1rem !important; }
            .p-lg-4 {
                padding: 1.5rem !important; }
            .pt-lg-4,
            .py-lg-4 {
                padding-top: 1.5rem !important; }
            .pr-lg-4,
            .px-lg-4 {
                padding-right: 1.5rem !important; }
            .pb-lg-4,
            .py-lg-4 {
                padding-bottom: 1.5rem !important; }
            .pl-lg-4,
            .px-lg-4 {
                padding-left: 1.5rem !important; }
            .p-lg-5 {
                padding: 3rem !important; }
            .pt-lg-5,
            .py-lg-5 {
                padding-top: 3rem !important; }
            .pr-lg-5,
            .px-lg-5 {
                padding-right: 3rem !important; }
            .pb-lg-5,
            .py-lg-5 {
                padding-bottom: 3rem !important; }
            .pl-lg-5,
            .px-lg-5 {
                padding-left: 3rem !important; }
            .m-lg-n1 {
                margin: -0.25rem !important; }
            .mt-lg-n1,
            .my-lg-n1 {
                margin-top: -0.25rem !important; }
            .mr-lg-n1,
            .mx-lg-n1 {
                margin-right: -0.25rem !important; }
            .mb-lg-n1,
            .my-lg-n1 {
                margin-bottom: -0.25rem !important; }
            .ml-lg-n1,
            .mx-lg-n1 {
                margin-left: -0.25rem !important; }
            .m-lg-n2 {
                margin: -0.5rem !important; }
            .mt-lg-n2,
            .my-lg-n2 {
                margin-top: -0.5rem !important; }
            .mr-lg-n2,
            .mx-lg-n2 {
                margin-right: -0.5rem !important; }
            .mb-lg-n2,
            .my-lg-n2 {
                margin-bottom: -0.5rem !important; }
            .ml-lg-n2,
            .mx-lg-n2 {
                margin-left: -0.5rem !important; }
            .m-lg-n3 {
                margin: -1rem !important; }
            .mt-lg-n3,
            .my-lg-n3 {
                margin-top: -1rem !important; }
            .mr-lg-n3,
            .mx-lg-n3 {
                margin-right: -1rem !important; }
            .mb-lg-n3,
            .my-lg-n3 {
                margin-bottom: -1rem !important; }
            .ml-lg-n3,
            .mx-lg-n3 {
                margin-left: -1rem !important; }
            .m-lg-n4 {
                margin: -1.5rem !important; }
            .mt-lg-n4,
            .my-lg-n4 {
                margin-top: -1.5rem !important; }
            .mr-lg-n4,
            .mx-lg-n4 {
                margin-right: -1.5rem !important; }
            .mb-lg-n4,
            .my-lg-n4 {
                margin-bottom: -1.5rem !important; }
            .ml-lg-n4,
            .mx-lg-n4 {
                margin-left: -1.5rem !important; }
            .m-lg-n5 {
                margin: -3rem !important; }
            .mt-lg-n5,
            .my-lg-n5 {
                margin-top: -3rem !important; }
            .mr-lg-n5,
            .mx-lg-n5 {
                margin-right: -3rem !important; }
            .mb-lg-n5,
            .my-lg-n5 {
                margin-bottom: -3rem !important; }
            .ml-lg-n5,
            .mx-lg-n5 {
                margin-left: -3rem !important; }
            .m-lg-auto {
                margin: auto !important; }
            .mt-lg-auto,
            .my-lg-auto {
                margin-top: auto !important; }
            .mr-lg-auto,
            .mx-lg-auto {
                margin-right: auto !important; }
            .mb-lg-auto,
            .my-lg-auto {
                margin-bottom: auto !important; }
            .ml-lg-auto,
            .mx-lg-auto {
                margin-left: auto !important; } }

        @media (min-width: 1200px) {
            .m-xl-0 {
                margin: 0 !important; }
            .mt-xl-0,
            .my-xl-0 {
                margin-top: 0 !important; }
            .mr-xl-0,
            .mx-xl-0 {
                margin-right: 0 !important; }
            .mb-xl-0,
            .my-xl-0 {
                margin-bottom: 0 !important; }
            .ml-xl-0,
            .mx-xl-0 {
                margin-left: 0 !important; }
            .m-xl-1 {
                margin: 0.25rem !important; }
            .mt-xl-1,
            .my-xl-1 {
                margin-top: 0.25rem !important; }
            .mr-xl-1,
            .mx-xl-1 {
                margin-right: 0.25rem !important; }
            .mb-xl-1,
            .my-xl-1 {
                margin-bottom: 0.25rem !important; }
            .ml-xl-1,
            .mx-xl-1 {
                margin-left: 0.25rem !important; }
            .m-xl-2 {
                margin: 0.5rem !important; }
            .mt-xl-2,
            .my-xl-2 {
                margin-top: 0.5rem !important; }
            .mr-xl-2,
            .mx-xl-2 {
                margin-right: 0.5rem !important; }
            .mb-xl-2,
            .my-xl-2 {
                margin-bottom: 0.5rem !important; }
            .ml-xl-2,
            .mx-xl-2 {
                margin-left: 0.5rem !important; }
            .m-xl-3 {
                margin: 1rem !important; }
            .mt-xl-3,
            .my-xl-3 {
                margin-top: 1rem !important; }
            .mr-xl-3,
            .mx-xl-3 {
                margin-right: 1rem !important; }
            .mb-xl-3,
            .my-xl-3 {
                margin-bottom: 1rem !important; }
            .ml-xl-3,
            .mx-xl-3 {
                margin-left: 1rem !important; }
            .m-xl-4 {
                margin: 1.5rem !important; }
            .mt-xl-4,
            .my-xl-4 {
                margin-top: 1.5rem !important; }
            .mr-xl-4,
            .mx-xl-4 {
                margin-right: 1.5rem !important; }
            .mb-xl-4,
            .my-xl-4 {
                margin-bottom: 1.5rem !important; }
            .ml-xl-4,
            .mx-xl-4 {
                margin-left: 1.5rem !important; }
            .m-xl-5 {
                margin: 3rem !important; }
            .mt-xl-5,
            .my-xl-5 {
                margin-top: 3rem !important; }
            .mr-xl-5,
            .mx-xl-5 {
                margin-right: 3rem !important; }
            .mb-xl-5,
            .my-xl-5 {
                margin-bottom: 3rem !important; }
            .ml-xl-5,
            .mx-xl-5 {
                margin-left: 3rem !important; }
            .p-xl-0 {
                padding: 0 !important; }
            .pt-xl-0,
            .py-xl-0 {
                padding-top: 0 !important; }
            .pr-xl-0,
            .px-xl-0 {
                padding-right: 0 !important; }
            .pb-xl-0,
            .py-xl-0 {
                padding-bottom: 0 !important; }
            .pl-xl-0,
            .px-xl-0 {
                padding-left: 0 !important; }
            .p-xl-1 {
                padding: 0.25rem !important; }
            .pt-xl-1,
            .py-xl-1 {
                padding-top: 0.25rem !important; }
            .pr-xl-1,
            .px-xl-1 {
                padding-right: 0.25rem !important; }
            .pb-xl-1,
            .py-xl-1 {
                padding-bottom: 0.25rem !important; }
            .pl-xl-1,
            .px-xl-1 {
                padding-left: 0.25rem !important; }
            .p-xl-2 {
                padding: 0.5rem !important; }
            .pt-xl-2,
            .py-xl-2 {
                padding-top: 0.5rem !important; }
            .pr-xl-2,
            .px-xl-2 {
                padding-right: 0.5rem !important; }
            .pb-xl-2,
            .py-xl-2 {
                padding-bottom: 0.5rem !important; }
            .pl-xl-2,
            .px-xl-2 {
                padding-left: 0.5rem !important; }
            .p-xl-3 {
                padding: 1rem !important; }
            .pt-xl-3,
            .py-xl-3 {
                padding-top: 1rem !important; }
            .pr-xl-3,
            .px-xl-3 {
                padding-right: 1rem !important; }
            .pb-xl-3,
            .py-xl-3 {
                padding-bottom: 1rem !important; }
            .pl-xl-3,
            .px-xl-3 {
                padding-left: 1rem !important; }
            .p-xl-4 {
                padding: 1.5rem !important; }
            .pt-xl-4,
            .py-xl-4 {
                padding-top: 1.5rem !important; }
            .pr-xl-4,
            .px-xl-4 {
                padding-right: 1.5rem !important; }
            .pb-xl-4,
            .py-xl-4 {
                padding-bottom: 1.5rem !important; }
            .pl-xl-4,
            .px-xl-4 {
                padding-left: 1.5rem !important; }
            .p-xl-5 {
                padding: 3rem !important; }
            .pt-xl-5,
            .py-xl-5 {
                padding-top: 3rem !important; }
            .pr-xl-5,
            .px-xl-5 {
                padding-right: 3rem !important; }
            .pb-xl-5,
            .py-xl-5 {
                padding-bottom: 3rem !important; }
            .pl-xl-5,
            .px-xl-5 {
                padding-left: 3rem !important; }
            .m-xl-n1 {
                margin: -0.25rem !important; }
            .mt-xl-n1,
            .my-xl-n1 {
                margin-top: -0.25rem !important; }
            .mr-xl-n1,
            .mx-xl-n1 {
                margin-right: -0.25rem !important; }
            .mb-xl-n1,
            .my-xl-n1 {
                margin-bottom: -0.25rem !important; }
            .ml-xl-n1,
            .mx-xl-n1 {
                margin-left: -0.25rem !important; }
            .m-xl-n2 {
                margin: -0.5rem !important; }
            .mt-xl-n2,
            .my-xl-n2 {
                margin-top: -0.5rem !important; }
            .mr-xl-n2,
            .mx-xl-n2 {
                margin-right: -0.5rem !important; }
            .mb-xl-n2,
            .my-xl-n2 {
                margin-bottom: -0.5rem !important; }
            .ml-xl-n2,
            .mx-xl-n2 {
                margin-left: -0.5rem !important; }
            .m-xl-n3 {
                margin: -1rem !important; }
            .mt-xl-n3,
            .my-xl-n3 {
                margin-top: -1rem !important; }
            .mr-xl-n3,
            .mx-xl-n3 {
                margin-right: -1rem !important; }
            .mb-xl-n3,
            .my-xl-n3 {
                margin-bottom: -1rem !important; }
            .ml-xl-n3,
            .mx-xl-n3 {
                margin-left: -1rem !important; }
            .m-xl-n4 {
                margin: -1.5rem !important; }
            .mt-xl-n4,
            .my-xl-n4 {
                margin-top: -1.5rem !important; }
            .mr-xl-n4,
            .mx-xl-n4 {
                margin-right: -1.5rem !important; }
            .mb-xl-n4,
            .my-xl-n4 {
                margin-bottom: -1.5rem !important; }
            .ml-xl-n4,
            .mx-xl-n4 {
                margin-left: -1.5rem !important; }
            .m-xl-n5 {
                margin: -3rem !important; }
            .mt-xl-n5,
            .my-xl-n5 {
                margin-top: -3rem !important; }
            .mr-xl-n5,
            .mx-xl-n5 {
                margin-right: -3rem !important; }
            .mb-xl-n5,
            .my-xl-n5 {
                margin-bottom: -3rem !important; }
            .ml-xl-n5,
            .mx-xl-n5 {
                margin-left: -3rem !important; }
            .m-xl-auto {
                margin: auto !important; }
            .mt-xl-auto,
            .my-xl-auto {
                margin-top: auto !important; }
            .mr-xl-auto,
            .mx-xl-auto {
                margin-right: auto !important; }
            .mb-xl-auto,
            .my-xl-auto {
                margin-bottom: auto !important; }
            .ml-xl-auto,
            .mx-xl-auto {
                margin-left: auto !important; } }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            pointer-events: auto;
            content: "";
            background-color: rgba(0, 0, 0, 0); }

        .text-monospace {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important; }

        .text-justify {
            text-align: justify !important; }

        .text-wrap {
            white-space: normal !important; }

        .text-nowrap {
            white-space: nowrap !important; }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap; }

        .text-left {
            text-align: left !important; }

        .text-right {
            text-align: right !important; }

        .text-center {
            text-align: center !important; }

        @media (min-width: 576px) {
            .text-sm-left {
                text-align: left !important; }
            .text-sm-right {
                text-align: right !important; }
            .text-sm-center {
                text-align: center !important; } }

        @media (min-width: 768px) {
            .text-md-left {
                text-align: left !important; }
            .text-md-right {
                text-align: right !important; }
            .text-md-center {
                text-align: center !important; } }

        @media (min-width: 992px) {
            .text-lg-left {
                text-align: left !important; }
            .text-lg-right {
                text-align: right !important; }
            .text-lg-center {
                text-align: center !important; } }

        @media (min-width: 1200px) {
            .text-xl-left {
                text-align: left !important; }
            .text-xl-right {
                text-align: right !important; }
            .text-xl-center {
                text-align: center !important; } }

        .text-lowercase {
            text-transform: lowercase !important; }

        .text-uppercase {
            text-transform: uppercase !important; }

        .text-capitalize {
            text-transform: capitalize !important; }

        .font-weight-light {
            font-weight: 300 !important; }

        .font-weight-lighter {
            font-weight: lighter !important; }

        .font-weight-normal {
            font-weight: 400 !important; }

        .font-weight-bold {
            font-weight: 700 !important; }

        .font-weight-bolder {
            font-weight: bolder !important; }

        .font-italic {
            font-style: italic !important; }

        .text-white {
            color: #ffffff !important; }

        .text-primary, .list-wrapper .completed .remove {
            color: #0090e7 !important; }

        a.text-primary:hover, .list-wrapper .completed a.remove:hover, a.text-primary:focus, .list-wrapper .completed a.remove:focus {
            color: #00609b !important; }

        .text-secondary, .list-wrapper .remove {
            color: #e4eaec !important; }

        a.text-secondary:hover, .list-wrapper a.remove:hover, a.text-secondary:focus, .list-wrapper a.remove:focus {
            color: #b7c7cc !important; }

        .text-success {
            color: #00d25b !important; }

        a.text-success:hover, a.text-success:focus {
            color: #00863a !important; }

        .text-info {
            color: #8f5fe8 !important; }

        a.text-info:hover, a.text-info:focus {
            color: #611fdb !important; }

        .text-warning {
            color: #ffab00 !important; }

        a.text-warning:hover, a.text-warning:focus {
            color: #b37800 !important; }

        .text-danger {
            color: #fc424a !important; }

        a.text-danger:hover, a.text-danger:focus {
            color: #ee040e !important; }

        .text-light {
            color: #ffffff !important; }

        a.text-light:hover, a.text-light:focus {
            color: #d9d9d9 !important; }

        .text-dark {
            color: #0d0d0d !important; }

        a.text-dark:hover, a.text-dark:focus {
            color: black !important; }

        .text-body {
            color: #ffffff !important; }

        .text-muted, .preview-list .preview-item .preview-item-content p .content-category {
            color: #6c7293 !important; }

        .text-black-50 {
            color: rgba(0, 0, 0, 0.5) !important; }

        .text-white-50 {
            color: rgba(255, 255, 255, 0.5) !important; }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0; }

        .text-decoration-none {
            text-decoration: none !important; }

        .text-break {
            word-break: break-word !important;
            word-wrap: break-word !important; }

        .text-reset {
            color: inherit !important; }

        .visible {
            visibility: visible !important; }

        .invisible {
            visibility: hidden !important; }

        @media print {
            *,
            *::before,
            *::after {
                text-shadow: none !important;
                box-shadow: none !important; }
            a:not(.btn) {
                text-decoration: underline; }
            abbr[title]::after {
                content: " (" attr(title) ")"; }
            pre {
                white-space: pre-wrap !important; }
            pre,
            blockquote {
                border: 1px solid #adb5bd;
                page-break-inside: avoid; }
            thead {
                display: table-header-group; }
            tr,
            img {
                page-break-inside: avoid; }
            p,
            h2,
            h3 {
                orphans: 3;
                widows: 3; }
            h2,
            h3 {
                page-break-after: avoid; }
            @page {
                size: a3; }
            body {
                min-width: 992px !important; }
            .container {
                min-width: 992px !important; }
            .navbar {
                display: none; }
            .badge {
                border: 1px solid #000; }
            .table, .jsgrid .jsgrid-table {
                border-collapse: collapse !important; }

            .table td,
            .jsgrid .jsgrid-table td, .table th, .jsgrid .jsgrid-table th {
                background-color: #ffffff !important; }
            .table-bordered th,
            .table-bordered td {
                border: 1px solid #dee2e6 !important; }
            .table-dark {
                color: inherit; }
            .table-dark th,
            .table-dark td,
            .table-dark thead th,
            .table-dark tbody + tbody {
                border-color: #2c2e33; }
            .table .thead-dark th, .jsgrid .jsgrid-table .thead-dark th {
                color: inherit;
                border-color: #2c2e33; } }

        /*-------------------------------------------------------------------*/
        /* === Template mixins === */
        /* Miscellaneous Mixins */
        .list-wrapper ul li .form-check, .list-wrapper ul li .form-check .form-check-label {
            text-overflow: ellipsis;
            overflow: hidden;
            max-width: 100%;
            white-space: nowrap; }

        /* Animation Mixins */
        @keyframes dropdownAnimation {
            from {
                opacity: 0;
                transform: translate3d(0, -30px, 0); }
            to {
                opacity: 1;
                transform: none;
                transform: translate3d(0, 0px, 0); } }

        .dropdownAnimation, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu {
            animation-name: dropdownAnimation;
            -webkit-animation-duration: 0.25s;
            -moz-animation-duration: 0.25s;
            -ms-animation-duration: 0.25s;
            -o-animation-duration: 0.25s;
            animation-duration: 0.25s;
            -webkit-animation-fill-mode: both;
            -moz-animation-fill-mode: both;
            -ms-animation-fill-mode: both;
            -o-animation-fill-mode: both;
            animation-fill-mode: both; }

        @keyframes fadeOut {
            from {
                opacity: 1; }
            to {
                opacity: 0; } }

        .fadeOut {
            animation-name: fadeOut; }

        .infinite-spin {
            animation-name: spin;
            animation-duration: 3s;
            animation-iteration-count: infinite;
            animation-timing-function: linear; }

        @keyframes spin {
            from {
                transform: rotate(0deg); }
            to {
                transform: rotate(360deg); } }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 100%, 0); }
            to {
                opacity: 1;
                transform: none; } }

        .fadeInUp {
            animation-name: fadeInUp; }

        /*-------------------------------------------------------------------*/
        /* === Core Styles === */
        /* Reset Styles */
        body {
            padding: 0;
            margin: 0;
            overflow-x: hidden; }

        .form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
        .tt-query,
        .tt-hint, .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
        .tt-query:focus,
        .tt-hint:focus {
            -webkit-box-shadow: none;
            -moz-box-shadow: none; }

        .form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
        .tt-query,
        .tt-hint {
            box-shadow: none; }

        .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
        .tt-query:focus,
        .tt-hint:focus {
            outline: 0;
            box-shadow: none;
            background: #191c20;
            border: none; }

        a,
        div,
        h1,
        h2,
        h3,
        h4,
        h5,
        p,
        span {
            text-shadow: none; }

        [type=button]:focus,
        a:active,
        a:focus,
        a:visited,
        button::-moz-focus-inner,
        input[type=reset]::-moz-focus-inner,
        input[type=button]::-moz-focus-inner,
        input[type=submit]::-moz-focus-inner,
        input[type=file] > input[type=button]::-moz-focus-inner,
        select::-moz-focus-inner {
            outline: 0; }

        input, .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
        .tt-query:focus,
        .tt-hint:focus,
        input:focus,
        select:focus,
        textarea:focus,
        button:focus {
            outline: none;
            outline-width: 0;
            outline-color: transparent;
            box-shadow: none;
            outline-style: none; }

        textarea {
            resize: none;
            overflow-x: hidden; }

        .btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a,
        .btn-group.open .dropdown-toggle,
        .fc .open.fc-button-group .dropdown-toggle,
        .btn:active,
        .fc button:active,
        .ajax-upload-dragdrop .ajax-file-upload:active,
        .swal2-modal .swal2-buttonswrapper .swal2-styled:active,
        .wizard > .actions a:active, .btn:focus, .fc button:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .wizard > .actions a:focus, .btn:hover, .fc button:hover, .ajax-upload-dragdrop .ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper .swal2-styled:hover, .wizard > .actions a:hover,
        .btn:visited,
        .fc button:visited,
        .ajax-upload-dragdrop .ajax-file-upload:visited,
        .swal2-modal .swal2-buttonswrapper .swal2-styled:visited,
        .wizard > .actions a:visited,
        a,
        a:active,
        a:checked,
        a:focus,
        a:hover,
        a:visited,
        body,
        button,
        button:active,
        button:hover,
        button:visited,
        div,
        input,
        input:active,
        input:focus,
        input:hover,
        input:visited,
        select,
        select:active,
        select:focus,
        select:visited,
        textarea,
        textarea:active,
        textarea:focus,
        textarea:hover,
        textarea:visited {
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none; }

        .btn.active.focus, .fc button.active.focus, .ajax-upload-dragdrop .active.focus.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .active.focus.swal2-styled, .wizard > .actions a.active.focus,
        .btn.active:focus,
        .fc button.active:focus,
        .ajax-upload-dragdrop .active.ajax-file-upload:focus,
        .swal2-modal .swal2-buttonswrapper .active.swal2-styled:focus,
        .wizard > .actions a.active:focus, .btn.focus, .fc button.focus, .ajax-upload-dragdrop .focus.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .focus.swal2-styled, .wizard > .actions a.focus,
        .btn:active.focus,
        .fc button:active.focus,
        .ajax-upload-dragdrop .ajax-file-upload:active.focus,
        .swal2-modal .swal2-buttonswrapper .swal2-styled:active.focus,
        .wizard > .actions a:active.focus,
        .btn:active:focus,
        .fc button:active:focus,
        .ajax-upload-dragdrop .ajax-file-upload:active:focus,
        .swal2-modal .swal2-buttonswrapper .swal2-styled:active:focus,
        .wizard > .actions a:active:focus, .btn:focus, .fc button:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .wizard > .actions a:focus,
        button,
        button:active,
        button:checked,
        button:focus,
        button:hover,
        button:visited {
            outline: 0;
            outline-offset: 0; }

        .bootstrap-select .dropdown-toggle:focus {
            outline: 0;
            outline-offset: 0; }

        .dropdown-menu > li > a:active,
        .dropdown-menu > li > a:focus,
        .dropdown-menu > li > a:hover,
        .dropdown-menu > li > a:visited {
            outline: 0; }

        a:focus,
        input:focus {
            border-color: transparent;
            outline: none; }

        /* Fonts */
        @font-face {
            font-family: 'Rubik';
            font-weight: 300;
            src: url("../fonts/Rubik/Rubik-Light.ttf");
            /* IE9 Compat Modes */ }

        @font-face {
            font-family: 'Rubik';
            font-weight: 400;
            src: url("../fonts/Rubik/Rubik-Regular.ttf");
            /* IE9 Compat Modes */ }

        @font-face {
            font-family: 'Rubik';
            font-weight: 500;
            src: url("../fonts/Rubik/Rubik-Medium.ttf");
            /* IE9 Compat Modes */ }

        @font-face {
            font-family: 'Rubik';
            font-weight: 700;
            src: url("../fonts/Rubik/Rubik-Bold.ttf");
            /* IE9 Compat Modes */ }

        /* Backgrounds  */
        .bg-gradient-primary {
            background: #0090e7; }

        .bg-gradient-secondary {
            background: #e4eaec; }

        .bg-gradient-success {
            background: #00d25b; }

        .bg-gradient-info {
            background: #8f5fe8; }

        .bg-gradient-warning {
            background: #ffab00; }

        .bg-gradient-danger {
            background: #fc424a; }

        .bg-gradient-light {
            background: #ffffff; }

        .bg-gradient-dark {
            background: #0d0d0d; }

        .sidebar-grdient-dark {
            background: #6a008a;
            background: -moz-linear-gradient(top, #6a008a 0%, #6a008a 20%, #fa0053 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, #6a008a), color-stop(20%, #6a008a), color-stop(100%, #fa0053));
            background: -webkit-linear-gradient(top, #6a008a 0%, #6a008a 20%, #fa0053 100%);
            background: -o-linear-gradient(top, #6a008a 0%, #6a008a 20%, #fa0053 100%);
            background: -ms-linear-gradient(top, #6a008a 0%, #6a008a 20%, #fa0053 100%);
            background: linear-gradient(to bottom, #6a008a 0%, #6a008a 20%, #fa0053 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6a008a', endColorstr='#fa0053', GradientType=0 );
            color: #ffffff; }

        /* Typography */
        body {
            font-size: 1rem;
            font-weight: normal;
            font-weight: initial;
            line-height: 1.5;
            font-family: "Rubik", sans-serif;
            -webkit-font-smoothing: antialiased; }

        h1, h2, h3, h4, h5, h6,
        .h1, .h2, .h3, .h4, .h5, .h6 {
            font-weight: 500; }

        p {
            font-size: 0.875rem; }

        h1, .h1 {
            font-size: 2.19rem; }

        h2, .h2 {
            font-size: 1.875rem; }

        h3, .h3 {
            font-size: 1.5rem; }

        h4, .h4 {
            font-size: 1.125rem; }

        h5, .h5 {
            font-size: 1rem; }

        h6, .h6 {
            font-size: 0.9375rem; }

        p {
            font-size: 0.875rem; }

        .display-1 {
            font-size: 3.75rem; }
        @media (max-width: 991px) {
            .display-1 {
                font-size: 3rem; } }

        .display-2 {
            font-size: 3.125rem; }
        @media (max-width: 991px) {
            .display-2 {
                font-size: 2.5rem; } }

        .display-3 {
            font-size: 2.5rem; }
        @media (max-width: 991px) {
            .display-3 {
                font-size: 2rem; } }

        .display-4 {
            font-size: 1.875rem; }
        @media (max-width: 991px) {
            .display-4 {
                font-size: 1.5rem; } }

        .display-5 {
            font-size: 1.25rem; }
        @media (max-width: 991px) {
            .display-5 {
                font-size: 1rem; } }

        .blockquote {
            padding: 1.25rem;
            border: 1px solid #2c2e33; }

        address p {
            margin-bottom: 0; }

        .blockquote-primary {
            border-color: #0090e7; }
        .blockquote-primary .blockquote-footer {
            color: #0090e7; }

        .blockquote-secondary {
            border-color: #e4eaec; }
        .blockquote-secondary .blockquote-footer {
            color: #e4eaec; }

        .blockquote-success {
            border-color: #00d25b; }
        .blockquote-success .blockquote-footer {
            color: #00d25b; }

        .blockquote-info {
            border-color: #8f5fe8; }
        .blockquote-info .blockquote-footer {
            color: #8f5fe8; }

        .blockquote-warning {
            border-color: #ffab00; }
        .blockquote-warning .blockquote-footer {
            color: #ffab00; }

        .blockquote-danger {
            border-color: #fc424a; }
        .blockquote-danger .blockquote-footer {
            color: #fc424a; }

        .blockquote-light {
            border-color: #ffffff; }
        .blockquote-light .blockquote-footer {
            color: #ffffff; }

        .blockquote-dark {
            border-color: #0d0d0d; }
        .blockquote-dark .blockquote-footer {
            color: #0d0d0d; }

        .error-page h1 {
            font-size: 12rem; }
        @media (max-width: 991px) {
            .error-page h1 {
                font-size: 8rem; } }

        .icon-lg {
            font-size: 3.75rem; }

        .icon-md {
            font-size: 1.875rem; }

        .icon-sm {
            font-size: 1rem; }

        /* Miscellanoeous */
        body,
        html {
            overflow-x: hidden;
            padding-right: 0 !important;
            background-color: #191c24; }

        *:-moz-full-screen,
        *:-webkit-full-screen,
        *:fullscreen *:-ms-fullscreen {
            overflow: auto; }

        .container-scroller {
            overflow: hidden; }

        pre {
            background: #e8eff4;
            padding: 15px;
            font-size: 14px; }

        code {
            padding: 5px;
            color: #fc424a;
            font-weight: 300;
            font-size: 0.875rem;
            border-radius: 4px; }

        .page-header {
            margin: 0 0 1.5rem 0; }
        .page-header .breadcrumb {
            border: 0;
            margin-bottom: 0; }

        .page-title {
            color: #ffffff;
            font-size: 1.125rem;
            margin-bottom: 0; }
        .page-title .page-title-icon {
            display: inline-block;
            width: 36px;
            height: 36px;
            border-radius: 4px;
            text-align: center;
            box-shadow: 0px 3px 8.3px 0.7px rgba(163, 93, 255, 0.35); }
        .page-title .page-title-icon i {
            font-size: .9375rem;
            line-height: 36px; }

        /* Footer */
        .footer {
            background: #000000;
            padding: 20px 1rem;
            transition: all 0.25s ease;
            -moz-transition: all 0.25s ease;
            -webkit-transition: all 0.25s ease;
            -ms-transition: all 0.25s ease;
            font-size: calc(0.875rem - 0.05rem);
            font-weight: 300; }
        .footer a {
            color: #00d25b;
            font-size: inherit; }
        @media (max-width: 991px) {
            .footer {
                margin-left: 0;
                width: 100%; } }

        /* Utilities */
        .grid-margin {
            margin-bottom: 1.5rem; }

        @media (min-width: 576px) {
            .grid-margin-sm-0 {
                margin-bottom: 0; } }

        @media (min-width: 768px) {
            .grid-margin-md-0 {
                margin-bottom: 0; } }

        @media (min-width: 992px) {
            .grid-margin-lg-0 {
                margin-bottom: 0; } }

        @media (min-width: 1200px) {
            .grid-margin-xl-0 {
                margin-bottom: 0; } }

        .img-lg {
            width: 92px;
            height: 92px; }

        .img-sm {
            width: 43px;
            height: 43px; }

        .img-xs {
            width: 35px;
            height: 35px; }

        .img-ss {
            width: 26px;
            height: 26px; }

        .stretch-card {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: stretch;
            align-items: stretch;
            -webkit-justify-content: stretch;
            justify-content: stretch; }
        .stretch-card > .card {
            width: 100%;
            min-width: 100%; }

        @media (min-width: 576px) {
            .border-right-sm {
                border-right: 1px solid #2c2e33; } }

        @media (min-width: 768px) {
            .border-right-md {
                border-right: 1px solid #2c2e33; } }

        @media (min-width: 992px) {
            .border-right-lg {
                border-right: 1px solid #2c2e33; } }

        @media (min-width: 576px) {
            .border-left-sm {
                border-left: 1px solid #2c2e33; } }

        @media (min-width: 768px) {
            .border-left-md {
                border-left: 1px solid #2c2e33; } }

        @media (min-width: 992px) {
            .border-left-lg {
                border-left: 1px solid #2c2e33; } }

        .text-gray, .card .card-subtitle {
            color: #8c8c8c; }

        .text-black {
            color: #000; }

        .text-small {
            font-size: 12px; }

        .flex-grow {
            flex-grow: 1; }

        .font-weight-light {
            font-weight: 300; }

        .font-weight-medium {
            font-weight: 500; }

        .font-weight-bold {
            font-weight: 700; }

        .font-weight-normal {
            font-weight: normal; }

        .bg-gray-dark {
            background: #12151e; }

        .text-twitter {
            color: #2caae1; }

        .text-facebook {
            color: #3b579d; }

        .text-google {
            color: #dc4a38; }

        .text-linkedin {
            color: #0177b5; }

        .text-pinterest {
            color: #cc2127; }

        .text-youtube {
            color: #e52d27; }

        .text-github {
            color: #333333; }

        .text-behance {
            color: #1769ff; }

        .text-dribbble {
            color: #ea4c89; }

        .text-reddit {
            color: #ff4500; }

        /* Demo Styles */
        .template-demo .slider-wrap {
            height: 100px; }

        .template-demo .progress {
            margin-top: 1.5rem; }

        .template-demo > h2,
        .template-demo > h3,
        .template-demo > h4,
        .template-demo > h5,
        .template-demo > h6,
        .template-demo > h1 {
            border-top: 1px solid #2c2e33;
            padding: 0.5rem 0 0; }

        .template-demo .ul-slider.noUi-horizontal {
            margin-top: 2rem; }

        .template-demo .ul-slider.noUi-vertical {
            margin-right: 2rem; }

        .template-demo > .dropdown {
            display: inline-block;
            margin-bottom: 0.5rem; }

        .template-demo nav .breadcrumb {
            margin-bottom: 1.375rem; }

        .template-demo nav:last-child .breadcrumb {
            margin-bottom: 0; }

        .template-demo .editable-form > .form-group {
            border-bottom: 1px solid #2c2e33;
            padding-bottom: 0.8rem;
            margin-bottom: 0.8rem; }

        .template-demo .circle-progress {
            padding: 15px; }

        .demo-modal {
            position: static;
            display: block; }
        .demo-modal .modal-dialog.modal-lg {
            max-width: 100%; }

        .loader-demo-box {
            width: 100%;
            height: 200px; }

        .dropdown-menu-static-demo {
            height: 250px;
            margin-bottom: 20px; }

        .rounded-legend ul li {
            list-style-type: none;
            color: #6c7293;
            font-size: .75rem; }
        .rounded-legend ul li .legend-dots {
            width: 1rem;
            height: 1rem;
            border-radius: 100%;
            display: inline-block;
            vertical-align: text-bottom;
            margin-right: .5rem; }
        .rtl .rounded-legend ul li .legend-dots {
            margin-left: .5rem; }

        .rounded-legend.legend-horizontal {
            display: -webkit-flex;
            display: flex; }
        .rounded-legend.legend-horizontal ul li {
            display: inline-block;
            margin-right: 1.5rem; }
        .rtl .rounded-legend.legend-horizontal ul li {
            margin-right: auto;
            margin-left: 1.5rem; }

        .rounded-legend.legend-top-right ul {
            float: right; }
        .rtl .rounded-legend.legend-top-right ul {
            float: left; }

        .rounded-legend.legend-vertical ul li {
            margin-top: 1rem; }

        /*-------------------------------------------------------------------*/
        /* === Components === */
        /* Badges */
        .badge {
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: initial;
            line-height: 1;
            padding: 0.5rem 0.7rem;
            font-weight: 500; }
        .badge.badge-pill {
            border-radius: 10rem; }

        /*Badge variations*/
        .badge-primary {
            background: #0090e7;
            color: #ffffff; }

        .badge-secondary {
            background: #e4eaec;
            color: #ffffff; }

        .badge-success, .preview-list .preview-item .preview-thumbnail .badge.badge-online {
            background: #00d25b;
            color: #ffffff; }

        .badge-info, .preview-list .preview-item .preview-thumbnail .badge.badge-offline {
            background: #8f5fe8;
            color: #ffffff; }

        .badge-warning, .preview-list .preview-item .preview-thumbnail .badge.badge-busy {
            background: #ffab00;
            color: #ffffff; }

        .badge-danger {
            background: #fc424a;
            color: #ffffff; }

        .badge-light {
            background: #ffffff;
            color: #ffffff; }

        .badge-dark {
            background: #0d0d0d;
            color: #ffffff; }

        /*Badge outlined variations*/
        .badge-outline-primary {
            color: #0090e7;
            border: 1px solid #0090e7; }

        .badge-outline-secondary {
            color: #e4eaec;
            border: 1px solid #e4eaec; }

        .badge-outline-success {
            color: #00d25b;
            border: 1px solid #00d25b; }

        .badge-outline-info {
            color: #8f5fe8;
            border: 1px solid #8f5fe8; }

        .badge-outline-warning {
            color: #ffab00;
            border: 1px solid #ffab00; }

        .badge-outline-danger {
            color: #fc424a;
            border: 1px solid #fc424a; }

        .badge-outline-light {
            color: #ffffff;
            border: 1px solid #ffffff; }

        .badge-outline-dark {
            color: #0d0d0d;
            border: 1px solid #0d0d0d; }

        /* Buttons */
        .btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a {
            font-size: 0.9375rem;
            line-height: 1;
            font-weight: normal;
            /* Buttons with only icons */
            /* Buttons with icon and text */ }
        .btn i, .fc button i, .ajax-upload-dragdrop .ajax-file-upload i, .swal2-modal .swal2-buttonswrapper .swal2-styled i, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm i, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel i, .wizard > .actions a i {
            margin-right: .3125rem; }
        .btn.btn-rounded, .fc button.btn-rounded, .ajax-upload-dragdrop .btn-rounded.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-rounded.swal2-styled, .wizard > .actions a.btn-rounded {
            border-radius: 50px; }
        .btn.btn-fw, .fc button.btn-fw, .ajax-upload-dragdrop .btn-fw.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-fw.swal2-styled, .wizard > .actions a.btn-fw {
            min-width: 150px; }
        .btn.btn-sm, .btn-group-sm > .btn, .fc .btn-group-sm > button, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled, .wizard > .actions .btn-group-sm > a, .fc button, .ajax-upload-dragdrop .btn-sm.ajax-file-upload, .ajax-upload-dragdrop .fc button.ajax-file-upload, .fc .ajax-upload-dragdrop button.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-sm.swal2-styled, .swal2-modal .swal2-buttonswrapper .fc button.swal2-styled, .fc .swal2-modal .swal2-buttonswrapper button.swal2-styled, .wizard > .actions a.btn-sm {
            font-size: 0.875rem; }
        .btn.btn-lg, .btn-group-lg > .btn, .fc .btn-group-lg > button, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled, .wizard > .actions .btn-group-lg > a, .fc button.btn-lg, .ajax-upload-dragdrop .btn-lg.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-lg.swal2-styled, .wizard > .actions a.btn-lg {
            font-size: 0.875rem; }
        .btn.btn-xs, .fc button.btn-xs, .fc .editable-container.editable-inline .editableform .control-group .editable-buttons button.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .fc button.editable-submit, .fc .editable-container.editable-inline .editableform .control-group .editable-buttons button.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .fc button.editable-cancel, .ajax-upload-dragdrop .btn-xs.ajax-file-upload, .ajax-upload-dragdrop .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-file-upload.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-upload-dragdrop .ajax-file-upload.editable-submit, .ajax-upload-dragdrop .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-file-upload.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-upload-dragdrop .ajax-file-upload.editable-cancel, .swal2-modal .swal2-buttonswrapper .btn-xs.swal2-styled, .swal2-modal .swal2-buttonswrapper .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-styled.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-modal .swal2-buttonswrapper .swal2-styled.editable-submit, .swal2-modal .swal2-buttonswrapper .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-styled.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-modal .swal2-buttonswrapper .swal2-styled.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .wizard > .actions a.editable-submit, .wizard > .actions .editable-container.editable-inline .editableform .control-group .editable-buttons a.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .wizard > .actions a.editable-cancel, .wizard > .actions .editable-container.editable-inline .editableform .control-group .editable-buttons a.editable-cancel, .wizard > .actions a.btn-xs {
            padding: 0.5rem 0.75rem;
            font-size: 0.625rem; }
        .btn.btn-icon, .fc button.btn-icon, .ajax-upload-dragdrop .btn-icon.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-icon.swal2-styled, .wizard > .actions a.btn-icon {
            width: 42px;
            height: 42px;
            padding: 0; }
        .btn.btn-icon-text .btn-icon-prepend, .fc button.btn-icon-text .btn-icon-prepend, .ajax-upload-dragdrop .btn-icon-text.ajax-file-upload .btn-icon-prepend, .swal2-modal .swal2-buttonswrapper .btn-icon-text.swal2-styled .btn-icon-prepend, .wizard > .actions a.btn-icon-text .btn-icon-prepend {
            margin-right: .5rem; }
        .btn.btn-icon-text .btn-icon-append, .fc button.btn-icon-text .btn-icon-append, .ajax-upload-dragdrop .btn-icon-text.ajax-file-upload .btn-icon-append, .swal2-modal .swal2-buttonswrapper .btn-icon-text.swal2-styled .btn-icon-append, .wizard > .actions a.btn-icon-text .btn-icon-append {
            margin-left: .5rem; }
        .btn.btn-social-icon, .fc button.btn-social-icon, .ajax-upload-dragdrop .btn-social-icon.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-social-icon.swal2-styled, .wizard > .actions a.btn-social-icon {
            width: 50px;
            height: 50px;
            padding: 0; }
        .btn.get-started-btn, .fc button.get-started-btn, .ajax-upload-dragdrop .get-started-btn.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .get-started-btn.swal2-styled, .wizard > .actions a.get-started-btn {
            font-size: 0.75rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            font-weight: 500;
            padding: 0.9375rem 1.0625rem; }
        @media (max-width: 576px) {
            .btn.get-started-btn, .fc button.get-started-btn, .ajax-upload-dragdrop .get-started-btn.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .get-started-btn.swal2-styled, .wizard > .actions a.get-started-btn {
                font-size: 0.6rem;
                padding: 0.4375rem 0.6625rem; } }

        .btn-group .btn + .btn, .fc .fc-button-group .btn + .btn, .btn-group .fc button + .btn, .fc .btn-group button + .btn, .fc .fc-button-group button + .btn, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .btn, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .btn, .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .btn, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .btn, .btn-group .wizard > .actions a + .btn, .wizard > .actions .btn-group a + .btn, .fc .fc-button-group .wizard > .actions a + .btn, .wizard > .actions .fc .fc-button-group a + .btn, .btn-group .fc .btn + button, .fc .btn-group .btn + button, .fc .fc-button-group .btn + button, .btn-group .fc button + button, .fc .btn-group button + button, .fc .fc-button-group button + button, .btn-group .ajax-upload-dragdrop .fc .ajax-file-upload + button, .fc .btn-group .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop .btn-group .fc .ajax-file-upload + button, .fc .ajax-upload-dragdrop .btn-group .ajax-file-upload + button, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + button, .btn-group .swal2-modal .swal2-buttonswrapper .fc .swal2-styled + button, .fc .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper .btn-group .fc .swal2-styled + button, .fc .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + button, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + button, .btn-group .wizard > .actions .fc a + button, .fc .btn-group .wizard > .actions a + button, .wizard > .actions .btn-group .fc a + button, .fc .wizard > .actions .btn-group a + button, .fc .fc-button-group .wizard > .actions a + button, .wizard > .actions .fc .fc-button-group a + button, .btn-group .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .btn + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .btn + .ajax-file-upload, .btn-group .fc .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .fc button + .ajax-file-upload, .fc .btn-group .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc .btn-group button + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group button + .ajax-file-upload, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .ajax-file-upload, .btn-group .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .ajax-file-upload, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .ajax-file-upload, .btn-group .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .wizard > .actions a + .ajax-file-upload, .wizard > .actions .btn-group .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .btn-group a + .ajax-file-upload, .fc .fc-button-group .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .wizard > .actions a + .ajax-file-upload, .wizard > .actions .fc .fc-button-group .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .fc .fc-button-group a + .ajax-file-upload, .btn-group .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .btn + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .btn + .swal2-styled, .btn-group .fc .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .fc button + .swal2-styled, .fc .btn-group .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .btn-group button + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group button + .swal2-styled, .btn-group .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop .btn-group .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .btn-group .ajax-file-upload + .swal2-styled, .fc .fc-button-group .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .swal2-styled, .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .swal2-styled, .btn-group .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .wizard > .actions a + .swal2-styled, .wizard > .actions .btn-group .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .btn-group a + .swal2-styled, .fc .fc-button-group .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .wizard > .actions a + .swal2-styled, .wizard > .actions .fc .fc-button-group .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .fc .fc-button-group a + .swal2-styled, .btn-group .wizard > .actions .btn + a, .wizard > .actions .btn-group .btn + a, .fc .fc-button-group .wizard > .actions .btn + a, .wizard > .actions .fc .fc-button-group .btn + a, .btn-group .fc .wizard > .actions button + a, .wizard > .actions .btn-group .fc button + a, .fc .btn-group .wizard > .actions button + a, .wizard > .actions .fc .btn-group button + a, .fc .fc-button-group .wizard > .actions button + a, .wizard > .actions .fc .fc-button-group button + a, .btn-group .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions .btn-group .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop .btn-group .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop .btn-group .ajax-file-upload + a, .fc .fc-button-group .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop .fc .fc-button-group .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + a, .btn-group .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper .btn-group .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + a, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + a, .btn-group .wizard > .actions a + a, .wizard > .actions .btn-group a + a, .fc .fc-button-group .wizard > .actions a + a, .wizard > .actions .fc .fc-button-group a + a {
            border-left: 0; }

        /*social buttons*/
        .btn-twitter {
            background: #2caae1;
            color: #ffffff; }
        .btn-twitter:hover, .btn-twitter:focus {
            background: #1b8dbf;
            color: #ffffff; }
        .btn-twitter.btn-social-icon-text {
            padding: 0 1.5rem 0 0;
            background: #59bce7; }
        .btn-twitter.btn-social-icon-text i {
            background: #2caae1;
            padding: .75rem;
            display: inline-block;
            margin-right: 1.5rem; }

        .btn-outline-twitter {
            border: 1px solid #2caae1;
            color: #2caae1; }
        .btn-outline-twitter:hover {
            background: #2caae1;
            color: #ffffff; }

        .btn-facebook {
            background: #3b579d;
            color: #ffffff; }
        .btn-facebook:hover, .btn-facebook:focus {
            background: #2d4278;
            color: #ffffff; }
        .btn-facebook.btn-social-icon-text {
            padding: 0 1.5rem 0 0;
            background: #4e6ebd; }
        .btn-facebook.btn-social-icon-text i {
            background: #3b579d;
            padding: .75rem;
            display: inline-block;
            margin-right: 1.5rem; }

        .btn-outline-facebook {
            border: 1px solid #3b579d;
            color: #3b579d; }
        .btn-outline-facebook:hover {
            background: #3b579d;
            color: #ffffff; }

        .btn-google {
            background: #dc4a38;
            color: #ffffff; }
        .btn-google:hover, .btn-google:focus {
            background: #bf3322;
            color: #ffffff; }
        .btn-google.btn-social-icon-text {
            padding: 0 1.5rem 0 0;
            background: #e47163; }
        .btn-google.btn-social-icon-text i {
            background: #dc4a38;
            padding: .75rem;
            display: inline-block;
            margin-right: 1.5rem; }

        .btn-outline-google {
            border: 1px solid #dc4a38;
            color: #dc4a38; }
        .btn-outline-google:hover {
            background: #dc4a38;
            color: #ffffff; }

        .btn-linkedin {
            background: #0177b5;
            color: #ffffff; }
        .btn-linkedin:hover, .btn-linkedin:focus {
            background: #015682;
            color: #ffffff; }
        .btn-linkedin.btn-social-icon-text {
            padding: 0 1.5rem 0 0;
            background: #0198e8; }
        .btn-linkedin.btn-social-icon-text i {
            background: #0177b5;
            padding: .75rem;
            display: inline-block;
            margin-right: 1.5rem; }

        .btn-outline-linkedin {
            border: 1px solid #0177b5;
            color: #0177b5; }
        .btn-outline-linkedin:hover {
            background: #0177b5;
            color: #ffffff; }

        .btn-pinterest {
            background: #cc2127;
            color: #ffffff; }
        .btn-pinterest:hover, .btn-pinterest:focus {
            background: #a01a1f;
            color: #ffffff; }
        .btn-pinterest.btn-social-icon-text {
            padding: 0 1.5rem 0 0;
            background: #e04046; }
        .btn-pinterest.btn-social-icon-text i {
            background: #cc2127;
            padding: .75rem;
            display: inline-block;
            margin-right: 1.5rem; }

        .btn-outline-pinterest {
            border: 1px solid #cc2127;
            color: #cc2127; }
        .btn-outline-pinterest:hover {
            background: #cc2127;
            color: #ffffff; }

        .btn-youtube {
            background: #e52d27;
            color: #ffffff; }
        .btn-youtube:hover, .btn-youtube:focus {
            background: #c21d17;
            color: #ffffff; }
        .btn-youtube.btn-social-icon-text {
            padding: 0 1.5rem 0 0;
            background: #ea5955; }
        .btn-youtube.btn-social-icon-text i {
            background: #e52d27;
            padding: .75rem;
            display: inline-block;
            margin-right: 1.5rem; }

        .btn-outline-youtube {
            border: 1px solid #e52d27;
            color: #e52d27; }
        .btn-outline-youtube:hover {
            background: #e52d27;
            color: #ffffff; }

        .btn-github {
            background: #333333;
            color: #ffffff; }
        .btn-github:hover, .btn-github:focus {
            background: #1a1a1a;
            color: #ffffff; }
        .btn-github.btn-social-icon-text {
            padding: 0 1.5rem 0 0;
            background: #4d4d4d; }
        .btn-github.btn-social-icon-text i {
            background: #333333;
            padding: .75rem;
            display: inline-block;
            margin-right: 1.5rem; }

        .btn-outline-github {
            border: 1px solid #333333;
            color: #333333; }
        .btn-outline-github:hover {
            background: #333333;
            color: #ffffff; }

        .btn-behance {
            background: #1769ff;
            color: #ffffff; }
        .btn-behance:hover, .btn-behance:focus {
            background: #0050e3;
            color: #ffffff; }
        .btn-behance.btn-social-icon-text {
            padding: 0 1.5rem 0 0;
            background: #4a8aff; }
        .btn-behance.btn-social-icon-text i {
            background: #1769ff;
            padding: .75rem;
            display: inline-block;
            margin-right: 1.5rem; }

        .btn-outline-behance {
            border: 1px solid #1769ff;
            color: #1769ff; }
        .btn-outline-behance:hover {
            background: #1769ff;
            color: #ffffff; }

        .btn-dribbble {
            background: #ea4c89;
            color: #ffffff; }
        .btn-dribbble:hover, .btn-dribbble:focus {
            background: #e51e6b;
            color: #ffffff; }
        .btn-dribbble.btn-social-icon-text {
            padding: 0 1.5rem 0 0;
            background: #ef7aa7; }
        .btn-dribbble.btn-social-icon-text i {
            background: #ea4c89;
            padding: .75rem;
            display: inline-block;
            margin-right: 1.5rem; }

        .btn-outline-dribbble {
            border: 1px solid #ea4c89;
            color: #ea4c89; }
        .btn-outline-dribbble:hover {
            background: #ea4c89;
            color: #ffffff; }

        .btn-reddit {
            background: #ff4500;
            color: #ffffff; }
        .btn-reddit:hover, .btn-reddit:focus {
            background: #cc3700;
            color: #ffffff; }
        .btn-reddit.btn-social-icon-text {
            padding: 0 1.5rem 0 0;
            background: #ff6a33; }
        .btn-reddit.btn-social-icon-text i {
            background: #ff4500;
            padding: .75rem;
            display: inline-block;
            margin-right: 1.5rem; }

        .btn-outline-reddit {
            border: 1px solid #ff4500;
            color: #ff4500; }
        .btn-outline-reddit:hover {
            background: #ff4500;
            color: #ffffff; }

        /* inverse buttons */
        .btn-inverse-primary {
            background-color: rgba(0, 144, 231, 0.2);
            background-image: none;
            border-color: rgba(0, 144, 231, 0); }
        .btn-inverse-primary:not(.btn-inverse-light) {
            color: #0090e7; }
        .btn-inverse-primary:hover {
            color: #ffffff;
            background-color: #0090e7;
            border-color: #0090e7; }
        .btn-inverse-primary.focus, .btn-inverse-primary:focus {
            box-shadow: 0 0 0 3px rgba(0, 144, 231, 0.5); }
        .btn-inverse-primary.disabled, .btn-inverse-primary:disabled {
            color: #0090e7;
            background-color: transparent; }
        .btn-inverse-primary.active, .btn-inverse-primary:active,
        .show > .btn-inverse-primary.dropdown-toggle {
            color: #ffffff;
            background-color: #0090e7;
            border-color: #0090e7; }

        .btn-primary:not(.btn-light):not(.btn-secondary), .wizard > .actions a:not(.btn-light):not(.btn-secondary) {
            color: #ffffff; }
        .btn-primary:not(.btn-light):not(.btn-secondary):hover, .wizard > .actions a:not(.btn-light):not(.btn-secondary):hover, .btn-primary:not(.btn-light):not(.btn-secondary):focus, .wizard > .actions a:not(.btn-light):not(.btn-secondary):focus, .btn-primary:not(.btn-light):not(.btn-secondary):active, .wizard > .actions a:not(.btn-light):not(.btn-secondary):active {
            color: #ffffff; }
        .btn-primary:not(.btn-light):not(.btn-secondary):focus, .wizard > .actions a:not(.btn-light):not(.btn-secondary):focus, .btn-primary:not(.btn-light):not(.btn-secondary):active, .wizard > .actions a:not(.btn-light):not(.btn-secondary):active {
            background: #0090e7;
            border-color: #0090e7; }

        .btn-inverse-secondary {
            background-color: rgba(228, 234, 236, 0.2);
            background-image: none;
            border-color: rgba(228, 234, 236, 0); }
        .btn-inverse-secondary:not(.btn-inverse-light) {
            color: #e4eaec; }
        .btn-inverse-secondary:hover {
            color: #ffffff;
            background-color: #e4eaec;
            border-color: #e4eaec; }
        .btn-inverse-secondary.focus, .btn-inverse-secondary:focus {
            box-shadow: 0 0 0 3px rgba(228, 234, 236, 0.5); }
        .btn-inverse-secondary.disabled, .btn-inverse-secondary:disabled {
            color: #e4eaec;
            background-color: transparent; }
        .btn-inverse-secondary.active, .btn-inverse-secondary:active,
        .show > .btn-inverse-secondary.dropdown-toggle {
            color: #ffffff;
            background-color: #e4eaec;
            border-color: #e4eaec; }

        .btn-secondary:not(.btn-light):not(.btn-secondary) {
            color: #ffffff; }
        .btn-secondary:not(.btn-light):not(.btn-secondary):hover, .btn-secondary:not(.btn-light):not(.btn-secondary):focus, .btn-secondary:not(.btn-light):not(.btn-secondary):active {
            color: #ffffff; }
        .btn-secondary:not(.btn-light):not(.btn-secondary):focus, .btn-secondary:not(.btn-light):not(.btn-secondary):active {
            background: #e4eaec;
            border-color: #e4eaec; }

        .btn-inverse-success {
            background-color: rgba(0, 210, 91, 0.2);
            background-image: none;
            border-color: rgba(0, 210, 91, 0); }
        .btn-inverse-success:not(.btn-inverse-light) {
            color: #00d25b; }
        .btn-inverse-success:hover {
            color: #ffffff;
            background-color: #00d25b;
            border-color: #00d25b; }
        .btn-inverse-success.focus, .btn-inverse-success:focus {
            box-shadow: 0 0 0 3px rgba(0, 210, 91, 0.5); }
        .btn-inverse-success.disabled, .btn-inverse-success:disabled {
            color: #00d25b;
            background-color: transparent; }
        .btn-inverse-success.active, .btn-inverse-success:active,
        .show > .btn-inverse-success.dropdown-toggle {
            color: #ffffff;
            background-color: #00d25b;
            border-color: #00d25b; }

        .btn-success:not(.btn-light):not(.btn-secondary) {
            color: #ffffff; }
        .btn-success:not(.btn-light):not(.btn-secondary):hover, .btn-success:not(.btn-light):not(.btn-secondary):focus, .btn-success:not(.btn-light):not(.btn-secondary):active {
            color: #ffffff; }
        .btn-success:not(.btn-light):not(.btn-secondary):focus, .btn-success:not(.btn-light):not(.btn-secondary):active {
            background: #00d25b;
            border-color: #00d25b; }

        .btn-inverse-info {
            background-color: rgba(143, 95, 232, 0.2);
            background-image: none;
            border-color: rgba(143, 95, 232, 0); }
        .btn-inverse-info:not(.btn-inverse-light) {
            color: #8f5fe8; }
        .btn-inverse-info:hover {
            color: #ffffff;
            background-color: #8f5fe8;
            border-color: #8f5fe8; }
        .btn-inverse-info.focus, .btn-inverse-info:focus {
            box-shadow: 0 0 0 3px rgba(143, 95, 232, 0.5); }
        .btn-inverse-info.disabled, .btn-inverse-info:disabled {
            color: #8f5fe8;
            background-color: transparent; }
        .btn-inverse-info.active, .btn-inverse-info:active,
        .show > .btn-inverse-info.dropdown-toggle {
            color: #ffffff;
            background-color: #8f5fe8;
            border-color: #8f5fe8; }

        .btn-info:not(.btn-light):not(.btn-secondary) {
            color: #ffffff; }
        .btn-info:not(.btn-light):not(.btn-secondary):hover, .btn-info:not(.btn-light):not(.btn-secondary):focus, .btn-info:not(.btn-light):not(.btn-secondary):active {
            color: #ffffff; }
        .btn-info:not(.btn-light):not(.btn-secondary):focus, .btn-info:not(.btn-light):not(.btn-secondary):active {
            background: #8f5fe8;
            border-color: #8f5fe8; }

        .btn-inverse-warning {
            background-color: rgba(255, 171, 0, 0.2);
            background-image: none;
            border-color: rgba(255, 171, 0, 0); }
        .btn-inverse-warning:not(.btn-inverse-light) {
            color: #ffab00; }
        .btn-inverse-warning:hover {
            color: #ffffff;
            background-color: #ffab00;
            border-color: #ffab00; }
        .btn-inverse-warning.focus, .btn-inverse-warning:focus {
            box-shadow: 0 0 0 3px rgba(255, 171, 0, 0.5); }
        .btn-inverse-warning.disabled, .btn-inverse-warning:disabled {
            color: #ffab00;
            background-color: transparent; }
        .btn-inverse-warning.active, .btn-inverse-warning:active,
        .show > .btn-inverse-warning.dropdown-toggle {
            color: #ffffff;
            background-color: #ffab00;
            border-color: #ffab00; }

        .btn-warning:not(.btn-light):not(.btn-secondary) {
            color: #ffffff; }
        .btn-warning:not(.btn-light):not(.btn-secondary):hover, .btn-warning:not(.btn-light):not(.btn-secondary):focus, .btn-warning:not(.btn-light):not(.btn-secondary):active {
            color: #ffffff; }
        .btn-warning:not(.btn-light):not(.btn-secondary):focus, .btn-warning:not(.btn-light):not(.btn-secondary):active {
            background: #ffab00;
            border-color: #ffab00; }

        .btn-inverse-danger {
            background-color: rgba(252, 66, 74, 0.2);
            background-image: none;
            border-color: rgba(252, 66, 74, 0); }
        .btn-inverse-danger:not(.btn-inverse-light) {
            color: #fc424a; }
        .btn-inverse-danger:hover {
            color: #ffffff;
            background-color: #fc424a;
            border-color: #fc424a; }
        .btn-inverse-danger.focus, .btn-inverse-danger:focus {
            box-shadow: 0 0 0 3px rgba(252, 66, 74, 0.5); }
        .btn-inverse-danger.disabled, .btn-inverse-danger:disabled {
            color: #fc424a;
            background-color: transparent; }
        .btn-inverse-danger.active, .btn-inverse-danger:active,
        .show > .btn-inverse-danger.dropdown-toggle {
            color: #ffffff;
            background-color: #fc424a;
            border-color: #fc424a; }

        .btn-danger:not(.btn-light):not(.btn-secondary) {
            color: #ffffff; }
        .btn-danger:not(.btn-light):not(.btn-secondary):hover, .btn-danger:not(.btn-light):not(.btn-secondary):focus, .btn-danger:not(.btn-light):not(.btn-secondary):active {
            color: #ffffff; }
        .btn-danger:not(.btn-light):not(.btn-secondary):focus, .btn-danger:not(.btn-light):not(.btn-secondary):active {
            background: #fc424a;
            border-color: #fc424a; }

        .btn-inverse-light {
            background-color: rgba(255, 255, 255, 0.2);
            background-image: none;
            border-color: rgba(255, 255, 255, 0); }
        .btn-inverse-light:not(.btn-inverse-light) {
            color: #ffffff; }
        .btn-inverse-light:hover {
            color: #ffffff;
            background-color: #ffffff;
            border-color: #ffffff; }
        .btn-inverse-light.focus, .btn-inverse-light:focus {
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.5); }
        .btn-inverse-light.disabled, .btn-inverse-light:disabled {
            color: #ffffff;
            background-color: transparent; }
        .btn-inverse-light.active, .btn-inverse-light:active,
        .show > .btn-inverse-light.dropdown-toggle {
            color: #ffffff;
            background-color: #ffffff;
            border-color: #ffffff; }

        .btn-light:not(.btn-light):not(.btn-secondary) {
            color: #ffffff; }
        .btn-light:not(.btn-light):not(.btn-secondary):hover, .btn-light:not(.btn-light):not(.btn-secondary):focus, .btn-light:not(.btn-light):not(.btn-secondary):active {
            color: #ffffff; }
        .btn-light:not(.btn-light):not(.btn-secondary):focus, .btn-light:not(.btn-light):not(.btn-secondary):active {
            background: #ffffff;
            border-color: #ffffff; }

        .btn-inverse-dark {
            background-color: rgba(13, 13, 13, 0.2);
            background-image: none;
            border-color: rgba(13, 13, 13, 0); }
        .btn-inverse-dark:not(.btn-inverse-light) {
            color: #0d0d0d; }
        .btn-inverse-dark:hover {
            color: #ffffff;
            background-color: #0d0d0d;
            border-color: #0d0d0d; }
        .btn-inverse-dark.focus, .btn-inverse-dark:focus {
            box-shadow: 0 0 0 3px rgba(13, 13, 13, 0.5); }
        .btn-inverse-dark.disabled, .btn-inverse-dark:disabled {
            color: #0d0d0d;
            background-color: transparent; }
        .btn-inverse-dark.active, .btn-inverse-dark:active,
        .show > .btn-inverse-dark.dropdown-toggle {
            color: #ffffff;
            background-color: #0d0d0d;
            border-color: #0d0d0d; }

        .btn-dark:not(.btn-light):not(.btn-secondary) {
            color: #ffffff; }
        .btn-dark:not(.btn-light):not(.btn-secondary):hover, .btn-dark:not(.btn-light):not(.btn-secondary):focus, .btn-dark:not(.btn-light):not(.btn-secondary):active {
            color: #ffffff; }
        .btn-dark:not(.btn-light):not(.btn-secondary):focus, .btn-dark:not(.btn-light):not(.btn-secondary):active {
            background: #0d0d0d;
            border-color: #0d0d0d; }

        /* Cards */
        .card {
            border-radius: 0.25rem; }
        .card .card-body {
            padding: 1.75rem 1.5625rem; }
        .card .card-body + .card-body {
            padding-top: 1rem; }
        .card .card-title {
            color: #ffffff;
            margin-bottom: 1.125rem;
            text-transform: capitalize; }
        .card .card-subtitle {
            font-weight: normal;
            margin-top: 0.625rem;
            margin-bottom: 0.625rem; }
        .card .card-description {
            color: #bfbfbf;
            font-weight: 300; }
        .card.card-outline-success {
            border: 1px solid #00d25b; }
        .card.card-outline-primary {
            border: 1px solid #0090e7; }
        .card.card-outline-warning {
            border: 1px solid #ffab00; }
        .card.card-outline-danger {
            border: 1px solid #fc424a; }
        .card.card-rounded {
            border-radius: 5px; }
        .card.card-faded {
            background: #b5b0b2;
            border-color: #b5b0b2; }
        .card.card-circle-progress {
            color: #ffffff;
            text-align: center; }
        .card.card-img-holder {
            position: relative; }
        .card.card-img-holder .card-img-absolute {
            position: absolute;
            top: 0;
            right: 0;
            height: 100%; }
        .card.corona-gradient-card {
            background-image: linear-gradient(to left, #d41459, #911a6c);
            border-radius: 6px; }
        .card.corona-gradient-card .gradient-corona-img {
            height: 85px; }
        @media (max-width: 576px) {
            .card.corona-gradient-card .gradient-corona-img {
                height: auto;
                min-height: 50px;
                max-height: 85px; } }
        @media (max-width: 576px) {
            .card.corona-gradient-card h4 {
                font-size: 0.75rem; } }

        .card-inverse-primary {
            background: rgba(0, 144, 231, 0.2);
            border: 1px solid #0084d5;
            color: #006db0; }

        .card-inverse-secondary {
            background: rgba(228, 234, 236, 0.2);
            border: 1px solid #d2d7d9;
            color: #adb2b3; }

        .card-inverse-success {
            background: rgba(0, 210, 91, 0.2);
            border: 1px solid #00c154;
            color: #00a045; }

        .card-inverse-info {
            background: rgba(143, 95, 232, 0.2);
            border: 1px solid #8457d5;
            color: #6d48b0; }

        .card-inverse-warning {
            background: rgba(255, 171, 0, 0.2);
            border: 1px solid #eb9d00;
            color: #c28200; }

        .card-inverse-danger {
            background: rgba(252, 66, 74, 0.2);
            border: 1px solid #e83d44;
            color: #c03238; }

        .card-inverse-light {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid #ebebeb;
            color: #c2c2c2; }

        .card-inverse-dark {
            background: rgba(13, 13, 13, 0.2);
            border: 1px solid #0c0c0c;
            color: #0a0a0a; }

        /* Checkboxes and Radios */
        .form-check {
            position: relative;
            display: block;
            margin-top: 15px;
            margin-bottom: 10px;
            padding-left: 0; }
        .form-check .form-check-label {
            display: block;
            padding-left: 0.625rem;
            font-size: 0.875rem;
            line-height: 1.5;
            color: #6c7293; }
        .rtl .form-check .form-check-label {
            padding-left: 0;
            padding-right: 1.875rem; }
        .form-check .form-check-label input {
            position: absolute;
            top: 0;
            left: 0;
            margin-left: 0;
            margin-top: 0;
            z-index: 1;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0); }
        .rtl .form-check .form-check-label input {
            left: auto;
            right: 0; }
        .form-check .form-check-label input[type="checkbox"] + .input-helper:before, .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
            position: absolute;
            top: 0;
            left: 0; }
        .rtl .form-check .form-check-label input[type="checkbox"] + .input-helper:before, .rtl .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
            left: auto;
            right: 0; }
        .form-check .form-check-label input[type="checkbox"] + .input-helper:before {
            content: "";
            width: 16px;
            height: 16px;
            border-radius: 2px;
            border: solid #0090e7;
            border-width: 2px;
            -webkit-transition: all;
            -moz-transition: all;
            -ms-transition: all;
            -o-transition: all;
            transition: all;
            transition-duration: 0s;
            -webkit-transition-duration: 250ms;
            transition-duration: 250ms;
            position: absolute;
            top: 2px;
            left: 0; }
        .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
            -webkit-transition: all;
            -moz-transition: all;
            -ms-transition: all;
            -o-transition: all;
            transition: all;
            transition-duration: 0s;
            -webkit-transition-duration: 250ms;
            transition-duration: 250ms;
            font-family: Material Design Icons;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            content: '\F12C';
            font-size: 0.875rem;
            font-weight: bold;
            color: #ffffff;
            top: 1px; }
        .form-check .form-check-label input[type="checkbox"]:checked + .input-helper:before {
            background: #0090e7;
            border-width: 0; }
        .form-check .form-check-label input[type="checkbox"]:checked + .input-helper:after {
            width: 18px;
            opacity: 1;
            line-height: 18px;
            filter: alpha(opacity=100);
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
            color: black; }
        .form-check .form-check-label input[type="checkbox"]:disabled + .input-helper:before {
            border-color: #2c2e33; }
        .form-check .form-check-label input[type="checkbox"]:disabled:checked + .input-helper:after {
            background: #2c2e33;
            color: #ffffff; }
        .form-check .form-check-label input[type="radio"] + .input-helper:before {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            border: solid #0090e7;
            border-width: 2px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            -webkit-transition: all;
            -moz-transition: all;
            -ms-transition: all;
            -o-transition: all;
            transition: all;
            transition-duration: 0s;
            -webkit-transition-duration: 250ms;
            transition-duration: 250ms; }
        .rtl .form-check .form-check-label input[type="radio"] + .input-helper:before {
            left: auto;
            right: 0; }
        .form-check .form-check-label input[type="radio"] + .input-helper:after {
            content: "";
            width: 8px;
            height: 8px;
            background: #ffffff;
            border-radius: 50%;
            top: 6px;
            left: 6px;
            -webkit-transition: all;
            -o-transition: all;
            transition: all;
            transition-duration: 0s;
            -webkit-transition-duration: 250ms;
            transition-duration: 250ms;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            position: absolute; }
        .rtl .form-check .form-check-label input[type="radio"] + .input-helper:after {
            left: auto;
            right: 6px; }
        .form-check .form-check-label input[type="radio"]:checked + .input-helper:before {
            background: #0090e7;
            border-width: 0; }
        .form-check .form-check-label input[type="radio"]:checked + .input-helper:after {
            opacity: 1;
            line-height: 1.5;
            filter: alpha(opacity=100);
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1); }
        .form-check .form-check-label input[type="radio"]:disabled + .input-helper:before {
            border-color: #2c2e33; }
        .form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:before {
            background: #2c2e33; }
        .form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:after {
            background: #ffffff; }

        .form-check-primary.form-check label input[type="checkbox"] + .input-helper:before,
        .form-check-primary.form-check label input[type="radio"] + .input-helper:before {
            border-color: #0090e7; }

        .form-check-primary.form-check label input[type="checkbox"]:checked + .input-helper:before,
        .form-check-primary.form-check label input[type="radio"]:checked + .input-helper:before {
            background: #0090e7; }

        .form-check-secondary.form-check label input[type="checkbox"] + .input-helper:before,
        .form-check-secondary.form-check label input[type="radio"] + .input-helper:before {
            border-color: #e4eaec; }

        .form-check-secondary.form-check label input[type="checkbox"]:checked + .input-helper:before,
        .form-check-secondary.form-check label input[type="radio"]:checked + .input-helper:before {
            background: #e4eaec; }

        .form-check-success.form-check label input[type="checkbox"] + .input-helper:before,
        .form-check-success.form-check label input[type="radio"] + .input-helper:before {
            border-color: #00d25b; }

        .form-check-success.form-check label input[type="checkbox"]:checked + .input-helper:before,
        .form-check-success.form-check label input[type="radio"]:checked + .input-helper:before {
            background: #00d25b; }

        .form-check-info.form-check label input[type="checkbox"] + .input-helper:before,
        .form-check-info.form-check label input[type="radio"] + .input-helper:before {
            border-color: #8f5fe8; }

        .form-check-info.form-check label input[type="checkbox"]:checked + .input-helper:before,
        .form-check-info.form-check label input[type="radio"]:checked + .input-helper:before {
            background: #8f5fe8; }

        .form-check-warning.form-check label input[type="checkbox"] + .input-helper:before,
        .form-check-warning.form-check label input[type="radio"] + .input-helper:before {
            border-color: #ffab00; }

        .form-check-warning.form-check label input[type="checkbox"]:checked + .input-helper:before,
        .form-check-warning.form-check label input[type="radio"]:checked + .input-helper:before {
            background: #ffab00; }

        .form-check-danger.form-check label input[type="checkbox"] + .input-helper:before,
        .form-check-danger.form-check label input[type="radio"] + .input-helper:before {
            border-color: #fc424a; }

        .form-check-danger.form-check label input[type="checkbox"]:checked + .input-helper:before,
        .form-check-danger.form-check label input[type="radio"]:checked + .input-helper:before {
            background: #fc424a; }

        .form-check-light.form-check label input[type="checkbox"] + .input-helper:before,
        .form-check-light.form-check label input[type="radio"] + .input-helper:before {
            border-color: #ffffff; }

        .form-check-light.form-check label input[type="checkbox"]:checked + .input-helper:before,
        .form-check-light.form-check label input[type="radio"]:checked + .input-helper:before {
            background: #ffffff; }

        .form-check-dark.form-check label input[type="checkbox"] + .input-helper:before,
        .form-check-dark.form-check label input[type="radio"] + .input-helper:before {
            border-color: #0d0d0d; }

        .form-check-dark.form-check label input[type="checkbox"]:checked + .input-helper:before,
        .form-check-dark.form-check label input[type="radio"]:checked + .input-helper:before {
            background: #0d0d0d; }

        .form-check-muted.form-check label input[type="checkbox"] + .input-helper:before,
        .form-check-muted.form-check label input[type="radio"] + .input-helper:before {
            border-color: #6c7293; }

        .form-check-muted.form-check label input[type="checkbox"]:checked + .input-helper:before,
        .form-check-muted.form-check label input[type="radio"]:checked + .input-helper:before {
            background: #6c7293; }

        /* Dropdowns */
        .dropdown .dropdown-menu {
            margin-top: .75rem;
            font-size: 0.875rem;
            box-shadow: none; }
        .dropdown .dropdown-menu .dropdown-item {
            font-size: 1rem;
            padding: .25rem 1.5rem; }
        .dropdown .dropdown-menu .dropdown-item:active {
            background: initial; }

        /* Forms */
        .form-group {
            margin-bottom: 1rem; }

        .input-group-append,
        .input-group-prepend {
            color: #4b5564;
            width: auto;
            border: none; }
        .input-group-append .input-group-text,
        .input-group-prepend .input-group-text {
            border-color: #2c2e33;
            padding: 0.56rem 0.75rem;
            color: #4b5564;
            background: none; }

        .form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
        .tt-query,
        .tt-hint {
            border: 1px solid #2c2e33;
            height: calc(2.25rem + 2px);
            font-weight: normal;
            font-size: 0.875rem;
            padding: 0.625rem 0.6875rem;
            background-color: #2A3038;
            border-radius: 2px;
            color: #ffffff; }
        .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
        .tt-query:focus,
        .tt-hint:focus {
            border: 1px solid rgba(71, 164, 71, 0.5);
            background-color: #2A3038; }
        .form-control.form-control-lg, .form-control-lg.asColorPicker-input, .dataTables_wrapper select.form-control-lg, .jsgrid .jsgrid-table .jsgrid-filter-row input.form-control-lg[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select.form-control-lg, .jsgrid .jsgrid-table .jsgrid-filter-row input.form-control-lg[type=number], .select2-container--default .form-control-lg.select2-selection--single, .select2-container--default .select2-selection--single .form-control-lg.select2-search__field, .form-control-lg.typeahead,
        .form-control-lg.tt-query,
        .form-control-lg.tt-hint {
            padding: 0.94rem .75rem;
            height: calc(2.875rem + 2px); }
        .form-control.form-control-sm, .form-control-sm.asColorPicker-input, .dataTables_wrapper select.form-control-sm, .jsgrid .jsgrid-table .jsgrid-filter-row input.form-control-sm[type=text],
        .jsgrid .jsgrid-table .jsgrid-filter-row select.form-control-sm, .jsgrid .jsgrid-table .jsgrid-filter-row input.form-control-sm[type=number], .select2-container--default .form-control-sm.select2-selection--single, .select2-container--default .select2-selection--single .form-control-sm.select2-search__field, .form-control-sm.typeahead,
        .form-control-sm.tt-query,
        .form-control-sm.tt-hint {
            padding: 0.5rem .75rem;
            height: calc(1.8125rem + 2px); }
        .form-control::placeholder, .asColorPicker-input::placeholder, .dataTables_wrapper select::placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::placeholder,
        .jsgrid .jsgrid-table .jsgrid-filter-row select::placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::placeholder, .select2-container--default .select2-selection--single::placeholder, .select2-container--default .select2-selection--single .select2-search__field::placeholder, .typeahead::placeholder,
        .tt-query::placeholder,
        .tt-hint::placeholder {
            color: #6c7293;
            font-size: 0.875rem; }

        .navbar .form-control, .navbar .asColorPicker-input, .navbar .dataTables_wrapper select, .dataTables_wrapper .navbar select, .navbar .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar input[type=text],
        .navbar .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar select, .navbar .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar input[type=number], .navbar .select2-container--default .select2-selection--single, .select2-container--default .navbar .select2-selection--single, .navbar .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar .select2-search__field, .navbar .typeahead,
        .navbar .tt-query,
        .navbar .tt-hint {
            width: 75%;
            border-radius: 6px; }
        .navbar .form-control:focus, .navbar .asColorPicker-input:focus, .navbar .dataTables_wrapper select:focus, .dataTables_wrapper .navbar select:focus, .navbar .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar input:focus[type=text],
        .navbar .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .navbar select:focus, .navbar .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .navbar input:focus[type=number], .navbar .select2-container--default .select2-selection--single:focus, .select2-container--default .navbar .select2-selection--single:focus, .navbar .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .navbar .select2-search__field:focus, .navbar .typeahead:focus,
        .navbar .tt-query:focus,
        .navbar .tt-hint:focus {
            border: none; }

        select.form-control, select.asColorPicker-input, .dataTables_wrapper select,
        .jsgrid .jsgrid-table .jsgrid-filter-row select, .select2-container--default select.select2-selection--single, .select2-container--default .select2-selection--single select.select2-search__field, select.typeahead,
        select.tt-query,
        select.tt-hint {
            padding: .4375rem .75rem;
            border: 0;
            color: #4b5564; }
        select.form-control:focus, select.asColorPicker-input:focus, .dataTables_wrapper select:focus,
        .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .select2-container--default select.select2-selection--single:focus, .select2-container--default .select2-selection--single select.select2-search__field:focus, select.typeahead:focus,
        select.tt-query:focus,
        select.tt-hint:focus {
            outline: 1px solid #2c2e33; }
        select.form-control.border-primary, select.border-primary.asColorPicker-input, .dataTables_wrapper select.border-primary,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-primary, .select2-container--default select.border-primary.select2-selection--single, .select2-container--default .select2-selection--single select.border-primary.select2-search__field, select.border-primary.typeahead,
        select.border-primary.tt-query,
        select.border-primary.tt-hint {
            outline: 1px solid #0090e7; }
        select.form-control.border-primary:focus, select.border-primary.asColorPicker-input:focus, .dataTables_wrapper select.border-primary:focus,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-primary:focus, .select2-container--default select.border-primary.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-primary.select2-search__field:focus, select.border-primary.typeahead:focus,
        select.border-primary.tt-query:focus,
        select.border-primary.tt-hint:focus {
            outline: 1px solid #0090e7; }
        select.form-control.border-secondary, select.form-control.loader-demo-box, select.loader-demo-box.asColorPicker-input, .dataTables_wrapper select.loader-demo-box,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.loader-demo-box, .select2-container--default select.loader-demo-box.select2-selection--single, .select2-container--default .select2-selection--single select.loader-demo-box.select2-search__field, select.loader-demo-box.typeahead,
        select.loader-demo-box.tt-query,
        select.loader-demo-box.tt-hint, select.border-secondary.asColorPicker-input, .dataTables_wrapper select.border-secondary,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-secondary, .select2-container--default select.border-secondary.select2-selection--single, .select2-container--default .select2-selection--single select.border-secondary.select2-search__field, select.border-secondary.typeahead,
        select.border-secondary.tt-query,
        select.border-secondary.tt-hint {
            outline: 1px solid #e4eaec; }
        select.form-control.border-secondary:focus, select.form-control.loader-demo-box:focus, select.loader-demo-box.asColorPicker-input:focus, .dataTables_wrapper select.loader-demo-box:focus,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.loader-demo-box:focus, .select2-container--default select.loader-demo-box.select2-selection--single:focus, .select2-container--default .select2-selection--single select.loader-demo-box.select2-search__field:focus, select.loader-demo-box.typeahead:focus,
        select.loader-demo-box.tt-query:focus,
        select.loader-demo-box.tt-hint:focus, select.border-secondary.asColorPicker-input:focus, .dataTables_wrapper select.border-secondary:focus,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-secondary:focus, .select2-container--default select.border-secondary.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-secondary.select2-search__field:focus, select.border-secondary.typeahead:focus,
        select.border-secondary.tt-query:focus,
        select.border-secondary.tt-hint:focus {
            outline: 1px solid #e4eaec; }
        select.form-control.border-success, select.border-success.asColorPicker-input, .swal2-modal .swal2-buttonswrapper select.asColorPicker-input.swal2-styled.swal2-confirm, .dataTables_wrapper select.border-success, .dataTables_wrapper .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper select.swal2-styled.swal2-confirm,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-success, .jsgrid .jsgrid-table .jsgrid-filter-row .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .jsgrid .jsgrid-table .jsgrid-filter-row select.swal2-styled.swal2-confirm, .select2-container--default select.border-success.select2-selection--single, .select2-container--default .swal2-modal .swal2-buttonswrapper select.select2-selection--single.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .select2-container--default select.select2-selection--single.swal2-styled.swal2-confirm, .select2-container--default .select2-selection--single select.border-success.select2-search__field, .select2-container--default .select2-selection--single .swal2-modal .swal2-buttonswrapper select.select2-search__field.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .select2-container--default .select2-selection--single select.select2-search__field.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper select.form-control.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.typeahead,
        .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-query,
        .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-hint, select.border-success.typeahead,
        select.border-success.tt-query,
        select.border-success.tt-hint {
            outline: 1px solid #00d25b; }
        select.form-control.border-success:focus, select.border-success.asColorPicker-input:focus, .swal2-modal .swal2-buttonswrapper select.asColorPicker-input.swal2-styled.swal2-confirm:focus, .dataTables_wrapper select.border-success:focus, .dataTables_wrapper .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper select.swal2-styled.swal2-confirm:focus,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-success:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .jsgrid .jsgrid-table .jsgrid-filter-row select.swal2-styled.swal2-confirm:focus, .select2-container--default select.border-success.select2-selection--single:focus, .select2-container--default .swal2-modal .swal2-buttonswrapper select.select2-selection--single.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .select2-container--default select.select2-selection--single.swal2-styled.swal2-confirm:focus, .select2-container--default .select2-selection--single select.border-success.select2-search__field:focus, .select2-container--default .select2-selection--single .swal2-modal .swal2-buttonswrapper select.select2-search__field.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .select2-container--default .select2-selection--single select.select2-search__field.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper select.form-control.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.typeahead:focus,
        .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-query:focus,
        .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-hint:focus, select.border-success.typeahead:focus,
        select.border-success.tt-query:focus,
        select.border-success.tt-hint:focus {
            outline: 1px solid #00d25b; }
        select.form-control.border-info, select.border-info.asColorPicker-input, .dataTables_wrapper select.border-info,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-info, .select2-container--default select.border-info.select2-selection--single, .select2-container--default .select2-selection--single select.border-info.select2-search__field, select.border-info.typeahead,
        select.border-info.tt-query,
        select.border-info.tt-hint {
            outline: 1px solid #8f5fe8; }
        select.form-control.border-info:focus, select.border-info.asColorPicker-input:focus, .dataTables_wrapper select.border-info:focus,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-info:focus, .select2-container--default select.border-info.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-info.select2-search__field:focus, select.border-info.typeahead:focus,
        select.border-info.tt-query:focus,
        select.border-info.tt-hint:focus {
            outline: 1px solid #8f5fe8; }
        select.form-control.border-warning, select.border-warning.asColorPicker-input, .dataTables_wrapper select.border-warning,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-warning, .select2-container--default select.border-warning.select2-selection--single, .select2-container--default .select2-selection--single select.border-warning.select2-search__field, select.border-warning.typeahead,
        select.border-warning.tt-query,
        select.border-warning.tt-hint {
            outline: 1px solid #ffab00; }
        select.form-control.border-warning:focus, select.border-warning.asColorPicker-input:focus, .dataTables_wrapper select.border-warning:focus,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-warning:focus, .select2-container--default select.border-warning.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-warning.select2-search__field:focus, select.border-warning.typeahead:focus,
        select.border-warning.tt-query:focus,
        select.border-warning.tt-hint:focus {
            outline: 1px solid #ffab00; }
        select.form-control.border-danger, select.border-danger.asColorPicker-input, .dataTables_wrapper select.border-danger,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-danger, .select2-container--default select.border-danger.select2-selection--single, .select2-container--default .select2-selection--single select.border-danger.select2-search__field, select.border-danger.typeahead,
        select.border-danger.tt-query,
        select.border-danger.tt-hint {
            outline: 1px solid #fc424a; }
        select.form-control.border-danger:focus, select.border-danger.asColorPicker-input:focus, .dataTables_wrapper select.border-danger:focus,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-danger:focus, .select2-container--default select.border-danger.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-danger.select2-search__field:focus, select.border-danger.typeahead:focus,
        select.border-danger.tt-query:focus,
        select.border-danger.tt-hint:focus {
            outline: 1px solid #fc424a; }
        select.form-control.border-light, select.border-light.asColorPicker-input, .dataTables_wrapper select.border-light,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-light, .select2-container--default select.border-light.select2-selection--single, .select2-container--default .select2-selection--single select.border-light.select2-search__field, select.border-light.typeahead,
        select.border-light.tt-query,
        select.border-light.tt-hint {
            outline: 1px solid #ffffff; }
        select.form-control.border-light:focus, select.border-light.asColorPicker-input:focus, .dataTables_wrapper select.border-light:focus,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-light:focus, .select2-container--default select.border-light.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-light.select2-search__field:focus, select.border-light.typeahead:focus,
        select.border-light.tt-query:focus,
        select.border-light.tt-hint:focus {
            outline: 1px solid #ffffff; }
        select.form-control.border-dark, select.border-dark.asColorPicker-input, .dataTables_wrapper select.border-dark,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-dark, .select2-container--default select.border-dark.select2-selection--single, .select2-container--default .select2-selection--single select.border-dark.select2-search__field, select.border-dark.typeahead,
        select.border-dark.tt-query,
        select.border-dark.tt-hint {
            outline: 1px solid #0d0d0d; }
        select.form-control.border-dark:focus, select.border-dark.asColorPicker-input:focus, .dataTables_wrapper select.border-dark:focus,
        .jsgrid .jsgrid-table .jsgrid-filter-row select.border-dark:focus, .select2-container--default select.border-dark.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-dark.select2-search__field:focus, select.border-dark.typeahead:focus,
        select.border-dark.tt-query:focus,
        select.border-dark.tt-hint:focus {
            outline: 1px solid #0d0d0d; }

        .form-group label {
            font-size: 0.875rem;
            line-height: 1;
            vertical-align: top; }

        .form-group.has-danger .form-control, .form-group.has-danger .asColorPicker-input, .form-group.has-danger .dataTables_wrapper select, .dataTables_wrapper .form-group.has-danger select, .form-group.has-danger .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .form-group.has-danger input[type=text],
        .form-group.has-danger .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .form-group.has-danger select, .form-group.has-danger .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .form-group.has-danger input[type=number], .form-group.has-danger .select2-container--default .select2-selection--single, .select2-container--default .form-group.has-danger .select2-selection--single, .form-group.has-danger .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .form-group.has-danger .select2-search__field, .form-group.has-danger .typeahead,
        .form-group.has-danger .tt-query,
        .form-group.has-danger .tt-hint {
            border-color: #fc424a; }

        .form-group .file-upload-default {
            visibility: hidden;
            position: absolute; }

        .form-group .file-upload-info {
            background: transparent; }

        .form-check {
            min-height: 18px;
            padding-left: 1.25rem; }

        div.tagsinput {
            background: transparent; }

        /* Icons */
        .icons-list {
            border-left: 1px solid #2c2e33;
            border-top: 1px solid #2c2e33; }
        .icons-list > div {
            border-bottom: 1px solid #2c2e33;
            border-right: 1px solid #2c2e33;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            padding: 15px 15px;
            font-weight: normal;
            font-size: 0.875rem; }
        .icons-list > div i {
            display: inline-block;
            font-size: 20px;
            width: 40px;
            text-align: left;
            color: #0090e7; }

        /* Loaders */
        #pgloading {
            position: static; }
        #pgloading .bokeh {
            font-size: 100px;
            width: 1em;
            height: 1em;
            position: relative;
            margin: 0 auto;
            border-radius: 50%;
            border: 0.01em solid #2c2e33;
            list-style: none;
            padding: 0; }
        #pgloading .bokeh li {
            position: absolute;
            width: .2em;
            height: .2em;
            border-radius: 50%; }
        #pgloading .bokeh li:nth-child(1) {
            left: 50%;
            top: 0;
            margin: 0 0 0 -.1em;
            background: #00d25b;
            -webkit-transform-origin: 50% 250%;
            transform-origin: 50% 250%;
            -webkit-animation: rota 1.13s linear infinite, opa 3.67s ease-in-out infinite alternate;
            animation: rota 1.13s linear infinite, opa 3.67s ease-in-out infinite alternate; }
        #pgloading .bokeh li:nth-child(2) {
            top: 50%;
            right: 0;
            margin: -.1em 0 0 0;
            background: #fc424a;
            -webkit-transform-origin: -150% 50%;
            transform-origin: -150% 50%;
            -webkit-animation: rota 1.86s linear infinite, opa 4.29s ease-in-out infinite alternate;
            animation: rota 1.86s linear infinite, opa 4.29s ease-in-out infinite alternate; }
        #pgloading .bokeh li:nth-child(3) {
            left: 50%;
            bottom: 0;
            margin: 0 0 0 -.1em;
            background: #ffab00;
            -webkit-transform-origin: 50% -150%;
            transform-origin: 50% -150%;
            -webkit-animation: rota 1.45s linear infinite, opa 5.12s ease-in-out infinite alternate;
            animation: rota 1.45s linear infinite, opa 5.12s ease-in-out infinite alternate; }
        #pgloading .bokeh li:nth-child(4) {
            top: 50%;
            left: 0;
            margin: -.1em 0 0 0;
            background: #0090e7;
            -webkit-transform-origin: 250% 50%;
            transform-origin: 250% 50%;
            -webkit-animation: rota 1.72s linear infinite, opa 5.25s ease-in-out infinite alternate;
            animation: rota 1.72s linear infinite, opa 5.25s ease-in-out infinite alternate; }

        @-webkit-keyframes rota {
            from { }
            to {
                -webkit-transform: rotate(360deg); } }

        @keyframes rota {
            from { }
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg); } }

        @-webkit-keyframes opa {
            0% { }
            12.0% {
                opacity: 0.80; }
            19.5% {
                opacity: 0.88; }
            37.2% {
                opacity: 0.64; }
            40.5% {
                opacity: 0.52; }
            52.7% {
                opacity: 0.69; }
            60.2% {
                opacity: 0.60; }
            66.6% {
                opacity: 0.52; }
            70.0% {
                opacity: 0.63; }
            79.9% {
                opacity: 0.60; }
            84.2% {
                opacity: 0.75; }
            91.0% {
                opacity: 0.87; } }

        @keyframes opa {
            0% { }
            12.0% {
                opacity: 0.80; }
            19.5% {
                opacity: 0.88; }
            37.2% {
                opacity: 0.64; }
            40.5% {
                opacity: 0.52; }
            52.7% {
                opacity: 0.69; }
            60.2% {
                opacity: 0.60; }
            66.6% {
                opacity: 0.52; }
            70.0% {
                opacity: 0.63; }
            79.9% {
                opacity: 0.60; }
            84.2% {
                opacity: 0.75; }
            91.0% {
                opacity: 0.87; } }

        .glowing-loader {
            position: relative; }

        .s2 {
            position: absolute;
            height: 70px;
            width: 70px;
            top: 50px;
            background-color: transparent;
            left: 50%;
            transform: translate(-50%, -50%); }

        .s1 {
            position: absolute;
            height: 70px;
            width: 70px;
            left: 50%;
            top: 50px;
            transform-origin: center;
            transform: translate(-50%, -50%) rotate(45deg);
            background-color: transparent; }

        .bigcon {
            position: absolute;
            height: 75px;
            width: 75px;
            left: 50%;
            top: 50px;
            transform-origin: center;
            transform: translate(-50%, -50%) rotate(-45deg);
            background-color: transparent;
            animation: bigcon 2s infinite linear;
            animation-delay: 0.25s; }

        .b {
            border-radius: 50%;
            position: absolute; }

        .s {
            width: 15px;
            height: 15px;
            animation: small 2s infinite ease;
            box-shadow: 0px 2px rgba(0, 0, 0, 0.3);
            background-color: #0090e7; }

        .s:nth-child(1) {
            top: 0%;
            left: 0%; }

        .s:nth-child(2) {
            top: 0%;
            right: 0%; }

        .s:nth-child(3) {
            right: 0%;
            bottom: 0%; }

        .s:nth-child(4) {
            bottom: 0%;
            left: 0%; }

        .big {
            width: 15px;
            height: 15px;
            border-radius: 15px;
            box-shadow: 0px 0px 10px #0090e7, 0px 0px 20px #0090e7, 0px 0px 30px #0090e7, 0px 0px 50px #0090e7, 0px 0px 60px #0090e7;
            z-index: 1;
            background-color: #0090e7;
            animation: bigball 1s infinite linear; }

        .sb1 {
            animation-delay: -1.75s; }

        .sb6 {
            animation-delay: -1.5s; }

        .sb2 {
            animation-delay: -1.25s; }

        .sb7 {
            animation-delay: -1s; }

        .sb3 {
            animation-delay: -0.75s; }

        .sb8 {
            animation-delay: -0.5s; }

        .sb4 {
            animation-delay: -0.25s; }

        .sb5 {
            animation-delay: -0s; }

        @keyframes bigcon {
            0% {
                transform-origin: center;
                transform: translate(-50%, -50%) rotate(45deg); }
            100% {
                transform-origin: center;
                transform: translate(-50%, -50%) rotate(405deg); } }

        @keyframes small {
            0% {
                transform: scale(1);
                background-color: #4ebcff; }
            10% {
                transform: scale(1.3);
                background-color: #0090e7; }
            15% {
                transform: scale(1); }
            25% {
                transform: scale(1);
                background-color: #0090e7; }
            100% {
                transform: scale(1);
                background-color: #0090e7; } }

        /* Pixel loader */
        .pixel-loader {
            width: 10px;
            height: 10px;
            background: #ffab00;
            color: #ffab00;
            margin: 80px auto;
            box-shadow: 15px 15px  0 0, -15px -15px  0 0, 15px -15px  0 0, -15px 15px  0 0, 0 15px  0 0, 15px 0  0 0, -15px 0  0 0, 0 -15px 0 0;
            animation: anim 2s linear infinite; }

        @keyframes anim {
            0% {
                -webkit-filter: hue-rotate(0deg); }
            50% {
                box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0; }
            75% {
                box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0; }
            100% {
                transform: rotate(360deg);
                -webkit-filter: hue-rotate(360deg); } }

        /* Square box loader */
        @keyframes dyinglight {
            15% {
                transform: scale(1.6); }
            50% {
                transform: rotate(-89deg); }
            100% {
                transform: rotate(-90deg); } }

        .square-box-loader {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: inline-block; }

        .square-box-loader-square {
            display: block;
            width: 30px;
            height: 30px;
            background: #0090e7; }

        .square-box-loader-container {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            transform-origin: 50% 50% 0;
            animation: dyinglight 1s ease infinite;
            backface-visibility: hidden; }

        .square-box-loader-corner-top:before,
        .square-box-loader-corner-top:after,
        .square-box-loader-corner-bottom:before,
        .square-box-loader-corner-bottom:after {
            position: absolute;
            width: 10px;
            height: 10px;
            color: #0090e7;
            content: ''; }

        .square-box-loader-corner-top:before {
            border-left: 1px solid;
            border-top: 1px solid;
            top: -4px;
            left: -4px; }

        .square-box-loader-corner-top:after {
            border-right: 1px solid;
            border-top: 1px solid;
            top: -4px;
            right: -4px; }

        .square-box-loader-corner-bottom:before {
            border-left: 1px solid;
            border-bottom: 1px solid;
            bottom: -4px;
            left: -4px; }

        .square-box-loader-corner-bottom:after {
            border-right: 1px solid;
            border-bottom: 1px solid;
            bottom: -4px;
            right: -4px; }

        /* Circle loader */
        .circle-loader {
            width: 70px;
            height: 70px;
            border-radius: 100%;
            position: relative;
            margin: 0 auto; }

        .circle-loader:before, .circle-loader:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 100%;
            border: 10px solid transparent;
            border-top-color: #ffab00; }

        .circle-loader:before {
            z-index: 100;
            animation: spin 1s infinite; }

        .circle-loader:after {
            border: 10px solid #e4eaec; }

        @keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg); }
            100% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg); } }

        /* Jumping dots loader */
        .jumping-dots-loader {
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: relative;
            margin: 0 auto; }

        .jumping-dots-loader span {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 100%;
            background-color: rgba(252, 66, 74, 0.8);
            margin: 35px 5px; }

        .jumping-dots-loader span:nth-child(1) {
            animation: bounce 1s ease-in-out infinite; }

        .jumping-dots-loader span:nth-child(2) {
            animation: bounce 1s ease-in-out 0.33s infinite; }

        .jumping-dots-loader span:nth-child(3) {
            animation: bounce 1s ease-in-out 0.66s infinite; }

        @keyframes bounce {
            0%, 75%, 100% {
                -webkit-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0); }
            25% {
                -webkit-transform: translateY(-20px);
                -ms-transform: translateY(-20px);
                -o-transform: translateY(-20px);
                transform: translateY(-20px); } }

        /* Bar loader */
        .bar-loader {
            width: 50px;
            height: 50px;
            border-radius: 100%;
            position: relative;
            margin: 0 auto; }

        .bar-loader span {
            display: inline-block;
            width: 5px;
            height: 30px;
            background-color: rgba(252, 66, 74, 0.7); }

        .bar-loader span:nth-child(1) {
            animation: grow 1s ease-in-out infinite; }

        .bar-loader span:nth-child(2) {
            animation: grow 1s ease-in-out 0.15s infinite; }

        .bar-loader span:nth-child(3) {
            animation: grow 1s ease-in-out 0.30s infinite; }

        .bar-loader span:nth-child(4) {
            animation: grow 1s ease-in-out 0.45s infinite; }

        @keyframes grow {
            0%, 100% {
                -webkit-transform: scaleY(1);
                -ms-transform: scaleY(1);
                -o-transform: scaleY(1);
                transform: scaleY(1); }
            50% {
                -webkit-transform: scaleY(1.8);
                -ms-transform: scaleY(1.8);
                -o-transform: scaleY(1.8);
                transform: scaleY(1.8); } }

        /* Square path loader */
        .square-path-loader {
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: relative;
            margin: 0 auto; }

        .square-path-loader:before, .square-path-loader:after {
            content: "";
            width: 15px;
            height: 15px;
            position: absolute;
            top: 0;
            left: calc(50% - 10px);
            background-color: rgba(0, 210, 91, 0.7);
            animation: squaremove 1s ease-in-out infinite; }

        .square-path-loader:after {
            bottom: 0;
            animation-delay: 0.5s; }

        @keyframes squaremove {
            0%, 100% {
                -webkit-transform: translate(0, 0) rotate(0);
                -ms-transform: translate(0, 0) rotate(0);
                -o-transform: translate(0, 0) rotate(0);
                transform: translate(0, 0) rotate(0); }
            25% {
                -webkit-transform: translate(40px, 40px) rotate(45deg);
                -ms-transform: translate(40px, 40px) rotate(45deg);
                -o-transform: translate(40px, 40px) rotate(45deg);
                transform: translate(40px, 40px) rotate(45deg); }
            50% {
                -webkit-transform: translate(0px, 80px) rotate(0deg);
                -ms-transform: translate(0px, 80px) rotate(0deg);
                -o-transform: translate(0px, 80px) rotate(0deg);
                transform: translate(0px, 80px) rotate(0deg); }
            75% {
                -webkit-transform: translate(-40px, 40px) rotate(45deg);
                -ms-transform: translate(-40px, 40px) rotate(45deg);
                -o-transform: translate(-40px, 40px) rotate(45deg);
                transform: translate(-40px, 40px) rotate(45deg); } }

        /* Dot opacity loader */
        .dot-opacity-loader {
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: relative;
            margin: 0 auto; }

        .dot-opacity-loader span {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 100%;
            background-color: #0090e7;
            margin: 35px 5px;
            opacity: 0; }

        .dot-opacity-loader span:nth-child(1) {
            animation: opacitychange 1s ease-in-out infinite; }

        .dot-opacity-loader span:nth-child(2) {
            animation: opacitychange 1s ease-in-out 0.33s infinite; }

        .dot-opacity-loader span:nth-child(3) {
            animation: opacitychange 1s ease-in-out 0.66s infinite; }

        @keyframes opacitychange {
            0%, 100% {
                opacity: 0; }
            60% {
                opacity: 1; } }

        /* Flip square */
        .flip-square-loader {
            -webkit-perspective: 120px;
            -moz-perspective: 120px;
            -ms-perspective: 120px;
            perspective: 120px;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: relative;
            margin: 0 auto; }

        .flip-square-loader:before {
            content: "";
            position: absolute;
            left: 25px;
            top: 25px;
            width: 50px;
            height: 50px;
            background-color: rgba(0, 210, 91, 0.7);
            animation: flip 1s infinite; }

        @keyframes flip {
            0% {
                transform: rotate(0); }
            50% {
                transform: rotateY(180deg); }
            100% {
                transform: rotateY(180deg) rotateX(180deg); } }

        /* Moving square loader */
        .moving-square-loader {
            width: 100px;
            height: 100px;
            border-radius: 100%;
            position: relative;
            margin: 0 auto; }

        .moving-square-loader:before {
            content: "";
            position: absolute;
            width: 10px;
            height: 10px;
            top: calc(50% - 10px);
            left: 0px;
            background-color: rgba(252, 66, 74, 0.7);
            animation: rotatemove 1s infinite; }

        @keyframes rotatemove {
            0% {
                -webkit-transform: scale(1) translateX(0px);
                -ms-transform: scale(1) translateX(0px);
                -o-transform: scale(1) translateX(0px);
                transform: scale(1) translateX(0px); }
            100% {
                -webkit-transform: scale(2) translateX(45px);
                -ms-transform: scale(2) translateX(45px);
                -o-transform: scale(2) translateX(45px);
                transform: scale(2) translateX(45px); } }

        /* Preview */
        .preview-list .preview-item {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: flex-start;
            align-items: flex-start;
            padding: 1rem 0rem;
            font-size: .875rem; }
        .preview-list .preview-item:last-child {
            border-bottom: 0; }
        .preview-list .preview-item .form-check {
            margin-top: 8px;
            margin-right: 1rem; }
        .preview-list .preview-item .preview-thumbnail {
            color: #ffffff;
            position: relative; }
        .preview-list .preview-item .preview-thumbnail img,
        .preview-list .preview-item .preview-thumbnail .preview-icon {
            width: 40px;
            height: 40px;
            text-align: center;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center; }
        .preview-list .preview-item .preview-thumbnail img i,
        .preview-list .preview-item .preview-thumbnail .preview-icon i {
            font-size: 1.125rem;
            margin: 0; }
        .preview-list .preview-item .preview-thumbnail .badge {
            border: 2px solid #ffffff;
            border-radius: 100%;
            bottom: 5px;
            display: block;
            height: 14px;
            left: -5px;
            padding: 0;
            position: absolute;
            width: 14px; }
        .preview-list .preview-item .preview-item-content {
            line-height: 1;
            padding-left: 15px; }
        .preview-list .preview-item .preview-item-content:first-child {
            padding-left: 0; }
        .preview-list .preview-item .preview-item-content p {
            margin-bottom: 10px;
            line-height: 1; }
        .preview-list .preview-item .preview-item-content p .content-category {
            font-family: 'source-sans-pro-semibold', sans-serif;
            padding-right: 15px;
            border-right: 1px solid #2c2e33; }
        .rtl .preview-list .preview-item .preview-item-content {
            padding-left: 0;
            padding-right: 1rem;
            margin-right: 0;
            margin-left: auto; }
        .preview-list .preview-item .preview-actions {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row; }
        .preview-list .preview-item .preview-actions i {
            width: 29px;
            color: #e6e9ed;
            height: 29px;
            border: 2px solid #e6e9ed;
            border-radius: 100%;
            padding: 3px 6px;
            display: inline-block; }
        .preview-list .preview-item .preview-actions i:first-child {
            margin-right: 10px; }

        .preview-list.comment-preview .preview-item {
            padding: .87rem 0; }
        .preview-list.comment-preview .preview-item:first-child {
            padding-top: 0; }
        .preview-list.comment-preview .preview-item p {
            line-height: 27px; }

        .preview-list.bordered .preview-item {
            border-bottom: 1px solid #2c2e33; }
        .preview-list.bordered .preview-item:last-child {
            border-bottom: 0; }

        .icon {
            display: flex;
            align-items: center;
            justify-content: center; }
        .icon.icon-box-primary {
            width: 40px;
            height: 37px;
            background: rgba(0, 144, 231, 0.11);
            border-radius: 7px;
            color: #0090e7; }
        .icon .icon-item {
            font-size: 20px; }

        .icon {
            display: flex;
            align-items: center;
            justify-content: center; }
        .icon.icon-box-secondary {
            width: 40px;
            height: 37px;
            background: rgba(228, 234, 236, 0.11);
            border-radius: 7px;
            color: #e4eaec; }
        .icon .icon-item {
            font-size: 20px; }

        .icon {
            display: flex;
            align-items: center;
            justify-content: center; }
        .icon.icon-box-success {
            width: 40px;
            height: 37px;
            background: rgba(0, 210, 91, 0.11);
            border-radius: 7px;
            color: #00d25b; }
        .icon .icon-item {
            font-size: 20px; }

        .icon {
            display: flex;
            align-items: center;
            justify-content: center; }
        .icon.icon-box-info {
            width: 40px;
            height: 37px;
            background: rgba(143, 95, 232, 0.11);
            border-radius: 7px;
            color: #8f5fe8; }
        .icon .icon-item {
            font-size: 20px; }

        .icon {
            display: flex;
            align-items: center;
            justify-content: center; }
        .icon.icon-box-warning {
            width: 40px;
            height: 37px;
            background: rgba(255, 171, 0, 0.11);
            border-radius: 7px;
            color: #ffab00; }
        .icon .icon-item {
            font-size: 20px; }

        .icon {
            display: flex;
            align-items: center;
            justify-content: center; }
        .icon.icon-box-danger {
            width: 40px;
            height: 37px;
            background: rgba(252, 66, 74, 0.11);
            border-radius: 7px;
            color: #fc424a; }
        .icon .icon-item {
            font-size: 20px; }

        .icon {
            display: flex;
            align-items: center;
            justify-content: center; }
        .icon.icon-box-light {
            width: 40px;
            height: 37px;
            background: rgba(255, 255, 255, 0.11);
            border-radius: 7px;
            color: #ffffff; }
        .icon .icon-item {
            font-size: 20px; }

        .icon {
            display: flex;
            align-items: center;
            justify-content: center; }
        .icon.icon-box-dark {
            width: 40px;
            height: 37px;
            background: rgba(13, 13, 13, 0.11);
            border-radius: 7px;
            color: #0d0d0d; }
        .icon .icon-item {
            font-size: 20px; }

        /* Tables */
        .table, .jsgrid .jsgrid-table {
            margin-bottom: 0;
            color: #6c7293; }
        .table thead th, .jsgrid .jsgrid-table thead th {
            border-top: 0;
            border-bottom-width: 1px;
            font-weight: 500;
            color: #6c7293; }
        .table thead th i, .jsgrid .jsgrid-table thead th i {
            margin-left: 0.325rem; }
        .table th, .jsgrid .jsgrid-table th,
        .table td,
        .jsgrid .jsgrid-table td {
            vertical-align: middle;
            font-size: 0.875rem;
            line-height: 1;
            white-space: nowrap; }
        .table th img, .jsgrid .jsgrid-table th img,
        .table td img,
        .jsgrid .jsgrid-table td img {
            width: 30px;
            height: 30px;
            border-radius: 100%; }
        .table th .badge, .jsgrid .jsgrid-table th .badge,
        .table td .badge,
        .jsgrid .jsgrid-table td .badge {
            margin-bottom: 0; }
        .table.table-borderless, .jsgrid .table-borderless.jsgrid-table {
            border: none; }
        .table.table-borderless tr, .jsgrid .table-borderless.jsgrid-table tr,
        .table.table-borderless td,
        .jsgrid .table-borderless.jsgrid-table td,
        .table.table-borderless th,
        .jsgrid .table-borderless.jsgrid-table th {
            border: none; }
        .table .table-dark, .jsgrid .jsgrid-table .table-dark {
            background: #212529; }
        .table.table-contextual, .jsgrid .table-contextual.jsgrid-table {
            color: #ffffff; }

        .nav-tabs .nav-link {
            background: #000000;
            color: #ffffff;
            border-radius: 0;
            border: 1px solid #2c2e33;
            padding: .75rem 1.5rem; }
        @media (max-width: 576px) {
            .nav-tabs .nav-link {
                padding: 0.3rem 0.5rem; } }

        .nav-tabs .nav-item:first-child .nav-link {
            border-radius: 4px 0 0 0; }

        .nav-tabs .nav-item:last-child .nav-link {
            border-radius: 0 4px 0 0; }

        .nav-tabs.nav-tabs-vertical, .nav-tabs.nav-tabs-vertical-custom {
            border-bottom: 0; }
        .nav-tabs.nav-tabs-vertical .nav-link.active, .nav-tabs.nav-tabs-vertical-custom .nav-link.active {
            border-bottom-color: #2c2e33; }
        .nav-tabs.nav-tabs-vertical .nav-item:first-child .nav-link, .nav-tabs.nav-tabs-vertical-custom .nav-item:first-child .nav-link {
            border-radius: 4px 4px 0 0; }
        .nav-tabs.nav-tabs-vertical .nav-item:last-child .nav-link, .nav-tabs.nav-tabs-vertical-custom .nav-item:last-child .nav-link {
            border-radius: 0 0 4px 4px; }

        .nav-tabs.nav-tabs-vertical-custom {
            background: #0090e7;
            border-radius: 4px; }
        .nav-tabs.nav-tabs-vertical-custom .nav-link {
            background: transparent;
            border-color: rgba(255, 255, 255, 0.2);
            color: #00314e;
            font-weight: 700;
            padding: 1.75rem; }
        .nav-tabs.nav-tabs-vertical-custom .nav-link.active {
            color: #ffffff;
            border-color: rgba(255, 255, 255, 0.2); }

        .nav-pills {
            border-bottom: 1px solid #2c2e33;
            padding-bottom: 1rem; }
        .nav-pills .nav-link {
            border: 1px solid #2c2e33;
            padding: .5rem 1.5rem; }
        @media (max-width: 576px) {
            .nav-pills .nav-link {
                padding: 0.3rem 0.5rem; } }
        .nav-pills .nav-item {
            margin-right: 1rem; }
        @media (max-width: 576px) {
            .nav-pills .nav-item {
                margin-right: 0.5rem;
                font-size: 0.675; } }
        .nav-pills.nav-pills-vertical {
            border-bottom: 0; }
        .nav-pills.nav-pills-vertical .nav-item {
            margin-right: 0;
            margin-bottom: 1rem; }
        .nav-pills.nav-pills-custom {
            border-bottom: 0; }
        .nav-pills.nav-pills-custom .nav-link {
            border-radius: 20px;
            padding: .5rem 2.5rem;
            background: #8489ab;
            color: #000; }
        @media (max-width: 576px) {
            .nav-pills.nav-pills-custom .nav-link {
                padding: .3rem .5rem; } }
        .nav-pills.nav-pills-custom .nav-link.active {
            background: #fc424a;
            color: #ffffff; }

        /* gradient pills */
        .nav-pills-primary .nav-link {
            color: #0090e7; }
        .nav-pills-primary .nav-link.active {
            background: #0090e7; }

        .nav-pills-secondary .nav-link {
            color: #e4eaec; }
        .nav-pills-secondary .nav-link.active {
            background: #e4eaec; }

        .nav-pills-success .nav-link {
            color: #00d25b; }
        .nav-pills-success .nav-link.active {
            background: #00d25b; }

        .nav-pills-info .nav-link {
            color: #8f5fe8; }
        .nav-pills-info .nav-link.active {
            background: #8f5fe8; }

        .nav-pills-warning .nav-link {
            color: #ffab00; }
        .nav-pills-warning .nav-link.active {
            background: #ffab00; }

        .nav-pills-danger .nav-link {
            color: #fc424a; }
        .nav-pills-danger .nav-link.active {
            background: #fc424a; }

        .nav-pills-light .nav-link {
            color: #ffffff; }
        .nav-pills-light .nav-link.active {
            background: #ffffff; }

        .nav-pills-dark .nav-link {
            color: #0d0d0d; }
        .nav-pills-dark .nav-link.active {
            background: #0d0d0d; }

        .tab-content {
            border: 1px solid #2c2e33;
            border-top: 0;
            padding: 2rem 1rem;
            text-align: justify; }
        .tab-content.tab-content-vertical {
            border-top: 1px solid #2c2e33; }
        .tab-content.tab-content-vertical-custom {
            border: 0;
            padding-top: 0; }
        .tab-content.tab-content-custom-pill {
            border: 0;
            padding-left: 0; }

        /* Tabs */
        .add-items {
            margin-bottom: 1.5rem;
            overflow: hidden; }
        .add-items input[type="text"] {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            width: 100%;
            background: transparent; }
        .add-items .btn, .add-items .fc button, .fc .add-items button, .add-items .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .add-items .ajax-file-upload, .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .add-items .swal2-styled, .add-items .wizard > .actions a, .wizard > .actions .add-items a {
            margin-left: .5rem; }
        .rtl .add-items .btn, .rtl .add-items .fc button, .fc .rtl .add-items button, .rtl .add-items .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .rtl .add-items .ajax-file-upload, .rtl .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .rtl .add-items .swal2-styled, .rtl .add-items .wizard > .actions a, .wizard > .actions .rtl .add-items a {
            margin-left: auto;
            margin-right: .5rem; }

        .list-wrapper {
            height: 100%;
            max-height: 100%; }
        .list-wrapper ul {
            padding: 0;
            text-align: left;
            list-style: none;
            margin-bottom: 0; }
        .list-wrapper ul li {
            font-size: .9375rem;
            padding: .8rem 0;
            border-bottom: 1px solid #2c2e33; }
        .list-wrapper ul li:first-child {
            border-bottom: none; }
        .list-wrapper ul li .form-check {
            max-width: 90%;
            margin-top: .25rem;
            margin-bottom: .25rem; }
        .list-wrapper input[type="checkbox"] {
            margin-right: 15px; }
        .list-wrapper .remove {
            cursor: pointer;
            font-size: 1.125rem;
            font-weight: 600;
            width: 1.25rem;
            height: 1.25rem;
            line-height: 20px;
            text-align: center; }
        .list-wrapper .completed {
            text-decoration: line-through;
            text-decoration-color: #0090e7; }

        /*-------------------------------------------------------------------*/
        /* === Email === */
        /*-------------------------------------------------------------------*/
        /* === Plugin overrides === */
        /* Ace Editor */
        .ace_editor {
            margin: auto;
            height: 300px;
            width: 100%;
            font: 14px/normal SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }
        .ace_editor .ace_content {
            font-size: 0.875rem; }

        /* Avgrund Popup */
        .avgrund-popin {
            position: absolute;
            background: #fff;
            padding: 37px 33px;
            overflow: hidden;
            visibility: hidden;
            opacity: 0;
            filter: alpha(opacity=0);
            top: 50%;
            left: 50%;
            z-index: 1000;
            font-size: 0.875rem;
            font-weight: normal;
            font-weight: initial;
            line-height: 1.85;
            border-radius: 10px;
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -ms-transform: scale(0.8);
            -o-transform: scale(0.8);
            transform: scale(0.8); }
        .avgrund-popin p {
            font-size: 0.875rem;
            font-weight: normal;
            font-weight: initial; }

        .avgrund-overlay {
            background: #000;
            width: 100%;
            position: fixed;
            top: 0px;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 101;
            visibility: hidden;
            opacity: 0;
            filter: alpha(opacity=0); }

        body.avgrund-ready,
        .avgrund-ready .avgrund-popin,
        .avgrund-ready .avgrund-overlay {
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            -webkit-transition: 0.3s all ease-out;
            -moz-transition: 0.3s all ease-out;
            -ms-transition: 0.3s all ease-out;
            -o-transition: 0.3s all ease-out;
            transition: 0.3s all ease-out; }

        body.avgrund-active {
            overflow: hidden; }

        .avgrund-active .avgrund-popin {
            visibility: visible;
            opacity: 1;
            filter: alpha(opacity=100);
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1); }

        .avgrund-active .avgrund-overlay {
            visibility: visible;
            opacity: .5;
            filter: alpha(opacity=50);
            height: 20000px; }

        .avgrund-popin.stack {
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5); }

        .avgrund-active .avgrund-popin.stack {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1); }

        /* Optional close button styles */
        .avgrund-close {
            display: block;
            color: #fff;
            background: #ffffff;
            font-size: 10px;
            text-decoration: none;
            text-transform: uppercase;
            position: absolute;
            top: 10px;
            right: 10px;
            height: 17px;
            width: 17px;
            text-align: center;
            line-height: 16px;
            border-radius: 50px; }
        .avgrund-close:hover {
            color: #fff;
            text-decoration: none; }

        /* Chartist */
        .ct-series-a .ct-line {
            stroke: #a29afc;
            stroke-width: 3px;
            stroke-dasharray: 10px 20px; }

        .ct-series-a .ct-point {
            stroke: #6355f9;
            stroke-width: 10px;
            stroke-linecap: round; }

        .ct-series-b .ct-line {
            stroke: #80d691;
            stroke-width: 3px;
            stroke-dasharray: 10px 20px; }

        .ct-series-b .ct-point {
            stroke: #4ac462;
            stroke-width: 10px;
            stroke-linecap: round; }

        .ct-series-c .ct-line {
            stroke: #f7cb9b;
            stroke-width: 3px;
            stroke-dasharray: 10px 20px; }

        .ct-series-c .ct-point {
            stroke: #f2a859;
            stroke-width: 10px;
            stroke-linecap: round; }

        .ct-series-a .ct-bar {
            stroke: #a29afc;
            stroke-width: 20px;
            stroke-dasharray: 0;
            stroke-linecap: squre; }

        .ct-series-b .ct-bar {
            stroke: #80d691;
            stroke-width: 20px;
            stroke-dasharray: 0;
            stroke-linecap: squre; }

        .ct-series-c .ct-bar {
            stroke: #f7cb9b;
            stroke-width: 20px;
            stroke-dasharray: 0;
            stroke-linecap: squre; }

        .ct-series-d .ct-bar {
            stroke: #fcb2b2;
            stroke-width: 20px;
            stroke-dasharray: 0;
            stroke-linecap: squre; }

        .ct-series-a .ct-slice-pie {
            fill: #a29afc;
            stroke-width: 4px; }

        .ct-series-b .ct-slice-pie {
            fill: #80d691;
            stroke-width: 4px; }

        .ct-series-c .ct-slice-pie {
            fill: #fcb2b2;
            stroke-width: 4px; }

        .ct-series-d .ct-slice-pie {
            fill: #f7cb9b;
            stroke-width: 4px; }

        .ct-series-a .ct-slice-donut-solid {
            fill: #a29afc; }

        .ct-series-b .ct-slice-donut-solid {
            fill: #80d691; }

        .ct-series-c .ct-slice-donut-solid {
            fill: #fcb2b2; }

        .ct-series-a .ct-slice-donut-solid {
            fill: #f7cb9b; }

        #ct-chart-dash-barChart .ct-series-a .ct-bar {
            stroke: #fb9999;
            stroke-width: 20px;
            stroke-dasharray: 0;
            stroke-linecap: squre; }

        #ct-chart-dash-barChart .ct-series-b .ct-bar {
            stroke: #8b81fb;
            stroke-width: 20px;
            stroke-dasharray: 0;
            stroke-linecap: squre; }

        #ct-chart-dash-barChart .ct-series-c .ct-bar {
            stroke: #a29afc;
            stroke-width: 20px;
            stroke-dasharray: 0;
            stroke-linecap: squre; }

        #ct-chart-dash-barChart .ct-series-d .ct-bar {
            stroke: #b9b3fc;
            stroke-width: 20px;
            stroke-dasharray: 0;
            stroke-linecap: squre; }

        .ct-grid {
            stroke: rgba(255, 255, 255, 0.2); }

        .ct-labels span {
            color: #d9e9ff; }

        .c3-axis,
        .c3-legend-item {
            fill: rgba(255, 255, 255, 0.7); }

        .c3 path,
        .c3 line {
            stroke: #2e2f32; }

        .c3-chart-arcs-title {
            fill: rgba(255, 255, 255, 0.7); }

        /* CodeMirror */
        .CodeMirror {
            font-size: 0.875rem;
            font-weight: normal;
            height: auto;
            text-align: left;
            min-height: auto; }

        .CodeMirror-scroll {
            min-height: auto; }

        /* Colcade */
        * {
            box-sizing: border-box; }

        .grid {
            border: 1px solid #aab2bd est; }

        .grid:after {
            display: block;
            content: '';
            clear: both; }

        .grid-col {
            float: left;
            width: 49%;
            margin-right: 2%;
            background: rgba(0, 144, 231, 0.2); }

        .grid-col--4 {
            margin-right: 0; }

        /* hide two middle */
        .grid-col--2, .grid-col--3 {
            display: none; }

        @media (min-width: 768px) {
            .grid-col {
                width: 32%; }
            .grid-col--2 {
                display: block; } }

        @media (min-width: 1200px) {
            .grid-col {
                width: 23.5%; }
            .grid-col--2, .grid-col--3 {
                display: block; } }

        .grid-item {
            background: #0090e7;
            margin-bottom: 20px; }

        .grid-item--a {
            height: 80px; }

        .grid-item--b {
            height: 140px; }

        .grid-item--c {
            height: 300px; }

        /* Colorpicker */
        .asColorPicker-dropdown {
            max-width: initial; }

        .asColorPicker-trigger {
            height: auto;
            border: 0; }
        .asColorPicker-trigger span {
            border-radius: 2px;
            width: 35px; }

        /* Context Menu */
        .context-menu-icon:before {
            color: #000;
            font: normal normal normal 15px/1 "Material Design Icons"; }

        .context-menu-icon.context-menu-icon-cut:before {
            content: '\F190'; }

        .context-menu-icon.context-menu-icon-edit:before {
            content: '\F3EF'; }

        .context-menu-icon.context-menu-icon-copy:before {
            content: '\F18F'; }

        .context-menu-icon.context-menu-icon-paste:before {
            content: '\F613'; }

        .context-menu-icon.context-menu-icon-delete:before {
            content: '\F6CB'; }

        .context-menu-icon.context-menu-icon-quit:before {
            content: '\F156'; }

        .context-menu-list {
            box-shadow: none;
            border: 1px solid #2c2e33; }
        .context-menu-list .context-menu-item span {
            color: #000;
            font-size: .75rem;
            font-weight: 700; }
        .context-menu-list .context-menu-item.context-menu-hover {
            background: #000; }
        .context-menu-list .context-menu-item.context-menu-hover span {
            color: #ffffff; }

        /* Data Tables */
        .dataTables_wrapper {
            padding-left: 0;
            padding-right: 0; }
        .dataTables_wrapper label {
            font-size: .8125rem; }
        .dataTables_wrapper select {
            padding: .4rem; }
        .dataTables_wrapper .dataTables_length select {
            min-width: 65px;
            margin-left: .25rem;
            margin-right: .25rem; }
        .dataTables_wrapper .dataTable .btn, .dataTables_wrapper .dataTable .fc button, .fc .dataTables_wrapper .dataTable button, .dataTables_wrapper .dataTable .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .dataTables_wrapper .dataTable .ajax-file-upload, .dataTables_wrapper .dataTable .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper .dataTable .swal2-styled, .dataTables_wrapper .dataTable .wizard > .actions a, .wizard > .actions .dataTables_wrapper .dataTable a {
            padding: 0.1rem 1rem;
            vertical-align: top; }
        .dataTables_wrapper .dataTable thead th {
            border-bottom-width: 0; }
        .dataTables_wrapper .dataTable thead .sorting:before, .dataTables_wrapper .dataTable thead .sorting:after,
        .dataTables_wrapper .dataTable thead .sorting_asc:before,
        .dataTables_wrapper .dataTable thead .sorting_asc:after,
        .dataTables_wrapper .dataTable thead .sorting_desc:before,
        .dataTables_wrapper .dataTable thead .sorting_desc:after,
        .dataTables_wrapper .dataTable thead .sorting_asc_disabled:before,
        .dataTables_wrapper .dataTable thead .sorting_asc_disabled:after,
        .dataTables_wrapper .dataTable thead .sorting_desc_disabled:before,
        .dataTables_wrapper .dataTable thead .sorting_desc_disabled:after {
            line-height: 2.5;
            font-family: Material Design Icons;
            font-size: .65rem; }
        .dataTables_wrapper .dataTable thead .sorting:before,
        .dataTables_wrapper .dataTable thead .sorting_asc:before,
        .dataTables_wrapper .dataTable thead .sorting_desc:before,
        .dataTables_wrapper .dataTable thead .sorting_asc_disabled:before,
        .dataTables_wrapper .dataTable thead .sorting_desc_disabled:before {
            content: "\F05D";
            right: 1.2em; }
        .dataTables_wrapper .dataTable thead .sorting:after,
        .dataTables_wrapper .dataTable thead .sorting_asc:after,
        .dataTables_wrapper .dataTable thead .sorting_desc:after,
        .dataTables_wrapper .dataTable thead .sorting_asc_disabled:after,
        .dataTables_wrapper .dataTable thead .sorting_desc_disabled:after {
            content: "\F045";
            right: 0.2em; }
        .dataTables_wrapper .dataTables_paginate {
            margin-top: 20px; }
        .dataTables_wrapper .dataTables_info {
            font-size: 0.875rem; }

        /* Datepicker */
        .datepicker.datepicker-dropdown,
        .datepicker.datepicker-inline {
            padding: 0 25px;
            width: 30%;
            max-width: 500px;
            min-width: 250px; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th {
            text-align: center;
            padding: .5rem 0; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.prev,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.prev {
            color: #434a54;
            padding-bottom: 1rem;
            padding-top: 1rem;
            text-align: left; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.datepicker-switch,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.datepicker-switch {
            color: #434a54;
            padding-bottom: 1rem;
            padding-top: 1rem;
            font-size: 1rem;
            font-weight: 600; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.next,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.next {
            color: grey;
            padding-bottom: 1rem;
            padding-top: 1rem;
            text-align: right; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.dow,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.dow {
            font-weight: normal;
            color: #434a54;
            font-size: .875rem;
            font-weight: initial; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.dow:first-child,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.dow:first-child {
            text-align: left; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.dow:last-child,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.dow:last-child {
            text-align: right; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody {
            position: relative;
            top: 13px; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td {
            text-align: center; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day {
            font-size: .9375rem;
            padding: .5rem 0;
            color: #434a54; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day:hover,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day:hover {
            background: #ffffff; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.active,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.active {
            color: #fff;
            background: transparent;
            position: relative;
            z-index: 1; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.active:before,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.active:before {
            content: "";
            width: 38px;
            height: 38px;
            background: #00d25b;
            border-radius: 100%;
            display: block;
            margin: auto;
            vertical-align: middle;
            position: absolute;
            top: 1px;
            z-index: -1;
            left: 0;
            right: 0; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.today,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.today {
            color: #fff;
            background: transparent;
            position: relative;
            z-index: 1; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.today:before,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.today:before {
            content: "";
            width: 38px;
            height: 38px;
            background: #8f5fe8;
            border-radius: 100%;
            display: block;
            margin: auto;
            vertical-align: middle;
            position: absolute;
            top: 1px;
            z-index: -1;
            left: 0;
            right: 0; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.old.day,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.old.day {
            color: #d9dde3; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-start, .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-end,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-start,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-end {
            background: transparent;
            position: relative; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-start::before, .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-end::before,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-start::before,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-end::before {
            content: "";
            width: 28px;
            height: 28px;
            background: rgba(0, 210, 91, 0.2);
            border-radius: 4px;
            display: block;
            margin: auto;
            vertical-align: middle;
            position: absolute;
            top: 6px;
            z-index: -1;
            left: 0;
            right: 0; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range {
            position: relative;
            background: transparent; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range::before,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range::before {
            content: "";
            width: 28px;
            height: 28px;
            background: #eee;
            border-radius: 4px;
            display: block;
            margin: auto;
            vertical-align: middle;
            position: absolute;
            top: 6px;
            z-index: -1;
            left: 0;
            right: 0; }
        .datepicker.datepicker-dropdown .datepicker-days,
        .datepicker.datepicker-dropdown .datepicker-months,
        .datepicker.datepicker-dropdown .datepicker-years,
        .datepicker.datepicker-dropdown .datepicker-decades,
        .datepicker.datepicker-dropdown .datepicker-centuries,
        .datepicker.datepicker-inline .datepicker-days,
        .datepicker.datepicker-inline .datepicker-months,
        .datepicker.datepicker-inline .datepicker-years,
        .datepicker.datepicker-inline .datepicker-decades,
        .datepicker.datepicker-inline .datepicker-centuries {
            padding: .8rem .7rem; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed,
        .datepicker.datepicker-dropdown .datepicker-months table.table-condensed,
        .datepicker.datepicker-dropdown .datepicker-years table.table-condensed,
        .datepicker.datepicker-dropdown .datepicker-decades table.table-condensed,
        .datepicker.datepicker-dropdown .datepicker-centuries table.table-condensed,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed,
        .datepicker.datepicker-inline .datepicker-months table.table-condensed,
        .datepicker.datepicker-inline .datepicker-years table.table-condensed,
        .datepicker.datepicker-inline .datepicker-decades table.table-condensed,
        .datepicker.datepicker-inline .datepicker-centuries table.table-condensed {
            width: 100%; }

        .datepicker.datepicker-inline {
            width: 100%;
            max-width: 100%;
            min-width: 250px; }
        .datepicker.datepicker-inline thead tr th.prev {
            color: grey;
            padding-bottom: 0.5rem;
            padding-top: 0.5rem; }
        .datepicker.datepicker-inline thead tr th.datepicker-switch {
            color: #0090e7;
            padding-bottom: 0.5rem;
            padding-top: 0.5rem; }
        .datepicker.datepicker-inline thead tr th.next {
            color: grey;
            padding-bottom: 0.5rem;
            padding-top: 0.5rem; }

        .datepicker > div {
            display: initial; }

        .datepicker-custom {
            width: 100%;
            padding: 0; }
        .datepicker-custom .datepicker.datepicker-inline {
            display: block;
            padding: 0;
            height: 100%; }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days {
            display: block; }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td {
            padding: 1rem;
            text-align: center; }
        @media (max-width: 991px) {
            .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td {
                padding: 1rem .5rem; } }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day.today:before {
            background-color: #00d25b;
            top: 6px; }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day.active:before {
            background-color: #ffab00;
            top: 6px; }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day:first-child {
            padding-left: 2.5rem; }
        @media (max-width: 991px) {
            .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day:first-child {
                padding-left: .5rem; } }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day:first-child.today:before, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day:first-child.active:before {
            left: 1.5rem; }
        @media (max-width: 991px) {
            .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day:first-child.today:before, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day:first-child.active:before {
                left: .25rem; } }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day:last-child {
            padding-right: 2.5rem; }
        @media (max-width: 991px) {
            .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day:last-child {
                padding-right: .5rem; } }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day:last-child.today:before, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day:last-child.active:before {
            right: 1.5rem; }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries {
            height: 100%;
            padding: 0 0 1rem 0; }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed {
            height: 100%; }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead {
            background: #00d25b; }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.next, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.prev, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.datepicker-switch, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.dow,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.next,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.prev,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.datepicker-switch,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.dow,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.next,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.prev,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.datepicker-switch,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.dow,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.next,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.prev,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.datepicker-switch,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.dow,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.next,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.prev,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.datepicker-switch,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.dow {
            background: transparent;
            border-radius: 0;
            color: #ffffff;
            padding: 2rem 1rem;
            font-weight: 700; }
        @media (max-width: 991px) {
            .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.next, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.prev, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.datepicker-switch, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.dow,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.next,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.prev,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.datepicker-switch,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.dow,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.next,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.prev,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.datepicker-switch,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.dow,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.next,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.prev,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.datepicker-switch,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.dow,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.next,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.prev,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.datepicker-switch,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.dow {
                padding: 2rem .5rem; } }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.next:first-child, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.prev:first-child, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.datepicker-switch:first-child, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.dow:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.next:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.prev:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.datepicker-switch:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.dow:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.next:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.prev:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.datepicker-switch:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.dow:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.next:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.prev:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.datepicker-switch:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.dow:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.next:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.prev:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.datepicker-switch:first-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.dow:first-child {
            padding-left: 2.5rem; }
        @media (max-width: 991px) {
            .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.next:first-child, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.prev:first-child, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.datepicker-switch:first-child, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.dow:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.next:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.prev:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.datepicker-switch:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.dow:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.next:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.prev:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.datepicker-switch:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.dow:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.next:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.prev:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.datepicker-switch:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.dow:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.next:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.prev:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.datepicker-switch:first-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.dow:first-child {
                padding-left: .5rem; } }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.next:last-child, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.prev:last-child, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.datepicker-switch:last-child, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.dow:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.next:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.prev:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.datepicker-switch:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.dow:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.next:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.prev:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.datepicker-switch:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.dow:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.next:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.prev:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.datepicker-switch:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.dow:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.next:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.prev:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.datepicker-switch:last-child,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.dow:last-child {
            padding-right: 2.5rem; }
        @media (max-width: 991px) {
            .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.next:last-child, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.prev:last-child, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.datepicker-switch:last-child, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.dow:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.next:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.prev:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.datepicker-switch:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.dow:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.next:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.prev:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.datepicker-switch:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.dow:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.next:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.prev:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.datepicker-switch:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.dow:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.next:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.prev:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.datepicker-switch:last-child,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.dow:last-child {
                padding-right: .5rem; } }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.datepicker-switch,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.datepicker-switch,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.datepicker-switch,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.datepicker-switch,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.datepicker-switch {
            font-size: 2rem; }
        @media (max-width: 991px) {
            .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.datepicker-switch,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.datepicker-switch,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.datepicker-switch,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.datepicker-switch,
            .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.datepicker-switch {
                font-size: 1rem; } }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.next, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr th.prev,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.next,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr th.prev,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.next,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr th.prev,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.next,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr th.prev,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.next,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr th.prev {
            font-size: 1.5rem; }

        /* Dropify */
        .dropify-wrapper {
            border: 2px dashed #2c2e33;
            background: transparent;
            border-radius: 7px; }
        .dropify-wrapper:hover {
            background-size: 30px 30px;
            background-image: -webkit-linear-gradient(135deg, #2e2f32 25%, transparent 25%, transparent 50%, #2e2f32 50%, #2e2f32 75%, transparent 75%, transparent);
            background-image: linear-gradient(135deg, #2e2f32 25%, transparent 25%, transparent 50%, #2e2f32 50%, #2e2f32 75%, transparent 75%, transparent);
            -webkit-animation: stripes 2s linear infinite;
            animation: stripes 2s linear infinite; }
        .dropify-wrapper .dropify-message span.file-icon:before {
            display: inline-block;
            font: normal normal normal 24px/1 "Material Design Icons";
            font-size: inherit;
            text-rendering: auto;
            line-height: inherit;
            -webkit-font-smoothing: antialiased;
            content: '\F552';
            color: #ffffff;
            font-size: 1.25rem; }
        .dropify-wrapper .dropify-message p {
            font-size: .8125rem;
            color: #ffffff; }
        .dropify-wrapper .dropify-preview .dropify-infos {
            background: rgba(255, 255, 255, 0.9); }
        .dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner .dropify-filename {
            color: #0090e7;
            font-size: 20px;
            font-weight: 400; }
        .dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner .dropify-infos-message {
            color: #333;
            font-weight: 500; }
        .dropify-wrapper .dropify-preview .dropify-render img {
            opacity: 0.7; }
        .dropify-wrapper .dropify-clear {
            background: #fff;
            border: none;
            font-weight: 700;
            color: #434a54; }

        /* Dropzone */
        .dropzone {
            border: 1px solid #2c2e33;
            min-height: 200px;
            background: transparent; }
        .dropzone .dz-message {
            text-align: center;
            width: 100%; }
        .dropzone .dz-message span {
            font-size: .8125rem;
            color: #ffffff; }
        .dropzone .dz-preview {
            margin: 5px; }
        .dropzone .dz-preview .dz-image {
            width: 63px;
            height: 63px;
            border-radius: 6px; }
        .dropzone .dz-preview .dz-error-message {
            top: 80px;
            left: -35px; }
        .dropzone .dz-preview .dz-success-mark,
        .dropzone .dz-preview .dz-error-mark {
            margin-left: -17px; }
        .dropzone .dz-preview .dz-success-mark svg,
        .dropzone .dz-preview .dz-error-mark svg {
            width: 35px;
            height: 35px; }

        /* Flot chart */
        .flot-chart-container {
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            min-height: 300px;
            max-height: 100%; }

        .flot-chart {
            width: 100%;
            position: relative;
            max-width: none;
            height: 400px; }
        .flot-chart canvas {
            position: absolute;
            top: 0;
            bottom: 0; }

        /* Full Calendar */
        .fc button {
            height: auto;
            background-image: none;
            text-shadow: none;
            font-weight: normal;
            background-color: #ffffff;
            border-color: #2c2e33;
            text-transform: capitalize;
            color: #a8b2b9; }
        .fc button .fc-icon-right-single-arrow:after,
        .fc button .fc-icon-left-single-arrow:after {
            color: #a8b2b9;
            font: normal normal normal 20px/1 "Material Design Icons"; }
        .fc button .fc-icon-right-single-arrow:after {
            content: "\F142"; }
        .fc button .fc-icon-left-single-arrow:after {
            content: "\F141"; }

        .fc .fc-button-group .fc-button {
            background-color: #ffffff;
            margin: 0; }
        .fc .fc-button-group .fc-button.fc-state-active {
            color: #fc424a; }

        .fc .fc-header-toolbar {
            margin-top: 2rem; }
        .fc .fc-header-toolbar .fc-center h2 {
            font-size: 1rem; }

        .fc .fc-widget-header {
            border: 0; }
        .fc .fc-widget-header table tr th {
            border-width: 0 0 1px 0;
            text-align: right;
            padding: 1rem; }
        .fc .fc-widget-header table tr th span {
            font-size: 10px;
            text-transform: uppercase;
            color: #a8b2b9;
            letter-spacing: 1px; }

        .fc .fc-content-skeleton table tr td {
            padding: .5rem;
            font-size: .875rem; }

        .fc .fc-event {
            border: 0;
            color: #ffffff;
            padding: .5rem; }
        .fc .fc-event.fc-start {
            background: #0090e7;
            border-radius: 4px;
            border-left: 4px solid #0090e7; }
        .fc .fc-event.fc-not-start, .fc .fc-event.fc-not-end {
            background: #fc424a;
            border-left: 4px solid #fc424a;
            padding-left: .5rem; }
        .fc .fc-event.fc-not-end {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0; }
        .fc .fc-event .fc-title,
        .fc .fc-event .fc-time {
            color: #ffffff; }

        .fc-external-events .fc-event {
            background: #191c24;
            color: #ffffff;
            border-width: 0 0 0 4px;
            padding: 16px;
            border-radius: 0;
            margin-bottom: 10px; }
        .fc-external-events .fc-event:nth-child(1) {
            border-color: #0090e7; }
        .fc-external-events .fc-event:nth-child(2) {
            border-color: #fc424a; }
        .fc-external-events .fc-event:nth-child(3) {
            border-color: #00d25b; }
        .fc-external-events .fc-event:nth-child(4) {
            border-color: #8f5fe8; }
        .fc-external-events .fc-event:nth-child(4) {
            border-color: #ffab00; }

        .fc-unthemed tbody td {
            border-color: #2c2e33; }

        /* Google Charts */
        .google-chart-container .google-charts {
            width: 100%;
            height: 280px;
            min-height: 280px;
            min-width: 100%; }

        /* Icheck */
        .icheck,
        .icheck-flat,
        .icheck-square,
        .icheck-line {
            margin-bottom: .5rem; }
        .icheck label,
        .icheck-flat label,
        .icheck-square label,
        .icheck-line label {
            font-size: .8125rem;
            line-height: 1.5;
            margin-left: 5px;
            margin-bottom: 0; }

        /* Jquery File Upload */
        .ajax-upload-dragdrop {
            border-color: #2c2e33;
            border-style: dotted;
            max-width: 100%; }
        .ajax-upload-dragdrop span b {
            font-size: .8125rem;
            color: #ffffff;
            font-weight: initial; }
        .ajax-upload-dragdrop .ajax-file-upload {
            background: #8f5fe8;
            box-shadow: none;
            height: auto; }

        .ajax-file-upload-container {
            min-height: 100px; }
        .ajax-file-upload-container .ajax-file-upload-statusbar {
            max-width: 100%; }

        /* Js-grid */
        .jsgrid .jsgrid-button {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAFgEAYAAADx4WWjAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAZjElEQVR42u2deVyU1f7HzzyzDzCA7MgihCsY7uYOiZIamebVFl/Wy8zSxLTQuld/lmIuCGIu9cruLa9lXlNTUQsVUgQRNBbZF5F9lWEbZpj9/P74doQZ87LMDHjvPe9/vj7MPOf5fp6zjc/3e86D0H8rNTVRUd988/rrxpZTV3f48PHjixb1m+N5eVOmvP76hQtXryKEEMYVFWFhERG7dvW2nIKC4OBVq/71L1JOWdk774SHb9tmcoc1mpaWtjYLi6Ki+fPff/+f/7x2DS6YlobQpEkYJyQgxOViXFGxYUNExN693ZVXWDh//urV339/8yZCQiGUM3EixqTcqqq//e3gwQ8+MJkAnU6tVqvZbKk0KSkj47nnfv/d2nrcOInk1i2EHBw6HSBCyss3btyz53Eh4PiJEwkJCAkEGKenIzRlCsaJiQhZW2OcmentHRhYUCCX5+Tcv+/nZ/KaIKjVlZUSibPz3bu2tv7+jY1JSQjZ22P8++8ITZiA8c2bCIlEGNfU7Njx9dcbN5aXv/fe55/v2kXueFfHrawwzsjw8po1Kz9fp5PJVCoOx9T+sp4spLq6qcnJKTPTzy8wMDtbpWpurqlxcBAIEPL2RkihQKi8HCEWCyEOByGBACEPD4RkMoSysxGyshoxYtKkvLxnn83IiI3192cYoZDL1WjMduefhEbT2Njebm2dnT1x4sKFt26lpCDk7Q01Mm5cp719GyEPD4zz8+fNe/PNixcx1moxZhhz+9ftBTgce3tLy9ZWodDT08enqEirRUguh89YrE6r1SLU3o6QWDx27HPP3bjBYrHZLJZO1+933JDCwnnzVq8+eZJ0xvR0hKZNwzg5GSF3d4xJjXRt+2IxxpWVYWFRUX/964A5npc3e/aKFT/+aNg5k5IQsrPDOC9v/PjXX09Nzcpyc3vhhbKy5GSEXFygSY0fD6MWj4dxRcWmTZGRW7b0m+P5+dOnr1jx00+Gw+HNmwhZWmKcmTliRFBQdjb5vlrd1NTSYm2dmsrnDx0qlycnI+TsrC9EIMC4ouKDDyIitm41ucNqtUTS3GxlVVQ0f/66dZ0TWUYGQjNmQJPo6rhOp1RqtWy2YTkKRUFBVdXQoampPN7QoR0dt26BkPR0hCZPxpjMyDCRbdxoMgE6nUqlVnO5UmlSUmbmtGl374rFY8c2NcXFwQXv3RsxIigoKwtjpVKr7X5UUSgKCiorfXxSU0Wi4cOl0vh4KCcz08srMPD+fbk8O7u4+NlnTV4ThI6OrKzS0qFDc3JCQpYuPX1ap+vo0Ggev+PdIZPduVNY6O+flRUUFBLyyy9arVSqUAiFZnPcEI2mrq611cbG2HJUqrKyhgZX135znEKhUCgUCoVCoVAoFAqFQvlP4FGIyd//wIGYGPL0eOFCsOSRooWF/jHG3RT7R7kkwNHeDpY8W7106d69DRteesn4p9UGQbdZs8BOmAD26FGwajVYS8veFd/RAZbExtatA6tUgjW5gFdfBXv4MFhnZ7hTpEZ6D9TsiRNwFBsL9u23jXWc8FiUEi5IwqFlZWBLSkAIqaGeOn7uHBzNnAl2yBAoRyo1lYDHnvfDBUiV+/qCfeYZcOjs2Z45/s03cBQQAHbUKFM7TmB19wVwyNMTjlJSwCYlgW1tBUtqjM8HGxwMdsYMcDw319SOE7qNuIAD5eVwtGwZ2CVLwFpbgyU1RvrQypXmdrzHAvQhTaCoCOzy5eDoqlVwnJEBtqnJ3I73UQAJEQkEYG1t9T8nf++/UJKRqQBsNvSR3sfQBkiASPTHaX+cV1sLTUirhWNWt4PCAAuorQU7aBDYpUv1P5fJwJo+rcZoAfqjyvvvgz18GJpQXh4cjxkD1vTjvdEC9IUcOwZHZDglwyyEtREqLu4vARQKhUKhUCgUCoVCoVAoFMp/JL1+GAuLe0isbM8esCScum/fhAkIpaWdP9/vAsCxyEg4mjsX7MOHYA2XEE6ZAtbKSv/vJBx786b+eVwuWEdHsHFxINT4xUAGT5G9vMA6O4NtbgZrbw+WPJVOTARLHrMTS+LC48aBbWsD29gI1sFB/zrGYyCAhIpIXJgE927fBktCSCtXgv31V/07v3gx2DVrwA4dCjYwEOzp02DPnDGTAJJSQCLq48eDhdVlCB05Apa0fdKESFxg506wOTlgSVDwtdfAkiaZkAC2vt5YAQaP10kA4949/b8/KcWARGQMAxrk76TJEFJTwVZWGuv4YwKgU5FQEYn/EkjwjrRxQwyTP8ioRM4j1NTAdQzLN4EAfVpa9I9JDSgUYEmb77ogtyvkcxL4Jpg+cvMEASTiQiBtndQQEWIogNQE+Zz0KYLp48dPEFBSon9MhlUS/yXDIhk+iQDSxFQqsGKxfjkkQG52AWT8N1yRTZYmks8N5wHSREjc2MlJ/3zTdd5uBJBF54Zt1s4OLJmgyJ0nAkjNkBwKMgOTpkfOM7sAMkoYdmYyqvzZqvquDhKhBJJy9qRRzIQCYJgjna2qSv9TMk+QpkCakkSi/33iMIFMWGQiMx3dRNQNL0gi825uYEeNAks6rYsL2Dfe0D+PjP9kxu43Afn5YOfNAxsSApYMk6SzkiZE/u7tDZb8GjWc2SkUCoVCoVAoFAqFQqFQKBTjMNuiHViaMmQIHJFNgqOjYQVIRcVTKwAcJ2swydJFEuEhi0sDAvRXCPYdk20pC46TQAiJIxgG/0iN/PILfN/DY8AF6C8WTU8Hu3YtWPIQ2HBNJXko/MMPxl6/z+u9wHGSOhATA5Y8nSZbnhcWgiXLch88AEtibl9/bayAXvcBcHzwYDgiKQfdpQ6Q9cW//AKWy4U+QCL3/SAAHCc5EyRyTxa+9RQfH3DcMIjYd7ptQvqdjaQIkM7YHSQ2tmSJqR3vVgA4TqKMpI331HHCokXg+MWLpnb8iQL0R5UbN/rm+MKF5nacYLAxBgkVVVeDJaNKT1m8GBwnuxmYH7b+cEi21ScB7qlT//3ppI2TO06aWv/xx0Tm7g72wgWwZCOLjz7689NITgS545cu9bfjBI6+Q6TTkt8wpEZIqtknn4B95ZWBuuOG/FEDZC8VAo8HliRnkJ8IU6eC46SmBp4/aoC0ebKnyq1bYElKQWEhOE5+GlAoFAqFQqFQKBQKhUKhUCgDi8nCrKdOFRffuTN+/LJlMTEREdevIyQUkuAqPPPu6JBKEbp6ddmy7dtDQubOdXPz9SUBk75jsk0dWSwWi8Xi8xFiGDbbygpsVwFwzGIhxGIZLpB7CgQAGg1CGMOjYmIJXY/JmhvjMfu7U80NFTDQUAEEnc6w0/6HCfDyEovt7auru442+oJ0Oq0WITc3CwtbW7Kk0Xg4P/10//6dO7D4n8Uiq097/mJkPp/N5nC02t9+q6rKzx89GiGBgIzyMP6zWGB5PKEQoZMni4tTUwMCLl4sLc3MFAg6OrRatbrn2z5DTTMMl8swDKNUshCKilqyBOPOiae3TYE4yGZDdpBAALkoGOvfBhYLFu12dMCaV6iR3l+PnMflCgQdHRyY8lUqEMDj9b5A8m0ixNDxzu/B36EmOq/T272qQQCbzeUKhUolB4oATX3b9rr3Z5Gm1Sm99+fDOVotB35kCYXGNyFyvlBImhD5BrnT0IRUKlhtbFwT0mi0Wo1m0CDWtWuVlbm5s2aBI2TRf8/fJ8/lMgybrVbn5zc319b6+a1Zc/36t98ePtzZJ4jjSqVcjlBExKxZK1Zs3jxpkqOjl9edO2q1TqfVksGjezDGGGMOh81msRhGJuPMmePuboqftZmZjY3l5QUFCKlUCsXhw11HI7jDarVKhVBIiKenv39MzMiRtrYuLsbHnU02D+TmNjXV1np6du2c+m2bYRgGoaoqmay5meRmGI/JBEBT+jPHzQv9LTTQUAEDjcn+Tww/srjczgmKWDJrwjHGCGFM8pGeIgHw61Au5/G4XIGgoYFhuFyBoPPXjk6n0ajVLBZMQP33hggKhUKhUCgUCoVCoVAoFAoFIYTQhx8mJHz//dq1CO3b9/LLLS0IRUQsXNjSsm3b7ds//fThh/3tT6+fzEFekK0t/Ivsbkw+M9ws2Pz04eEuxhgrlX+eF0S2rH2qBTxd9FrAk5I6GKZ/Q0uEXvcBFxdLSxuburquj9ExRsjBgc+3sGho6HcBH32UkHD8eGgoxHOFQmjThlkOGNvYCARCYXt7XFx1dUHBCy8gJBTC1vBQH2fPlpZmZISE7NiRknLmDIvV2qpSKRQWFlBeZ91AnJdhWCyGYRiZLCpq5szly8mbJXoPC6F9+xYuxBghFotE6v8810Gng78LBJBOKRLpj0FyOWx4rlBAJB7Cqo9DymcYCG+HhZ092/fGx3k8v+dJof/HR50/vyxxsOt9//flGANn27bp05cv37wZxnUSWyepBp0vRrCzEwgsLEgTCgq6eLGkJC1twQIiPDjY03PMmCtX5s718Bg16sqVtjalsqNDJAInSV3AkU7H4bBYLBab3d6+fTtCP/9svJAeExWVlnbx4vLlCO3Z8+KLGCO0e/eCBRgfOZKRERv77rv96ArUQG9PKC9va5NInJ07kzmgKdTXKxRSKdmfov/o9TzA4zFM/72F3gwCIEw60G530ut7CeO4QNB1tOkcVQzfO/MUCmCzGYbNbmyEcby1lQhgGIZhsfp/JqZQKBQKhUKhUCgUCoVCofxv0uPAQmNjW1tbm5NTfX1ra3Pzyy9LJFKpVDp9Oiy/cnXV6XQ6na69ncfj8bjcjAw7O0tLK6vz5729nZ1dXDIzzSWg2ydzKSlFRfn5lpbNzTKZVLpwYUtLe3t7+xtvqFQajUYzdqxWi5BOZ2mJMUTN1GqdTqcjb0cXiUpL6+vr6trbvbycnJyd79/vtxqorJRIHj4cOTI7u7y8rOz0aY1Gq9VqfX0h0I0Ql8tmczgPH8Kz0oICCIU4OkIUc/hwEIgQj8fhcDgajY+Pi4uLyzvvDBvm6urmduyYqQQ89nS6rq6lpalpzJi8vMrKioq4OHDI11ck4vEEghs3LCz4fIFgzhxwzNNz3rxx4yZMmDmTx+NyudyRIwUCHo/HGz5cLBaJRKIjR0AuhwM34rvvSkrq6mprN240Ww1cuZKenpaWmalUajQajb+/lZVQKBB8+WVg4OjR/v7vv9/bC1y/np19797LL0ON/PxzR4darVKxWFOnDh8+cuS0aY6O1tY2NsnJfa4BuVyhUCjc3cvLGxrq69evl8tVKqXS318k4vN5vOvX++o4Ac4/fx5q7IMPSHShpKS2trZ23z5ja4ApL29sbGgIDq6qamqSSF56ic2G8CjYnTuNvYC+kEOHBAIul8stK2tr6+iQy6dOLStraKir6+17DLoIaG6WyWSyoCCFQq1Wq6dO5XI5HA6npgbu0+3bphLw6IIMwzDMtWtk1WtDQ0tLS8vEiX0uD9anOzoyDEKdK7rJjt+mzz6BUaywkAReVSqtVqcj7+TogwCtVqfT6eRyksQBw6GDA3xsrnCevb3+XghqdZ8FQGdNT+dwGIZh8vNBkK8vCOnt+we6B2bsqVPBImRjIxKJRH2f4BgvLwcHJ6cLF5ydbW1tbGJjVSqtVqMhaTVhYaZyPD4+MzM9fc4cjQZjjGfOtLQUi8XikhJfXw+PIUN+/bXPAmxtraysrNLS7O3FYmvrL7+EO9/erlSq1Wp1aOj16zk5WVmQUtA3x+/dy8iwsdHptFqtNjqax3N0dHREaNiwIUO8vDZvNvbGPJqJ7eysrMTi+/dHjHBzc3ffvFmhUKlUKoRUKrVarT53Diakdevi47OyMjO73wsF7viMGRhrtVptQoKFxZgxY8b4+ra0XLp0+TJCpaV790ZEGN/Hnvhb6MGDurra2vXrc3MrKysqoqNJ0gaPx2az2ZWVMBxevgyjSlkZhFutraHpzZ4N6SKTJgkEDg4ODghJJBcvXryIUEXFRx9t2oSQTCaXy+UIBQVFRkZGrls3bVpYWFhY7/OGuv05XVvb1NTUNHFicXFtbU3NoUMKhVqtUk2eDD/iyLDY+X2MoXNaWg4aZGf34IG7u6urq2tYWE7O6tXvvhsQcPfusWPHjq1fb23t7e3tjZBUWl1dXY3QvHmHDh06tGHDhAmrV69e/cUXJhNgSFWVRNLY6OtbXS2RSCQTJqjVsEUI5GApldbWIpFIVFDg6enu7uGRlGRpyWKxWJ27msXFbdmyZcvBgykpUVFRUaGhYrG7u7s7Qm1tICQ4ODIyMnLTpokT165duzYyss9ty9xcv/7ZZ599duDAzp1CoVCIcVSUm5ubG8bkOCkpIiIiYseOgfazWxISwsPDw6Ojw8N5PB4P46iowYMHD8Z4506RSCTCODFx9+7du033m8xsgKO7du3cKRAIBBgfPOjj4+PTKeTKlbCwsLC9ewfaz25JSTl06NCh8PDwcD6fz8d49247Ozs7jD/5hM1mszHOyzt79uzZ0FC5vKGhoWHIkKcuc/e550JDQ0P/7/+Cg/fv379/yxadDuYjS0sLCwsLhLhcoVAolEoRYrPZbKVyoP19IgpFa2trq739jz+GhISEnDhx8uTixYsXHz/e0dHc3NxsazvQ/lEoFAqFQqFQKBQKhUKhUChG0U2ERiBob1cqFYp9+ySStjapdP58iGa2tdnbW1uLxTt3jhzp5ubhcfbsUyMgL6+qqqIiKKisrKGhvv7YMUg5GDwY4jFlZbDlu7W1VouxTicUWltbWFhYXL7s7m5nZ2+/dKmHh4ODo2PP319gLI8e7hYV1dRUVQUGlpc3NDQ0XLum1ep0GJeWwtLDCRMglDRsGJvNZjPM4MEcDofD4Xz4YX19S0tz8yuv1NQ0NUkksbH9XgUymULR0WFvD2k29fUxMXfupKQkJvb0/Bs3cnKysvz8zp9PTU1OxhjygvovIMEUF9fV1dZu3QrRRUdHCws+n8/v+crsgAA/v2efzcnhcjkcLvf0aYlEKm1tXbPm/v3a2urqnu9q32cBLS3t7TLZsmWwGrW8fPZsf/+xY/PyelsQZLlcuaLVarUYI1Rd3dTU3Gz+Fd4MQgixWCT3zdLyt9+yszMze79NAkTibW2hHB5PKOTxeDzymngzCvDxcXZ2cgoP1+lg7wKVSqPRalev7m1BGHO5XO6qVba2Hh7u7ikpkyYNHTpsWHOzuQU84s6d4uKCgpiY06eTkxMTMYbOOWpUd+fFxxcW5udv356QUF9fW4txeXlZWWlp3zOwesujplJd3dTU2CgQlJXV1zc0nD/f1NTeLpUGB8OmL6dPw7B57RpE4p2ctFoej8t99VWRaNAgOztf39zc5ctXrECIzy8vLy8/dWrSpC1btmxZvtzff+XKlSt7/kqM3vJoHhg8eNAge3uFYtq0kSNHjXrhBVdXW1s7ux07RCI+n8+fOBEmtM8/hy3KQ0OHDHnmGR+fqioXl4cPJZIXX9Tp0tLS0lJSiopKSkpKli0rKrp69erVc+dyck6dOnWq/9faP0ZiYl5ebq6bW2pqQUF+/uM7OV27tm5daKit7YkTISEhIUlJkEiD8fHjwcHBwcnJKSkHDx482PfUsn7jzp2vvvrqKzu7b78NCAgIyMjYtIkImT179uz4+Nu3o6Ojo21sBtrPbklOjoyMjLS0PH48KCgoKC5u/XoQcvTojBkzZmRkyGR1dXV1gwcbex2z7dExdWpYWFhYe3tVVWpqaurChTKZVCqVPniAsUaj0bi58flisVjc92Q/swsguLlNnjx5skx26dKqVatW/eMfarVGo9HodAzD5/P5Eom5r0+hUCgUCoVCoVAoFAqFQqH8b3PsWHFxauqLLx49mp+fmLho0UD702Nyc1ta6urc3RHas2fBAowR2rkzOBjjTz+9e/fCBeO3ZzDbKiaZTKNRqRgmIOD06e3bb95EiMuFMIdGo1Ih9N13hYXJyatWPbUCnn/+3Lndu2NjHz5sbKyoGDKEOO7q6uHh51dRkZPzl7989tnkyU+dgDfeiI//+9+/+CI1tbDw1q05cxDi80UihBiGz7ew0Gji4195ZevW558Xi/l8oRD2yX8q2LUrMzM29r33EAoPDwrCGKEvvnjtNYwR2rVrwQKMY2OrqwsKnn/ebA6MHn3y5JYtiYlTppw6tW1bz9e4x8RUVOTkzJpFNpFH6MABcBw6a3R0Ts5vv61dazbH58y5dGn//h9+QGjr1mnTOi88evQPP3z88Y0bdXUKhUz2eJQxL6+lpa7OzQ2h6OhXX1WpEIqOXroUY4R27JgzB+OVKxMSjh//6iuzOf4HzPTpzs5Dh2ZmImRt7eSEEEIikViMUHZ2dXVBwaxZfn7ffbd+fV7egwetrQ0NnUsAAwLOnAkPv3ULIY1GqeRyEZLL29oQmjnTzy8wMD7+229nzVqxYs0acwt4FOi+cqWqKi8vIGDRonPndu+OiZHLOzqkUisr8ioKe3t7e0/PsjIPDyurQYNKS9PTy8uzsgIDEVKrlUqEXF3t7T08KisfPHjrrQMHvLwEAjabwyFv6e4HAYQHD6RSicTNbc6cM2d27IiLKympqSksHD4cISsre3uEEMIY3IL9JxBiGDZbpyspefvtI0e8vJ55xsrKzq6iwtyOEx4bRr29razs7KqqcnLefHP//tGj584dOXLmzMuXEWptra8HAbDDgVqtUCD0669Llnz66dy5/e14r3nrrbi4o0ePHkXo44/HjcN4796srGvXNmwYaL96TVxcZWVu7owZA+3Hfw3/D73/bnBl1mLvAAAAAElFTkSuQmCC); }

        .jsgrid .jsgrid-grid-header {
            border: none;
            border-top: 0; }

        .jsgrid .jsgrid-grid-body {
            border-color: rgba(255, 255, 255, 0.1); }

        .jsgrid .jsgrid-table th {
            font-weight: initial;
            font-weight: 700; }

        .jsgrid .jsgrid-table th,
        .jsgrid .jsgrid-table td {
            background-color: #0d0d0d; }

        .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number] {
            padding: .56rem 0; }

        .jsgrid .jsgrid-header-sort:before {
            margin-top: 10px;
            float: right; }

        .jsgrid .jsgrid-header-sort-asc:before {
            border-color: transparent transparent #ffffff; }

        .jsgrid .jsgrid-header-sort-desc:before {
            border-color: #ffffff transparent transparent; }

        .jsgrid .jsgrid-pager {
            line-height: 2; }

        .jsgrid .jsgrid-pager-current-page {
            padding: 0.5rem 0.75rem;
            font-weight: initial;
            line-height: 1.25; }

        .jsgrid .jsgrid-cell,
        .jsgrid .jsgrid-header-cell {
            border: 1px solid rgba(255, 255, 255, 0.1); }

        /* Jvectormap */
        .jvectormap-container {
            background: #ffffff; }

        .vector-map {
            width: 100%;
            height: 300px; }

        .gauge text {
            fill: #6c7293; }

        /* Light Gallery */
        .lightGallery {
            width: 100%;
            margin: 0; }
        .lightGallery .image-tile {
            position: relative;
            margin-bottom: 30px; }
        .lightGallery .image-tile .demo-gallery-poster {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0; }
        .lightGallery .image-tile .demo-gallery-poster img {
            display: block;
            margin: auto;
            width: 40%;
            max-width: 60px;
            min-width: 20px; }
        .lightGallery .image-tile img {
            max-width: 100%;
            width: 100%; }

        /* Listify */
        .listify-list input {
            border: 1px solid #f2f7f8;
            color: #aab2bd;
            background: #fff; }

        .listify-list ul.list {
            list-style: none;
            padding-left: 0; }
        .listify-list ul.list li {
            display: block;
            border-bottom: 1px solid #2c2e33;
            padding: 15px 10px; }
        .listify-list ul.list li h5 {
            color: #0090e7; }
        .listify-list ul.list li p {
            color: #aab2bd;
            margin: 0; }

        .morris-chart text {
            fill: #6c7293; }

        /* No-ui-slider */
        .noUi-target {
            border: none;
            box-shadow: none;
            border-radius: 0px; }
        .noUi-target .noUi-handle {
            width: 20px;
            height: 20px;
            border-radius: 100%;
            box-shadow: none;
            background: #000000; }
        .noUi-target .noUi-handle:before {
            display: none; }
        .noUi-target .noUi-handle:after {
            content: "";
            width: 10px;
            height: 10px;
            border-radius: 100%;
            left: 4px;
            top: 4px; }
        .noUi-target.noUi-horizontal {
            height: 0.25rem; }
        .noUi-target.noUi-horizontal .noUi-handle {
            top: -8px; }
        .noUi-target.noUi-vertical {
            width: 0.25rem;
            height: 156px;
            display: inline-block; }
        .noUi-target.noUi-vertical .noUi-handle {
            left: -7px; }
        .noUi-target .noUi-base {
            box-shadow: none;
            border: none; }
        .noUi-target .noUi-base .noUi-connect {
            background: #0090e7;
            box-shadow: none; }
        .noUi-target .noUi-base .noUi-origin {
            background: #00d25b; }
        .noUi-target .noUi-pips .noUi-marker-horizontal,
        .noUi-target .noUi-pips .noUi-marker-vertical {
            background: #2c2e33; }
        .noUi-target .noUi-pips .noUi-marker-horizontal {
            height: 9px;
            width: 1px; }
        .noUi-target .noUi-pips .noUi-marker-vertical {
            height: 1px;
            width: 9px; }
        .noUi-target .noUi-pips .noUi-value {
            color: #ffffff;
            font-size: 0.94rem;
            font-weight: 700; }

        /* Slider Color variations */
        .slider-primary .noUi-base .noUi-connect {
            background: #0090e7; }

        .slider-primary .noUi-base .noUi-origin {
            background: #0090e7; }
        .slider-primary .noUi-base .noUi-origin .noUi-handle:after {
            background: #0090e7; }
        .slider-primary .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
            background: #0090e7;
            color: #ffffff; }

        .slider-secondary .noUi-base .noUi-connect {
            background: #e4eaec; }

        .slider-secondary .noUi-base .noUi-origin {
            background: #e4eaec; }
        .slider-secondary .noUi-base .noUi-origin .noUi-handle:after {
            background: #e4eaec; }
        .slider-secondary .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
            background: #e4eaec;
            color: #ffffff; }

        .slider-success .noUi-base .noUi-connect {
            background: #00d25b; }

        .slider-success .noUi-base .noUi-origin {
            background: #00d25b; }
        .slider-success .noUi-base .noUi-origin .noUi-handle:after {
            background: #00d25b; }
        .slider-success .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
            background: #00d25b;
            color: #ffffff; }

        .slider-info .noUi-base .noUi-connect {
            background: #8f5fe8; }

        .slider-info .noUi-base .noUi-origin {
            background: #8f5fe8; }
        .slider-info .noUi-base .noUi-origin .noUi-handle:after {
            background: #8f5fe8; }
        .slider-info .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
            background: #8f5fe8;
            color: #ffffff; }

        .slider-warning .noUi-base .noUi-connect {
            background: #ffab00; }

        .slider-warning .noUi-base .noUi-origin {
            background: #ffab00; }
        .slider-warning .noUi-base .noUi-origin .noUi-handle:after {
            background: #ffab00; }
        .slider-warning .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
            background: #ffab00;
            color: #ffffff; }

        .slider-danger .noUi-base .noUi-connect {
            background: #fc424a; }

        .slider-danger .noUi-base .noUi-origin {
            background: #fc424a; }
        .slider-danger .noUi-base .noUi-origin .noUi-handle:after {
            background: #fc424a; }
        .slider-danger .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
            background: #fc424a;
            color: #ffffff; }

        .slider-light .noUi-base .noUi-connect {
            background: #ffffff; }

        .slider-light .noUi-base .noUi-origin {
            background: #ffffff; }
        .slider-light .noUi-base .noUi-origin .noUi-handle:after {
            background: #ffffff; }
        .slider-light .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
            background: #ffffff;
            color: #ffffff; }

        .slider-dark .noUi-base .noUi-connect {
            background: #0d0d0d; }

        .slider-dark .noUi-base .noUi-origin {
            background: #0d0d0d; }
        .slider-dark .noUi-base .noUi-origin .noUi-handle:after {
            background: #0d0d0d; }
        .slider-dark .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
            background: #0d0d0d;
            color: #ffffff; }

        /* Owl-carousel */
        .owl-carousel img {
            border-radius: 4px; }

        .owl-carousel.full-width .owl-nav {
            position: absolute;
            top: 30%;
            width: 100%;
            margin-top: 0; }
        .owl-carousel.full-width .owl-nav .owl-prev,
        .owl-carousel.full-width .owl-nav .owl-next {
            background: transparent;
            color: #ffffff; }
        .owl-carousel.full-width .owl-nav .owl-prev i:before,
        .owl-carousel.full-width .owl-nav .owl-next i:before {
            width: 60px;
            height: 60px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 100%;
            font-size: 1.875rem;
            font-weight: bold;
            line-height: 2; }
        .owl-carousel.full-width .owl-nav .owl-prev {
            float: left; }
        .owl-carousel.full-width .owl-nav .owl-next {
            float: right; }

        .owl-carousel.full-width .owl-dots {
            margin-top: 1rem; }

        .owl-carousel .item-video {
            width: 200px;
            height: 200px; }

        .owl-carousel.portfolio-carousel.full-width .owl-nav {
            top: auto;
            bottom: 100%;
            text-align: right; }
        .rtl .owl-carousel.portfolio-carousel.full-width .owl-nav {
            text-align: left; }
        .owl-carousel.portfolio-carousel.full-width .owl-nav .owl-prev,
        .owl-carousel.portfolio-carousel.full-width .owl-nav .owl-next {
            color: #a7afb7;
            margin: 0;
            padding: 0px 2px 14px 2px !important; }
        @media (min-width: 768px) and (max-width: 1200px) {
            .owl-carousel.portfolio-carousel.full-width .owl-nav .owl-prev,
            .owl-carousel.portfolio-carousel.full-width .owl-nav .owl-next {
                padding: 0px 2px 19px 0px; } }
        .owl-carousel.portfolio-carousel.full-width .owl-nav .owl-prev i,
        .owl-carousel.portfolio-carousel.full-width .owl-nav .owl-next i {
            text-align: center; }
        .owl-carousel.portfolio-carousel.full-width .owl-nav .owl-prev i:before,
        .owl-carousel.portfolio-carousel.full-width .owl-nav .owl-next i:before {
            width: 32px;
            height: 32px;
            font-size: 1.25rem;
            font-weight: normal;
            line-height: 32px; }
        @media (min-width: 768px) and (max-width: 1200px) {
            .owl-carousel.portfolio-carousel.full-width .owl-nav .owl-prev i:before,
            .owl-carousel.portfolio-carousel.full-width .owl-nav .owl-next i:before {
                width: 20px;
                height: 20px;
                font-size: .75rem;
                line-height: 20px; } }
        .owl-carousel.portfolio-carousel.full-width .owl-nav .owl-prev {
            float: none; }
        .owl-carousel.portfolio-carousel.full-width .owl-nav .owl-next {
            float: none; }

        .owl-carousel.portfolio-carousel.full-width .owl-dots {
            margin-top: 1rem; }

        /* Progressbar-js */
        .progress-bar-js-line {
            height: 6px; }

        .progressbar-js-circle {
            width: 100%;
            position: relative; }

        .demo-progress-circle {
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg); }

        .progress {
            background-color: #2f323a;
            border-radius: 0px; }
        .progress .progress-bar {
            border-radius: 0px; }

        /* Pws-tabs */
        .pws_tabs_container ul.pws_tabs_controll {
            border-bottom: 1px solid #0090e7; }
        .pws_tabs_container ul.pws_tabs_controll li:first-child a {
            border-radius: 5px 0px 0px 0px; }
        .pws_tabs_container ul.pws_tabs_controll li:last-child a {
            border-right: 1px solid #0090e7;
            border-radius: 0px 5px 0px 0px; }
        .pws_tabs_container ul.pws_tabs_controll li a {
            border: 1px solid #0090e7;
            border-bottom: none;
            border-right: none;
            background: #fff;
            color: #0090e7;
            padding: 0.6em 1.3em;
            margin-right: 0; }
        .pws_tabs_container ul.pws_tabs_controll li a:hover {
            background: #fff;
            color: #0090e7; }
        .pws_tabs_container ul.pws_tabs_controll li a.pws_tab_active {
            background: #0090e7;
            color: #fff; }

        .pws_tabs_container .demo-tabs {
            border: 1px solid #0090e7;
            border-radius: 0px 5px 5px 5px;
            overflow: hidden;
            margin-bottom: 45px;
            padding-top: 3.5rem; }
        .pws_tabs_container .demo-tabs .CodeMirror {
            margin-bottom: 20px; }

        .pws_tabs_container.pws_tabs_vertical .pws_tabs_controll {
            border-right: none;
            border-bottom: none; }
        .pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li:first-child a {
            border-radius: 5px 0px 0px 0px; }
        .pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li:last-child a {
            border-bottom: 1px solid #0090e7;
            border-radius: 0px 0px 0px 5px;
            border-right: 0px; }
        .pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li a {
            border-radius: 0px;
            border: 1px solid #0090e7;
            border-right: none;
            border-bottom: none;
            margin-bottom: 0; }

        .pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_list {
            margin-bottom: 0; }

        .pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll {
            border-top: 1px solid #0090e7;
            border-right: none;
            border-bottom: none; }
        .pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li:first-child a {
            border-radius: 0px 0px 0px 5px; }
        .pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li:last-child a {
            border-radius: 0px 0px 5px 0px;
            border-right: 1px solid #0090e7; }
        .pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li a {
            border-radius: 0px;
            border: 1px solid #0090e7;
            border-top: none;
            border-right: none;
            margin-right: 0;
            margin-bottom: 0; }

        .pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li:first-child a {
            border-radius: 0px 5px 0px 0px;
            border-right: 1px solid #0090e7; }

        .pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li:last-child a {
            border-right: none;
            border-radius: 5px 0px 0px 0px; }

        .pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li a {
            border: 1px solid #0090e7;
            border-bottom: none;
            border-right: none;
            margin-right: 0;
            margin-left: 0; }

        /* Quill Editor */
        .quill-container {
            height: 300px; }

        .ql-toolbar.ql-snow,
        .quill-container.ql-snow {
            border-color: #2c2e33; }

        /* Rating */
        .br-theme-fontawesome-stars .br-widget a,
        .br-theme-css-stars .br-widget a {
            font-size: 20px; }
        .br-theme-fontawesome-stars .br-widget a:after,
        .br-theme-css-stars .br-widget a:after {
            color: #4d4d4d; }
        .br-theme-fontawesome-stars .br-widget a.br-selected:after, .br-theme-fontawesome-stars .br-widget a.br-active:after,
        .br-theme-css-stars .br-widget a.br-selected:after,
        .br-theme-css-stars .br-widget a.br-active:after {
            color: #ffab00; }

        .br-theme-bars-1to10 .br-widget a,
        .br-theme-bars-movie .br-widget a,
        .br-theme-bars-pill .br-widget a,
        .br-theme-bars-reversed .br-widget a,
        .br-theme-bars-horizontal .br-widget a {
            background-color: #4d4d4d;
            color: #ffab00; }
        .br-theme-bars-1to10 .br-widget a.br-selected, .br-theme-bars-1to10 .br-widget a.br-active,
        .br-theme-bars-movie .br-widget a.br-selected,
        .br-theme-bars-movie .br-widget a.br-active,
        .br-theme-bars-pill .br-widget a.br-selected,
        .br-theme-bars-pill .br-widget a.br-active,
        .br-theme-bars-reversed .br-widget a.br-selected,
        .br-theme-bars-reversed .br-widget a.br-active,
        .br-theme-bars-horizontal .br-widget a.br-selected,
        .br-theme-bars-horizontal .br-widget a.br-active {
            background-color: #ffab00; }

        .br-theme-bars-square .br-widget a {
            border-color: #4d4d4d;
            color: #6c7293;
            background: transparent; }
        .br-theme-bars-square .br-widget a.br-selected, .br-theme-bars-square .br-widget a.br-active {
            color: #ffab00;
            border-color: #ffab00; }

        .br-theme-bars-movie .br-widget .br-current-rating,
        .br-theme-bars-reversed .br-widget .br-current-rating,
        .br-theme-bars-1to10 .br-widget .br-current-rating,
        .br-theme-bars-horizontal .br-widget .br-current-rating {
            color: #ffffff;
            font-size: 0.875rem;
            font-weight: initial; }

        .br-theme-bars-1to10 {
            height: 26px; }
        .br-theme-bars-1to10 .br-widget {
            height: 24px; }
        .br-theme-bars-1to10 .br-widget .br-current-rating {
            line-height: 1; }

        .br-theme-bars-pill .br-widget a {
            line-height: 2.5;
            color: #6c7293; }

        /* Select2 */
        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background: #0090e7; }

        .select2-container--default .select2-selection--single,
        .select2-container--default .select2-dropdown,
        .select2-container--default .select2-selection--multiple {
            border-color: #2c2e33;
            background: #000000; }
        .select2-container--default .select2-selection--single .select2-search__field,
        .select2-container--default .select2-dropdown .select2-search__field,
        .select2-container--default .select2-selection--multiple .select2-search__field {
            border-color: #2c2e33; }

        .select2-container--default .select2-selection--single {
            height: auto; }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #ffffff;
            line-height: 14px; }

        .select2-container--default .select2-dropdown {
            font-size: .8125rem; }

        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border-color: #2c2e33; }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            color: #ffffff;
            border: 0;
            border-radius: 3px;
            padding: 6px;
            font-size: .625rem;
            font-family: inherit;
            line-height: 1; }
        .select2-container--default .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
            color: #ffffff; }
        .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+1) {
            background: #0090e7; }
        .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+2) {
            background: #00d25b; }
        .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+3) {
            background: #8f5fe8; }
        .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+4) {
            background: #fc424a; }
        .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+5) {
            background: #ffab00; }

        /* Summernote Editor */
        .note-editor.note-frame {
            border: 1px solid #2c2e33; }

        .note-popover {
            border: 1px solid #2c2e33; }

        /* SweetAlert */
        .swal2-container {
            z-index: 1500; }

        .swal2-modal {
            min-height: 315px;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-flex-direction: column;
            flex-direction: column;
            border-radius: 10px; }
        .swal2-modal .swal2-title {
            font-size: 25px;
            line-height: 1;
            font-weight: 500;
            color: #ffffff;
            font-weight: initial;
            margin-bottom: 0; }
        .swal2-modal .swal2-icon,
        .swal2-modal .swal2-success-ring {
            margin-top: 0;
            margin-bottom: 42px; }
        .swal2-modal .swal2-buttonswrapper {
            margin-top: 0;
            padding: 0; }
        .swal2-modal .swal2-buttonswrapper .swal2-styled {
            margin-top: 0;
            font-weight: initial; }
        .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm {
            font-weight: initial;
            margin-top: 32px; }
        .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel {
            margin-top: 32px;
            border: 1px solid #2c2e33;
            color: #ffffff;
            font-weight: initial; }
        .swal2-modal .swal2-content {
            font-size: 0.875rem;
            font-weight: 500;
            color: #ffffff;
            font-weight: initial;
            margin-top: 11px; }
        .swal2-modal .swal2-close {
            font-size: 20px; }
        .swal2-modal .swal2-success-ring {
            left: -30px; }

        /* Switchery */
        .switchery {
            width: 35px;
            height: 21px;
            border-radius: 11px; }
        .switchery > small {
            width: 20px;
            height: 20px; }

        .switchery-small {
            width: 25px;
            height: 13px; }
        .switchery-small > small {
            width: 13px;
            height: 13px; }

        .switchery-large {
            width: 50px;
            height: 28px;
            border-radius: 14px; }
        .switchery-large > small {
            width: 27px;
            height: 27px; }

        /* Tags */
        div.tagsinput {
            padding: 15px 15px 10px;
            border-color: #2c2e33; }
        div.tagsinput span.tag {
            background: #0090e7;
            border: 0;
            color: #ffffff;
            padding: 6px 14px;
            font-size: .8125rem;
            font-family: inherit;
            line-height: 1; }
        div.tagsinput span.tag a {
            color: #ffffff; }

        /* TinyMCE Editor */
        .mce-tinymce.mce-panel,
        .mce-tinymce .mce-panel {
            border-color: #2c2e33; }

        /* Toast */
        .jq-toast-wrap .jq-icon-success {
            background-color: #00d25b; }

        .jq-toast-wrap .jq-icon-info {
            background-color: #8f5fe8; }

        .jq-toast-wrap .jq-icon-warning {
            background-color: #ffab00; }

        .jq-toast-wrap .jq-icon-error {
            background-color: #fc424a; }

        /* Typeahead */
        .tt-menu,
        .gist {
            text-align: left; }

        .twitter-typeahead {
            max-width: 100%; }

        .typeahead {
            background-color: #2A3038; }
        .typeahead:focus {
            border-color: #2c2e33; }

        .tt-query {
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); }

        .tt-hint {
            color: #434a54; }

        .tt-menu {
            width: 100%;
            margin: 12px 0;
            padding: 8px 0;
            background-color: #000000;
            border: 1px solid #2c2e33;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
            -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); }

        .tt-suggestion {
            padding: 3px 20px;
            font-size: inherit; }
        .tt-suggestion:hover {
            cursor: pointer;
            color: #ffffff;
            background-color: #0090e7; }
        .tt-suggestion .tt-cursor {
            color: #ffffff;
            background-color: #0090e7; }
        .tt-suggestion p {
            margin: 0; }

        /* Wysi Editor */
        .wysi-editor #toolbar [data-wysihtml-action] {
            float: right; }

        .wysi-editor #toolbar,
        .wysi-editor textarea {
            width: 920px;
            padding: 5px;
            -webkit-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box; }

        .wysi-editor textarea {
            height: 280px;
            border: 1px solid #2c2e33;
            font-family: inherit;
            font-size: 1rem; }

        .wysi-editor textarea:focus {
            color: black;
            border: 1px solid #2c2e33; }

        .wysi-editor .wysihtml-action-active,
        .wysi-editor .wysihtml-command-active {
            font-weight: bold; }

        .wysi-editor [data-wysihtml-dialog] {
            margin: 5px 0 0;
            padding: 5px;
            border: 1px solid #666; }

        .wysi-editor a[data-wysihtml-command-value="red"] {
            color: #fc424a; }

        .wysi-editor a[data-wysihtml-command-value="green"] {
            color: #00d25b; }

        .wysi-editor a[data-wysihtml-command-value="blue"] {
            color: #8f5fe8; }

        .wysi-editor .wysihtml-editor,
        .wysi-editor .wysihtml-editor table td {
            outline: 1px dotted #2c2e33; }

        .wysi-editor code {
            background: #ddd;
            padding: 10px;
            white-space: pre;
            display: block;
            margin: 1em 0; }

        .wysi-editor .toolbar {
            display: block;
            border-radius: 3px;
            border: 1px solid #fff;
            margin-bottom: 9px;
            line-height: 1em; }

        .wysi-editor .toolbar a {
            display: inline-block;
            height: 1.5em;
            border-radius: 3px;
            font-size: 1rem;
            line-height: 1.5em;
            text-decoration: none;
            background: #ffffff;
            border: 1px solid #2c2e33;
            padding: 0 0.2em;
            margin: 1px 0;
            color: #0090e7; }

        .wysi-editor .toolbar .wysihtml-action-active,
        .wysi-editor .toolbar a.wysihtml-command-active {
            background: #222;
            color: white; }

        .wysi-editor .toolbar .block {
            padding: 1px;
            display: inline-block;
            background: #eee;
            border-radius: 3px;
            margin: 0 1px 1px 0; }

        .wysi-editor div[data-wysihtml-dialog="createTable"] {
            position: absolute;
            background: white; }

        .wysi-editor div[data-wysihtml-dialog="createTable"] td {
            width: 10px;
            height: 5px;
            border: 1px solid #2c2e33; }

        .wysi-editor .wysihtml-editor table td.wysiwyg-tmp-selected-cell {
            outline: 2px solid #00d25b; }

        .wysi-editor .editor-container-tag {
            padding: 5px 10px;
            position: absolute;
            color: white;
            background: rgba(0, 0, 0, 0.8);
            width: 100px;
            margin-left: -50px;
            -webkit-transition: 0.1s left, 0.1s top; }

        .wysi-editor .wrap {
            max-width: 700px;
            margin: 40px; }

        .wysi-editor .editable .wysihtml-uneditable-container {
            outline: 1px dotted #2c2e33;
            position: relative; }

        .wysi-editor .editable .wysihtml-uneditable-container-right {
            float: right;
            width: 50%;
            margin-left: 2em;
            margin-bottom: 1em; }

        .wysi-editor .editable .wysihtml-uneditable-container-left {
            float: left;
            width: 50%;
            margin-right: 2em;
            margin-bottom: 1em; }

        /* X-editable */
        .editable-form .editable {
            color: #ffffff;
            font-size: .8125rem; }

        .editable-form .editable-click {
            border-color: #ffffff; }

        .editable-container.editable-inline {
            max-width: 100%; }
        .editable-container.editable-inline .editableform {
            max-width: 100%; }
        .editable-container.editable-inline .editableform .control-group {
            max-width: 100%;
            white-space: initial; }
        .editable-container.editable-inline .editableform .control-group > div {
            max-width: 100%; }
        .editable-container.editable-inline .editableform .control-group .editable-input input,
        .editable-container.editable-inline .editableform .control-group .editable-input textarea {
            max-width: 100%; }
        .editable-container.editable-inline .editableform .control-group .editable-input .combodate .form-control, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .asColorPicker-input, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .dataTables_wrapper select, .dataTables_wrapper .editable-container.editable-inline .editableform .control-group .editable-input .combodate select, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .editable-container.editable-inline .editableform .control-group .editable-input .combodate input[type=text],
        .editable-container.editable-inline .editableform .control-group .editable-input .combodate .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .editable-container.editable-inline .editableform .control-group .editable-input .combodate select, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .editable-container.editable-inline .editableform .control-group .editable-input .combodate input[type=number], .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-container--default .select2-selection--single, .select2-container--default .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-selection--single, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-search__field, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .typeahead,
        .editable-container.editable-inline .editableform .control-group .editable-input .combodate .tt-query,
        .editable-container.editable-inline .editableform .control-group .editable-input .combodate .tt-hint {
            padding-left: 0;
            padding-right: 0; }
        @media (max-width: 991px) {
            .editable-container.editable-inline .editableform .control-group .editable-buttons {
                display: block;
                margin-top: 10px; } }

        /* Wizard */
        .wizard {
            display: block;
            width: 100%;
            overflow: hidden; }
        .wizard a {
            outline: 0; }
        .wizard ul {
            list-style: none;
            padding: 0;
            margin: 0; }
        .wizard ul > li {
            display: block;
            padding: 0; }
        .wizard > .steps {
            position: relative;
            display: block;
            width: 100%; }
        .wizard > .steps .current-info {
            position: absolute;
            left: -999em; }
        .wizard > .steps .number {
            font-size: 0.875rem; }
        .wizard > .steps > ul > li {
            width: 25%;
            float: left;
            text-align: center; }
        @media (max-width: 767px) {
            .wizard > .steps > ul > li {
                width: 50%; } }
        .wizard > .steps a {
            display: block;
            width: auto;
            margin: 0 0.5em 0.5em;
            padding: 1em 1em;
            text-decoration: none;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            font-size: 0.875rem;
            font-weight: 500; }
        .wizard > .steps a:hover {
            display: block;
            width: auto;
            margin: 0 0.5em 0.5em;
            padding: 1em;
            text-decoration: none;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px; }
        .wizard > .steps a:active {
            display: block;
            width: auto;
            margin: 0 0.5em 0.5em;
            padding: 1em;
            text-decoration: none;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px; }
        .wizard > .steps .disabled a {
            background: rgba(0, 136, 204, 0.2);
            color: rgba(255, 255, 255, 0.7);
            cursor: default; }
        .wizard > .steps .disabled a:active {
            background: #e6e9ed e;
            color: #434a54;
            cursor: default; }
        .wizard > .steps .current a {
            background: rgba(0, 136, 204, 0.2);
            color: #ffffff;
            cursor: default; }
        .wizard > .steps .current a:active {
            background: #0090e7;
            color: #ffffff;
            cursor: default; }
        .wizard > .steps .done a {
            background: #4ebcff;
            color: #ffffff; }
        .wizard > .steps .done a:hover {
            background: #4ebcff;
            color: #ffffff; }
        .wizard > .steps .done a:active {
            background: #4ebcff;
            color: #ffffff; }
        .wizard > .steps .error a {
            background: #fc424a;
            color: #fff; }
        .wizard > .steps .error a:hover {
            background: #fc424a;
            color: #fff; }
        .wizard > .steps .error a:active {
            background: #fc424a;
            color: #fff; }
        .wizard > .content {
            border: 1px solid rgba(255, 255, 255, 0.1);
            display: block;
            margin: 0.5em;
            min-height: 24em;
            overflow: hidden;
            position: relative;
            width: auto;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px; }
        .wizard > .content > .title {
            position: absolute;
            left: -999em; }
        .wizard > .content > .body {
            float: left;
            position: absolute;
            width: 95%;
            height: 95%;
            padding: 2.5%;
            overflow-y: auto; }
        .wizard > .content > .body ul {
            list-style: disc; }
        .wizard > .content > .body ul > li {
            display: list-item; }
        .wizard > .content > .body > iframe {
            border: 0 none;
            width: 100%;
            height: 100%; }
        .wizard > .content > .body input {
            display: block;
            border: 1px solid #2c2e33; }
        .wizard > .content > .body input[type="checkbox"] {
            display: inline-block; }
        .wizard > .content > .body input.error {
            background: #fbe3e4;
            border: 1px solid #fea6aa;
            color: #fc424a; }
        .wizard > .content > .body label {
            display: inline-block;
            margin-bottom: 0.5em; }
        .wizard > .content > .body label.error {
            color: #fc424a;
            display: inline-block;
            margin-left: 1.5em; }
        .wizard > .actions {
            padding-top: 20px;
            position: relative;
            display: block;
            text-align: right;
            width: 100%; }
        .wizard > .actions > ul {
            display: inline-block;
            text-align: right; }
        .wizard > .actions > ul > li {
            float: left;
            margin: 0 0.5em; }
        .wizard.vertical > .steps {
            display: inline;
            float: left;
            width: 30%; }
        @media (max-width: 767px) {
            .wizard.vertical > .steps {
                width: 42%; } }
        .wizard.vertical > .steps > ul > li {
            float: none;
            width: 100%;
            text-align: left; }
        .wizard.vertical > .content {
            display: inline;
            float: left;
            margin: 0 2.5% 0.5em 2.5%;
            width: 65%; }
        @media (max-width: 767px) {
            .wizard.vertical > .content {
                width: 52%; } }
        .wizard.vertical > .actions {
            display: inline;
            float: right;
            margin: 0 2.5%;
            width: 95%; }
        @media (max-width: 767px) {
            .wizard.vertical > .actions {
                margin: 0;
                width: 100%; } }
        .wizard.vertical > .actions > ul > li {
            margin: 0 0 0 1em; }

        .tabcontrol {
            display: block;
            width: 100%;
            overflow: hidden; }
        .tabcontrol a {
            outline: 0; }
        .tabcontrol ul {
            list-style: none;
            padding: 0;
            margin: 0; }
        .tabcontrol ul > li {
            display: block;
            padding: 0; }
        .tabcontrol > .steps {
            position: relative;
            display: block;
            width: 100%; }
        .tabcontrol > .steps .current-info {
            position: absolute;
            left: -999em; }
        .tabcontrol > .steps > ul {
            position: relative;
            margin: 6px 0 0 0;
            top: 1px;
            z-index: 1; }
        .tabcontrol > .steps > ul > li {
            float: left;
            margin: 5px 2px 0 0;
            padding: 1px;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px; }
        .tabcontrol > .steps > ul > li:hover {
            background: #edecec;
            border: 1px solid #2c2e33;
            padding: 0; }
        .tabcontrol > .steps > ul > li > a {
            color: #aab2bd;
            display: inline-block;
            border: 0 none;
            margin: 0;
            padding: 10px 30px;
            text-decoration: none; }
        .tabcontrol > .steps > ul > li > a:hover {
            text-decoration: none; }
        .tabcontrol > .steps > ul > li.current {
            background: #ffffff;
            border: 1px solid #2c2e33;
            border-bottom: 0 none;
            padding: 0 0 1px 0;
            margin-top: 0; }
        .tabcontrol > .steps > ul > li.current > a {
            padding: 15px 30px 10px 30px; }
        .tabcontrol > .content {
            position: relative;
            display: inline-block;
            width: 100%;
            height: 35em;
            overflow: hidden;
            border-top: 1px solid #2c2e33;
            padding-top: 20px; }
        .tabcontrol > .content > .title {
            position: absolute;
            left: -999em; }
        .tabcontrol > .content > .body {
            float: left;
            position: absolute;
            width: 95%;
            height: 95%;
            padding: 2.5%; }
        .tabcontrol > .content > .body ul {
            list-style: disc; }
        .tabcontrol > .content > .body ul > li {
            display: list-item; }

        /*-------------------------------------------------------------------*/
        /* === Landing screens === */
        /* Auth */
        .auth.login-bg {
            background: url("../images/auth/Login_bg.jpg");
            background-size: cover; }

        .auth .login-half-bg {
            background: url("../images/auth/login-bg.jpg");
            background-size: cover; }

        .auth.register-half-bg {
            background: url("../images/auth/Login_bg2.jpg");
            background-size: cover; }

        .auth.lock-full-bg {
            background: url("../images/auth/lockscreen-bg.jpg");
            background-size: cover; }

        .auth .lock-profile-img {
            width: 90px;
            height: 90px;
            border-radius: 100%; }

        .auth .auth-form-dark {
            background: rgba(0, 0, 0, 0.6);
            color: #ffffff; }
        .auth .auth-form-dark .form-control, .auth .auth-form-dark .asColorPicker-input, .auth .auth-form-dark .dataTables_wrapper select, .dataTables_wrapper .auth .auth-form-dark select, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input[type=text],
        .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark select, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input[type=number], .auth .auth-form-dark .select2-container--default .select2-selection--single, .select2-container--default .auth .auth-form-dark .select2-selection--single, .auth .auth-form-dark .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth .auth-form-dark .select2-search__field, .auth .auth-form-dark .typeahead,
        .auth .auth-form-dark .tt-query,
        .auth .auth-form-dark .tt-hint {
            border-color: rgba(255, 255, 255, 0.2);
            color: #ffffff; }
        .auth .auth-form-dark .form-control:-ms-input-placeholder, .auth .auth-form-dark .asColorPicker-input:-ms-input-placeholder, .auth .auth-form-dark .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .auth .auth-form-dark select:-ms-input-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input:-ms-input-placeholder[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input:-ms-input-placeholder[type=text],
        .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row select:-ms-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark select:-ms-input-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input:-ms-input-placeholder[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input:-ms-input-placeholder[type=number], .auth .auth-form-dark .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .auth .auth-form-dark .select2-selection--single:-ms-input-placeholder, .auth .auth-form-dark .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .auth .auth-form-dark .select2-search__field:-ms-input-placeholder, .auth .auth-form-dark .typeahead:-ms-input-placeholder,
        .auth .auth-form-dark .tt-query:-ms-input-placeholder,
        .auth .auth-form-dark .tt-hint:-ms-input-placeholder {
            color: #ffffff; }
        .auth .auth-form-dark .form-control:-moz-placeholder, .auth .auth-form-dark .asColorPicker-input:-moz-placeholder, .auth .auth-form-dark .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .auth .auth-form-dark select:-moz-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input:-moz-placeholder[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input:-moz-placeholder[type=text],
        .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row select:-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark select:-moz-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input:-moz-placeholder[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input:-moz-placeholder[type=number], .auth .auth-form-dark .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .auth .auth-form-dark .select2-selection--single:-moz-placeholder, .auth .auth-form-dark .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .auth .auth-form-dark .select2-search__field:-moz-placeholder, .auth .auth-form-dark .typeahead:-moz-placeholder,
        .auth .auth-form-dark .tt-query:-moz-placeholder,
        .auth .auth-form-dark .tt-hint:-moz-placeholder {
            color: #ffffff; }
        .auth .auth-form-dark .form-control::-moz-placeholder, .auth .auth-form-dark .asColorPicker-input::-moz-placeholder, .auth .auth-form-dark .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .auth .auth-form-dark select::-moz-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input[type=text]::-moz-placeholder,
        .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row select::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark select::-moz-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input[type=number]::-moz-placeholder, .auth .auth-form-dark .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .auth .auth-form-dark .select2-selection--single::-moz-placeholder, .auth .auth-form-dark .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .auth .auth-form-dark .select2-search__field::-moz-placeholder, .auth .auth-form-dark .typeahead::-moz-placeholder,
        .auth .auth-form-dark .tt-query::-moz-placeholder,
        .auth .auth-form-dark .tt-hint::-moz-placeholder {
            color: #ffffff; }
        .auth .auth-form-dark .form-control::-webkit-input-placeholder, .auth .auth-form-dark .asColorPicker-input::-webkit-input-placeholder, .auth .auth-form-dark .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .auth .auth-form-dark select::-webkit-input-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input[type=text]::-webkit-input-placeholder,
        .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row select::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark select::-webkit-input-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input[type=number]::-webkit-input-placeholder, .auth .auth-form-dark .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .auth .auth-form-dark .select2-selection--single::-webkit-input-placeholder, .auth .auth-form-dark .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .auth .auth-form-dark .select2-search__field::-webkit-input-placeholder, .auth .auth-form-dark .typeahead::-webkit-input-placeholder,
        .auth .auth-form-dark .tt-query::-webkit-input-placeholder,
        .auth .auth-form-dark .tt-hint::-webkit-input-placeholder {
            color: #ffffff; }

        .auth .auth-form-light {
            background: #ffffff; }
        .auth .auth-form-light select {
            color: #4b5564; }
        .auth .auth-form-light .input-group .form-control:focus, .auth .auth-form-light .asColorPicker-wrap .form-control:focus, .auth .auth-form-light .input-group .asColorPicker-input:focus, .auth .auth-form-light .asColorPicker-wrap .asColorPicker-input:focus, .auth .auth-form-light .input-group .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-light .input-group select:focus, .auth .auth-form-light .asColorPicker-wrap .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-light .asColorPicker-wrap select:focus, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input:focus[type=text], .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input:focus[type=text],
        .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group select:focus,
        .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap select:focus, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input:focus[type=number], .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input:focus[type=number], .auth .auth-form-light .input-group .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-light .input-group .select2-selection--single:focus, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-light .asColorPicker-wrap .select2-selection--single:focus, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-light .input-group .select2-search__field:focus, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-light .asColorPicker-wrap .select2-search__field:focus, .auth .auth-form-light .input-group .typeahead:focus, .auth .auth-form-light .asColorPicker-wrap .typeahead:focus,
        .auth .auth-form-light .input-group .tt-query:focus,
        .auth .auth-form-light .asColorPicker-wrap .tt-query:focus,
        .auth .auth-form-light .input-group .tt-hint:focus,
        .auth .auth-form-light .asColorPicker-wrap .tt-hint:focus, .auth .auth-form-light .input-group .form-control:active, .auth .auth-form-light .asColorPicker-wrap .form-control:active, .auth .auth-form-light .input-group .asColorPicker-input:active, .auth .auth-form-light .asColorPicker-wrap .asColorPicker-input:active, .auth .auth-form-light .input-group .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-light .input-group select:active, .auth .auth-form-light .asColorPicker-wrap .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-light .asColorPicker-wrap select:active, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input:active[type=text], .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input:active[type=text],
        .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group select:active,
        .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap select:active, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input:active[type=number], .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input:active[type=number], .auth .auth-form-light .input-group .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-light .input-group .select2-selection--single:active, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-light .asColorPicker-wrap .select2-selection--single:active, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-light .input-group .select2-search__field:active, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-light .asColorPicker-wrap .select2-search__field:active, .auth .auth-form-light .input-group .typeahead:active, .auth .auth-form-light .asColorPicker-wrap .typeahead:active,
        .auth .auth-form-light .input-group .tt-query:active,
        .auth .auth-form-light .asColorPicker-wrap .tt-query:active,
        .auth .auth-form-light .input-group .tt-hint:active,
        .auth .auth-form-light .asColorPicker-wrap .tt-hint:active {
            border-color: #2c2e33; }

        .auth .auth-form-transparent {
            background: transparent; }
        .auth .auth-form-transparent .form-control, .auth .auth-form-transparent .asColorPicker-input, .auth .auth-form-transparent .dataTables_wrapper select, .dataTables_wrapper .auth .auth-form-transparent select, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input[type=text],
        .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent select, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input[type=number], .auth .auth-form-transparent .select2-container--default .select2-selection--single, .select2-container--default .auth .auth-form-transparent .select2-selection--single, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field, .auth .auth-form-transparent .typeahead,
        .auth .auth-form-transparent .tt-query,
        .auth .auth-form-transparent .tt-hint,
        .auth .auth-form-transparent .input-group-text {
            border-color: #e4eaec; }
        .auth .auth-form-transparent .form-control:focus, .auth .auth-form-transparent .asColorPicker-input:focus, .auth .auth-form-transparent .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-transparent select:focus, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input:focus[type=text],
        .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent select:focus, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input:focus[type=number], .auth .auth-form-transparent .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-transparent .select2-selection--single:focus, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field:focus, .auth .auth-form-transparent .typeahead:focus,
        .auth .auth-form-transparent .tt-query:focus,
        .auth .auth-form-transparent .tt-hint:focus, .auth .auth-form-transparent .form-control:active, .auth .auth-form-transparent .asColorPicker-input:active, .auth .auth-form-transparent .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-transparent select:active, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input:active[type=text],
        .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row select:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent select:active, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input:active[type=number], .auth .auth-form-transparent .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-transparent .select2-selection--single:active, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field:active, .auth .auth-form-transparent .typeahead:active,
        .auth .auth-form-transparent .tt-query:active,
        .auth .auth-form-transparent .tt-hint:active,
        .auth .auth-form-transparent .input-group-text:focus,
        .auth .auth-form-transparent .input-group-text:active {
            border-color: #e4eaec; }
        .auth .auth-form-transparent select {
            outline-color: #e4eaec; }

        .auth.auth-img-bg {
            padding: 0; }
        @media (min-width: 768px) {
            .auth.auth-img-bg .auth-form-transparent {
                width: 55%;
                margin: auto; } }

        .auth .brand-logo {
            margin-bottom: 2rem; }
        .auth .brand-logo img {
            width: 150px; }

        .auth form .auth-form-btn {
            height: 50px;
            line-height: 1.5; }

        .auth form .auth-link {
            font-size: 0.875rem; }
        .auth form .auth-link:hover {
            color: initial; }

        .auth button {
            font-size: 0.875rem; }
        .auth button.enter-btn {
            height: 45px;
            margin-bottom: 28px; }

        .auth .forgot-pass {
            font-size: 0.875rem;
            text-align: right; }

        .auth .sign-up {
            font-size: 0.875rem;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 0; }
        .auth .sign-up a {
            color: #0090e7; }

        .auth.login-2, .auth.option-2 {
            padding: 0; }
        .auth.login-2 .card, .auth.option-2 .card {
            height: 100vh; }

        .auth .terms {
            font-size: 0.875rem;
            text-align: center;
            margin-top: 23px;
            margin-bottom: 0; }
        .auth .terms a {
            text-decoration: underline; }

        /* Navbar */
        .navbar {
            font-weight: normal;
            background: #191c24;
            left: 244px;
            transition: left 0.25s ease;
            -webkit-transition: left 0.25s ease;
            -moz-transition: left 0.25s ease;
            -ms-transition: left 0.25s ease; }
        @media (max-width: 992px) {
            .navbar {
                left: 0; } }
        .navbar .navbar-brand-wrapper {
            transition: width 0.25s ease, background 0.25s ease;
            -webkit-transition: width 0.25s ease, background 0.25s ease;
            -moz-transition: width 0.25s ease, background 0.25s ease;
            -ms-transition: width 0.25s ease, background 0.25s ease;
            background: #191c24;
            width: 244px;
            height: 70px; }
        @media (max-width: 991px) {
            .navbar .navbar-brand-wrapper {
                width: 55px; } }
        .navbar .navbar-brand-wrapper .navbar-brand {
            color: #38425e;
            font-size: 1.5rem;
            line-height: 48px;
            margin-right: 0;
            padding: 0rem 0rem 0rem 1.3rem;
            width: 100%; }
        .navbar .navbar-brand-wrapper .navbar-brand:active, .navbar .navbar-brand-wrapper .navbar-brand:focus, .navbar .navbar-brand-wrapper .navbar-brand:hover {
            color: #252b3e; }
        .navbar .navbar-brand-wrapper .navbar-brand img {
            width: calc(244px - 120px);
            max-width: 100%;
            height: 28px;
            margin: auto;
            vertical-align: middle; }
        .navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini {
            display: none; }
        .navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini img {
            width: calc(70px - 50px);
            max-width: 100%;
            height: 28px;
            margin: auto; }
        .navbar .navbar-menu-wrapper {
            transition: width 0.25s ease;
            -webkit-transition: width 0.25s ease;
            -moz-transition: width 0.25s ease;
            -ms-transition: width 0.25s ease;
            box-shadow: 20px 19px 34px -15px rgba(0, 0, 0, 0.5);
            -webkit-box-shadow: 20px 19px 34px -15px rgba(0, 0, 0, 0.5);
            -moz-box-shadow: 20px 19px 34px -15px rgba(0, 0, 0, 0.5);
            color: #ffffff;
            padding-left: 15px;
            padding-right: 15px;
            width: 100%;
            height: 70px; }
        .rtl .navbar .navbar-menu-wrapper {
            box-shadow: -34px 19px 34px -15px #000000;
            -webkit-box-shadow: -34px 19px 34px -15px #000000;
            -moz-box-shadow: -34px 19px 34px -15px #000000; }
        @media (max-width: 991px) {
            .navbar .navbar-menu-wrapper {
                width: auto;
                padding-left: 15px;
                padding-right: 15px; } }
        .navbar .navbar-menu-wrapper .navbar-toggler {
            border: 0;
            color: #6c7293;
            height: 70px;
            border-radius: 0px; }
        .navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
            font-size: 0.875rem; }
        @media (max-width: 991px) {
            .navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
                display: none; } }
        @media (max-width: 991px) {
            .navbar .navbar-menu-wrapper .navbar-toggler.navbar-toggler-right {
                padding-left: 15px;
                padding-right: 11px;
                border-right: none; } }
        .navbar .navbar-menu-wrapper .search-field .input-group input, .navbar .navbar-menu-wrapper .search-field .asColorPicker-wrap input {
            font-size: 0.875rem;
            padding: .5rem; }
        .navbar .navbar-menu-wrapper .search-field .input-group input:-ms-input-placeholder, .navbar .navbar-menu-wrapper .search-field .asColorPicker-wrap input:-ms-input-placeholder {
            font-size: 0.9375rem;
            color: #ffffff;
            font-weight: 300; }
        .navbar .navbar-menu-wrapper .search-field .input-group input:-moz-placeholder, .navbar .navbar-menu-wrapper .search-field .asColorPicker-wrap input:-moz-placeholder {
            font-size: 0.9375rem;
            color: #ffffff;
            font-weight: 300; }
        .navbar .navbar-menu-wrapper .search-field .input-group input::-moz-placeholder, .navbar .navbar-menu-wrapper .search-field .asColorPicker-wrap input::-moz-placeholder {
            font-size: 0.9375rem;
            color: #ffffff;
            font-weight: 300; }
        .navbar .navbar-menu-wrapper .search-field .input-group input::-webkit-input-placeholder, .navbar .navbar-menu-wrapper .search-field .asColorPicker-wrap input::-webkit-input-placeholder {
            font-size: 0.9375rem;
            color: #ffffff;
            font-weight: 300; }
        .navbar .navbar-menu-wrapper .search-field .input-group i, .navbar .navbar-menu-wrapper .search-field .asColorPicker-wrap i {
            font-size: 17px;
            margin-right: 0;
            color: #ffffff; }
        .navbar .navbar-menu-wrapper .search-field .input-group .input-group-text, .navbar .navbar-menu-wrapper .search-field .asColorPicker-wrap .input-group-text {
            background: transparent; }
        .navbar .navbar-menu-wrapper .count-indicator {
            position: relative; }
        .navbar .navbar-menu-wrapper .count-indicator .count-symbol,
        .navbar .navbar-menu-wrapper .count-indicator .count-number {
            position: absolute;
            border-radius: 100%;
            border: 2px solid #191c24; }
        .navbar .navbar-menu-wrapper .count-indicator .count-symbol {
            top: 17px;
            right: -3px;
            width: 10px;
            height: 10px; }
        .navbar .navbar-menu-wrapper .count-indicator .count-number {
            min-width: 14px;
            height: 14px;
            font-size: .5rem;
            color: #ffffff;
            bottom: 16px;
            right: -5px;
            line-height: 1;
            text-align: center; }
        .navbar .navbar-menu-wrapper .count-indicator:after {
            display: none; }
        .navbar .navbar-menu-wrapper .count-indicator .count {
            position: absolute;
            left: 66%;
            width: 7px;
            height: 7px;
            color: #ffffff;
            border-radius: 100%;
            text-align: center;
            font-size: .625rem;
            line-height: 1.5;
            top: 7px; }
        .navbar .navbar-menu-wrapper .navbar-nav {
            flex-direction: row;
            align-items: center; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link {
            color: inherit;
            font-size: 0.9375rem;
            margin-left: 1rem;
            margin-right: 1rem;
            white-space: nowrap; }
        @media (max-width: 767px) {
            .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link {
                margin-left: .8rem;
                margin-right: .8rem; } }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i {
            font-size: 1.125rem; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link .navbar-profile {
            display: flex;
            font-weight: normal;
            align-items: center; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link .navbar-profile .navbar-profile-name {
            white-space: nowrap;
            margin-left: 1rem; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link .navbar-profile i {
            color: #a7afb7; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link.create-new-button {
            padding: 0.375rem 0.75rem; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown {
            line-height: 1rem; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-toggle:after {
            color: #0090e7;
            font-size: 1rem; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu {
            border: none;
            border-radius: 4px; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown {
            position: absolute;
            font-size: 0.9rem;
            margin-top: 0;
            top: 48px;
            right: 0;
            left: auto;
            -webkit-box-shadow: 0px 0px 35px -3px black;
            -moz-box-shadow: 0px 0px 35px -3px black;
            box-shadow: 0px 0px 35px -3px black;
            padding: 0; }
        .rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown {
            right: auto;
            left: 0; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item {
            margin-bottom: 0;
            padding: 11px 13px;
            cursor: pointer; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item:hover {
            color: #fff; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item i {
            font-size: 17px; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item .ellipsis {
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis; }
        .rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item i {
            margin-left: 10px; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-divider {
            margin: 0; }
        @media (max-width: 991px) {
            .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown {
                position: static; }
            .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
                left: 20px;
                right: 20px;
                top: 70px;
                width: calc(100% - 40px); } }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-img {
            position: relative;
            width: 32px;
            height: 32px; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-img img {
            width: 32px;
            height: 32px;
            border-radius: 100%; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-img .availability-status {
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 100%;
            border: 2px solid #ffffff;
            bottom: 5px;
            right: -5px; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-img .availability-status.online {
            background: #00d25b; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-img .availability-status.offline {
            background: #fc424a; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-img .availability-status.busy {
            background: #ffab00; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-text {
            margin-left: 1.25rem; }
        .rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-text {
            margin-left: 0;
            margin-right: 1.25rem; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-text p {
            line-height: 1; }
        @media (max-width: 767px) {
            .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-text {
                display: none; } }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link.dropdown-toggle:after {
            line-height: 2; }
        @media (min-width: 992px) {
            .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
                margin-left: auto; }
            .rtl .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
                margin-left: 0;
                margin-right: auto; } }
        .navbar .navbar-menu-wrapper .search input {
            background: #191c24;
            padding: 13px 20px 11px 20px;
            border: 1px solid #2c2e33; }
        .navbar .navbar-menu-wrapper .search input::placeholder {
            color: #6c7293;
            font-size: 0.875rem; }

        @media (max-width: 991px) {
            .navbar {
                flex-direction: row; }
            .navbar .navbar-brand-wrapper {
                width: 75px; }
            .navbar .navbar-brand-wrapper .navbar-brand.brand-logo {
                display: none; }
            .navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini {
                display: inline-block; }
            .navbar-collapse {
                display: flex;
                margin-top: 0.5rem; } }

        @media (max-width: 480px) {
            .navbar .navbar-brand-wrapper {
                width: 55px; }
            .navbar .navbar-brand-wrapper .brand-logo-mini {
                padding-top: 0px; } }

        .sidebar-tinted .navbar .navbar-brand-wrapper {
            background: #fa424a; }

        /* Sidebar */
        .sidebar {
            min-height: calc(100vh - 70px);
            background: #191c24;
            font-weight: normal;
            padding: 0;
            width: 244px;
            z-index: 11;
            transition: width 0.25s ease, background 0.25s ease;
            -webkit-transition: width 0.25s ease, background 0.25s ease;
            -moz-transition: width 0.25s ease, background 0.25s ease;
            -ms-transition: width 0.25s ease, background 0.25s ease; }
        .sidebar .sidebar-brand-wrapper {
            transition: width 0.25s ease, background 0.25s ease;
            -webkit-transition: width 0.25s ease, background 0.25s ease;
            -moz-transition: width 0.25s ease, background 0.25s ease;
            -ms-transition: width 0.25s ease, background 0.25s ease;
            background: #191c24;
            width: 244px;
            height: 70px; }
        @media (max-width: 991px) {
            .sidebar .sidebar-brand-wrapper {
                width: 55px; } }
        .sidebar .sidebar-brand-wrapper .sidebar-brand {
            color: #38425e;
            font-size: 1.5rem;
            line-height: 48px;
            margin-right: 0;
            padding: 0rem 0rem 0rem 1.3rem;
            width: 100%; }
        .sidebar .sidebar-brand-wrapper .sidebar-brand:active, .sidebar .sidebar-brand-wrapper .sidebar-brand:focus, .sidebar .sidebar-brand-wrapper .sidebar-brand:hover {
            color: #252b3e; }
        .sidebar .sidebar-brand-wrapper .sidebar-brand img {
            width: calc(244px - 120px);
            max-width: 100%;
            height: 28px;
            margin: auto;
            vertical-align: middle; }
        .sidebar .sidebar-brand-wrapper .sidebar-brand.brand-logo-mini {
            display: none; }
        .sidebar .sidebar-brand-wrapper .sidebar-brand.brand-logo-mini img {
            width: calc(70px - 50px);
            max-width: 100%;
            height: 28px;
            margin: auto; }
        .sidebar .nav {
            overflow: hidden;
            flex-wrap: nowrap;
            flex-direction: column;
            margin-bottom: 60px;
            padding-top: 70px; }
        @media (max-width: 992px) {
            .sidebar .nav {
                padding-top: 0; } }
        .sidebar .nav .nav-item {
            -webkit-transition-duration: 0.25s;
            -moz-transition-duration: 0.25s;
            -o-transition-duration: 0.25s;
            transition-duration: 0.25s;
            transition-property: background;
            -webkit-transition-property: background;
            padding-right: 20px; }
        .sidebar .nav .nav-item .collapse {
            z-index: 999; }
        .sidebar .nav .nav-item .nav-link {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            white-space: nowrap;
            padding: 0.8rem 10px 0.8rem 1.188rem;
            color: #6c7293;
            -webkit-transition-duration: 0.45s;
            -moz-transition-duration: 0.45s;
            -o-transition-duration: 0.45s;
            transition-duration: 0.45s;
            transition-property: color;
            -webkit-transition-property: color;
            height: 46px;
            border-radius: 0px 100px 100px 0px; }
        .sidebar .nav .nav-item .nav-link i {
            color: inherit; }
        .sidebar .nav .nav-item .nav-link i.menu-icon {
            font-size: 1rem;
            line-height: 1;
            margin-left: auto;
            color: #bba8bff5; }
        .rtl .sidebar .nav .nav-item .nav-link i.menu-icon {
            margin-left: 0;
            margin-right: auto; }
        .sidebar .nav .nav-item .nav-link i.menu-icon:before {
            vertical-align: middle; }
        .sidebar .nav .nav-item .nav-link i.menu-arrow {
            font: normal normal normal 24px/1 "Material Design Icons";
            line-height: 1;
            font-size: 1rem;
            margin-left: auto;
            color: rgba(108, 114, 147, 0.36); }
        .rtl .sidebar .nav .nav-item .nav-link i.menu-arrow {
            margin-left: 0;
            margin-right: auto; }
        .sidebar .nav .nav-item .nav-link i.menu-arrow:before {
            content: "\f140";
            font-size: inherit;
            color: inherit; }
        .sidebar .nav .nav-item .nav-link .menu-title {
            color: inherit;
            display: inline-block;
            font-size: 0.9375rem;
            line-height: 1;
            vertical-align: middle; }
        .sidebar .nav .nav-item .nav-link .badge {
            margin-right: auto;
            margin-left: 1rem; }
        .sidebar .nav .nav-item.active > .nav-link {
            background: #0f1015;
            position: relative; }
        .sidebar .nav .nav-item.active > .nav-link:before {
            content: "";
            width: 3px;
            height: 100%;
            background: #0090e7;
            display: inline-block;
            position: absolute;
            left: 0;
            top: 0; }
        .sidebar .nav .nav-item.active > .nav-link .menu-title {
            color: #ffffff; }
        .sidebar .nav .nav-item.active > .nav-link i {
            color: #ffffff; }
        .sidebar .nav .nav-item.nav-profile .nav-link {
            height: auto;
            line-height: 1;
            border-top: 0;
            padding: 1.25rem 0; }
        .sidebar .nav .nav-item.nav-profile .nav-link .nav-profile-image {
            width: 44px;
            height: 44px; }
        .sidebar .nav .nav-item.nav-profile .nav-link .nav-profile-image img {
            width: 44px;
            height: 44px;
            border-radius: 100%; }
        .sidebar .nav .nav-item.nav-profile .nav-link .nav-profile-text {
            margin-left: 1rem; }
        .rtl .sidebar .nav .nav-item.nav-profile .nav-link .nav-profile-text {
            margin-left: auto;
            margin-right: 1rem; }
        .sidebar .nav .nav-item.nav-profile .nav-link .nav-profile-badge {
            font-size: 1.125rem;
            margin-left: auto; }
        .rtl .sidebar .nav .nav-item.nav-profile .nav-link .nav-profile-badge {
            margin-left: 0;
            margin-right: auto; }
        .sidebar .nav .nav-item.sidebar-actions {
            margin-top: 1rem; }
        .sidebar .nav .nav-item.sidebar-actions .nav-link {
            border-top: 0;
            display: block;
            height: auto; }
        .sidebar .nav .nav-item.sidebar-actions:hover {
            background: initial; }
        .sidebar .nav .nav-item.sidebar-actions:hover .nav-link {
            color: initial; }
        .sidebar .nav .nav-item.profile {
            padding-right: 0px; }
        .rtl .sidebar .nav .nav-item.profile {
            padding-right: 10px; }
        .sidebar .nav .nav-item.profile .profile-desc {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            padding: 0.6rem 1.17rem;
            line-height: 1.25; }
        .sidebar .nav .nav-item.profile .profile-desc .profile-name {
            margin-left: 1rem; }
        .rtl .sidebar .nav .nav-item.profile .profile-desc .profile-name {
            margin-left: 0;
            margin-right: 1rem; }
        .sidebar .nav .nav-item.profile .profile-desc .profile-name span {
            font-size: 12px;
            color: #6c7293;
            white-space: nowrap; }
        .sidebar .nav .nav-item.profile .profile-desc .profile-name h5 {
            white-space: nowrap; }
        .sidebar .nav .nav-item.profile .profile-desc .profile-pic {
            display: flex;
            align-items: center; }
        .sidebar .nav .nav-item.profile .profile-desc .profile-pic .count-indicator {
            position: relative; }
        .sidebar .nav .nav-item.profile .profile-desc .profile-pic .count-indicator .count-symbol,
        .sidebar .nav .nav-item.profile .profile-desc .profile-pic .count-indicator .count-number {
            position: absolute;
            border-radius: 100%;
            border: 2px solid #191c24; }
        .sidebar .nav .nav-item.profile .profile-desc .profile-pic .count-indicator .count-symbol {
            top: 17px;
            right: -3px;
            width: 10px;
            height: 10px; }
        .sidebar .nav .nav-item.profile .profile-desc .profile-pic .count-indicator .count-number {
            min-width: 14px;
            height: 14px;
            font-size: .5rem;
            color: #ffffff;
            bottom: 16px;
            right: -5px;
            line-height: 1;
            text-align: center; }
        .sidebar .nav .nav-item.profile .profile-desc .profile-pic .count-indicator:after {
            display: none; }
        .sidebar .nav .nav-item.profile .profile-desc .profile-pic .count-indicator .count {
            position: absolute;
            left: 66%;
            width: 10px;
            height: 10px;
            color: #ffffff;
            border-radius: 100%;
            text-align: center;
            font-size: .625rem;
            line-height: 1.5;
            top: 26px;
            border: 2px solid #2c2e33; }
        .sidebar .nav .nav-item.profile .profile-desc .mdi-dots-vertical {
            font-size: 20px;
            color: #6c7293; }
        .sidebar .nav .nav-item.profile .profile-desc .dropdown-menu {
            padding: 0;
            margin-top: 1.25rem; }
        .sidebar .nav .nav-item.profile .profile-desc .dropdown-menu .dropdown-item {
            padding: 11px 13px; }
        .sidebar .nav .nav-item.profile .profile-desc .dropdown-menu .dropdown-item.preview-item {
            align-items: center; }
        .sidebar .nav .nav-item.profile .profile-desc .dropdown-menu .dropdown-item.preview-item .preview-thumbnail .preview-icon {
            width: 30px;
            height: 30px; }
        .sidebar .nav .nav-item.profile .profile-desc .dropdown-menu .dropdown-item.preview-item .preview-thumbnail .preview-icon i {
            font-size: 0.875rem; }
        .sidebar .nav .nav-item.profile .profile-desc .dropdown-menu .dropdown-item:hover {
            color: inherit; }
        .sidebar .nav .nav-item.profile .profile-desc .dropdown-menu .dropdown-divider {
            margin: 0; }
        .sidebar .nav .nav-item.nav-category {
            padding: 0.5rem 1.188rem;
            line-height: 1; }
        .sidebar .nav .nav-item.nav-category .nav-link {
            color: #6c7293;
            font-weight: 500;
            font-size: 14px;
            font-weight: 500;
            height: auto;
            padding-left: 0; }
        .sidebar .nav .nav-item .menu-icon {
            margin-right: 0.5rem;
            font-size: 0.8125rem;
            line-height: 1;
            background: rgba(108, 114, 147, 0.2);
            width: 31px;
            height: 31px;
            border-radius: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff; }
        .sidebar .nav .nav-item .menu-icon i {
            font-size: 0.875rem; }
        .sidebar .nav.sub-menu {
            margin-bottom: 0;
            margin-top: 0;
            padding: 0 0 0 3.25rem;
            list-style: none; }
        .sidebar .nav.sub-menu .nav-item {
            padding: 0; }
        .sidebar .nav.sub-menu .nav-item .nav-link {
            color: #6c7293;
            padding: 0.5rem 0.35rem;
            position: relative;
            font-size: 0.855rem;
            line-height: 1;
            height: auto;
            border-top: 0; }
        .sidebar .nav.sub-menu .nav-item .nav-link.active {
            color: #ffffff;
            background: transparent; }
        .sidebar .nav.sub-menu .nav-item .nav-link:hover {
            color: #ffffff; }
        .sidebar .nav.sub-menu .nav-item:hover {
            background: transparent; }
        .sidebar .nav:not(.sub-menu) > .nav-item:hover:not(.nav-category):not(.account-dropdown) > .nav-link {
            background: #0f1015;
            color: #ffffff; }
        .sidebar .nav .menu-items:nth-child(5n+1) .nav-link .menu-icon i {
            color: #0090e7; }
        .sidebar .nav .menu-items:nth-child(5n+2) .nav-link .menu-icon i {
            color: #00d25b; }
        .sidebar .nav .menu-items:nth-child(5n+3) .nav-link .menu-icon i {
            color: #8f5fe8; }
        .sidebar .nav .menu-items:nth-child(5n+4) .nav-link .menu-icon i {
            color: #ffab00; }
        .sidebar .nav .menu-items:nth-child(5n+5) .nav-link .menu-icon i {
            color: #fc424a; }

        /* style for off-canvas menu*/
        @media screen and (max-width: 991px) {
            .sidebar-offcanvas {
                position: fixed;
                max-height: calc(100vh - 70px);
                top: 70px;
                bottom: 0;
                overflow: auto;
                right: -244px;
                -webkit-transition: all 0.25s ease-out;
                -o-transition: all 0.25s ease-out;
                transition: all 0.25s ease-out; }
            .sidebar-offcanvas.active {
                right: 0; } }

        .sidebar-tinted .sidebar {
            background: #fa424a; }
        .sidebar-tinted .sidebar .sidebar-brand-wrapper {
            background: #fa424a; }
        .sidebar-tinted .sidebar .nav .nav-item .nav-link {
            color: #ffffff; }
        .sidebar-tinted .sidebar .nav .nav-item .nav-link .menu-icon i {
            color: white; }
        .sidebar-tinted .sidebar .nav .nav-item .nav-link i.menu-arrow {
            color: rgba(255, 255, 255, 0.36); }
        .sidebar-tinted .sidebar .nav .nav-item.active > .nav-link {
            background: rgba(12, 14, 14, 0.1); }
        .sidebar-tinted .sidebar .nav .nav-item.active:before {
            background: #ffffff; }
        .sidebar-tinted .sidebar .nav .nav-item.profile .profile-desc .profile-name span {
            color: #ffffff; }
        .sidebar-tinted .sidebar .nav .nav-item.profile .profile-desc .mdi-dots-vertical {
            color: #ffffff; }
        .sidebar-tinted .sidebar .nav .nav-item.profile .profile-pic .count-indicator .count {
            border: 2px solid #fa424a; }
        .sidebar-tinted .sidebar .nav.sub-menu .nav-item .nav-link:hover {
            font-weight: 500; }
        .sidebar-tinted .sidebar .nav:not(.sub-menu) > .nav-item:hover:not(.nav-category):not(.account-dropdown) > .nav-link {
            background: rgba(12, 14, 14, 0.1); }

        /* Layouts */
        .navbar.fixed-top + .page-body-wrapper {
            padding-top: 70px; }

        @media (min-width: 992px) {
            .sidebar-icon-only .navbar {
                left: 70px; }
            .sidebar-icon-only .navbar .navbar-menu-wrapper {
                width: 100%; }
            .sidebar-icon-only .sidebar {
                width: 70px; }
            .sidebar-icon-only .sidebar .sidebar-brand-wrapper {
                width: 70px; }
            .sidebar-icon-only .sidebar .sidebar-brand-wrapper .brand-logo {
                display: none; }
            .sidebar-icon-only .sidebar .sidebar-brand-wrapper .brand-logo-mini {
                display: inline-block; }
            .sidebar-icon-only .sidebar .nav {
                overflow: visible; }
            .sidebar-icon-only .sidebar .nav .nav-item {
                position: relative;
                padding: 0; }
            .sidebar-icon-only .sidebar .nav .nav-item .profile-name {
                display: none; }
            .sidebar-icon-only .sidebar .nav .nav-item .mdi-dots-vertical {
                display: none; }
            .sidebar-icon-only .sidebar .nav .nav-item.account-dropdown {
                display: none; }
            .sidebar-icon-only .sidebar .nav .nav-item .nav-link {
                text-align: center; }
            .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title,
            .sidebar-icon-only .sidebar .nav .nav-item .nav-link .badge, .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-sub-title {
                display: none; }
            .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title {
                border-radius: 0 5px 5px 0px; }
            .rtl.sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title {
                border-radius: 5px 0 0 5px; }
            .sidebar-icon-only .sidebar .nav .nav-item .nav-link i.menu-icon {
                margin-right: 0;
                margin-left: 0; }
            .sidebar-icon-only .sidebar .nav .nav-item .nav-link i.menu-arrow {
                display: none; }
            .sidebar-icon-only .sidebar .nav .nav-item .nav-link[aria-expanded] .menu-title {
                border-radius: 0 5px 0 0px; }
            .rtl.sidebar-icon-only .sidebar .nav .nav-item .nav-link[aria-expanded] .menu-title {
                border-radius: 5px 0 0 0; }
            .sidebar-icon-only .sidebar .nav .nav-item.nav-profile {
                display: none; }
            .sidebar-icon-only .sidebar .nav .nav-item.nav-category {
                display: none; }
            .sidebar-icon-only .sidebar .nav .nav-item.nav-doc {
                margin: 0; }
            .sidebar-icon-only .sidebar .nav .nav-item.nav-doc i {
                display: block; }
            .sidebar-icon-only .sidebar .nav .nav-item .collapse {
                display: none; }
            .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
                display: -webkit-flex;
                display: flex;
                -webkit-align-items: center;
                align-items: center;
                background: #0f1015;
                padding: 0.5rem 1.4rem;
                left: 70px;
                position: absolute;
                text-align: left;
                top: 0;
                bottom: 0;
                width: 190px;
                z-index: 1;
                line-height: 1.8; }
            .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
                background: #0f1015; }
            .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
                left: auto;
                right: 70px;
                text-align: left; }
            .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title:after {
                display: none; }
            .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse,
            .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
                display: block;
                padding: .5rem 0;
                background: #0f1015;
                border-radius: 0 0 5px 0;
                position: absolute;
                left: 70px;
                width: 190px; }
            .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse, .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
                background: #191c24; }
            .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse, .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
                left: auto;
                right: 70px;
                border-radius: 0 0 0 5px; }
            .sidebar-icon-only .sidebar .nav.sub-menu {
                padding: 0 0 0 1.5rem; }
            .sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link {
                text-align: left;
                padding-left: 20px; }
            .sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link:before {
                content: "";
                display: inline-block;
                width: 5px;
                height: 5px;
                border-radius: 50%;
                background-color: #6c7293;
                position: absolute;
                left: 0; }
            .sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link:hover:before {
                background-color: white; }
            .rtl.sidebar-icon-only .sidebar .nav.sub-menu .nav-item {
                margin-left: 0; }
            .rtl.sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link {
                text-align: right; }
            .rtl.sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link:before {
                left: 0;
                right: unset; }
            .sidebar-icon-only .sidebar .sidebar-actions {
                display: none; }
            .sidebar-icon-only.rtl .sidebar .nav .nav-item.profile {
                padding-right: 0; }
            .sidebar-icon-only .page-body-wrapper {
                width: calc(100% - 70px);
                transition: all 0.25s ease;
                -webkit-transition: all 0.25s ease;
                -moz-transition: all 0.25s ease;
                -ms-transition: all 0.25s ease; } }

        .page-body-wrapper {
            min-height: 100vh;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            padding-left: 0;
            padding-right: 0;
            transition: all 0.25s ease;
            width: calc(100% - 244px); }
        .page-body-wrapper.full-page-wrapper {
            width: 100%;
            min-height: 100vh; }
        @media (max-width: 992px) {
            .page-body-wrapper {
                width: 100%; } }

        .container-scroller {
            display: flex;
            position: relative; }

        .main-panel {
            transition: width 0.25s ease, margin 0.25s ease;
            width: 100%;
            min-height: calc(100vh - 70px);
            padding-top: 70px;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column; }
        @media (max-width: 991px) {
            .main-panel {
                margin-left: 0;
                width: 100%; } }

        .content-wrapper {
            background: #000000;
            padding: 1.875rem 1.75rem;
            width: 100%;
            -webkit-flex-grow: 1;
            flex-grow: 1; }

        /*# sourceMappingURL=maps/style.css.map */

    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('/admin/assets/images/logo.svg')}}" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('/admin/assets/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="{{asset('/admin/assets/images/faces/5.jpg')}}" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">Ahmed Essam</h5>
                            <span>Gold Member</span>
                        </div>
                    </div>
                    <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-onepassword  text-info"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar-today text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('userHome')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
                    <span class="menu-title">Products</span>
                    <i class="menu-arrow"></i>
                </a>
                <div >
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{url('add_product')}}">Add Products</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{url('show_product')}}">Show Products</a></li>
                        <li class="nav-item"> <a class="nav-link" href="">Typography</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('show_category')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">category</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('order')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                    <span class="menu-title">Orders</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{asset('pages/charts/chartjs.html')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
                    <span class="menu-title">Charts</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{asset('pages/icons/mdi.html')}}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
                    <span class="menu-title">Icons</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
                    <span class="menu-title">User Pages</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{asset('pages/samples/blank-page.html')}}"> Blank Page </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{asset('pages/samples/error-404.html')}}"> 404 </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{asset('pages/samples/error-500.html')}}"> 500 </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{asset('pages/samples/login.html')}}"> Login </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{asset('pages/samples/register.html')}}"> Register </a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{asset('http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
                    <span class="menu-title">Documentation</span>
                </a>
            </li>
        </ul>
    </nav>

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
                                <img src="{{asset('Product/'.$order->image)}}" class="img_product">
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
<script src="{{('/admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('/admin/assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('/admin/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{('/admin/assets/js/off-canvas.js')}}"></script>
<script src="{{asset('/admin/assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('/admin/assets/js/misc.js')}}"></script>
<script src="{{asset('/admin/assets/js/settings.js')}}"></script>
<script src="{{asset('/admin/assets/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('/admin/assets/js/dashboard.js')}}"></script>
<!-- End custom js for this page -->

</body>
</html>
