<?php 

class order {
    public $orderId;
    public $address;
    public $importance;
    public $address;

    public function create(){
        $statement = connectToDatabase()->prepare('INSERT INTO 'Orders'');
    }
}