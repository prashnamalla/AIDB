<?php

class Database
{
    public $con;
    public function __construct(){
        $this->con = mysqli_connect("localhost","id5805163_root","prashna123","id5805163_cosmeticshop");
        if (!$this->con) {
            echo "Error in Connecting ".mysqli_connect_error();
        }
    }
}

?>