<?php
$cart = [
    ["name" => "Laptop", "price" => 40, "quantity" => 3],
    ["name" => "Mouse", "price" => 10, "quantity" => 6],
    ["name" => "Keyboard", "price" => 20, "quantity" => 2]
];

// foreach($cart as $items){
//     echo " " . $items['name'];
//     echo " " . $items['price'];
//     echo " " . $items['quantity'];
// }
function shoppingCart($cart){
    $total=0;
    foreach($cart as $items){
        if($items["quantity"] > 5){
            $newprice = $items["price"] - $items["price"]*0.05;
            $total +=$newprice * $items["quantity"];
        }
        else{
            $total +=$items["price"] * $items["quantity"];
        }
    }
    if($total > 100){
        $discount = $total - $total * 0.1;
    }
    return "Total before  global discount: ".$total." Total after discounts: ".$discount;

}
echo shoppingCart($cart);