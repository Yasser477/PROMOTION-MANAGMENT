<?php
require_once "../data-access/update.php";
require_once "../data-access/promotionDAL.php";


$promoEdt = new PromotionDAL();

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $value = $promoEdt->selectById($id);
}

if(isset($_POST['update'])){
    $newPrm = new promotion();
    $newPrm->setId($_GET["idEdit"]);
    $newPrm->setName($_POST["name"]);

    $promoEdt->editName($newPrm->getId(), $newPrm->getName());

    header('location: home.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <input type="hidden" value="" name="id">
    <input class="text-centre text-" type="text" name="name" value="<?php echo $value['name'] ?>">

    <div>
				<button type="submit" name="update" value="update">Envoyer</button>
				<a href="index.php">Form</a>
	</div>
</form>
</body>
</html>