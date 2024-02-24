<!DOCTYPE html>
<html>
    <head>
        <title>Задание 1</title>
    </head>
    <body>
    
        <font size=5>Задание 1</font>
        <br>

        <?php
            //Задание 1            
                    // Создаем переменные с названиями товаров
            $product1 = "Чайник";
            $product2 = "Кофейник";
            $product3 = "Кипятильник";

            // Создаем переменные с ценами товаров
            $price1 = 300;
            $price2 = 150;
            $price3 = 270;

            // Выводим информацию в виде таблицы
            echo "<table border='1'>
                    <tr>
                        <th>Название товара</th>
                        <th>Цена</th>
                    </tr>
                    <tr>
                        <td>$product1</td>
                        <td>$price1</td>
                    </tr>
                    <tr>
                        <td>$product2</td>
                        <td>$price2</td>
                    </tr>
                    <tr>
                        <td>$product3</td>
                        <td>$price3</td>
                    </tr>
                </table>";

        // Рассчитываем и выводим среднюю цену товара
        $averagePrice = ($price1 + $price2 + $price3) / 3;
        echo "<p>Средняя цена товара: $averagePrice</p>";
        ?>
        <br>

        <form action="index.php">
             <input type="submit" value="В меню" />
        </form>



    </body>
</html>