<?php

$prodouct_type = $_GET["type"];
$prodoucts = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/../prodoucts-api.json");
$prodoucts = json_decode($prodoucts);

// var_dump($prodoucts);


if ($prodouct_type != "tv" && $prodouct_type != "media-player" && $prodouct_type != "accessories") {
  $prodouct_type = "tv";
}

include_once $_SERVER["DOCUMENT_ROOT"] . '/../inc/header.php';

?>

<div class="page-header white padding-vertical x2 black-text">
  <div class="container">
    <h2 class="margin-none big-title">Prodoucts</h2>
  </div>
</div>

<nav class="prodoucts-nav">
  <div class="container">
    <ul>
      <li>
        <a <?php if($prodouct_type == "tv") {echo 'class="active"';}; ?> href="/prodoucts.php?type=tv">
          Televisions
        </a>
      </li>
      <li>
        <a <?php if($prodouct_type == "media-player") {echo 'class="active"';}; ?> href="/prodoucts.php?type=media-player">
          Media Players
        </a>
      </li>
      <li>
        <a <?php if($prodouct_type == "accessories") {echo 'class="active"';}; ?> href="/prodoucts.php?type=accessories">
          Accessories
        </a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="section">

    <div class="prodoucts">
      <?php
        switch ($prodouct_type) {
          case 'tv':

            if (count($prodoucts) > 0) {

              foreach ($prodoucts as $p) {

                ?><div class="prodouct">
                  <img class="prodouct__img" src="<?php echo $p->img; ?>" alt="">
                  <h2 class="prodouct__name"><?php echo $p->name; ?></h2>
                  <h4 class="prodouct__model"><?php echo $p->model; ?></h4>
                  <br>
                  <div class="prodouct__price">
                    <?php echo "$" + $p->retailPrice; ?>
                  </div>
                  <br>
                  <a href="/prodouct.php?id=<?php echo $p->id ?>" class="btn-primary">Find Out More</a>
                </div><?php }

              } else {
                echo "<h2>No prodocts found.</h2>";
              }

            break;
          case 'media-player':
          if (count($prodoucts->mediaPlayer) > 0) {

            foreach ($prodoucts->mediaPlayer as $p) {

              ?><div class="prodouct">

              </div><?php }

            } else {
              echo "<h2>No prodocts found.</h2>";
            }
            break;
          case 'accessories':
          if (count($prodoucts->accessories) > 0) {

            foreach ($prodoucts->accessories as $p) {

              ?><div class="prodouct">

              </div><?php }

            } else {
              echo "<h2>No prodocts found.</h2>";
            }
            break;
        }
       ?>

     </div>
  </div>
</div>

  </body>
</html>
