<?php $__env->startSection('content'); ?>
    <div class="title m-b-md">
        <?php echo e(config('app.name')); ?>

    </div>
    <div class="m-b-md">
        Usuarios para prueba:<br/>
        Admin: rinostrozareb@gmail.com / password: admin<br/>
        Cliente: cliente@actus.cl / password: demo
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>