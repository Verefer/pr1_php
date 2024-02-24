<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2</title>
</head>
<body>


<?php

    $product1 = array("name" => "Чайник", "price" => 50);
    $product2 = array("name" => "Кружка", "price" => 75);
    $product3 = array("name" => "Тарелка", "price" => 60);
?>


<!-- Таблица с товарами -->
<table border="1">
    <thead>
        <tr>
            <th>Название товара</th>
            <th>Цена товара</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $product1["name"]; ?></td>
            <td><?php echo $product1["price"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $product2["name"]; ?></td>
            <td><?php echo $product2["price"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $product3["name"]; ?></td>
            <td><?php echo $product3["price"]; ?></td>
        </tr>
    </tbody>
</table>

<br>




<?php
    // Определение самого дорогого товара
    if ($product1["price"] > $product2["price"] && $product1["price"] > $product3["price"]) {
        $max_price = $product1["price"];
        $max_product = $product1["name"];
    } elseif ($product2["price"] > $product3["price"]) {
        $max_price = $product2["price"];
        $max_product = $product2["name"];
    } else {
        $max_price = $product3["price"];
        $max_product = $product3["name"];
    }

    // Вывод результата
    echo "<p>Самый дорогой товар: $max_product, Цена: $max_price</p>";

    // Определение товара с минимальной ценой
    $min_price = $product1["price"];
    $min_product = $product1["name"];

    if ($product2["price"] < $min_price) {
        $min_price = $product2["price"];
        $min_product = $product2["name"];
    }

    if ($product3["price"] < $min_price) {
        $min_price = $product3["price"];
        $min_product = $product3["name"];
    }

    // Вывод результата
    echo "<p>Товар с минимальной ценой: $min_product, Цена: $min_price</p>";
?>


<!-- Кнопка для возврата в меню -->
<form action="index.php">
    <input type="submit" value="В меню" />
</form>


</body>
</html>
