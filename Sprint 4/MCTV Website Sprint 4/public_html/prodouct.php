<?php

$prodouct_type;
$prodoucts_id;

if ($prodouct_type != "tv" && $prodouct_type != "media-player" && $prodouct_type != "accessories") {
  echo "Ivalid type";
  exit;
}

var prodoucts {
  getProdouct: function(type, id) {

  }
  getAllProdoucts: function() {

  }
  getAllProdouctsByType: function(type) {

  }
}

$prodoucts = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/../prodoucts-api.json");
$prodoucts = json_decode($prodoucts);

if (isset($_GET["id"])) {

  $prodouct_id = $_GET["id"];

  if ($prodouct_id) {

    foreach ($prodoucts as $p) {
      if ($p->id == $prodouct_id) {
        $prodouct = $p;
      }
    }
  }

}

var_dump($prodouct);

include_once $_SERVER["DOCUMENT_ROOT"] . '/../inc/header.php';
?>
    <style media="screen">
      img {
        width: 500px;
      }
      body {
        background-color: white;
      }
    </style>
    <div class="container">
      <div class="grid">
        <div class="grid__col grid__col--4-of-12">
          <br><br>
          <h1 class="big-title">Sony Bravia</h1>
        </div>
        <div class="grid__col grid__col--6-of-12 grid__col--push-2-of-12">
          <img src="/img/tvs/tv-large1.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="black padding-vertical x4">
      <div class="container">
        <div class="grid__col grid__col--1-of-2 grid__col--centered">

          <h1>Sony Bravia</h1>
          <table class="prodouct__properties">
            <tr>
              <th>Screen Type:</th>
              <td>LED</td>
            </tr>
            <tr>
              <th>Screen Type:</th>
              <td>LED</td>
            </tr>
          </table>

        </div>

      </div>

    </div>
  </body>
</html>
