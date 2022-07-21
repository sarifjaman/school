<?php
function get_var($name, $default = "")
{
    if (isset($_POST[$name])) {
        return $_POST[$name];
    }
    return $default;
}

function get_select($key, $value)
{
    if (isset($_POST[$key])) {
        if ($_POST[$key] == $value) {
            return "selected";
        }
    }
}

function esc($var)
{
    return htmlspecialchars($var);
}

function random_string($length)
{
    $arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    $str = "";

    for ($x = 0; $x < $length; $x++) {
        $random = rand(0, 60);
        $str    .= $arr[$random];
    }
    return $str;
}

function get_date($date)
{
    return date('jS F Y', strtotime($date));
}

function get_image($image, $gender = 'male')
{
    if (!file_exists($image)) {
        $image = ROOT . "/assets/img/users/u3.jpg";
        if ($gender == 'male') {
            $image = ROOT . "/assets/img/users/u2.png";
        }
    }
    return $image;
}

function view_path($path)
{
    // extract($data);
    if (file_exists("../private/views/" . $path . ".inc.php")) {
        return "../private/views/" . $path . ".inc.php";
    } else {
        return "../private/views/404.view.php";
    }
}
