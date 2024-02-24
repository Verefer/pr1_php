<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обработка ассоциативного массива</title>
</head>
<body>

<?php
// Создание ассоциативного массива ТОВАР => ЦЕНА
$products = array(
    "Кофеварка" => 1500,
    "Пылесос" => 700,
    "Утюг" => 300,
);

// Добавление оставшихся элементов массива непосредственно в операторе присваивания
$products["Микроволновка"] = 2000;
$products["Тостер"] = 400;

// Вывод товаров и их цен с использованием оператора цикла foreach
echo "<h3>Товары и их цены:</h3>";
foreach ($products as $product => $price) {
    echo "<p>$product: $price р.</p>";
}

// Подсчет количества товаров и их суммарной стоимости
$numberOfProducts = count($products);
$totalPrice = array_sum($products);

echo "<p>Количество товаров: $numberOfProducts</p>";
echo "<p>Суммарная стоимость товаров: $totalPrice р.</p>";

// Сортировка массива по возрастанию цены
asort($products);

echo "<h3>Массив после сортировки по возрастанию цены:</h3>";
foreach ($products as $product => $price) {
    echo "<p>$product: $price р.</p>";
}

// Сортировка массива по убыванию цены
arsort($products);

echo "<h3>Массив после сортировки по убыванию цены:</h3>";
foreach ($products as $product => $price) {
    echo "<p>$product: $price р.</p>";
}

// Сортировка массива по алфавиту (по названию товаров)
ksort($products);

echo "<h3>Массив после сортировки по алфавиту (по названию товаров):</h3>";
foreach ($products as $product => $price) {
    echo "<p>$product: $price р.</p>";
}
?>

<!-- Кнопка для возврата в меню -->
<form action="index.php">
    <input type="submit" value="В меню" />
</form>

</body>
</html>