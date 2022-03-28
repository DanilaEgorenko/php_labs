<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function input($input)
        {
            $splittedString = explode(' ', $input);
            $operand = $splittedString[1];
            $variable = array_search('X', $splittedString);
            if ($variable == 0) return calc($splittedString[4], $splittedString[2], $operand);
            if ($variable == 2) return calc($splittedString[4], $splittedString[0], $operand);
        }
        function calc($first, $second, $operand)
        {
            if ($operand == '+') return $first - $second;
            if ($operand == '-') return $first + $second;
            if ($operand == '/') return $first * $second;
            if ($operand == '*') return $first / $second;
        }
        echo input('X + 33 = 20');
        echo input('X * 3 = 6');
        echo input('33 + X = 20');
        echo input('3 * X = 6');
    ?>
</body>
</html>