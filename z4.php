<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 4</title>
</head>
<body>

<h2>Прогноз стоимости товара</h2>

<!-- Цикл while -->
<?php
$initialPrice = 100;
$inflationRate = 0.1; // 10%

$year = 2022;
$currentPrice = $initialPrice;

echo "<h3>Цикл while:</h3>";
echo "<table border='1'><tr><th>ГОД</th><th>ЦЕНА</th><th>ИНФЛЯЦИЯ</th></tr>";

while ($currentPrice <= 150) {
    echo "<tr><td>$year</td><td>$currentPrice р.</td><td>" . ($inflationRate * 100) . "%</td></tr>";
    $currentPrice += $currentPrice * $inflationRate;
    $inflationRate += 0.035; // Увеличение процента инфляции на 3.5% каждый год
    $year++;
}

echo "</table>";
?>

<br>

<!-- Цикл for -->
<?php
$initialPrice = 100;
$inflationRate = 0.1; // 10%

echo "<h3>Цикл for:</h3>";
echo "<table border='1'><tr><th>ГОД</th><th>ЦЕНА</th><th>ИНФЛЯЦИЯ</th></tr>";

for ($year = 2022; $year <= 2026; $year++) {
    echo "<tr><td>$year</td><td>$initialPrice р.</td><td>" . ($inflationRate * 100) . "%</td></tr>";
    $initialPrice += $initialPrice * $inflationRate;
    $inflationRate += 0.035; // Увеличение процента инфляции на 3.5% каждый год
}

echo "</table>";
?>

<br>

<!-- Модифицированный расчет -->
<?php
$initialPrice = 100;
$inflationRate = 0.1; // 10%

echo "<h3>Модифицированный расчет:</h3>";
echo "<table border='1'><tr><th>ГОД</th><th>ЦЕНА</th><th>ИНФЛЯЦИЯ</th></tr>";

for ($year = 2022; $year <= 2031; $year++) {
    echo "<tr><td>$year</td><td>$initialPrice р.</td><td>" . ($inflationRate * 100) . "%</td></tr>";
    $initialPrice += $initialPrice * $inflationRate;

    if ($initialPrice >= 170) {
        $inflationRate -= 0.035; // Уменьшение процента инфляции на 3.5% каждый год после достижения 170 р.
    }
}

echo "</table>";
?>

<br>


<!-- Кнопка для возврата в меню -->
<form action="index.php">
    <input type="submit" value="В меню" />
</form>


</body>
</html>
