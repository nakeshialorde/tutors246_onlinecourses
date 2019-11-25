<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Tutors246 Online Courses</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/docs/4.1/examples/pricing/pricing.css" rel="stylesheet">
</head>

<body>
<div class="content">

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Tutors246</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="http://tutors246.com/">Home</a>
            <a class="p-2 text-dark" href="http://tutors246.com/services.html">Services</a>
            <a class="p-2 text-dark" href="http://tutors246.com/earlychildhood.html">Resources</a>
            <a class="p-2 text-dark" href="https://tutors246.wordpress.com/">Blog</a>
        </nav>
        <a class="btn btn-outline-primary" href="http://tutors246.com/requestatutor.html">Contact Us</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php if(!empty($response['code'])) { ?>
                <div class="alert alert-<?php echo $response['code']; ?>">
                    <?php echo $response['message']; ?>
                </div>
                <?php } ?>
                <div class="panel panel-default">
                    <div class="panel-heading">Laravel PayPal Demo</div>
                    <div class="panel-body">
                        <ul>
                            <li><a href="{{url('paypal/ec-checkout')}}">Express Checkout</a></li>
                            <li><a href="{{url('paypal/ec-checkout?mode=recurring')}}">Create Recurring Payments Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>