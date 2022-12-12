<?php

class Product{
  public $name;
  public $brand;
  public $category;
  public $price;
  public $image;
  public $is_available = true;
  protected $barcode;

  public function __construct($_name, $_brand, Category $_category, $_price, $_is_available)
  {
    $this->name=$_name;
    $this->brand=$_brand;
    $this->category = $_category;
    $this->price = $_price;
    $this->is_available=$_is_available;
  }

  public function setBarcode(){
    $valuesArray=[0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k'];
    $code=str_shuffle(implode(array_rand(array_flip($valuesArray),15)));
    $this->barcode=$code;
  }

  public function getBarcode(){
    return $this->barcode;
  }

  public function setImage($_image){
    $this->image=$_image;
  }

  public function getImage(){
    $placeholder = 'https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png';
    if ($this->image) {
      return $this->image;
    }
    else $this->image=$placeholder;
  }



}