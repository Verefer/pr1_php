<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа с массивами</title>
</head>
<body>

<?php
// Создание списка товаров с помощью функции array()
$products = array("Книга", "Планшет", "Наушники", "Кофеварка", "Холодильник");

// Добавление еще двух элементов массива с помощью идентификатора массива
$products[] = "Микроволновка";
$products[] = "Утюг";

// Определение количества элементов массива
$numberOfProducts = count($products);

// Вывод названий товаров в цикле for
echo "<h3>Названия товаров в цикле for:</h3>";
for ($i = 0; $i < $numberOfProducts; $i++) {
    echo "<p>$products[$i]</p>";
}

// Модификация программы: сортировка массива в алфавитном порядке
sort($products);

// Вывод исходного и отсортированного массивов
echo "<h3>Исходный массив:</h3>";
print_r($products);

echo "<h3>Массив после сортировки:</h3>";
foreach ($products as $product) {
    echo "<p>$product</p>";
}
?>

<!-- Кнопка для возврата в меню -->
<form action="index.php">
    <input type="submit" value="В меню" />
</form>


</body>
</html>
