<?php

$con=mysqli_connect("localhost","root","","thanos")or die(error);
$select_querry="SELECT id,name,price FROM item";
$select_querry_result=mysqli_query($con,$select_querry);
$row =mysqli_fetch_row($select_querry_result);




?>
  let x=1;

function images()
{
    document.write(x);
    x++;
    
}
setInterval(images(),1000);