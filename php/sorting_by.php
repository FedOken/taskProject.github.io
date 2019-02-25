<?php
//Функция берет с GET запроса значение sorting и возвращает наименование стобца в БД
  function sortingBy($sorting_name) {
    $sorting_name_in_database = $sorting_name;
    switch ($sorting_name) {
      case 'name':
        $sorting_name_in_database = 'userName';
        break;
      case 'mail':
        $sorting_name_in_database = 'userEmail';
        break;
      case 'status':
        $sorting_name_in_database = 'checkStatus';
        break;
    }
    return $sorting_name_in_database;
  }
?>
