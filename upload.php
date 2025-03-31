<?php
declare(strict_types= 1);

if (empty($_POST['file_name'])) {
    header('Location: ./index.php');
} else {
    $fileName = $_POST['file_name'];
}

if (!isset($_FILES['content']) || $_FILES['content']['error'] !== UPLOAD_ERR_OK) {
    header('Location: ./index.php');
    exit;
}

$ext = pathinfo($_FILES['content']['name'], PATHINFO_EXTENSION);
$fileSize = round($_FILES['content']['size'] / 1000, 1);
$uploadDir = './uploads/';
$uploadFile = $uploadDir . $fileName . '.' . $ext;
$pathToShow = trim($uploadDir, '.') . $fileName . '.' . $ext;

if (!$_FILES['content']['tmp_name'] || !$fileName) {
    header('Location: ./index.php');
} else {

    if (move_uploaded_file($_FILES['content']['tmp_name'], $uploadFile)) {
        echo 'Файл сохранен в: '. $_SERVER['HTTP_ORIGIN'] . $pathToShow . '<br>';
        echo 'Размер файла: ' . $fileSize . ' КБ';
    } else {
        header('Location: ./index.php');
    }
}