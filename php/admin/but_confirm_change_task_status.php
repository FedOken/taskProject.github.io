<?php
  //Определение состояния чекбоксов (выаолнения задачи), вернет 1, если чекбокс активен
  $checkBox1 = isset($_REQUEST['checkBox1']);
  $checkBox2 = isset($_REQUEST['checkBox2']);
  $checkBox3 = isset($_REQUEST['checkBox3']);
  //Для не активных чекбоксов присваиваем 0, его будем записывать в БД
  $checkBox1 = ($checkBox1 != 1 ? 0 : $checkBox1);
  $checkBox2 = ($checkBox2 != 1 ? 0 : $checkBox2);
  $checkBox3 = ($checkBox3 != 1 ? 0 : $checkBox3);
  //Получение Id каждой задачи
  $task1 = $_GET['task_number1'];
  $task2 = $_GET['task_number2'];
  $task3 = $_GET['task_number3'];
 //Получение каждой задачи
  $text_area1 = $_GET['textArea1'];
  $text_area2 = $_GET['textArea2'];
  $text_area3 = $_GET['textArea3'];

  //ЗАПИСЬ в БД
  //Открываем соединение с БД
  $mysqli = new mysqli("localhost", "fedok", "13245678zaqweZZ", "fedok");
  $mysqli->query("SET NAMES 'utf8'");
  //Вычесление количества задач, для этого добавляем всю коллекцию в масив и узнаем длину
  $mysqli->query("UPDATE `taskbook` SET `checkStatus` =  '$checkBox1' WHERE  `taskbook`.`taskId` = $task1");
  $mysqli->query("UPDATE `taskbook` SET `checkStatus` =  '$checkBox2' WHERE  `taskbook`.`taskId` = $task2");
  $mysqli->query("UPDATE `taskbook` SET `checkStatus` =  '$checkBox3' WHERE  `taskbook`.`taskId` = $task3");
  $mysqli->query("UPDATE `taskbook` SET `userTask` =  '$text_area1' WHERE  `taskbook`.`taskId` = $task1");
  $mysqli->query("UPDATE `taskbook` SET `userTask` =  '$text_area2' WHERE  `taskbook`.`taskId` = $task2");
  $mysqli->query("UPDATE `taskbook` SET `userTask` =  '$text_area3' WHERE  `taskbook`.`taskId` = $task3");
  //Закрываем соединение с БД
  $mysqli->close();

  //Перенаправление на предыдущую страницу
  header('Location: http://testprojectbeejee.zzz.com.ua/admin_page.php');
?>
