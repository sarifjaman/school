<?php
// echo "<pre>";
// print_r($mode);
// exit();
?>
<?php $this->view("includes/header"); ?>

<div class="wrapper">
    <?php $this->view("nav/nav-top"); ?>

    <div class="page-wrap">
        <?php $this->view("nav/nav-side"); ?>

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
                                </div>
                                <style type="text/css">
                                    .err-msg {
                                        color: #911;
                                    }

                                    .add-students {
                                        right: 39px;
                                        position: absolute;
                                        margin-top: 11px;
                                    }
                                </style>

                                <nav class="navbar navbar-light bg-light">
                                    <form class="form-inline">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                                        </div>
                                    </form>
                                    <div class="add-students">
                                        <a href="<?php echo ROOT; ?>/add_user?mode=students" class="btn btn-primary">Add Students</a>
                                    </div>
                                </nav>

                                <div class="card-group m3">
                                    <?php if (isset($data)) : ?>
                                        <?php foreach ($data as $row) : ?>




                                            <?php
                                            include(view_path('single_page/single_user_card'));
                                            ?>

                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <h4 class="err-msg">Student not found!</h4>
                                    <?php endif ?>
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
</footer>

</div>
</div> -->






<?php $this->view("includes/footer"); ?>