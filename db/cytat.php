<?php
echo __file__;
$random=rand(20,1000);
$result=$pdo->query('SELECT * FROM english WHERE numer='.$random);
    //$result->bindParam(':text',$comp);
    //$result->bindParam(':name',$realtext);
    $result->execute();
$cytat=$result->fetchAll();
//echo "<pre>";
//print_r($cytat);
//$result=$pdo->query("select * from english");
//$categories=$result->fetchAll();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

