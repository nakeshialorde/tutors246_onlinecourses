<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Section 1 - Sets of Numbers</title>
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
  <style>
  .panel4
  {
    display: none;
  }
  </style>
</head>

<body>
  <?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  
  <div align="center"><h1><?php echo e($title); ?></h1></div>

<!--Chart-->
	<div align="center"><b><img src="https://raw.githubusercontent.com/nakeshialorde/Online-Courses/master/img/numbers.PNG" class="img-responsive"></b></div>
	<div align="center"><p><small><b>Click on each item below for definition.</b></small></p></div>

<!--Defintions-->
<div class="container">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><b>Natural Numbers</b></a>
        </h4>
      </div>

      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><b>The set of counting numbers, that is, ℕ={1,2,3,4...}.</b></div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><b>Whole Numbers</b></a>
        </h4>
      </div>

      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><b>The set of positive integers or zero. Whole numbers include 0,1,2,3,4,5,6,7,8,9,10, ... and are represented by 𝕎 .</b></div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><b>Integers</b></a>
        </h4>
      </div>

      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"><b>The set consisting of the positive and negative whole numbers and zero, ℤ={...,-2,-1,0,1,2...}. All integers are rational numbers and represented by ℤ. &there4; N &sub; W &sub; Z.</b></div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><b>Rational Numbers</b></a>
        </h4>
      </div>

      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body"><b>Numbers that can be expressed as the quotient of two integers (that is any number that can be expressed as a fraction). For example, <sup>7</sup>&frasl;<sub>3</sub>, <sup>5</sup>&frasl;<sub>11</sub>, <sup>-5</sup>&frasl;<sub>13</sub> or <sup>p</sup>&frasl;<sub>q</sub>, where p and q are integers, q&ne;0. Rational Numbers are also decimals (recurring or terminating), the decimal representation of a rational number either terminates <sup>1</sup>&frasl;<sub>2</sub> = 0.5 or repeats in a regular pattern, for example <sup>100</sup> &frasl; <sub>3</sub> = 33.333333 All integers are rational numbers with the denominator of 1, for example,<br />
      	<sup>5</sup> &frasl; <sub>1</sub> = 5. &there4; N &sub; W &sub; Z &sub; Q. </b></div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><b>Irrational Numbers</b></a>
        </h4>
      </div>

      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body"><b>A number that cannot be represented as an exact ratio of two integers, de. For examples, &pi; or &radic;2, decimals (recurring or terminating), or common fractions. For example, &radic;2, &radic;7 and &Pi;. The decimal representation of irrational numbers neither terminates nor repeats in a regular pattern, for example, &Pi; = 3.1415926.</b></div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><b>Real Numbers</b></a>
        </h4>
      </div>

      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body"><b>The union of the set of rational numbers and the set of irrational numbers. Real numbers are represented by the symbol ℝ. &there4; N &sub; W &sub; Z &sub; Q &sub; R. </b></div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"><b>Inclusion Relations</b></a>
        </h4>
      </div>

      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body"><b>A number that is a member of a set. </b></div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8"><b>Sequences of Numbers</b></a>
        </h4>
      </div>

      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body"><b>The set consisting of the positive and negative whole numbers and zero, ℤ={...,-2,-1,0,1,2...} that are connected in a series with a pattern or definite law, with each number in the sequence called a term. For example, 2,4,6,8, 10, each term in the sequence is formed by adding two, and each term is an even number. Similarly. 2,4,16,256,..., is a sequence with the definite law following a pattern of each term being multiplied by the term before.</b></div>
      </div>
      </div>
      </div>

      <script>
      $('.collapse').collapse()
      </script><br />

      <!--Chart-->
      <center><img src="https://raw.githubusercontent.com/nakeshialorde/Online_Course/4b243cc73e017d88960f79c39a9a1fef77712ef9/sets.PNG" class="img-responsive"></center><br /><br />

      <!--Quiz-->
      <form class="form-horizontal" action="/setsofnumbers" id="quiz1" method="post">
      <div class ="container">
      <div class ="jumbotron"><center><h3><b>End of Chapter Quiz</b></center></h3> <br />
      <center><img src="https://images.pexels.com/photos/256519/pexels-photo-256519.jpeg?auto=compress&cs=tinysrgb&h=300" /></center><br />
        <center>The following quiz is designed to refresh and test your knowledge of the number system. The test consists of 15 questions, which are mainly true/false or multiple choice, the scores are stored on your dashboard and in your progress report to track your overall performance in each section.<br /><br /></center>
        <center><a href="#slide2"><button class="button" id="button" onclick="next()">Start Quiz</button></a></center>
      </div>

      <div class="panel4" id="slide2">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 1</b></h3>
      <b>All real numbers are integers.</b>
      <br />
      <b><input class="option1" id="option1" name="option1" type="radio" value="True" />&nbsp;True<br />
      <br />
      <input class="option2" id="option2" name="option2" type="radio" value="False" />&nbsp;False </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>

      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 2 </b></h3>
      <b>All integers are natural numbers.</b>
      <br />
      <b><input class="option1" id="option1" name="option1" type="radio" value="True" />&nbsp;True<br />
      <br />
      <input class="option2" id="option2" name="option2" type="radio" value="False" />&nbsp;False </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>

      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 3</b></h3>
      <b>Which of the following numbers is NOT a rational number?</b>
      <br />
      <b><input class="option1" id="option1" name="option1" type="checkbox" value="True" />&nbsp;(A)&nbsp; -2<br />
      <br />
      <input class="option2" id="option2" name="option2" type="checkbox" value="False" />&nbsp;(B)v 1.012<br />
      <br />
      <input class="option1" id="option1" name="option1" type="checkbox" value="True" />&nbsp;(C)&nbsp; &radic;5<br />
      <br />
      <input class="option2" id="option2" name="option2" type="checkbox" value="False" />&nbsp;(D)&nbsp; 13∕2 </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>

      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 4</b></h3>
      <b>The next two terms in the following sequence, would be:<br />1, 5, 9, 13, _, _</b>
	    <br />
      <input class="option1" id="option1" name="option1" type="checkbox" value="True" />&nbsp;(A)&nbsp; 15, 17<br />
      <br />
      <input class="option2" id="option2" name="option2" type="checkbox" value="False" />&nbsp;(B)&nbsp; 13, 12<br />
      <br />
      <input class="option1" id="option1" name="option1" type="checkbox" value="True" />&nbsp;(C)&nbsp; 7, 5<br />
      <br />
      <input class="option2" id="option2" name="option2" type="checkbox" value="False" />&nbsp;(D)&nbsp; 17,21 </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>

      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 5</b></h3>
      <b>The next two terms in the following sequences, would be:<br />	3, 6, 12, 24, _, _.</b>
	    <br />
      <input class="option1" id="option1" name="option1" type="checkbox" value="True" />&nbsp;(A)&nbsp; 48, 96<br />
      <br />
      <input class="option2" id="option2" name="option2" type="checkbox" value="False" />&nbsp;(B)&nbsp; 32, 54<br />
      <br />
      <input class="option1" id="option1" name="option1" type="checkbox" value="True" />&nbsp;(C)&nbsp; 36, 48<br />
      <br />
      <input class="option2" id="option2" name="option2" type="checkbox" value="False" />&nbsp;(D)&nbsp; 14,32 </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>


      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 6</b></h3>
      <b>What is the next term in the sequence 2,6,12,20, ... ?</b>
	    <br />
      <input class="option1" id="option1" name="option1" type="checkbox" value="True" />&nbsp;(A)&nbsp; 24<br />
      <br />
      <input class="option2" id="option2" name="option2" type="checkbox" value="False" />&nbsp;(B)&nbsp; 28<br />
      <br />
      <input class="option1" id="option1" name="option1" type="checkbox" value="True" />&nbsp;(C)v 30<br />
      <br />
      <input class="option2" id="option2" name="option2" type="checkbox" value="False" />&nbsp;(D)&nbsp; 40 </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>

      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 7</b></h3>
      <b>Which of the following is TRUE?</b>
	    <br />
      <input class="option1" id="option1" name="option1" type="checkbox" value="True" />(A) N &sub; W &sub; R<br />
      <br />
      <input class="option2" id="option2" name="option2" type="checkbox" value="False" />(B) N &sub; W &sub; R &sub; Q<br />
      <br />
      <input class="option1" id="option1" name="option1" type="checkbox" value="True" />(C) N &sub; Z &sub; W &sub; Q<br />
      <br />
      <input class="option2" id="option2" name="option2" type="checkbox" value="False" />(D) W &sub;N &sub; R </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>


      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 8</b></h3>
      <b>Which of the following is an irrational number? </b>
	    <br />
      <input class="option1" id="option1" name="option1" type="checkbox" value="True" />&nbsp;(A)&nbsp; &radic;-3<br />
      <br />
      <input class="option2" id="option2" name="option2" type="checkbox" value="False" />&nbsp;(B)&nbsp; &radic;3<br />
      <br />
      <input class="option1" id="option1" name="option1" type="checkbox" value="True" />&nbsp;(C)&nbsp; &radic;-2<br />
      <br />
      <input class="option2" id="option2" name="option2" type="checkbox" value="False" />&nbsp;(D)&nbsp; &radic;11 </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>


      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 9</b></h3>
      <b>The sum of a rational number and an irrational number is irrational.</b></li>
	    <br />
      <input class="option1" id="option1" name="option1" type="radio" value="True" />&nbsp;True<br />
      <br />
      <input class="option2" id="option2" name="option2" type="radio" value="False" />&nbsp;False </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>

      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 10</b></h3>
      <b>The product of any two odd integers is also odd.</b>
    	<br />
    	<input class="option1" id="option1" name="option1" type="radio" value="True" />&nbsp;True<br />
      <br />
      <input class="option2" id="option2" name="option2" type="radio" value="False" />&nbsp;False </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>

      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 11</b></h3>
	    <b>Which of the following are positive integers?</b>
	    <br />
      <input class="option1" id="option1" name="option1" type="checkbox" value="True" />(&nbsp;A)&nbsp; 4.57<br />
      <br />
      <input class="option2" id="option2" name="option2" type="checkbox" value="False" />(&nbsp;B)&nbsp; &radic;3<br />
      <br />
      <input class="option1" id="option1" name="option1" type="checkbox" value="True" />&nbsp;(C)&nbsp; &radic;5<br />
      <br />
      <input class="option2" id="option2" name="option2" type="checkbox" value="False" />&nbsp;(D)&nbsp; &radic;11 </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>

      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 12</b></h3>
      <b>Is the &radic;2 an irrational number? </b>
	    <br />
      <input class="option1" id="option1" name="option1" type="radio" value="True" />&nbsp;True<br />
      <br />
      <input class="option2" id="option2" name="option2" type="radio" value="False" />&nbsp;False </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>

      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 13</b></h3>
      <b>Is the &radic;7 a rational number?</b>
      <br />
      <b><input class="option1" id="option1" name="option1" type="radio" value="True" />&nbsp;True<br />
      <br />
      <input class="option2" id="option2" name="option2" type="radio" value="False" />&nbsp;False </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>

      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 14</b></h3>
      <b>All natural numbers are whole numbers.</b>
      <input class="option1" id="option1" name="option1" type="radio" value="True" />&nbsp;True<br />
      <br />
      <input class="option2" id="option2" name="option2" type="radio" value="False" />&nbsp;False </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>

      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 15</b></h3>
      <b>All real numbers are whole numbers.</b>
	    <br />
      <input class="option1" id="option1" name="option1" type="radio" value="True" />&nbsp;True<br />
      <br />
      <input class="option2" id="option2" name="option2" type="radio" value="False" />&nbsp;False </b><br /><br />
      <button class="button" id="button" onclick="next()">Next Question</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>

      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Question 16</b></h3>
      <b>All real numbers are whole numbers.</b>
      <br />
      <input class="option1" id="option1" name="option1" type="radio" value="True" />&nbsp;True<br />
      <br />
      <input class="option2" id="option2" name="option2" type="radio" value="False" />&nbsp;False </b><br /><br />
      <button class="button" id="button" onclick="next()">Complete Quiz</button><br />
      <b> </b></center><br /><br /><br /><br /></div></div>

      <div class="panel4">
      <div class="jumbotron"><br /><br /><br /><br />
      <center><h3><b>Your Score:</b></h3>
      <b></b>
      <br />
      <p>Number of question 16.</p>
      <br />
      <p>Number of correct answers </p><br />
      <p>Your Average: </p><br /><br />
      <p><a class="btn btn-primary btn-lg" style="float:center" href="/realnumbers" role="button">Continue</a></p>
<br />
      <b> </b></center><br /><br /><br /><br /></div></div>

</form>

  <br/><div align="center"><h4>Chapter Progress</h4></div>
	<div class="progress" style="float:bottom">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width:0%">
    0%
  </div>
</div>

</body>
</html>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>