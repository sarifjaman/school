<?php
// echo "<pre>";
// var_dump($data);
// print_r($data);
// print_r($tab);
// exit();
?>
<div class="profiletimeline mt-0 b-none">

    <table class="table table-hover table-striped table-bordered">

        <tr>
            <th>Class Name:</th>
            <td><?php echo esc($data->class); ?></td>
        </tr>

        <tr>
            <th>Created By:</th>
            <td><?php echo esc($data->user->firstname); ?> <?php echo esc($data->user->lastname); ?></td>
        </tr>

        <tr>
            <th>Date Created:</th>
            <td><?php echo esc(get_date($data->date)); ?></td>
        </tr>


    </table>

</div>

<br>

<div class="container-fluid">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link <?php if ($tab == 'lecturer') {
                                    echo 'active';
                                } ?>" href="<?php echo ROOT; ?>/single_class/<?php echo $data->class_id; ?>?tab=lecturer">Lecturer</a>
        </li>

        <li class="nav nav-tabs">
            <a class="nav-link <?php if ($tab == 'student') {
                                    echo 'active';
                                } ?>" href="<?php echo ROOT; ?>/single_class/<?php echo $data->class_id; ?>?tab=student">Students</a>
        </li>

        <li class="nav nav-tabs">
            <a class="nav-link <?php if ($tab == 'tests') {
                                    echo 'active';
                                } ?>" href="<?php echo ROOT; ?>/single_class/<?php echo $data->class_id; ?>?tab=tests">Tests</a>
        </li>
    </ul>

    <?php


    if ($tab == 'lecturer') {
        // $this->view('single_class_tab/single_class_lecturer_tab', ['data' => $data, 'tab' => $tab]);
        include(view_path('single_class_tab/single_class_lecturer_tab'));
    }

    if ($tab == 'student') {
        // $this->view('single_class_tab/single_class_student_tab', ['data' => $data, 'tab' => $tab]);
        include(view_path('single_class_tab/single_class_student_tab'));
    }

    if ($tab == 'tests') {
        // $this->view('single_class_tab/single_class_test_tab', ['data' => $data, 'tab' => $tab]);
        include(view_path('single_class_tab/single_class_test_tab'));
    }

    if ($tab == 'lecturer_add') {
        // $this->view('single_class_tab/single_class_lecturer_add', ['data' => $data]);
        include(view_path('single_class_tab/single_class_lecturer_add'));
    }

    if ($tab == 'lecturer_remove') {
        // $this->view('single_class_tab/single_class_lecturer_add', ['data' => $data]);
        include(view_path('single_class_tab/single_class_lecturer_remove'));
    }

    if ($tab == 'student_add') {
        // $this->view('single_class_tab/single_class_student_add', ['data' => $data]);
        include(view_path('single_class_tab/single_class_student_add'));
    }

    if ($tab == 'student_remove') {
        // $this->view('single_class_tab/single_class_student_remove', ['data' => $data]);
        include(view_path('single_class_tab/single_class_student_remove'));
    }

    if ($tab == 'tests_add') {
        // $this->view('single_class_tab/single_class_tests_add', ['data' => $data]);
        include(view_path('single_class_tab/single_class_tests_add'));
    }


    ?>
</div>