<?php

class address {
    public $addressID;
    public $name;
    public $email;
    public $telephone;
    public $addressL1;
    public $addressL2;

    /**
     * address constructor.
     * @param $addressID
     * @param $name
     * @param $email
     * @param $telephone
     * @param $addressL1
     * @param $addressL2
     */
    public function __construct($addressID, $name, $email, $telephone, $addressL1, $addressL2)
    {
        $this->addressID = $addressID;
        $this->name = $name;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->addressL1 = $addressL1;
        $this->addressL2 = $addressL2;
    }

    public function create(){
        $statement = connectToDatabase()->prepare('INSERT INTO `address` (name, email, telephone, addressL1, addressL2) VALUES (:name, :email, :telephone, :addressL1, :addressL2)');
        $statement->bindParam(':name', $this->name, PDO::PARAM_STR);
        $statement->bindParam(':email', $this->email, PDO::PARAM_STR);
        $statement->bindParam(':telephone', $this->telephone, PDO::PARAM_STR);
        $statement->bindParam(':addressL1', $this->addressL1, PDO::PARAM_STR);
        $statement->bindParam(':addressL2', $this->addressL2, PDO::PARAM_STR);
        return $statement->execute();
        $statement = null;
    }

    public function getAll(){
        $statement = connectToDatabase()->prepare('SELECT * FROM address');
        $statement->execute();
        $result = $statement->fetchAll();
        $addresses = [];
        foreach($result as $a) {
            $addresses[] = $a;
        }
        return $addresses;
        $statement = null;
    }

    public static function countAll(){
        $statement = connectToDatabase()->prepare('SELECT COUNT(`addressID`) FROM `address`');
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_COLUMN);
        return $result[0];
        $statement = null;
    }

    private static function dbResultToTask($a){
        return new Address($a['addressID'], $a['name'], $a['$email'], $a['telephone'], $a['addressL1'], $a['addressL2']);
    }

   /* NOT IMPLEMENTED PROPERLY

    public function update()
    {
        $statement = connectToDatabase()->prepare('UPDATE `address` SET toolName = :toolName WHERE id = :id');
        $statement->bindParam(':toolName', $this->toolName);
        $statement->bindParam(':id', $this->toolIDd);
        return $statement->execute();
        $statement = null;
    }

   NOT IMPLEMENTED PROPERLY */
  /* NOT IMPLEMENTED PROPERLY
    public static function delete($id)
    {
        $statement = connectToDatabase()->prepare('DELETE FROM `tools` WHERE id = :id');
        $statement->bindParam(':id', $id);
        return $statement->execute();
        $statement = null;
    }
  NOT IMPLEMENTED PROPERLY */
}