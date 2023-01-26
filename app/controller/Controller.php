<?php
require_once '../model/Model.php';

class Controller
{
    /*
    * Home page
    */
    public static function home()
    {
        include 'config.php';
        $results = Model::getTasks();
        $view =  $root . 'app/view/home.php';
        require($view);
    }

    /*
    * Add a task
    * POST request
    */
    public static function addTask()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            Controller::home();
            return;
        }
        
        if (!isset($_POST['content']) || empty($_POST['content'])) {
            Controller::home();
            return;
        }
        $content = $_POST['content'];
        Model::addTask($content);
        header('Location: index.php?action=home');
    }
}

?>