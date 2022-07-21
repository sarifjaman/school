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

        <?php
        // echo "<pre>";
        // print_r($data);
        // exit();
        ?>


        <div class="main-content">
            <div class="container-fluid">
                <div class="row clearfix">

                    <div class="widget">
                        <div class="row">
                            <div class="col-12">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <!-- <?php include "includes/crumbs.view.php"; ?> -->
                                    </div>

                                    <div class="card-group m3 justify-content-center">
                                        <div class="col-12 col-md-6 shadow justify-content-center">

                                            <form method="post" class="m-3 p-3\2">
                                                <h4 class="text-center">Delete School</h4>
                                                <p style="color:#911; text-align: center;">Are you sure delete school name!</p>
                                                <br>
                                                <div class="form-group">
                                                    <label for="school">School Name:</label>

                                                    <input disabled type="text" value="<?php echo $data[0]->school; ?>" class="form-control" name="school" />
                                                    <input type="hidden" name="id">




                                                </div>

                                                <div class="form-group">
                                                    <a href="<?php echo ROOT; ?>/schools" class="btn btn-danger">Cancel</a>
                                                    <input type="submit" class="btn btn-primary float-right" value="Delete School" />
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