<?php

include "modal.php";

$q=$_GET['s'];

$city='';


if($q=="Gujarat")
{
    for($i=0;$i<count($Gujarat);$i++){
    $city=$Gujarat[$i];
    echo "<option value=$city>$city</option>";
    }
}
if($q=="Madhya Pradesh")
{
    for($i=0;$i<count($Madhya);$i++){
    $city=$Madhya[$i];
    echo "<option value=$city>$city</option>";
    }
}

?>