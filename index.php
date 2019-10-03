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
        <title>Welcome to GreenBear's PC Store</title>

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
                                                            <li><a href="about.html">Features</a>
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

                                }
                                ?></center>
                        </div>	

                    </div> <!-- /container -->


                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href="customer-register.php"><strong>Register now</strong></a>! It is easy!</p>

                </div>
            </div>
        </div>


        <!-- *** LOGIN FORM END *** -->


        <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

		<section>
            <div class="home-carousel">

                <div class="dark-mask"></div>

                <div class="container">
                    <div class="homepage owl-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                    <p>
                                        <img src="img/background/logo.png" alt="">
                                    </p>
                                    <h1>The best place for all your computer products</h1>
                                </div>
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="img/slideshow/ssimg1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">

                                <div class="col-sm-7 text-center">
                                    <img class="img-responsive" src="img/slideshow/ssimg2.png" alt="">
                                </div>

                                <div class="col-sm-5">
                                    <h2>Guaranteed lower prices across all parts</h2>
                                    <ul class="list-style-none">
                                        <li>Cheapest computer components on the market</li>
                                        <li>We are basically giving them away</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                    <h1>Sale now on</h1>
                                    <ul class="list-style-none">
                                        <li>95% price cut on selected SSD's</li>
                                        <li>99% price cut on LED's</li>
                                        <li>A massive 1% price cut on Nvidia Products</li>
                                    </ul>
                                </div>
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="img/slideshow/ssimg3.png" alt="">
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <!-- /.project owl-slider -->
                </div>
            </div>

            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>


        <div class="container">
            <h1>Products</h1>

            <!-- Product display. Gets all the items in "products" and limites to 10 items -->
            <div id="products" class="row list-group">
                <?php
                //get rows query
                $query = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");
                if($query->num_rows > 0){ 
                    while($row = $query->fetch_assoc()){
                ?>
                <center><div class="item col-lg-10">
                    <div class="thumbnail">
                        <img src="<?php echo $row["picture"]; ?>">

                        <div class="caption">
                            <!-- shows name of item -->
                            <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>

                            <!-- shows item description -->
                            <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                            <div class="row">

                                <!-- shows item price -->
                                <div class="col-md-6">
                                    <p class="lead"><?php echo '£'.$row["price"].'GBP'; ?></p>
                                </div>
                                <div class="col-md-6">

                                    <!-- checks if logged in. If true show add to cart if false show sign in -->
                                    <?php if (login_check($mysqli) == true) : ?>
                                    <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add to cart</a>
                                    <?php else : ?>
                                    <a class="btn btn-success" href="customer-register.php">Login</a>
                                    <?php endif; ?>


                                </div>
                            </div>
                        </div>
                    </div>
                    </div></center>
                <!-- if no items are in database, display message -->
                <?php } }else{ ?>
                <p>Product(s) not found.....</p>
                <?php } ?>
            </div>
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

        <section class="bar background-white no-mb">
            <div class="container">

                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Read Our Reviews</h2>
                    </div>

                    <p class="lead">We here at GreenBear's PC, pride ourselves on what you say about us. Here are some of our favorite reviews.
                    </p>

                    <!-- *** review HOMEPAGE ***
_________________________________________________________ -->

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text review">
                                <div class="top">
                                    <div class="image">
                                        <img src="img/review/cj.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="blog-post.html" class="btn btn-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="blog-post.html">Nvidia GTX 1080</a></h4>
                                    <p class="author-category">By <a href="#">Cameron Evans</a> Published <a href="blog.html">GreenBear's PC Review</a>
                                    </p>
                                    <p class="intro">"It's one of the top end websites for buying components."</p>
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-main">Full Review</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="img/review/vic.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="blog-post.html" class="btn btn-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="blog-post.html">Corsair h440i</a></h4>
                                    <p class="author-category">By <a href="#">Thomas Ali</a> Published <a href="blog.html">GreenBear's Review</a>
                                    </p>
                                    <p class="intro">"I've used GreenBear's PC store for years and I've always found what I needed"</p>
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-main">Full review</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="img/review/dan.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="blog-post.html" class="btn btn-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="blog-post.html">AMD Ryzen</a></h4>
                                    <p class="author-category">By <a href="#">Dan Evans</a> Published <a href="blog.html">GreenBear's PC Review</a>
                                    </p>
                                    <p class="intro">"What can I say? It's the best place for PC parts on the web."</p>
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-main">Full Review</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="img/review/rhi.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="blog-post.html" class="btn btn-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="blog-post.html">Asus X99</a></h4>
                                    <p class="author-category">By <a href="#">Rhianne Bagley</a> Published <a href="blog.html">GreenBear's Review</a>
                                    </p>
                                    <p class="intro">"Best place ever! Cheap deals and have best customer service I've ever seen."</p>
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-main">Full review</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->

                        </div>

                    </div>
                    <!-- /.row -->

                    <!-- *** Review HOMEPAGE END *** -->

                </div>

            </div>
            <!-- /.container -->
        </section>
        <!-- /.bar -->

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
                                <img src="img/suppliers/nvidialogo.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/suppliers/amd%20logo.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/suppliers/intel%20logo.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/suppliers/corsair%20logo.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/suppliers/razerlogo.png" alt="" class="img-responsive">
                            </li>
                            <li class="item">
                                <img src="img/suppliers/asuslogo.png" alt="" class="img-responsive">
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

                    <a href="contact.html" class="btn btn-small btn-main">Go to contact page</a>

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