<?php require('connect.php'); 
//$sql = "SELECT cars.id, cars.brand_id, brands.name, cars.model, cars.color from cars, brands WHERE brands.id=cars.brand_id ORDER BY name, model;";
$sql = "SELECT brands.id, brands.name from brands;";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
    <head>
        <title> Automobili </title>
    </head>
    <body>

        <h1>Popis</h1>

        <select name = 'id'>
            <?php
            while ($brand = $result->fetch_assoc()){
                 echo('<option value = "' . $brand['id'].'">' . $brand['name'] . ' </option>');
                }
            ?>
        </select>
    </body>
</html>