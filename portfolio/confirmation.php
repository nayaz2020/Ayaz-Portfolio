<?php


/* confirmation.php


 */

// Turn on error reporting

ini_set('display_errors', 1);

error_reporting(E_ALL);

//dbreds.php
// Connect to database

//redirect if the form has not been submited
if(empty($_POST)){
   header("location: guestbook.php");
}
//Set the time zone
date_default_timezone_set('America/Vancouver');

//Include header file
include('includes/head.html');
require('../../../dbcreds.php');
require('includes/guestFunctions.php');

?>

<body>

<div class="container" id="main">

    <!-- Jumbotron header -->

    <div class="jumbotron">
        <h5><a href="orders.php" class="admin text-dark"> <span class="admin"></span> Admin Page </a></h5><br>
        <h1 class="display-3">Thanks you</h1>

    </div>

    <h2> Summary Report</h2>

    <?php


    //Data validation
    $isValid = true;
    //check first name
    if(validName($_POST['fname'])){
        $fname = $_POST['fname'];
    }
    else{
        echo"<p>Invalid first name</p>";
        $isValid = false;
    }

    // check last name
    if(validName($_POST['lname'])){
        $lname = $_POST['lname'];
    }
    else{
        echo"<p>Invalid Last name</p>";
        $isValid = false;
    }

    // how we met
    $howWeMet ="";
    if(isset($_POST['howWeMet'])){
        $howWeMet = $_POST['howWeMet'];
        }
        if($howWeMet=="none"){
            echo"<p>How We Met is required !</p>";
            $isValid = false;
        }


        //check method
    $mail = "";
    $email = "";
    if(isset($_POST['mail'])){
        $mail = $_POST['mail'];

        if(!empty($_POST['email'])) {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p>Invalid Email</p>";
                $isValid = false;
            }
        }
         if(empty($_POST['email'])){
            echo"<p>Email address is required</p>";
            $isValid = false;
        }
    }

         // Linkedin Validation

       $link ="";
             if(!empty($_POST['link'])) {
                 $link = $_POST['link'];
                 if (filter_var($link, FILTER_VALIDATE_URL)) {
                     $isValid = true;
                 } else {
                     echo "<p>Not a valid URL</p>";
                     $isValid = false;
                 }
             }

    // Get Data From Post Array
   $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $job = $_POST['title'];
    $company = $_POST['company'];
    $email = $_POST['email'];
   $link = $_POST['link'];
    $howWeMet = $_POST['howWeMet'];


    if(!$isValid){
        return;
    }

    $fromName = 'Nemat'; // getting email from the form on kentOutReach "$_post..."
    $fromEmail = 'nematullah_ayaz@yahoo.com'; // post email "getting email from the form"

    $fname = mysqli_real_escape_string($cnxn,$fname);
    $lname = mysqli_real_escape_string($cnxn,$lname);
    $email = mysqli_real_escape_string($cnxn,$email);
    $job= mysqli_real_escape_string($cnxn,$job);
    $link = mysqli_real_escape_string($cnxn,$link);
    $howWeMet = mysqli_real_escape_string($cnxn,$howWeMet);
    $company= mysqli_real_escape_string($cnxn,$company);


    // Save request to Database
    $sql = "INSERT INTO guestbook(`fname`, `lname`, `job`, `company`, `email`,`linkedin`,`howWeMet`) VALUES 
('$fname', '$lname', '$job', '$company', '$email','$link','$howWeMet')";

    $success = mysqli_query($cnxn, $sql);
    if (!$success){
        echo"<p>Sorry... something went wrong<p>";
        return;
    }

    $fromName = $fname." ".$lname;
    // Print Guestbook Summary Report

    echo"<p> Name: $fname $lname</p>";
    echo"<p> Job title: $job</p>";
    echo"<p> Company: $company</p>";
    echo"<p> Email: $email</p>";
    echo"<p> Linkedin: $link</p>";
    echo"<p> How We Met: $howWeMet</p>";



    //sent Email
    $to = "nematullah_ayaz@yahoo.com";
    $subject = "A message from Guestbook";
    $headers = "Name: $fromName <$fromEmail\r\n>";
    $message = "Company: $company\r\n";
    $message = "Tob Title: $job";
    $message = "from $fname $lname\r\n";

    // Sheck success
    $success = mail($to, $subject, $message, $headers);
    //Shortcut
        echo $success ? "<p>Your order has been placed.</p>" :
             "<p>Sorry... there was a problem.</p>";


    ?>

</div>

</body>


