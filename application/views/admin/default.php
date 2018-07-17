<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Car store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- The styles -->
	<link href="<?php echo base_url()."LayoutAdmin/"; ?>css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo base_url()."LayoutAdmin/"; ?>css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url()."LayoutAdmin/"; ?>css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url()."LayoutAdmin/"; ?>css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url()."LayoutAdmin/"; ?>css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url()."LayoutAdmin/"; ?>css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url()."LayoutAdmin/"; ?>css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url()."LayoutAdmin/"; ?>css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url()."LayoutAdmin/"; ?>css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url()."LayoutAdmin/"; ?>css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url()."LayoutAdmin/"; ?>css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url()."LayoutAdmin/"; ?>css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url()."LayoutAdmin/"; ?>css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url()."LayoutAdmin/"; ?>css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url()."LayoutAdmin/"; ?>css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url()."LayoutAdmin/"; ?>css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url()."LayoutAdmin/"; ?>css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">  <span>Car store</span></a>
				
		
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> Admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url()."carstore/contact"; ?>">Profil</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url()."carstore/home/logout" ?>">Déconnexion</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Menu Principal</li>
						<li><a class="ajax-link" href="<?php echo base_url()."carstore/Voiture"; ?>"><i class="icon-star"></i><span class="hidden-tablet"> Gérer voiture</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url()."carstore/Modele"; ?>"><i class="icon-star"></i><span class="hidden-tablet"> Gérer modéle</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url()."carstore/Marque"; ?>"><i class="icon-star"></i><span class="hidden-tablet"> Gérer marque</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url()."carstore/Opt"; ?>"><i class="icon-star"></i><span class="hidden-tablet"> Gérer option</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url()."carstore/Rdv"; ?>"><i class="icon-user"></i><span class="hidden-tablet">Rendez-Vous</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url()."carstore/Commande"; ?>"><i class="icon-shopping-cart"></i><span class="hidden-tablet"> Commandes</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url()."carstore/client"; ?>"><i class="icon-user"></i><span class="hidden-tablet"> Clients</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url()."carstore/city"; ?>"><i class="icon-home"></i><span class="hidden-tablet"> Villes</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url()."carstore/team"; ?>"><i class="icon-user"></i><span class="hidden-tablet"> Equipe</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url()."carstore/admin"; ?>"><i class="icon-user"></i><span class="hidden-tablet"> Accès administrateur</span></a></li>
					</ul>					
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			
			<!-- ************************************************************************* -->
			<div>
				<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="<?php echo base_url()."carstore/home/index" ?>">Accueil</a> 
							<?php 
								if ($bread["bread"]!="") {
							?>
								<span class="divider">/</span>
							<?php
								} 
							?>
							</li>							
								<li><a href="#"><?php echo $bread["bread"]; ?></a></li>														
						</ul>
			</div>
			<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery-1.7.2.min.js"></script>
			<!--<h3 class="page-title">
							<?php echo $bread["title"]; ?>
			</h3> -->
						
				<!--begin content **********************************************************************-->
    					<?php echo $page; ?>
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>
		
	

		<footer>
			<p class="pull-left">&copy; <a href="http://carstore.tn" target="_blank">Car store</a> </p>
			<p class="pull-right">Créer par: &copy;> Mohamed Bouattour <?php echo date("Y") ?></a></p>
		</footer>
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	
	<!-- jQuery UI -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url()."LayoutAdmin/"; ?>js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/excanvas.js"></script>
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url()."LayoutAdmin/"; ?>js/charisma.js"></script>
		
</body>
</html>
