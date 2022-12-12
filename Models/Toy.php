<?php

class Toy extends Product
{
  public $material;
  public $color;

  public function __construct($_name, $_brand, Category $_category, $_price, $_is_available, $_material, $_color)
  {
    parent::__construct($_name, $_brand, $_category, $_price, $_is_available);
    $this->material = $_material;
    $this->color = $_color;
  }
}