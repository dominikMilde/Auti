<?php require('connect.php'); 
$sql = "SELECT brands.id, brands.name, brands.year_est from  brands WHERE brands.id= '" . $_GET['id']. "';";
$result = $mysqli->query($sql);
?>
<!DOCTYPE html>
    <head>
        <title>Proizvođači</title>
    </head>
    <body>
        <h1>Popis</h1>
        <ul>
        <?php
            while($brand = $result->fetch_assoc()){
                echo('<li>' . $brand['id'] . '</li>');
                echo('<li>' . $brand['name'] . '</li>');
                echo('<li>' . $brand['year_est'] . '</li>');
            }
            //echo($sql);
        ?>
                
        </ul>
    </body>
</html>