<?php
include ("./../raw/connect.php");

$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

mysqli_select_db($conn,'userdb');

mysqli_query($conn,"INSERT INTO logs (`username`, `msg`) VALUES ('$uname', '$msg')");

$result1 = mysqli_query($conn,"SELECT * FROM logs ORDER BY id DESC");

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}