<?php
$userEmail = htmlentities($_POST['userEmail']);
//var_dump($userEmail);
//$filename = 'somefile.txt';
//$text = 'Text sample.';
file_put_contents('email.txt', $userEmail.' ', FILE_APPEND);
header ('Location: index.php');  // перенаправление на нужную страницу
exit();