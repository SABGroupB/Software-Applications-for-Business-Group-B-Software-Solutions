<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MCTV | <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/balzss/luxbar/ae5835e2/build/luxbar.min.css">
    <script src="https://use.fontawesome.com/e175f0cc50.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="luxbar luxbar-default">
      <input type="checkbox" id="luxbar-checkbox" class="luxbar-checkbox">
      <div class="luxbar-menu luxbar-menu-right">
        <div class="container">

          <ul class="luxbar-navigation">
            <li class="luxbar-header">
              <a class="luxbar-brand" href="/">MCTV</a>
              <label class="luxbar-hamburger luxbar-hamburger-doublespin"
              for="luxbar-checkbox"> <span></span> </label>
            </li>
            <li class="luxbar-item"><a href="/">Home</a></li>
            <li class="luxbar-item dropdown"><a href="/prodoucts.php">Prodoucts</a>
              <ul>
                <li class="luxbar-item" ><a href="/prodoucts.php?type=tv">Televisions</a></li>
                <li class="luxbar-item" ><a href="/prodoucts.php?type=media-player">Media Players</a></li>
                <li class="luxbar-item" ><a href="/prodoucts.php?type=accessories">Accessories</a></li>
              </ul>
            </li>
            <li class="luxbar-item"><a href="/about.php">About</a></li>
            <li class="luxbar-item"><a href="/contact.php">Contact</a></li>
            <li class="luxbar-item"><a href="/faq.php">Faq's</a></li>
          </ul>

        </div>
      </div>
    </div>
