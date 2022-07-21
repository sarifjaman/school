<?php
// error_reporting(0);
// echo "<pre>";
// print_r($data);
// echo $data->class;
// print_r($tab);
// exit();
?>
<?php $this->view('includes/header'); ?>

<div class="wrapper">
    <?php $this->view("nav/nav-top"); ?>

    <div class="page-wrap">
        <?php $this->view("nav/nav-side"); ?>


        <div class="main-content">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <i class="ik ik-file-text bg-blue"></i>
                                <div class="d-inline">
                                    <h5>Profile</h5>
                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <nav class="breadcrumb-container" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <?php if ($crumbs) { ?>
                                            <?php $this->view('includes/crumbs', ['crumbs' => $crumbs]); ?>
                                        <?php } ?>
                                    </div>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <?php if ($data == true) : ?>

                    <div class="row">


                        <div class="col-lg-12 col-md-12">
                            <div class="card">

                                <?php $this->view('includes/crumbs'); ?>

                                <div class="tab-content" id="pills-tabContent">



                                    <style type="text/css">
                                        .err-msg {
                                            color: #911;
                                        }
                                    </style>



                                    <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                                        <div class="card-body">

                                            <?php
                                            if (isset($lecturers)) {
                                                $this->view("profilepill/class_detail", ['data' => $data, 'tab' => $tab, 'result' => $result, 'lecturers' => $lecturers, 'errors' => $errors]);
                                            } elseif (isset($students)) {
                                                $this->view("profilepill/class_detail", ['data' => $data, 'tab' => $tab, 'result' => $result, 'students' => $students, 'errors' => $errors]);
                                            } else {
                                                $this->view("profilepill/class_detail", ['data' => $data, 'tab' => $tab, 'result' => $result,  'errors' => $errors]);
                                            }

                                            // $this->view("profilepill/class_detail", ['data' => $data, 'tab' => $tab, 'result' => $result, 'lecturers' => $lecturers, 'errors' => $errors]);
                                            ?>

                                        </div>
                                    </div>







                                    <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-3 col-6"> <strong>Full Name</strong>
                                                    <br>
                                                    <p class="text-muted">Johnathan Deo</p>
                                                </div>
                                                <div class="col-md-3 col-6"> <strong>Mobile</strong>
                                                    <br>
                                                    <p class="text-muted">(123) 456 7890</p>
                                                </div>
                                                <div class="col-md-3 col-6"> <strong>Email</strong>
                                                    <br>
                                                    <p class="text-muted">johnathan@admin.com</p>
                                                </div>
                                                <div class="col-md-3 col-6"> <strong>Location</strong>
                                                    <br>
                                                    <p class="text-muted">London</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <p class="mt-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            <h4 class="mt-30">Skill Set</h4>
                                            <hr>
                                            <h6 class="mt-30">Wordpress <span class="pull-right">80%</span></h6>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                            <h6 class="mt-30">HTML 5 <span class="pull-right">90%</span></h6>
                                            <div class="progress  progress-sm">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                            <h6 class="mt-30">jQuery <span class="pull-right">50%</span></h6>
                                            <div class="progress  progress-sm">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                            <h6 class="mt-30">Photoshop <span class="pull-right">70%</span></h6>
                                            <div class="progress  progress-sm">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                        <div class="card-body">
                                            <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="example-name">Full Name</label>
                                                    <input type="text" placeholder="Johnathan Doe" class="form-control" name="example-name" id="example-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email">Email</label>
                                                    <input type="email" placeholder="johnathan@admin.com" class="form-control" name="example-email" id="example-email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-password">Password</label>
                                                    <input type="password" value="password" class="form-control" name="example-password" id="example-password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-phone">Phone No</label>
                                                    <input type="text" placeholder="123 456 7890" id="example-phone" name="example-phone" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-message">Message</label>
                                                    <textarea name="example-message" name="example-message" rows="5" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-country">Select Country</label>
                                                    <select name="example-message" id="example-message" class="form-control">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-success" type="submit">Update Profile</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php else : ?>
                        <h4 class="err-msg">That Profile is not found!</h4>
                    <?php endif; ?>
                    </div>
            </div>

        </div>
    </div>



    <?php $this->view('includes/footer'); ?>