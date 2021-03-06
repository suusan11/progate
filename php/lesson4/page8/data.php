<?php
require_once('drink.php');
require_once('food.php');
require_once('review.php');

$juice = new Drink('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png', 'アイス');
$coffee = new Drink('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png', 'ホット');
$curry = new Food('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png', 3);
$pasta = new Food('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png', 1);

$menus = array($juice, $coffee, $curry, $pasta);

$review1 = new Review($juice->getName(), '果肉たっぷりのオレンジジュースです！');
$review2 = new Review($curry->getName(), '具がゴロゴロしていてとてもおいしいです');
$review3 = new Review($coffee->getName(), '香りがいいです');
$review4 = new Review($pasta->getName(), 'ソースが絶品です。また食べたい。');
$review5 = new Review($juice->getName(), '普通のジュース');
$review6 = new Review($curry->getName(), '値段の割においしいカレーだと思いました');
$review7 = new Review($coffee->getName(), '苦味がちょうどよくて、おすすめです');
$review8 = new Review($pasta->getName(), '具材にこだわりを感じました。');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);

?>