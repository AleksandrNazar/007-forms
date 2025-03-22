<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<form enctype="multipart/form-data" action="./upload.php" method="post">
    <label>
        С каким именем сохранить файл на сервере
        <input type="text" name="file_name">
    </label><br>
    <label>
        Выберите файл
        <input type="file" name="content">
    </label><br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>