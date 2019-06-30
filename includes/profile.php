<?php
  // include 'header.php' ;
  include 'logout.php' ;
  // include 'db_connect.php' ;

  session_start();

  if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800))
  {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
  }
  $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

  if(!isset($_SESSION["user_data"]))
  {
    header("location: login.php");
    die() ;
  }
 ?>

 <title> ¡Perfil! </title>

 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta content="width=device-width, initial-scale=1" name="viewport" />
     <meta content="Preview page of Metronic Admin Theme #6 for responsive extension demos" name="description" />
     <meta content="" name="author" />
     <!-- BEGIN LAYOUT FIRST STYLES -->
     <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
     <!-- END LAYOUT FIRST STYLES -->
     <!-- BEGIN GLOBAL MANDATORY STYLES -->
     <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
     <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
     <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
     <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
     <!-- END GLOBAL MANDATORY STYLES -->
     <!-- BEGIN PAGE LEVEL PLUGINS -->
     <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
     <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
     <!-- END PAGE LEVEL PLUGINS -->
     <!-- BEGIN THEME GLOBAL STYLES -->
     <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
     <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
     <!-- END THEME GLOBAL STYLES -->
     <!-- BEGIN THEME LAYOUT STYLES -->
     <link href="../assets/layouts/layout6/css/layout.min.css" rel="stylesheet" type="text/css" />
     <link href="../assets/layouts/layout6/css/custom.min.css" rel="stylesheet" type="text/css" />
     <link href="../sass/footer.scss" rel="stylesheet" type="text/css" />

     <!-- END THEME LAYOUT STYLES -->
     <link rel="shortcut icon" href="images/favicon.ico" /> </head>
 <!-- END HEAD -->
 <!-- BEGIN HEADER -->
 <header class="page-header">
     <nav class="navbar" role="navigation" >
         <div class="container-fluid">
             <div class="havbar-header" >
                 <!-- BEGIN LOGO -->
                   <a  href="index.php">
                     <img src="../images/pcip_logo6.png" >
                   </a>
                 <!-- END LOGO -->
                 <ul class="nav navbar-nav pull-right">
                     <!-- END USER LOGIN DROPDOWN -->
                     <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                     <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                     <li class="dropdown dropdown-quick-sidebar-toggler">
                         <!-- <a href="includes/logOut.php?exit=true"> -->
                           <a href='includes/logout.php'>
                               <i class='icon-logout'></i> Log Out!
                           </a>
                     </li>
                     <!-- END QUICK SIDEBAR TOGGLER -->
                 </ul>
             </div>
         </div>
     </nav>
 </header>

 <!-- END HEADER -->
 <body class="">
   <?php include 'db_connect.php' ;
         include 'modal.php' ;
   ?>

     <!-- BEGIN CONTAINER -->
     <div class="container-fluid">
     <div class="page-content page-content-popup">
         <!-- <div class="page-content page-content"> -->

             <div class="page-content-fixed-header">
                 <!-- BEGIN BREADCRUMBS -->
                 <ul class="page-breadcrumb">
                     <li>
                         <a href="#"> Profile </a>
                     </li>
                     <li>
                       <a href="about.php"> About PCIP Online </a>
                     </li>
                     <li>
                       <a href="catec.php"> About Catec </a>
                     </li>
                 </ul>
                 <!-- END BREADCRUMBS -->

                 <div class="content-header-menu">
                         <!-- BEGIN DROPDOWN AJAX MENU -->
                         <div class="dropdown-ajax-menu btn-group">
                             <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                 <i class="fa fa-circle"></i>
                                 <i class="fa fa-circle"></i>
                                 <i class="fa fa-circle"></i>
                             </button>
                             <ul class="dropdown-menu-v2">
                                 <li>
                                     <a href="start.html">Print</a>
                                 </li>
                                 <li>
                                     <a href="start.html">Download PDF</a>
                                 </li>
                                 <li>
                                     <a href="start.html">Export as Excel/CSV</a>
                                 </li>

                             </ul>
                         </div>
                 </div>
             </div>

          <?php include 'sidebar.php' ; ?>

             <div class="page-fixed-main-content">
                 <!-- BEGIN PAGE BASE CONTENT -->
                 <div class="portlet light portlet-fit bordered">
                     <div class="portlet-body">
                         <div class="table-toolbar">
                             <!-- <div class="row"> -->
                            <div class="row">


                             <div class="col-md-6"> <!--4-->
                                 <div class="btn-group"> <!--5-->

                             <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Index</button>
                              <?php include 'modal.php' ; ?>
                         </div>
                       </div>
                     </div>
                   </div>


                         <!-- </form> -->
                         <!-- <a class="btn green btn-outline sbold" data-toggle="modal" href="#large"> View Demo </a> -->


                         <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                           <thead>
                               <tr>
                                   <th> ID </th>
                                   <th> Subject </th>
                                   <th> Title </th>
                                   <th> Author </th>
                                   <th> Descriptor </th>
                                   <th> Newspaper </th>
                                   <th> Page </th>
                                   <th> Suplement </th>
                                   <th> Illustration </th>
                                   <th> Date </th>
                                   <th> Organization </th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php include "includes/filters.php" ; ?>
                          </tbody>
                         </table>

                  </div>
                 </div> <!-- portlet light-border -->
               </div>
             </div>
           </div>

         </br>
       </br>
     </br>

        <!-- </body> -->
     <? include 'footer.php' ; ?>
