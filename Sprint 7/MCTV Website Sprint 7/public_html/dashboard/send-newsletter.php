<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  require_once $_SERVER["DOCUMENT_ROOT"] . '/../connection.php';

  if ($conn) {

    $title = $_POST["title"];
    $msg = $_POST["msg"];
    $query = $conn->query("SELECT * FROM mailing_list;");
    $subscribers = $query->fetchAll(PDO::FETCH_ASSOC);

    function sendEmail($email, $msg) {

      $to = $email;
      $subject = 'MCTV Newsletter';
      $headers[] = 'MIME-Version: 1.0';
      var_dump(mail($to, $subject, $msg, implode("\r\n", $headers)));

    }

    foreach ($subscribers as $s) {

      sendEmail($s["email"], $msg);

    }

  }

}

include_once $_SERVER["DOCUMENT_ROOT"] . '/../inc/dashboard-header.php';

?>

<div class="container">
  <h2>Send Newsletter</h2>
  <form class="form"
        method="POST">
    <div class="form__field">
      <input class="form__input" type="text" name="title" value="" placeholder="Title">
    </div>
    <div class="form__field">
      <textarea class="form__textarea"  placeholder="Enter newsletter here" name="msg" rows="8" cols="80"></textarea>
    </div>
    <div class="form__field">
      <input class="btn-primary" type="submit" value="Send Newsletter">
    </div>
  </form>
</div>
