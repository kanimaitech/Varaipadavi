<!DOCTYPE html> 
<html>
	<head>
		<title>Login - Kanimai</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://voky.com.ua/showcase/sky-forms/examples/css/demo.css">
		<link rel="stylesheet" href="http://voky.com.ua/showcase/sky-forms/examples/css/sky-forms.css">
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="http://voky.com.ua/showcase/sky-forms/examples/css/sky-forms-ie8.css">
		<![endif]-->
		
		<!--[if lt IE 10]>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="http://voky.com.ua/showcase/sky-forms/examples/js/jquery.placeholder.min.js"></script>
		<![endif]-->		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="http://voky.com.ua/showcase/sky-forms/examples/js/sky-forms-ie8.js"></script>
		<![endif]-->
<style>
.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}
.alert-danger{color:#a94442;background-color:#f2dede;border-color:#ebccd1}
</style>
	</head>
	<body onload="LoggedIn()" class="bg-cyan">
		<div class="body body-s">
		
			<form action="" method="post" class="sky-form">
				<header>Login</header>
				
				<fieldset>					
					<section>
						<div class="row">
							<label class="label col col-4">Username</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append icon-user"></i>
									<input id="luname" type="text" name="lusername">
								</label>
							</div>
						</div>
					</section>
					
					<section>
						<div class="row">
							<label class="label col col-4">Password</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append icon-lock"></i>
									<input type="password" name="password">
								</label>
								<div class="note"><a href="#">Forgot password?</a></div>
							</div>
						</div>
					</section>
					
					<section>
						<div class="row">
							<div class="col col-4"></div>
							<div class="col col-8">
								<label class="checkbox"><input type="checkbox" name="checkbox-inline" checked><i></i>Keep me logged in</label>
							</div>
						</div>
					</section>
					<section>
						<div class="row" id="alar">
						</div>
					</section>
				</fieldset>
				<footer>
					<button type="submit" class="button">Log in</button>
                                        <a href="http://www.kanimai.tk/quiz/Signup.php" align="right" style="color:Black;" class="button button-secondary"><b>Register Now</b></a>
				</footer>
			</form>
			
		</div>
<script type="text/javascript">
            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }
function LoggedIn() {
                var username = getCookie("username");
                if (username !== "") {
                    location.replace('http://www.kanimai.tk/quiz/Quiz.php');
                } else {
                    
                }
            }
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
</script>
	</body>
</html>
<?php
$servername = "localhost";
$username = "id2118232_malyn";
$password = "malynlbj";
$dbname = "id2118232_userreg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username = $_POST["lusername"];
$password = $_POST["password"];
if( isset($_POST['lusername']) )
{
$sql = "SELECT password FROM Users WHERE username='".$username."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$psw = $row['password'];
}

if ($psw === $password) {
echo '<script type="text/javascript">';
echo "setCookie('username', '$username', 365);";
echo '</script>';
} else {
echo '<script type="text/javascript">';
echo "document.getElementById('luname').value = '$username'";
echo '</script>';
echo '<script type="text/javascript">';
echo "document.getElementById('alar').innerHTML = '<div class=\'alert alert-danger\'><strong>Username or Password is Incorrect!!!!</strong></div>'";
echo '</script>';
}
$conn->close();
?>