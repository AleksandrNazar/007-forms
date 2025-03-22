<?php
declare(strict_types= 1);

$fileName = $_POST['file_name'];
$ext = pathinfo($_FILES['content']['name'], PATHINFO_EXTENSION);
$fileSize = round($_FILES['content']['size'] / 1000, 1);
$uploadDir = './uploads/';
$uploadFile = $uploadDir . $fileName . '.' . $ext;
$pathToShow = trim($uploadDir, '.') . $fileName . '.' . $ext;

if (!$_FILES['content']['tmp_name'] || !$fileName) {
    header('Location: ./index.php');
} else {
    move_uploaded_file($_FILES['content']['tmp_name'], $uploadFile);
    echo 'Файл сохранен в: '. $_SERVER['HTTP_ORIGIN'] . $pathToShow . '<br>';
    echo 'Размер файла: ' . $fileSize . ' КБ';
}