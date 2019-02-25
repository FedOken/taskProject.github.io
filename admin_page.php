<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>TestTask - admin panel</title>
  </head>
  <body>
    <?php
    //Подключение скриптов, общие
    include "php/main_parameters.php";
    include "php/sorting_by.php";
    //Подключение скриптов, только для страниы администратора
    include "php/admin/operation_with_table_admin.php";
    ?>

    <div class="container">
      <!-- Добавление кнопок над таблицей, для страницы администратора $admin = true -->
      <?php $admin = true; include "php_html/but_control_above_table.php"; ?>

      <!-- Формирование таблицы со списком задач -->
      <table class="table table-bordered table-responsive-sm table-hover">
        <form action="php/admin/but_confirm_change_task_status.php" method="GET" id="tableUpdate">
          <thead>
            <tr class=" table-primary text-center ">
              <th sscope="col">Status</th>
              <th scope="col">Name</th>
              <th scope="col">Mail</th>
              <th scope="col">Task</th>
            </tr>
          </thead>
          <tbody>
            <?php addTaskToTable($start_task_to_show, $number_task_to_show); ?>
          </tbody>
        </table>
      </form>

      <div class="row">
        <div class="col-2 text-left">
            <button type="submit" class="btn btn-primary" form="tableUpdate">Confirm changes</button>
        </div>
        <div class="col-8 text-left">
            <!-- Подключение пагинации -->
            <?php include "php_html/pagination.php"; ?>
        </div>
        <div class="col-2 text-left"></div>
      </div>

      <!-- Подключение модальных окон -->
      <?php include "php_html/modal_add_task.php"; ?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/style_for_bootstrap.js" type="text/javascript">

    </script>
  </body>
</html>
