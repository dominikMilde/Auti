<?php require('connect.php'); 
$sql = "SELECT cars.id, brands.name, cars.model, cars.color from cars, brands WHERE brands.id=cars.brand_id ORDER BY name, model;";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
    <head>
        <title> Automobili </title>
    </head>
    <body>
        <h1>Popis</h1>
        <ul>
        <?php
            while($car = $result->fetch_assoc()){
                echo('<li> <a href = "proizvodaci.php?id=' . $car['id'] . '">' . $car['name'] . '</a> / ' . $car['model'] . ' / ' . $car['color'] . '</li>');
            }
        ?>
                
        </ul>
    </body>
</html>