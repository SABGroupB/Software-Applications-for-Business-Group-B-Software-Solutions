<?php
session_start();

$root = $_SERVER["DOCUMENT_ROOT"] . '/';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $message = "";
  $className = "green";

  if (isset($_POST["email"])) {

    require_once $_SERVER["DOCUMENT_ROOT"] . '/../connection.php';

    if ($conn) {

      $email = $_POST["email"];
      $query = $conn->query("SELECT * FROM mailing_list WHERE email = \"{$email}\";");
      $emailAlreadyExsists = !!$query->fetchAll(PDO::FETCH_ASSOC);

      if ($emailAlreadyExsists) {
        $message =  "You have already subscribed.";
      } else {
        $conn->query("INSERT INTO mailing_list (email) VALUES (\"{$email}\");");
        $message = "Thank for subscribing :)";
      }

    } else {
      $className = "red";
      $message = "Error. Try again later.";
    }

  }

  echo "<p class=\"message u-text-center padding {$className} white-text\">{$message}</p>";

}

include_once $_SERVER["DOCUMENT_ROOT"] . '/../inc/header.php';

 ?>
    <div class="page-header page-header white padding-vertical x2 black-text">
      <div class="container">
        <h1 class="big-title white-text margin-none">MCTV</h1>
        <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing eli.</p>
      </div>
    </div>

    <div class="black--light white-text">
      <div class="container padding-vertical x3">
        <div class="grid">
          <div class="u-text-center grid__col grid__col--4-of-12">
            <h2 class="">Televisons</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a class="btn-primary" href="#">Explore</a>
          </div>
          <div class="u-text-center grid__col grid__col--4-of-12">
            <h2 class="u-text-center">Media Players</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a class="btn-primary" href="#">Explore</a>
          </div>
          <div class="u-text-center grid__col grid__col--4-of-12">
            <h2 class="u-text-center">Accessories</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a class="btn-primary" href="#">Explore</a>
          </div>
        </div>
      </div>
    </div>

    <div class="feature padding-vertical x3 white">
      <div class="container">
        <div class="grid">
          <div class="u-text-center grid__col grid__col--6-of-12">
            <img src="/img/tvs/tv-large1.jpg" alt="">
          </div>
          <div class="grid__col grid__col--5-of-12 grid__col--push-1-of-12">
            <br><br><br><br>
            <h1 class="black-text">Samsung 55" UHD Smart LED TV</h1>
            <p>See stunningly natural and lifelike pictures through Samsung’s UHD Crystal Colour technology meeting Digital Europe and CEA UHD picture quality standards.</p>
            <a href="#" class="btn-primary">Find out More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="feature padding-vertical x3 white">
      <div class="container">
        <div class="grid">
          <div class="grid__col grid__col--6-of-12">
            <br><br><br><br>
            <h1 class="black-text">Samsung 55" UHD Smart LED TV</h1>
            <p>See stunningly natural and lifelike pictures through Samsung’s UHD Crystal Colour technology meeting Digital Europe and CEA UHD picture quality standards. This latest screen technology delivers enhanced pixels and chip set for a superior picture quality experience with stunning contrast and over 17 million true to life colours with intense shades in a colour space 20% wider than conventional UHD.</p>
            <a href="#" class="btn-primary">Find out More</a>
          </div>
          <div class="u-text-center grid__col grid__col--5-of-12 grid__col--push-1-of-12">
            <img src="/img/tvs/tv-large1.jpg" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="newsletter lightgray white-text padding-vertical x4">
      <div class="container">
        <form class="subscribe" action="/index.php" method="POST">
          <h2 class="u-text-center black-text h1">Subscribe to our Newsletter</h2>
          <p class="black-text u-text-center">Enter your email below to subscribe to our newsletter.</p>
          <input required placeholder="Email" class="input" type="email" name="email" value="">
          <input type="submit" class="btn" name="" value="Submit">
          <br><br>
        </form>
      </div>
    </div>
<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/../inc/footer.php';
