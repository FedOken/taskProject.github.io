<!-- Пагинация -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">

    <!-- Вычесление количества страниц с задачами -->
    <?php $page_number = ceil($task_numbers / $number_task_to_show); ?>

    <li class="page-item">
      <a class="page-link" href="?page=<?php echo ($current_page - 1); ?>&pageTotal=<?php echo $page_number; ?>&sortedBy=<?php echo $sorted; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>

    <!-- Добавление страницы -->
    <?php
    for ($page = 1; $page <= $page_number; $page++) {
      // Отдельный фрагмент кода для оформление текущей страницы
      if ($page == $current_page) {
        echo "<li class='page-item active' aria-current='page'>
          <a class='page-link' href='?page=".$page."&pageTotal=".$page_number."&sortedBy=".$sorted."'>".$page." <span class='sr-only'>(current)</span></a>
        </li>";
      }
      else {
        echo "<li class='page-item'><a class='page-link' href='?page=".$page."&pageTotal=".$page_number."&sortedBy=".$sorted."'>".$page."</a></li>";
      }
    }
    ?>

    <li class="page-item">
      <a class="page-link" href="?page=<?php echo ($current_page + 1); ?>&pageTotal=<?php echo $page_number; ?>&sortedBy=<?php echo $sorted; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
