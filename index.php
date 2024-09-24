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
            <form action="<?php echo "/student Admission/modals/Usermodel.php?action=student_save";?>" method="post">
                <div class="frmfield">
                    <label for="">Name</label>
                    <input type="text" name="username" />
                </div>
                <div class="frmfield">
                    <label for="">father name</label>
                    <input type="text" name="father_name" />
                </div>
                <div class="frmfield">
                    <label for="">Dob</label>
                    <input type="date" name="dob" />
                </div>
                <div class="frmfield">
                    <label for="">last school/college Name</label>
                    <input type="text" name="pre_college" />
                </div>
                <div class="frmfield">
                    <label for="">last school/college Subject</label>
                    <input type="text" name="pre_subject" />
                </div>
                <div class="frmfield">
                    <label for="">current Course Name</label>
                    <input type="text" name="curr_course" />
                </div>
                <div class="frmfield">
                    <button type="submit" name="save" value="submit">Submit</button>
                </div>
            </form>
        </div>
    </body>

</html>