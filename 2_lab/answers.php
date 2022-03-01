<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 lab</title>
</head>
<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
            display: inline-flex;
        }
        header, footer {
            text-align: center;
            width: 100%;
        }
        header img {
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
        <?php
            $url = 'https://httpbin.org/post';
            $answer = get_headers($url);
        ?>

        <textarea name="" id="" cols="30" rows="20">
            <?php
                print_r($answer);
            ?>
        </textarea>

        <textarea name="" id="" cols="30" rows="20">
            <?php
                var_dump($answer);
            ?>
        </textarea>
    </main>

    <footer>
        Егоренко Данила 211-322
    </footer>
</body>
</html>