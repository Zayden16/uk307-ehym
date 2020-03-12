<?php

class tool {

    public $toolID;
    public $toolName;

    /**
     * tool constructor.
     * @param $toolID
     * @param $toolName
     */

    public function __construct($toolID = null, $toolName = null)
    {
        $this->toolID = $toolID;
        $this->toolName = $toolName;
    }

    public function create(){
        $statement = connectToDatabase()->prepare('INSERT INTO `tools` (:toolName) VALUES (:toolName)');
        $statement->bindParam(':toolName', $this->toolName, PDO::PARAM_STR);
        return $statement->execute();
        $statement = null;
    }

    public static function getAll(){
        $statement = connectToDatabase()->prepare('SELECT * FROM tools');
        $statement->execute();
        $result = $statement->fetchAll();
        $tools = [];
        foreach($result as $t) {
            $tools[] =tool::dbResultToTask($t);
        }
        return $tools;
        $statement = null;
    }

    public static function countAll(){
        $statement = connectToDatabase()->prepare('SELECT COUNT(`toolId`) FROM `tools`');
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_COLUMN);
        return $result[0];
        $statement = null;
    }

    private static function dbResultToTask($t){
        return new Tool($t['toolID'], $t['toolName']);
    }


    public static function delete($id)
    {
        $statement = connectToDatabase()->prepare('DELETE FROM `tools` WHERE id = :id');
        $statement->bindParam(':id', $id);
        return $statement->execute();
        $statement = null;
    }
}