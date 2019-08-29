<?php
    include("conn.php");
    // include_once()
    // require();
    // require_once(  )
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,td,th{
            border: 1px solid #666;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>
    <?php
        while($row = mysqli_fetch_assoc($result)){
            // echo "<tr>";
            // echo "<td>".$row["id"]."</td>";
            // echo "<td>".$row["name"]."</td>";
            // echo "<td>".$row["phone"]."</td>";
            // echo "<td>".$row["email"]."</td>";
            // echo "</tr>";
            echo "<tr>";
            echo "<td>{$row["id"]}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['phone']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "</tr>";

        }
    ?>
</table>
</body>
</html>