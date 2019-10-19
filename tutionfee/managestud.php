<!DOCTYPE html>
<?php

include("db.php");
include("auth.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Manage Students</title>
</head>
<body>
<div class="container-fluid">
        <div id="header">
            <img src="images/bg-header.jpg" width="100%;" height="150px;">
        </div>
        <div class="slide-left"><br>
            <h1>Manage Students</h1>
            <ul>
                <li><a href="managestud.php?addstud">Add Students</a></li><hr>
                <li><a href="managestud.php?viewstud">View Students</a></li><hr>
                <li><a href="managestud.php?payments">Payments</a></li><hr>
                <li><a href="managestud.php?pending">Pending payments</a></li><hr>
                <li><a href="managestud.php?assessment">Assessments</a></li><hr>
                <li><a href="managestud.php?assessdet">Assessment details</a></li><hr>
                <li><a href="managestud.php?changepass">Change Password</a></li><hr>
                <li><a href="logout.php">Logout</a></li><hr>
            </ul>


        </div><br>
        <div class="slide-right">
            
                <?php
                if (isset($_GET['addstud'])) {
                include("addstud.php");
                }
                 if (isset($_GET['viewstud'])) {
                include("viewstud.php");
                }
                if(isset($_GET['edit_stud'])){
                include("edit_stud.php");
            }
            if(isset($_GET['payments'])){
            include("payments.php");
        }
            if(isset($_GET['payamt'])){
            include("payamt.php");
        }
        if (isset($_GET['status'])) {
            include("status.php");
        }
        if (isset($_GET['update_fee'])) {
            include("update_fee.php");
        }
        if (isset($_GET['pending'])) {
            include("pending.php");
        }
            if (isset($_GET['changepass'])) {
                 include("changepass.php");
             } 

           if (isset($_GET['assessment'])) {
                 include("assessment.php");
             } 

             if (isset($_GET['assessdet'])) {
                 include("assessdet.php");
             }
             if (isset($_GET['edit_asses'])) {
                 include("edit_asses.php");
             }

                ?>
            

        </div>

    </div>
</body>
</html>
