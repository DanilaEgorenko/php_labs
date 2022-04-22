<?php
    $my_db = mysqli_connect('localhost', 'root', '', 'friends');
    if (mysqli_connect_errno()) echo 'Ошибка подключения к БД'. mysqli_connect_error();

    if (isset($_POST['button']) && $_POST['button'] == 'Изменить запись') {
        $sql = 'DELETE FROM `notebook` WHERE `id` = '.$_GET['id'].'';
        $sql_res = mysqli_query($my_db, $sql);
        if (mysqli_errno($my_db)) echo 'Ошибка запроса';
        else echo '<div class = "success">Запись обновлена</div>';
    }
    

    $sql = 'SELECT `id`, `surname`, LEFT(`name`, 1) as `name` FROM `notebook`';
    $sql_res = mysqli_query($my_db, $sql);
    if (mysqli_errno($my_db)) echo 'Ошибка запроса';

    while ($row = mysqli_fetch_assoc($sql_res)){
        echo '<div class="div-edit">';
        echo '<a href="?id='.$row['id'].'&p=edit">'.$row['surname'].' '.$row['name'].'.</a></div>';
    }

    if (isset($_GET['id'])) include 'form.php';
?>