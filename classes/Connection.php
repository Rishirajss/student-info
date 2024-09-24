<?php

class Connection {

    private $host="localhost";
    private $db="studentdb";
    private $user="root";
    private $pwd="";
    private $conn;

    public function __construct() {
        try {
            $this->conn= mysqli_connect($this->host,$this->user,$this->pwd,$this->db);
            // echo "Connection Stablish";

        } catch (error $error) {
            echo $error;
        }
    }

   
    public function getConnection(){
        return $this->conn;
    }

    function runSingleQuery($qry)
    {
        $result=$this->conn->query($qry);
        $user=mysqli_query($this->conn,$result);
        return $user[0];
    }
}

?>
