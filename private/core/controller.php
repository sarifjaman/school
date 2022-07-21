<?php

/***
 * Controller
 * ***/
class controller
{

    public function view($view, $data = array())
    {
        extract($data);
        if (file_exists("../private/views/" . $view . ".view.php") == true) {
            require "../private/views/" . $view . ".view.php";
        } else {
            require "../private/views/404.view.php";
        }
    }

    public function model($model)
    {
        if (file_exists('../private/models/' . ucfirst($model) . '.php') == true) {
            require "../private/models/" . ucfirst($model) . '.php';
            return $model = new $model;
        } else {
            require "../private/views/404.view.php";
        }
    }

    public function redirect($link)
    {
        $link = ROOT . "/" . trim($link, "/");
        header("Location:" . $link);
    }
}
