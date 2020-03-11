<?php

class tool {

    public $importanceID;
    public $importanceText;
    public $totalTime;

    /**
     * tool constructor.
     * @param $importanceID
     * @param $importanceText
     * @param $totalTime
     */

    public function __construct($importanceID = null, $importanceText = null, $totalTime = null)
    {
        $this->importanceID = $importanceID;
        $this->importanceText = $importanceText;
        $this->totalTime = $totalTime;
    }

    public function create(){
        $statement = connectToDatabase()->prepare('INSERT INTO `importances` (importanceText, totalTime) VALUES (:importanceText, :totalTime)');
        $statement->bindParam(':importanceText', $this->importanceText, PDO::PARAM_STR);
        $statement->bindParam(':totalTime', $this->totalTime, PDO::PARAM_INT);
        return $statement->execute();
        $statement = null;
    }

    public function getAll(){
        $statement = connectToDatabase()->prepare('SELECT * FROM importances');
        $statement->execute();
        $result = $statement->fetchAll();
        $importances = [];
        foreach($result as $t) {
            $importances[] = $t;
        }
        return $importances;
        $statement = null;
    }

    public static function countAll(){
        $statement = connectToDatabase()->prepare('SELECT COUNT(`importanceID`) FROM `importances`');
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_COLUMN);
        return $result[0];
        $statement = null;
    }

    private static function dbResultToTask($t){
        return new Importance($t['importanceID'], $t['importanceText']);
    }

    public function update()
    {
        $statement = connectToDatabase()->prepare('UPDATE `importances` SET importanceText = :importanceText WHERE id = :id');
        $statement->bindParam(':importanceText', $this->importanceText);
        $statement->bindParam(':id', $this->importanceID);
        return $statement->execute();
        $statement = null;
    }

    public static function delete($id)
    {
        $statement = connectToDatabase()->prepare('DELETE FROM `importances` WHERE id = :id');
        $statement->bindParam(':id', $id);
        return $statement->execute();
        $statement = null;
    }
}