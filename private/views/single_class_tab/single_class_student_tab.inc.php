<nav class="navbar navbar-light bg-light">
    <form class="form-inline">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
        </div>
    </form>

    <div class="">
        <a href="<?php echo ROOT; ?>/single_class/studentadd/<?php echo $data->class_id; ?>?select=true">
            <button type="button" class="btn btn-success"><i class="fa fa-plus"> Add New Student</i></button>
        </a>

        <a href="<?php echo ROOT; ?>/single_class/studentremove/<?php echo $data->class_id; ?>?select=true">
            <button type="button" class="btn btn-danger"><i class="fa fa-minus"></i> Remove Studdent</button>
        </a>
    </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card-group m3">
                <?php if (is_array($students)) { ?>
                    <?php if ($students) { ?>
                        <?php foreach ($students as $student) : ?>

                            <?php
                            $row = $student->user;
                            include(view_path('single_page/single_user_card'));
                            // $this->view('single_page/single_user_card', ['row' => $row]);
                            ?>

                        <?php endforeach; ?>
                    <?php } else { ?>
                        <span class="err-msg">Data not found!</span>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>