<?php


 ?>
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
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      <?php

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username;
            $password;

            if ($username == "admin", $password == "letmein") {

            }
        }

       ?>
      <h2>Login</h2>
      <form class="form"
            method="POST">
        <div class="form__field">
          <input class="form__input" type="text" name="title" value="" placeholder="Username">
        </div>
        <div class="form__field">
          <input class="form__input" type="password" name="title" value="" placeholder="Password">
        </div>
        <div class="form__field">
          <input class="btn-primary" type="submit" value="Send Newsletter">
        </div>
      </form>
    </div>
