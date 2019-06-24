<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chat</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/css/mdb.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="title mt-5 text-center">Chat room</h1>
    <iframe src="chat.html" frameborder="0" class="chat_box"></iframe>
    <form action="send.php" method="post">
    <input size="15" name="name" class="name" placeholder="Ваше имя"/>
    <input size="30" name="msg" class="in" placeholder="Введите сообщение"/>
    <button type="submit" class="btn btn-outline-black">Отправить</button>
    </form>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/js/mdb.min.js"></script>
</body>
</html>