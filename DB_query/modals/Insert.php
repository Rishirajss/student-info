<?php 
include_once('../Insertdata.php');
$insert=new Insertdata();
//--- 
if(isset($_GET['action']))
{$action=$_GET['action'];}
else
{echo "No action found"; return false;}


switch($action)
{
    case "student_save":
            $insert_student = $insert->insertstudent($_POST['name'], $_POST['father_name'], $_POST['dob'], $_POST['pre_college'], $_POST['pre_subject'], $_POST['curr_course']);
        break;
}
?>