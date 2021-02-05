<?php
require_once 'Item.php';
require_once 'ItemStorage.php';

// подключить файлы Item и ItemStorage
// создать необходимые объекты, вызвать методы

$guitar = new Item('Guitar', 2);
$guitar->setPrice(18000);
$guitar->setMaterial('Linden');
// var_dump($guitar);

$flute = new Item('Flute', 1);
$flute->setPrice(20000);
$flute->setMaterial('Bamboo');
// var_dump($flute);

$guitar2 = new Item('GuitarPl', 4);
$guitar2->setPrice(12000);
$guitar2->setMaterial('Plastic');
// var_dump($guitar2);

$drum = new Item('Drum', 3);
$drum->setPrice(68000);
$drum->setMaterial('Steel');
// var_dump($drum);

$drum2 = new Item('DrumPl', 5);
$drum2->setPrice(13000);
$drum2->setMaterial('Plastic');
// var_dump($drum2);

// ------------------------------
$storage = new ItemStorage();
$storage->add_item($guitar);
$storage->add_item($flute);
$storage->add_item($guitar2);
$storage->add_item($drum);
$storage->add_item($drum2);

// var_dump($storage);

var_dump($storage->get_by_id(3));
var_dump($storage->get_by_title('Flute'));
var_dump($storage->get_by_price(13000, 20000));
var_dump($storage->get_by_material('Plastic', 'Steel'));
var_dump($storage->get_by_price_and_material(20000, 'Plastic'));
