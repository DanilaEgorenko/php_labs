<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action="answer.php" method="post">
        <input name="input" id="input" readonly value="Введите..." />
        <button>0</button><button>1</button><button>2</button>
        <button>3</button><button>4</button><button>5</button><button>6</button>
        <button>7</button><button>8</button><button>9</button>
        <button>+</button><button>-</button><button>/</button><button>*</button>
        <button>(</button><button>)</button><button>DEL</button>
        <button>sin(</button><button>cos(</button><button>tg(</button><button>ctg(</button>
        <button id="submit" type="submit">=</button>
    </form>

    <script>
        const form = document.querySelector('form')
        const input = document.querySelector('#input')
        form.addEventListener('click', e => {
            const target = e.target.textContent
            if (target !== '=') e.preventDefault()
            if (e.target !== input && target !== 'DEL' && target !== '=') {
                inputAdd(target)
            }
            if (target === 'DEL') input.value = 'Введите...'
        })

        const inputAdd = (target) => {
            if (input.value === 'Введите...') input.value = target
            if ('+-/*()sincosctg'.includes(target) || '+-/*()sincosctg'.includes(input.value[input.value.length - 1])) {
                input.value += ' ' + target
            } else {
                input.value += target
            }
        }
    </script>
</body>

</html>