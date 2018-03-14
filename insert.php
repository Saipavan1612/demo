<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Add Student</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
        
        </script>
    </head>
    <body>
    <?php 
    date_default_timezone_set('Asia/Kolkata');
    ?>
    <center>
        <form action="insert_data.php" method="post">
            <table>
                <tr>
                    <td><b>ID</b></td>
                    <td><input type="text" name="id" value="<?php print date("Ymdhis")?>" required readonly></td>
                </tr>
                <tr>
                    <td><b>Enter name:</b></td>
                    <td><input type="text" name="stdname" required></td>
                </tr>
                <tr>
                    <td><b>Enter Email:</b></td>
                    <td><input type="email" name="stdemail" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="SUBMIT"></td>
                    <td><input type="reset" value="cancel"></td>
                </tr>
            </table>
        </form>
    </center>
    </body>
</html>
