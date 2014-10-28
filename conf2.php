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
	<script language="javascript" type="text/javascript">
var timerid = 0;
var images = new Array("images/conf/2012/1.jpg",
			"images/conf/2012/2.jpg","images/conf/2012/3.jpg","images/conf/2012/4.jpg","images/conf/2012/5.jpg");
var countimages = 0;
function startTime()
{
	if(timerid)
	{
		timerid = 0;
	}
	var tDate = new Date();
	
	if(countimages == images.length)
	{
		countimages = 0;
	}
	if(tDate.getSeconds() % 2 == 0)
	{
		document.getElementById("img1").src = images[countimages];
	}
	countimages++;
	
	timerid = setTimeout("startTime()", 1000);
}
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
                                <li class="active"><a href="service.php">our services</a></li>
                                <li><a href="eve.php">events</a></li>
                                <li><a href="don.php">donations</a></li>
                                <li><a href="cont.php">Contact Us</a></li>
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
                            <article class="col-1-3">
								<div class="wrap-col">
                                <h3>International Conference</h3>
                                <div class="wrapper indent-bot2">
                                    <div class="extra-wrap">
                                        <h4 class="p1">Conference 01</h4>
                                        It was held on 2009 <a class="link-1" href="conf1.php">Know More</a>
                                    </div>
                                </div>
                                <div class="wrapper indent-bot2">
									<div class="extra-wrap">
                                        <h4 class="p1">Conference 02</h4>
                                        It was held on 2012 <a class="link-1" href="conf2.php">Know More</a>
                                    </div>
                                </div>
                                <div class="wrapper indent-bot2">
									<div class="extra-wrap">
                                        <h4 class="p1">Conference 03</h4>
                                        It was held on 2013 <a class="link-1" href="conf3.php">Know More</a>
                                    </div>
                                </div>
								</div>
                            </article>
                            <article class="col-2-3">
								<div class="wrap-col">
                            	<div>
                                	<h3>Conference 2012</h3>
                                </div>
                                <div class="wrapper indent-bot">
                                	<article class="col-1-2">
										<div class="wrap-col">
                                            <table border="0" align="center" >
											<tr>
				
        		<td><pre style="font-size:1em;">  <b>Date:</b> 9 February 2012 to 13 February 2012 <br/>
 <b>Venue:</b> Palace Ground, Bangalore, Karnataka<br/>
 <b>Dignitaries:</b> <span style="color:#F00">Sri S A Ramdas,</span> 
		Honerable Minister of Medical Education, Govt. of Karnataka <br/>
	      <span style="color:#F00">Padma Vibhushan Justice M N Venkatachaliah,</span> 
		Chief Justice of India from 1993 to 1994<br/>
	      <span style="color:#F00">Justice Mandagadde Rama Jois,</span> 
		Former Chief Justice of the Punjab and Haryana High Court<br/>
	      <span style="color:#F00">Shri Jai Parkash Aggarwal,</span> 
		Chairman of International Naturopathy Organization, New Delhi.<br/>
	      <span style="color:#F00">Sri Poobalan,</span> 
		Chief Executive Officer of VSL Group, Bengaluru<br/>
	      <span style="color:#F00">Dr. M. Mohan Alva,</span> 
		Chairman of ALVA Group of Institutions, Moodabidri<br/></pre></td></div>
			</tr>
        </table>
										</div>
                                    </article>
									<article class="col-1-2">
										<div class="wrap-col">
										</div>
                                    </article>
                                </div>
                                <div class="wrapper">
                                	<article class="col-1-2">
										<div class="wrap-col">
                                           <img  id="img1" src="images/conf/2012/1.jpg" width="200px" height="200px" /><input type="submit" value="Gallery" />
										</div>
                                    </article>
                                </div>
								</div>
                            </article>
                        </div>
                    </div>
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
