<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "admin";
    // $dbname = "owl-books";
    
    $servername = "localhost";
    $username = "owlbooks2";
    $password = "Swoots_2023";
    $dbname = "swoots2";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("<b>Error:</b> " . mysqli_connect_error());
    }
    
    $productIds = $_REQUEST["products"];
    $name = $_REQUEST["name"];
    $surname = $_REQUEST["surname"];
    $phone = $_REQUEST["phone"];
    $email = $_REQUEST["email"];
    $region_id = $_REQUEST["oblast"];
    $city = $_REQUEST["city"];
    $novaPost = $_REQUEST["novaPost"];
    $description = $_REQUEST["description"];
    
    $sql = 
    "   INSERT INTO `orders` (`_id`, `name`, `surname`, `phone`, `email`, `region_id`, `city`, `novaPost`, `description`, `productIds`) 
        VALUES (NULL, $name, $surname, $phone, $email, $region_id, $city, $novaPost, $description, $productIds)";
    
    mysqli_query($conn, $sql); 
    mysqli_close($conn);
?>