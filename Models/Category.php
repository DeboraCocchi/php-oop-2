<?php

class Category
{
  public $animal;
  public $icon;

  public function __construct($_animal, $_icon)
  {
    $this->animal = $_animal;
  }

  public function setIcon($_icon)
    {
      $this->icon = $_icon;
    }

  public function getIcon()
    {
      if ($this->animal =='cat') {
        $catIcon='../assets/cat.png';
        return $catIcon;
      }
      return '../assets/dog.png';
    }
}
