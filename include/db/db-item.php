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

    $currentFileName = basename($_SERVER['PHP_SELF']);

    if($_GET["item-id"]) {
        $itemId = $_GET["item-id"];
        $sql = "SELECT items._id, image_name, name, price, type_id, made_by, description, type FROM items JOIN types on type_id = types._id WHERE items._id = $itemId";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);

        if($result) {
            $f = mysqli_fetch_array($result);
            echo 
            "
            <div class=\"item_page__image_container\">
                <img class=\"item_page__image\" src=\"../img/items/".$f['image_name']."\" alt=\"".$f['name']."\">
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
        };
    };
?>