<?php
    include('conn.php');
    include('student.php');
    $stu = new Student;
    $row = $stu->showAll();
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
<nav>
    <a href="create.php">新增資料</a>
</nav>
<table>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>
    <?php foreach($row as $r){ ?>
        <tr>
            <td><?php echo $r["id"];?></td>
            <td><?php echo $r["name"];?></td>
            <td><?php echo $r["phone"];?></td>
            <td><?php echo $r["email"];?></td>
            <td>
                <a href="delete.php?id=<?php echo $r["id"];?>" onclick="return confirm('確認刪除？')">刪除</a>
            </td>
            <td>
                <a href="edit.php?id=<?php echo $r["id"];?>">編輯</a>
            </td>
        </tr>
    <?php } ?>

</table>
</body>
</html>