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
     */
    public function __construct($orderId = null, $f_addressId= null, $addressName= null, $f_importanceId= null, $importanceName= null, $totalTime= null, $f_toolId= null, $toolName= null, $statusID= null, $statusName= null)
    {
        $this->orderId = $orderId;
        $this->f_addressId = $f_addressId;
        $this->addressName = $addressName;
        $this->f_importanceId = $f_importanceId;
        $this->importanceName = $importanceName;
        $this->totalTime = $totalTime;
        $this->f_toolId = $f_toolId;
        $this->toolName = $toolName;
        $this->f_statusId = $statusID;
        $this->statusName = $statusName;
    }


    public function create()
    {

        echo "importance is " . $this->f_importanceId;
        $statement = connectToDatabase()->prepare('INSERT INTO `orders` (F_addressID, F_importanceID, F_toolID, F_statusID) VALUES (:address, :importance, :tool, :status)');
        $statement->bindParam(':address', $this->f_addressId, PDO::PARAM_STR);
        $statement->bindParam(':importance', $this->f_importanceId, PDO::PARAM_STR);
        $statement->bindParam(':tool', $this->f_toolId, PDO::PARAM_STR);
        $statement->bindParam(':status', $this->f_statusId, PDO::PARAM_STR);
        return $statement->execute();
        $statement = null;
    }

    public static function getAll(){
        $statement = connectToDatabase()->prepare('SELECT orderID, address.addressid, address.name, importances.importanceID, Importances.importanceText, importances.totalTime, tools.toolID, 
tools.toolName, status.statusID, status.statusName FROM `orders` INNER JOIN address ON Orders.F_addressID=address.addressID
INNER JOIN status ON Orders.F_statusID=status.statusID INNER JOIN importances ON Orders.F_importanceID=importances.importanceID INNER JOIN tools ON
 Orders.F_toolID=tools.toolID');
        
        $statement->execute();
        $result = $statement->fetchAll();
        $orders = [];
        foreach($result as $o) {
            $orders[] = order::dbResultToTask($o);
        }
        return $orders;
        $statement = null;
    }

    public static function getById($id)
    {
        $statement = connectToDatabase()->prepare('SELECT * FROM orders WHERE id = :id');
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        return order::dbResultToTask($statement->fetch());
    }


    private static function dbResultToTask($o){
        return new order($o['orderID'], $o['addressid'], $o['name'], $o['importanceID'], $o['importanceText'], $o['totalTime'], $o['toolID'], $o['toolName'], $o['statusID'], $o['statusName']);
      }

    public static function countAll(){
        $statement = connectToDatabase()->prepare('SELECT COUNT(`orderID`) FROM `orders`');
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_COLUMN);
        return $result[0];
        $statement = null;
    }

    public static function countAllClosed(){
        $statement = connectToDatabase()->prepare('SELECT COUNT(`orderID`) FROM `orders` WHERE F_statusID = 2');
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_COLUMN);
        return $result[0];
        $statement = null;
    }
    
}