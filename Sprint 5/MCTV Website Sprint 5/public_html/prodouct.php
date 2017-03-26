<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/../connection.php';

$product_id = $_GET["id"];

$sqlQuery = $conn->query("SELECT * FROM inventory WHERE id = \"{$product_id}\"");
$product = $sqlQuery->fetchAll(PDO::FETCH_ASSOC)[0];

include_once $_SERVER["DOCUMENT_ROOT"] . '/../inc/header.php';
?>
  <style media="screen">
    body {background-color: white}

  </style>
  <div class="white">
    <div class="container">
      <div class="grid">
        <div class="grid__col grid__col--6-of-12">
          <img src="<?php echo $product["img_url"]; ?>" alt="">
        </div>
        <div class="grid__col grid__col--6-of-12">
          <br><br><br><br><br><br> <!-- :( -->
          <h1 class="h2 black-text"><?php echo $product["name"]; ?></h1>
          <p><?php echo $product["description"]; ?></p>
          <?php if ($product["type"] == "tv") {?>
            <table class="product-table">
              <tr>
                <th>Screen Type:</th>
                <td><?php echo $product["screen_type"]; ?></td>
              </tr>
              <tr>
                <th>Resolution:</th>
                <td><?php echo $product["resolution"]; ?></td>
              </tr>
              <tr>
                <th>Screen Size</th>
                <td><?php echo $product["screen_size"]; ?></td>
              </tr>
              <tr>
                <th>Smart TV:</th>
                <td><?php echo $product["smart_tv"] ? "Yes" : "No"; ?></td>
              </tr>
              <tr>
                <th>3D:</th>
                <td><?php echo $product["is_3d"] ? "Yes" : "No"; ?></td>
              </tr>
            </table>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/../inc/header.php';
