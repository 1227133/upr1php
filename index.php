<?php
echo "Hello team <br>" ;

$username = "Mariq";
echo $username." ";

$age = 22.38 ;
echo $age."<br>";

$bool = true;
echo $bool."<br>";

$array = [1,2,3]; //neasociativen masiv  , moje da slojish masiv v masiv
echo $array[2]; // 2 indeks  = 3

//asociativen masiv , ima keywrod koito ti stoqn zad imenata 

$assocArray = ["username"=>"Mariq <br>","age"=>"22","town"=>"Varna"]; // asociativen masiv pyrviqt string e keywords 
echo $assocArray["username"];

echo $assocArray["age"]; 

echo $assocArray["town"];

for($i =0 ; $i<=2 ; $i++)
{
    echo $array[$i]."<br>";
}

foreach($assocArray as $key => $biografiq)
{
    echo $key." ". $biografiq."<br>";
}