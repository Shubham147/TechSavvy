<?php
include "usersmodal.php";
if(isset($_POST['show']))
{
    $username=$_POST['username'];
    if($username=="Abce")
    {
        return $user1->getinfo();
        
    }
        if($username=="abcd1")
    {
        return $user2->getinfo();
    }
        if($username=="pqr")
    {
        return $user3->getinfo();
    }
    
    
    
    // here we can fetch data from DB and show ;
    // to show, I just stored information in different Objects
}
?>