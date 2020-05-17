<?php 
include 'db.php';
session_start();


if (isset($_POST['addtoCart'])) {
    $food_id=(int)$_POST['id'];
   // echo $food_id;
    # code...
    init();
    add($food_id);
    

}

if (isset($_POST['countFooditem'])) {
    
  
    init();
    echo countFooditem();

}
if (isset($_POST['allFooditems'])) {
    
  
    init();
    echo coutAllFooditems();

}
if (isset($_POST['totalPrice'])) {
    
  
    init();
    echo totalPrice();

}

 function init()
{
    if(isset($_SESSION['cart'])){
        
    }else{
        $_SESSION['cart']=array();
        
    }
}
 function add($food_id )
{
    $existInarray=false;
    //create a fooditems array store in session

    if(array_key_exists($food_id,$_SESSION['cart'])){
    $existInarray=true;
    }else{
        $_SESSION['cart'][$food_id]=array();
    }

    //query the price of food item 
    $price=null;
    $name=null;
    $query="SELECT * FROM `food` WHERE `food_id` = $food_id";
    $result = mysqli_query($GLOBALS['con'],$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
        $row = $result->fetch_assoc();
        $price=$row['price'];
        $name=$row['foodname'];
    }

    $_SESSION['cart'][$food_id]['price']=$price;
    $_SESSION['cart'][$food_id]['name']=$name;
    if($existInarray){
        //update quantity  
        $_SESSION['cart'][$food_id]['quantity']=$_SESSION['cart'][$food_id]['quantity']+1;

    }else{
        $_SESSION['cart'][$food_id]['quantity']=1;
    }

    echo "done";

}

 function countFooditem()
{
    $total_item=0;
    foreach ($_SESSION['cart'] as $key => $value) {
        $total_item++;
    }
    return $total_item;
}
function coutAllFooditems()
    {
        $total_item=0;
        foreach ($_SESSION['cart'] as $key => $value) {
            $total_item+=$value['quantity'];
            //$total_item++;
        }
        return $total_item;
    }
function totalPrice()
    {
        $totalPrice=0;
        foreach ($_SESSION['cart'] as $key => $value) {
            $price=$value['price']*$value['quantity'];
            $totalPrice+=$price;
        
        }
        return $totalPrice;
    }


function clearCart()
    {
        unset($_SESSION['cart']);
    }



?>