<?php


if(isset($_POST['submit'])){


$x=simplexml_load_file("xml/m.xml");

// include("xmlru.php");
// if (in_array($_POST['tall'],$tallf) and in_array($_POST['weight'],$weightf) and in_array($_POST['speed'],$speedf)) 
// {
// 	echo "<h1 style='color:green;text-align:center'>".$sportf."</h1>";
// }else {echo "<h1 style='color:red;text-align:center'>"."no sport"."</h1>";}



foreach ($x->children() as $child) {
  
  
    
  $tallf=explode('-',$child->tall);
  $tallf=range($tallf[0], $tallf[1]);



  $weightf=explode('-',$child->weight);
  $weightf=range($weightf[0], $weightf[1]);
    
    
    $speedf=explode('-',$child->speed);
    $speedf=range($speedf[0], $speedf[1]);
    
    $sportf=$child->sport;
    
if (in_array($_POST['tall'],$tallf) and in_array($_POST['weight'], $weightf) and 

    in_array($_POST['speed'], $speedf)
   )
   {
        echo "<td>".$sportf."</td>";
      
    }  
  
}

}

?>

<form action="" method="POST">
 	<input type="text" name="tall" placeholder="tall">
 	<div style="height: 10px"> </div>
 	<input type="text" name="weight" placeholder="weight">
 	<div style="height: 10px"></div>
 	<input type="speed" name="speed" placeholder="speed">
 	<div style="height: 10px"> </div>
 	<input type="submit" name="submit" value="recomend"> 
 </form>
 