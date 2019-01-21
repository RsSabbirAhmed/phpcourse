<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  /*   echo "my name is Sabbir Ahmed <br>";
    echo 'my age is 21 <br>';

    $color = 'red';
    $shirt = "sleev-less";
    $combination = $color. " " .$shirt;
    echo $combination; */
   ?><br>
  <?php
  /* $color = 'red';
   echo "${color} is my fav <br>";
    echo "$color <br>"; 
    echo '$color <br>'; 
    */
    ?> 

  <?php 
  
    $pharase1 = "student who come late ";
    $pharase2 = "in class sit in last with Rock";
    $combine = $pharase1;
    $combine.= $pharase2;
    echo "Original full string: $combine <br>"
  ?><hr>

  Uppercase first: <?php echo ucfirst($combine); ?><br>
  Uppercase word: <?php echo ucwords($combine); ?><br>
  Lowercase: <?php echo strtolower($combine); ?><br>
  Uppercase: <?php echo strtoupper($combine); ?><br>

  <hr>

      Repeat: <?php echo str_repeat($combine, 3); ?><br>
      Make substring from one point to another: <?php echo substr($combine, 5, 10); ?><br>
      Find position of any specific word: <?php echo strpos($combine, "come"); ?><br>
      Find character: <?php echo strchr($combine,"R"); ?>
 <hr>
   Total length of String:<?php echo strlen($combine); ?>
  <?php?>
</body>
</html>