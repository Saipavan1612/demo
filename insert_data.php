<?php
require('connect_mysql.php');
$stdid = $_POST['id'];
$stdname = $_POST['stdname'];
$stdemail  =$_POST['stdemail'];
$sql = "INSERT INTO students values('$stdid','$stdname','$stdemail')";
if($conn->query($sql) == TRUE) {
    echo '<h3>INSERT SUCCESS</h3>';
}
else {
    echo '<h3>FAIL</h3>';
}
