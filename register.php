<?php include "include/og_graph.php"; $page="accounts"; ?>
<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/vendor/navbar/bootstrap-4-navbar.css" />

<!--Animate css -->
<link rel="stylesheet" href="assets/vendor/animate/animate.css" media="all" />

<!-- FONT AWESOME CSS -->
<link rel="stylesheet" href="assets/vendor/fontawesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!--owl carousel css -->
<link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css" media="all" />

<!--Magnific Popup css -->
<link rel="stylesheet" href="assets/vendor/magnific/magnific-popup.css" media="all" />

<!--Nice Select css -->
<link rel="stylesheet" href="assets/vendor/nice-select/nice-select.css" media="all" />

<!--Offcanvas css -->
<link rel="stylesheet" href="assets/vendor/js-offcanvas/css/js-offcanvas.css" media="all" />

<!-- MODERNIZER  -->
<script src="assets/vendor/modernizr/modernizr-custom.js"></script>

<!-- Main Master Style  CSS  -->
<link id="cbx-style" data-layout="1" rel="stylesheet" href="assets/css/style-default.min.css" media="all" />

</head>
<body>

    <!--[if lt IE 7]>
    <p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started.
        Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
    <![endif]-->

    <!--== Header Area Start ==-->
    <?php include "include/header.php" ?>
    <!--== Header Area End ==-->
    <!-- == the loader durinh submit -->
    <div id="overlay-spiner">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>
    <!-- == the loader durinh submit -->
    <!--== Page Title Area Start ==-->
    <section  class="contact_img" id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">Membership Form</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
    <!-- alert area -->


    <!--== Register Page Content Start ==-->
    <section id="page-content-wrap">
        <div class="register-page-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="register-page-inner">
                            <div class="col-lg-10 m-auto">
                                <div class="register-form-content">
                                    <div class="row">
                                        <!-- Signin Area Content Start -->
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <div class="display-table">
                                                <div class="display-table-cell">
                                                    <div class="signin-area-wrap">
                                                        <h4>Already a Member?</h4>
                                                        <div class="sign-form">
                                                            <form action="verify.php?func=Lkwmd&ColID=<?php echo microtime(); ?>" method="POST">
                                                                <input type="email" name="email" placeholder="Enter your Email">
                                                                <input type="password" name="password" placeholder="Password">
                                                                <button type="submit" class="btn btn-reg">Login</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Signin Area Content End -->

                                        <!-- Regsiter Form Area Start -->
                                        <div class="col-lg-7 col-md-6 ml-auto">
                                            <div class="register-form-wrap">
                                                <h3>registration Form</h3>
                                                <div class="register-form">
                                                    <form action="include/handler.php?params=RegSubmit" method="POST" id="registerFor" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_name">SurName</label>
                                                                    <input type="text" class="form-control" id="register_name" name="register_name" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_fname">FirstName</label>
                                                                    <input type="text" class="form-control" id="register_fname" name="register_fname" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_mname">MiddleName</label>
                                                                    <input type="text" class="form-control" id="register_mname" name="register_mname" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_email">Email</label>
                                                                    <input type="email" class="form-control" id="register_email" name="register_email" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_password">Password</label>
                                                                    <input type="password" class="form-control" id="register_password" name="register_password" />
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_Cpassword">Confirm Password</label>
                                                                    <input type="password" class="form-control" id="register_Cpassword" name="register_Cpassword" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12" ><span id="alertMSG" ></span></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="gender form-group">
                                                                    <label class="g-name d-block">Gender</label>
                                                                    <div class="custom-control custom-radio custom-control-inline">
                                                                        <input type="radio" id="register_gender_male" name="register_gender" value="male" class="custom-control-input" />
                                                                        <label class="custom-control-label" for="register_gender_male">Male</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio custom-control-inline">
                                                                        <input type="radio" id="register_gender_female" name="register_gender" value="female" class="custom-control-input">
                                                                        <label class="custom-control-label" for="register_gender_female">Female</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="register_deptno">Phone No</label>
                                                                    <input type="text" class="form-control" id="register_deptno" name="register_deptno" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group file-input">
                                                            <input type="file" name="register_file" id="customfile" class="d-none" accept=".jpg,.png,.gif,.jpeg" required />
                                                            <label class="custom-file" for="customfile"><i class="fa fa-upload"></i>Upload Your Photo <span class="text-danger">Max 2MB</span></label>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row" >
                                                                <div class="custom-control custom-checkbox col-sm-8" style="padding-left:20px;">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                    <label class="custom-control-label" for="customCheck1"> I have read and agree to the <a href="">NACOS</a> Terms of Membership</label>
                                                                </div>
                                                                <input type="submit" class="btn btn-reg " style="float:right !important;" value="Registration" id="reg_  stud">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Regsiter Form Area End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Register Page Content End ==-->

    <!--== Footer Area Start ==-->
    <?php include "include/footer.php" ?>
    <!--== Scroll Top ==-->

    <!-- SITE SCRIPT  -->

    <!-- Jquery JS  -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>

    <!-- POPPER JS -->
    <script src="assets/vendor/bootstrap/js/popper.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/navbar/bootstrap-4-navbar.js"></script>

    <!--owl-->
    <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>

    <!--Waypoint-->
    <script src="assets/vendor/waypoint/waypoints.min.js"></script>

    <!--CounterUp-->
    <script src="assets/vendor/counterup/jquery.counterup.min.js"></script>

    <!--isotope-->
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>

    <!--magnific-->
    <script src="assets/vendor/magnific/jquery.magnific-popup.min.js"></script>

    <!--Smooth Scroll-->
    <script src="assets/vendor/smooth-scroll/jquery.smooth-scroll.min.js"></script>

    <!--Jquery Easing-->
    <script src="assets/vendor/jquery-easing/jquery.easing.1.3.min.js"></script>

    <!--Nice Select -->
    <script src="assets/vendor/nice-select/jquery.nice-select.js"></script>

    <!--Jquery Valadation -->
    <script src="assets/vendor/validation/jquery.validate.min.js"></script>
    <script src="assets/vendor/validation/additional-methods.min.js"></script>

    <!--off-canvas js -->
    <script src="assets/vendor/js-offcanvas/js/js-offcanvas.pkgd.min.js"></script>

    <!-- Countdown -->
    <script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
    <?php include "include/js_file.php" ?>
    <!-- custom js: main custom theme js file  -->
    <script src="assets/js/theme.min.js"></script>
    <!-- custom js: custom js file is added for easy custom js code  -->
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">
    // showAlert('successMine','Error Information', 'i am testing to be sure it works', '2200');
    // showAlert();
</script>
</body>
</html>
