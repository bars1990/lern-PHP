<!Doctype html>
<html lang="ru">
<head><title>Скрипт блокировки сервера</title>
    <meta charset="UTF-8">
</head>
<body>
<?php if (isset($_REQUEST['doGo'])){
    ?>
    <form action="<?=$_SERVER['SCRIPT_NAME']?>">
    Login: <input type="text" name="login" value=""><br/>
    Password: <input type="text" name="password" value=""><br/>
    <input type="submit" name="doGo" value="Click Hire!">
</form>
<?php
} else {
    if($_REQUEST['login'] == "root" && $_REQUEST['password'] == "Z10N0101"){
        echo "Доступ открыт для пользователя: {$_REQUEST['login']}";
    } else{
        echo "Доступ закрыт!";
    }
} ?>
</body>

</html>


