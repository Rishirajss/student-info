<?php

    include("Connection.php");
    

    class Insertdata
    {

        private $db_handle;
                
                function __construct()
                {
                    $this->db_handle= new Connection();
                }

                function insertstudent($name, $father_name, $dob, $pre_college, $pre_subject, $curr_course){
                    
                $ins = "INSERT INTO info_student (name, father_name, dob, pre_college, pre_subject, curr_course) VALUES ($name, $father_name, $dob, $pre_college, $pre_subject, $curr_course)";
                $exe = $this->db_handle->runSingleQuery($ins);

                if(is_null($exe)){
                    echo "Data inserted";
                } else{
                    echo "Error";
                }
                }

            }            
?>