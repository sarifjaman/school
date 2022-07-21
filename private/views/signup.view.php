<?php $this->view('includes/header'); ?>
<?php
// echo "<pre>";
// print_r($errors);
// print_r($this->firstname);
// echo $this->firstname;
// echo $firstname;
// echo $errors['firstname'];
// print_r(compact($errors));
?>



<div class="auth-wrapper">
    <div class="container-fluid h-100">
        <div class="row flex-row h-100 bg-white">
            <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                <div class="lavalite-bg" style="background-image: url('<?php echo ROOT; ?>/assets/img/auth/register-bg.jpg')">
                    <div class="lavalite-overlay"></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                <div class="authentication-form mx-auto">
                    <div class="logo-centered">
                        <a href="../index.html"><img src="<?php echo ROOT; ?>/assets/img/logo/downloads.png" alt=""></a>
                    </div>
                    <h3>New to ThemeKit</h3>
                    <p>Join us today! It takes only few steps</p>

                    <form action="" method="POST">

                        <div class="form-group">
                            <input type="text" id="firstname" value="<?php echo get_var('firstname'); ?>" name="firstname" class="form-control" placeholder="Firstname" autocomplete="off">
                            <i class="ik ik-user"></i>
                            <div class="fnamecheck">
                                <?php
                                if (array_key_exists('firstname', $errors)) {
                                    echo $errors['firstname'];
                                }
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" id="lastname" value="<?php echo get_var('lastname'); ?>" name="lastname" class="form-control" placeholder="Lastname" autocomplete="off">
                            <i class="ik ik-user"></i>
                            <div class="lnamecheck">
                                <?php
                                if (array_key_exists('lastname', $errors)) {
                                    echo $errors['lastname'];
                                }
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" id="email" value="<?php echo get_var('email'); ?>" name="email" class="form-control" placeholder="Email" autocomplete="off">
                            <i class="ik ik-user"></i>
                            <div class="emailcheck">
                                <?php
                                if (array_key_exists('email', $errors)) {
                                }
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <select id="gender" class="form-control" name="gender">
                                <option value="">---Select Your Gender---</option>
                                <option <?php echo get_select('gender', 'male'); ?> value="male">Male</option>
                                <option <?php echo get_select('gender', 'female'); ?> value="female">Female</option>
                            </select>
                            <i class="ik ik-user"></i>
                            <div class="gendercheck">
                                <?php
                                if (array_key_exists('gender', $errors)) {
                                    echo $errors['gender'];
                                }
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <select id="rank" class="form-control" name="rank">
                                <option value="">---Select Your Rank---</option>
                                <option <?php echo get_select('rank', 'student'); ?> value="student">Student</option>
                                <option <?php echo get_select('rank', 'reception'); ?> value="reception">Reception</option>
                                <option <?php echo get_select('rank', 'lecturer'); ?> value="lecturer">Lecturer</option>
                                <option <?php echo get_select('rank', 'admin'); ?> value="admin">Admin</option>
                                <?php if (Auth::getRank() == "super_admin") : ?>
                                    <option <?php echo get_select('rank', 'super_admin'); ?> value="super_admin">Super Admin</option>
                                <?php endif; ?>
                            </select>
                            <i class="ik ik-user"></i>
                            <div class="rankcheck">
                                <?php
                                if (array_key_exists('rank', $errors)) {
                                    echo $errors['rank'];
                                }
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="password" id="password" value="<?php echo get_var('password'); ?>" name="password" class="form-control" placeholder="Password" autocomplete="off">
                            <i class="ik ik-lock"></i>
                            <div class="passwordcheck">
                                <?php
                                if (array_key_exists('password', $errors)) {
                                    echo $errors['password'];
                                }
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="password" id="cpassword" value="<?php echo get_var('password2'); ?>" name="cpassword" class="form-control" placeholder="Confirm Password" autocomplete="off">
                            <i class="ik ik-eye-off"></i>
                            <div class="cpasswordcheck"></div>
                        </div>

                        <!-- 
                        <div class="row">
                            <div class="col-12 text-left">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                    <span class="custom-control-label">&nbsp;I Accept <a href="#">Terms and Conditions</a></span>
                                </label>
                            </div>
                        </div> -->

                        <div class="sign-btn text-center">
                            <input type="submit" id="signup" class="btn btn-theme" value="Create Account" />
                        </div>

                    </form>

                    <div class="register">
                        <p>Already have an account? <a href="login.html">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->view('includes/footer'); ?>