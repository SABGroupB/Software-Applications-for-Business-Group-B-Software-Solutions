<?php

class Database {

  public function __construct() {
    include_once $_SERVER["DOCUMENT_ROOT"] . "/../inc/test.php";
    $this->conn = $test;
  }

  private function connect() {
    return "connection";
  }

  public function query($sql) {
    return $this->conn;
  }

  public function fetch($sql) {
    
  }

}
