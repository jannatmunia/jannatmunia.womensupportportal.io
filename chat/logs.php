<?php
include ("./../raw/connect.php");
mysqli_select_db($conn,'userdb');

$result1 = mysqli_query($conn, "SELECT * FROM logs ORDER BY id DESC");

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}