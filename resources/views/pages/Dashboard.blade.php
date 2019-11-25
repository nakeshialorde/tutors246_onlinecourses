<!--

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::table('quizzes')->get();

        return view('quizzes.index', ['quizzes' => $quizzes]);
    }
}
-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://mediacity.co.in/quickquiz/public/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://mediacity.co.in/quickquiz/public/css/ionicons.min.css">
  <!-- Admin Theme style -->
  <link rel="stylesheet" href="https://mediacity.co.in/quickquiz/public/css/AdminLTE.css">
  <link rel="stylesheet" href="https://mediacity.co.in/quickquiz/public/css/skin-black.css">
  <!-- Select 2 -->
  <link rel="stylesheet" href="https://mediacity.co.in/quickquiz/public/css/select2.min.css">
  <!-- DataTable -->
  <link rel="stylesheet" href="https://mediacity.co.in/quickquiz/public/css/datatables.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

 <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  @include('inc.navbar')
  @extends('layouts.app')

   <h1><center>{{$title}}</center></h1>

 <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
     <div class="my-3 py-3">
       <h2 class="display-5"></h2>
<p>Welcome to Tutors246 Online Community {{ Auth::user()->name }}!</p>
     </div>
     <div class="panel"><img src="https://images.pexels.com/photos/289742/pexels-photo-289742.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" height="650px" width="100%"></div>
   </div>
 </div>

    <h1>
      <center>Student Report By Chapter</center>

    </h1>
  </section>
  <!-- Main content -->
  <section class="content container-fluid">
    <center>
      <div class="row">
      <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">  Chapter 1 - Number Theory</h3>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                <li>Your Score<i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>1</li>
                <li>20</li>
                <li>20</li>
                <li>20 minutes</li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
      <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">  Chapter 2 - Consumer Arithmetic</h3>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                <li>Your Score<i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>1</li>
                <li>20</li>
                <li>20</li>
                <li>20 minutes</li>
                <li> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
      <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">  Chapter 3 - Sets</h3>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                <li>Your Score<i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>1</li>
                <li>20</li>
                <li>20</li>
                <li>20 minutes</li>
                <li> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
</center>
    <center>  <div class="row">
      <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">  Chapter 4 - Measurement</h3>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                <li>Your Score<i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>1</li>
                <li>20</li>
                <li>20</li>
                <li>20 minutes</li>
                <li> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
      <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">  Chapter 5 - Statistics</h3>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                <li>Your Score<i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>1</li>
                <li>20</li>
                <li>20</li>
                <li>20 minutes</li>
                <li> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
      <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">  Chapter 6 - Algebra</h3>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                <li>Your Score<i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>1</li>
                <li>20</li>
                <li>20</li>
                <li>20 minutes</li>
                <li> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
</center>

<center>
      <div class="row">
      <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">  Chapter 7 - Relations and Graphs</h3>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                <li>Your Score<i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>1</li>
                <li>20</li>
                <li>20</li>
                <li>20 minutes</li>
                <li> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
      <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">  Chapter 8 - Geometry</h3>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                <li>Your Score<i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>1</li>
                <li>20</li>
                <li>20</li>
                <li>20 minutes</li>
                <li> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
      <div class="col-md-4">
        <div class="quiz-card">
          <h3 class="quiz-name">  Chapter 9 - Vectors</h3>
          <div class="row">
            <div class="col-xs-6 pad-0">
              <ul class="topic-detail">
                <li>Per Question Mark <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Marks <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Questions <i class="fa fa-long-arrow-right"></i></li>
                <li>Total Time <i class="fa fa-long-arrow-right"></i></li>
                <li>Your Score<i class="fa fa-long-arrow-right"></i></li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="topic-detail right">
                <li>1</li>
                <li>20</li>
                <li>20</li>
                <li>20 minutes</li>
                <li> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
</center>

      <center><small>See progress report for past paper scores </small></center>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- /.content-wrapper -->
 <!-- Main Footer -->

</div>
<!-- ./wrapper -->
<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="https://mediacity.co.in/quickquiz/public/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://mediacity.co.in/quickquiz/public/js/bootstrap.min.js"></script>
<!-- DataTable -->
<script src="https://mediacity.co.in/quickquiz/public/js/datatables.min.js"></script>
<!-- Select2 -->
<script src="https://mediacity.co.in/quickquiz/public/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="https://mediacity.co.in/quickquiz/public/js/adminlte.min.js"></script>
<script>
 $(function () {
   $( document ).ready(function() {
      $('.sessionmodal').addClass("active");
      setTimeout(function() {
          $('.sessionmodal').removeClass("active");
     }, 4500);
   });

   $('#example1').DataTable({
     "sDom": "<'row'><'row'<'col-md-4'l><'col-md-4'B><'col-md-4'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
     buttons: [
           {
              extend: 'print',
              exportOptions: {
                  columns: ':visible'
              }
           },
           'csvHtml5',
           'excelHtml5',
           'colvis',
         ]
   });

   $('#questions_table').DataTable({
     "sDom": "<'row'><'row'<'col-md-4'l><'col-md-4'B><'col-md-4'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
     buttons: [
       {
          extend: 'print',
          exportOptions: {
              columns: ':visible'
          }
       },
       'csvHtml5',
       'excelHtml5',
       'colvis',
     ],
     columnDefs: [
       { targets: [7,8,9,10], visible: false},
     ]
   });

   $('#search').DataTable({
     'paging'      : false,
     'lengthChange': false,
     'searching'   : true,
     'ordering'    : false,
     'info'        : false,
     'autoWidth'   : true,
     "sDom": "<'row'><'row'<'col-md-4'B><'col-md-8'f>r>t<'row'>",
     buttons: [
           {
              extend: 'print',
              exportOptions: {
                  columns: ':visible'
              }
           },
           'excelHtml5',
           'csvHtml5',
           'colvis',
         ]
   });

   $('#topTable').DataTable({
     "order": [[ 5, "desc" ]],
     "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
     "sDom": "<'row'><'row'<'col-md-4'l><'col-md-4'B><'col-md-4'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
     buttons: [
           {
              extend: 'print',
              exportOptions: {
                  columns: ':visible'
              }
           },
           'excelHtml5',
           'csvHtml5',
           'colvis',
         ]
   });
   //Initialize Select2 Elements
   $('.select2').select2()
 });
</script>
</body>
</html>
