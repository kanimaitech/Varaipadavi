<html>
<head>
<title> My Profile </title>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" href="http://www.filippobello.com/assets/images/favicon.gif" type="image/gif">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://davidlynch.org/projects/maphilight//jquery.maphilight.js"></script>
<style>
  #profile {
      padding-top: 4.3%;
}
  .navbar {
      margin-bottom: 0;
      background-color: #0080ff;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 1px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #0080ff !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  tr:hover {
      background-color: #CCCCCC;
}
</style>
</head>
<body onload="LoggedIn()">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://www.kanimai.tk/">கணிமை</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="http://www.kanimai.tk/">முகப்பு</a></li>
        <li><a href="http://www.kanimai.tk/About">எங்களை பற்றி</a></li>
        <li><a href="http://www.kanimai.tk/Contact">தொடர்பு கொள்க</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
                <li id="us-na">
                    <a href="http://www.kanimai.tk/MyProfile">
                         <i class="te-fa te-fa-2x glyphicon glyphicon-user"></i>
                        <span id="un-fi" class="nav-text">
                        </span>
                    </a>
                </li>
                <li id="lg-out" onclick="ClearCookie()">
                    <a href="#">
                         <i class="te-fa te-fa-2x glyphicon glyphicon-log-out"></i>
                        <span class="nav-text">
                            விடுபதிகை
                        </span>
                    </a>
                </li>
      </ul>
    </div>
  </div>
</nav>
      </div>
        <div id="profile" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
                  <form action="Update.php" method="post">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h2 id="u_uname" class="panel-title"></h2>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img id="u_img" alt="User Pic" src="https://d30y9cdsu7xlg0.cloudfront.net/png/17241-200.png" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td id="u_name"></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td id="u_gen"></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td id="u_mail"></td>
                      </tr>
                      <tr>
                        <td>Score Times:</td>
                        <td id="u_rasd"></td>
                      </tr>
                      <tr>
                        <td>Register Date:</td>
                        <td id="u_reg"></td>
                      </tr>
                      </tr>
                     
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a id="actb" href="http://www.kanimai.tk/Myprofile.php?action=edit" data-original-title="Edit this user" data-toggle="tooltip" type="button" class=""><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>

    </form>
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
                    document.getElementById('un-fi').innerHTML = username;
                }
            }

            function ClearCookie() {
                document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                location.reload();
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
$username = $_COOKIE["username"];
$action = $_GET["action"];
if ($username == "") {
    header('Location: http://www.kanimai.tk/quiz/Login.php');
} else {
$sql = "SELECT * FROM Users WHERE username='".$username."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$fname = $row['firstname'];
$lname = $row['lastname'];
$gender = $row['gender'];
$email = $row['email'];
$reg = $row['reg_date'];


if ($gender == "Female") {
echo '<script type="text/javascript">';
echo "$('#u_img').attr('src', 'https://d30y9cdsu7xlg0.cloudfront.net/png/17239-200.png')";
echo '</script>';
}
if ($action == "edit") {
echo '<script type="text/javascript">';
echo "document.getElementById('u_uname').innerHTML = 'User: $username'";
echo '</script>';
echo '<script type="text/javascript">';
echo "document.getElementById('actb').innerHTML = '<button type=\'submit\' class=\'btn btn-sm btn-primary\'>Save Changes</button>'";
echo '</script>';

echo '<script type="text/javascript">';
echo "document.getElementById('u_name').innerHTML = '<input type=\'text\' name=\'firstname\' value=\'$fname\'><br><input type=\'text\' name=\'lastname\' value=\'$lname\'>'";
echo '</script>';
echo '<script type="text/javascript">';
echo "document.getElementById('u_mail').innerHTML = '<input type=\'text\' name=\'email\' value=\'$email\'>'";
echo '</script>';
if ($gender == "Male") {
echo '<script type="text/javascript">';
echo "document.getElementById('u_gen').innerHTML = '<select name=\'gender\'><option value=\'Male\'>Male</option><option value=\'Female\'>Female</option></select>'";
echo '</script>';
} else {
echo '<script type="text/javascript">';
echo "document.getElementById('u_gen').innerHTML = '<select name=\'gender\'><option value=\'Female\'>Female</option><option value=\'Male\'>Male</option></select>'";
echo '</script>';
}
echo '<script type="text/javascript">';
echo "document.getElementById('u_reg').innerHTML = '$reg'";
echo '</script>';
} else {
echo '<script type="text/javascript">';
echo "document.getElementById('u_uname').innerHTML = 'User: $username'";
echo '</script>';
echo '<script type="text/javascript">';
echo "document.getElementById('u_name').innerHTML = '$fname $lname'";
echo '</script>';
echo '<script type="text/javascript">';
echo "document.getElementById('u_mail').innerHTML = '$email'";
echo '</script>';
echo '<script type="text/javascript">';
echo "document.getElementById('u_gen').innerHTML = '$gender'";
echo '</script>';
echo '<script type="text/javascript">';
echo "document.getElementById('u_reg').innerHTML = '$reg'";
echo '</script>';
}
}


$sql = "SELECT * FROM Rank WHERE user='".$username."' ORDER BY Time ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<script type='text/javascript'>document.getElementById('u_rasd').innerHTML = document.getElementById('u_rasd').innerHTML + '" . $row["Time"] . "<br>'</script>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>