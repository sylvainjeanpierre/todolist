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
    */
    public static function addTask()
    {
        include 'config.php';
        if (!isset($_GET['content']) || empty($_GET['content'])) {
            Controller::home();
            return;
        }
        $content = htmlspecialchars($_GET['content']);
        Model::addTask($content);
        header('Location: router.php?action=home');
    }

    /*
    * Delete a task
    */
    public static function deleteTask()
    {
        include 'config.php';
        if (!isset($_GET['id']) || empty($_GET['id'])) {
            Controller::home();
            return;
        }
        $id = htmlspecialchars($_GET['id']);

        //check if the value is an integer
        if (!ctype_digit($id)) {
            Controller::home();
            return;
        }

        $id = intval($id);
        Model::deleteTask($id);
        header('Location: router.php?action=home');
    }
}

?>