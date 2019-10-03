<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/shoppingcartdbconnect.php';

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
		<!-- Login scripts -->
		<script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
		
    
	<!-- Title -->
    <title>Help menu</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
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

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="index.php">
                                <img src="img/background/logo.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="img/background/logo.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Home</span>
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
                                                            <li><a href="#">Features</a>
                                                            </li>
                                                            <li><a href="index.php">Sign in</a>
                                                            </li>
                                                            <li><a href="customer-register.php">register</a>
                                                            </li>
                                                            <li><a href="customer-order.php">cart</a>
                                                            </li>
                                                        </ul>
                                                        <h5>Contact</h5>
                                                        <ul>
                                                            <li><a href="contact.php">Contact</a>
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

		
        <div class="container">
  <h2>Help</h2>
  <div class="well well-lg">Login: To login, simpy click the "login" button on the top right of the page.</div>
            
            <div class="well well-lg">Register: To register, simpy click the "Register" button on the top right of the page. This will take you to a new page where you can register.</div>
            
                <div class="well well-lg">Logout: to logout, press the "logout" button when logged in</div>
                    
                    <div class="well well-lg">Adding items: To add an item to your cart, you must sign in first. Once signed in the "Sign in" button will now be a "Add to cart" button. Once you press this, you will be taken to a new page with your cart, to return the the cart again, either add a new item or press the cart symbol at the top right of the header.</div>
                    
                        <div class="well well-lg">Removing item: To remove an item from the cart, just simply press the red bin, a message will appear asking if you'd likw to do this, press "Yes" and the item will be removed.</div>
            
                            <div class="well well-lg">Contact: To contact us, go to the contact page and enter your name, email and message and hit send. You wil get a message saying that the message was sent.</div>
            
                                
</div>
       

        

        
        <section class="bar background-image-fixed-2 no-mb color-white text-center">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="icon icon-lg"><i class="fa fa-file-code-o"></i>
                        </div>
                        <h3 class="text-uppercase">See our whole collection of PC components</h3>
                        <p class="lead">We have a wide selection of pre bulid computers for people that are a novice.</p>
                        <p class="text-center">
                            <a href="index.php" class="btn btn-transparent-black btn-lg">Check out the products page.</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>

        

		<!-- who we work with container -->
        <section class="bar background-gray no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>Who we work with?</h2>
                        </div>

                        <ul class="owl-carousel customers">
                            <li class="item">
                                <img src="img/nvidialogo.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/amd%20logo.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/intel%20logo.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/corsair%20logo.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/razerlogo.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/asuslogo.png" alt="" class="img-responsive">
                            </li>
                        </ul>
                        <!-- /.owl-carousel -->
                    </div>

                </div>
            </div>
        </section>


      
        <!-- *** FOOTER ***
_________________________________________________________ -->

        <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>About us</h4>

                    <p>We started as small PC buliding site with little funding. After years of building the best PC's we pushed in to the market by selling PC components.</p>

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

                    <a href="contact.php" class="btn btn-small btn-main">Go to contact page</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->



                
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

    
        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2017. GreenBearPC / Scott Greenhill</p>

                </div>
            </div>
        </div>



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

    

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>



</body>

</html>