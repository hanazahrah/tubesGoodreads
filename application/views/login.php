<?php
?><!DOCTYPE html>
<html >
<head>


</head>

<body>
	<div class="main_login">
		<div id="navbar">
			<div id="sign_inform">
				<form name="sign_in" id="sign_in" >

					<div class="formBox">
						<input id="userSignIn" type="email" name="user[email]" placeholder="Email address" tabindex="1"><br>
						<input type="checkbox" id="remember_me" name="remember_me" checked="" tabindex="3">
							<label for="remember_me" class="greyText">Remember me</label>
					</div>

					<div class="formBox">
						<div style="position:relative">
							<input value="" placeholder="Password" tabindex="2" type="password" name="user[password]" id="user_password">
							<label for="user_password" id="userPasswordLabel" class="greyText"></label>
							<br>
							<a class="greyText" id="userForgotPassword" rel="nofollow" href="/user/forgot_password">Forgot it?</a>
						</div>
					</div>

					<div class="formBox">
						<input type="submit" value="Sign in" tabindex="4" class="gr-button gr-button--dark">
						<input type="hidden" name="n" value="536769">
					</div>
				</form>
			</div>
		</div>	
		<div id="masthead">
			<div id="newAccountBox">
				<h2>
					Create a free account!
				</h2>

				<form name="createForm" id="userSignup" autocomplete="off"  accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" >
					<div class="fieldPara">
						<input placeholder="Name" type="text" name="user[first_name]" id="user_first_name">
					</div>

					<div class="fieldPara">
						<input placeholder="Email Address" type="email" name="user[email]" id="user_email">
					</div>

					<div class="fieldPara">
						<input id="user_password_signup" placeholder="Password"  type="password" name="user[password]">
						<label id="userPasswordSignupLabel" for="user_password_signup" class="greyText"></label>
					</div>

					<div class="fieldPara">
						<div id="homePageSignupBlurb">
							<a target="_blank" rel="noopener noreferrer" href="/about/terms"></a>
						</div>

						<input type="hidden" name="n" value="536769">
						<input type="submit" name="next" class="button" value="Sign up">
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
	<div class="footer">
        <h2>TUGAS WEBSITE PROGRAMMING</h2>
    </div>

<style>
		.main_login{
			margin: 0 auto;
			text-align: left;
			width: 970px;
		}
		.main_login #masthead {
			position: relative;
			height: 295px;
		}
		.main_login #navBar #sign_inForm .formbox{
			float: left;
		}
		#sign_InForm {
			font-family: "Lato", "Helvetica Neue", "Helvetica", sans-serif;
			padding-top: 5px;
			padding-bottom: 5px;
		}
		form {
			margin-bottom: 0;
			display: block;
			margin-top: 0em;
		}
</style>
</html>