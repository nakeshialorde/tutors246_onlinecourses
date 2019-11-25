<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tutors246 Online Courses</title>

<style>
.panel1
{
 background-color: #fff;
 font-size: 15px;
 font-style: normal;
 font-weight: normal;
 font-size-adjust: auto;
 padding-left: 50px;
 padding-right: 50px;
}

.button
{
  font-color: #fff;
}
</style>
</head>

<body>
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
      <div class="jumbotron">
      <div style="text-align: center;">
      <img src="http://tutors246.com/img/logo.png.png">

      <h2><center>Welcome to our online learning community!</center></h2>
			<p><small>ACHIEVE ACADEMIC SUCCESS FROM THE COMFORT OF YOUR HOME</small></p>

       <div class="panel1"><p></p>
			<center><br /><h3> About our Online Courses </h3>
			<br />At Tutors246 our online learning programs provide comprehensive coverage of the CSEC syllabus for each subject, with careful class="list-unstyled mt-3 mb-4"ly designed lesson plans and tests to monitor your progress. When you sign up for one of our packages, you will receive progress reports on completion of each section to provide you with insights on your readiness for the exam. We also provide home and on-line tutors to assist you in preparing for the examination by providing guidance on your weaker areas, highlighted in the progress reports. Each course contains several years of timed past papers, to help you reach the appropriate comfort level and readiness for your examinations with both text and video solutions at the end of each section.<br />
      <br />
			<p>Call (246) 236-3949 for further information. </center></p>



      <div align="center"><p><h3><a href="/protectedpage"> Make Cash Payment </a> </h3></p>
      <small>Follow link after making cash payment, with code given to register </small>
    </div>

<br />
      <h3>Pricing</h3>
      Select the course of your choice, click on check out, make payment and you will be redirected to our registration page. All our courses are currently CXC CSEC Courses but addtional courses for CAPE and Common Entrance are comming soon. Each course is $99 Bds and has access to online tutors.
      <br /><br />

<center>
          <?php if(!empty($response['code'])) { ?>
          <div class="alert alert-<?php echo $response['code']; ?>">
              <?php echo $response['message']; ?>
          </div>
          <?php } ?>

                  <h4 class="my-0 font-weight-normal">Mathematics</h4>

                  <ul class="list-unstyled mt-3 mb-4">
                      <li> Comprehensive coverage of syllabus</li>
                      <li>Progress Reports</li>
                      <li>Practice Tests and Past Papers</li>
                      <li>Access to tutors (terms and conditions apply)</li>
                  </ul class="list-unstyled mt-3 mb-4">

                  <script>
                  var express = require('express');
  var request = require('request');
  // Add your credentials:
  // Add your client ID and secret
  var CLIENT =
    'AUJoKVGO3q1WA1tGgAKRdY6qx0qQNIQ6vl6D3k7y64T4qh5WozIQ7V3dl3iusw5BwXYg_T5FzLCRguP8';
  var SECRET =
    'EOw8LNwDhM7esrQ3nHfzKc7xiWnJc83Eawln4YLfUgivfx1LGzu9Mj0F5wlarilXDqdK9Q5aHVo-VGjJ';
  var PAYPAL_API = 'https://api.sandbox.paypal.com';
  express()
    // Set up the payment:
    // 1. Set up a URL to handle requests from the PayPal button
    .post('/my-api/create-payment/', function(req, res)
    {
      // 2. Call /v1/payments/payment to set up the payment
      request.post(PAYPAL_API + '/v1/payments/payment',
      {
        auth:
        {
          user: CLIENT,
          pass: SECRET
        },
        body:
        {
          intent: 'sale',
          payer:
          {
            payment_method: 'paypal'
          },
          transactions: [
          {
            amount:
            {
              total: '49.5',
              currency: 'USD'
            }
          }],
          redirect_urls:
          {
            return_url: 'http://onlinecourses.dev/register',
            cancel_url: 'http://onlinecourses.dev/'
          }
        },
        json: true
      }, function(err, response)
      {
        if (err)
        {
          console.error(err);
          return res.sendStatus(500);
        }
        // 3. Return the payment ID to the client
        res.json(
        {
          id: response.body.id
        });
      });
    })
    // Execute the payment:
    // 1. Set up a URL to handle requests from the PayPal button.
    .post('/my-api/execute-payment/', function(req, res)
    {
      // 2. Get the payment ID and the payer ID from the request body.
      var paymentID = req.body.paymentID;
      var payerID = req.body.payerID;
      // 3. Call /v1/payments/payment/PAY-XXX/execute to finalize the payment.
      request.post(PAYPAL_API + '/v1/payments/payment/' + paymentID +
        '/execute',
        {
          auth:
          {
            user: CLIENT,
            pass: SECRET
          },
          body:
          {
            payer_id: payerID,
            transactions: [
            {
              amount:
              {
                total: '49.50',
                currency: 'USD'
              }
            }]
          },
          json: true
        },
        function(err, response)
        {
          if (err)
          {
            console.error(err);
            return res.sendStatus(500);
          }
          // 4. Return a success response to the client
          res.json(
          {
            status: 'success'
          });
        });
    }).listen(3000, function()
    {
      console.log('Server listening at http://localhost:3000/');
    });
  // Run `node ./server.js` in your terminal
</script>
      <!--     </div>

     <div class="col-md-4"><center>
                  <h4 class="my-0 font-weight-normal">English A</h4>
                  <ul class="list-unstyled mt-3 mb-4">
                      <li> Comprehensive coverage of syllabus</li>
                      <li>Progress Reports</li>
                      <li>Practice Tests and Past Papers</li>
                      <li>Access to tutors (terms and conditions apply)</li>
                  </ul class="list-unstyled mt-3 mb-4">
                  <center><button type="button"class="btn btn-light"><a href="/checkout">Checkout</a></button></center></center>
              </div>


      <div class="col-md-4"><center>
                  <h4 class="my-0 font-weight-normal">Social Studies </h4>
                <ul class="list-unstyled mt-3 mb-4">
                      <li> Comprehensive coverage of syllabus</li>
                      <li>Progress Reports</li>
                      <li>Practice Tests and Past Papers</li>
                      <li>Access to tutors (terms and conditions apply)</li>
                  </ul class="list-unstyled mt-3 mb-4">
                  <center><button type="button"class="btn btn-light"><a href="/checkout">Checkout</a></button></center></center>
              </div>
    </div><br />

<div class="row">
    <div class="col-md-4"><center>
                  <h4 class="my-0 font-weight-normal">POB</h4>
                  <ul class="list-unstyled mt-3 mb-4">
                      <li> Comprehensive coverage of syllabus</li>
                      <li>Progress Reports</li>
                      <li>Practice Tests and Past Papers</li>
                      <li>Access to tutors (terms and conditions apply)</li>
                  </ul class="list-unstyled mt-3 mb-4">
                  <center><button type="button"class="btn btn-light"><a href="/checkout">Checkout</a></button></center></center>

              </div>


              <div class="col-md-4"><center>
                  <h4 class="my-0 font-weight-normal">POA</h4>
                <ul class="list-unstyled mt-3 mb-4">
                      <li> Comprehensive coverage of syllabus</li>
                      <li>Progress Reports</li>
                      <li>Practice Tests and Past Papers</li>
                      <li>Access to tutors (terms and conditions apply)</li>
                  </ul class="list-unstyled mt-3 mb-4">
                  <center><button type="button"class="btn btn-light"><a href="/checkout">Checkout</a></button></center></center>
<br /><br />
              </div>
          </div>-->
        </div>
      </div>


      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
      <script src="../../assets/js/vendor/holder.min.js"></script>
      <script>
          Holder.addTheme('thumb', {
              bg: '#55595c',
              fg: '#eceeef',
              text: 'Thumbnail'
          });
      </script>
</body>
</html>
