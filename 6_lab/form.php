<?php
    $row = [
        'surname'=>'',
        'name'=>'',
        'lastname'=>'',
        'gender'=>'',
        'date'=>'',
        'phone'=>'',
        'location'=>'',
        'email'=>'',
        'comment'=>'',
    ];
    $button = 'Добавить запись';
    if (isset($_GET['id'])) {
        $button = 'Изменить запись';
        $my_db = mysqli_connect('localhost', 'root', '', 'friends');
        if (mysqli_connect_errno()) echo 'Ошибка соединения с БД'. mysqli_connect_error();

        $sql = 'SELECT * FROM `notebook` WHERE `id` = "'.$_GET['id'].'"';
        $sql_res=mysqli_query($my_db, $sql);
        if (mysqli_errno($my_db)) echo 'Ошибка запроса.';
        else $row = mysqli_fetch_assoc($sql_res);
    }
    if (isset($_GET['id']) && $_GET['p'] == 'delete') {
        $button = 'Удалить запись';
        $my_db = mysqli_connect('localhost', 'root', '', 'friends');
        if (mysqli_connect_errno()) echo 'Ошибка соединения с БД'. mysqli_connect_error();

        $sql = 'SELECT * FROM `notebook` WHERE `id` = "'.$_GET['id'].'"';
        $sql_res=mysqli_query($my_db, $sql);
        if (mysqli_errno($my_db)) echo 'Ошибка запроса.';
        else $row = mysqli_fetch_assoc($sql_res);
    }
?>
<form name="form_add" method="post">
    <div class="column">
        <div class="add">
            <label>Фамилия</label> <input type="text" name="surname" placeholder="Фамилия" value="<?=$row['surname'];?>">
        </div>
        <div class="add">
            <label>Имя</label> <input type="text" name="name" placeholder="Имя" value="<?=$row['name'];?>">
        </div>
        <div class="add">
            <label>Отчество</label> <input type="text" name="lastname" placeholder="Отчество" value="<?=$row['lastname'];?>">
        </div>
        <div class="add">
            <label>Пол</label> 
            <select name="gender">
                <option value='<?=$row['gender'];?>'><?=$row['gender'];?></option>
                <option value="мужской">мужской</option>
                <option value="женский">женский</option>
            </select>
        </div>
        <div class="add">
            <label>Дата рождения</label> <input type="date" name="date" value="<?=$row['date'];?>">
        </div>
        <div class="add">
            <label>Телефон</label> <input type="text" name="phone" placeholder="Телефон" value="<?=$row['phone'];?>">
        </div>
        <div class="add">
            <label>Адрес</label> <input type="text" name="location" placeholder="Адрес" value="<?=$row['location'];?>"> 
        </div>
        <div class="add">
            <label>Email</label> <input type="email" name="email" placeholder="Email" value="<?=$row['email'];?>">
        </div>
        <div class="add">
            <label>Комментарий</label> <textarea name="comment" placeholder="Краткий комментарий"><?=$row['comment'];?></textarea>
        </div>
    
            <button type="submit" value="<?=$button;?>" name="button" class="form-btn"><?=$button;?></button>
    </div>
    </form>