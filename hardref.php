<?php
## Жестакая ссылка на элемент массива
$A = array(
    'Вилка'=> '275',
    'Сковорода' => '275'
);
$b =& $A['ложка']; // Тоже самое что и элемент с нидексом ложка - ссылка на элементв ложка в массиве А
echo "Элемент с индексом 'ложка' " .$A['ложка'],"<br />";
echo "Тип не существующего элемента ".gettype($A['ложка']);
?>