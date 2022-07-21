<?php
// echo "<pre>";
// var_dump($data);
// print_r($data);
// exit();
?>
<div class="profiletimeline mt-0 b-none">

    <table class="table table-hover table-striped table-bordered">

        <tr>
            <th>Firstname</th>
            <td><?php echo esc($data->firstname); ?></td>
        </tr>

        <tr>
            <th>Lastname</th>
            <td><?php echo esc($data->lastname); ?></td>
        </tr>

        <tr>
            <th>Gender</th>
            <td><?php echo esc(ucfirst($data->gender)); ?></td>
        </tr>

        <tr>
            <th>Date</th>
            <td><?php echo esc(get_date($data->date)); ?></td>
        </tr>
    </table>

</div>

<br>

<div class="container-fluid">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="">Basic Info</a>
        </li>

        <li class="nav nav-tabs">
            <a class="nav-link" href="">Classes</a>
        </li>

        <li class="nav nav-tabs">
            <a class=nav-link href="">Tests</a>
        </li>
    </ul>

    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
            </div>
        </form>
    </nav>
</div>