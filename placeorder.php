<?php


include 'db.php';
session_start();

function fetch_data($sql) {
    $result = $GLOBALS['con']->query($sql);
    if ($result->num_rows > 0) {
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        return $data;
    }else{
      echo $GLOBALS['con']->error;
      return  array( );
    }
  }
  function insert($sql){
    $id='';
    if ($GLOBALS['con']->query($sql)==true) {
      $id=$GLOBALS['con']->insert_id;
    }else{
      echo $GLOBALS['con']->error;
    }
      return $id;
  }

  if(isset($_SESSION['customer_id'])){

    $sql="INSERT INTO `orderstable` (`u_id`) VALUES ('".$_SESSION['customer_id']."')";
    $orders_id=insert($sql);
    if($orders_id!=''){
        $total_price=0;
        foreach ($_SESSION['cart'] as $key => $value) {
            $total_price+=($value['price']*$value['quantity']);
            $sql='INSERT INTO `orderitem` (`food_id`, `price`, `quantity`, `orders_id`, `u_id`) VALUES ("'.$key.'", "'. $value['price'].'", "'. $value['quantity'].'", "'.$orders_id.'","'.$_SESSION['customer_id'].'")';
            
            $inseart_id=insert($sql);
            if($inseart_id!=''){
            
            }else{
            break;
            }

        }
        $sql="UPDATE `orderstable` SET `total_price`=$total_price WHERE id=$orders_id";
        insert($sql);
      
        

     
        unset($_SESSION['cart']);
        header("Location:./cartDispaly.php");
        

    }

   


  }
  



?>