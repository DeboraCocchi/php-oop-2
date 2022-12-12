<?php

class Category
{
  public $animal;
  public $icon;

  public function __construct($_animal)
  {
    $this->animal = $_animal;
  }

  public function setIcon($_animal){
    if ($this->animal =='cat') {
      $this->icon ='https://cdn-icons-png.flaticon.com/512/616/616430.png';
    }else{
      $this->icon ='https://cdn-icons-png.flaticon.com/512/616/616408.png';
    }}

  public function getIcon()
    {
      if ($this->animal =='cat') {
        $catIcon='https://cdn-icons-png.flaticon.com/512/616/616430.png';
        return $catIcon;
      }else{
        return 'https://cdn-icons-png.flaticon.com/512/616/616408.png';
      }
      
    }
}
