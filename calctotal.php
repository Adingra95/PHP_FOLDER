
<?php
function item($itemName,$itemCode,$amount)
{
    echo "<br>Item Name:".$itemName;
    echo "<br>Item Code:".$itemCode;
    echo "<br>Amount:".$amount; 
    total($amount);
}
function total($amount){
    static $total = 0;
    $total = $total + $amount;
    echo"<br>Total is :".$total;

}
item('Tomato',25,10);
item('ognon',41,21);
?>
