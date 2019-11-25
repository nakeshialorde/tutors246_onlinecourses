@extend('layouts.app')

@section('content')

<h1><center>Exams</center></h1>
@if(count($Question) > 1)
  @foreach($Question as $Question)
      <div class="well">
        <h3>{{$exam ->Question}}</h3>
      </div>
  @endforeach

@else
    <p>No exams available</p>
@endelse
@endif
@endsection
