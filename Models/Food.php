<?php

class Food extends Product
{
  public $format;
  public $flavour;

  public function __construct($_name, $_brand, Category $_category, $_price, $_is_available, $_format, $_flavour)
  {
    parent::__construct($_name, $_brand, $_category, $_price, $_is_available);
    $this->format = $_format;
    $this->flavour = $_flavour;
  }
}