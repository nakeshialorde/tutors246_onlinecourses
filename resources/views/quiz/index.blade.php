@include('inc.navbar')
@extends('layouts.app')

@section('content')

@if(count($quiz)>0)
@foreach($quiz as $quiz)
  <div class="well">
    <h3>{{$quiz->questions}}</h3>
    <a href="/quiz/{{$quiz->id}}">Quiz 1</a>
  </div>
@endforeach
@else
<p>No Quiz</p>
@endif

@endsection
