<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    欢迎<?php echo $_POST["username"]; ?>!<br>
    你的账号：<?php echo $_POST["useraccount"]; ?><br>
    你的密码：<?php echo $_POST["userpassword"]; ?><br>
    3秒后跳转至登录界面<br>
    或者你可以直接<a href="login.html">点击</a>跳转
    <script>
        setInterval(function(){
            window.location.href="login.html";
        }, 3000);
    </script>
</body>
</html>
