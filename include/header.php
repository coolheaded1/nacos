 <!--== Header Area Start ==-->
<!-- == loader starts here == -->
<div class='loader-container'>
	<div class="loader-content">
	   <span class='modal-loader'></span>
	</div>
</div>
<!-- == loader ends here == -->
<!--== Header Area Start ==-->
 <header id="header-area">
    <div class="preheader-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-7 col-7">
                    <div class="preheader-left">
                        <a href="mailto: info@nacos.org.ng"><strong>Email:</strong> info@nacos.org.ng</a>
                        <a href="tel:+234 809 246 1400"><strong>Hotline:</strong> +234 809 246 1400</a>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-5 col-5 text-right">
                    <div class="preheader-right">
                        <!-- <a title="Login" class="btn-auth btn-auth-rev" href="register.php">Login</a> -->
                        <a title="Register" class="btn-auth btn-auth" href="register.php"><i class="fa fa-graduation-cap" ></i> Member Portal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom-area" id="fixheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-menu navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/NACOSS site.png" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="menucontent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item <?php echo ($page == "home" ? "active" : "")?>"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="about.php" data-toggle="dropdown" role="button">About</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item <?php echo ($page == "about" ? "active" : "")?>"><a class="nav-link" href="about.php">Association</a></li>
                                        <li class="nav-item <?php echo ($page == "executive" ? "active" : "")?>"><a class="nav-link" href="executive.php">National Executive</a></li>
                                        <li class="nav-item <?php echo ($page == "boards" ? "active" : "")?>"><a class="nav-link" href="boards.php">National Advisory Board</a></li>
                                        <li class="nav-item <?php echo ($page == "pastPreidents" ? "active" : "")?>"><a class="nav-link" href="pastPreidents.php">Past National President</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item <?php echo ($page == "event" ? "active" : "")?>"><a class="nav-link" href="event.php">Event</a></li>
                                <li class="nav-item <?php echo ($page == "gallery" ? "active" : "")?>"><a class="nav-link" href="gallery.php">Gallery</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="member.php" data-toggle="dropdown" role="button">Links</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item <?php echo ($page == "member" ? "active" : "")?>"><a class="nav-link" href="member.php">Members Directory</a></li>
                                        <li class="nav-item"><a class="nav-link" href="chapter.php">New Chapter Registration</a></li>
                                        <li class="nav-item"><a class="nav-link" href="dues.php">Annual Chapter Dues</a></li>
                                        <li class="nav-item"><a class="nav-link" href="boards.php">Member Welfare Scheme</a></li>
                                        <li class="nav-item"><a class="nav-link" href="updates.php">NACOS Updates</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item <?php echo ($page == "accounts" ? "active" : "")?>"><a class="nav-link" href="register.php">Accounts</a></li>
                                <li class="nav-item <?php echo ($page == "contact" ? "active" : "")?>"><a class="nav-link" href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--== Header Area End ==-->