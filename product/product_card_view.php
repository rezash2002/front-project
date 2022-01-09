<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../assest/css/style.css">
</head>
<body class="grid-container layout-grid">
    <header>
        <?php include('../header.php'); ?>
    </header>
    <main>
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
    </main>
    <aside>سایدبار است</aside>
    <footer>اینجا فوتر است

    </footer>
</body>
</html>