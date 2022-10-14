<?php


require_once "promotion.php";
require_once "promotionDAL.php";


if(isset($_GET["editBtn"])){

    $edT = $_GET["editBtn"];
    $promoEd = new PromotionDAL;
    $rsl = $promoEd->selectById($edT);
    
    if($rsl){
        foreach ($rsl as $vlu){
            
        }
    }

}




?>