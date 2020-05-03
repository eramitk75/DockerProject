<html>
    <head>
        <title>The Mall</title>
    </head>

    <body style="background-color:#33cccc;">
        <h1><b>Welcome to Essentials Galleria</b></h1>
        <ul>
            <?php

            $json = file_get_contents('http://product-service/');
            $obj = json_decode($json);

            $products = $obj->products;
	    echo "Here is the List of all the Essential Products...";
            foreach ($products as $product) {

                echo "<li>$product</li>";
            }

            ?>
</ul>
    </body>
</html>
