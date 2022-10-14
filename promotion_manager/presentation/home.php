<?php

require_once "../data-access/promotionDAL.php";

$promotionDAL = new promotionDAl();

if(!empty($_POST)){
	$promotion = new promotion();
	$promotion->setName($_POST['Name']);
	$promotionDAL->addPromotion($promotion);
	
	// redirect to index.php
}

    if(isset($_GET["idDelete"])){

        $promoDlt = new promotionDAL();
        $prm = new promotion();
         

        $prm->setId($_GET["idDelete"]);
        $promoDlt->deletePromo($prm->getId());

    }

    // if(isset($_GET[""])){

    //     $promoEdt = new promotionDAL();
    //     $prm = new promotion();
        

    // }
        



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>promotion mangment</title>
</head>
<body>

<header>
		<h1 class="text-center text-info">ADD PROMO</h1>
	</header> <br> <br>

<form action="" method="POST" class="text-center">
THE NAME OF PROMO <input type="text" name="Name">                                                          
   
<button type="submit">Envoyer</button> <br> <br>

</form>
    <h4 class="text-centre text-success"> DISPLAY PROMOTIONS</h4>

    <table class="table table-bordered"> 
        <tr class="bg-warning text-centre">
        <th>PROMOTION</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    <?php
    $data = $promotionDAL->displayData();
    // if($data){
         
    // }
   
    ?>    
    <?php  
    foreach($data as $value){
            echo'
    <tr>
        <td>'.$value["name"].'</td>
        <td> <a href="upD.php?idEdit='.$value['id'].'"  name="editBtn" class="btn btn-info" > edit </a> </td>
        <td>
        <a href="home.php?idDelete='.$value["id"].'" class="btn btn-danger" > delete </a>  
        </td>
    </tr>';
    }

    ?>

    

    </table>
   
</body>

</html>