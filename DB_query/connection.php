<?php

class Connection {

    private $host="localhost";
    private $db="studentdb";
    private $user="root";
    private $pwd="";
    private $conn;

    public function __construct() {
        
        $this->conn= mysqli_connect($this->host,$this->user,$this->pwd,$this->db);
        
        if (!$this->conn) {
           
            die("Connection error: " . mysqli_connect_error());
        }
        else
        { return $this->conn;}
    }

    // private function connect() {
    //     $this->conn = mysqli_connect($this->host, $this->user, $this->pwd, $this->db);
        
    //     if (!$this->conn) {
    //         die("Connection error: " . mysqli_connect_error());
    //     }
    // }

    // public function getConnection() {
    //     return $this->conn; 
    // }    

    function runSingleQuery($qry)
    {
        $result=$this->conn->query($qry);
        $user=mysqli_query($this->conn,$result);
        return $user[0];
    }
}

?>
