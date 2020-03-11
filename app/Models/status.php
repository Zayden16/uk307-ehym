<?php

class status {

    public $statusID;
    public $statusName;

    /**
     * status constructor.
     * @param $statusID
     * @param $statusName
     */

    public function __construct($statusID = null, $statusName = null)
    {
        $this->statusID = $statusID;
        $this->statusName = $statusName;
    }

    public function getAll(){
        $statement = connectToDatabase()->prepare('SELECT * FROM status');
        $statement->execute();
        $result = $statement->fetchAll();
        $status = [];
        foreach($result as $t) {
            $status[] = $t;
        }
        return $status;
        $statement = null;
    }

    public static function countAll(){
        $statement = connectToDatabase()->prepare('SELECT COUNT(`statusID`) FROM `status`');
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_COLUMN);
        return $result[0];
        $statement = null;
    }

    private static function dbResultToTask($t){
        return new Status($t['statusID'], $t['statusName']);
    }

    public function update()
    {
        $statement = connectToDatabase()->prepare('UPDATE `status` SET statusName = :statusName WHERE Name = :Name');
        $statement->bindParam(':statusName', $this->statusName);
        $statement->bindParam(':id', $this->statusID);
        return $statement->execute();
        $statement = null;
    }

    public static function delete($id)
    {
        $statement = connectToDatabase()->prepare('DELETE FROM `status` WHERE id = :id');
        $statement->bindParam(':id', $id);
        return $statement->execute();
        $statement = null;
    }
}