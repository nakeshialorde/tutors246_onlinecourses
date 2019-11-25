@extends('layouts.app')

@section('content')

<div id="app">
   <div class="content">
      <br /><br /> <h1><center>{{$title}}</center></h1>
   </div>
   <br />
   <div class="container">
      <div class="container">
         <div class="row">
            <div class="col-md-8 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-heading">Login</div>

                  <div class="panel-body">
                     <form class="form-horizontal" method="POST" action="http://everythingbusiness.dev/login">
                        <input type="hidden" name="_token" value="Ph2OADc8aYyKFA8UHmN1FE89IbfZoFzilb1XSmM5">

                        <div class="form-group">
                           <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                           <div class="col-md-6">
                              <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                           </div>
                        </div>

                        <div class="form-group">
                           <label for="password" class="col-md-4 control-label">Password</label>

                           <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" required>

                           </div>
                        </div>

                        <div class="form-group">
                           <div class="col-md-6 col-md-offset-4">
                              <div class="checkbox">
                                 <label>
                                    <input type="checkbox" name="remember" > Remember Me
                                 </label>
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="col-md-8 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                 Login
                              </button>

                              <a class="btn btn-link" href="http://everythingbusiness.dev/password/reset">
                                 Forgot Your Password?
                              </a>
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
<script src="http://everythingbusiness.dev/js/app.js"></script>


@endsection
