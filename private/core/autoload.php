<?php
require "config.php";
require "app.php";
require "functions.php";
require "database.php";
require "controller.php";
require "model.php";

spl_autoload_register(function ($classname) {
    require "../private/models/" . ucfirst($classname) . ".php";
});
