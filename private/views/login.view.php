<?php $this->view("includes/header"); ?>


<div class="auth-wrapper">
    <div class="container-fluid h-100">
        <div class="row flex-row h-100 bg-white">
            <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                <div class="lavalite-bg" style="background-image: url('<?php echo ROOT; ?>/assets/img/auth/login-bg.jpg')">
                    <div class="lavalite-overlay"></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                <div class="authentication-form mx-auto">
                    <div class="logo-centered">
                        <a href="../index.html"><img src="<?php echo ROOT; ?>/assets/img/logo/downloads.png" alt=""></a>
                    </div>
                    <h3>Sign In to Modern School</h3>
                    <p>Happy to see you again!</p>

                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" value="<?php echo get_var('email'); ?>" name="email" class="form-control" placeholder="Email" required="" value="johndoe@admin.com">
                            <i class="ik ik-user"></i>
                        </div>

                        <div class="form-group">
                            <input type="password" value="<?php echo ROOT; ?>" name="password" class="form-control" placeholder="Password" required="" value="123456">
                            <i class="ik ik-lock"></i>
                        </div>

                        <div class="row">
                            <div class="col text-left">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                    <span class="custom-control-label">&nbsp;Remember Me</span>
                                </label>
                            </div>
                            <div class="col text-right">
                                <a href="forgot-password.html">Forgot Password ?</a>
                            </div>
                        </div>
                        <div class="sign-btn text-center">
                            <input type="submit" class="btn btn-theme" id="login" value="Sign In" />
                        </div>
                    </form>

                    <div class="register">
                        <p>Don't have an account? <a href="<?php echo ROOT; ?>/signup">Create an account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->view("includes/footer"); ?>