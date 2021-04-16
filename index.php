<!-- <?php
include 'db.php';

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="POST" name="form">
  <div class="shape">
  <lable> Shape Type: </label>
  <select id="select" name="select" onchange="shape()">
  <option value="carre">carre</option>
  <option value="circle">circle</option>
  <option value="rectangle">rectangle</option>
  <option value="polygone">polygone</option>
  </select><br>
</div>
  <div class="carre">
  <label>carre:</label>
  <input type="text" name="XCa" placeholder="X" class="inp">
  <input type="text" name="YCa" placeholder="Y" class="inp">
  <input type="text" name="widthC" placeholder="width" class="inp"><br>
  <input type="submit" name="submitC" value="draw">
</div><br>
  <div class="circle">
  <label>circle:</circle>
  <input type="text" name="XC" placeholder="X" class="inp">
  <input type="text" name="YC" placeholder="Y" class="inp">
  <input type="text" name="reduis" placeholder="reduis" class="inp">
  <input type="submit" name="submitCir" value="draw">
</div>
  <div class="rectangle">
  <label>rectangle:</label>
  <input type="text" name="XR" placeholder="X" class="inp">
  <input type="text" name="YR" placeholder="Y" class="inp">
  <input type="text" name="width" placeholder="width" class="inp">
  <input type="text" name="height" placeholder="height" class="inp">
  <input type="submit" name="submitR" value="draw">
</div>
  <br>
  <div class="carre">
  <label>carre:</circle>
  <input type="text" name="" placeholder="X" class="inp">
  <input type="text" name="" placeholder="Y" class="inp">
  <input type="text" name="" placeholder="width" class="inp">
  <input type="submit" name="submitC" value="draw">
</div>
<div class="polygone">
  <label>polygone:</label>
  <input type="text" name="Xp" placeholder="X" class="inp">
  <input type="text" name="Yp" placeholder="Y" class="inp">
  <input type="submit" name="submitp" value="draw">
</div>

</form>
<canvas id="myCanvas" width="500" height="500" style="border:1px solid #d3d3d3;">
</canvas>

<?php
include "shape.php";
// $p=new polygone(array(new point(2,8),new point(6,8)));

// var_dump($p);
if(isset($_POST['submitR']))
{   $X=$_POST['XR'];
    $Y=$_POST['YR'];
    $w=$_POST['width'];
    $h=$_POST['height'];
    $rect = new rect($X,$Y,$w,$h);
    echo $rect->getrectangle();
    $sql="insert into rectangle(x,y,w,h) values('$X','$Y','$w','$h')";
     $bdd->exec($sql); 
}
if(isset($_POST['submitCir']))
{   $X=$_POST['XC'];
    $Y=$_POST['YC'];
    $r=$_POST['reduis'];
  
    $circle = new circle($Y,$X,$r);
    echo $circle->getcircle();
    $sql="insert into circle(x,y,reduis) values('$X','$Y','$r')";
     $bdd->exec($sql); 
}
if(isset($_POST['submitC']))
{   $X=$_POST['XCa'];
    $Y=$_POST['YCa'];
    $w=$_POST['widthC'];
   
    $carre = new carre($Y,$X,$w);
    echo $carre->getcarre();
    $sql="insert into carre(x,y,w) values('$X','$Y','$w')";
     $bdd->exec($sql); 
}
if(isset($_POST['submitp']))
{   $X=$_POST['Xp'];
    $Y=$_POST['Yp'];
   
    $polygone = new polygone($Y,$X);
    echo $polygone->getpolygone();
    $sql="insert into polygone(x,y) values('$X','$Y')";
     $bdd->exec($sql); 
}
// $point = new point(5,7);
// $rect = new rectangle(5,7,30,3);
// $rect = new rect(50,50,0,50);



// echo $reduis->getrectangle();

?>

 <script>
   function shape(){
    var sel=document.form.select;
    var c=document.querySelector('.circle');
    var r=document.querySelector('.rectangle');
    var carre=document.querySelector('.carre');
    var p=document.querySelector('.polygone');
    if(sel.value=="circle"){
       r.classList.remove("active");
       c.classList.add("active");
      carre.classList.remove("active");
      p.classList.remove("active");


    }else if(sel.value=="rectangle"){
      c.classList.remove("active");
      r.classList.add("active");
      carre.classList.remove("active");
      p.classList.remove("active");


    }
    else if(sel.value=="carre"){
      carre.classList.add("active");
      c.classList.remove("active");
      r.classList.remove("active");
      p.classList.remove("active");
    }
    else if(sel.value=="polygone"){
      carre.classList.remove("active");
      c.classList.remove("active");
      r.classList.remove("active");
      p.classList.add("active");
    }
  }
 </script>  

</body>
</html>