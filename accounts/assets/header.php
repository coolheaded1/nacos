</head>
<body>

	<header class="header clearfix">
		<button type="button" id="toggleMenu" class="toggle_menu" style="background-color: #048c0b !important;">
			<i class='uil uil-bars' ></i>
		</button>
		<button id="collapse_menu" class="collapse_menu">
			<i class="uil uil-bars collapse_menu--icon "></i>
			<span class="collapse_menu--label"></span>
		</button>
		<div class="main_logo" id="logo">
			<a href="index.html"><img src="../assets/img/NACOSS site.png" width="100px" alt=""></a>
			<a href="index.html"><img class="logo-inverse" src="../assets/img/NACOSS site.png" width="100px;" alt=""></a>
		</div>
		<div class="search120">
			<div class="ui search">
				<div class="ui left icon input swdh10">
					<input class="prompt srch10" type="text" placeholder="Search for Tuts Videos, Tutors, Tests and more..">
					<i class='uil uil-search-alt icon icon1'></i>
				</div>
			</div>
		</div>
		<div class="header_right">
			<ul>
				<li>
					<a href="" class="upload_btn">Student Dashboard</a>
				</li>
				<li class="ui dropdown">
					<a href="logout.php" class="option_links"><i class='fas fa-power-off'></i><span class=""></span></a>
					
				</li>
				<li class="ui dropdown">
					<a href="index.html#" class="option_links"><i class='uil uil-bell'></i><span class="noti_count">3</span></a>
					<div class="menu dropdown_mn">
						<a href="index.html#" class="channel_my item">
							<div class="profile_link">
								<img src="images/left-imgs/img-1.jpg" alt="">
								<div class="pd_content">
									<h6>Rock William</h6>
									<p>Like Your Comment On Video <strong>How to create sidebar menu</strong>.</p>
									<span class="nm_time">2 min ago</span>
								</div>
							</div>
						</a>
						<a href="index.html#" class="channel_my item">
							<div class="profile_link">
								<img src="images/left-imgs/img-2.jpg" alt="">
								<div class="pd_content">
									<h6>Jassica Smith</h6>
									<p>Added New Review In Video <strong>Full Stack PHP Developer</strong>.</p>
									<span class="nm_time">12 min ago</span>
								</div>
							</div>
						</a>
						<a href="index.html#" class="channel_my item">
							<div class="profile_link">
								<img src="images/left-imgs/img-9.jpg" alt="">
								<div class="pd_content">
									<p> Your Membership Approved <strong>Upload Video</strong>.</p>
									<span class="nm_time">20 min ago</span>
								</div>
							</div>
						</a>
						<a class="vbm_btn" href="instructor_notifications.html">View All <i class='uil uil-arrow-right'></i></a>
					</div>
				</li>
				<li class="ui dropdown">
					<a href="index.html#" class="opts_account">
						<img src="images/hd_dp.jpg" alt="">
					</a>
					<div class="menu dropdown_account">
						<div class="channel_my">
							<div class="profile_link">
								<img src="images/hd_dp.jpg" alt="">
								<div class="pd_content">
									<div class="rhte85">
										<h6><?php echo $names ;?></h6>
										<div class="mef78" title="Verify">
											<i class='uil uil-check-circle'></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="night_mode_switch__btn">
							<a href="index.html#" id="night-mode" class="btn-night-mode">
								<i class="uil uil-moon"></i> Night mode
								<span class="btn-night-mode-switch">
									<span class="uk-switch-button"></span>
								</span>
							</a>
						</div>
						<a href="membership.html" class="item channel_item">Paid Memberships</a>
						<a href="logout.php" class="item channel_item">Sign Out</a>
					</div>
				</li>
			</ul>
		</div>
	</header>


	<nav class="vertical_nav">
		<div class="left_section menu_left" id="js-menu">
			<div class="left_section">
				<ul>
					<li class="menu--item">
						<a href="index.php" class="menu--link active" title="Home">
							<i class='uil uil-home-alt menu--icon'></i>
							<span class="menu--label">Dashboard</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="" class="menu--link" title="Live Streams">
							<i class='uil uil-kayak menu--icon'></i>
							<span class="menu--label">Event Registration</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="" class="menu--link" title="Explore">
							<i class='uil uil-search menu--icon'></i>
							<span class="menu--label">IT/Siwess Placements</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="" class="menu--link" title="Liked Courses">
							<i class='uil uil-thumbs-up menu--icon'></i>
							<span class="menu--label">Scholaships</span>
						</a>
					</li>
					<li class="menu--item  menu--item__has_sub_menu">
						<label class="menu--link" title="Tests">
							<i class='uil uil-clipboard-alt menu--icon'></i>
							<span class="menu--label">Professional Membership <br>Registration</span>
						</label>
						<ul class="sub_menu">
							<li class="sub_menu--item">
								<a href="certification_center.html" class="sub_menu--link">Certification Center</a>
							</li>
							<li class="sub_menu--item">
								<a href="certification_start_form.html" class="sub_menu--link">Certification Fill Form</a>
							</li>
							<li class="sub_menu--item">
								<a href="certification_test_view.html" class="sub_menu--link">Test View</a>
							</li>
							<li class="sub_menu--item">
								<a href="certification_test__result.html" class="sub_menu--link">Test Result</a>
							</li>
							<li class="sub_menu--item">
								<a href="http://www.gambolthemes.net/html-items/edututs+/Instructor_Dashboard/my_certificates.html" class="sub_menu--link">My Certification</a>
							</li>
						</ul>
					</li>
					<li class="menu--item">
						<a href="history.html" class="menu--link" title="History">
							<i class='uil uil-history menu--icon'></i>
							<span class="menu--label">Profesional Exams</span>
						</a>
					</li>
					<li class="menu--item  menu--item__has_sub_menu">
						<label class="menu--link" title="Pages">
							<i class='uil uil-file menu--icon'></i>
							<span class="menu--label">Evoting</span>
						</label>
						<ul class="sub_menu">
							<li class="sub_menu--item">
								<a href="about_us.html" class="sub_menu--link">About</a>
							</li>
							<li class="sub_menu--item">
								<a href="sign_in.html" class="sub_menu--link">Sign In</a>
							</li>
						</ul>
					</li>
					<li class="menu--item">
						<a href="logout.php" class="menu--link" title="History">
							<i class='fas fa-power-off menu--icon'></i>
							<span class="menu--label">Log Out </span>
						</a>
					</li>
				</ul>
			</div>
			<div class="left_footer">
				
				<div class="left_footer_content">
					<p>© <?php echo date('Y'); ?> <strong>NACOS NATIONAL</strong>. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</nav>