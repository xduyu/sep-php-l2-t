<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // echo '123 </br>';
    // $pub = '123';

    // $str = 'Привет';
    // $pos = mb_strpos($str, 'и');
    // echo "Длинна строки ($str) " . mb_strlen($str) . '</br>';
    // echo "Индекс элемента ($str) " . $pos;

    // $text = "banana banana b  vbaba         fsd";
    // $text2 = 'Убрать пробелы | ';
    // echo str_replace('a', 'i', $text) . '</br>';
    // echo trim($text) . '</br>';
    // echo mb_strtoupper($text2) . mb_strtolower($text2) . trim($text);

    // 2

    // $val = "123.55";
    // $num_val = (string)123.45; // первый способ
    // settype($val, "integer"); // второй способ
    // var_dump(abs(ceil($val)));
    // var_dump($num_val);

    // $num = 3;
    // echo sqrt(3500);

    // $num = 10;
    // var_dump(5 == "5"); // true
    // echo "</br>";
    // var_dump(5 === "5"); // false
    // echo "</br>";
    // var_dump(strtolower("F") === strtolower("f")); // true
    // var_dump(5 > 5); // false
    // var_dump(5 != 5); // false

    // условные операторы

    // $age = 18;
    // if ($age >= 14) {
    //     echo ('Получен паспорт');
    // } else {
    //     echo ('Паспорт не получен');
    // }

    // $score = 70;

    // if ($score >= 90) {
    //     echo 5;
    // } elseif ($score >= 80) {
    //     echo 4;
    // } elseif ($score >= 70) {
    //     echo 3;
    // } elseif ($score <br 70) {
    //     echo 2;
    // }

    // // первый способ
    // $balance = 0;
    // echo $balance > 0 ? 'Активен' : 'Заблокирован';

    // $day = 2;
    // switch ($day) {
    //     case 1:
    //         echo 'Пн';
    //         break;
    //     case 2:
    //         echo 'Вт';
    //         break;
    //     case 3:
    //         echo 'Ср';
    //         break;
    //     case 4:
    //         echo 'Чт';
    //         break;
    //     case 5:
    //         echo 'Пт';
    //         break;
    //     case 6:
    //         echo 'Сб';
    //         break;
    //     case 7:
    //         echo 'Вс';
    //         break;

    //     default:
    //         echo 'Не указано';
    //         break;
    // }

    $figure = strtolower('pawn');
    echo "Ваша фигура: <strong>$figure</strong> </br>";
    echo "Начальная позиция </br>";
    switch ($figure) {
        case 'king':
            echo 'd Доступные позиции: </br>';
            echo 'X: a, b, c, d, e, f, g, h </br>';
            echo 'Y: 1, 2, 3, 4, 5, 6, 7, 8 </br>';
            break;
        case 'm_queen':
            echo 'a, h Доступные позиции: </br>';
            echo 'X: a, b, c, d, e, f, g, h </br>';
            echo 'Y: 1, 2, 3, 4, 5, 6, 7, 8 </br>';
            break;
        case 'horse':
            echo 'b, g Доступные позиции: </br>';
            echo 'X: a, c, d </br>';
            echo 'Y: 3, 2 </br>';
            break;
        case 'pawn':
            echo 'a, b, c, d, e, f, g, h Доступные позиции: </br>';
            echo 'X: - </br>';
            echo 'Y: 3, 4 </br>';
            break;
        case 'w_queen':
            echo 'e Доступные позиции: </br>';
            echo 'X: e, f, d  </br>';
            echo 'Y: 1, 2 </br>';
            break;
        case 'elephant':
            echo 'f, c Доступные позиции: </br>';
            echo 'X: a, b, c, d, e, f, g </br>';
            echo 'Y: 1, 2 </br>';
            break;

        default:
            echo 'Не выбрана фигура';
            break;
    }
    ?>
</body>

</html>