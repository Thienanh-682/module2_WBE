<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="">
    <?php
    include_once "StudentsManager.php";
    $id = $_GET['id'];
    $listStudent = $manager->readFileJsonToArray();
    $listStudent[$id] = [
        "name" => $_GET["name"],
        "address" => $_GET["address"],
        "phone" => $_GET["phone"],
        "class" => $_GET["class"],
        "role" => $_GET["role"],
    ];
    var_dump($listStudent);
    $manager->saveDataToJson($listStudent);
    header('Location:display.php');
    ?>


</form>
</body>
</html>
