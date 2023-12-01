<?php
//index.php
require 'Character.php';

$akali = new Character('akali');
$akali->setLife(1200)
  ->setAttack(20);
$garen = new Character('garen');
$garen->setLife(100)
 ->setAttack(40);
var_dump($akali);
var_dump($garen);

