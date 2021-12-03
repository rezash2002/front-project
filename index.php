<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="product/style.css">
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    
</head>
<body>
    <!-- Slider main container -->
    <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->

        <?php
        //connect to DB
        $dbc = new mysqli('localhost', 'root', '', 'project');
        $dbc -> set_charset("utf8mb4");

        //create query
        $sql = "SELECT * FROM products";

        //execute query
        $result = $dbc -> query($sql);

        if( $dbc -> error )
            echo($dbc->error);
        else{
            $rows = $result -> fetch_all();

        }

        //close connection
        $dbc -> close();


        foreach ($rows as $row) {
            $name = $row[1];
            $category = $row[3];
            $caption = $row[4];
            $picture = $row[5];
            echo ("<div class='swiper-slide'>");
            include("product/card.php");
            echo ("</div>");
        }
        

    ?>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
    </div>
    <script src="js/swiper.js"></script>
</body>
</html>