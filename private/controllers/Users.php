<?php

/**********
 * Users Controller
 * ***********/

class Users extends controller
{
    public function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $user = new User();
        $school_id = Auth::getSchool_id();
        $data = $user->query("SELECT * FROM users WHERE school_id = :school_id && rank not in ('student','lecturer') order by id desc", ['school_id' => $school_id]);

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['User', 'user'];
        $this->view('users', ['data' => $data, 'crumbs' => $crumbs]);
    }
}
