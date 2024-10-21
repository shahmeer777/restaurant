<?php include 'header.php'; ?>


	<body id="bg" class="box-border m-0 selection:bg-primary selection:text-white font-poppins">

	<!-- Loader -->
	<div id="loading-area" class="loading-page-3 fixed top-0 left-0 w-full h-full z-[999999999] items-center justify-center bg-white " style="display: flex;">
		<img src="assets/images/loading.gif" alt="">
	</div>

	<!-- Pointer ring -->
	<div id="cursor" class="sm:block hidden"></div>
	<div id="cursor-border" class="sm:block hidden"></div>

	<!-- scrolltop-progress -->
	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
	</div>
	<div class="page-wraper">
	
	
	<!-- Header -->
	<header class="site-header main-bar-wraper main-bar-wraper top-0 left-0 w-full z-[999]">
		<div class="main-bar">
			<div class="container">
				<!-- Website Logo -->
				<div class="logo-header w-[180px] h-[64px] items-center relative flex float-left">
					<a href="index.html" class=" pt-[5px] relative logo-white anim-logo-white">
						<img src="assets/images/logo2.png" alt="/" class="lg:w-full sm:w-[165px] w-[150px]">
					</a>
                    <a href="index.html" class="anim-logo logo-black ">
						<img src="assets/images/logo.png" alt="/" class="lg:w-full sm:w-[165px] w-[150px]">
					</a>
				</div>
				
				<!-- Toggle button -->
				<button class="togglebtn lg:hidden block bg-primary w-[45px] h-[45px] relative rounded-md float-right mt-2">
					<span class="bar1"></span>
					<span class="bar2"></span>
					<span class="bar3"></span>
				</button>
				
				<!-- EXTRA NAV -->
				<div class="extra-nav float-right items-center h-[64px] lg:flex relative hidden pl-[70px]">
					<div class="extra-cell flex items-center">
						<ul class="flex items-center gap-[10px]">
							<li class="inline-block">
								<a class="bg-white user-btn white-btn flex items-center justify-center w-[45px] h-[45px] rounded-md shadow-[0_10px_10px_0_rgba(0,0,0,0.1)] text-black2" href="#offcanvasLogin">
									<i class="flaticon-user text-2xl inline-flex"></i>
								</a>
							
							</li>
							<li class="inline-block">
								<button class="cart-btn bg-white white-btn flex items-center justify-center w-[45px] h-[45px] rounded-md shadow-[0_10px_10px_0_rgba(0,0,0,0.1)]">
									<i class="flaticon-shopping-bag-1 text-2xl inline-flex ping-bag-1"></i>
									<span class="badge absolute top-[3px] right-[-6px] p-0 h-5 w-5 font-medium text-xs leading-5 bg-[#666666] text-white rounded-[10px]">6</span>
								</button>
								<ul class="dropdown-menu cart-list mt-2.5">
									<li class="cart-item">
										<div class="media"> 
											<div class="media-left"> 
												<a href="product-detail.html"> 
													<img alt="/" class="media-object" src="assets/images/shop/pic2.jpg"> 
												</a> 
											</div> 
											<div class="media-body"> 
												<h6 class="dz-title"><a href="product-detail.html" class="media-heading">Double Burger</a></h6>
												<span class="dz-price">$28.00</span>
												<span class="item-close">&times;</span>
											</div> 
										</div>
									</li>
									<li class="cart-item">
										<div class="media"> 
											<div class="media-left"> 
												<a href="product-detail.html"> 
													<img alt="/" class="media-object" src="assets/images/shop/pic3.jpg"> 
												</a> 
											</div> 
											<div class="media-body"> 
												<h6 class="dz-title"><a href="product-detail.html" class="media-heading">Cheese Burger</a></h6>
												<span class="dz-price">$20.00</span>
												<span class="item-close">&times;</span>
											</div> 
										</div>
									</li>
									<li class="cart-item">
										<div class="media"> 
											<div class="media-left"> 
												<a href="product-detail.html"> 
													<img alt="/" class="media-object" src="assets/images/shop/pic4.jpg"> 
												</a> 
											</div> 
											<div class="media-body"> 
												<h6 class="dz-title"><a href="product-detail.html" class="media-heading">Burger</a></h6>
												<span class="dz-price">$15.00</span>
												<span class="item-close">&times;</span>
											</div> 
										</div>
									</li>
									<li class="cart-item text-center flex justify-between">
										<h6 class="text-primary mb-0">Total:</h6>
										<h6 class="text-primary mb-0">$63</h6>
									</li>
									<li class="text-center d-flex">
										<a href="shop-cart.html" class="btn btn-primary me-2 w-100 d-block btn-hover-1"><span>View Cart</span></a>
										<a href="our-menu-1.html" class="btn btn-outline w-100 d-block btn-hover-1"><span>Menu</span></a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div> 
				<!-- EXTRA NAV -->
				
				<!-- Header Nav -->
				<div class="header-nav lg:justify-end lg:flex-row flex-col lg:gap-0 gap-5 flex">
					<div class="logo-header lg:hidden">
						<a href="index.html" class="anim-logo">
							<img src="assets/images/logo.png" alt="/">
						</a>
					</div>
					<ul class="nav white navbar-nav navbar lg:flex items-center float-right">
						<li class="sub-menu-down"><a href="javascript:void(0);">Home</a>
							<ul class="sub-menu">
								<li class="py-[5px] px-5 relative"><a href="index.html">Home 01</a></li>
								<li class="py-[5px] px-5 relative"><a href="index-2.html">Home 02</a></li>
								<li class="py-[5px] px-5 relative"><a href="index-3.html">Home 03</a></li>
							</ul>
						</li>
						<li class="has-mega-menu sub-menu-down">
							<a href="javascript:void(0);">Pages</a>
							<ul class="mega-menu sub-menu left-0 p-0 max-w-[1100px] max-xl:max-w-[990px] w-full mx-auto">
								<li><a href="javascript:;">Pages</a>
									<ul class="sub-part lg:mt-[15px]">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="team.html">Team</a></li>
										<li><a href="team-detail.html">Team Detail</a></li>
										<li><a href="testimonial.html">Testimonial</a></li>
									</ul>
								</li>
								<li><a href="javascript:void(0);">Pages</a>
									<ul class="lg:mt-[15px] sub-part">
										<li><a href="services.html">Services</a></li>
										<li><a href="service-detail.html">Service Detail</a></li>
										<li><a href="error-404.html">Error 404</a></li>
										<li><a href="coming-soon.html">Coming Soon</a></li>
										<li><a href="under-maintenance.html">Under Maintenance</a></li>
									</ul>
								</li>
								<li><a href="javascript:void(0);">Our Menus</a>
									<ul class="lg:mt-[15px] sub-part">
										<li><a href="our-menu-1.html">Menu Style 1</a></li>
										<li><a href="our-menu-2.html">Menu Style 2</a></li>
										<li><a href="our-menu-3.html">Menu Style 3</a></li>
										<li><a href="our-menu-4.html">Menu Style 4</a></li>
										<li><a href="our-menu-5.html">Menu Style 5</a></li>
									</ul>
								</li>
								<li class="header-adv lg:table-cell hidden pt-[30px] px-2.5 pb-5 relative align-top w-1/4"><img src="assets/images/adv-media.jpg" alt="/"></li>
							</ul>
						</li>
						<li class="sub-menu-down">
							<a href="javascript:void(0);">Shop</a>
							<ul class="sub-menu">
								<li class="py-[5px] px-5 relative"><a href="shop-style-1.html">Shop Style 1</a></li>
								<li class="py-[5px] px-5 relative"><a href="shop-style-2.html">Shop Style 2</a></li>
								<li class="py-[5px] px-5 relative"><a href="shop-cart.html">Shop Cart</a></li>
								<li class="py-[5px] px-5 relative"><a href="shop-wishlist.html">Shop Wishlist</a></li>
								<li class="py-[5px] px-5 relative"><a href="shop-checkout.html">Shop Checkout</a></li>
								<li class="py-[5px] px-5 relative"><a href="product-detail.html">Product Detail</a></li>
							</ul>
						</li>
						<li class="sub-menu-down has-mega-menu">
							<a href="javascript:void(0);">Blogs</a>
							<ul class="mega-menu sub-menu p-0 left-0 lg:table">
								<li> <a href="javascript:;">Blog Grid</a>
									<ul class="sub-part lg:mt-[15px]">
										<li><a href="blog-grid-2.html">Blog Grid 2</a></li>
										<li><a href="blog-grid-3.html">Blog Grid 3</a></li>
										<li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
										<li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
									</ul>
								</li>
								<li> <a href="javascript:;">Blog List</a>
									<ul class="sub-part lg:mt-[15px]">
										<li><a href="blog-list.html">Blog List</a></li>
										<li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
										<li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
										<li><a href="blog-both-sidebar.html">Blog Both Sidebar</a></li>
									</ul>
								</li>
								<li> <a href="javascript:;">Blog Single</a>
									<ul class="sub-part lg:mt-[15px]">
										<li><a href="blog-standard.html">Blog Detail</a></li>
										<li><a href="blog-open-gutenberg.html">Blog Open Gutenberg</a></li>
										<li><a href="blog-detail-left-sidebar.html">Blog Details Left Sidebar</a></li>
										<li><a href="blog-detail-right-sidebar.html">Blog Details Right Sidebar</a></li>
									</ul>
								</li>
								<li> <a href="javascript:void(0);">Blog Masonry</a>
									<ul class="sub-part lg:mt-[15px]">
										<li><a href="blog-grid-3-masonary.html">Blog Grid 3 Masonry</a></li>
										<li><a href="blog-grid-4-masonary.html">Blog Grid 4 Masonry</a></li>
										<li><a href="blog-wide-list-sidebar.html">Blog Wide List Sidebar</a></li>
										<li><a href="blog-wide-grid-sidebar.html">Blog Wide Grid Sidebar</a></li>
									</ul>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="contact-us.html">Contact Us</a>
						</li>
					</ul>
					
					<div class="dz-social-icon">
						<ul>
							<li><a target="_blank" class="fab fa-facebook-f" href="https://www.facebook.com/"></a></li>
							<li><a target="_blank" class="fab fa-twitter" href="https://twitter.com/"></a></li>
							<li><a target="_blank" class="fab fa-linkedin-in" href="https://www.linkedin.com/"></a></li>
							<li><a target="_blank" class="fab fa-instagram" href="https://www.instagram.com/"></a></li>
						</ul>
					</div>	
				</div>
				
			</div>
		</div>
	</header>
	<!-- Header -->
	
	<!--drawer-->
	<div id="drawer1" class="fixed top-0 z-[999] h-screen overflow-y-auto translate-x-full bg-white dark:bg-gray-800">
		<div class="p-0 overflow-y-auto">
			<button type="button" class="btn-close hover:text-[#000]">&times;</button>
			<div class="py-[60px] px-[70px]">
				<div class="login-head text-center">
					<h4 class="text-[30px] mb-[5px]">Welcome Back</h4>
					<p class="mb-[35px] text-base">We’d love have you join our 100% remote network of creatord & freelance.</p>
					<button name="submit" value="submit" type="submit" class="btn google-btn w-100 d-block">
						<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_1381_2836)">
						<path d="M5.76215 15.7122L4.85713 19.0908L1.54929 19.1607C0.560727 17.3272 0 15.2294 0 13.0001C0 10.8443 0.524266 8.81147 1.45356 7.02148H1.45427L4.39918 7.56139L5.68923 10.4886C5.41922 11.2758 5.27206 12.1208 5.27206 13.0001C5.27216 13.9543 5.44502 14.8687 5.76215 15.7122Z" fill="#FBBB00"></path>
						<path d="M25.7722 10.5715C25.9215 11.3579 25.9994 12.1701 25.9994 13.0001C25.9994 13.9308 25.9015 14.8387 25.7151 15.7144C25.0823 18.6944 23.4287 21.2965 21.138 23.138L21.1373 23.1373L17.428 22.948L16.903 19.6708C18.423 18.7794 19.6109 17.3844 20.2366 15.7144H13.2852V10.5715H20.338H25.7722Z" fill="#518EF8"></path>
						<path d="M21.1374 23.1371L21.1381 23.1378C18.9103 24.9285 16.0802 26 12.9995 26C8.04883 26 3.74456 23.2329 1.54883 19.1607L5.76169 15.7122C6.85953 18.6421 9.68596 20.7279 12.9995 20.7279C14.4238 20.7279 15.7581 20.3428 16.9031 19.6707L21.1374 23.1371Z" fill="#28B446"></path>
						<path d="M21.2974 2.99284L17.086 6.44069C15.901 5.69999 14.5003 5.27211 12.9996 5.27211C9.61098 5.27211 6.73168 7.45352 5.68884 10.4886L1.45384 7.02142H1.45312C3.61671 2.85 7.97527 0 12.9996 0C16.1538 0 19.046 1.12359 21.2974 2.99284Z" fill="#F14336"></path>
						</g>
						<defs>
						<clipPath id="clip0_1382_2836">
						<rect width="26" height="26" fill="white"></rect>
						</clipPath>
						</defs>
						</svg> Sign Up with Google
					</button>
					<h6 class="login-title">
						<span class="px-2.5">OR</span>
					</h6>
				</div>
				
				<form>
					<div class="mb-[15px]">
						<label for="dzEmail" class="form-lable">Email*</label><br>	
						<input name="dzEmail" id="dzEmail" required="" type="text" class="input-group mt-2.5 flex relative border border-[#dddddd] w-full rounded-md py-2.5 px-5 focus:ring-primary" placeholder="Enter Your Email">
						
					</div>
					<div class="mb-[30px]">
						<label for="dzPassword" class="form-lable">Password*</label>
						<div class="input-group relative">
							<input name="dzPassword" id="dzPassword" required="" type="text" class="dzPassword mt-2.5 flex relative border border-[#dddddd] w-full rounded-md py-2.5 px-5 focus:ring-primary" placeholder="Enter Your Password">
							<div class="show-pass">
								<svg class="eye-close" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#8ea5c8"><path d="M11 17.188a8.71 8.71 0 0 1-1.576-.147.69.69 0 0 1-.579-.678.7.7 0 0 1 .817-.676 7.33 7.33 0 0 0 1.339.127c4.073 0 7.61-3.566 8.722-4.812a18.51 18.51 0 0 0-2.434-2.274.69.69 0 0 1 .335-1.226.69.69 0 0 1 .268.019c.087.024.169.064.24.12a18.79 18.79 0 0 1 3.036 2.939.69.69 0 0 1 0 .848c-.185.234-4.581 5.763-10.167 5.763zm7.361-13.549a.69.69 0 0 0-.972 0l-2.186 2.186a10.68 10.68 0 0 0-2.606-.864c-.527-.099-1.061-.149-1.597-.149-5.585 0-9.982 5.528-10.166 5.763a.69.69 0 0 0 0 .848c.897 1.09 1.915 2.075 3.033 2.936.529.415 1.083.796 1.66 1.142l-1.888 1.887c-.066.063-.118.139-.154.223a.69.69 0 0 0 .145.757.67.67 0 0 0 .226.15c.085.034.175.052.266.051a.69.69 0 0 0 .265-.056c.084-.036.16-.088.223-.154l13.75-13.75a.69.69 0 0 0 0-.972zm-13.65 9.636A18.51 18.51 0 0 1 2.278 11C3.39 9.754 6.927 6.187 11 6.187a7.31 7.31 0 0 1 1.348.127 8.92 8.92 0 0 1 1.814.55L12.895 8.13c-.661-.437-1.453-.632-2.241-.552a3.44 3.44 0 0 0-2.085.989c-.56.56-.91 1.297-.989 2.085a3.44 3.44 0 0 0 .552 2.241l-1.601 1.604a14.43 14.43 0 0 1-1.82-1.222zm4.432-1.392c-.134-.275-.204-.577-.206-.883a2.07 2.07 0 0 1 .6-1.456 2.12 2.12 0 0 1 2.338-.392l-2.731 2.731z"></path>
								</svg>
									<svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#8ea5c8"><path d="M19.873 9.611c-.179-.244-4.436-5.985-9.873-5.985S.305 9.367.127 9.611a.66.66 0 0 0 0 .778c.178.244 4.436 5.985 9.873 5.985s9.694-5.74 9.873-5.984a.66.66 0 0 0 0-.778zM10 15.055c-4.005 0-7.474-3.81-8.501-5.055C2.525 8.753 5.986 4.945 10 4.945c4.005 0 7.473 3.809 8.501 5.055-1.025 1.247-4.487 5.054-8.501 5.054zm0-9.011A3.96 3.96 0 0 0 6.044 10 3.96 3.96 0 0 0 10 13.956 3.96 3.96 0 0 0 13.956 10 3.96 3.96 0 0 0 10 6.044zm0 6.593A2.64 2.64 0 0 1 7.363 10 2.64 2.64 0 0 1 10 7.363 2.64 2.64 0 0 1 12.637 10 2.64 2.64 0 0 1 10 12.637z"></path>
								</svg>
							</div>
						</div>
					</div>
				</form>
				
				<button name="submit" value="submit" type="submit" class="btn btn-primary w-full block"><span>Sign In</span></button>
				<p class="text-center mt-[30px] text-base">Not registered?  
					<a id="register" class="register text-primary font-medium" href="#offcanvasLogin">Register here</a>
				</p>
			</div>
		</div>
	</div>
	<div id="drawer2" class="fixed top-0 z-[999] h-screen overflow-y-auto translate-x-full bg-white dark:bg-gray-800">
		<div class="p-0 overflow-y-auto">
			<button type="button" class="btn-close2 hover:text-[#000]">&times;</button>
			<div class="py-[60px] px-[70px]">
				<div class="login-head text-center">
					<h4>Join Our Network</h4>
					<p class="mb-[35px]">We'd love have you join our 100% remote network of creatord & freelance.</p>
					<button name="submit" value="submit" type="submit" class="btn google-btn w-100">
						<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_1383_2836)">
						<path d="M5.76215 15.7122L4.85713 19.0908L1.54929 19.1607C0.560727 17.3272 0 15.2294 0 13.0001C0 10.8443 0.524266 8.81147 1.45356 7.02148H1.45427L4.39918 7.56139L5.68923 10.4886C5.41922 11.2758 5.27206 12.1208 5.27206 13.0001C5.27216 13.9543 5.44502 14.8687 5.76215 15.7122Z" fill="#FBBB00"/>
						<path d="M25.7722 10.5715C25.9215 11.3579 25.9994 12.1701 25.9994 13.0001C25.9994 13.9308 25.9015 14.8387 25.7151 15.7144C25.0823 18.6944 23.4287 21.2965 21.138 23.138L21.1373 23.1373L17.428 22.948L16.903 19.6708C18.423 18.7794 19.6109 17.3844 20.2366 15.7144H13.2852V10.5715H20.338H25.7722Z" fill="#518EF8"/>
						<path d="M21.1374 23.1371L21.1381 23.1378C18.9103 24.9285 16.0802 26 12.9995 26C8.04883 26 3.74456 23.2329 1.54883 19.1607L5.76169 15.7122C6.85953 18.6421 9.68596 20.7279 12.9995 20.7279C14.4238 20.7279 15.7581 20.3428 16.9031 19.6707L21.1374 23.1371Z" fill="#28B446"/>
						<path d="M21.2974 2.99284L17.086 6.44069C15.901 5.69999 14.5003 5.27211 12.9996 5.27211C9.61098 5.27211 6.73168 7.45352 5.68884 10.4886L1.45384 7.02142H1.45312C3.61671 2.85 7.97527 0 12.9996 0C16.1538 0 19.046 1.12359 21.2974 2.99284Z" fill="#F14336"/>
						</g>
						<defs>
						<clipPath id="clip0_138_536">
						<rect width="26" height="26" fill="white"/>
						</clipPath>
						</defs>
						</svg> Sign Up with Google
					</button>
					<h6 class="login-title">
						<span class="px-2.5">OR</span>
					</h6>
				</div>
				<form>
					<div class="mb-[15px]">
						<label class="form-label">Name*</label>
						<div class="input-group">
							<input name="dzName" required type="text" class="input-group mt-2.5 flex relative border border-[#dddddd] w-full rounded-md py-2.5 px-5 focus:ring-primary" placeholder="Enter Your Name">
						</div>
					</div>
					<div class="mb-[15px]">
						<label class="form-label">Email*</label>
						<div class="input-group">
							<input name="dzEmail" required type="text" class="input-group mt-2.5 flex relative border border-[#dddddd] w-full rounded-md py-2.5 px-5 focus:ring-primary" placeholder="Enter Your Email">
						</div>
					</div>
					<div class="mb-[30px]">
						<label for="dzPassword1" class="form-lable">Password*</label>
						<div class="input-group relative">
							<input name="dzPassword" id="dzPassword1" required="" type="text" class="dzPassword mt-2.5 flex relative border border-[#dddddd] w-full rounded-md py-2.5 px-5 focus:ring-primary" placeholder="Create a Password">
							<div class="show-pass">
								<svg class="eye-close" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#8ea5c8"><path d="M11 17.188a8.71 8.71 0 0 1-1.576-.147.69.69 0 0 1-.579-.678.7.7 0 0 1 .817-.676 7.33 7.33 0 0 0 1.339.127c4.073 0 7.61-3.566 8.722-4.812a18.51 18.51 0 0 0-2.434-2.274.69.69 0 0 1 .335-1.226.69.69 0 0 1 .268.019c.087.024.169.064.24.12a18.79 18.79 0 0 1 3.036 2.939.69.69 0 0 1 0 .848c-.185.234-4.581 5.763-10.167 5.763zm7.361-13.549a.69.69 0 0 0-.972 0l-2.186 2.186a10.68 10.68 0 0 0-2.606-.864c-.527-.099-1.061-.149-1.597-.149-5.585 0-9.982 5.528-10.166 5.763a.69.69 0 0 0 0 .848c.897 1.09 1.915 2.075 3.033 2.936.529.415 1.083.796 1.66 1.142l-1.888 1.887c-.066.063-.118.139-.154.223a.69.69 0 0 0 .145.757.67.67 0 0 0 .226.15c.085.034.175.052.266.051a.69.69 0 0 0 .265-.056c.084-.036.16-.088.223-.154l13.75-13.75a.69.69 0 0 0 0-.972zm-13.65 9.636A18.51 18.51 0 0 1 2.278 11C3.39 9.754 6.927 6.187 11 6.187a7.31 7.31 0 0 1 1.348.127 8.92 8.92 0 0 1 1.814.55L12.895 8.13c-.661-.437-1.453-.632-2.241-.552a3.44 3.44 0 0 0-2.085.989c-.56.56-.91 1.297-.989 2.085a3.44 3.44 0 0 0 .552 2.241l-1.601 1.604a14.43 14.43 0 0 1-1.82-1.222zm4.432-1.392c-.134-.275-.204-.577-.206-.883a2.07 2.07 0 0 1 .6-1.456 2.12 2.12 0 0 1 2.338-.392l-2.731 2.731z"></path>
								</svg>
									<svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#8ea5c8"><path d="M19.873 9.611c-.179-.244-4.436-5.985-9.873-5.985S.305 9.367.127 9.611a.66.66 0 0 0 0 .778c.178.244 4.436 5.985 9.873 5.985s9.694-5.74 9.873-5.984a.66.66 0 0 0 0-.778zM10 15.055c-4.005 0-7.474-3.81-8.501-5.055C2.525 8.753 5.986 4.945 10 4.945c4.005 0 7.473 3.809 8.501 5.055-1.025 1.247-4.487 5.054-8.501 5.054zm0-9.011A3.96 3.96 0 0 0 6.044 10 3.96 3.96 0 0 0 10 13.956 3.96 3.96 0 0 0 13.956 10 3.96 3.96 0 0 0 10 6.044zm0 6.593A2.64 2.64 0 0 1 7.363 10 2.64 2.64 0 0 1 10 7.363 2.64 2.64 0 0 1 12.637 10 2.64 2.64 0 0 1 10 12.637z"></path>
								</svg>
							</div>
						</div>
					</div>
				</form>
				<button name="submit" value="submit" type="submit" class="btn btn-primary w-full block">
					<span>Sign Up</span>
				</button>
				<p class="text-center mt-[30px] text-base">Already have an account?
					<a class="text-primary font-medium" href="#offcanvasLogin" id="register2">Login</a>
				</p>
			</div>
		</div>
	</div>
	<!--drawer-->
	
    <!-- Banner  -->
    <section class="bg-[url('../images/banner/bnr2.jpg')] bg-fixed relative z-[1] after:content-[''] after:absolute after:z-[-1] after:bg-[#222222e6] after:opacity-100 after:w-full after:h-full after:top-0 after:left-0  pt-[50px] lg:h-[450px] sm:h-[400px] h-[300px] overflow-hidden bg-cover bg-center">
        <div class="container table h-full relative z-[1] text-center">
            <div class="dz-bnr-inr-entry align-middle table-cell">
                <h2 class="font-lobster text-white mb-5 2xl:text-[70px] md:text-[60px] text-[40px] leading-[1.2]">Faq</h2>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb bg-primary shadow-[0px_10px_20px_rgba(0,0,0,0.05)] rounded-[10px] inline-block lg:py-[13px] md:py-[10px] sm:py-[5px] py-[7px] lg:px-[30px] md:px-[18px] sm:px-5 px-3.5 m-0">
                        <li class="breadcrumb-item p-0 inline-block text-[15px] font-normal"><a href="index.html" class="text-white ">Home</a></li>
                        <li class="breadcrumb-item text-white p-0 inline-block text-[15px] font-normal active pl-2">Faq</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </section>
    <!-- Banner End -->
		
    <!-- Faqs Section -->
		<section class="lg:pt-[100px] sm:pt-[70px] pt-[50px] lg:pb-[80px] sm:pb-10 pb-5">
			<div class="min-container max-w-[53.125rem] px-[0.938rem] mx-auto">
				<div class="row search-wraper style-1 text-center lg:mt-[-135px] sm:mt-[-100px] mt-[-90px] xl:mb-[80px] lg:mb-[60px] sm:mb-[50px] mb-[40px]">
					<div class="lg:w-5/6 w-full px-[15px] m-auto">
						<form>
							<div class="input-group relative flex flex-wrap items-stretch z-[1] w-full">
								<div class="input-group-prepand absolute left-0 top-[50%] translate-y-[-50%]">
									<button name="submit" value="submit" type="submit" class="p-[30px]">
										<i class="icon-search text-2xl"></i>
									</button>
								</div>
								<input required="required" type="text" class="form-control bg-white py-[27px] pr-5 pl-[77px] border-none rounded-[10px] lg:h-[80px] h-[60px] w-full shadow-[0px_15px_55px_rgba(34,34,34,0.15)] text-[#666666] text-[15px] outline-none" placeholder="Why Should I Use Swigo ?">
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="w-full px-[15px]">
						<div class="accordion dz-accordion mb-[60px]" id="accordionFaq2">
							<div class="accordion-item border-b border-[#B1B1B1] border-t">
								<h2 class="accordion-header mb-0" id="headingOne1">
									<a href="javascript:void(0);" class="accordion-button collapsed lg:text-lg md:text-base text-sm relative flex items-center md:py-7 py-5 lg:pr-[30px] md:pr-[25px] pr-[30px]">
										Q1: What are your hours of operation?
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseOne1" class="accordion-collapse">
									<div class="accordion-body py-[25px] mt-[-9px]">
										<p class="text-[15px] max-w-[515px] tracking-[0.02em]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
									</div>
								</div>
							</div>
							<div class="accordion-item border-b border-[#B1B1B1]">
								<h2 class="accordion-header mb-0" id="headingTwo1">
									<a href="javascript:void(0);" class="accordion-button collapsed lg:text-lg md:text-base text-sm relative flex items-center md:py-7 py-5 lg:pr-[30px] md:pr-[25px] pr-[30px]" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
										Q2: What is your menu like?
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseTwo1" class="accordion-collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordionFaq2">
									<div class="accordion-body py-[25px] mt-[-9px]">
										<p class="text-[15px] max-w-[515px] tracking-[0.02em]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
									</div>
								</div>
							</div>
							<div class="accordion-item border-b border-[#B1B1B1]">
								<h2 class="accordion-header mb-0" id="headingThree1">
									<a href="javascript:void(0);" class="accordion-button collapsed lg:text-lg md:text-base text-sm relative flex items-center md:py-7 py-5 lg:pr-[30px] md:pr-[25px] pr-[30px]" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
										Q3: Do you have vegetarian/vegan/gluten-free options?
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseThree1" class="accordion-collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionFaq2">
									<div class="accordion-body py-[25px] mt-[-9px]">
										<p class="text-[15px] max-w-[515px] tracking-[0.02em]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
									</div>
								</div>
							</div>
							<div class="accordion-item border-b border-[#B1B1B1]">
								<h2 class="accordion-header mb-0" id="headingFour1">
									<a href="javascript:void(0);" class="accordion-button collapsed lg:text-lg md:text-base text-sm relative flex items-center md:py-7 py-5 lg:pr-[30px] md:pr-[25px] pr-[30px]" data-bs-toggle="collapse" data-bs-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
										Q4: Do you offer takeout or delivery?
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseFour1" class="accordion-collapse" aria-labelledby="headingFour1" data-bs-parent="#accordionFaq2">
									<div class="accordion-body py-[25px] mt-[-9px]">
										<p class="text-[15px] max-w-[515px] tracking-[0.02em]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
									</div>
								</div>
							</div>
							<div class="accordion-item border-b border-[#B1B1B1]">
								<h2 class="accordion-header mb-0" id="headingFive1">
									<a href="javascript:void(0);" class="accordion-button collapsed lg:text-lg md:text-base text-sm relative flex items-center md:py-7 py-5 lg:pr-[30px] md:pr-[25px] pr-[30px]" data-bs-toggle="collapse" data-bs-target="#collapseFive1" aria-expanded="false" aria-controls="collapseFive1">
										Q5: Can I make a reservation? How do I do that?
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseFive1" class="accordion-collapse" aria-labelledby="headingFive1" data-bs-parent="#accordionFaq2">
									<div class="accordion-body py-[25px] mt-[-9px]">
										<p class="text-[15px] max-w-[515px] tracking-[0.02em]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
									</div>
								</div>
							</div>
							<div class="accordion-item border-b border-[#B1B1B1]">
								<h2 class="accordion-header mb-0" id="headingSix1">
									<a href="javascript:void(0);" class="accordion-button collapsed lg:text-lg md:text-base text-sm relative flex items-center md:py-7 py-5 lg:pr-[30px] md:pr-[25px] pr-[30px]" data-bs-toggle="collapse" data-bs-target="#collapseSix1" aria-expanded="false" aria-controls="collapseSix1">
										Q6: Is your restaurant kid-friendly?
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseSix1" class="accordion-collapse" aria-labelledby="headingSix1" data-bs-parent="#accordionFaq2">
									<div class="accordion-body py-[25px] mt-[-9px]">
										<p class="text-[15px] max-w-[515px] tracking-[0.02em]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
									</div>
								</div>
							</div>
							<div class="accordion-item border-b border-[#B1B1B1]">
								<h2 class="accordion-header mb-0" id="headingSeven1">
									<a href="javascript:void(0);" class="accordion-button collapsed lg:text-lg md:text-base text-sm relative flex items-center md:py-7 py-5 lg:pr-[30px] md:pr-[25px] pr-[30px]" data-bs-toggle="collapse" data-bs-target="#collapseSeven1" aria-expanded="false" aria-controls="collapseSeven1">
										Q7: What is your menu like?
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseSeven1" class="accordion-collapse" aria-labelledby="headingSeven1" data-bs-parent="#accordionFaq2">
									<div class="accordion-body py-[25px] mt-[-9px]">
										<p class="text-[15px] max-w-[515px] tracking-[0.02em]">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row items-center">
					<div class="lg:w-5/12 w-full px-[15px] mb-5">
						<div class="dz-media faq-media move-2 lg:w-full md:w-[450px] w-[300px] lg:h-full md:h-[450px] h-[300px] mx-auto">
							<img src="assets/images/faq/pic1.png" alt="/">
						</div>
					</div>
					<div class="lg:w-7/12 w-full px-[15px] mb-5">
						<div class="faq-info">
							<h2 class="lg:text-[50px] text-[35px] font-semibold mb-2">Newsletter</h2>
							<p class="mb-[30px] text-base">We hope this newsletter finds you well. We are excited to announce some new additions to our menu that we think you'll love. Our culinary team has been</p>
							<form class="dzSubscribe" action="https://swigo.dexignzone.com/tailwind/xhtml/assets/script/mailchamp.php" method="post">
								<div class="dzSubscribeMsg text-white"></div>
                                <div class="input-group flex flex-wrap relative items-stretch w-full">
                                    <input name="dzEmail" required="required" type="text" class="form-control outline-none lg:h-[65px] h-[55px] w-full bg-[#F8F8F8] border border-[#B1B1B1] sm:pr-[150px] pr-20" value="Enter Your Email">
                                    <div class="input-group-addon absolute top-[50%] right-[12px] translate-y-[-50%] z-[9]">
                                        <button name="submit" value="submit" type="submit" class="btn btn-primary btn-hover-2 lg:py-3 xl:px-6 sm:py-[10px] py-[6px] px-3">
                                            <span class="sm:block hidden">Submit</span>
                                            <i class="fa-solid fa-paper-plane sm:hidden block text-xl"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Faqs Section -->
		
	<!-- Footer -->
	<?php include 'footer.php'; ?>