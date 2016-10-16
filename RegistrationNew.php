<?php require_once("login_head.php"); ?>
	<section class="colorBg2 colorBg" id="demo2" data-panel="second">
        <div class=" container">
            <br />
            <br />
            <!-- #region Registration Form -->
            <div class="registration-form-section">
                <form>
                    <div class="section-title reg-header " data-animation="fadeInDown">
                        <h3>Get your Account Here </h3>

                    </div>
                    <div class="clearfix">
                        <div class="col-sm-6 registration-left-section  " data-animation="fadeInUp">
                            <div class="reg-content">
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                        <input type="text" class="form-control " placeholder="FirstName" required="required" autocomplete="OFF" />
                                    </div>
                                </div>
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                        <input type="text" class="form-control " placeholder="LastName" required="required" autocomplete="OFF" />
                                    </div>
                                </div>
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
                                        <input type="email" class="form-control " placeholder="Email Id" required="required" autocomplete="OFF" />
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-sm-6 registration-right-section " data-animation="fadeInUp">
                            <div class="reg-content">
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                        <input type="text" class="form-control " placeholder="UserName" required="required" autocomplete="OFF" />
                                    </div>
                                </div>
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
                                        <input type="password" class="form-control " placeholder="Password" required="required" autocomplete="OFF" />
                                    </div>
                                </div>
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
                                        <input type="password" class="form-control " placeholder="Confirm-Password" required="required" autocomplete="OFF" />
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="registration-form-action clearfix " data-animation="fadeInUp" data-animation-delay=".15s">
                        <a href="index.php" class="btn btn-success pull-left blue-btn ">
                            <i class="icon-chevron-left"></i>&nbsp; &nbsp;Back To Login  
                        </a>
                        <button type="submit" class="btn btn-success pull-right green-btn ">Register Now &nbsp; <i class="icon-chevron-right"></i></button>

                    </div>
                </form>
            </div>



        </div>
    </section>


<?php require_once("login-footer.php");?>