<?php

class point {
    public $x;
    public $y;
  
    // public function _construct($x,$y){
    //     $this->x=$x;
    //     $this->y=$y;
    // }
    public function set_x($x){
        $this->x=$x;
    }
    public function set_y($y){
        $this->y=$y;
    }
    public function getx(){
        return $this->x;
    }
    public function gety(){
        return $this->y;
    }
}





class rectangle extends point{
    public $w;
    public $h;
    function _construct($x,$y,$w,$h){
        $this->x=$x;
        $this->y=$y;
        $this->w=$w;
        $this->h=$h;
    }
    function get_w(){
        return $this->w;
    }
    function getrectangle(){
        $x=$this->x;
        $y=$this->y;
        $rectangle="<script>
        var c = document.getElementById('myCanvas');
        var ctx = c.getContext('2d');
        ctx.beginPath();
        ctx.rect('$x', '$y', '$this->w',' $this->h');
        ctx.stroke();
        
        </script> ";
        return $rectangle;
    }
}
class polygone extends point{
    public $sommet;
 
    // function _construct($tabPoint){
    //     $this->sommet=array();
    //     $nb=count($tabPoint);
    //     for($i=0;$i<$nb;$i++)
    //     {
    //         $p=$this->sommets[$i]=$tabPoint[$i];
    //     }
        
    // }
    //   function _construct(){
    //    $this->sommet=array();
    //    $nb=func_num_args();
    //    for($i=0;$i<$nb;$i++){
    //        $p=func_get_arg($i);
    //        $this->sommet[$i]=new point($p->x,$p->y);
    //    }
    // }
    function getpolygone(){
        $x=$this->x;
        $y=$this->y;
        $polygone="<script>
        var c = document.getElementById('myCanvas');
        var ctx = c.getContext('2d');
        ctx.beginPath();
        ctx.moveTo('$x','$y');
        ctx.lineTo(300, 150);
        ctx.lineTo(400, 250);
        
        ctx.stroke();
        </script>";
        return $polygone;
    }
}



class circle extends point {
    public $r;
    
  
    function __construct($x,$y,$r) {
     
      $this->r=$r;
      $this->x=$x;
      $this->y=$y;
    }
    function get_n() {
      return $this->r;
    }
    function get_x() {
        return $this->x;
      }
    function getcircle(){
        $cx=$this->x;
        $cy=$this->y;
        $circle="<script>
        var c = document.getElementById('myCanvas');
        var ctx = c.getContext('2d');
        ctx.beginPath();
        ctx.arc('$cx', '$cy', '$this->r', 0, 2 * Math.PI);
        ctx.stroke();
        
        </script> ";
        return $circle;
    }
  }
  class rect extends point {
    public $w;
    public $h;
    
  
    function __construct($x,$y,$w,$h) {
     
      $this->x=$x;
      $this->y=$y;
      $this->w=$w;
      $this->h=$h;
    }
    function get_w() {
      return $this->w;
    }
   
    function getrectangle(){
        $x=$this->x;
        $y=$this->y;
        $rect="<script>
        var c = document.getElementById('myCanvas');
        var ctx = c.getContext('2d');
        ctx.beginPath();
        ctx.rect('$x', '$y', '$this->w',' $this->h');
        ctx.stroke();
        
        </script> ";
        return $rect;
    }
  }
  class carre extends point {
    public $w;
    
    function __construct($x,$y,$w) {
     
      $this->x=$x;
      $this->y=$y;
      $this->w=$w;

    }
    function get_w() {
      return $this->w;
    }
   
    function getcarre(){
        $x=$this->x;
        $y=$this->y;
        $carre="<script>
        var c = document.getElementById('myCanvas');
        var ctx = c.getContext('2d');
        ctx.beginPath();
        ctx.rect('$x', '$y', '$this->w',' $this->w');
        ctx.stroke();
        
        </script> ";
        return $carre;
    }
  }
  
  



?>
  
  



