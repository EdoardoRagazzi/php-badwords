<!DOCTYPE html>
<html lang="en">


<?php
$var = 'Php is the best';
$badword= trim($_GET["word"]);

var_dump($badword);

$lunghezzavar =strlen($var);


?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP / Badwords</title>
</head>
<body>

<h1> Best Code  : <?php echo  $var  ?> </h1>
<h1> Length Code  : <?php echo  $lunghezzavar ?> </h1>


<h1>Censurata: 
   <?php
   echo str_replace($badword, '***', $var);
   ?>
</h1>




<?php 






// $nuovavar = str_replace($_GET['word'], '***', $var);

// echo '<pre>';
// print_r($data);
// echo '</pre>';

?>

    




</script>
</body>
</html>