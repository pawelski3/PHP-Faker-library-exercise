<?php
?>
<head>
 <meta charset="UTF-8">
 <title>Cytaty</title>
<style>
    body{
        background-color: black;
        color:white;
    }
    
   
    
    
    
</style>
 
</head>
<body>
    Witaj
    <div class="cytat">
       <?php echo '"'.$cytat[0]['text'].'"';?>
        <p class="right"> <?php echo $cytat[0]['name'];?> </p>
    </div>
    
    <a href="index.php?c=wpisy">Wpisy</a>
    <a href="index.php?c=inne">Inne</a>
    <a href="index.php?c=faker">faker</a>
    
    
    <div class="container"><?php echo $content;?></div>
    
</body>