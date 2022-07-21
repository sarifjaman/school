<?php
// echo "<pre>";
// print_r($data);
// echo $data->class;
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
        </style>



        <div class="main-content">
            <div class="container-fluid">
                <div class="row clearfix">

                    <div class="widget">
                        <div class="row">
                            <div class="col-12">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-center align-items-center mb-3">

                                    </div>

                                    <style type="text/css">
                                        .err-msg {
                                            color: #911;
                                        }
                                    </style>

                                    <div class="card-group m3 justify-content-center">
                                        <div class="col-12 col-md-6 shadow justify-content-center">
                                            <form method="post" class="m-3 p-3\2">
                                                <h4 class="text-center">Delete Class</h4>
                                                <p class="err-msg text-center">Are you sure delete class?</p>
                                                <br>
                                                <div class="form-group">
                                                    <label for="school">Class Name:</label>
                                                    <input type="text" disabled class="form-control" value="<?php echo get_var('class', $data[0]->class); ?>" name="class" placeholder="Class Name" />
                                                    <input type="hidden" name="id" />
                                                    <div class="schoolnamecheck err-msg">

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <a href="<?php echo ROOT; ?>/classes" class="btn btn-danger">Cancel</a>
                                                    <input type="submit" class="btn btn-primary" value="Delete Class" />
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









    </div>



</div>
<?php $this->view("includes/footer"); ?>