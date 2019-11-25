<?php $__env->startSection('content'); ?>
   <h1><?php echo e($title); ?></h1>
   <?php
    session_start();
    session_destroy();
    unset($_SESSION['username']);
    $_SESSION['message'] = "You are now logged out";
    header("Location: /login");
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>