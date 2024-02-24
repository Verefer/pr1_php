<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая работа №1</title>
    <style>
    body {
        text-align: center;
        margin-top: 50px;
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
    }

    h1 {
        color: #dc3545;
    }

    form {
        margin-bottom: 20px;
    }

    button {
        padding: 12px 24px;
        font-size: 18px;
        margin-right: 10px;
        background-color: orange;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.3s;
    }

    button:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }
</style>

</head>
<body>

<h1>Практическая работа №1</h1>

<?php
function createButton($taskNumber, $filePath) {
    echo "<form method='post' action='$filePath'>";
    echo "<button type='submit' name='task' value='$taskNumber'>Задание $taskNumber</button>";
    echo "</form>";
}

$buttons = array(
    array("number" => 1, "file_path" => 'z1.php'),
    array("number" => 2, "file_path" => 'z2.php'),
    array("number" => 3, "file_path" => 'z3.php'),
    array("number" => 4, "file_path" => 'z4.php'),
    array("number" => 5, "file_path" => 'z5.php'),
    array("number" => 6, "file_path" => 'z6.php'),
    array("number" => 7, "file_path" => 'z7.php'),
    array("number" => 8, "file_path" => 'z8.php'),
    array("number" => 9, "file_path" => 'z9.php'),
);

foreach ($buttons as $button) {
    createButton($button["number"], $button["file_path"]);
}

if (isset($_POST['task'])) {
    $selectedTask = $_POST['task'];
    echo "<p>Выбрано задание $selectedTask</p>";
}
?>

</body>
</html>
