<?php
    function getList() {
        $my_db = mysqli_connect('localhost', 'root', '', 'course_work');
        if (mysqli_connect_errno()) echo 'Ошибка подключения к БД'. mysqli_connect_error();

        $sql = 'SELECT * FROM `sms`';
        $sql_res = mysqli_query($my_db, $sql);
        if (mysqli_errno($my_db)) return 'Ошибка запроса';
        if (!$row = mysqli_fetch_row($sql_res)) return 'В таблице нет записей';

        $sql_res = mysqli_query($my_db, $sql);
        if (mysqli_errno($my_db)) return 'Ошибка запроса';

        $result = '<ol>';
        foreach ($_SESSION as $key=>$value) {
            $result .= '<li>'.$value.'</li>';
        }
        $result .= '</ol>';

        return $result;
    }
?>