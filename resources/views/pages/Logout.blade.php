@extends('layouts.app')

@section('content')
   <h1>{{$title}}</h1>
   <?php
    session_start();
    session_destroy();
    unset($_SESSION['username']);
    $_SESSION['message'] = "You are now logged out";
    header("Location: /login");
?>
@endsection
