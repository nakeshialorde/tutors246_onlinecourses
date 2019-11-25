<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="cImy2Jbl4TNT5HWumUUY1rwOrH7rvtMjN2Hweq4r">

   <title>Tutors246</title>

   <!-- Styles -->
   <link href="http://onlinecourses.dev/css/app.css" rel="stylesheet">
   <link href="http://onlinecourses.dev/sass/_custom.scss" rel="stylesheet">

</head>
<body>
<div id="app">

   <div class="content">
      <br /><br />
      <p> <center><img src="http://tutors246.com/img/logo.png.png" class="img-responsive" height="100px" width="100px"></center><br />
      <center><h1>Welcome to our online learning community!</h1><br />
   </div>
   <div class="container">
      <div class="container">
         <div class="row">
            <div class="col-md-8 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-heading">Register</div>

                  <div class="panel-body">
                     <form class="form-horizontal" method="POST" action="http://onlinecourses.dev/register">
                        <input type="hidden" name="_token" value="cImy2Jbl4TNT5HWumUUY1rwOrH7rvtMjN2Hweq4r">

                        <div class="form-group">
                           <label for="name" class="col-md-4 control-label">Name</label>

                           <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="name" value="" required autofocus>

                           </div>
                        </div>

                        <div class="form-group">
                           <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                           <div class="col-md-6">
                              <input id="email" type="email" class="form-control" name="email" value="" required>

                           </div>
                        </div>

                        <div class="form-group">
                           <label for="password" class="col-md-4 control-label">Password</label>

                           <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" required>

                           </div>
                        </div>

                        <div class="form-group">
                           <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                           <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                 Register
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Scripts -->
<script src="http://onlinecourses.dev/js/app.js"></script>
</body>
</html>
