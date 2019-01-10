<?php

include ('db/db.php');
include ('db/cytat.php');
include ('layouts/css.css');

if (array_key_exists('c', $_GET)){$mod=$_GET['c'];}
else {$mod='wpisy';}



$path='modules/'.$mod.'.php';



 ob_start();
            include($path);
            $content= ob_get_contents();
            ob_get_clean();
echo "<br>";
include ('layouts/admin.php');
//echo gettype($content);