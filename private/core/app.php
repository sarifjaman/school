<?php
// class App
// {
//     protected $controller = "home";
//     protected $method     = "index";
//     protected $params     = [];

//     public function __construct()
//     {
//         $url = $this->getURL();

//         if (!empty($url) == true) {
//             if (file_exists("../private/controllers/" . $url[0] . ".php") == true) {
//                 $this->controller = ucfirst($url[0]);
//                 unset($url[0]);
//             }

//             require "../private/controllers/" . $this->controller . ".php";
//             $this->controller = new $this->controller();
//         }

//         if (isset($url[1]) && !empty($url[1])) {
//             if (method_exists($this->controller, $url[1]) == true) {
//                 $this->method = ucfirst($url[1]);
//                 unset($url[1]);
//             }
//         }

//         if (isset($url)) {
//             $this->params = $url;
//         } else {
//             $this->params = "home";
//         }

// $url = array_values($url);
// $this->params = $url;
// call_user_func_array([$this->controller, $this->method], $this->params);
//         call_user_func_array([$this->controller, $this->method], $this->params);
//     }

//     private function getURL()
//     {
//         if (isset($_GET['url']) == true) {
//             $url = $_GET['url'];
//             $url = rtrim($url, "/");
//             $url = filter_var($url, FILTER_SANITIZE_URL);
//             $url = explode("/", $url);
//             return $url;
//         } else {
//             return $url = "home";
//         }
//     }
// }

class App
{
    //Default controller,method,params
    public $controller = "home";
    public $method     = "index";
    public $params     = [];

    public function __construct()
    {
        $url = $this->url();

        //Controller url Check
        if (!empty($url) == true) {
            if (file_exists("../private/controllers/" . $url[0] . ".php") == true) {
                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            } else {
                echo '<div style="margin: 0px;padding: 10px;background-color: silver;color: #811;">Sorry ' . $url[0] . '.view.php not found</div>';
                die();
            }
        }
        //Include Controller
        require_once "../private/controllers/" . $this->controller . ".php";
        //Instantiate Controller
        $this->controller = new $this->controller;

        //Method url Check
        if (isset($url[1]) && !empty($url[1])) {
            if (method_exists($this->controller, $url[1]) == true) {
                $this->method = ucfirst($url[1]);
                unset($url[1]);
            }
            // else {
            //     echo '<div style="margin: 0px;padding: 10px;background-color: silver;color: #811;">Sorry ' . $url[1] . '.view.php not found</div>';
            // }
        }

        //Check Parameter
        if (isset($url) == true) {
            $this->params = $url;
        } else {
            $this->params = [];
        }
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function url()
    {
        if (isset($_GET['url']) == true) {
            $url = $_GET['url'];
            $url = rtrim($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
