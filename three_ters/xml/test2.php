<?php

if(isset($_POST['submit']))
{

//start xml file




$xml= new DOMDocument('1.0');

 $xml->load('m2.xml');

$rootfit=$xml->getElementsByTagName("fit")->item(0);

// creatte root
$member=$xml->createElement("member");




// creet first kin of members
$fit=$xml->createElement("fit");
$member->appendChild($fit);
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
        $member->appendChild($rootfit);
       

$xml->formatOutput=true;



$xml->save("m2.xml");
echo"<xmp>".$xml->saveXML()."</xmp>";



}