<?php require_once("login_head.php"); 
session_start();

unset($_SESSION["user"]);
session_destroy();
print_r($_SESSION['user']);

?>
    <!--nav class="main-nav">
        <ul>
            <li><a href="#demo1" class="active" data-title="Login Form" data-panel="first"></a></li>
            <li><a href="#demo2" data-title="Registration Form" data-panel="second"></a></li>
            <li><a href="#demo3" data-title="Forgot Password Form" data-panel="third"></a></li>
            <li><a href="#demo4" data-title="Login Form Dark" data-panel="fourth"></a></li>
            <li><a href="#demo5" data-title="Registration Form Dark" data-panel="fifth"></a></li>
            <li><a href="#demo6" data-title="Forgot Password Form Dark" data-panel="sixth"></a></li>
        </ul>
    </nav-->
   
    <section class="colorBg1 colorBg" id="demo1" data-panel="first">

        <div class=" container">

            <div class="login-form-section">
                <div class="login-content " data-animation="bounceIn">
                    <form action="Login.php" method="post">
                        <div class="section-title">
                            <h3>LogIn to your Account</h3>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                <input type="text" required="required" class="form-control" placeholder="Username" name="Username" autocomplete="OFF" />
                            </div>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
                                <input type="password" required="required" class="form-control " placeholder="Password" name="Password" autocomplete="OFF" />
                            </div>
                        </div>
                        <div class="login-form-action clearfix">
                            <div class="checkbox pull-left">
                                <div class="custom-checkbox">
                                    <input type="checkbox" checked name="iCheck">
                                </div>
                                <span class="checkbox-text pull-left">&nbsp;Remember Me</span>
                            </div>
                            <input type="submit" class="btn btn-success pull-right green-btn" name="submit" value="submit"/>
                        </div>
                    </form>
                </div>
                <div class="login-form-links link1 " data-animation="fadeInLeftBig" data-animation-delay=".2s">
                    <h4 class="blue">Don't have an Account?</h4>
                    <!--span>No worry</span-->
                    <a href="addEmployeeName.php" class="blue">Click Here</a>
                    <span>to Register</span>
                </div>
                <div class="login-form-links link2 " data-animation="fadeInRightBig" data-animation-delay=".4s">
                    <h4 class="green">Forget your Password?</h4>
                    <!--span>Dont worry</span-->
                    <a href="ForgetPassword.php" class="green">Click Here</a>
                    <span>to Get New One</span>
                </div>
            </div>
        </div>
    </section>
<?php require_once("login-footer.php");?>
