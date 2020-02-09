<form action="" method="post"><div>
<div><label for="Place">Place</label><div class="mw-input"><input id="plce" name="place" size="20" value=""  tabindex="1" required="">
</div></div>
<div><label for="coords">Coords</label><div><input id="coords" name="coords" size="20" tabindex="2" required="" autofocus="" type="text">
</div></div>
</div></div><div><div><button id="wpLoginAttempt" type="submit" name="wploginattempt" value="புகுபதிகை" tabindex="4">புகுபதிகை</button>
</form>
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
$place = $_POST['place'];
$coords = $_POST['coords'];
$sql = "INSERT INTO LKCoords (place, coords)
VALUES ('$place', '$coords')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>