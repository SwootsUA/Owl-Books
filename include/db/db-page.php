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

    $searchType = "1";
    $currentFileName = basename($_SERVER['PHP_SELF']);
    if ($currentFileName == 'books.php') {
      $searchType = "types.type = \"book\"";
    }
    if ($currentFileName == 'mangas.php') {
      $searchType = "types.type = \"manga\"";
    }
    if ($currentFileName == 'magazines.php') {
      $searchType = "types.type = \"magazine\"";
    }
    if ($currentFileName == 'accessorys.php') {
      $searchType = "types.type = \"accessory\"";
    }
    if ($currentFileName == 'index.php') {
      $searchType = "1";
    }

    if($searchType == "1") {
      $sql = "SELECT items._id, image_name, name, price, type_id, type FROM items JOIN types ON type_id = types._id ORDER BY items._id DESC;";
    } else {
      $sql = "SELECT items._id, image_name, name, price, type_id, type FROM items JOIN types ON type_id = types._id WHERE " . $searchType . ";";
    }
    
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($searchType == "1") {
      $number = 6;
    } else {
      $number = mysqli_num_rows($result);
    }

    for($i = 0; $i < $number; $i++) {
        $f = mysqli_fetch_array($result);
        echo 
        "
        <div class=\"item\">
          <div class=\"item__content\">
            <div class=\"item__href\">
              <img class=\"item_image\" src=\"../img/items/".$f['image_name']."\" alt=\"".$f['name']."\">
              <div id=\"".$f['_id']."\" class=\"item__content__name\">
                ".$f['name']."
              </div>
            </div>
            <div class=\"item__content__row\">
              <div class=\"item__content__collum\">
                <div class=\"item__content__price\">
                  ".$f['price']." грн
                </div>
              </div>
              <button class=\"button__buy\">
                Купити
              </button>
            </div>
          </div>
        </div>
        ";
    }
?>