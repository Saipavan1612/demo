<?php
require('connect_mysql.php');
$id = $_POST['id'];
$stdname = $_POST['stdname'];
$email = $_POST['email'];
$sql = "UPDATE students SET name='$stdname',email='$email' WHERE id = '$id' ";
if($conn->query($sql) == TRUE) {
    echo '<h3>SUCCESSFULLY UPDATED</h3>';
}
else {
    echo '<h3>FAIL</h3>';
}
?>

