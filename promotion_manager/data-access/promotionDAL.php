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


    public function selectById($id){

        $edi = "SELECT * FROM promotion WHERE id = '$id'";
        $ediUp = mysqli_query($this->connect(), $edi);

        if($ediUp->num_rows == 1){
            return $ediUp;
        }
    }

    public function editName($id, $name){
        
        $edt = "UPDATE promotion set name = '$name' WHERE id = $id";
        $dltN = mysqli_query($this->connect(), $edt);

    }

    }

?>