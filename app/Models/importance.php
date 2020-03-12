<?php

class importance {

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
    }

    public static function getAll(){
        $statement = connectToDatabase()->prepare('SELECT * FROM importances');
        $statement->execute();
        $result = $statement->fetchAll();
        $importances = [];
        foreach($result as $i) {
            $importances[] = importance::dbResultToTask($i);
        }
        var_dump($importances);
        return $importances;
    }

    public static function countAll(){
        $statement = connectToDatabase()->prepare('SELECT COUNT(`importanceID`) FROM `importances`');
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_COLUMN);
        return $result[0];
    }
    private static function dbResultToTask($i){
        return new importance($i['importanceID'], $i['importanceText'], $i['totalTime']);
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