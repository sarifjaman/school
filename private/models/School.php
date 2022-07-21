<?php

/***************
 * Schools Model
 * *****************/

class School extends Model
{
    protected $allowedcolumns = [
        'school',
        'date',
    ];

    protected $beforeinsert = [
        'make_school_id',
        'make_user_id',
    ];

    protected $afterselect = [
        'get_user',
    ];

    public function validate($DATA)
    {
        $this->errors = array();

        if (empty($DATA['school'])) {
            $this->errors['school'] = "Please enter your school name!";
        } elseif (strlen($DATA['school']) < 3) {
            $this->errors['school'] = "School name must be 4 characters or more!";
        }
        // elseif (!preg_match('/^[a-zA-Z]+$/', $DATA['school'])) {
        //     $this->errors['school'] = "Only letters allowed in Firstname!";
        // }

        // echo count($this->errors);
        // exit();

        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }

    public function make_school_id($data)
    {

        $data['school_id'] = random_string(60);
        return $data;
    }

    public function make_user_id($data)
    {
        if (isset($_SESSION['USER']->user_id)) {
            $data['user_id'] = $_SESSION['USER']->user_id;
        }

        return $data;
    }

    public function get_user($data)
    {

        $user = new User();
        foreach ($data as $key => $row) {
            // code...
            $result = $user->where('user_id', $row->user_id);

            $data[$key]->user = is_array($result) ? $result[0] : false;
        }

        return $data;
    }
}
