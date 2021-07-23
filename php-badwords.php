<!DOCTYPE html>
<html lang="en">
<?php
$var = 'Php is the best';
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

<input type="text" placeholder="Parola da censurare" id="word" name="word">




<?php 


function getvalue(){
     valueword = document.getElementById("word").value
console.log(valueworld) };

getvalue();



// $nuovavar = str_replace($_GET['word'], '***', $var);

// echo '<pre>';
// print_r($data);
// echo '</pre>';

?>

    




</script>
</body>
</html>