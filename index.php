<!doctype html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Blog</title>
</head>
<?php

$connection = new PDO('mysql:host=localhost;dbname=test_db;charset=utf8', 'admin123', 'admin123');


if($connection ==false){
    echo '<h1>BНе работает</h1>';
    echo mysqli_connect_error();
    die();
}
$connection->exec("set names utf8");
// mysqli_set_charset($connection, 'utf8');
// $result = mysqli_query($connection,"SELECT * FROM articles");
$result = $connection->query("SELECT * FROM `articles_categories`");

// $r1 = mysqli_fetch_assoc($result);
// $r1 = $result->fetch(PDO::FETCH_ASSOC);

while(($r1 = $result->fetch(PDO::FETCH_ASSOC)))
{
print_r($r1);
echo'<hr>';
}


?>
<body>
    <div class="container-sm">
        <div class="row">
            <div class="col-12 text-center big">
                Проверка текста 01
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>