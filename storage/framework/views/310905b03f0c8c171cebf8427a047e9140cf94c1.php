<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="site_title">
                <span><?php echo e(config('app.name')); ?></span>
            </a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?php echo e(auth()->user()->avatar); ?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <h2><?php echo e(auth()->user()->name); ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3><?php echo e(__('views.backend.section.navigation.sub_header_0')); ?></h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo e(route('admin.dashboard')); ?>">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <?php echo e(__('views.backend.section.navigation.menu_0_1')); ?>

                        </a>
                    </li>
                </ul>
            </div>

            <div class="menu_section">
                <h3>Administracion</h3>

                <ul class="nav side-menu">
                    <li>
                        <a>
                            <i class="fa fa-list"></i>
                            Clientes
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="<?php echo e(route('admin.cliente.nuevo')); ?>">Ingresar Nuevo
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.cliente.lista')); ?>">Gestionar clientes
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li>
                        <a>
                            <i class="fa fa-list"></i>
                            Medidor
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="<?php echo e(route('admin.medidor.nuevo')); ?>">Ingresar Nuevo
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.medidor.lista')); ?>">Gestionar medidores
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li>
                        <a>
                            <i class="fa fa-list"></i>
                            Cuenta
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="<?php echo e(route('admin.cuenta.nuevo')); ?>">Asociar Nueva
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.cuenta.lista')); ?>">Gestionar Cuentas
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>


                <ul class="nav side-menu">
                    <li>
                        <a>
                            <i class="fa fa-list"></i>
                            Periodos
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="<?php echo e(route('admin.periodo.nuevo')); ?>">Nuevo
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.periodo.lista')); ?>">Gestionar periodos
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>



                <ul class="nav side-menu">
                    <li>
                        <a>
                            <i class="fa fa-list"></i>
                            Mantenedores
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="<?php echo e(route('admin.cuentaestado.index')); ?>">Estado de cuenta
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.estadopago.index')); ?>">Estado de pago
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.medidormodelo.index')); ?>">Modelo de medidor
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.proyecto.index')); ?>">Proyecto
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.servicio.index')); ?>">Servicio
                                </a>
                            </li>


                        </ul>
                    </li>
                </ul>

            </div>


            <div class="menu_section">
                <h3>Operaciones</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo e(route('admin.lectura.nuevo')); ?>">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            Ingresar Lectura
                        </a>
                    </li>
                </ul>

                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo e(route('admin.periodo.facturar')); ?>">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            Calcular boletas del periodo
                        </a>
                    </li>
                </ul>


                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo e(route('admin.recaudacion.nuevo')); ?>">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            Ingresar Recaudacion
                        </a>
                    </li>
                </ul>


            </div>


            <div class="menu_section">
                <h3>Informes</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo e(route('admin.cobranza.lista')); ?>">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            Cuentas atrasadas
                        </a>
                    </li>
                </ul>

            </div>











            <div class="menu_section">
                <h3>Acceso</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo e(route('admin.users')); ?>">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <?php echo e(__('views.backend.section.navigation.menu_1_1')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.permissions')); ?>">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            <?php echo e(__('views.backend.section.navigation.menu_1_2')); ?>

                        </a>
                    </li>
                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->
    </div>
</div>
