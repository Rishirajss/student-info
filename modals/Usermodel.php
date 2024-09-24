<?php 
    include_once '../classes/Users.php';

    // print_r($_POST);
    // echo "<br/>";
    // print_r($_GET['action']);

    $insert = new Users();
    //--- 
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    } else {
        echo "No action found"; return false;
}


switch($action)
{
    case "student_save":
            $insert_student = $insert->createUser($_POST['username'], $_POST['father_name'], $_POST['dob'], $_POST['pre_college'], $_POST['pre_subject'], $_POST['curr_course']);
        break;
}
?>