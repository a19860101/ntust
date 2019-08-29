<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="post">
        <div>
            <label for="">姓名</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="新增">
        <input type="button" value="取消" onclick="history.back();">
    </form>
</body>
</html>