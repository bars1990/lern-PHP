<! Doctype html>
<html lang = 'ru'>
<head>
    <title>Простейший php - сценарий</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Здравствуйте!</h1>
<p>
    <?php
    //Вычисляем текущую дату в формате день.мксяц.год
    $date = date("d.m y");
    //Вычисляем текущее время
    $tm = date("h:i:s");
    #Выводим их
    echo "Текущая дата: $date года<br/>/n";
    echo "Текущее время: $tm<br/>/n";
    #Выводим цифры
    echo "а вот квадраты и кубы первых 5 натуральных чисел:<br/>/n";
    echo "<ul>/n";
    for ($i = 1; $i <=5;$I++) {
        echo "<li> $i в квадрате =" .($i*$i);
        echo ", $i в кубе ".($i*$i*$i)."</li>";
    }
    ?>
</p>
</body>
</html>

