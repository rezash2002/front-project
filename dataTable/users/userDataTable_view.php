<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/c3a9ee81b6.js" crossorigin="anonymous"></script>
    <title>User Data Table</title>
</head>
<body>
  <div class="data-table__table-container">
    <table class="data-table__table">
      <thead class="data-table__header">
        <tr class="data-table__header-row">
          <th class="data-table__header-cell">شناسه</th>
          <th class="data-table__header-cell">نام کامل</th>
          <th class="data-table__header-cell">ایمیل</th>
          <th class="data-table__header-cell">رمز عبور</th>
          <th class="data-table__header-cell mdc-data-table__header-cell__icon">ویرایش</th>
          <th class="data-table__header-cell mdc-data-table__header-cell__icon">حذف</th>
        </tr>
      </thead>
      <tbody class='mdc-data-table__content'>
      <?php
        foreach ($rows as $users){

        echo"
          <tr class='data-table__row'>
            <td class='data-table__cell'>
            {$users[0]}
            </td>
            <td class='data-table__cell'>
            {$users[1]}
            </td>
            <td class='data-table__cell'>
            {$users[2]}
            </td>
            <td class='data-table__cell'>
            {$users[3]}
            </td>
            <td class='data-table__cell mdc-data-table__cell__icon'>
            <i class='far fa-edit'></i>
            </td>
            <td class='data-table__cell mdc-data-table__cell__icon'>
            <i class='far fa-trash-alt'></i>
            </td>
          </tr>
        
        ";
        }
      ?>
      </tbody>
    </table>
  </div>

</body>
</html>