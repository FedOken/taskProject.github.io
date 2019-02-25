<!-- Кнопки над главной таблицей -->
<div class="row">
  <div class="col-12"><p></p></div>
</div>

<div class="row">
  <div class="col-2 text-left">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTask">Add new task</button>
  </div>
  <div class="col-2 text-left">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sorting</button>
    <div class="dropdown-menu">
      <a class='dropdown-item' href='?sortedBy=name'>Name</a>
      <a class='dropdown-item' href='?sortedBy=mail'>Mail</a>
      <a class='dropdown-item' href='?sortedBy=status'>Status</a>
    </div>
  </div>
  <div class="col-8 text-right">
    <!-- Если пользователь - администратор, добавляется надпись, кнопка логина заменяется на выход -->
    <?php if ($admin == true) {
      echo "<label for=''>You are logged in as administrator</label>
      <a href='/' class='btn btn-secondary btn active' role='button' aria-pressed='true'>Exit</a>";
    }
    else {
      echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#login'>Login</button>";
    }
    ?>
  </div>
</div>

<div class="row">
  <div class="col-12 "><p></p></div>
</div>
