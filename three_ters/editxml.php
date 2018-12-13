<?php
$x=simplexml_load_file("xml/m.xml");

// $xml->book[0]->titl
 include("xmlru.php");
$sport=$_GET['sport'];
echo $id;

foreach ($x->children() as $child) {
	if($_GET['sport']==$child->sport){
		 $sportf=$child->sport;
	     $tallf=$child->tall;
	     $weightf=$child->weight;
	     $speedf=$child->speed;

	}
	
}

?>
<form action="updatxml.php" method="POST">
 	<input type="text" name="tall" placeholder="tall" value="<?php echo $tallf ?>"><br>
 	<p></p>
 	<input type="text" name="weight" placeholder="weight" value="<?php  echo $weightf ?>"><br>
 	<p></p>
 	<input type="speed" name="speed" placeholder="speed" value="<?php echo $speedf ?>"><br>
 	<p></p>
 	<input type="text" name="sport" placeholder="sport" value="<?php echo $sportf?>"><br>	 
 	<p></p>
 		<input type="submit" name="submit" value="save"> 
 </form>
<a  href='views/create.php'>back</a>

