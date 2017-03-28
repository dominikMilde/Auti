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
        <form action="automobili.php" method="POST">
        <select name = 'id'>
        <option disabled selected value> -- select an option -- </option>
            <?php
    
            while ($brand = $result->fetch_assoc()){
                 echo('<option value = "' . $brand['id'].'">' . $brand['name'] . ' </option>');
                }
            ?>
        </select>
        <input type="submit" name="submit" value="Prikaži">
        </form>
        <p>
            <?php
            $sql1 = "SELECT cars.id, cars.brand_id, brands.name, cars.model, cars.color from cars, brands WHERE brands.id=cars.brand_id and brands.id = '". $_POST['id'] . "' ORDER BY name, model;";
            $result = $mysqli->query($sql1);

            //echo($sql1);

            while ($car = $result->fetch_assoc()){
                 echo($car['id'] . " / " . $car['name'] . " / " . $car['model'] . " / " . $car['color']);
                }
            ?>


        </p>
    </body>
</html>