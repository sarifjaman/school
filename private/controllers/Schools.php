<?php

use Schools as GlobalSchools;

/***************
 * Schools Controller
 * *****************/

class Schools extends controller
{
    public function index()
    {
        $errors = array();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $schools = new School();
        $data = $schools->findAll();

        $crumbs[] = ['Dashboard', '/'];
        $crumbs[] = ['Schools', 'schools'];

        $this->view('schools', ['data' => $data, 'crumbs' => $crumbs]);
    }

    public function add()
    {
        $errors = array();
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        if (count($_POST) > 0) {
            $school = new School();

            if ($school->validate($_POST)) {
                $_POST['date'] = date('Y-m-d H:i:s');

                $data = $school->insert($_POST);
                $this->redirect('/schools');
            } else {
                $errors = $school->errors;
            }
        }
        $crumbs[] = ['Dashboard', '/'];
        $crumbs[] = ['Schools', 'schools'];
        $crumbs[] = ['Add', 'schools/add'];
        $this->view('schools.add', ['errors' => $errors, 'crumbs' => $crumbs]);
    }

    public function edit($id = null)
    {
        // echo $id;
        // exit();
        // code...
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $school = new School();


        $errors = array();
        if (count($_POST) > 0) {

            if ($school->validate($_POST)) {
                $school->update($id, $_POST);
                // var_dump($data);
                // exit();
                $this->redirect('schools');
            } else {
                //errors
                $errors = $school->errors;
            }
        }


        // var_dump($row);
        // exit();

        $crumbs[] = ['Dashboard', '/'];
        $crumbs[] = ['Schools', 'schools'];
        $crumbs[] = ['Edit', 'schools/edit'];

        $row = $school->where('id', $id);

        if ($row) {
            $row = $row[0];
        }

        $this->view('schools.edit', [
            'row' => $row,
            'errors' => $errors,
            'crumbs' => $crumbs
        ]);
    }

    public function delete($id = null)
    {
        // echo $id;
        // exit();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $school = new School();

        if (count($_POST) > 0) {

            $school->delete($id);
            $this->redirect('schools');
        }

        $data = $school->where('id', $id);

        $crumbs[] = ['Dashboard', '/'];
        $crumbs[] = ['Schools', 'schools'];
        $crumbs[] = ['Delete', 'schools/delete'];
        $this->view('schools.delete', ['data' => $data, 'crumbs' => $crumbs]);
    }
}
