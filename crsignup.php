<?php include('header3.php'); ?>
		<div class="container">

			<div class="signCard">
				<div class="row">
					<div class="col-sm-6" style="background-color:#ef5350;  height: 100%;">
						<h2 style="color: #fff; font-size: 80px; text-align: center; margin-top:300px;"><b>ZOYO</b></h2>
					</div>
					<form action="includes/crsignup.inc.php" method="post" class="col-sm-6" style="margin-top:70px;">
						<h1 style="text-align: center;"><b>Corporate Sign Up</b></h1><br>
						<h5><b>EMAIL</b></h5>
						<input type="text" name="mail" class="loginInput" placeholder="Enter email id"><br>
						<h5><b>HOTEL NAME</b></h5>
						<input type="text" name="hName" class="loginInput" placeholder="Enter name of hotel"><br>
						<h5><b>PASSWORD</b></h5>
						<input type="password" name="pwd" class="loginInput" placeholder="Enter password"><br>
						<h5><b>CONFIRM PASSWORD</b></h5>
						<input type="password" name="pwd-repeat" class="loginInput" placeholder="Retype password"><br>
						
						<?php

						$url = explode('=',$_SERVER['REQUEST_URI']);
						if (count($url)>2){
							$url2 = explode('&',$url[2]);
						}
						if($_SERVER['REQUEST_URI'] == "/zoyo/crsignup.php"){
							echo '<br><br>
						<button class="btn btn-success" name="signup-submit" style="width: 200px; height: 40px; float: right; margin-right: 26px;"><b>Sign Up</b></button><br><br>'; 
						} 
						else if($_SERVER['REQUEST_URI'] == "/zoyo/crsignup.php?"){
							echo '<br><br>
						<button class="btn btn-success" name="signup-submit" style="width: 200px; height: 40px; float: right; margin-right: 26px;"><b>Sign Up</b></button><br><br>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/crsignup.php?error=emptyfields&uid=&mail="){
							echo '<p style="color: red; font-size:15px; text-align: right; margin-right:23px; ">Please fill in the fields.</p>
						<button class="btn btn-success" name="signup-submit" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>Sign Up</b></button><br><br>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/crsignup.php?error=minimumlength"){
							echo '<p style="color: red; font-size:15px; text-align: right; margin-right:23px; ">Minimun 8 characters required.</p>
						<button class="btn btn-success" name="signup-submit" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>Sign Up</b></button><br><br>'; 
						} 
						else if($_SERVER['REQUEST_URI'] == "/zoyo/crsignup.php?error=usertaken&mail=".$url[2]){
							echo '<p style="color: red; font-size:15px; text-align: right; margin-right:23px; ">Email id already exists.</p>
						<button class="btn btn-success" name="signup-submit" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>Sign Up</b></button><br><br>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/crsignup.php?error=invalidmail&mail=".$url[2]){
							echo '<p style="color: red; font-size:15px; text-align: right;  margin-right:23px; ">Please enter a valid email id.</p>
						<button class="btn btn-success" name="signup-submit" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>Sign Up</b></button><br><br>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/crsignup.php?error=passwordcheck&uid=".$url2[0]."&mail=".$url[3]){
							echo '<p style="color: red; font-size:15px; text-align: right; margin-right:23px; ">Passwords dont match.</p>
						 <button class="btn btn-success" name="signup-submit" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>SignUp</b></button>'; 
						}

						?>

					</form>
				</div>
			</div>
			
		</div>
		
	</body>
</html>