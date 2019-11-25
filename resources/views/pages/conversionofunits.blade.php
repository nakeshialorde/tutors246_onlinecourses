@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="center">
        <div class="panel panel-primary">

            <div class="panel-heading"><h1>{{$title}}</h1></div>

            <div class="panel-body">
                <h4><b>General Objectives </b></h4><br />

                    On completion of this Section, students should:
                    <br />Understand that the attributes of geometrical objects can be quantified using measurement;
                    <br>Appreciate that all measurements are approximate and that the relative accuracy of a
                    measurement is dependent on the measuring instrument and the measurement process; and,
                    <br>Demonstrate the ability to use concepts in measurement to model and solve real-world
                    problems.
                    </font>
            </div>

        <div class="about-grids service_box">
            <div class="col-sm-3 about-grid">
                <a href="/Conversion_of_Units" title="name" rel="title2">
                    <div class="view view-first">
                        <img src="http://tutors246olc.org/cxc_courses/CXC_MATHEMATICS/img/33.jpg" class="img-responsive" alt=""/>
                        <div class="mask"></div>
                    </div>
                </a>
                <h3><a href="/Conversion_of_Units">1 - Conversion of Units</a></h3>
                <p class="service_desc">Convert units of length, mass, area, volume, capacity.</p>
            </div>
        </div>

   </div>
  </div>
 </div>
@endsection
