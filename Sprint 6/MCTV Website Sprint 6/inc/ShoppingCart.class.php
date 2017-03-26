<?php

class ShoppingCart
{

  function __construct(argument)
  {
    session_start();
    $this->items = $_SESSION["ShoppingCart"];
  }

  public function addItem($item) {
    $this->items[] = $item;
  }

  public function removeItme() {

  }

  public function renderCheckout() {
    
  }


}
