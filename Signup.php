<!DOCTYPE html> 
<html>
	<head>
		<title>Signup - Kanimai</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://voky.com.ua/showcase/sky-forms/examples/css/demo.css">
		<link rel="stylesheet" href="http://voky.com.ua/showcase/sky-forms/examples/css/sky-forms.css">
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="http://voky.com.ua/showcase/sky-forms/examples/css/sky-forms-ie8.css">
		<![endif]-->
		 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
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
	<body class="bg-cyan">
		<div class="body body-s">
		
			<form action="" method="post" class="sky-form">
				<header>Signup</header>
				
				<fieldset>					
					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" placeholder="Username" name="username">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" placeholder="Email address" name="email">
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Password" name="password">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" placeholder="Confirm password"  name="cpassword">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
					<div class="row">
						<section class="col col-6">
							<label class="input">
								<input type="text" placeholder="First name" name="fname">
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<input type="text" placeholder="Last name" name="lname">
							</label>
						</section>
					</div>
					
					<section>
						<label class="select">
							<select name="gender">
								<option value="0" selected disabled>Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Other">Other</option>
							</select>
							<i></i>
						</label>
                                                
					</section>
					<section>
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>I agree to the Terms of Service</label>
					</section>

					<section>
						<div class="row" id="alar">
						</div>
					</section>
				</fieldset>
				<footer>
					<button id="register" type="submit" class="button">Signup</button>
				</footer>
			</form>
			
		</div>
	</body>
</html>
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
$susername = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$gender = $_POST["gender"];

$query = "SELECT * FROM Users WHERE username='".$susername."'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$guname = $row["username"];
if (isset($susername, $password, $firstname, $lastname, $email, $gender)) 
{
if (isset($guname)) {
echo '<script type="text/javascript">';
echo "document.getElementById('alar').innerHTML = '<div class=\'alert alert-danger\'><strong>Username Exists!!!!</strong> Try Different</div>'";
echo '</script>';
} else {
if ($password === $cpassword) {
    $sql = "INSERT INTO Users (username, password, firstname, lastname, email, gender)
VALUES ('$susername', '$password', '$firstname', '$lastname', '$email', '$gender')";

} else {
echo '<script type="text/javascript">';
echo "document.getElementById('alar').innerHTML = '<div class=\'alert alert-danger\'><strong>Passwords Does Not Match!!!!</strong></div>'";
echo '</script>';
}
}
} else {
echo '<script type="text/javascript">';
echo "document.getElementById('alar').innerHTML = '<div class=\'alert alert-danger\'><strong>Fill all Inputs!!!!</strong></div>'";
echo '</script>';
}

if ($conn->query($sql) === TRUE) {
echo '<script type="text/javascript">';
echo "setCookie('username', '$susername', 365);location.replace('http://www.kanimai.tk/quiz/Quiz.php');";
echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>