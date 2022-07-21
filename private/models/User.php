<?php

/***
 * User Model
 * ***/
class User extends Model
{
    protected $allowedcolumns = ['firstname', 'lastname', 'email', 'password', 'date', 'gender', 'rank'];
    protected $beforeinsert   = ['make_user_id', 'make_school_id', 'hash_password'];
    // protected $afterselect = ['get_school_name'];

    public function validate($DATA)
    {
        $this->errors = array();


        //Check Firstname
        if (empty($DATA['firstname'])) {
            $this->errors['firstname'] = "Please Enter Your Firstname!";
        } elseif (strlen($DATA['firstname']) <= 3) {
            $this->errors['firstname'] = "Firstname must be 4 characters or more!";
        } elseif (!preg_match('/^[a-zA-Z]+$/', $DATA['firstname'])) {
            $this->errors['firstname'] = "Only letters allowed in Firstname!";
        }


        //Check Lastname
        if (empty($DATA['lastname'])) {
            $this->errors['lastname'] = "Please Enter Your Lastname!";
        } elseif (strlen($DATA['lastname']) <= 3) {
            $this->errors['lastname'] = "Lastname must be 4 characters or more!";
        } elseif (!preg_match('/^[a-zA-Z]+$/', $DATA['lastname'])) {
            $this->errors['lastname'] = "Only letters allowed in Lastname!";
        }

        //Check Email
        if (empty($DATA['email'])) {
            $this->errors['email'] = "Please Enter Your Email!";
        } elseif (!preg_match('/^[a-zA-Z0-9.%_-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,10}$/', $DATA['email'])) {
            $this->errors['email'] = "Something wrong! Please Check your email!";
        } elseif (!filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not Correct!";
        } elseif ($this->where('email', $DATA['email'])) {
            $this->errors['email'] = "Email is already taken!";
        }

        //Check Gender
        $genders = ['male', 'female'];

        if (empty($DATA['gender']) || !in_array($DATA['gender'], $genders)) {
            $this->errors['gender'] = "Please Enter Your Gender!";
        }

        //Check Rank
        $ranks = ['student', 'reception', 'lecturer', 'admin', 'super_admin'];

        if (empty($DATA['rank']) || !in_array($DATA['rank'], $ranks)) {
            $this->errors['rank'] = "Please Enter Your Rank!";
        }

        //Check Password
        if (empty($DATA['password'])) {
            $this->errors['password'] = "Please Enter Your Password!";
        } elseif (strlen($DATA['password']) <= 7) {
            $this->errors['password'] = "Password must be 8 Characters long !";
        }

        //Check Password And Confirm Password
        if ($DATA['password'] != $DATA['cpassword']) {
            $this->errors['password'] = "Password not matched!";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function make_user_id($data)
    {
        $data['user_id'] = strtolower($data['firstname'] . '.' . $data['lastname']);

        while ($this->where('user_id', $data['user_id'])) {
            $data['user_id'] = rand(10, 9999);
        }

        return $data;
    }

    // public function get_school_name($data)
    // {
    //     foreach ($data as $key => $val) {
    //         if (isset($data[$key]->school_id)) {
    //             $school_row = $this->first('school_id', $data[$key]->school_id);

    //             if (is_object($school_row)) {
    //                 $data[$key]->school_name = $school_row->school;
    //             }
    //         }
    //     }
    //     return $data;
    // }

    public function make_school_id($data)
    {
        if (isset($_SESSION['USER']->school_id)) {
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }

    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }
}
