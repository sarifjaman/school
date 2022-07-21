<?php
// print_r($errors);
// echo $mode;
// exit();
?>

<?php $this->view("includes/header"); ?>

<div class="wrapper">
    <?php $this->view("nav/nav-top"); ?>

    <div class="page-wrap">
        <?php $this->view("nav/nav-side"); ?>

        <style type="text/css">
            .err-msg {
                color: #911;
            }

            .add-school-sec {
                position: relative;
                left: 87%;
            }

            .fa-plus {
                margin-right: 3px;
            }

            .ex-cus i {
                margin: 14px 8px 11px 10px;
                margin-top: -6px;
                position: relative;
                top: -27px;
                left: 1px;
            }

            .ex-margin {
                padding-left: 26px;
            }
        </style>

        <div class="main-content">
            <div class="container-fluid">
                <div class="row clearfix">

                    <div class="widget ">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6">
                                <div class="widget-body ">





                                    <form method="POST" class="ex-cus ">
                                        <h3 class="text-center">Add User</h3>
                                        <br>
                                        <div class="form-group">
                                            <input type="text" class="form-control ex-margin" value="<?php echo get_var('firstname'); ?>" name="firstname" placeholder="Firstname">
                                            <i class="ik ik-user"></i>
                                            <div class="fnamecheck err-msg">
                                                <?php if (array_key_exists('firstname', $errors)) {
                                                    echo $errors['firstname'];
                                                } ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control ex-margin" value="<?php echo get_var('lastname'); ?>" name="lastname" placeholder="Lastname">
                                            <i class="ik ik-user"></i>
                                            <div class="lnamecheck err-msg">
                                                <?php if (array_key_exists('lastname', $errors)) {
                                                    echo $errors['lastname'];
                                                } ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control ex-margin" value="<?php echo get_var('email'); ?>" name="email" placeholder="Email">
                                            <i class="ik ik-user"></i>
                                            <div class="emailcheck err-msg">
                                                <?php if (array_key_exists('email', $errors)) {
                                                    echo $errors['email'];
                                                } ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <select class="form-control" name="gender">
                                                <option>--Select Your Gender--</option>
                                                <option <?php echo get_select('gender', 'female'); ?> value="female">Female</option>
                                                <option <?php echo get_select('gender', 'male'); ?> value="male">Male</option>
                                            </select>
                                            <div class="gendercheck err-msg">
                                                <?php if (array_key_exists('gender', $errors)) {
                                                    echo $errors['gender'];
                                                } ?>
                                            </div>
                                        </div>

                                        <div class="form group">
                                            <select class="form-control" name="rank">
                                                <option>--Select Your Rank--</option>
                                                <?php if (isset($mode) == 'students') : ?>
                                                    <option <?php echo get_select('rank', 'student'); ?> value="student">Student</option>
                                                <?php else : ?>
                                                    <option <?php echo get_select('rank', 'student'); ?> value="student">Student</option>
                                                    <option <?php echo get_select('rank', 'reception'); ?> value="reception">Reception</option>
                                                    <option <?php echo get_select('rank', 'lecturer'); ?> value="lecturer">Lecturer</option>
                                                    <option <?php echo get_select('rank', 'admin'); ?> value="admin">Admin</option>
                                                    <?php if (Auth::getRank() == "super_admin") : ?>
                                                        <option <?php echo get_select('rank', 'super_admin'); ?> value="super_admin">Super Admin</option>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </select>

                                            <div class="rankcheck err-msg">
                                                <?php if (array_key_exists('rank', $errors)) {
                                                    echo $errors['rank'];
                                                } ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control ex-margin" name="password" placeholder="Password">
                                            <i class="ik ik-lock"></i>
                                            <div class="passwordcheck err-msg">
                                                <?php
                                                if (array_key_exists('password', $errors)) {
                                                    echo $errors['password'];
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control ex-margin" name="cpassword" placeholder="Confirm Password">
                                            <i class="ik ik-eye-off"></i>
                                            <div class="cpasswordcheck err-msg"></div>
                                        </div>

                                        <?php if (isset($mode) == 'students') : ?>
                                            <div class="sign-btn text-center">
                                                <a href="<?php echo ROOT; ?>/students" class="btn btn-danger">Cancel</a>
                                                <input type="submit" id="signup" class="btn btn-success" value="Add User" />
                                            </div>
                                        <?php else : ?>
                                            <div class="sign-btn text-center">
                                                <a href="<?php echo ROOT; ?>/users" class="btn btn-danger">Cancel</a>
                                                <input type="submit" id="signup" class="btn btn-success" value="Add User" />
                                            </div>
                                        <?php endif; ?>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>





    <!-- <footer class="footer">
            <div class="w-100 clearfix">
                <span class="text-center text-sm-left d-md-inline-block">Copyright © 2018 ThemeKit v2.0. All Rights Reserved.</span>
                <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark" target="_blank">Lavalite</a></span>
            </div>
        </footer> -->

    <!------Modal Start------->

    <!-------Modal End--------->





    <?php $this->view("includes/footer"); ?>