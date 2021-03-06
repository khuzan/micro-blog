<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bangtan Sonyeondan</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <!-- Font awesome CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
    <!-- Theme CSS -->
    <link href="vendor/css/grayscale.css" rel="stylesheet">
    <!-- fancybox CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/css/fancybox.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- show hide form -->
    <link href="vendor/css/showhide.css" rel="stylesheet">
     <script src="vendor/js/jquery.min.js"></script>
    <script src="vendor/js/showhide.js"></script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i><img src="vendor/img/bts.png"></i> <span class="light">BANGTAN </span>SONYEONDAN
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <!-- <li>
                        <a class="page-scroll" href="#page-top">HOME</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="#about"><b>About</b></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#gallery"><b>Gallery</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    <!-- form -->
                        <div id="main">
                        <!-- Create Div First For Login Form -->
                        <div id="first">
                            <form method="POST" action="method/process/login.php" id="login-form">
                                <input id="loginemail" placeholder="Email" type="text" name="email">
                                <span id="check-e"></span>
                                <input id="loginpassword" placeholder="Password" type="password" name="password">
                                <span id="check-e"></span>
                                <input id="login" name="btn_login" type="submit" value="Sign In">
                                    <p id="two">Don't have account? <a class="signup" href="#" id="signup">Sign up here</a></p>
                            </form>
                        </div>
                        <!-- Create Div Second For Signup Form-->
                        <div id="second">
                            <form id="form">
                                <h2>REGISTRATION FORM</h2>
                                    <input id="name" placeholder="Username" type="text">
                                    <input id="registeremail" placeholder="Email" type="text">
                                    <input id="registerpassword" placeholder="Password" type="password">
                                    <input id="contact" placeholder="Contact Number" type="text">
                                    <input id="register" type="button" value="Create your account">
                                    <p id="two">Already have an account? <a class="signin" href="#" id="signin">Sign in</a></p>
                            </form>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 background-text" >
                    <h1 class="title">About US</h1>
                    <hr class="linya">
                   <!--  <span>YOUTUBE.</span>
                    <span>FACEBOOK.</span>
                    <span>INSTAGRAM.</span>-->
                <p class="justify">A comprehensive updates portal dedicated to the popular boy group named
                BTS of Big Hit Entertainment. Sign up to follow the blog and be updated of new posts like latest articles, translations of online posts and comments related to BTS.</p>
            </div>
        </div>
    </section>
    <!-- gallery section -->
    <section id="gallery" class="container gallery-section text-center">
            <h1 class="title">Our Gallery</h1>
            <hr class="linya">
        <div class="container gal-container">
            <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
              <div class="box">
                <a href="#" data-toggle="modal" data-target="#1">
                  <img src="vendor/img/bg.jpg">
                </a>
                <div class="modal fade" id="1" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <div class="modal-body">
                        <img src="vendor/img/bg.jpg">
                      </div>
                        <div class="col-md-12 description">
                          <h4>This is the first one on my Gallery</h4>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
              <div class="box">
                <a href="#" data-toggle="modal" data-target="#2">
                  <img src="vendor/img/ssx1.jpg">
                </a>
                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <div class="modal-body">
                        <img src="vendor/img/ssx1.jpg">
                      </div>
                        <div class="col-md-12 description">
                          <h4>This is the second one on my Gallery</h4>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
              <div class="box">
                <a href="#" data-toggle="modal" data-target="#3">
                  <img src="vendor/img/ssx2.jpg">
                </a>
                <div class="modal fade" id="3" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <div class="modal-body">
                        <img src="vendor/img/ssx2.jpg">
                      </div>
                        <div class="col-md-12 description">
                          <h4>This is the third one on my Gallery</h4>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
              <div class="box">
                <a href="#" data-toggle="modal" data-target="#4">
                  <img src="vendor/img/ssx3.jpg">
                </a>
                <div class="modal fade" id="4" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <div class="modal-body">
                        <img src="vendor/img/ssx3.jpg">
                      </div>
                        <div class="col-md-12 description">
                          <h4>This is the fourth one on my Gallery</h4>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
              <div class="box">
                <a href="#" data-toggle="modal" data-target="#5">
                  <img src="vendor/img/tae.jpg">
                </a>
                <div class="modal fade" id="5" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <div class="modal-body">
                        <img src="vendor/img/tae.jpg">
                      </div>
                        <div class="col-md-12 description">
                          <h4>This is the fifth one on my Gallery</h4>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
              <div class="box">
                <a href="#" data-toggle="modal" data-target="#6">
                  <img src="vendor/img/ssx4.png">
                </a>
                <div class="modal fade" id="6" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <div class="modal-body">
                        <img src="vendor/img/ssx4.png">
                      </div>
                        <div class="col-md-12 description">
                          <h4>This is the sixth one on my Gallery</h4>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
              <div class="box">
                <a href="#" data-toggle="modal" data-target="#7">
                  <img src="vendor/img/ssx5.jpg">
                </a>
                <div class="modal fade" id="7" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <div class="modal-body">
                        <img src="vendor/img/ssx5.jpg">
                      </div>
                        <div class="col-md-12 description">
                          <h4>This is the seventh one on my Gallery</h4>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
              <div class="box">
                <a href="#" data-toggle="modal" data-target="#8">
                  <img src="vendor/img/ssx.jpg">
                </a>
                <div class="modal fade" id="8" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <div class="modal-body">
                        <img src="vendor/img/ssx.jpg">
                      </div>
                        <div class="col-md-12 description">
                          <h4>This is the eighth one on my Gallery</h4>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p class="social">
                <span><a href="#">BLOG</a></span>
                <span><a href="#">INSTAGRAM</a></span>
                <span><a href="#">TWITTER</a></span>
                <span><a href="#">YOUTUBE</a></span>
                <span><a href="#">FACEBOOK</a></span>
            </p>
            <p><img src="vendor/img/logo-footer.png"></p>
            <p><b>
                <span>B</span>
                <span>T</span>
                <span>S</span>
                <p>~ YOU NEVER WALK ALONE ~</p>
            </b></p>
            <p>Copyright &copy; 2017 Bangtan Sonyeondan</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/js/jquery.easing.min.js"></script>

    <script src="vendor/js/jquery.validate.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="vendor/js/grayscale.min.js"></script>

    <!-- show/hide js form -->
   
</body>

</html>
