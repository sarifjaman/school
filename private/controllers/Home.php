<?php

/***
 * Home Controller
 ***/
class Home extends controller
{

    public function index($id = null)
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        // $user = new User();
        // $data = $user->findAll();
        $this->view('home');
        // $db = new Database();
        // $data = $db->query("SELECT * FROM users");
        // $this->view('home', ['data' => $data]);

        // $user = new User();
        // $data = $user->where('firstname', 'Sharif');
        // $this->view('home', ['data' => $data]);

        // $user = new User();
        // $data = $user->findAll();
        // $this->view('home', ['data' => $data]);

        // $arr['firstname'] = 'Monika';
        // $arr['lastname']  = 'Akter';
        // $arr['date']      = '2022-05-13 16:33:10';
        // $arr['user_id']   = 'kzl';
        // $arr['gender']    = 'Female';
        // $arr['school_id'] = 'cud';
        // $arr['rank']      = 'Student';

        // $user   = new User();
        // $insert = $user->insert($arr);
        // $data   = $user->findAll();
        // $this->view('home', ['data' => $data]);

        // $user = new User();
        // $update = $user->update(53, $arr);
        // $data = $user->findAll();
        // $this->view('home', ['data' => $data]);

        // $user   = new User();
        // $delete = $user->delete(55);
        // $data = $user->findAll();
        // $this->view('home', ['data' => $data]);

    }
}
