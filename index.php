<html>
<head>
	<meta charset="utf-8">
	<title>Blood Donar</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="shortcut icon" type="img/png" href="pages/img/logo.png">
</head>
<body>
	<div class="wrapper">
		<div class="header"><tr>
			<td><a href="index.php"><img style="height: 80px; margin-top: 10px;" src="pages/img/logo.png"></td><td><img style="height: 80px; margin-top: 10px;" src="pages/img/banner.png"></a>
			
</td>

									<span style="float: right;">
										<div class="time">
					
													<b>

													<?php
													
													date_default_timezone_set('Asia/Dhaka');
													echo "Date : " .date("d - m - y")."<br>";
													echo "Time : " .date("h:i:s A");

													?></b>
										</div>
									</span>

		</div>

		<div class="nabbar">
			<ul>
				
				<li><a href="pages/why.php">Why Donate Blood?</a></li>
				<li><a href="pages/donate.php">💲 Financial Donation</a></li>
				<li><a href="pages/refer.php">Refer a Friend</a></li>
				<li><a href="pages/contact.php">Contact Us</a></li>
				<li><a style="border-right: none;" href="pages/cpanel.php">Log in</a></li>
			
				
		</ul>
	</div>
		<div class="container">
			<div class="upc">
				<div class="uleftbar"><h2 style="color: green; text-align: center;">Find a Donor<hr width="60%" align="center"></h2>
					<div class="find">
						<form method="post" action="search.php">

<tr><td>District :</td><td>
	<select name="district" required="required">
	<option selected value="">👉 Select Your District 👈</option>
  	<option value="Dhaka">Dhaka</option>
  	<option value="Chitagong">Chitagong</option>
 	<option value="Barisal">Barisal</option>
  	<option value="Rangpur">Rangpur</option>
 	<option value="Shilet">Shilet</option>
 	<option value="Rajshai">Rajshai</option>
  	<option value="Khulna">Khulna</option>
  	
</select></td>
</tr>
<br><br>
<tr>
	<td>Group  :</td>
	<td><select style="margin-left: 20px;" name="blood" required="required">
	<option selected value="">👉 Select Blood Group 👈</option>
  	<option value="A+">A+</option>
  	<option value="A-">A-</option>
 	<option value="B+">B+</option>
  	<option value="B-">B-</option>
 	<option value="AB+">AB+</option>
 	<option value="AB-">AB-</option>
  	<option value="O+">O+</option>
  	<option value="O-">O-</option>
</select></td>
</tr><br>
<tr><td><input type="reset" name="reset" value="Reset"></td><td><button name="btn">Search</button></td></tr>



</form>
					</div>
					


				</div>
				<div class="urightbar"><img src="pages/img/banner.gif"></div>
				

			</div>







			<div class="lpc">
				<div class="lleftbar">
					<div class="uper">
						<div class="ibox">
							<div class="pic"><img style="height: 150px; width: 290px;" src="pages/img/pic01.jpeg"></div>

							<b style="font-size: 20px; font-family: Arial Black;" ><br>Become a Volunteer</b>
							<p><a href="www.facebook.com/tais.bd"> Make a Difference with Us</a></p>

						
					</div>
					<div class="tbox">

						<div class="pic"><img style="height: 150px; width: 290px;" src="pages/img/poor.jpg"></div>

							<b style="font-size: 20px; font-family: Arial Black;" ><br>💲 Financial Donation</b>
							<p><a href="pages/donate.php"> Donate</a></p></div></div>

					<div class="uper">

						<div class="ibox">
							<div class="pic"><img style="height: 150px; width: 290px;" src="pages/img/05.gif">
							</div>

							<b style="font-size: 20px; font-family: Arial Black;" ><br>Host a Blood Drive</b>
							<p><a href="facebook.com"> Refer a Friend</a></p>
						</div>

						<div class="tbox">
							<div class="pic"><img style="height: 150px; width: 290px;" src="pages/img/02.jpeg"></div>

							<b style="font-size: 20px; font-family: Arial Black;" ><br>Why Donate Blood? </b>
							<p><a href="pages/why.php#">Look here</a></p>
						</div>
					</div>

					

</div>

				<div class="lrightbar">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftais.bd%2F&tabs=timeline&width=340&height=535&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="535" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>


			</div>



		</div>
		<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="306712196548650">
</div>
		<div class="footer">All Reserved by © TAIS Foundation || <?php echo date("Y"); ?></div>
		








	</div>


</body>


</html>