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
        <form action="https://httpbin.org/post" method="POST">
            <label for="name_id">Введите имя:</label>
            <input type="text" name="name" id="name_id">

            <label for="email_id">Введите e-mail:</label>
            <input type="email" name="name" id="email_id">

            <textarea name="" id="" cols="30" rows="10" placeholder="Текст обращения"></textarea>

            <select name="select">
                <option value="value1">Жалоба</option>
                <option value="value2" selected>Предложение</option>
            </select>

            <div>
                <input type="checkbox" id="call_back" name="call_back" checked>
                <label for="call_back">Перезвонить</label>
            </div>

            <a href="/2_lab/answers.php">Ответ</a>
            <button type="submit">Отправить</button>
        </form>
    </main>

    <footer>
        Егоренко Данила 211-322
    </footer>
</body>
</html>