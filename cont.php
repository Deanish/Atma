<!DOCTYPE html>
<html lang="en">
<head>
    <title>Atma Darshana Yoga</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen"> 
	<script src="js/css3-mediaqueries.js"></script>
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/NewsGoth_400.font.js" type="text/javascript"></script>
	<script src="js/NewsGoth_700.font.js" type="text/javascript"></script>
    <script src="js/NewsGoth_Lt_BT_italic_400.font.js" type="text/javascript"></script>
    <script src="js/Vegur_400.font.js" type="text/javascript"></script> 
    <script src="js/FF-cash.js" type="text/javascript"></script>
	
	<style>
      #map_canvas {
        width: 500px;
        height: 400px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(13.084690, 77.588596),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body onload="startTime();" id="page2">
	<div class="extra">
    	<!--==============================header=================================-->
        <header>
        	<div class="row-top">
            	<div class="main">
                	<div class="wrapper">
                    	<h1><a href="index.php">Atma Darshana Yoga</a></h1>
                    </div>
                </div>
            </div>
            <div class="menu-row">
            	<div class="menu-bg">
                    <div class="main">
                        <nav class="indent-left">
                            <ul class="menu wrapper">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="service.php">our services</a></li>
                                <li><a href="eve.php">events</a></li>
                                <li><a href="don.php">donations</a></li>
                                <li class="active"><a href="cont.php">Contact Us</a></li>
							</ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row-bot">
            	<div class="center-shadow">
                </div>
            </div>
        </header>
        
        <!--==============================content================================-->
        <section id="content">
            <div class="content-bg">
                <div class="main">
                    <div class="zerogrid">
                        <div class="wrapper">
						<table border="0" id="t1" align="center" style="left: 200px; top: 540px;">
						<tr><th colspan=3><h4>Swamy Vivekananda Yoga Research & Holistic Health Trust</h4></th>
						</tr>
						<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
						<tr>
							<td>Address : </td>
							<td><span style="color:#000"><p><b>#2, Siddharuda Nilaya, 8th Main, 13th Cross, <br />
							Judicial Layout, Allalasandra,<br />
                            GKVK Post,<br />
							Bangalore - 560 065</b></p></span></td>
						</tr>
						<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
						<tr>
							<td>Phone : </td>
							<td><span style="color:#000"><b>+91 80 2856 0168, +91 94491 66245</b></span><br /><br /></td>
						</tr>
						<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
						<tr>
							<td>Mail : </td>
							<td><span style="color:#000"><b>yogidevaraj@atmadarshanayoga.in<br />info@atmadarshanayoga.in<br />devarajyoga58@gmail.com</b></span><br /><br /></td>
						</tr>
						<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
						<tr>
							<td>Website : </td>
							<td><span style="color:#000"><b><a href="http://atmadarshanayoga.in/">atmadarshanayoga.in</a></b></span><br /><br /></td>
						</tr>
						<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
					</table>
                        </div>
                    </div>
					<div id="map_canvas">
                </div>
                <div class="block"></div>
            </div>
        </section>
    </div>
	
	<!--==============================footer=================================-->
    <footer>
        <div class="padding">
            <div class="main">
                <div class="zerogrid">
                    <div class="wrapper">
						<article class="col-2-3">
							<div class="wrap-col">
                        	
                            <ul class="list-services border-bot img-indent-bot">
                            	<li><a href="https://www.facebook.com/groups/603001813046956/" target="blank">Facebook</a></li>
                                <li><a class="item-1" href="#">Twitter</a></li>
                                <li><a class="item-2" href="#">You Tube</a></li>
                            </ul>
							</div>
						</article>
                        <article class="col-1-3">
							<div class="wrap-col">
                            <p class="p1">Copyright &copy; 2013 </p>
                            <p class="p1"><a href="http://atmadarshanayoga.in/">atmadarshanayoga.in</a> ALL RIGHTS RESERVED</p>
							<p class="p1">Designed & Developed by <a href="#">DEANISH M A</a></p>
                            <!-- {%FOOTER_LINK} -->
							</div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
