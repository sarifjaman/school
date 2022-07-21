<?php
// echo "<pre>";
// print_r($row);
// echo $row[0]->school;
// echo $row[0] = ['school'];
// foreach ($row as $row) {
//     echo $row[0] = $row;
// }
// var_dump(implode(", ", $row));

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
                                        <!-- <?php include "includes/crumbs.view.php"; ?> -->
                                    </div>

                                    <div class="card-group m3 justify-content-center">
                                        <div class="col-12 col-md-6 shadow justify-content-center">

                                            <form method="post" class="m-3 p-3\2">
                                                <h4 class="text-center">Edit School</h4>
                                                <br>
                                                <div class="form-group">
                                                    <label for="school">School Name:</label>

                                                    <input type="text" value="<?php echo get_var('school', $row->school); ?>" class="form-control" name="school" />

                                                </div>

                                                <div class="form-group">
                                                    <a href="<?php echo ROOT; ?>/schools" class="btn btn-danger">Cancel</a>
                                                    <input type="submit" class="btn btn-primary float-right" value="Edit School" />
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