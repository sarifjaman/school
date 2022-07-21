<nav class="navbar navbar-light bg-light">
    <form method="post" class="form-inline">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
        </div>
    </form>


    <div class="class-btn-sec">
        <a href="<?php echo ROOT; ?>/single_class/lectureradd/<?php echo $data->class_id; ?>?select=true">
            <button type="button" class="btn btn-success"><i class="fa fa-plus"> Add New Lecturer</i></button>
        </a>

        <a href="<?php echo ROOT; ?>/single_class/lecturerremove/<?php echo $data->class_id; ?>?select=true">
            <button type="button" class="btn btn-danger"><i class="fa fa-minus"> Remove</i></button>
        </a>
    </div>

    <?php
    // $page_tab = ['lecturer_add'];

    // if ($_GET['tab'] == 'lecturer_add') {
    //     $link = $_GET['tab'];

    //     if (in_array($link, $page_tab)) {
    //         $this->view('single_class_lecturer_add');
    //     }
    // }


    // if ($tab == 'lecturer_add') {
    //     $this->view('single_class_tab/single_class_lecturer_add', ['data' => $data]);
    // }
    ?>
</nav>

<?php
// echo "<pre>";
// print_r($lecturers);
// echo $lecturers->firstname;
// exit();
?>



<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card-group m3">
                <?php if (is_array($lecturers)) { ?>
                    <?php if ($lecturers) { ?>
                        <?php foreach ($lecturers as $lecturer) : ?>

                            <?php
                            $row = $lecturer->user;
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