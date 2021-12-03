<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card-container">
    <?php
        foreach ($rows as $row) {
            $name = $row[1];
            $category = $row[3];
            $caption = $row[4];
            $picture = $row[5];

            include("card.php");
        }


    ?>
</div>
</body>
</html>