<?php
    include 'form.php';
    $my_db = mysqli_connect('localhost', 'root', '', 'course_work');
    if (mysqli_connect_errno()) echo 'Ошибка подключения к БД'. mysqli_connect_error();
    
    if (isset($_POST['button']) && $_POST['button'] == 'Добавить запись') {
        $_SESSION['r'.$_POST['id']] = $_POST['Data'];
        $sql = 'INSERT INTO `sms`(`id`, `#_id`, `User_id`, `channel_id`, `Description`, `Data`, `save`)
            VALUES ("'.htmlspecialchars($_POST['id']).'","'.htmlspecialchars($_POST['#_id']).'",
            "'.htmlspecialchars($_POST['User_id']).'","'.htmlspecialchars($_POST['channel_id']).'",
            "'.htmlspecialchars($_POST['Description']).'","'.htmlspecialchars($_POST['Data']).'",
            "'.htmlspecialchars($_POST['save']).'")';

        $sql_res = mysqli_query($my_db, $sql);
        if (mysqli_errno($my_db)) echo 'Ошибка запроса';
        else echo '<div class = "success">Запись добавлена';
    }
    
?>