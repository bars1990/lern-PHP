<!Doctype html>
<html lang="ru">
<head>Использование данных формы
<meta charset="UTF-8">
</head>
<body>
<?php
if($_REQUEST['login']== "root" && $_REQUEST['password'] == 'Z10N0101') {
    echo "Доступ открыт для пользователя {$_REQUEST['login']}";
    system("rundll32.exe user32.dll,LockWorkStation");
} else{
    echo "Доступ закрыт!";
}
?>
</body>
</html>

