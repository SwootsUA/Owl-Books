<?php
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "owl-books";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // ".$f['']."

    $currentFileName = basename($_SERVER['PHP_SELF']);

    $itemId = $_GET["item-id"];
    $sql = "SELECT items._id, image_name, name, price, type_id, made_by, description, type FROM items JOIN types on type_id = types._id WHERE items._id = $itemId";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    for($i = 0; $i < mysqli_num_rows($result); $i++) {
        $f = mysqli_fetch_array($result);
        echo 
        "
        <div class=\"item_page__image_container\">
            <img class=\"item_page__image\" src=\"../img/items/".$f['image_name']."\">
        </div>
        <div class=\"item_page__info_container\">
            <div class=\"item_page__info\">
                <div class=\"item_page__name\" id=\"".$f['_id']."\">
                    ".$f['name']."
                </div>
                <div class=\"item_page__made_by\">
                    ".$f['made_by']."
                </div>
                <div class=\"item_page__description\">
                    ".$f['description']."
                </div>
            </div>
            <div class=\"item_page__buy\">
                <button class=\"button__buy\" id=\"item_page\">
                    Купити
                </button>
                <input type=\"number\" min=\"1\" max=\"100\" value=\"1\" class=\"item_page-product-quantity-input\">
                <div class=\"item_page__price\">
                    ".$f['price']." грн
                </div>
            </div>
        </div>
        ";
    }
?>