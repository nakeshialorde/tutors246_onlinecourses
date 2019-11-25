<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

  /*Navigation Main Pages */
public function index(){
$title = "Welcome to our online learning portal!";
/*	return view('pages.index', compact('title'));*/
return view('pages.index') ->with('title', $title);
	}

public function Dashboard(){
$title ="Dashboard";
return view('pages.Dashboard') ->with('title', $title);
}

public function grade(){
$title ="Grade";
return view('pages.grade') ->with('title', $title);
}

public function Courses(){
$data = array(
'title' => 'List of Available Courses',
'courses' => ['CSEC 1278 - Mathematics', 'CSEC 1279 - Principles of Business', 'CSEC 1280 - Principles of Accounts', 'CSEC 1281 - Social Studies']);
return view('pages.Courses') ->with($data);
}

public function EnrolledCourses(){
$title ="Enrolled Courses";
return view('pages.EnrolledCourses') ->with('title', $title);
}

public function ProgressReport(){
$title ="Your Progress Report";
return view('pages.ProgressReport') ->with('title', $title);
}

public function Tutors(){
$title ="Our Tutors";
return view('pages.Tutors') ->with('title', $title);
}

public function AdminLogin(){
$title ="Admin Login";
return view('pages.AdminLogin') ->with('title', $title);
}

public function Register(){
$title ="Register";
return view('pages.Register') ->with('title', $title);
}

public function Logout(){
$title ="Logout";
return view('pages.Logout') ->with('title', $title);
}

/* Subpages */
public function signup(){
$title ="Signup for our online courses today!";
return view('pages.signup') ->with('title', $title);
    }

public function courseindex(){
$title ="Course Index";
return view('pages.courseindex') ->with('title', $title);
}

public function checkout(){
 $title ="Course Index";
 return view('pages.checkout') ->with('title', $title);
}

public function chapterindex(){
$title ="Chapter Index";
return view('pages.chapterindex') ->with('title', $title);
}

/* Chapter indices*/
public function chapter1index(){
$title ="Chapter 1 Index";
return view('pages.chapter1index') ->with('title', $title);
}

public function chapter2index(){
$title ="Chapter 2 Index";
return view('pages.chapter2index') ->with('title', $title);
}

public function chapter3index(){
$title ="Chapter 3 Index";
return view('pages.chapter3index') ->with('title', $title);
}

public function chapter4index(){
$title ="Chapter 4 Index";
return view('pages.chapter4index') ->with('title', $title);
}

public function chapter5index(){
$title ="Chapter 5 Index";
return view('pages.chapter5index') ->with('title', $title);
}

public function chapter6index(){
$title ="Chapter 6 Index";
return view('pages.chapter6index') ->with('title', $title);
}

public function chapter7index(){
$title ="Chapter 7 Index";
return view('pages.chapter7index') ->with('title', $title);
}

public function chapter8index(){
$title ="Chapter 8 Index";
return view('pages.chapter8index') ->with('title', $title);
}

public function chapter9index(){
$title ="Chapter 9 Index";
return view('pages.chapter9index') ->with('title', $title);
}

public function chapter10index(){
$title ="Past Paper Index";
return view('pages.chapter10index') ->with('title', $title);
}

/*Chapter 1 */
public function setsofnumbers(){
$title ="1 - Sets of numbers";
return view('pages.setsofnumbers') ->with('title', $title);
}

public function realnumbers(){
$title ="2 - Powers of real numbers ";
return view('pages.realnumbers') ->with('title', $title);
}

public function conversionofunits(){
$title ="1 - Conversion of Units";
return view('pages.conversionofunits') ->with('title', $title);
    }

/*Past Papers*/
public function january2016(){
$title = "January 2016 Past Paper";
return view('pages.january2016') ->with('title', $title);
}

}
