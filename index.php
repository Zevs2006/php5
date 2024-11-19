<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tasks</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        pre { background-color: #f4f4f4; padding: 10px; border-radius: 5px; }
        table { border-collapse: collapse; width: 50%; margin-bottom: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>PHP Tasks</h1>

    <!-- Task 1 -->
    <h2>1. Таблица умножения</h2>
    <table>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>{$i} * {$j} = " . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <!-- Task 2 -->
    <h2>2. Фильтрация массива с числами</h2>
    <?php
    $numbers = array_map(fn() => rand(1, 100), range(1, 15));
    $filtered = array_filter($numbers, fn($num) => $num % 5 === 0);
    ?>
    <p><strong>Исходный массив:</strong> <?= implode(", ", $numbers); ?></p>
    <p><strong>Числа, делящиеся на 5:</strong> <?= implode(", ", $filtered); ?></p>

    <!-- Task 3 -->
    <h2>3. Подсчет гласных в строке</h2>
    <?php
    $string = "Hello, world!";
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

    foreach (str_split(strtolower($string)) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    ?>
    <p>Количество гласных в строке <strong>"<?= $string ?>"</strong>: <?= $count; ?></p>

    <!-- Task 4 -->
    <h2>4. Проверка на палиндром</h2>
    <?php
    function isPalindrome($str) {
        $str = strtolower(preg_replace('/[^a-z0-9]/i', '', $str));
        return $str === strrev($str);
    }

    $testStrings = ["level", "hello", "Madam"];
    ?>
    <ul>
        <?php foreach ($testStrings as $test): ?>
            <li>"<?= $test ?>" <?= isPalindrome($test) ? "является" : "не является"; ?> палиндромом.</li>
        <?php endforeach; ?>
    </ul>

    <!-- Task 5 -->
    <h2>5. Генератор случайного пароля</h2>
    <?php
    function generatePassword($length = 8) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $password;
    }
    ?>
    <p>Случайный пароль: <strong><?= generatePassword(); ?></strong></p>
</body>
</html>
