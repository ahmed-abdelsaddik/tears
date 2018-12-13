<?php


if(isset($_POST['submit']))
{

$xml= new DOMDocument('1.0');

$xml->load('m.xml');

 

//  $rule;
// foreach ($xml->children() as $child) {
	

// if($_POST['sport']==$child->sport || $_POST['tall']==$child->tall and $_POST['weight']==$child->weight and $_POST['speed']==$child->speed)
// {
//   $rule=0;
// }else{$rule==1;}

// }
 
//  if ($rule==1) {



//start xml file


$rootfit=$xml->getElementsByTagName("member")->item(0);




// creatte root
$member=$xml->createElement("member");




// creet first kin of members
$fit=$xml->createElement("fit");
// $member->appendChild($fit);

// $sportf=$x->fit[0]->sport;
// creet second kin of members


//append to fit (first kind)

  

 	
 
  
		$tall=$xml->createElement('tall',$_POST['tall']);
		$weight=$xml->createElement('weight',$_POST['weight']);
		$speed=$xml->createElement('speed',$_POST['speed']);
		$sport=$xml->createElement('sport',$_POST['sport']); 

		$fit->appendChild($tall);
		$fit->appendChild($weight);
		$fit->appendChild($speed);
		$fit->appendChild($sport);
        $rootfit->appendChild($fit);
       

$xml->formatoutput=true;



$xml->save("m.xml");
 echo"<xmp>".$xml->saveXML()."</xmp>";
//}//else{echo "sorry this rules already existis";}

}