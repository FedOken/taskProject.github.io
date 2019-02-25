<?php
  //Проверка введенного пароля и логина, если админ, перенаправление на страницу администратора
  $login = $_POST['login'];
  $password = $_POST['password'];

  if ($login == "admin" && $password == "123") { header('Location: /admin_page.php');}
  else {header('Location: http://testprojectbeejee.zzz.com.ua'); }
?>
