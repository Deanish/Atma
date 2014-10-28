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
var images = new Array("images/padayatra/1.jpg",
			"images/padayatra/2.jpg","images/padayatra/3.jpg","images/padayatra/4.jpg","images/padayatra/5.jpg","images/padayatra/6.jpg",
			"images/padayatra/7.jpg","images/padayatra/8.jpg","images/padayatra/9.jpg","images/padayatra/10.jpg","images/padayatra/11.jpg",
			"images/padayatra/12.jpg","images/padayatra/13.jpg","images/padayatra/14.jpg","images/padayatra/15.jpg","images/padayatra/16.jpg",
			"images/padayatra/17.jpg","images/padayatra/18.jpg","images/padayatra/19.jpg","images/padayatra/20.jpg","images/padayatra/21.jpg",
			"images/padayatra/22.jpg","images/padayatra/23.jpg","images/padayatra/24.jpg","images/padayatra/25.jpg","images/padayatra/26.jpg",
			"images/padayatra/27.jpg","images/padayatra/28.jpg","images/padayatra/29.jpg","images/padayatra/30.jpg","images/padayatra/31.jpg",
			"images/padayatra/32.jpg","images/padayatra/33.jpg","images/padayatra/34.jpg","images/padayatra/35.jpg");
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
                                <h3>Interlinking of Rivers</h3>
                                <div class="wrapper indent-bot2">
                                    <div class="extra-wrap">
                                        <h4 class="p1"><a href="ior.php">Padyaatra</a></h4>
                                        It was held on 2006
                                    </div>
                                </div>
                                <div class="wrapper indent-bot2">
									<div class="extra-wrap">
                                        <h4 class="p1"><a href="msg.php">Messages from degnities</a></h4>
                                    </div>
                                </div>
								</div>
                            </article>
                            <article class="col-2-3">
								<div class="wrap-col">
                            	<div>
                                	<h3>Padyaatra was from Kanayakumari to New Delhi (Around 3000Kms)</h3>
                                </div>
                                <div class="wrapper indent-bot">
                                	<article class="col-1-2">
										<div class="wrap-col">
                                            <table border="0" align="center" >
											<tr>
				
        		<td><pre style="font-size:15px";>From 12th Jan 2006 to 14th Aug 2006
			
Visited 9 states, 38 Districts, Conducted more than 40 press meets, vistited more than 600 educational organizations.
				<p>Purpose: CREATE AWARENESS</p>
"Join all the rivers in India and give water to all villages"
Met <span style="color:#F00">Dr.A.P.J. Abdul Kalam ji,</span> Fromer President of India
<span style="color:#F00">Sri. Atal Bihari Vajpayee ji,</span> Former Prime Minister of India
<span style="color:#F00">Dr. Manmohan Singh ji,</span> Prime Minister of India
All party National Leaders.</pre></td>
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
                                            <img  id="img1" src="images/padayatra/24.jpg" width="200px" height="200px" /><input type="submit" value="Gallery" />
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
