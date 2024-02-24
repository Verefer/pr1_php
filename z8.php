<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица основных цветов HTML</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Таблица основных цветов HTML</h2>

<table>
    <tr>
        <th>Цвет</th>
        <th>Шестнадцатеричное значение</th>
    </tr>
    <?php
    $intensities = array('00', '33', '66', '99', 'CC', 'FF');

    foreach ($intensities as $red) {
        foreach ($intensities as $green) {
            foreach ($intensities as $blue) {
                $color = "#$red$green$blue";
                echo "<tr>
                        <td style='background-color:$color;'>$color</td>
                        <td>$red$green$blue</td>
                      </tr>";
            }
        }
    }
    ?>
</table>

<br>

<!-- Кнопка для возврата в меню -->
<form action="index.php">
    <input type="submit" value="В меню" />
</form>

</body>
</html>
