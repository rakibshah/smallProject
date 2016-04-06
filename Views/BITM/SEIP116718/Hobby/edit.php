<?php
include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Hobby\Hobby;

$id = $_GET['id'];

$edit = new Hobby();
$oneData = $edit->show($id);

//echo"<pre>";
//print_r($oneData);
//echo"</pre>";
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <title>Update Your Ckeck box name</title>
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
                                    <a class="navbar-brand" href="../../../../index.html">Atomic Project</a>
                                </div>
                                <ul class="nav navbar-nav">
                                    <li><a href="Views/BITM/SEIP116718/Books/index.php">Book</a></li>
                                    <li><a href="../Birthday/index.php">Birthday</a></li>
                                    <li><a href="../Textarea/index.php">Textarea</a></li>
                                    <li><a href="../Email/index.php">Email</a></li> 
                                    <li><a href="../">Profile Picture</a></li>
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
                                    <a class="navbar-brand" href="index.php">Check box</a>
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
                        <form action="update.php" method="post">
                            <label for="book">Update your Check box</label><br/>
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                            <input type="checkbox" name="myHobby[]" value="Gardening" <?php if(preg_match("/Gardening/", $oneData['title'])){echo "checked";}?>>Gardening<br>
                            <input type="checkbox" name="myHobby[]" value="Liberal Arts Pursuits"<?php if(preg_match("/Liberal Arts Pursuits/", $oneData['title'])){echo "checked";}?>>Liberal Arts Pursuits<br>
                            <input type="checkbox" name="myHobby[]" value="Sports and Games"<?php if(preg_match("/Sports and Games/", $oneData['title'])){echo "checked";}?>>Sports and Games<br>
                            <input type="checkbox" name="myHobby[]" value="friends"<?php if(preg_match("/friends/", $oneData['title'])){echo "checked";}?>>friends<br>
                            <input type="submit" value="Submit">
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

<html>
<body>
    <fieldset>
        <legend>
            Your Hobby
        </legend>

        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="checkbox" name="myHobby[]" value="Gardening" <?php if(preg_match("/Gardening/", $oneData['title'])){echo "checked";}?>>Gardening<br>
            <input type="checkbox" name="myHobby[]" value="Liberal Arts Pursuits"<?php if(preg_match("/Liberal Arts Pursuits/", $oneData['title'])){echo "checked";}?>>Liberal Arts Pursuits<br>
            <input type="checkbox" name="myHobby[]" value="Sports and Games"<?php if(preg_match("/Sports and Games/", $oneData['title'])){echo "checked";}?>>Sports and Games<br>
            <input type="checkbox" name="myHobby[]" value="friends"<?php if(preg_match("/friends/", $oneData['title'])){echo "checked";}?>>friends<br>
            <input type="submit" value="Submit">
        </form>
    </fieldset>

</body>
</html>