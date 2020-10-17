<?php
$products = array();

/* 
* Homepage Products Starts Here
*/

$product1 = array();
$product1['id'] = 1;
$product1['title'] = "Hotwheels Electric Bike";
$product1['price'] = "$49.32";
$product1['sale_price'] = "$37.56";
$product1['meta'] = array(
    "style" => "Flower",
    "material" => "Plastic",
    "color" => "White Green Pink Purple",
    "whole_length" => "38cm / 15.3in",
    "package" => "1 pcs",
    "festivals" => "Christmas day/Valentine's Day/New Year/ Birthday/ Gifts"
);

$product1['featured_image'] = "/assets/images/products/QfT3g2L_1024x1024@2x.png";
$product1['images'] = array();


$product2 = array();
$product2['id'] = 2;
$product2['title'] = "Hubless eBike";
$product2['price'] = "$9.78";
$product2['sale_price'] = "$10.50";
$product2['meta'] = array(
    "function" => "Stiring",
    "feature" => "Eco-Friendly",
    "eggbeater_laying_method" => "Hand",
    "type" => "Egg Tools",
    "material" => "Stainless steel",
    "uses" => "Kitchen Mixer"
);

$product2['featured_image'] = "/assets/images/products/ZHIomJI_540x.jpg";
$product2['images'] = array();


$product3 = array();
$product3['id'] = 3;
$product3['title'] = "No-Touch Tool";
$product3['price'] = "$18.73";
$product3['sale_price'] = "$2.91";
$product3['meta'] = array(
    "style" => "Modern",
    "theme" => "Pattern",
    "pattern" => "3D Sticker",
    "specification" => "Single-piece Package",
    "model_number" => "Foam Wall Stickers",
    "clarification" => "For Wall",
    "material" => "PVC",
    "scenerios" => "Wall",
    "color" => "White, black, pink, yellow, orange and so on",
    "size" => "70X30cm, 70X15cm"
);

$product3['featured_image'] = "/assets/images/products/y79siCp_1024x1024@2x.png";
$product3['images'] = array();


$product4 = array();
$product4['id'] = 4;
$product4['title'] = "Phat Electric Scooter";
$product4['price'] = "$38.94";
$product4['sale_price'] = "$12.98";
$product4['meta'] = array(
    "theme" => "Pattern",
    "specifications" => "Dinosaur Bike",
    "style" => "Solid",
    "scenerios" => "Wall",
    "brand_name" => "mondecor",
    "material" => "Plastic",
    "pattern" => "Plane Wall Sticker",
    "size" => "0.6 x 3M / 5M / 10M",
);

$product4['featured_image'] = "/assets/images/products/BV7I9885-scaled-e1593729680687_1024x1024@2x.jpg";
$product4['images'] = array();


$product5 = array();
$product5['id'] = 5;
$product5['title'] = "RC EXCAVATOR";
$product5['price'] = "$20.60";
$product5['sale_price'] = "$23.54";
$product5['meta'] = array(
    "material" => "PVC",
    "theme" => "Plant",
    "scenerios" => "Wall",
    "pattern" => "Plane Wall Sticker",
    "brancolord_name" => "multi",
    "received_size" => "60*90cm*2",
    "finished_size" => "187*128cm"
);

$product5['featured_image'] = "/assets/images/products/6829f2aa883ae4c362813637b658419d6870ef87_540x.png";

$product5['images'] = array();


$product6 = array();
$product6['id'] = 6;
$product6['title'] = "RGB Sound Activated Projector Lights";
$product6['price'] = "$13.41";
$product6['sale_price'] = "$81.24";
$product6['meta'] = array(
    "pattern_type" => "Solid",
    "use" => "Decorative,Seat,Car,Chair",
    "shape" => "Square",
    "technics" => "Knitted",
    "material" => "100% Polyester",
    "style" => "mordern",
    "pattern" => "plush"
);

$product6['featured_image'] = "/assets/images/products/970ef78998e73627cf09a1c75e9b07d6_540x.jpg";
$product6['images'] = array();


$product7 = array();
$product7['id'] = 7;
$product7['title'] = "Smart Coffee Table";
$product7['price'] = "$48.36";
$product7['sale_price'] = "$64.12";
$product7['meta'] = array(
    "style" => "Europe",
    "theme" => "Love",
    "material" => "Crystal",
    "light_color" => "Various Colors Changing",
    "approximate_size" => "4.5*3*1.2cm",
    "approximate_weight" => "32g"
);

$product7['featured_image'] = "/assets/images/products/f6bc2c3e98ba55d7840a6bdba5cf19cc_720x_540x_36925b39-c89e-48dc-8247-cb9bec5bd095_540x.png";
$product7['images'] = array();


$product8 = array();
$product8['id'] = 8;
$product8['title'] = "Triceratops Toy";
$product8['price'] = "$33.75";
$product8['sale_price'] = "$44.25";
$product8['meta'] = array(
    "material" => "Glass",
    "style" => "Pastoral",
    "theme" => "Landscape"
);

$product8['featured_image'] = "/assets/images/products/paqzis1_1024x1024@2x.png";
$product8['images'] = array();

/**
 * Home page ends
 */

array_push($products, $product1);
array_push($products, $product2);
array_push($products, $product3);
array_push($products, $product4);
array_push($products, $product5);
array_push($products, $product6);
array_push($products, $product7);
array_push($products, $product8);


function find($id) {
    foreach ($GLOBALS['products'] as $key => $val) {
        if ($val['id'] === $id) {
            return json_encode($GLOBALS['products'][$key]);
        }
    }
    return null;
}

function getAllProducts() {
    return json_encode($GLOBALS['products']);
}

function getTopProducts($num) {
    $products = array_slice($GLOBALS['products'], 0, $num);
    return json_encode($products);
}

function searchProducts($query) {
    $products = array();
    
    foreach($GLOBALS['products'] as $product) {
        // if ($product['title'] == $query) {
        //     array_push($products, $product);
        // }
        
        $search = array_search($query, $product['meta'], true);
        if (!empty($search)) {
            array_push($products, $GLOBALS['products'][$search]);
        }
    }

    return json_encode($products);
}
?>