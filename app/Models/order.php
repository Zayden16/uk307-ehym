<?php 

class order {
    public $orderId;
    public $address;
    public $importance;
    public $tool;
    public $status;

    /**
     * order constructor.
     * @param $orderId
     * @param $address
     * @param $importance
     * @param $tool
     * @param $status
     */

    public function __construct($orderId, $address, $importance, $tool, $status)
    {
        $this->orderId = $orderId;
        $this->address = $address;
        $this->importance = $importance;
        $this->tool = $tool;
        $this->status = $status;
    }

    public function create()
    {
        $statement = db()->prepare('INSERT INTO `order` (F_addressID, F_importanceID, F_toolID, F_statusID) VALUES (:address, :importance, :tool, :status)');
        $statement->bindParam(':address', $this->address, PDO::PARAM_STR);
        $statement->bindParam(':importance', $this->imporance, PDO::PARAM_STR);
        $statement->bindParam(':tool', $this->tool, PDO::PARAM_STR);
        $statement->bindParam(':status', $this->status, PDO::PARAM_STR);
        return $statement->execute();
        $statement = null;
    }

    public static function getAll(){
        $statement = connectToDatabase()->prepare('SELECT orderID, address.name, status.statusName, tools.toolName, 
        importances.importanceText FROM `orders` INNER JOIN address ON Orders.F_addressID=address.addressID 
        INNER JOIN status ON Orders.F_statusID=status.statusID INNER JOIN importances ON Orders.F_importanceID=importances.importanceID 
        INNER JOIN tools ON Orders.F_toolID=tools.toolID');
        
        $statement->execute();
        $result = $statement->fetchAll();
        $orders = [];
        foreach($result as $o) {
            $orders[] = $o;
        }
        return $orders;
        $statement = null;
    }

    
}