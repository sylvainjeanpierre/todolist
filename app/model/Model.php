<?php

require_once 'ModelDB.php';


class Model {
    public static function getTasks() {
        $db = ModelDB::getInstance();
        $query = "SELECT * FROM tasks";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    public static function addTask($content) {
        $db = ModelDB::getInstance();
        $query = "INSERT INTO tasks (content) VALUES (:content)";
        $statement = $db->prepare($query);
        $statement->bindValue(':content', $content);
        $statement->execute();
        $statement->closeCursor();
    }
}