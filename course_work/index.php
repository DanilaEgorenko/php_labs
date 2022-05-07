<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course work</title>
    <link href="style.css" rel="stylesheet"></link>
</head>
<body>
    <main>
        <?php
            session_start();
            include 'view.php';
            echo getList();
            include 'add.php';
        ?>
    </main>
</body>
</html>