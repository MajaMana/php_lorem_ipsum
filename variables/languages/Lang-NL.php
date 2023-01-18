<?php

require "model/ProductCards.php";

use model\Item\ProductCard as ProductCard;

$navItems = [
    "Homepage"=>"/Index.php",
    "Over ons"=>"https://www.maxserv.com/",
    "Producten"=>"https://www.maxserv.com/",
    "Contact"=>"https://www.maxserv.com/"
];

$productCards = array();
$title = "Prijs";

$productCards[0] = new ProductCard(
    "Black Pastel",
    "images/BlackPastel.jpeg",
    625);

$productCards[1] = new ProductCard(
    "Blue Eyed Leucistic",
    "images/BEL.jpeg",
    800);

$productCards[2] = new ProductCard(
    "Lightning Pied",
    "images/LightningPied.jpeg",
    950);

$productCards[3] = new ProductCard(
    "Pastel Banana",
    "images/PastelBanana.jpeg",
    425);

$productCards[4] = new ProductCard(
    "Pastel VPI Axanthic",
    "images/PastelVPIAxanthic.jpeg",
    775);

$productCards[5] = new ProductCard(
    "Super Chocolate Pinstripe",
    "images/SuperChocolatePinstripe.jpeg",
    545);




