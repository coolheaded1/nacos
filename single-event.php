
<?php include "include/og_graph.php";$page="Event Details";  ?>
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
<!-- <link rel="stylesheet" href="assets/css/select2.min.css" media="all" /> -->

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


    <?php 
                        
        include "accounts/assets/connect2.php";
        $eventid=$_GET['eventid'];
        $query=mysqli_query($connect,"SELECT * FROM event WHERE id='$eventid'");
        $row=mysqli_fetch_array($query);
        
    ?>
<!--== Gallery Page Content Start ==-->
<section id="page-content-wrap">
    <div class="single-event-page-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-event-details">
                        <div class="event-thumbnails">
                            <div class="event-thumbnail-carousel owl-carousel">
                                <div class="event-thumb-item event-thumb-img-1" style="background-image: url(assets/<?= $row['images']?>);">
                                    <div class="event-meta">
                                        <h3><?= $row['title']?></h3>
                                        <a class="event-address" href="single-event.html#"><i class="fa fa-map-marker pr-2"></i> <?= $row['venue']?></a>
                                        <a href="accounts/event.php" class="btn btn-brand btn-join">Join</a>
                                    </div>
                                </div>
                            </div>
                            <div class="event-countdown">
                                <div class="event-countdown-counter" data-date="<?= $row['date']?>"></div>
                                <p>Remaining</p>
                            </div>
                        </div>
                        <h2>Details all Thing About This Event</h2>
                        <p><?= $row['description']?></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Gallery Page Content End ==-->

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
<!-- <script src="assets/js/select2.min.js.full.min.js"></script> -->

<!-- custom js: main custom theme js file  -->
<script src="assets/js/theme.min.js"></script>
<?php include "include/js_file.php"; ?>
<!-- custom js: custom js file is added for easy custom js code  -->
<script src="assets/js/custom.js"></script>
</body>
</html>
