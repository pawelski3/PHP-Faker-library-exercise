<?php

echo __file__;
$f="dfdf";
require_once '../fake/Faker-master/Faker-master/src/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

$result=$pdo->query('SELECT * from english WHERE name="Miss Jody Swift III"');
  
    $result->execute();
$wynik=$result->fetchAll();
echo "<br>";
echo var_dump($wynik);
echo "<br>";
echo "Wynik: ".(bool)$wynik;
echo "<pre>";
print_r($wynik);


$faker = Faker\Factory::create('de_DE');
//echo $faker->realText(); 
// generate data by accessing propertie
for ($i=0;$i<9;$i++){
$name= $faker->name;

//echo "<br>";
  $realtext= $faker->realText(100);
//echo $realtext;
//
$company=$faker->company;
$companys=$faker->companySuffix;
//echo $company." ".$companys;
$comp=$company." ".$companys;
//echo $comp;
//echo "<br>";
$tablica=[$name,$realtext,$comp];
$tablica2[$i]=$tablica;
//
//UPDATE `english` SET `company` = 'hghgh' WHERE `english`.`numer` = 12;
/*$result=$pdo->prepare('UPDATE english SET company= :text WHERE numer='.$qw);
    $result->bindParam(':text',$comp);
    //$result->bindParam(':name',$realtext);
    $result->execute();*/


}
echo "<pre>";
//print_r ($tablica2);