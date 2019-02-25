<?php
  //Добавление задачи в задачник
  //Считывание входящих параметров
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $task = $_POST['task'];

  //Открываем соединение с БД
  $mysqli = new mysqli("localhost", "fedok", "13245678zaqweZZ", "fedok");
  $mysqli->query("SET NAMES 'utf8'");
  //Вычесление количества задач, для этого добавляем всю коллекцию в масив и узнаем длину
  $mysqli->query("INSERT INTO `taskbook` (`taskId`, `userName`, `userEmail`, `userTask`, `checkStatus`) VALUES (NULL, '".$name."' , '".$mail."' , '".$task."', 0)");
  //Закрываем соединение с БД
  $mysqli->close();

  header('Location: http://testprojectbeejee.zzz.com.ua');

?>
