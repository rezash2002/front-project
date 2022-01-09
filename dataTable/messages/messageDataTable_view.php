<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/c3a9ee81b6.js" crossorigin="anonymous"></script>
    <title>Message Data Table</title>
</head>
<body>
  <div class="data-table__table-container">
    <table class="data-table__table">
      <thead class="data-table__header">
        <tr class="data-table__header-row">
          <th class="data-table__header-cell">شناسه</th>
          <th class="data-table__header-cell">نام کامل</th>
          <th class="data-table__header-cell">ایمیل</th>
          <th class="data-table__header-cell">موضوع</th>
          <th class="data-table__header-cell">متن پیام</th>
          <th class="data-table__header-cell data-table__header-cell__icon">پاسخ</th>
          <th class="data-table__header-cell data-table__header-cell__icon">ویرایش</th>
          <th class="data-table__header-cell data-table__header-cell__icon">حذف</th>
        </tr>
      </thead>
      <tbody class='data-table__content'>
      <?php
        foreach ($rows as $messages){

        echo"
          <tr class='data-table__row'>
            <td class='data-table__cell'>
            {$messages[0]}
            </td>
            <td class='data-table__cell'>
            {$messages[1]}
            </td>
            <td class='data-table__cell'>
            {$messages[3]}
            </td>
            <td class='data-table__cell'>
            {$messages[2]}
            </td>
            <td class='data-table__cell'>
            {$messages[4]}
            </td>
            <td class='data-table__cell data-table__cell__icon'>
            <i class='fas fa-reply'></i>
            </td>
            <td class='data-table__cell data-table__cell__icon'>
            <i class='far fa-edit'></i>
            </td>
            <td class='data-table__cell data-table__cell__icon'>
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