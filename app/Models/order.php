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
        $statement->bindParam(':address', $this->title, PDO::PARAM_STR);
        $statement->bindParam(':completed', $this->completed, PDO::PARAM_BOOL);

        return $statement->execute();
    }