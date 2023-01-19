<?php

// use $link from general variable file
require "variables/general/Variables.php";
//

require "model/ProductCards.php";

use model\ProductCard as ProductCard;

// navbar
$navItems = [
    "Homepage"=>"/Index.php",
    "Over ons"=>$link,
    "Producten"=>$link,
    "Contact"=>$link
];
//

// discover all our products section
$discoverTitleFirst = "Ontdek al";
$discoverTitleSecond = "onze producten";
$discoverText = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores odit et dignissimos
            aliquam sed ut praesentium facere sapiente. Excepturi sequi dolores hic doloribus ducimus possimus
            voluptas labore! Ducimus corrupti omnis quod id iusto quibusdam, officiis voluptatibus deserunt quos
            deleniti reprehenderit consequuntur sequi laborum delectus provident unde adipisci maxime asperiores
            esse. ";

// product gallery
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

$productCards[6] = new ProductCard(
    "Leopard Desert Ghost",
    "images/LeopardDesertGhost.jpeg",
    675);

$productCards[7] = new ProductCard(
    "Firebee Leopard Axanthic",
    "images/FirebeeLeopardAxanthic.jpeg",
    995);
//

// show more products button
$productButton = "MEER PRODUCTEN TONEN";
//

// need more information section
$moreInformationTitle = "Meer informatie nodig?";
$moreInformationText = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, excepturi. Quod amet
            aut fuga veritatis vitae labore molestias atque ipsam cupiditate exercitationem doloribus velit dolore
            dignissimos, impedit voluptate voluptas ut inventore ullam dolores dolorum molestiae odio vero numquam
            laborum. Eligendi aut, rerum commodi eos animi veritatis consequuntur. Voluptates quas quam numquam
            harum, vel, sint doloremque, in neque dolor laborum dicta ex! Sit atque, consequatur rerum dolore nulla
            deserunt hic aperiam labore ullam modi nam molestiae cumque qui, doloribus sunt quam, fugiat optio!
            Officia quis reprehenderit fuga laboriosam vero et libero totam. Libero mollitia vero reprehenderit
            optio voluptas, quia nisi recusandae.";
//

// the wow effect section
$wowTitle = "Het WAUW effect";
$wowText = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis cupiditate
                doloremque saepe facere velit vitae eius commodi illo ad labore. Sed, inventore velit! Facilis saepe
                quod ratione provident officia iste, libero placeat pariatur earum quisquam, quae cupiditate
                accusamus laudantium, perspiciatis fugit officiis nihil voluptates vero mollitia perferendis non.
                In, veritatis.";
//

// footer
$footerArray = array(
    "Inspiratie" => array(
        "Medium" => $link,
        "Designerdepot" => $link,
        "Portfolio" => $link
    ),
    "Service" => array(
        "Over ons" => $link,
        "Contact" => $link,
        "Servicepunten" => $link
    ),
    "Informatie" => array(
        "Github" => $link,
        "Atlassian" => $link,
        "Slack" => $link
    ));
//