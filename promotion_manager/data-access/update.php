<?php


require_once "promotion.php";
require_once "promotionDAL.php";


if(isset($_GET["idEdit"])){
    $promoEd = new PromotionDAL;
    $edT = $_GET["idEdit"];
    $rsl = $promoEd->selectById($edT);
    
    if($rsl){
        foreach ($rsl as $value){
        }
    }

}




?>