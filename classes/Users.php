<?php
    
    require 'Connection.php';

    // print_r($_POST);

    class Users {
        private $conn;

        public function __construct(){
            $database = new Connection();
            $this->conn = $database->getConnection();
        }

        //Create Users
        Public function createUser($username, $father_name, $dob, $pre_college, $pre_sub, $curr_course){
                
            $ins = "INSERT INTO `info_student`(`name`, `father_name`, `dob`, `pre_college`, `pre_subject`, `curr_course`) VALUES ('$username', '$father_name', '$dob', '$pre_college', '$pre_sub', '$curr_course')";
            $exe = mysqli_query($this->conn, $ins);

            // echo $ins;

            if(!is_null($exe)){
                echo "Data inserted";
            } else {
                echo "Error inserting data: " . mysqli_error($this->conn); 
            }
            
        }
    }
    
    
    // $exe = $this->conn->prepare($ins);
    // $exe->bind_param('s', $username, $father_name, $dob, $pre_college, $pre_sub, $curr_course);
    // return $exe->execute();
?>