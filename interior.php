<?php
$Page='Home';
$Title='Code St Louis';
$metaDescription='Code St Louis is taking a different approach to scale efficient development teams to support the rapid technology growth in St Louis. ';
$metaImage='/assets/images/meta-codestl-io.PNG';
$ogMetaDescription='Providing St Louis with automation solutions to increase productivity in the work force'
?>
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

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/ars/kitchen-contracting.jpg);">
            <div class="overlay-main bg-black opacity-02"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">Interior Home Improvements</h1>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                    <li>Interior Home Improvement</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <div class="section-full p-t80">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <!--Fade slider-->
                        <div class="owl-carousel about-us-carousel owl-btn-vertical-center owl-dots-bottom-center">

                            <div class="item">
                                <div class="aon-thum-bx">
                                    <img alt="" src="images/Residential/Interior/remodeling.jpg">
                                </div>
                                <div class="wt-info p-tb30">
                                    <h4 class="wt-title m-t0 m-b5"><a href="javascript:void(0);">Remodeling</a>
                                    </h4>
                                    <p>ARS Construction has the eye and passion to take your home to the next level. We
                                        specialize in bathroom & kitchen remodels, room extensions, and add-ons.
                                        Whatever you need we have the skill and experience to make it happen. We use the
                                        most trusted brands and the latest equipment to correctly remodel your home. We
                                        make sure to not cut corners and are always looking for the best methods to
                                        complete your project. Give us a call to get started!
                                    </p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="aon-thum-bx">
                                    <img alt="" src="images/Residential/Interior/Restoration.jpg">
                                </div>
                                <div class="wt-info p-tb30">
                                    <h4 class="wt-title m-t0 m-b5"><a href="javascript:void(0);">Restoration</a>
                                    </h4>
                                    <p>Having your home damaged by water or fire can be devastating. To relieve some
                                        stress call ARS Construction and we will get to work immediately to get your
                                        home back to normal. We make sure to use the latest products to clean out your
                                        home. We make sure to remove any bacteria and ensure that the walls in your home
                                        are dry before we start the re-build. We will also remove all burnt materials
                                        and remove the scent of smoke before the re-build as well. If you have any
                                        questions, one of our knowledgeable team members is ready to assist.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <!--fade slider END-->
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="text-justify">
                            <h2 class="text-uppercase">Interior Home Improvement</h2>
                            <p>Are you needing a change to the inside of your home? Has the interior been damaged from
                                water or fire? If so, ARS Construction is the premier contractor in Eureka and Wildwood,
                                MO. For over 15 years, we have provided our clients with top-quality craftsmanship when
                                it comes to home remodels and restoration. We work quickly and precisely to ensure that
                                your remodel or restoration is done correctly and on time. </p>
                            <p>To schedule your free consultation, give us a call and one of our talented team members
                                will be ready to assist you. We will go over exactly what you are looking for,
                                materials, budgets, and timelines. Together we will come up with a plan and get right to
                                work.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION CONTENT START -->
        <div class="section-full bg-white p-b50">

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
    <div class="modal fade " id="Login-form" role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button class="close" data-dismiss="modal" type="button">&times;</button>
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
                        <button class="site-button-secondry text-uppercase btn-block m-b10" type="button">Submit
                        </button>
                        <span class="font-12">Don't have an account? <a class="text-primary" href="javascript:">Register Here</a></span>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div class="text-center"><img alt="" src="images/logo-dark.png"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL  REGISTER -->
    <div class="modal fade " id="Register-form" role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button class="close" data-dismiss="modal" type="button">&times;</button>
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
                        <button class="site-button-secondry text-uppercase btn-block m-b10" type="button">Submit
                        </button>
                        <span class="font-12">Already Have an Account? <a class="text-primary"
                                                                          href="javascript:">Login</a></span>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div class="text-center"><img alt="" src="images/logo-dark.png"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- firebase scripts -->
<!-- The core Firebase JS SDK is always required and must be listed first -->

<!-- JAVASCRIPT  FILES ========================================= -->
<script src="js/jquery-1.12.4.min.js" type="text/javascript"></script><!-- JQUERY.MIN JS -->
<script src="js/bootstrap.min.js" type="text/javascript"></script><!-- BOOTSTRAP.MIN JS -->

<script src="js/bootstrap-select.min.js" type="text/javascript"></script><!-- FORM JS -->
<script src="js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script><!-- FORM JS -->

<script src="js/magnific-popup.min.js" type="text/javascript"></script><!-- MAGNIFIC-POPUP JS -->

<script src="js/waypoints.min.js" type="text/javascript"></script><!-- WAYPOINTS JS -->
<script src="js/counterup.min.js" type="text/javascript"></script><!--COUNTERUP JS -->
<script src="js/waypoints-sticky.min.js" type="text/javascript"></script><!-- COUNTERUP JS -->

<script src="js/isotope.pkgd.min.js" type="text/javascript"></script><!-- MASONRY  -->

<script src="js/owl.carousel.min.js" type="text/javascript"></script><!-- OWL  SLIDER  -->

<script src="js/stellar.min.js" type="text/javascript"></script><!-- PARALLAX BG IMAGE   -->
<script src="js/scrolla.min.js" type="text/javascript"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script src="js/custom.js" type="text/javascript"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/shortcode.js" type="text/javascript"></script><!-- SHORTCODE FUCTIONS  sw-->


<!-- REVOLUTION JS FILES -->
<script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"
        type="text/javascript"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"
        type="text/javascript"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script src="js/rev-script-4.js" type="text/javascript"></script>

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
