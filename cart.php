<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap/css/animate.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/wow.min_.js" type="text/javascript"></script>
        <script>new WOW().init();</script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
     <link rel="stylesheet" href="bootstrap/css/animate.min.css" type="text/css">
     <link href="index.css" rel="stylesheet" type="text/css"/>
  
    <title>Cart</title>
</head>
<body>
            <div class="navbar navbar-inverse navbar-fixed-top navbar-collapse">
                <div class="inner-header">
                    <div class="logo glyphicon glyphicon-home"><a href="products_page.php"> Marvel Store</a></div>
         
                </div>
            </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            
            <div style="padding-left: 100px" class="col-lg-10 col-md-10">
            <div class="table-responsive text-center">
                    <table class="table table-bordered table-hover">
                        
                        <thead>
                            <tr style="font-weight:bolder">
                                <td>ITEM NO</td>
                                <td>ITEM NAME</td>
                                <td>PRICE</td>
                                <td></td>
                            </tr>
                        </thead>
                        
                        <tbody>  
                            <tr>
                                <td style="visibility: hidden">hello</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                
                            </tr>
                            <tr>
                                <td><?php echo $row[1];?></td>
                                <td>Total</td>
                                <td><?php echo $row[2];?>$</td>
                                <td><a href="success.html" class="btn btn-primary">Confirm order</a></td>
                            </tr>
                            
                        
                        </tbody>
                        
                    </table>
                   </div>
                </div>
            </div>
 
    
</body>
</html>