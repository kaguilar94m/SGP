<?php
  require_once '../../model/Usuario.php';
  require_once '../../DAO/UsuarioDAO.php';
  require_once '../../model/Perfil.php';
  require_once '../../DAO/PerfilDAO.php';

  session_start();

 if(isset($_SESSION["userData"], $_GET["email"]) and $_SESSION["userData"]->getPerfil() == "Administrador"){
  session_write_close();
  $userDAO = new UsuarioDAO();
  $perfilDAO = new PerfilDAO();
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Usuarios-Administración</title>
  
  <!-- Default Styles (DO NOT TOUCH) -->
  <link rel="stylesheet" href="../../lib/CSS/font-awesome.min.css">
  <link rel="stylesheet" href="../../lib/CSS/bootstrap.min.css">
  <link rel="stylesheet" href="../../lib/CSS/fonts.css">
  <link type="text/css" rel="stylesheet" href="../../lib/CSS/soft-admin.css"/>
  <link type="text/css" rel="stylesheet" href="../../lib/CSS/jquery.switchButton.css">
  
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
   <script src="lib/js/html5shiv.js"></script>
   <script src="lib/js/respond.min.js"></script>
  <![endif]-->

 </head>
 <body>
 
  <div class="cntnr">
   
   <!-- RESPONSIVE LEFT SIDEBAR & LOGO -->
   <div class="left hidden-xs">
    <div class="logo"><img id="logo" src="../../lib/img/logo3.png" style="width:159px !important; height:52px; !important"></div>
    <div class="sidebar">
     <div>
      <input class="typeahead" type="text" placeholder="Search">
      <span id="search-icon" class="glyphicon glyphicon-search"></span>
     </div>
     <div class="accordion">
      <div class="accordion-group">
       <div class="accordion-heading">
        <a class="sbtn btn-default" href="index.html">
         <span class="fa fa-dashboard"></span>
         &nbsp;&nbsp;Dashboard
        </a>
       </div>
      </div>
      <div class="accordion-group">
       <div class="accordion-heading">
        <a class="sbtn btn-default" href="typography.html">
         <span class="icon icon-text-width"></span>
         &nbsp;&nbsp;Typography
        </a>
       </div>
      </div>
      <div class="accordion-group">
       <div class="accordion-heading">
        <a class="sbtn btn-default" href="charts.html">
         <span class="fa fa-bar-chart-o"></span>
         &nbsp;&nbsp;Charts
        </a>
       </div>
      </div>
      <div class="accordion-group">
       <div class="accordion-heading">
        <a class="sbtn btn-default" href="widgets.html">
         <span class="fa fa-list-alt"></span>
         &nbsp;&nbsp;Widgets
        </a>
       </div>
      </div>
      <div class="accordion-group">
       <div class="accordion-heading">
        <a class="sbtn btn-default" data-toggle="collapse" href="#c-ui">
         <span class="icon icon-credit-card"></span>
         &nbsp;&nbsp;UI Elements
         <span class="caret"></span>
        </a>
       </div>
       <div id="c-ui" class="accordion-body collapse"><div class="accordion-inner">
        <a href="alerts_notifications.html" class="sbtn sbtn-default">Alerts & Notifications <span class="label label-primary">9</span></a>
        <a href="tabs_accordion.html" class="sbtn sbtn-default">Tabs & Accordions</a> 
        <a href="buttons.html" class="sbtn sbtn-default">Buttons & Icons</a> 
       </div></div>
      </div>
      <div class="accordion-group">
       <div class="accordion-heading">
        <a class="sbtn btn-default" href="gallery.html">
         <span class="fa fa-picture-o"></span>
         &nbsp;&nbsp;Gallery
        </a>
       </div>
      </div>
      <div class="accordion-group">
       <div class="accordion-heading">
        <a class="sbtn sbtn-default" data-toggle="collapse" href="#c-forms">
         <span class="fa fa-pencil-square-o"></span>
         &nbsp;&nbsp;Forms
         <span class="caret"></span>
        </a>
       </div>
       <div id="c-forms" class="accordion-body collapse"><div class="accordion-inner">
        <a href="form_basic.html" class="sbtn sbtn-default">Basic Form Elements</a>
        <a href="form_advanced.html" class="sbtn sbtn-default">Advanced Form Elements</a>
        <a href="form_wysiwyg.html" class="sbtn sbtn-default">WYSIWYG</a>
        <a href="form_validation.html" class="sbtn sbtn-default">Form Validation</a>
       </div></div>
      </div>
      <div class="accordion-group">
       <div class="accordion-heading">
        <a class="sbtn btn-default" data-toggle="collapse" href="#c-tables">
         <span class="fa fa-table"></span>
         &nbsp;&nbsp;Tables
         <span class="caret"></span>
        </a>
       </div>
       <div id="c-tables" class="accordion-body collapse in"><div class="accordion-inner">
        <a href="table_static.html" class="sbtn sbtn-default">Static Tables <span class="label label-soft">2</span></a>
        <a href="table_datatables.html" class="sbtn sbtn-default active">jQuery Datatables</a> 
       </div></div>
      </div>
      <div class="accordion-group">
       <div class="accordion-heading">
        <a class="sbtn btn-default" href="storyboard.html">
         <span class="fa fa-tasks"></span>
         &nbsp;&nbsp;Storyboard
        </a>
       </div>
      </div>
      <div class="accordion-group">
       <div class="accordion-heading">
        <a class="sbtn btn-default" href="calendar.html">
         <span class="fa fa-calendar"></span>
         &nbsp;&nbsp;Calendar
        </a>
       </div>
      </div>
      <div class="accordion-group">
       <div class="accordion-heading">
        <a class="sbtn btn-default" href="maps.html">
         <span class="fa fa-map-marker"></span>
         &nbsp;&nbsp;Maps
        </a>
       </div>
      </div>
      <div class="accordion-group">
       <div class="accordion-heading">
        <a class="sbtn btn-default" data-toggle="collapse" href="#c-pages">
         <span class="fa fa-file-o"></span>
         &nbsp;&nbsp;Pages
         <span class="caret"></span>
        </a>
       </div>
       <div id="c-pages" class="accordion-body collapse"><div class="accordion-inner">
        <a href="login_register.html" class="sbtn sbtn-default">Login</a>
        <a href="FAQ.html" class="sbtn sbtn-default">F.A.Q.</a>
        <a href="grid.html" class="sbtn sbtn-default">Grid</a>
        <a href="404.html" class="sbtn sbtn-default">404 Error</a> 
        <a href="invoice.html" class="sbtn sbtn-default">Invoice</a>
       </div></div>
      </div>
     </div>
    </div>
   </div>
   <!-- END LEFT SIDEBAR & LOGO -->
   
   <!-- RESPONSIVE NAVIGATION -->
   <div id="secondary" class="btn-group visible-xs">
    <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown"><span class="icon icon-th-large"></span>&nbsp;&nbsp;Navigation&nbsp;&nbsp;<span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-info pull-right" role="menu">
      <li><a href="index.html">Dashboard</a></li>
      <li><a href="#">Labels</a></li>
      <li><a href="#">Admin</a></li>
      <li class="divider" style="border-bottom:1px solid #ddd; margin:0px; margin-top:5px;"></li>
      <li><a href="typography.html">Typography</a></li>
      <li><a href="charts.html">Charts</a></li>
      <li><a href="widgets.html">Widgets</a></li>
      <li class="divider" style="border-bottom:1px solid #ddd; margin:0px; margin-top:5px;"></li>
      <li class="dropdown-header">UI Elements</li>
      <li><a href="alerts_notifications.html">Alerts & Notifications</a></li>
      <li><a href="tabs_accordion.html">Tabs & Accordions</a></li>
      <li><a href="buttons.html">Buttons & Icons</a></li>
      <li class="divider" style="border-bottom:1px solid #ddd; margin:0px; margin-top:5px;"></li>
      <li><a href="gallery.html">Gallery</a></li>
      <li class="divider" style="border-bottom:1px solid #ddd; margin:0px; margin-top:5px;"></li>
      <li class="dropdown-header">Forms</li>
      <li><a href="form_basic.html">Basic Form Elements</a></li>
      <li><a href="form_advanced.html">Advanced Form Elements</a></li>
      <li><a href="form_wysiwyg.html">WYSIWYG</a></li>
      <li><a href="form_validation.html">Form Validation</a></li>
      <li class="divider" style="border-bottom:1px solid #ddd; margin:0px; margin-top:5px;"></li>
      <li class="dropdown-header">Tables</li>
      <li><a href="form_basic.html">Static Tables</a></li>
      <li><a href="form_advanced.html">jQuery Datatables</a></li>
      <li class="divider" style="border-bottom:1px solid #ddd; margin:0px; margin-top:5px;"></li>
      <li><a href="storyboard.html">Storyboard</a></li>
      <li><a href="calendar.html">Calendar</a></li>
      <li><a href="maps.html">Maps</a></li>
      <li class="divider" style="border-bottom:1px solid #ddd; margin:0px; margin-top:5px;"></li>
      <li class="dropdown-header">Pages</li>
      <li><a href="login.html">Login</a></li>
      <li><a href="FAQ.html">F.A.Q.</a></li>
      <li><a href="grid.html">Grid</a></li>
      <li><a href="grid.html">404 Error Template</a></li>
      <li><a href="invoice.html">Invoice</a></li>
    </ul>
   </div>
   
   <div id="secondary-search" class="input-icon visible-xs">
    <i class="icon icon-search"></i>
    <input class="form-control form-warning input-sm" type="text">
   </div>
   <!-- END RESPONSIVE NAVIGATION -->
   
   <!-- RIGHT NAV, CRUMBS, & CONTENT -->
   <div class="right">
   
    <div class="nav">
     <div class="bar">
      
      <!-- RESPONSIVE SMALL LOGO (HIDDEN BY DEFAULT) -->
      <div class="logo-small visible-xs"><img src="../../lib/img/logo.png"></div>
      
      <!-- NAV PILLS -->
      <ul class="nav nav-pills hidden-xs">
        <li class="active"><a href="index.html"><span class="fa fa-dashboard"></span>Dashboard</a></li>
        <li><a href="#"><span class="icon icon-barcode"></span>Labels <span class="label label-primary">1,078</span></a></li>
        <li><a href="#"><span class="icon icon-cog"></span>Admin</a></li>
      </ul>
      
      <!-- ICON DROPDOWNS -->
      <div class="hov">
       <div class="btn-group">
        <a class="con" href="" data-toggle="dropdown"><span class="icon icon-bell"></span><span class="label label-danger">55</span></a>
        <ul class="dropdown-menu pull-right dropdown-alerts" role="menu">
         <li class="title"><span class="icon icon-bell"></span>&nbsp;&nbsp;There are 5 new alerts in the system...</li>
         <li class="alert">
          <div class="alert-icon alt-default"><span class="fa fa-check-square"></span></div>
          <div class="alert-content">Quality check was successful</div>
          <div class="alert-time">32 sec ago</div>
         </li>
         <li class="alert">
          <div class="alert-icon alt-primary"><span class="fa fa-plus-square"></span></div>
          <div class="alert-content">New user added (Bob Grassle)</div>
          <div class="alert-time">11 min ago</div>
         </li>
         <li class="alert">
          <div class="alert-icon alt-warning"><span class="fa fa-pencil-square"></span></div>
          <div class="alert-content">User profile updated (Steve Jones)</div>
          <div class="alert-time">3 hours ago</div>
         </li>
         <li class="alert">
          <div class="alert-icon alt-danger"><span class="fa fa-warning"></span></div>
          <div class="alert-content">System failure reported</div>
          <div class="alert-time">2 days ago</div>
         </li>
         <li class="divider"></li>
         <li><a href="#">View all recent alerts</a></li>
        </ul>
       </div>
       <div class="btn-group">
        <a class="con" href="" data-toggle="dropdown"><span class="icon icon-envelope"></span><span class="label label-success">5</span></a>
        <ul class="dropdown-menu pull-right dropdown-messages" role="menu">
         <li class="title"><span class="icon icon-envelope"></span>&nbsp;&nbsp;You have 13 new messages to read...</li>
         <li class="message">
          <div class="message-icon"><img src="../../lib/img/users/1.png"></div>
          <div class="message-content"><a href="#">Steve</a> Lorem ipsum dolor sit amet...</div>
          <div class="message-time">32 sec ago</div>
         </li>
         <li class="message">
          <div class="message-icon"><img src="../../lib/img/users/2.png"></div>
          <div class="message-content"><a href="#">John</a> Quisque commodo sed ipsum...</div>
          <div class="message-time">11 min ago</div>
         </li>
         <li class="message">
          <div class="message-icon"><img src="../../lib/img/users/3.png"></div>
          <div class="message-content"><a href="#">Susan</a> Consectetur adipiscing elit...</div>
          <div class="message-time">3 hours ago</div>
         </li>
         <li class="message">
          <div class="message-icon"><img src="../../lib/img/users/4.png"></div>
          <div class="message-content"><a href="#">Barbara</a> Quisque commodo sed ipsum...</div>
          <div class="message-time">2 days ago</div>
         </li>
         <li class="divider"></li>
         <li><a href="#">View all new messages...</a></li>
        </ul>
       </div>
       <div class="btn-group">
        <a class="con" href="" data-toggle="dropdown"><span class="icon icon-user"></span><span class="label label-primary">+5</span></a>
        <ul class="dropdown-menu pull-right dropdown-profile" role="menu">
         <li class="title"><span class="icon icon-user"></span>&nbsp;&nbsp;Welcome, Joseph!</li>
         <li><a href="#"><span class="fa fa-gears"></span>Settings</a></li>
         <li><a href="#"><span class="fa fa-user"></span>Profile</a></li>
         <li><a href="#"><span class="icon icon-envelope"></span>Messages</a></li>
         <li class="divider"></li>
         <li><a href="#"><span class="fa fa-power-off"></span>Logout</a></li>
        </ul>
       </div>
      </div>
     </div>
     
     <!-- BREADCRUMBS -->
     <div class="crumbs">
      <ol class="breadcrumb hidden-xs">
       <li><i class="fa fa-home"></i> <a href="#">Home</a></li>
       <li><a href="#">Tables</a></li>
       <li class="active">jQuery Datatables</li>
      </ol>
     </div>
    </div>
    
    <!-- BEGIN PAGE CONTENT -->
    <div class="content">
     <div class="page-h1">
      <h1>jQuery Datatables <small>// Dynamic Tables</small></h1>
     </div>
     <div class="tbl">
      <div class="col-md-12">
       <div class="wdgt" hide-btn="true">
        <div class="wdgt-header">Editar Permisos de Usuario</div>
        <div class="wdgt-body" style="padding-bottom:0px; padding-top:10px;">
        <?php
          $user = $userDAO->getUserByIdAll($_GET["email"]);
          $perfiles = $perfilDAO->getPerfiles();
          if (!is_null($userDAO->getError()) or  !is_null($perfilDAO->getError()) or is_numeric($user) or is_numeric($perfiles)) {
            
        ?>
        <div class="alertDiv alert alert-danger alert-round alert-border alert-soft">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <span class="icon icon-remove-sign">
              
             </span> <strong>Error:</strong><?php echo  'Se ha producido un error en la conexión a la base de datos, por favor intente realizar esta operación más tarde'; ?>
          </div>
         <?php
          }
          else{
        ?>
        <form id="edit-permisos-form" class="form-horizontal" action="../../services/admin/usuarioPermisos.php" method="POST">
       
          <div class="form-group">
            <label class="col-lg-3 control-label">Nombres</label>
            <div class="col-lg-7">
              <h5><?php echo $user->getNombres(); ?></h5>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Apellidos</label>
            <div class="col-lg-7">
              <h5><?php echo $user->getApellidos(); ?></h5>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email</label>
            <div class="col-lg-7">
              <h5><?php echo $user->getEmail(); ?></h5>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Estado</label>
            <div class="col-lg-7">
              <span class="wdgt-switch"><input id="switch" class="switch4" type="checkbox" name="estado" value="1" 
              <?php if($user->getEstado()) 
              {
                echo "checked";
                } ?>></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Perfil</label>
            <div class="col-lg-7">
              <select class="form-control" name="perfil" id="cbx-perfiles">
              <?php if (is_null($user->getPerfil())) {
              
               echo '<option value="">--Seleccione una opción---</option>';
               }else{
                 echo '<option value="" selected>--Seleccione una opción---</option>';
               }
               foreach ($perfiles as $perfil) {
                  if ($perfil->getIdPerfil() == $user->getPerfil()) {
                    echo '<option value="'.$perfil->getIdPerfil().'" selected>'.$perfil->getNombrePerfil().'</option>';
                }
                else{
                echo  '<option value="'.$perfil->getIdPerfil().'">'.$perfil->getNombrePerfil().'</option>';
                  }
                } 
               ?> 
                
              </select>
            </div>
          </div>
          <input type="hidden" name="email" value="<?php echo $_GET["email"]; ?>" />
          <div class="form-group">
            <div class="col-lg-9 col-lg-offset-3">
              <button class="btn btn-primary" type="submit">Ingresar cambios</button>
            </div>
          </div>
        </form>
        <?php 
          }
        ?>
        </div>
       </div>

      </div>
     </div>

    </div>
    <!-- END PAGE CONTENT -->

   </div>
   <!-- END NAV, CRUMBS, & CONTENT -->
   
  </div>
  
  <!-- Default JS (DO NOT TOUCH) -->
  <script src="../../lib/JS/jquery-3.1.0.min.js"></script>
  <script src="../../lib/JS/jquery-ui.min.js"></script>
  <script src="../../lib/JS/bootstrap.min.js"></script>
  <script src="../../lib/JS/hogan.min.js"></script>
  <script src="../../lib/JS/typeahead.min.js"></script>
  <script src="../../lib/JS/typeahead-example.js"></script>
  <script src="../../lib/JS/soft-widgets.js"></script>
  <script src="../../lib/JS/jquery.switchButton.js"></script>
  <script type="text/javascript" src="../../lib/JS/bootstrapValidator.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      if (!$("#switch").is(":checked")) {
        $(this).prop("disabled", "disabled");
      }
      
      $("#switch").change(function(){
        if(!$(this).is(":checked")){
          $("#cbx-perfiles").val("");
          $("#cbx-perfiles").prop("disabled", "disabled");
        }else{
          $("#cbx-perfiles").prop("disabled", false);
        }
      });

      $(".switch4").switchButton({
        on_label : 'Activado',
        off_label : 'Desactivado'
      });

      $("#edit-permisos-form").bootstrapValidator({
        fields:{
          perfil : {
            validators: {
              callback : {
                message : "Por favor escoga un perfil de la lista",
                callback : function (value, validator) {
                   return !$("#switch").is(":checked") || value !== "";

                  }
                }
              }
            }
          }
        });
    });
  </script> 
 
 </body>
</html>
<?php
}
else{
 header("Location: ../home.php");
    session_destroy();
    exit(); 
} 
?>