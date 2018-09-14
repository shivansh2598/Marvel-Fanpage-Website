<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="bootstrap/css/animate.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/wow.min_.js" type="text/javascript"></script>
        <script>new WOW().init();</script>
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="cssphp.css" type="text/css">
        <meta charset="UTF-8">
        <title>Fan Page!! </title>
    </head>
    <body>
        
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
               
                    <a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>Home</a>
                </div>
                
                 <div class="navbar-right">
               
                    <a href="index.html" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>Store</a>
                    
                </div>
              
            </div>
            
        </nav>
        <br><br>
<?php

        $con= mysqli_connect("localhost","root","","thanos")or die("error");
        $First_name= filter_input(INPUT_POST, "First_Name",FILTER_UNSAFE_RAW);
        $Last_name= filter_input(INPUT_POST, "Last_Name",FILTER_UNSAFE_RAW);
        $gender= filter_input(INPUT_POST, "gender",FILTER_UNSAFE_RAW);
        $email= filter_input(INPUT_POST, "email",FILTER_UNSAFE_RAW);
        $contact= filter_input(INPUT_POST, "phone_no",FILTER_UNSAFE_RAW);?>
       
       <?php $user_query = "INSERT INTO user (first_name,last_name,gender,phone_no,email) VALUES ('$First_name','$Last_name','$gender','$contact','$email')";
$user_query_result = mysqli_query($con, $user_query);?>


<?php if(mysqli_affected_rows($con)==1) 
{ 
?>
<?php        require 'part2.php';
} 
else 
{ 
echo "<script>alert('wrong credentials');</script>";
require 'index.php';         
}  

?>  
    </body>
</html>

