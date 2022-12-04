<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    <title>Send Email</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: #1f2937;
        }
        * {
            box-sizing: border-box;
        }


        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #07728d;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>
<body>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
@endif
<h2 style="text-align: center;color: #2caae1;padding: 20px">Send Email to {{$order->email}}</h2>

<div class="container">
    <form action="{{url('order/send_email_info',$order->id)}}" method="post">
        @csrf
        <div class="row">
            <div class="col-25">
                <label for="greeting"> Greeting</label>
            </div>
            <div class="col-75">
                <input type="text"  name="greeting" placeholder="Enter a nice greeting">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Firisting</label>
            </div>
            <div class="col-75">
                <input type="text"  name="firisting" placeholder="Enter email firisting" >
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label >Email Body</label>
            </div>
            <div class="col-75">
                <input type="text"  name="body" placeholder="Write body.." style="height:200px"></input>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label> Button name</label>
            </div>
            <div class="col-75">
                <input type="text"  name="button" value="click here" >
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label> URL</label>
            </div>
            <div class="col-75">
                <input type="text"  name="url" value='https://www.alahlyegypt.com/ar'>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label> last line</label>
            </div>
            <div class="col-75">
                <input type="text"  name="last_line" placeholder="email last line" >
            </div>
        </div>
        <br>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>

</body>
</html>
