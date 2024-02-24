<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Генерация случайных чисел</title>
</head>
<body>

<?php
// Заданное значение суммы
$n = 100;

// Инициализация переменных
$sum = 0;
$generatedNumbers = [];

// Генерация случайных чисел до достижения суммы $n
while ($sum < $n) {
    $randomNumber = rand(1, 10); // Генерация случайного числа от 1 до 10
    $sum += $randomNumber;
    $generatedNumbers[] = $randomNumber;
}

// Вывод сгенерированных чисел и их суммы
echo "<p>Сгенерированные числа: " . implode(', ', $generatedNumbers) . "</p>";
echo "<p>Сумма чисел: $sum</p>";
?>
<br>
<!-- Кнопка для возврата в меню -->
<form action="index.php">
    <input type="submit" value="В меню" />
</form>
</body>
</html>
