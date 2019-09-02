<?php
    include("conn.php");
    include("student.php");
    $student = new Student;
    $row = $student->show($_GET["id"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編輯資料</title>
</head>
<body>
    <form action="update.php" method="post">
        <div>
            <label for="">姓名</label>
            <input type="text" name="name" value="<?php echo $row["name"];?>">
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone" value="<?php echo $row["phone"];?>">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" value="<?php echo $row["email"];?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $row["id"];?>">
        <input type="submit" value="編輯">
        <input type="button" value="取消" onclick="history.back();">
    </form>
</body>
</html>