<?php ##Ссылки на объекты
//Новый класс
class AgentSmith{};
//создаем первый объект класса
$first = new AgentSmith();
//Создаем отрибут класса и присваеваем ему значение
$first -> mind = 0.123;
//Копируем объект
$second = $first;
//меняем значение атрибута
$second -> mind = 100;
//Выводим оба значения
echo "First mind = {$first->mind},Second mind ={$second->mind}";
//mind из second  это ссылка на mind из first
?>

