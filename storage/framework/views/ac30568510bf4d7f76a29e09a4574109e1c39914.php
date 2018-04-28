<?php $__env->startSection('content'); ?>
    <!-- page content -->
    <!-- top tiles -->



    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Listado de clientes <small> </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <table id="datatable" class="table table-striped table-bordered" >
                        <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Direccion</th>
                            <th>Estado</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $( document ).ready(function() {

        var tabla = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "<?php echo e(route('admin.cliente.lista.tabla')); ?>",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'rut', name: 'rut'},
                {data: 'nombre', name: 'nombre'},
                {data: 'email', name: 'email'},
                {data: 'direccion', name: 'direccion'},
                {data: 'habilitado', name: 'habilitado'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ],
            "bFilter": true,
            "iDisplayLength": 10,
            "language": {
                "lengthMenu": "Mostrando _MENU_ resultados por página",
                "zeroRecords": "Sin resultados",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "Vacío",
                "infoFiltered": "(Filtrado desde _MAX_ resultados)",
                "processing":     "Procesando...",
                "search":         "Buscar:",
                "paginate": {
                    "first":      "Inicio",
                    "last":       "Fin",
                    "next":       "Siguiente",
                    "previous":   "Atrás"
                }
            }

        });


        $('#datatable').delegate('.bt_eliminar','click',   function(e){
          e.preventDefault();
            var id = $(this).attr("href");
            $.ajax({
                url: id,
                type: 'GET',
                success: function (data) {
                  data = $.parseJSON( data);
                    if(data.correcto=="1"){
                        alert('Registro eliminado');
                        location.reload();
                    }
                }
            });
        });

        $('#datatable').delegate('.habilitar','click',   function(e){
          e.preventDefault();
            var id = $(this).attr("href");
            $.ajax({
                url: id,
                type: 'GET',
                success: function (data) {
                  data = $.parseJSON( data);
                    if(data.correcto=="1"){
                        alert('Cliente habilitado');
                        location.reload();
                    }
                }
            });
        });

        $('#datatable').delegate('.deshabilitar','click',   function(e){
          e.preventDefault();
            var id = $(this).attr("href");
            $.ajax({
                url: id,
                type: 'GET',
                success: function (data) {
                  data = $.parseJSON( data);
                    if(data.correcto=="1"){
                        alert('Cliente deshabilitado');
                        location.reload();
                    }
                }
            });
        });

    });

</script>

##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
<?php echo e(Html::script(mix('assets/admin/js/dashboard.js'))); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##
    <?php echo e(Html::style(mix('assets/admin/css/dashboard.css'))); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>