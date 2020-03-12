<?php 

class order {
    public $orderId;
    public $f_addressId;
    public $addressName;
    public $f_importanceId;
    public $importanceName;
    public $totalTime;
    public $f_toolId;
    public $toolName;
    public $f_statusId;
    public $statusName;
    public $d_erfasst;

    /**
     * order constructor.
     * @param $orderId
     * @param $f_addressId
     * @param $addressName
     * @param $f_importanceId
     * @param $importanceName
     * @param $totalTime
     * @param $f_toolId
     * @param $toolName
     * @param $statusID
     * @param $statusName
     * @param $d_erfasst
     */
    public function __construct($orderId = null, $d_erfasst = null, $f_addressId= null, $addressName= null, $f_importanceId= null, $importanceName= null, $totalTime= null, $f_toolId= null, $toolName= null, $statusID= null, $statusName= null, $d_rueckgabe = null)
    {
        $this->orderId = $orderId;
        $this->d_erfasst = $d_erfasst;
        $this->f_addressId = $f_addressId;
        $this->addressName = $addressName;
        $this->f_importanceId = $f_importanceId;
        $this->importanceName = $importanceName;
        $this->totalTime = $totalTime;
        $this->f_toolId = $f_toolId;
        $this->toolName = $toolName;
        $this->f_statusId = $statusID;
        $this->statusName = $statusName;
        $this->d_rueckgabe = $d_rueckgabe;
    }


    public function create()
    {
        $statement = connectToDatabase()->prepare('INSERT INTO `orders` (F_addressID, F_importanceID, F_toolID, F_statusID, D_erfasst) VALUES (:address, :importance, :tool, :status, NOW())');
        $statement->bindParam(':address', $this->f_addressId, PDO::PARAM_STR);
        $statement->bindParam(':importance', $this->f_importanceId, PDO::PARAM_STR);
        $statement->bindParam(':tool', $this->f_toolId, PDO::PARAM_STR);
        $statement->bindParam(':status', $this->f_statusId, PDO::PARAM_STR);
        return $statement->execute();
    }

    public static function getAllActive(){
        $statement = connectToDatabase()->prepare('SELECT orderID, D_erfasst, address.addressid, address.name, importances.importanceID, Importances.importanceText, importances.totalTime, tools.toolID, tools.toolName, status.statusID, status.statusName FROM `orders` INNER JOIN address ON Orders.F_addressID = address.addressID INNER JOIN status ON Orders.F_statusID=status.statusID INNER JOIN importances ON Orders.F_importanceID=importances.importanceID INNER JOIN tools ON Orders.F_toolID=tools.toolID WHERE statusID = 1 ORDER BY `importances`.`totalTime` ASC ');
        $statement->execute();
        $result = $statement->fetchAll();
        $orders = [];
        foreach($result as $o) {
            $orders[] = order::dbResultToTask($o);
        }
        return $orders;
    }

    public static function getById($id)
    {
        $statement = connectToDatabase()->prepare('SELECT orderID, D_erfasst, address.addressid, address.name, importances.importanceID, Importances.importanceText, importances.totalTime, tools.toolID, tools.toolName, status.statusID, status.statusName FROM `orders` INNER JOIN address ON Orders.F_addressID = address.addressID INNER JOIN status ON Orders.F_statusID=status.statusID INNER JOIN importances ON Orders.F_importanceID=importances.importanceID INNER JOIN tools ON Orders.F_toolID=tools.toolID WHERE orderId = :id');
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        return order::dbResultToTask($statement->fetch());
    }


    private static function dbResultToTask($o){
        return new order($o['orderID'], $o['D_erfasst'], $o['addressid'], $o['name'], $o['importanceID'], $o['importanceText'], $o['totalTime'], $o['toolID'], $o['toolName'], $o['statusID'], $o['statusName']);
      }


    public static function countAllActive(){
        $statement = connectToDatabase()->prepare('SELECT COUNT(`orderID`) FROM `orders` WHERE F_statusID = 1');
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_COLUMN);
        return $result[0];
    }


    public function update()
    {
        $statement = connectToDatabase()->prepare('UPDATE `orders` SET F_addressID = :adrID, F_importanceID = :impID, F_StatusID = :staID, F_toolID = :tooID WHERE orderId = :id');
        $statement->bindParam(':adrID', $this->f_addressId);
        $statement->bindParam(':impID', $this->f_importanceId);
        $statement->bindParam(':staID', $this->f_statusId);
        $statement->bindParam(':tooID', $this->f_toolId);
        $statement->bindParam(':id', $this->orderId);
        return $statement->execute();
    }


    public static function countAllClosed(){
        $statement = connectToDatabase()->prepare('SELECT COUNT(`orderID`) FROM `orders` WHERE F_statusID = 2');
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_COLUMN);
        return $result[0];
        $statement = null;
    }
    
}