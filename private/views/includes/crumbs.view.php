<?php
// echo "<pre>";
// print_r($crumbs);
// exit();
?>
<ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
    <?php if (isset($crumbs)) : ?>
        <?php foreach ($crumbs as $crumb) : ?>
            <li class="nav-item">
                <a class="nav-link" id="pills-timeline-tab" data-toggle="pill" href="<?php echo $crumb[1]; ?>" role="tab" aria-controls="pills-timeline" aria-selected="true"><?php echo $crumb[0]; ?></a>
            </li>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>