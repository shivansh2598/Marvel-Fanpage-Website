

<?php

$con=mysqli_connect("localhost","root","","thanos")or die(error);
$select_querry="SELECT id,name,price FROM item";
$select_querry_result=mysqli_query($con,$select_querry);

?>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Products Page</title>
         <link href="bootstrap/css/animate.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/wow.min_.js" type="text/javascript"></script>
        <script>new WOW().init();</script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="bootstrap/css/animate.min.css" type="text/css">
     <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                         
                       
                    </button>
                    
                    <a href="#" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>Marvel Store</a>
                </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart" style="font-weight:bold;">Cart</span></a></li>
                     
                    </ul>
                </div>
</div>
            
        </nav>


        <br>
        <br>
        <br>


        <div class="container" id="main">
            <div  style=" background-color:#1E1C1C" class="jumbotron">
                <h1 style="color:rgb(234,7,7)">Marvel store, welcomes you!!</h1>
                <h3 style="font-family: algerian;color:rgb(234,7,7)" class="text-center">Premium quality at affordable price</h3>
                <p style="color:rgb(234,7,7)" class="text-center">Scroll , click , buy and repeat !!</p>
            </div>
        </div>
        
        
        <div class="container" id="poster">
            <div class="row text-center">
                <h1>Posters</h1>
                <br>
                <div class="col-lg-3" id="p1">
                <?php $row =mysqli_fetch_row($select_querry_result);?>
                <img src="images_product/poster1.jpg" alt="poster 1"/>
                <div style="padding-left: 80px " class="caption">
                    <h3>Price:- <?php echo $row[2];?>$</h3>
                    <a href="cart.php">
                 <button type="submit" class="btn btn-primary btn-danger" name="submit">add to cart</button>
                     </a>
                </div>
                </div>
                <div class="col-lg-1"></div>
                <div  class="col-lg-3 col-sm-6" id="p2">
                <?php $row =mysqli_fetch_row($select_querry_result);?>
                <img src="images_product/poster4.jpg" alt="poster 1"/>
                <div style="padding-left: 80px " class="caption">
                    <h3>Price:- <?php echo $row[2];?>$</h3>
                    <a href="cart.php">
                 <button type="submit" class="btn btn-primary btn-danger" name="submit">add to cart</button>
                 </a>
                </div>
                </div>
                    <div class="col-lg-1"></div>
                <div class="col-lg-3 col-sm-6" id="p3">
                <?php $row =mysqli_fetch_row($select_querry_result);?>
                <img src="images_product/poster3.jpg" alt="poster 1"/>
                <div style="padding-left: 80px " class="caption">
                    <h3>Price:-  <?php echo $row[2];?>$</h3>
                    <a href="cart.php">
                 <button type="submit" class="btn btn-primary btn-danger" name="submit">add to cart</button>
                 </a>
                </div>
                </div>
            </div>
        </div>
        
        
         
        <div class="container" id="softtoy">
            <div class="row text-center">
                <h1>Soft Toys</h1>
                <br>
                <div class="col-lg-3" id="s1">
                <?php $row =mysqli_fetch_row($select_querry_result);?>
                <img src="images_product/softtoy1.jpg" alt="soft toy 1"/>
                <div style="padding-left: 80px " class="caption">
                    <h3>Price:- <?php echo $row[2];?>$</h3>
                    <a href="cart.php">
                 <button type="submit" class="btn btn-primary btn-danger" name="submit">add to cart</button>
                 </a>
                </div>
                </div>
                <div class="col-lg-1"></div>
                <div  class="col-lg-3 col-sm-6" id="s2">
                <?php $row =mysqli_fetch_row($select_querry_result);?>
                    <img src="images_product/softtoy2.jpg" alt="soft toy 2"/>
                <div style="padding-left: 80px " class="caption">
                    
                    <h3>Price:- <?php echo $row[2];?>$</h3>
                    <a href="cart.php">
                 <button type="submit" class="btn btn-primary btn-danger" name="submit">add to cart</button>
                 </a>
                </div>
                </div>
                    <div class="col-lg-1"></div>
                <div class="col-lg-3 col-sm-6" id="s3"
                <?php $row =mysqli_fetch_row($select_querry_result);?>>
                    <img src="images_product/softtoy3.jpg" alt="soft toy 3"/>
                <div style="padding-left: 80px " class="caption">
                    <h3>Price:- <?php echo $row[2];?>$</h3>
                    <a href="cart.php">
                 <button type="submit" class="btn btn-primary btn-danger" name="submit">add to cart</button>
                 </a>
                </div>
                </div>
            </div>
        </div>
        
        
        
        
         
        <div class="container" id="tshirt">
            <div class="row text-center">
                <h1>T-shirts</h1>
                <br>
                <div class="col-lg-3" id="t1">
                <?php $row =mysqli_fetch_row($select_querry_result);?>
                    <img src="images_product/tshirt1.jpg" alt="tshirt 1"/>
                <div style="padding-left: 80px " class="caption">
                    <h3>Price:- <?php echo $row[2];?>$</h3>
                    <a href="cart.phpl">
                 <button type="submit" class="btn btn-primary btn-danger" name="submit">add to cart</button>
                 </a>
                </div>
                </div>
                <div class="col-lg-1"></div>
                <div  class="col-lg-3 col-sm-6" id="t2">
                <?php $row =mysqli_fetch_row($select_querry_result);?>
                    <img src="images_product/tshirt2.jpg" alt="tshirt 2"/>
                <div style="padding-left: 80px " class="caption">
                    <h3>Price:- <?php echo $row[2];?>$</h3>
                    <a href="cart.php">
                 <button type="submit" class="btn btn-primary btn-danger" name="submit">add to cart</button>
                 </a>
                </div>
                </div>
                    <div class="col-lg-1"></div>
                <div class="col-lg-3 col-sm-6" id="t3">
                <?php $row =mysqli_fetch_row($select_querry_result);?>
                    <img src="images_product/tshirt3.jpg" alt="tshirt 3"/>
                <div style="padding-left: 80px " class="caption">
                    <h3>Price:- <?php echo $row[2];?>$</h3>
                    <a href="cart.php">
                 <button type="submit" class="btn btn-primary btn-danger" name="submit">add to cart</button>
</a>
                </div>
                </div>
            </div>
        </div>
        
        
        <br><br>
      
        <!--Footer-->
        <footer>
            <div class="container">
                <center>
                    <p class="wow zoomIn">Copyright &copy; Marvel Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
                </center>
            </div>
        </footer>
        <!--Footer end-->
    
        
        
    </body>
</html>

