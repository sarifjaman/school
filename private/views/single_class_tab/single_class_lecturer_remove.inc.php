<?php
// exit();
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-12">

            <style type="text/css">
                .nameerr {
                    color: #911;
                }
            </style>

            <form method="post" class="form ">
                <h4>Remove Lecturers</h4>
                <div class="form-group">
                    <input type="search" class="form-control" name="name" placeholder="search" /><br>
                    <div class="nameerr">
                        <?php
                        if (array_key_exists('name', $errors)) {
                            echo $errors['name'];
                        }
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <a href="<?php echo ROOT; ?>/single_class/<?php echo $data->class_id; ?>?tab=lecturer">
                        <button type="button" class="btn btn-danger">Cancel</button>
                    </a>

                    <!-- <button type="button" class="btn btn-primary">Search</button> -->
                    <input type="submit" class="btn btn-primary float-right" name="search" value="Search" />
                </div>
            </form>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-group">

                            <?php
                            // print_r($_POST);
                            ?>
                            <form method="post">
                                <?php if (isset($result) && $result) : ?>

                                    <?php foreach ($result as $row) : ?>

                                        <?php include(view_path('single_page/single_user_card')); ?>

                                    <?php endforeach; ?>

                                <?php else : ?>

                                    <?php if (count($_POST) > 0) : ?>
                                        <center>
                                            <hr>
                                            <h4 class="err-msg">No results were found</h4>
                                        </center>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<hr>

<?php
// echo "<pre>";
// print_r($data);
// exit();
?>

<style type="text/css">
    .err-msg {
        color: #911;
    }
</style>