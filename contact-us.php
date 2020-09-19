<!DOCTYPE html>

<html lang="en">

<head>
    <?php include_once ('includes/head.php'); ?>

</head>

<body>

<div class="page-wraper">

    <!-- HEADER START -->
    <header class="site-header header-style-6">
        <?php include_once ('includes/header.php'); ?>
        <?php include_once ('includes/sub-header.php'); ?>
        <?php include_once ('includes/nav.php'); ?>

    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <div class="page-content">

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">

                <!-- CONTACT DETAIL BLOCK -->
                <div class="section-content m-b30">

                    <div class="row">

                        <div class="col-md-4 col-sm-12 m-b30">
                            <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                <div class="icon-sm text-white m-b10"><i class="iconmoon-smartphone-1"></i></div>
                                <div class="icon-content">
                                    <h5 class="text-white">Phone Number</h5>
                                    <p class="text-gray-dark">(844) 455 ROOF</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 m-b30">
                            <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                <div class="icon-sm text-white m-b10"><i class="iconmoon-email"></i></div>
                                <div class="icon-content">
                                    <h5 class="text-white">Email Address</h5>
                                    <p class="text-gray-dark">ARSOffice@advancedroofsys.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 m-b30">
                            <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                                <div class="icon-sm text-white m-b10"><i class="iconmoon-travel"></i></div>
                                <div class="icon-content">
                                    <h5 class="text-white">Address Info</h5>
                                    <p class="text-gray-dark">16943 Manchester Rd, Wildwood, MO 63040</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- GOOGLE MAP & CONTACT FORM -->
                <div class="section-content m-b50">
                    <div class="row">

                        <!-- LOCATION BLOCK-->
                        <div class="wt-box col-md-6">

                            <h4 class="text-uppercase">Location</h4>
                            <div class="wt-separator-outer m-b30">
                                <div class="wt-separator style-square">
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                                </div>
                            </div>


                            <div class="gmap-outline m-b30">
                                <div id="gmap_canvas" class="google-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3119.1504289015606!2d-90.63833758429583!3d38.57638357962134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d929cad4850d5f%3A0x6456f1d50b5fad80!2sARS%20Construction!5e0!3m2!1sen!2sus!4v1598477716387!5m2!1sen!2sus" width="500" height="300 frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                            </div>

                        </div>

                        <!-- CONTACT FORM-->
                        <div class="wt-box col-md-6">

                            <h4 class="text-uppercase">Contact Form </h4>
                            <div class="wt-separator-outer m-b30">
                                <div class="wt-separator style-square">
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                                </div>

                            </div>

                            <div class="p-a30 bg-gray">

                                <form class="cons-contact-form" method="post" action="form-handler.php">

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input name="username" type="text" required class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                    <textarea name="message" rows="1" class="form-control " required placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button name="submit" type="submit" value="Submit" class="site-button  m-r15">Submit  <i class="fa fa-angle-double-right"></i></button>
                                            <button name="Resat" type="reset" value="Reset"  class="site-button " >Reset  <i class="fa fa-angle-double-right"></i></button>
                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- SECTION CONTENT END -->

    </div>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    <footer class="site-footer footer-dark">
        <?php include_once ('includes/footer.php'); ?>
        <!-- FOOTER COPYRIGHT -->
        <?php include_once ('includes/sub-footer.php'); ?>
    </footer>
    <!-- FOOTER END -->


    <!-- SCROLL TOP BUTTON -->
    <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>

    <!-- MODAL  LOGIN -->
    <div id="Login-form" class="modal fade " role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-white">Login Your Account</h4>
                </div>
                <div class="modal-body p-a30">
                    <form id="log-form">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" placeholder="Enter Username" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" placeholder="Enter email" type="email">
                            </div>
                        </div>
                        <button type="button" class="site-button-secondry text-uppercase btn-block m-b10">Submit</button>
                        <span class="font-12">Don't have an account? <a href="javascript:;" class="text-primary">Register Here</a></span>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div class="text-center"><img src="images/logo-dark.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL  REGISTER -->
    <div id="Register-form" class="modal fade " role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-white">Register here</h4>
                </div>
                <div class="modal-body p-a30">
                    <form id="reg-form">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" placeholder="Enter Username" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" placeholder="Enter email" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input class="form-control" placeholder="Enter Password" type="email">
                            </div>
                        </div>
                        <button type="button" class="site-button-secondry text-uppercase btn-block m-b10">Submit</button>
                        <span class="font-12">Already Have an Account? <a href="javascript:;" class="text-primary">Login</a></span>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div class="text-center"><img src="images/logo-dark.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- firebase scripts -->
<!-- The core Firebase JS SDK is always required and must be listed first -->

<!-- JAVASCRIPT  FILES ========================================= -->
<script type="text/javascript"  src="js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script type="text/javascript"  src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

<script type="text/javascript"  src="js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script type="text/javascript"  src="js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

<script type="text/javascript"  src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

<script type="text/javascript"  src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script type="text/javascript"  src="js/counterup.min.js"></script><!--COUNTERUP JS -->
<script type="text/javascript"  src="js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

<script type="text/javascript" src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

<script type="text/javascript"  src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

<script type="text/javascript"  src="js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
<script type="text/javascript"  src="js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script type="text/javascript"  src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script type="text/javascript"  src="js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  sw-->



<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script type="text/javascript" src="js/rev-script-4.js"></script>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="loader">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->


</body>

</html>

