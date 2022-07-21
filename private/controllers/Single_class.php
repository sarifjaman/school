<?php

/*********
 * Single Class Controller
 * **********/

class single_class extends controller
{
    public function index($id = null)
    {
        // echo $id;
        // exit;

        $errors = array();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $classes = new Classes_model();
        $data = $classes->first('class_id', $id);

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Class', 'class'];

        if (isset($_GET['tab'])) {
            $tab = $_GET['tab'];
        } else {
            $tab = 'lecturer';
        }

        $result = false;
        $lecturer = new Lecturers_model();


        if ($tab == 'lecturer') {
            //display lecturer
            $query = "SELECT * FROM class_lecturers WHERE class_id=:class_id && desabled=0";
            $lecturers = $lecturer->query($query, ['class_id' => $id]);
            // $data['lecturers'] = $lecturers;
        } else
        if ($tab == 'student') {

            //display lecturers
            $query = "select * from class_students where class_id = :class_id && desabled = 0";
            $students = $lecturer->query($query, ['class_id' => $id]);
        }


        // $data['data'] = $data;
        // $data['crumbs'] = $crumbs;
        // $data['tab'] = $tab;
        // $data['result'] = $result;

        $this->view(
            'single-class',
            ["data" => $data, 'crumbs' => $crumbs, 'tab' => $tab, 'result' => $result, 'lecturers' => $lecturers, 'students' => $students,  'errors' => $errors]
        );
        // $this->view('single-class', $data);
    }



    //lecturer Add Function
    public function lectureradd($id = null)
    {
        $errors = array();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $classes = new Classes_model();
        $data = $classes->first('class_id', $id);

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Class', 'class'];

        $tab = 'lecturer_add';

        $result = false;
        $lecturer = new Lecturers_model();

        if (count($_POST) > 0) {


            if (isset($_POST['search'])) {
                if (trim($_POST['name']) != "") {
                    //search lecturer
                    $user = new User;
                    $name = "%" . trim($_POST['name']) . "%";
                    $query = "SELECT * FROM users WHERE (firstname like :fname || lastname like :lname) && rank = 'lecturer' limit 10";
                    $result = $user->query($query, ['fname' => $name, 'lname' => $name]);
                } else {
                    $errors['name'] = "Please type a name to find!";
                }
            } else {
                if (isset($_POST['selected'])) {
                    $query = "SELECT id from class_lecturers WHERE user_id=:user_id && class_id=:class_id limit 1";


                    if (!$lecturer->query($query, ['user_id' => $_POST['selected'], 'class_id' => $id])) {
                        // var_dump($_POST);
                        $arr = array();
                        $arr['user_id'] = $_POST['selected'];
                        $arr['class_id'] = $id;
                        $arr['desabled'] = 0;
                        $arr['date'] = date('Y-m-d h:i:s');


                        $lecturer->insert($arr);
                        $this->redirect('single_class/' . $id . '?tab=lecturer');
                    } else {
                        $errors['name'] = 'That lecturer already belongs to this class!';
                    }
                }
            }
        }

        $this->view('single-class', ["data" => $data, 'crumbs' => $crumbs, 'tab' => $tab, 'result' => $result, 'errors' => $errors]);
    }




    //Lecturer remove Function
    public function lecturerremove($id = null)
    {
        $errors = array();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $classes = new Classes_model();
        $data = $classes->first('class_id', $id);

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Class', 'class'];

        $tab = 'lecturer_remove';

        $result = false;
        $lecturer = new Lecturers_model();

        if (count($_POST) > 0) {


            if (isset($_POST['search'])) {
                if (trim($_POST['name']) != "") {
                    //search lecturer
                    $user = new User;
                    $name = "%" . trim($_POST['name']) . "%";
                    $query = "SELECT * FROM users WHERE (firstname like :fname || lastname like :lname) && rank = 'lecturer' limit 10";
                    $result = $user->query($query, ['fname' => $name, 'lname' => $name]);
                } else {
                    $errors['name'] = "Please type a name to find!";
                }
            } else {
                if (isset($_POST['selected'])) {
                    $query = "SELECT id from class_lecturers WHERE user_id=:user_id && class_id=:class_id limit 1";


                    if ($data = $lecturer->query($query, ['user_id' => $_POST['selected'], 'class_id' => $id])) {
                        $arr = array();
                        $arr['desabled'] = 1;

                        $lecturer->update($data[0]->id, $arr);
                        $this->redirect('single_class/' . $id . '?tab=lecturer');
                    } else {
                        $errors['name'] = 'That lecturer does not found in this class!';
                    }
                }
            }
        }

        $this->view('single-class', ["data" => $data, 'crumbs' => $crumbs, 'tab' => $tab, 'result' => $result, 'errors' => $errors]);
    }


    //Student Add Function
    public function studentadd($id = null)
    {
        $errors = array();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $classes = new Classes_model();
        $data = $classes->first('class_id', $id);

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Class', 'class'];

        $tab = 'student_add';

        $result = false;
        $student = new Students_model();

        if (count($_POST) > 0) {


            if (isset($_POST['search'])) {
                if (trim($_POST['name']) != "") {
                    //search lecturer
                    $user = new User;
                    $name = "%" . trim($_POST['name']) . "%";
                    $query = "SELECT * FROM users WHERE (firstname like :fname || lastname like :lname) && rank = 'student' limit 10";
                    $result = $user->query($query, ['fname' => $name, 'lname' => $name]);
                } else {
                    $errors['name'] = "Please type a name to find!";
                }
            } else {
                if (isset($_POST['selected'])) {
                    $query = "SELECT id from class_students WHERE user_id=:user_id && class_id=:class_id limit 1";


                    if (!$student->query($query, ['user_id' => $_POST['selected'], 'class_id' => $id])) {
                        // var_dump($_POST);
                        $arr = array();
                        $arr['user_id'] = $_POST['selected'];
                        $arr['class_id'] = $id;
                        $arr['desabled'] = 0;
                        $arr['date'] = date('Y-m-d h:i:s');


                        $student->insert($arr);
                        $this->redirect('single_class/' . $id . '?tab=student');
                    } else {
                        $errors['name'] = 'That lecturer already belongs to this class!';
                    }
                }
            }
        }

        $this->view('single-class', ["data" => $data, 'crumbs' => $crumbs, 'tab' => $tab, 'result' => $result, 'errors' => $errors]);
    }

    //Students Remove function
    public function studentremove($id = null)
    {
        $errors = array();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $classes = new Classes_model();
        $data = $classes->first('class_id', $id);

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Class', 'class'];

        $tab = 'student_remove';

        $result = false;
        $student = new Students_model();

        if (count($_POST) > 0) {


            if (isset($_POST['search'])) {
                if (trim($_POST['name']) != "") {
                    //search lecturer
                    $user = new User;
                    $name = "%" . trim($_POST['name']) . "%";
                    $query = "SELECT * FROM users WHERE (firstname like :fname || lastname like :lname) && rank = 'student' limit 10";
                    $result = $user->query($query, ['fname' => $name, 'lname' => $name]);
                } else {
                    $errors['name'] = "Please type a name to find!";
                }
            } else {
                if (isset($_POST['selected'])) {
                    $query = "SELECT id from class_students WHERE user_id=:user_id && class_id=:class_id limit 1";


                    if ($data = $student->query($query, ['user_id' => $_POST['selected'], 'class_id' => $id])) {
                        $arr = array();
                        $arr['desabled'] = 1;

                        $student->update($data[0]->id, $arr);
                        $this->redirect('single_class/' . $id . '?tab=student');
                    } else {
                        $errors['name'] = 'That lecturer does not found in this class!';
                    }
                }
            }
        }

        $this->view('single-class', ["data" => $data, 'crumbs' => $crumbs, 'tab' => $tab, 'result' => $result, 'errors' => $errors]);
    }
}
