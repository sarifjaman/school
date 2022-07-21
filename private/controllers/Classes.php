<?php

/*******
 * Classes Controller
 * *********/

class Classes extends controller
{
    public function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $errors = array();

        $classes = new Classes_model();
        $data = $classes->findAll();

        // var_dump($classes);
        // exit();

        $crumbs[] = ['Bashboard', ''];
        $crumbs[] = ['Classes', 'classes'];

        $this->view('classes', ['data' => $data, 'crumbs' => $crumbs]);
    }

    public function add()
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $errors = array();

        // var_dump($_POST);
        // exit();

        if (count($_POST) > 0) {
            $classes = new Classes_model();

            if ($classes->validate($_POST)) {
                $_POST['date'] = date('Y-m-d H:i:s');

                $data = $classes->insert($_POST);
                // var_dump($data);
                // exit();

                $this->redirect('/classes');
            } else {
                $errors = $classes->errors;
            }
        }

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Classes', 'classes'];
        $crumbs[] = ['Add', 'add'];


        $this->view('add_classes', ['errors' => $errors, 'crumbs' => $crumbs]);
    }

    public function edit($id = null)
    {
        // echo $id;
        // exit();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $classes = new Classes_model();

        $errors = array();

        if (count($_POST) > 0) {
            if ($classes->validate($_POST)) {
                $classes->update($id, $_POST);
                $this->redirect('classes');
            }
        }

        $row = $classes->where('id', $id);
        if ($row) {
            $row = $row[0];
        }

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Classes', 'classes'];
        $crumbs[] = ['Edit', 'edit'];

        $this->view('classes.edit', ['row' => $row, 'errors' => $errors, 'crumbs' => $crumbs]);
    }

    public function delete($id = null)
    {
        // echo $id;
        // exit();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $classes = new Classes_model();

        if (count($_POST) > 0) {
            $classes->delete($id);
            $this->redirect('classes');
        }

        $data = $classes->where('id', $id);

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Classes', 'classes'];
        $crumbs[] = ['Delete', 'delete'];

        $this->view('classes.delete', ['data' => $data, 'crumbs' => $crumbs]);
    }
}
