<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Students</title>
        <script>

        </script>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        <?php
        require('connect_mysql.php');
        $sql = "SELECT * FROM students";
        $res = $conn->query($sql);
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                ?>
            <tr>
                <td><a href='update.php?id=<?php echo $row['id']?>' target=_blank><?php echo $row['id'] ?></a></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
            </tr>
                <?php
            }
        }
        ?>
        </table>
    </body>
</html>
