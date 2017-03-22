
<?php
    require('sesije.php');
    require('connect.php'); 

    $sql = "SELECT * FROM users WHERE username = '" .$_POST['username'] . "' and pass = '" . $_POST['password'] . "';";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0){
        $_SESSION['logged_in'] = 'hb';
        header('Location: brands.php');
    }
    else{
        header('Location: login.html');
    }
    //
?>

