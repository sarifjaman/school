<?php

/*************
 * Add User Controller
 * **************/

class Add_user extends controller
{
    public function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect("login");
        }

        if (isset($_GET['mode'])) {
            $mode = $_GET['mode'];
        } else {
            $mode = "";
        }

        $errors = array();

        if (count($_POST) > 0) {
            $user = new User();

            if ($user->validate($_POST)) {
                $_POST['rank'] = $_POST['rank'];

                $user->insert($_POST);


                if (isset($mode) == 'students') {
                    $link = 'students';
                } else {
                    $link = 'users';
                }

                $this->redirect($link);
            } else {
                $errors = $user->errors;
            }
        }



        $this->view('add_user', ['errors' => $errors, 'mode' => $mode]);
    }
}
