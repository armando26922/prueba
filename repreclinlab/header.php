    <?php                                session_start();
           
                        if ((empty($_SESSION["usuario"]))||(empty ($_SESSION["clave"])) ){
                             header('Location:login.php');
   
            }
?>
     <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">Repre<span class="lite">Clinlab</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form id="formulario_busqueda" class="navbar-form">
                            <input id="busqueda_tabla" class="form-control" placeholder="Buscar" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">

                  <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">Tu tienes 4 nuevas notificaciones</p>
                            </li>
                           
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="notificaciones.php">Mostrar Todas las Notificaciones</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->


                    
                    
                        <!-- user login dropdown start-->
                    <li class="dropdown">
                        
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                           <span class="profile-ava">
                              <?php 


                         print("<img  src='".$_SESSION["imagen_usuario"]."' height='40' width='70'>");


                                                            ?>
                            </span>
                            <span id='usuario_logeado' class="username">
                            <?php 



                               print(strtoupper($_SESSION['usuario'])); ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="perfil.php"><i class="icon_profile"></i> Mi Perfil</a>
                            </li>
                             <li>
                                <a id="prueba" href="eliminar_session.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                           
                            <li>
                                <a href="#"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      