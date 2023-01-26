<?php
require_once '../model/Model.php';

class Controller
{
    public static function home()
    {
        include 'config.php';
        $view =  $root . 'app/view/home.php';
        require($view);
    }
}

?>