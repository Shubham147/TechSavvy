<?php
require "modal.php";

if(isset($_GET['city']))
{
    $cityName=$_GET['city'];
    
    if($cityName=='Indore')
    {
        include "indoreview.php";
    }
    elseif($cityName=='Delhi')
    {
        include "delhiview.php";
    }
    else
    {
        echo "City Not Found";
    }
}


?>