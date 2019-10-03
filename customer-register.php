<?php
include_once 'includes/db_connect.php';
include_once 'includes/shoppingcartdbconnect.php';
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';


sec_session_start();

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
        <script type="text/JavaScript" src="js/forms.js"></script>
        <meta charset="utf-8">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register</title>

        <meta name="keywords" content="">

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

        <!-- Bootstrap and Font Awesome css -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

        <!-- Css animations  -->
        <link href="css/animate.css" rel="stylesheet">


        <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">



    </head>

    <body>


        <div id="all">
            <header>

                <!-- *** TOP Header
_________________________________________________________ -->
                <div id="top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-5 contact">
                                <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </p>
                            </div>

                            <!-- Social Media Links -->

                            <div class="col-xs-7">
                                <div class="social">
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                    <a href="customer-order.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                                    <a href="help.php" class="help-link" title="Help"><i class="glyphicon glyphicon-exclamation-sign"></i></a>

                                </div>

                                <!-- checks to see if user is logged in. If true, display username and logout. If false display login and register button -->

                                <div class="login">
                                    <?php if (login_check($mysqli) == true) : ?>

                                    <p>Welcome, <?php echo $_SESSION["username"];?></p>

                                    <a href="includes/logout.php" class="button">Logout</a>

                                    <?php else : ?>

                                    <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                                    <a href="customer-register.php"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>

                                    <?php endif; ?>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>


        <!-- *** TOP END *** -->

        <!-- *** NAVBAR ***
_________________________________________________________ -->

        <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

            <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                <div class="container">
                    <div class="navbar-header">

                        <a class="navbar-brand home" href="index.php">
                            <img src="img/background/logo.png" alt="logo" class="hidden-xs hidden-sm">
                            <img src="img/background/logo.png" alt="logo" class="visible-xs visible-sm"><span class="sr-only">Home</span>
                        </a>
                        <div class="navbar-buttons">
                            <button type="button" class="navbar-toggle btn-main" data-toggle="collapse" data-target="#navigation">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-align-justify"></i>
                            </button>
                        </div>
                    </div>
                    <!--/.navbar-header -->

                    <div class="navbar-collapse collapse" id="navigation">

                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown active">
                                <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>


                            </li>
                            <li class="dropdown use-yamm yamm-fw">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <img src="" class="img-responsive hidden-xs" alt="">
                                                </div>
                                                <div class="col-sm-3">
                                                    <h5>Features</h5>
                                                    <ul>
                                                        <li><a href="index.php">sign in</a>
                                                        </li>
                                                        <li><a href="customer-register.php">register</a>
                                                        </li>
                                                        <li><a href="customer-order.php">cart</a>
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>


                            <!-- ========== FULL WIDTH MEGAMENU ================== -->
                            <li class="dropdown use-yamm yamm-fw">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">All Pages <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h5>Home</h5>
                                                    <ul>
                                                        <li><a href="index.php">Home</a>
                                                        </li>

                                                    </ul>
                                                    <h5>About</h5>
                                                    <ul>
                                                        <li><a href="about.html">Features</a>
                                                        </li>
                                                        <li><a href="index.php">Sign in</a>
                                                        </li>
                                                        <li><a href="customer-register.php">register</a>
                                                        </li>
                                                        <li><a href="customer-order.php">cart</a>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="col-sm-3">
                                                    <h5>Cart</h5>
                                                    <ul>
                                                        <li><a href="customer-order.php">Cart</a>
                                                        </li>
                                                        <li><a href="viewCart.php">View cart</a>
                                                        </li>

                                                    </ul>

                                                </div>

                                                <div class="col-sm-3">
                                                    <h5>Contact</h5>
                                                    <ul>
                                                        <li><a href="contact.php">Contact</a>
                                                        </li>

                                                    </ul>


                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.yamm-content -->
                                    </li>
                                </ul>
                            </li>
                            <!-- ========== FULL WIDTH MEGAMENU END ================== -->

                            <li class="dropdown">
                                <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="contact.php">Contact</a>
                                    </li>


                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!--/.nav-collapse -->



                    <div class="collapse clearfix" id="search">

                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">

                                    <button type="submit" class="btn btn-main"><i class="fa fa-search"></i></button>

                                </span>
                            </div>
                        </form>

                    </div>
                    <!--/.nav-collapse -->

                </div>


            </div>
            <!-- /#navbar -->

        </div>

        <!-- *** NAVBAR END *** -->




        <!-- *** LOGIN***
_________________________________________________________ -->

        <!-- login dropdown box -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">login</h4>
                    </div>
                    <div class="modal-body">

                        <!-- displays error message for certain error -->			
                        <div id="login-form">
                            <center><?php
                                if (isset($_GET['error'])) {
                                    echo '<p class="error">Error Logging In!</p>';
                                }
                                ?> 

                                <!-- login form -->
                                <form action="includes/process_login.php" method="post" name="login_form">       
                                    <div class="form-group">
                                        Email: <input type="text" class="form-control" name="email" />
                                    </div>


                                    <div class="form-group">
                                        Password: <input type="password" class="form-control" name="password" id="password"/>
                                    </div>
                                    <div>
                                        <input type="button" value="Login" class="btn btn-primary" onclick="formhash(this.form, this.form.password);" /> 
                                    </div>
                                </form>

                                <?php
                                if (login_check($mysqli) == true) {
                                    echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';

                                    echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
                                } else {
                                    echo '<p>Currently logged ' . $logged . '.</p>';
                                    echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
                                }
                                ?></center>
                        </div>	

                    </div> <!-- /container -->


                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href="customer-register.php"><strong>Register now</strong></a>! It is easy!</p>

                </div>
            </div>
        </div>
        </div>

    <!-- *** LOGIN FORM END *** -->

    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <?php if (login_check($mysqli) == true) : ?>
                    <h1>You're already signed up, Yay!</h1>

                    <?php else : ?>
                    <h1>New account / Sign in</h1>
                    <?php endif; ?>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li>New account / Sign in</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <center><div id="content">
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <div class="container">

            <div class="row">

                <div class="box">

                    <?php if (login_check($mysqli) == true) : ?>

                    <img src="https://ih0.redbubble.net/image.513707611.9778/flat,800x800,075,f.jpg" alt="face" style="width:200px;height:200px;">

                    <?php else : ?>


                    <h2 class="text-uppercase">New account</h2>

                    <p class="lead">Not our registered customer yet?</p>

                    <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>
                    <ul>
                        <p>Usernames may contain only digits, upper and lowercase letters and underscores</p>
                        <p>Emails must have a valid email format</p>
                        <p>Passwords must be at least 6 characters long</p>
                        <p>Passwords must contain
                        </p>
                        <p>At least one uppercase letter (A..Z)</p>
                        <p>At least one lowercase letter (a..z)</p>
                        <p>At least one number (0..9)</p>
                    </ul>
                </div>
                <p>Your password and confirmation must match exactly</p>

                <hr>


                <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">

                    Username: <input type='text' name='username' id='username' />
                    <br>
                    Email: <input type="text" name="email" id="email" />
                    <br>
                    Password: <input type="password" name="password"  id="password"/>
                    <br>
                    Confirm password: <input type="password" name="confirmpwd" id="confirmpwd" />
                    <br>
                    <input type="submit" value="Register" class="btn btn-default" onclick="regformhash(this.form,this.form.username,this.form.email,this.form.password,this.form.confirmpwd);"/> 
                </form>
            </div>
            <?php endif; ?>


        </div>
        <!-- /.row -->

        </div></center>
    <!-- /.container -->

    <!-- /#content -->



    <!-- *** FOOTER ***
_________________________________________________________ -->

    <footer id="footer">
        <div class="container">
            <div class="col-md-3 col-sm-6">
                <h4>About us</h4>

                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                <hr>

                <h4>Join our monthly newsletter</h4>

                <form>
                    <div class="input-group">

                        <input type="text" class="form-control">

                        <span class="input-group-btn">

                            <button class="btn btn-default" type="button"><i class="fa fa-send"></i></button>

                        </span>

                    </div>
                    <!-- /input-group -->
                </form>

                <hr class="hidden-md hidden-lg hidden-sm">

            </div>
            <!-- /.col-md-3 -->



            <div class="col-md-3 col-sm-6">

                <h4>Contact</h4>

                <p><strong>GreenBear's PC</strong>
                    <br>123 Fake Place
                    <br>Random Address
                    <br>WS1 4HP
                    <br>England
                    <br>
                    <strong>Great Britain</strong>
                </p>

                <a href="contact.html" class="btn btn-small btn-main">Go to contact page</a>

                <hr class="hidden-md hidden-lg hidden-sm">

            </div>
            <!-- /.col-md-3 -->



            <div class="col-md-3 col-sm-6">


            </div>
            <!-- /.col-md-3 -->
        </div>
        <!-- /.container -->
    </footer>
    <!-- /#footer -->

    <!-- *** FOOTER END *** -->

    <!-- *** COPYRIGHT ***
_________________________________________________________ -->


    <!-- /#all -->


    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>
    <script type="js/JavaScript" src="js/sha512.js"></script> 
    <script type="js/JavaScript" src="js/forms.js"></script>





    </body>

</html>