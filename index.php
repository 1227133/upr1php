<?php
// echo "Hello team <br>" ;

// $username = "Mariq";
// echo $username." ";

// $age = 22.38 ;
// echo $age;

// $bool = true;
// echo $bool."<br>";

// $array = [1,2,3]; //neasociativen masiv  , moje da slojish masiv v masiv
// echo $array[2]; // 2 indeks  = 3

// //asociativen masiv , ima keywrod koito ti stoqn zad imenata 

// $assocArray = ["username"=>"Mariq <br>","age"=>"22","town"=>"Varna"]; // asociativen masiv pyrviqt string e keywords 
// echo $assocArray["username"];

// echo $assocArray["age"]; 

// echo $assocArray["town"];

// for($i =0 ; $i<=2 ; $i++)
// {
//     echo $array[$i]."<br>";
// }

// foreach($assocArray as $key => $biografiq)
// {
//     echo $key." ". $biografiq."<br>";
// }

// $ClassStartSad = 730;
// $ClassStart = 800;
// if ($ClassStartSad > $ClassStart)
// {
//     echo "Inside";
// }
// elseif($ClassStartSad < $ClassStart)
// {
//     echo "Inside elseif";
// }
// else
// {
//     echo "Inside else";
// }

// switch ($ClassStart)
// {
// case $ClassStart > $ClassStartSad:
//     echo "<br>"."Inside"."<br>";
//     break ;
// case $ClassStart < $ClassStartSad:
//     echo "Inside elseif"."<br>";
//     break;
// default:
//     echo "Match don't find";
//     break;
// }

class Person
{
    public $username; #wytreshna prom.
    public function __construct ($username) #construktor e tovva
    {
       $this->username =$username; #dostypvash neshto ot klasa,
    }
    public function PrintUserName() #public e vidimost
    {
        echo "This is my username:".$this->username;
    }
    
}

$Ivan = new Person("<br>"."Vanko1"); #instanciq,Vanko1 e username
$Mariq = new Person("<br>"."Mariq1"); 
$Ivan."<br>"->PrintUserName(); #Printusername e property na classa
$Mariq->PrintUserName();
