<?php
class Profile extends controller
{
    public function index($id = '')
    {
        // echo $id;
        // exit();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $user = new User();

        if (trim($id == "")) {
            $id = Auth::getUser_id();
        } else {
            $id;
        }

        $data = $user->first('user_id', $id);



        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Profile', 'profile'];

        // var_dump(isset($data));
        // echo $data->firstname;
        // exit();

        if (isset($data)) {
            $crumbs[] = [$data->firstname, 'profile'];
        }

        $this->view('profile', ['data' => $data, 'crumbs' => $crumbs]);
    }
}
