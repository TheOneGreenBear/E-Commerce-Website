<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/contactsave.php';

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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GreenBear's PC Contact</title>

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

            <!-- *** TOP ***
_________________________________________________________ -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                <a href="help.php" class="help-link" title="Help"><i class="glyphicon glyphicon-exclamation-sign"></i></a>
                            </div>

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

        </header>

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
                        <h1>Contact</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container" id="contact">

                <section>

                    <div class="row">
                        <div class="col-md-12">
                            <section>
                                <div class="heading">
                                    <h2>Need Help?</h2>
                                </div>

                                <p class="lead">Need help any an product? Something not working? can;t find an item? This is why we have a conatct page, so you can reach us no matter what.</p>
                                <p>Contact us. We are open 24/7 for you.</p>
                            </section>
                        </div>
                    </div>

                </section>

                

                <section>

                    <div class="row text-center">

                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Contact form</h2>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <form id="contact_form" action="includes/contactsave.php?savedata=1" method="POST" onsubmit="return validateForm();" enctype="multipart/form-data">
                                
                                
                                <div class="row">
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="required" for="name">Your name:</label><br />					
                                            <input  id="name" type="text" name="name" value="" size="30"/><br>
                                            <span id="name_validation" class="error"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                      <label class="required" for="name">Your email:</label><br />					
                                        <input  id="email" type="text" name="email" value="" size="30"/><br>
                                        <span id="email_validation" class="error"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                            
                                           <label class="required" for="message">Your message:</label><br />
                                            <textarea name="message" rows="7" cols="30"></textarea>
                                            <span id="message" id="message_validation" class="error"></span>
                                        
                                    </div>
                                    

                                    <div class="col-sm-12 text-center">
                                        <input type="submit" value="Send email" />
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>
                            



                        </div>
                    </div>
                    <!-- /.row -->

                </section>


            </div>
            <!-- /#contact.container -->
        </div>
        <!-- /#content -->

        <div id="map">

        </div>

        
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




    </div>
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






</body>

</html>