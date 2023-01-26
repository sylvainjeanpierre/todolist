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
}