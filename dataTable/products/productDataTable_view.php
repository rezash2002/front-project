<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/c3a9ee81b6.js" crossorigin="anonymous"></script>
    <title>Product Data Table</title>
</head>
<body>
  <div class="data-table__table-container">
    <table class="data-table__table">
      <thead class="data-table__header">
        <tr class="data-table__header-row">
          <th class="data-table__header-cell">شناسه</th>
          <th class="data-table__header-cell" role="columnheader">نام محصول</th>
          <th class="data-table__header-cell mdc-data-table__header-cell--numeric">قیمت</th>
          <th class="data-table__header-cell">دسته بندی</th>
          <th class="data-table__header-cell">توضیحات</th>
          <th class="data-table__header-cell mdc-data-table__header-cell__icon">ویرایش</th>
          <th class="data-table__header-cell mdc-data-table__header-cell__icon">حذف</th>
        </tr>
      </thead>
      <tbody class='data-table__content'>
      <?php
        foreach ($rows as $products){

        echo"
          <tr class='data-table__row'>
            <td class='data-table__cell'>
            {$products[0]}
            </td>
            <td class='data-table__cell'>
            {$products[1]}
            </td>
            <td class='data-table__cell data-table__cell--numeric'>
            {$products[2]}
            </td>
            <td class='data-table__cell'>
            {$products[3]}
            </td>
            <td class='data-table__cell'>
            {$products[4]}
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