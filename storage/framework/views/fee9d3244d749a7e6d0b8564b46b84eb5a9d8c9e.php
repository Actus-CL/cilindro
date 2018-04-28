<?php $__env->startSection('body_class','nav-md'); ?>

<?php $__env->startSection('page'); ?>
    <div class="container body">
        <div class="main_container">
            <?php $__env->startSection('header'); ?>
                <?php echo $__env->make('admin.sections.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('admin.sections.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldSection(); ?>

            <?php echo $__env->yieldContent('left-sidebar'); ?>

            <div class="right_col" role="main">
                <div class="page-title">
                    <div class="title_left">
                        <h1 class="h3"><?php echo $__env->yieldContent('title'); ?></h1>
                    </div>
                    <?php if(Breadcrumbs::exists()): ?>
                        <div class="title_right">
                            <div class="pull-right">
                                <?php echo Breadcrumbs::render(); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <?php echo $__env->yieldContent('content'); ?>
            </div>

            <footer>
                <?php echo $__env->make('admin.sections.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </footer>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <?php echo e(Html::style(mix('assets/admin/css/admin.css'))); ?>

    <link href=<?php echo e(asset("assets/admin/css/dataTables.bootstrap.css")); ?> rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src=<?php echo e(asset("assets/admin/js/jquery.dataTables.js")); ?> type="text/javascript"></script>
    <script src=<?php echo e(asset("assets/admin/js/dataTables.bootstrap.js")); ?> type="text/javascript"></script>

    <script>
        $( document ).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $('.autoform').on('submit', function(e){
                var bt = $(this).find('button[type="submit"]');
                bt.attr("disabled","disabled");
                e.preventDefault();
                var action = $(this).attr("action");
                var method = $(this).attr("method");
                $.ajax({
                    url: action,
                    type: method,
                    data: $(this).serialize(),
                    success: function (data) {
                        var respuesta = $.parseJSON( data);
                        //console.log(respuesta.correcto);

                        if ( respuesta.correcto ==1) {
                            if (respuesta.mensajeOK != null){
                                alert(respuesta.mensajeOK);
                            }else{
                                alert("Se han guardado las modificaciones");
                            }
                            if (respuesta.redireccion!= null){
                                //  $.(respuesta.redireccion);
                            }else{
                                location.reload();
                            }
                        }else{
                            if (respuesta.mensajeBAD!= null){
                                alert(respuesta.mensajeBAD);
                            }else{
                                alert("Ha ocurrido un problema");
                            }
                        }
                        // alert("Lo sentimos, ha ocurrido un problema");
                        bt.removeAttr("disabled");
                    }
                });
            });


            $('.autoval').on('focus', function(){
                $("#btsubmit").attr("disabled","disabled");
            });

            $('.autoval').on('blur', function(){
                var val = $(this).val();
                var tabla = $(this).data('tabla');

                var campo = $(this).attr('name');
                //alert("sfsd");
                $.ajax({
                    url: "<?php echo e(route("admin.validar.db")); ?>",
                    type: "post",
                    data: {val:val,tabla:tabla,campo:campo},
                    success: function (data) {
                        console.log(data);
                        if(data==0){
                            $("#btsubmit").removeAttr("disabled");
                        }else{
                            alert("Ya se encuentra registrado en la base de datos");
                            $(this).focus();
                        }

                    }
                });
            });




        });
    </script>
    <?php echo e(Html::script(mix('assets/admin/js/admin.js'))); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>