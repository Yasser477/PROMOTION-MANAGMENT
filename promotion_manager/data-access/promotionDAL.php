<?php 
 require_once "connection.php";
 require_once "promotion.php";

 class PromotionDAL extends connection {

    //methode 

    public function addPromotion($promotion){

        $name = $promotion->getName();  

    //insert methode

    $insertRow = "INSERT INTO promotion (name) VALUES ('$name')";

    mysqli_query($this->connect(),$insertRow);

    }

    public function displayData(){
        $sql = "SELECT * FROM promotion";
        $result = mysqli_query($this->connect(),$sql);
        if($result->num_rows >0){

            return $result;
        }
    }

    public function deletePromo($id){

        $dlt = "DELETE FROM promotion WHERE id = $id";
        $deleteR = mysqli_query($this->connect(), $dlt);
    }

    public function editName(){

        $edt = "UPDATE FROM promotion WHERE (name) = $name ";
        $dltN = mysqli_query($this->connect(), $edt);

    }

    }

?>