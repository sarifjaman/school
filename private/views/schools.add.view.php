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
        </style>



        <div class="main-content">
            <div class="container-fluid">
                <div class="row clearfix">

                    <div class="widget">
                        <div class="row">
                            <div class="col-12">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <?php $this->view('includes/crumbs', ['crumbs' => $crumbs]); ?>
                                    </div>

                                    <div class="card-group m3 justify-content-center">
                                        <div class="col-12 col-md-6 shadow justify-content-center">
                                            <form method="post" class="m-3 p-3\2">
                                                <h4 class="text-center">Add School</h4>
                                                <br>
                                                <div class="form-group">
                                                    <label for="school">School Name:</label>
                                                    <input type="text" class="form-control" name="school" placeholder="School Name" />
                                                    <div class="schoolnamecheck"><?php
                                                                                    if (array_key_exists('school', $errors)) {
                                                                                        echo $errors['school'];
                                                                                    }
                                                                                    ?></div>
                                                </div>

                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-primary" value="Add School" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>














        <?php $this->view("includes/footer"); ?>