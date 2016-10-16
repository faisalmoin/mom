<?php require_once("login_head.php"); ?>
 <section class="colorBg3 colorBg" id="demo3" data-panel="third">
        <div class=" container">
            <br />
            <br />
            <br />

            <div class="forgot-password-section" data-animation="bounceInLeft">
                <div class="section-title">
                    <h3>Forget Password</h3>
                </div>
                <div class="forgot-content">
                    <form>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                <input type="text" class="form-control " placeholder="Username" required="required" autocomplete="OFF" />
                            </div>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
                                <input type="email" class="form-control " placeholder="Email Id" required="required" autocomplete="OFF" />
                            </div>
                        </div>
                        <div class="forget-form-action clearfix">
                            <a class="btn btn-success pull-left blue-btn" href="index.php"><i class="icon-chevron-left"></i>&nbsp;&nbsp;Back  </a>
                            <button type="submit" class="btn btn-success pull-right green-btn">Submit &nbsp;&nbsp; <i class="icon-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </section>
<?php require_once("login-footer.php");?>