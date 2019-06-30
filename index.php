<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
  <title> ¡Bienvenidos a PCIP Online! </title>
    <body class="">
      <?php include 'includes/db_connect.php' ;
            include 'includes/header.php' ;
      ?>

        <!-- BEGIN CONTAINER -->
        <div class="container-fluid">
        <div class="page-content page-content-popup">
            <!-- <div class="page-content page-content"> -->

                <div class="page-content-fixed-header">
                    <!-- BEGIN BREADCRUMBS -->
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="#"> Indexes </a>
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
                        <!-- END DROPDOWN AJAX MENU -->
                        <!-- BEGIN MENU TOGGLER -->
                        <button type="button" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="toggle-icon">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                        <!-- END MENU TOGGLER -->
                    </div>

                </div>
                  <? include 'includes/sidebar.php' ; ?>
                <div class="page-fixed-main-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="portlet light portlet-fit bordered">


                        <div class="portlet-body">
                            <div class="table-toolbar">
                                <div class="row">
                                  <!-- light portlet -->
                                </div>
                            </div>


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

                        </div> <!-- portlet-div -->
                    </div> <!-- portlet light-border -->
                  </div>
                </div>
              </div>
            </br>
          </br>
        </br>
                  <!-- </body> -->
                  <? include 'includes/footer.php' ; ?>
