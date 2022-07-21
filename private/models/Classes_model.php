<?php

/***********
 * Classes Model
 * **************/

class Classes_model extends Model
{
    public $table = 'classes';
    protected $allowedcolumns = [
        'class',
        'date',
    ];

    protected $beforeinsert = [
        'make_school_id',
        'make_user_id',
        'make_class_id'
    ];

    protected $afterselect = [
        'get_user',
    ];

    public function validate($DATA)
    {
        $this->errors = array();

        if (empty($DATA['class'])) {
            $this->errors['class'] = "Please enter your class";
        } elseif (strlen($DATA['class']) < 3) {
            $this->errors['class'] = "Class must be 4 characters or more!";
        } elseif (!preg_match('/^[a-z A-Z]+$/', $DATA['class'])) {
            $this->errors['class'] = "Only letters allowed in Firstname!";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function make_user_id($data)
    {
        if (isset($_SESSION['USER']->user_id)) {
            $data['user_id'] = $_SESSION['USER']->user_id;
        }
        return $data;
    }

    public function make_school_id($data)
    {
        if (isset($_SESSION['USER']->school_id)) {
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }

    public function make_class_id($data)
    {
        $data['class_id'] = random_string(60);
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
