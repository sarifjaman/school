<?php
// echo "<pre>";
// print_r($data);
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
                                        <?php $this->view('includes/crumbs', ['crumbs' => $crumbs]); ?>
                                    </div>

                                    <div class="card-group m3">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="add-school-sec m-4">
                                                    <a href="<?php echo ROOT; ?>/classes/add" class="btn btn-success"><i class="fa fa-plus"></i> Add School</a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <table id="advanced_table" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="nosort" width="10">
                                                                <label class="custom-control custom-checkbox m-0">
                                                                    <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
                                                                    <span class="custom-control-label">&nbsp;</span>
                                                                </label>
                                                            </th>
                                                            <th>No</th>
                                                            <th>Class</th>
                                                            <th>Created By</th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                            <th>Details</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php if (isset($data)) : ?>
                                                            <?php $i = 1; ?>
                                                            <?php foreach ($data as $data) : ?>
                                                                <tr>
                                                                    <td>
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                                                            <span class="custom-control-label">&nbsp;</span>
                                                                        </label>
                                                                    </td>

                                                                    <td><?php echo $i++; ?></td>
                                                                    <td><?php echo $data->class; ?></td>
                                                                    <td><?php echo $data->user->firstname; ?></td>
                                                                    <td><?php echo get_date($data->date); ?></td>
                                                                    <td>
                                                                        <a href="<?php echo ROOT; ?>/classes/edit/<?php echo $data->id; ?>">
                                                                            <button type="button" class="btn-sm btn-info text-white"><i class="fa fa-edit"></i></button>
                                                                        </a>

                                                                        <a href="<?php echo ROOT; ?>/classes/delete/<?php echo $data->id; ?>">
                                                                            <button type="button" class="btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button>
                                                                        </a>


                                                                    </td>

                                                                    <td>
                                                                        <a href="<?php echo ROOT; ?>/single_class/<?php echo $data->class_id; ?>">
                                                                            <button class="btn btn-primary btn-sm"><i class="fa fa-chevron-right"></i></button>
                                                                        </a>
                                                                    </td>

                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php else : ?>
                                                            <h4 class="err-msg">Data not found!</h4>
                                                        <?php endif; ?>

                                                    </tbody>
                                                </table>

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





        <!-- <footer class="footer">
            <div class="w-100 clearfix">
                <span class="text-center text-sm-left d-md-inline-block">Copyright © 2018 ThemeKit v2.0. All Rights Reserved.</span>
                <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark" target="_blank">Lavalite</a></span>
            </div>
        </footer> -->

        <!------Modal Start------->

        <!-------Modal End--------->








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