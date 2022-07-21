<?php

/*********
 * Lecturers Model
 * **********/

class Lecturers_model extends model
{
    protected $table = 'class_lecturers';

    protected $allowedcollums = [
        'school_id',
        'user_id',
        'class_id',
        'desabled',
        'date'
    ];

    protected $beforeinsert = [
        'make_school_id',
    ];

    protected $afterselect = [
        'get_user'
    ];


    public function make_school_id($data)
    {
        if (isset($_SESSION['USER']->school_id)) {
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }

    public function get_user($data)
    {

        $user = new User();
        foreach ($data as $key => $row) {
            if (isset($row->user_id)) {
                // code...
                $result = $user->where('user_id', $row->user_id);

                $data[$key]->user = is_array($result) ? $result[0] : false;
            }
        }

        return $data;
    }
}
