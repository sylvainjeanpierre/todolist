<?php

require_once 'ModelDB.php';


class Model {
    public static function getTasks() {
        $db = ModelDB::getInstance();
        $query = "SELECT * FROM todolist_tasks";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    public static function addTask($content) {
        $db = ModelDB::getInstance();
        $query = "INSERT INTO todolist_tasks (content) VALUES (:content)";
        $statement = $db->prepare($query);
        $statement->bindValue(':content', $content);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function deleteTask($id) {
        $db = ModelDB::getInstance();
        $query = "DELETE FROM todolist_tasks WHERE id=:id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
    }
}