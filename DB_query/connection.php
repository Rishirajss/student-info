<?php
$conn = mysqli_connect("localhost", "root", "", "studentDb");

try {
    // echo "Connection Stablish";
} catch (\Throwable $th) {
    echo $th;
}
