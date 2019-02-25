<?php
//Функция связывается с БД и добавляет задачи
  function addTaskToTable($start_task, $task_numbers_on_page) {
    //Открываем соединение с БД
    $mysqli = new mysqli("localhost", "fedok", "13245678zaqweZZ", "fedok");
    $mysqli->query("SET NAMES 'utf8'");
    //Вычесление количества задач, для этого добавляем всю коллекцию в масив и узнаем длину
    $result_set = $mysqli->query("SELECT * FROM  `taskbook`");
    global $task_numbers;
    $task_numbers = $result_set->num_rows;

    //Определение критерия сортировки
    global $sorted;
    $sorted = sortingBy($sorted);
    //Перезаписываем коллекцю, добавляем необходимое число задач в коллекцию
    $result_set = $mysqli->query("SELECT * FROM  `taskbook` ORDER BY `taskbook`.$sorted LIMIT $start_task, $task_numbers_on_page");
    //Вызываем функцию отображения задач на странице
    addRowToTable($result_set);
    //Закрываем соединение с БД
    $mysqli->close();
  }


  //Добавление задач в задачник
  function addRowToTable($result) {
    while(($row = $result->fetch_assoc())) {
      //Проверенные задачи выводим в зеленом цвете
      if ($row["checkStatus"] == 1) {
        echo "<tr class='table-success'>
           <td>".$row["userName"]."</td>
           <td>".$row["userEmail"]."</td>
           <td>".$row["userTask"]."</td>
         </tr>";
      }
      //Не проверенные задачи
      else {
        echo "<tr>
           <td>".$row["userName"]."</td>
           <td>".$row["userEmail"]."</td>
           <td>".$row["userTask"]."</td>
         </tr>";
      }
    }
  }
?>
