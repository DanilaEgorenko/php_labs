<?php
    function getFunctionAndValue($fn, $val) {
        if ($fn != 'sin' && $fn != 'cos' && $fn != 'tg' && $fn != 'ctg') {
            throw new Exception('Несуществующая функция');
        }
        return $fn($val);
    }
?>