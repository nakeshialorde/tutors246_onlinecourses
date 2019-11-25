<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Main navigation menu*/
Route::get('/', 'PagesController@index');
Route::get('/Dashboard', 'PagesController@Dashboard');
Route::get('/Courses', 'PagesController@Courses');
Route::get('/EnrolledCourses', 'PagesController@EnrolledCourses');
Route::get('/ProgressReport', 'PagesController@ProgressReport');
Route::get('/Tutors', 'PagesController@Tutors');

/*Route::get('/Login', 'PagesController@Login');*/
Route::get('/AdminLogin', 'PagesController@AdminLogin');
Route::get('/Register', 'PagesController@Register');
Route::get('/Logout', 'PagesController@Logout');
Route::get('/grade', 'PagesController@grade');

/*Subpages*/
Route::get('/courseindex', 'PagesController@courseindex');
Route::get('/chapterindex', 'PagesController@chapterindex');
Route::get('/signup', 'PagesController@signup');
Route::get('/checkout', 'PagesController@checkout');

/*Chapter4*/
Route::get('/conversionofunits', 'PagesController@conversionofunits');
Route::get('/setsofnumbers', 'PagesController@setsofnumbers');

/*Chapter 1 */
Route::get('/realnumbers', 'PagesController@realnumbers');

/*Past Paper */
Route::get('/january2016', 'PagesController@january2016');
/*Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');

Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');
Route::get('/january2016', 'PagesController@january2016');*/

/*Chapter indices*/
Route::get('/chapter1index', 'PagesController@chapter1index');
Route::get('/chapter2index', 'PagesController@chapter2index');
Route::get('/chapter3index', 'PagesController@chapter3index');
Route::get('/chapter4index', 'PagesController@chapter4index');
Route::get('/chapter5index', 'PagesController@chapter5index');
Route::get('/chapter6index', 'PagesController@chapter6index');
Route::get('/chapter7index', 'PagesController@chapter7index');
Route::get('/chapter8index', 'PagesController@chapter8index');
Route::get('/chapter9index', 'PagesController@chapter9index');
Route::get('/chapter10index', 'PagesController@chapter10index');
Route::resource('exam', 'ExamsController');
Route::get('/events', 'EventController@events');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Auth::routes('/users', 'PagesController@users');
Auth::routes('/admin', 'PagesController@admin');
Auth::routes('/email', 'PagesController@email');

Auth::routes();
Route::resource('quiz', 'QuizController');

Route::get('/home', 'HomeController@index')->name('home');
