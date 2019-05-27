<?php include('header3.php'); ?>
		<div class="container">

			<div class="signCard">
				<div class="row">
					<div class="col-sm-6" style="background-color:#ef5350;  height: 100%;">
						<h2 style="color: #fff; font-size: 80px; text-align: center; margin-top:300px;"><b>ZOYO</b></h2>
					</div>
					<form action="includes/signup.inc.php" method="post" class="col-sm-6" style="margin-top:60px;">
						<h1 style="text-align: center;"><b>Sign Up</b></h1><br>
						<h5><b>NAME</b></h5>
						<input type="text" name="uid" id="uid" class="loginInput" placeholder="Enter your Name"><br>
						<h5><b>EMAIL</b></h5>
						<input type="text" name="mail" class="loginInput" placeholder="Enter Email id"><br>
						<h5><b>PASSWORD</b></h5>
						<input type="password" name="pwd" class="loginInput" placeholder="Enter Password"><br>
						<h5><b>CONFIRM PASSWORD</b></h5>
						<input type="password" name="pwd-repeat" class="loginInput" placeholder="Retype password">
						<?php 
						$url = explode('=',$_SERVER['REQUEST_URI']);
						if (count($url)>2){
							$url2 = explode('&',$url[2]);
						}
						if($_SERVER['REQUEST_URI'] == "/zoyo/csignup.php"){
							echo '<br><br><br>
						 <button class="btn btn-success" name="signup-submit" style="width: 200px; height: 40px; float: right; margin-right: 26px;"><b>SignUp</b></button>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/csignup.php?"){
							echo '<br><br><br>
						 <button class="btn btn-success" name="signup-submit" style="width: 200px; height: 40px; float: right; margin-right: 26px;"><b>SignUp</b></button>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/csignup.php?error=emptyfields&uid=&mail="){
							echo '<p style="color: red; font-size:15px; text-align: right; margin-right:23px; ">Please fill in all the fields.</p>
						 <button class="btn btn-success" name="signup-submit" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>SignUp</b></button>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/csignup.php?error=minimumlength"){
							echo '<p style="color: red; font-size:15px; text-align: right; margin-right:23px; ">Minimum 8 Characters required.</p>
						 <button class="btn btn-success" name="signup-submit" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>SignUp</b></button>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/csignup.php?error=invalidmail&uid=".$url[2]){
							echo '<p style="color: red; font-size:15px; text-align: right; margin-right:23px; ">Please enter a valid email id.</p>
						 <button class="btn btn-success" name="signup-submit" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>SignUp</b></button>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/csignup.php?error=usertaken&mail=".$url[2]){
							echo '<p style="color: red; font-size:15px; text-align: right; margin-right:23px; ">User with given email id already exists.</p>
						 <button class="btn btn-success" name="signup-submit" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>SignUp</b></button>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/csignup.php?error=passwordcheck&uid=".$url2[0]."&mail=".$url[3]){
							echo '<p style="color: red; font-size:15px; text-align: right; margin-right:23px; ">Passwords dont match.</p>
						 <button class="btn btn-success" name="signup-submit" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>SignUp</b></button>'; 
						}
						
						 ?><br>
					</form>
				</div>
			</div>
			
		</div>
		
	</body>
</html>