<?php 
class information
{
    function __construct($nam,$mail,$stat,$cit,$hob,$imag)
    {   
        $this->name=$nam;
        $this->mail=$mail;
        $this->stat=$stat;
        $this->cit=$cit;
        $this->hob=$hob;
        $this->imag=$imag;
    }
    
    function getinfo()
    {
        echo "Name:".$this->name."<br />";
        echo "Email:".$this->mail."<br />";
        echo "State:".$this->stat."<br />";
        echo "City:".$this->cit."<br />";
        echo "Hobby:".$this->hob."<br />";
        echo "image:".$this->imag."<br />";
        echo "<h1><a href='index.php'>GO TO HOME</a></h1>";
    }
}

$user1=new information("Abce","abce@gmail.com","Gujarat","Ahemdabad","read,play","img");
$user2=new information("abcd1","abcd1@yopmail.com","Gujarat","Ahemdabad","read","img");
$user3=new information("pqr","pqr@gmail.com","Madhya Pradesh","Indore","play","img");
?>