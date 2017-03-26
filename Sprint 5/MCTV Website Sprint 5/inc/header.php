<!DOCTYPE html>
<html>
  <head>
    <title>MCTV | <?php echo $pageTitle; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="description">
    <meta name="author" content="laurence foley">
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
            <li class="luxbar-item dropdown"><a href="/products.php">Products</a>
              <ul>
                <li class="luxbar-item" ><a href="/products.php?type=tv">Televisions</a></li>
                <li class="luxbar-item" ><a href="/products.php?type=media-player">Media Players</a></li>
                <li class="luxbar-item" ><a href="/products.php?type=accessories">Accessories</a></li>
              </ul>
            </li>
            <li class="luxbar-item"><a href="/about.php">About</a></li>
            <li class="luxbar-item"><a href="/contact.php">Contact</a></li>
            <li class="luxbar-item"><a href="/faq.php">Faq's</a></li>
          </ul>

        </div>
      </div>
    </div>
