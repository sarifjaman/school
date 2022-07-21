<?php
$image = get_image($row->image, $row->gender);
?>
<div class="col-md-3 m-4">
    <div class="card shadow" style="width: 18rem;">
        <img src="<?php echo $image; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">User Information</h5>
            <p><b>Name:</b> <?php echo $row->firstname; ?> <?php echo $row->lastname; ?></p>
            <p><b>Rank:</b> <?php echo str_replace('_', " ", ucfirst($row->rank)); ?></p>

            <div class="profile-btn-sec">
                <a href="<?php echo ROOT; ?>/profile/<?php echo $row->user_id; ?>" class="btn btn-primary text-center">Profile</a>

                <?php if (isset($_GET['select'])) : ?>
                    <button name="selected" value="<?php echo $row->user_id; ?>" class="btn btn-danger float-right">Select</button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>