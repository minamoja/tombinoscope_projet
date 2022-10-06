<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trombi</title>
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&family=Varela+Round&display=swap" rel="stylesheet">
</head>

<?php include "_header.php" ?>

<body>
    <h1> Our PHPower Rangers</h1>

    <section class="trombiSection">



<ul class="trombiUl">

<?php include '_script.php';
 
 foreach($phpRangers as $phpRanger): 
 $imgsrc = $phpRanger['name'] . ".png" ;
 ?>
    <li>
    <div class="trombiDiv"> 
   
      <a href="ranger.php?id=<?=$phpRanger["id"]?>"><img class="trombiImg" src = "/pictures/<?= $imgsrc ?>" alt="Photo"> </a>     
        </div>
    </li>
    <div class="trombiDivh3Lorem">
        <h3><a class="rangerx" href="ranger.php?id=<?=$phpRanger["id"]?>"> Ranger <?=$phpRanger['name']?> </a></h3> 
        <p class="textranger"><?=$phpRanger['petitLorem'] ?></p>
    </div>
    

<?php endforeach; ?>

</ul>



    </section>

</body>

<?php include "_footer.php" ?>

</html>