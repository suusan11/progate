<?php
class Menu {
  public $name;
  public $price;
  public $image;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
  
  // getTaxIncludedPriceメソッドを定義してください
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.08);
  }
}
?>