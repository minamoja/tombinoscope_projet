<?php 

$id = $_GET["id"];
$file = "./data/content-$id.php"; 
include $file;
if (!file_exists($file)) {
    header(include "_header.php");
    die("404 Page not found");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ranger</title>
    <link href="CSS/style.css" rel="stylesheet">



</head>
<?php include "_header.php" ?>

<body>



    <?= $rangerTitle ?>
    <div class="ranger">

        <div class="portrait">
        <?= $imgRanger ?>       
        </div>

        <h2>Quelques détails</h2>

            <?= $descrRanger ?>

    </div>

</body>

<?php include "_footer.php" ?>

</html>