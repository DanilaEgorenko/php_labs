<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ответ: </h1>
    <?php
    error_reporting(0);
         if(isset($_POST['input'])) {
             $input = $_POST['input'];
             $splittedInput = explode(' ', $input);
             $braces = 0;
             for ($i = 0; $i < count($splittedInput); $i++) {
                 if ($splittedInput[$i] == '(') $braces++;
                 if ($splittedInput[$i] == ')') $braces--;
                 if ($braces != 0 && $i == count($splittedInput) - 1) throw new Exception('Валидация не пройдена на '.$i.' значении');
             }

             function calc($input) {
                // время для бойлерплейт-кода :(
                for ($i = 0; $i < count($input); $i++) {
                    if ($input[$i] == '*') {
                        $input[$i-1] = (int)$input[$i-1] * (int)$input[$i+1];
                        array_splice($input, $i, 2);
                    }
                    if ($input[$i] == '/') {
                        $input[$i-1] = (int)$input[$i-1] / (int)$input[$i+1];
                        array_splice($input, $i, 2);
                    }
                }
                for ($i = 0; $i < count($input); $i++) {
                    if ($input[$i] == '+') {
                        $input[$i-1] = (int)$input[$i-1] + (int)$input[$i+1];
                        array_splice($input, $i, 2);
                    }
                    if ($input[$i] == '-') {
                        $input[$i-1] = (int)$input[$i-1] - (int)$input[$i+1];
                        array_splice($input, $i, 2);
                    }
                }
                while (array_search('+', $input) != 0 ||
                   array_search('-', $input) != 0 ||
                   array_search('*', $input) != 0 ||
                   array_search('/', $input) != 0) {
                    $input =  calc($input);
                }
                return $input;
            }

             while (array_search('(', $splittedInput) != 0 && array_search(')', $splittedInput) != 0) {
                $first = array_search('(', $splittedInput);
                $second = array_search(')', $splittedInput);
                $splittedInput[$first] = implode(' ', calc(array_slice($splittedInput, $first + 1, $second - $first - 1)));
                for ($i = 1; $i < $second - $first + 1; $i++) {
                    unset($splittedInput[$first + $i]);
                }
             }
            echo '<h1>'.implode(' ', calc($splittedInput)).'</h1>';
         }
    ?>
</body>
</html>