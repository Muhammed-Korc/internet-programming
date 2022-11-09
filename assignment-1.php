<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <style>
        div{
            width:200px;
            height:200px;
            background-color:#eee;
            margin:20px auto;
            text-align:center;
            border-radius:30px;
        }
        input{
            border-radius:30px;
            border:1px solid white;
        }
    </style>
   <?php
   if (isset($_GET['sayi1'])){
    $sayi1 = $_GET['sayi1'];
    $sayi2 = $_GET['sayi2'];
   }
   else{
    $sayi1=0;
    $sayi2=0;
   }
   ?> 
   <form action="">

  <label for="">sayi 1</label><br>
   <input type="text" name="sayi1" value="<?php echo $sayi1 ?>" /><br>
   <label for="">sayi 2</label> <br>
   <input type="text" name="sayi2" value="<?php echo $sayi2 ?>" /><br><br><br>
   <input type="submit" value="topla">
   </form><br>
   <?php 
   echo $sayi1 + $sayi2;
   ?>
   </div>
</body>
</html>