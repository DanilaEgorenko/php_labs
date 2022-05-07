<?php
    $row = [
        'id'=>'',
        '#_id'=>'',
        'User_id'=>'',
        'channel_id'=>'',
        'Description'=>'',
        'Data'=>'',
        'save'=>'',
    ];
?>
<form name="form_add" method="post">
    <div class="column">
        <div class="add">
            <label>id</label> <input type="number" name="id" placeholder="id" value="<?=$row['id'];?>">
        </div>
        <div class="add">
            <label>#_id</label> <input type="number" name="#_id" placeholder="#_id" value="<?=$row['#_id'];?>">
        </div>
        <div class="add">
            <label>User_id</label> <input type="number" name="User_id" placeholder="User_id" value="<?=$row['User_id'];?>">
        </div>
        <div class="add">
            <label>channel_id</label> <input type="number" name="channel_id" placeholder="channel_id" value="<?=$row['channel_id'];?>">
        </div>
        <div class="add">
            <label>Description</label> <input type="text" name="Description" placeholder="Description" value="<?=$row['Description'];?>">
        </div>
        <div class="add">
            <label>Data</label> <input type="text" name="Data" placeholder="Data" value="<?=$row['Data'];?>"> 
        </div>
        <div class="add">
            <label>save</label> <input type="number" name="save" value="<?=$row['save'];?>">
        </div>
        <button type="submit" value="Добавить запись" name="button" class="form-btn">Добавить запись</button>
    </div>
    </form>