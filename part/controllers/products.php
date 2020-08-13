<?php

if (isset($_GET['query']) && !empty($_GET['query'])){
    $result = [];

    foreach ($product as $product){
        if (stristr($product['title'], $_GET['query']) || stristr($product['description'], $_GET['query'])){
            $result[] = $product;
        }
    }

}else{
    $result = $product;
}