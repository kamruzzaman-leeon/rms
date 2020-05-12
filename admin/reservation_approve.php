<?php


    include 'connection.php';
    if(isset($_POST['reservation_id'])){
        $id=$_POST['reservation_id'];
        $sql = "UPDATE `reservation` SET `status`=false WHERE reservation_id=$id";
        $result = $con->query($sql);
        //is update happed it return true
        if($result){
            echo true;
        }else{
            echo false;
        }
    }
    

	

?>