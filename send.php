<?php 
$msg = $_POST['msg'];
$name = $_POST['name'];
$file = fopen("chat.html", "a+");
fputs($file, "<strong>$name</strong> <br> $msg <hr> <br>");
fclose($file);
header('location: index.php')
?>