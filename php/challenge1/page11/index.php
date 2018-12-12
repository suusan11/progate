<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
$total = 0;
$maxPrice = 0;
$maxPriceMenu;
foreach($menus as $menu) {
  echo $menu['name'].'は'.$menu['price'].'円です';
  echo '<br>';
  $total += $menu['price'];
  if($maxPrice < $menu['price']) {
    $maxPrice = $menu['price'];
    $maxPriceMenu = $menu['name'];
  }
}
echo '合計金額は'.$total.'円です';
echo $maxPriceMenu.'が最高価格で'.$maxPrice.'円です';
?>