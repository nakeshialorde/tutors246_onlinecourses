@extends('layouts.app')

@section('content')
<h1><center>{{$title}}</center></h1>

<div class="newcontainer">
<div class="wrapper"><br />
  <div class="flipcard-container">
   <div class="flipcard">
    <div class="side side1">
    <h1>Definition</h1><p>Multiples of real numbers rewritten in exponent form, with the exponent number representing how many times to multiply the real number by itself. x<sup>a</sup> means multiply x by itself a times.
    <br />Example<br /> 5<sup>3</sup> <br />5 x 5 x 5, 5 x 5 = 25, 25 x 5 =125
      <br /> 5 <sup>3</sup> where 5 is the real number or X and 3 is the exponent or n.
</div>
</div>
</div>
</div>
</div>

<section class="newcontainer">
	<section>
		<ul class="tabs-controls">
			<li class="tabs-controls__item">
				<a href="#" class="tabs-controls__link tabs-controls__link--active" data-id="1">
					Scientific Notation
				</a>
			</li>
			<li class="tabs-controls__item">
				<a href="#" class="tabs-controls__link" data-id="2">
					Negative Exponents
			  </a>
			</li>
			<li class="tabs-controls__item">
				<a href="#" class="tabs-controls__link" data-id="3">
			  Multiplying Exponents
				</a>
			</li>
			<li class="tabs-controls__item">
				<a href="#" class="tabs-controls__link" data-id="4">
					Scientific Notation
				</a>
			</li>
			<li class="tabs-controls__item">
				<a href="#" class="tabs-controls__link" data-id="5">
					Scientific Notation
				</a>
			</li>
			<li class="tabs-controls__item">
				<a href="#" class="tabs-controls__link" data-id="6">
					Scientific Notation
				</a>
			</li>
		</ul>
	</section>


	<section class="cards-container">
		<div class="card card--current" id="1">
			<h1>Expressing exponents and powers of 10</h1>
			<p>a x 10<sup>b</sup><br />
        (1) The base number, a, must be a number one or larger but less than 10 (1 &le; a &#60; 10).
      <br /> (2) The exponent, b, can be either positive or negative.
      <br /><br /><b>Note:</b>It should be noted that when a number is written without an exponent, then the exponent is assumed to be 1. Any number written with an exponent of 0 is equal to 1.
			</p>
		</div>
		<div class="card" id="2">
			<h1>Negative Exponents Imply Division</h1>
			<p>
				Elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
			</p>
		</div>
		<div class="card" id="3">
			<h1>Two or More Raised Exponents</h1>
			<p> An exponent raised to another exponent is solved by multiplying the two exponents. Hence, (5<sup>3</sup>)<sup>2</sup> = 5<sup>6</sup> = 5 x 5 x 5 x 5 x 5 x 5 = 15 625

			</p>
		</div>
		<div class="card" id="4">
			<h1>D. Sed do eiusmod</h1>
			<p>
				Sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrcaecat cupidatat nonv proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
		<div class="card" id="5">
			<h1>E. Ut enim ad minim veniam</h1>
			<p>
				Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in vo cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
		<div class="card" id="6">
			<h1>F. Labore et dolore magna aliqua</h1>
			<p>
				Labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in volupest laborum.
			</p>
		</div>
  </div>
</section>
@endsection
