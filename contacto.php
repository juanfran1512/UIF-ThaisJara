<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contacto</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
  <link rel="shortcut icon" href="img/THAIS-JARA.ico">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
		<?php
			include('default/header.php'); 
		?>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h6 class="pageTitle">Contactenos</h6>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
	<div class="row">
								<div class="col-md-6">
									<p>Para solicitud de información escribanos.</p>
									<div class="done">
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">×</button>
				Su mensaje a sido enviado. Gracias!
			</div>
		</div>
									<div class="contact-form">
											
		<form method="post" action="contact.php" id="contactform" class="contact">
											<div class="form-group has-feedback">
												<label for="name">Nombre*</label>
												<input type="text" class="form-control" name="name" placeholder="">
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="email">Correo*</label>
												<input type="email" class="form-control" name="email" placeholder="">
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
 
											<div class="form-group has-feedback">
												<label for="message">Mensaje*</label>
												<textarea class="form-control" rows="6" name="comment" placeholder=""></textarea>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<input type="submit" value="Enviar" id="submit" class="submit btn btn-default">
										</form>
										 
										
									</div>
								</div>
								<div class="col-md-6">
									<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
										<div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div>
										<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
											<a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a>
											</div>
											<script type="text/javascript"> function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(9.5552495,-69.2025374),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(9.5552495,-69.2025374)});infowindow = new google.maps.InfoWindow({content:"<b>Av. 34 entre calles 34 y 35</b><br/>Acarigua<br/> Portuguesa" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
											</script>
								</div>
								
							</div>
	</div>
 
	</section>
	<footer>
	<?php
include('default/footer.php'); 
?>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/validate.js"></script>
</body>
</html>