<?php

class Accessory extends Product
{
  public $material;
  public $size;

  public function __construct($_name, $_brand, Category $_category, $_price, $_is_available, $_material, $_size)
  {
    parent::__construct($_name, $_brand, $_category, $_price, $_is_available);
    $this->material = $_material;
    $this->size = $_size;
  }
}