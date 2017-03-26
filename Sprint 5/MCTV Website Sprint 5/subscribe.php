<?php

$success = false;

if (isset($_GET["email"])) {

  require_once $_SERVER["DOCUMENT_ROOT"] . '/../connection.php';

  $email = $_GET["email"];

  $query = $conn->query("SELECT * FROM mailing_list WHERE email = \"{$email}\"");

  if ($conn) {
    // Check if email already exists
    if (!$query->fetchAll(PDO::FETCH_ASSOC)) {
      $conn->query("INSERT INTO mailing_list (email) VALUES (\"{$email}\")");
      $success = true;
    }
  }

}

if ($success) {
  // header('');

} else {
  // header('');
  echo "Unable to subscribe. Try again later.";
}

  echo "Successfull";


  $to = $email;

  $subject = 'Thanks for subscribing';

  $message = '
  <html>
  <head>
    <title>Thanks for Subscribing</title>
  </head>
  <body>
    <p>Thanks for subscribing :)</p>
    <br><br>
    <small>To unsubscribe click <a href="#">here</a></small>
  </body>
  </html>
  ';

  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/html; charset=iso-8859-1';

  var_dump(mail($to, $subject, $message, implode("\r\n", $headers)));
