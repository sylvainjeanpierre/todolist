<?php
require_once '../model/Model.php';

class Controller
{
    public static function home()
    {
        include 'config.php';
        $results = Model::getTasks();
        $view =  $root . 'app/view/home.php';
        require($view);
    }
}

?>