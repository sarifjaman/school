<?php

/***
 *Signup Controller 
 ***/

class Signup extends controller
{
    public function index()
    {
        $errors = array();

        if (count($_POST) > 0) {

            $user = new User();
            // var_dump($user->validate($_POST));
            // exit();
            if ($user->validate($_POST)) {

                $_POST['rank'] = $_POST['rank'];

                $user->insert($_POST);
                $this->redirect('login');
            } else {
                $errors = $user->errors;
            }

            // if (isset($_GET['mode'])) {
            //     $mode = $_GET['mode'];
            // } else {
            //     $mode = '';
            // }

            // 'mode' => $mode
        }
        $this->view('signup', ['errors' => $errors,]);
    }
}
