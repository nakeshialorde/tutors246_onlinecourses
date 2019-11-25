@extends('layouts.app')

@section('content')
   <h1>{{$title}}</h1>

          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card1">
                         <div class="content table-responsive table-full-width">
                              <table class="table table-hover table-striped">
                                  <thead>
                                      <th>ID</th>
                                    <th>Courses</th>
                                    <th>Level</th>
                                    <th>Duration</th>
                                    <th>Assigned Tutor</th>
                                    <th>Sign Up</th>
                                  </thead>
                                  <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>Mathematics</td>
                                        <td>CSEC</td>
                                        <td>12 Weeks</td>
                                        <td>Tutors246</td>
                                        <td><a href="/signup">Enroll</a></td>
                                      </tr>
                                     <tr>
                                        <td>2</td>
                                        <td>English Language</td>
                                        <td>CSEC</td>
                                        <td>12 Weeks</td>
                                        <td>Tutors246</td>
                                        <td><a href="/signup">Enroll</a></td>
                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>Geograpy</td>
                                        <td>CSEC</td>
                                        <td>12 Weeks</td>
                                        <td>Tutors246</td>
                                        <td><a href="/signup">Enroll</a></td>
                                      </tr>
                                      <tr>
                                        <td>4</td>
                                        <td>Principles of Accounts</td>
                                        <td>CSEC</td>
                                        <td>12 Weeks</td>
                                        <td>Tutors246</td>
                                        <td><a href="/signup">Enroll</a></td>
                                      </tr>
                                      <tr>
                                        <td>5</td>
                                        <td>History</td>
                                        <td>CSEC</td>
                                        <td>12 Weeks</td>
                                        <td>Tutors246</td>
                                        <td><a href="/signup">Enroll</a></td>
                                      </tr>
                                      <tr>
                                        <td>6</td>
                                        <td> Social Studies</td>
                                        <td>CSEC</td>
                                        <td>12 Weeks</td>
                                        <td>Tutors246</td>
                                        <td><a href="/signup">Enroll</a></td>
                                      </tr>
                                        <tr>
                                        <td>6</td>
                                        <td>Additional Mathematics</td>
                                        <td>CSEC</td>
                                        <td>12 Weeks</td>
                                        <td>Tutors246</td>
                                        <td><a href="/signup">Enroll</a></td>
                                      </tr>
                                  </tbody>
                              </table>

                          </div>
                      </div>
                  </div>
@endsection
