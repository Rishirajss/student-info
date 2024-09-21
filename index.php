<?php
include "./DB_query/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="main">
        <form action="" method="post">
            <div class="frmfield">
                <label for="">Name</label>
                <input type="text" />
            </div>
            <div class="frmfield">
                <label for="">father name</label>
                <input type="text" />
            </div>
            <div class="frmfield">
                <label for="">Dob</label>
                <input type="date" />
            </div>
            <div class="frmfield">
                <label for="">last school/college Name</label>
                <input type="text" />
            </div>
            <div class="frmfield">
                <label for="">last school/college Subject</label>
                <input type="text" />
            </div>
            <div class="frmfield">
                <label for="">current Course Name</label>
                <input type="text" />
            </div>
            <div class="frmfield"></div>
            <button type="submit">Submit</button>
    </div>
    </form>
    </div>
</body>

</html>