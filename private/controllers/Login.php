<?php

/***
 *Login Controller 
 ***/

class Login extends controller
{
    public function index()
    {
        $errors = array();

        if (count($_POST) > 0) {
            $user = new User();
            if ($row = $user->where('email', $_POST['email'])) {
                $row = $row[0];
                // var_dump($row);
                // var_dump($row->password);
                // exit();
                // var_dump(password_verify($_POST['password'], $row->password));
                // exit();
                if (password_verify($_POST['password'], $row->password)) {

                    $school = new School();
                    $school_row = $school->first('school_id', $row->school_id);
                    $row->school_name = $school_row->school;

                    Auth::athenticate($row);
                    $this->redirect('/home');
                }
            } else {
                $errors['email'] = 'Email or password is incorrect!';
            }
        }
        $this->view('login', ['errors' => $errors]);
    }
}
