<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Егоренко Данила 211-322</title>
    <?php
        $linkLMS = 'https://online.mospolytech.ru'
    ?>
</head>
<body>
    <style>
        *:not(img) {
            text-align: center;
            width: 100%;
            margin: 0;
        }
        header {
            display: inline-flex;
        }
        img {
          height: 60px;
          position: absolute;
        }
        footer {
          position: absolute;
          bottom: 0;
        }
    </style>

    <header>
        <img src="https://lms.mospolytech.ru/fls/6_mgvmi.jpg" alt="Логотип МосПолитеха">
        <h1>Задание №1</h1>
    </header>

    <main>
        <a href="<?=$linkLMS?>">СДО МосПолитеха</a>
    </main>

    <footer>
        Егоренко Данила 211-322
    </footer>
</body>
</html>