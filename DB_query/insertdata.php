<?php
include 'connection.php';
?>

<?php

print_r($_POST);

if (isset($_POST['save'])) {
    $name = $_POST['username'];
    $fname = $_POST['fname'];
    $dob = $_POST['dob'];
    $college = $_POST['college'];
    $sub = $_POST['sub'];
    $course = $_POST['course'];

    $ins = "INSERT INTO `info_student`('name', 'father_name', 'dob', 'pre_college', 'pre_subject', 'curr_course') VALUES (`$name`, `$fname`, `$dob`, `$college`, `$sub`, `$course`)";

    $exe = mysqli_query($conn, $ins);

    if ($exe) {
        echo "Data save successfully";
    } else {
        echo "Data not inserted please check it";
    }
}
?>