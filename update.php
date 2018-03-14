<?php
require('connect_mysql.php');
$id = $_GET['id'];
echo $id;
$sql = "SELECT * FROM students where id='$id'";
$res = $conn->query($sql);
if($res->num_rows > 0) {
    $row = $res->fetch_assoc();

?>
<center>
    <form>
        <table>
            <tr>
                <td><b>ID:</b></td>
                <td><input type="text" value="<?php echo $row['id']?>"></td>
            </tr>
            <tr>
                <td><b>Name:</b></td>
                <td><input type="text" value="<?php echo $row['name']?>"></td>
            </tr>
            <tr>
                <td><b>Email:</b></td>
                <td><input type="email" value="<?php echo $row['email'] ?>"</td>
            </tr>
            <tr>
                <td><input type="submit" value="Update"></td>
                <td><inpu type="reset" value="Cancel"></td>
            </tr>
        </table>
    </form>
</center>
<?php
}
?>