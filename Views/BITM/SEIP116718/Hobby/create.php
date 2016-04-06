<?php
session_start();

if(isset($_SESSION['Massage'])){
    echo $_SESSION['Massage'];
    unset($_SESSION['Massage']);
}
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <title>Book | Create</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <link rel="stylesheet" href="../../../../html/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../../html/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../../html/css/normalize.css">
        <link rel="stylesheet" href="../../../../html/css/main.css">
        <script src="../../../../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="main_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <a class="navbar-brand mainproject" href="../../../../index.html">Atomic Project</a>
                                </div>
                                <ul class="nav navbar-nav">
                                    <li><a href="../Books/index.php">Book</a></li>
                                    <li><a href="../Birthday/index.php">Birthday</a></li>
                                    <li><a href="../Textarea/index.php">Textarea</a></li>
                                    <li><a href="../Email/index.php">Email</a></li> 
                                    <li><a href="#">Profile Picture</a></li>
                                    <li><a href="../Gender/index.php">Gender</a></li>
                                    <li><a href="../Hobby/index.php">Checkbox</a></li> 
                                    <li><a href="../Select/index.php">Select</a></li> 
                                </ul>
                            </div>
                        </nav> 
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="Sub_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="index.php">Check Box</a>
                                </div>
                                <ul class="nav navbar-nav">
                                    <li><a href="create.php">Create</a></li>
                                    <li><a href="deleteitem.php">Delete Item</a></li>
                                </ul>
                            </div>
                        </nav> 
                    </div>
                </div>
            </div>
        </div>
        
        <div class="table_area create_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="store.php" method="post">
                            <label for="book">Select Check Box</label>
                            <div class="form-group">
                                <input type="checkbox" name="myHobby[]" value="Gardening">Gardening<br>
                                <input type="checkbox" name="myHobby[]" value="Liberal Arts Pursuits">Liberal Arts Pursuits<br>
                                <input type="checkbox" name="myHobby[]" value="Sports and Games">Sports and Games<br>
                                <input type="checkbox" name="myHobby[]" value="friends">friends<br>
                                <button type="submit" class="btn btn-default">Submit</button>
                                <input type ="reset" value="reset"class="btn btn-default" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="main_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                                <div class="col-lg-4"></div>
                                <ul class="nav navbar-nav">
                                    <li><a href="">Atomic Project <i class="fa fa-copyright"></i> <?php echo date("Y");?> | Developed by Rakib Hossain</a></li>   
                                </ul>
                                <div class="col-lg-3"></div>
                            </div>
                        </nav> 
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="../../../../html/js/bootstrap.min.js"></script>
        <script src="../../../../html/js/plugins.js"></script>
        <script src="../../../../html/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>


<!DOCTYPE html>
<html>
<body>
    <fieldset>
        <legend>
            Your Hobby
        </legend>

        <form action="store.php" method="post">
        <input type="checkbox" name="myHobby[]" value="Gardening">Gardening<br>
        <input type="checkbox" name="myHobby[]" value="Liberal Arts Pursuits">Liberal Arts Pursuits<br>
        <input type="checkbox" name="myHobby[]" value="Sports and Games">Sports and Games<br>
        <input type="checkbox" name="myHobby[]" value="friends">friends<br>
        <input type="submit" value="Submit">
        </form>
    </fieldset>

</body>
</html>