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
</head>

<body>

   <div class="content">
   <div class="center"> <center>
   <br />
   <p><img src="http://tutors246.com/img/logo.png.png" class="img-responsive" height="100px" width="100px">
   <h1>Welcome to our online learning community!</h1><br /><medium>ACHIEVE ACADEMIC SUCCESS FROM THE COMFORT OF YOUR HOME!</medium><br /><br />
   <img src="https://images.pexels.com/photos/289738/pexels-photo-289738.jpeg?auto=compress&cs=tinysrgb&h=750&w=850" class="img-responsive"></p>
   </div>

     <div class="container"><div class="jumbotron"><div class="center"> <center>
     <h2><b>About our Online Courses</b></h2>
     <p>At Tutors246 our online learning programs provide comprehensive coverage of the CSEC syllabus for each subject, with carefully designed lesson plans and
        tests to monitor your progress. When you sign up for one of our packages, you will receive progress reports on completion of each section to provide you
        with insights on your readiness for the exam. We also provide home and on-line tutors to assist you in preparing for the examination by providing guidance
        on your weaker areas, highlighted in the progress reports. Each course contains several years of timed past papers, to help you reach the appropriate
        comfort level and readiness for your examinations with both text and video solutions at the end of each section.
      </p>

      <p><b>Call (246) 236-3949 for further information.</b></p>
      </center>
      </div>
      </div>
      </div>
    </div>

    <div class="center"><center>
    <h2><b>Steps:</b></h2>
    <ul class="list-group">
    <li class="list-group-item"><b>Go to the the registration page.</b></li>
    <li class="list-group-item"><b>Select the course of your choice.</b></li>
    <li class="list-group-item"><b>Make Payment.</b><li>
    <li class="list-group-item"><b>Register and Login!</b><li>
    <li class="list-group-item"><b>Start your online course.</b><li>
    </ul>

              <!-- Authentication Links -->
              @if (Auth::guest())
              <a href="{{ route('login') }}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-log-in"></span>  &nbsp;Login</a>
              <a href="/signup" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-user"></span>  &nbsp;Signup</a>
              @else
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endif


    </center>
    <br />
    <br />

</div>

</body>
</html>
