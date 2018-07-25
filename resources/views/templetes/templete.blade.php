<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">
        <title>{{ $title or 'Gerenciamento de Livros' }}</title>


        <meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->

        <link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.css')}}" />

		<link rel="stylesheet" href="{{url('assets/vendor/font-awesome/css/font-awesome.css')}}" />
		<link rel="stylesheet" href="{{url('assets/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{url('assets/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{url('assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css')}}" />
		<link rel="stylesheet" href="{{url('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}" />
		<link rel="stylesheet" href="{{url('assets/vendor/morris/morris.css')}}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{url('assets/stylesheets/theme.css')}}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{url('assets/stylesheets/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{url('assets/stylesheets/theme-custom.css')}}">

		<!-- Head Libs -->
        <script src="{{url('assets/vendor/modernizr/modernizr.js')}}"></script>
        

    </head>
    <body>
        <section class="body">
            <!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="{{url('assets/images/logo1.png')}}" height="40" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="{{url('assets/images/!logged-user.jpg')}}" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">John Doe Junior</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
            <!-- end: header -->
            

        <div class="inner-wrapper">
                <!-- start: sidebar -->
        


				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							MENU
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									
									<li class="nav-parent">
										<a>
											<i class="fa fa-book" aria-hidden="true"></i>
											<span>Livros</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="{{url('/livros')}}">
													 Listar Todos
												</a>
                                            </li>
                                            <li>
												<a href="{{url('/livros/create')}}">
													 Novo Livros
												</a>
                                            </li>
                                            
											
										</ul>
									</li>
									<li style="display:none;" class="nav-parent">
										<a>
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>Usuarios</span>
										</a>
										<ul class="nav nav-children">
											<li>
													<a href="{{url('/usuarios')}}">
													 Listar Todos
												</a>
                                            </li>
                                            <li>
													<a href="{{url('/usuarios/create')}}">
													 Novo Usuario
												</a>
                                            </li>
											
										</ul>
									</li>
									
									
								
									
								
								</ul>
							</nav>
				
				
							</div>
						</div>
				
					
				
				</aside>
                <!-- end: sidebar -->    
                


                 <section role="main" class="content-body">

                       	@yield('content') 
                 </section>


        </div>


       
     
     
        </section>
     	<!-- Vendor -->
		<script src="{{url('assets/vendor/jquery/jquery.js')}}"></script>
		<script src="{{url('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{url('assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{url('assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
		<script src="{{url('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{url('assets/vendor/magnific-popup/magnific-popup.js')}}"></script>
		<script src="{{url('assets/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
		
		<!-- Specific Page Vendor -->
		<script src="{{url('assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js')}}"></script>
		<script src="{{url('assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
		<script src="{{url('assets/vendor/jquery-appear/jquery.appear.js')}}"></script>
		<script src="{{url('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
		<script src="{{url('assets/vendor/jquery-easypiechart/jquery.easypiechart.js')}}"></script>
		<script src="{{url('assets/vendor/flot/jquery.flot.js')}}"></script>
		<script src="{{url('assets/vendor/flot-tooltip/jquery.flot.tooltip.js')}}"></script>
		<script src="{{url('assets/vendor/flot/jquery.flot.pie.js')}}"></script>
		<script src="{{url('assets/vendor/flot/jquery.flot.categories.js')}}"></script>
		<script src="{{url('assets/vendor/flot/jquery.flot.resize.js')}}"></script>
		<script src="{{url('assets/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
		<script src="{{url('assets/vendor/raphael/raphael.js')}}"></script>
		<script src="{{url('assets/vendor/morris/morris.js')}}"></script>
		<script src="{{url('assets/vendor/gauge/gauge.js')}}"></script>
		<script src="{{url('assets/vendor/snap-svg/snap.svg.js')}}"></script>
		<script src="{{url('assets/vendor/liquid-meter/liquid.meter.js')}}"></script>
		<script src="{{url('assets/vendor/jqvmap/jquery.vmap.js')}}"></script>
		<script src="{{url('assets/vendor/jqvmap/data/jquery.vmap.sampledata.js')}}"></script>
		<script src="{{url('assets/vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
		<script src="{{url('assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js')}}"></script>
		<script src="{{url('assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js')}}"></script>
		<script src="{{url('assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js')}}"></script>
		<script src="{{url('assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js')}}"></script>
		<script src="{{url('assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js')}}"></script>
		<script src="{{url('assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{url('assets/javascripts/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{url('assets/javascripts/theme.custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{url('assets/javascripts/theme.init.js')}}"></script>


		<!-- Examples -->
        <script src="{{url('assets/javascripts/dashboard/examples.dashboard.js')}}"></script>
        
    </body>
</html>
