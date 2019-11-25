<?php $__env->startSection('content'); ?>
    <h1><?php echo e($title); ?></h1>

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
                                    <th>Go to course</th>
                                  </thead>

                                  <tbody>
                                      <tr>
                                        <td>1278</td>
                                        <td>Mathematics</td>
                                        <td>CSEC</td>
                                        <td>12 Weeks</td>
                                        <td>Tutors246</td>
                                        <td><a href="/courseindex">Enter</a></td>
                                      </tr>
                                  </tbody>

                              </table>

                            </div>
                        </div>
                          </div>
                      </div>
                  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>