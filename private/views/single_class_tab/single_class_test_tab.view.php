<nav class="navbar navbar-light bg-light">
    <form class="form-inline">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
        </div>
    </form>

    <a href="<?php echo ROOT; ?>/single_class/<?php echo $data->class_id; ?>?tab=tests_add">
        <button type="button" class="btn btn-success"><i class="fa fa-plus"> Add New Test</i></button>
    </a>
</nav>