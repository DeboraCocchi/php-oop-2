<?php

class Product{
  public $name;
  public $brand;
  public $category;
  public $price;
  public $is_available = true;
  protected $barcode;

  public function __construct($_name, $_brand, Category $_category, $_price)
  {
    $this->name=$_name;
    $this->brand=$_brand;
    $this->category = $_category;
    $this->price = $_price;
  }

  public function setBarcode(){
    $valuesArray=[0,1,2,3,4,5,6,7,8,9];
    $code=implode(array_rand($valuesArray,12));
    $this->barcode=$code;
  }

  public function getBarcode(){
    return $this->barcode;
  }



}