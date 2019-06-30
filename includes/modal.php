<div id="myModal" class="modal fade" role="dialog"> <!--6-->
  <div class="modal-dialog"> <!--7-->
    <!-- Modal content-->
    <div class="modal-content"> <!--8-->
      <div class="modal-header"> <!--9-->
        <h4 class="modal-title"><b>Your new site!</b></h4>
      </div> <!--9-->
      <div class="modal-body"> <!--10-->
          <!-- ADD NEW SITE TO DB -->


                      <!-- BEGIN FORM-->
              <form class="form-horizontal" method="post" action="includes/sitemon.php?submit=true" id="form_sample_1">


                     <div class="form-body"> <!--11-->

                         <div> <!-- START SITE INFO DIVISION-->
                            <h3>SITE INFORMATION</h3>

                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>

                                <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">Site Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="" name="name" value="<?php $name; ?>">
                                        <div class="form-control-focus"> </div>
                                        <span class="help-block">enter your site name</span>
                                    </div>
                                </div>


                                <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">URL
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="" name="url" value="<?php $host; ?>">
                                        <div class="form-control-focus"> </div>
                                        <span class="help-block">e.g. google.com </span>
                                    </div>
                                </div>

                         </div> <!-- END SITE INFO DIVISION-->

                       </br>

                         <div> <!-- START SITE OWNER INFO DIVISION-->
                           <h3>SITE OWNER INFORMATION</h3>

                                <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label"> First Name</label>
                                    <div class="col-md-6">
                                        <input type="text" name="fname" class="form-control" placeholder="" >
                                        <div class="form-control-focus"> </div>
                                    </div>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-6">
                                        <input type="text" name="lname" class="form-control" placeholder="" >
                                        <div class="form-control-focus"> </div>
                                    </div>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">Email</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="" name="email">
                                        <div class="form-control-focus"> </div>
                                    </div>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" name="number" class="form-control"  placeholder="" >
                                        <div class="form-control-focus"> </div>
                                        <span class="help-block">e.g. 7879999999 </span>
                                    </div>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label">Company</label>
                                    <div class="col-md-6">
                                        <input type="text" name="company" class="form-control" placeholder="" >
                                        <div class="form-control-focus"> </div>
                                    </div>
                                </div>

                         </div>

                <div class="modal-footer">
                <div class="form-actions">
                    <div class="row">
                        <button class="btn btn-default" type="submit">Monitor!</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="color:#ffffff; background-color:#2B3643;">Cancel</button>
                    </div>
                </div>

                </div>
                </div> <!-- END SITE OWNER INFO FORM-->

          </form>

    </div> <!--11-->

  </div> <!--10-->
</div>  <!--8-->
<!--END OF MODAL BLOCK -->

</div> <!--7-->
