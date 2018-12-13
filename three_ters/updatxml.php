<?php



$xml= new DOMDocument('1.0');
$xml->load('xml/m.xml');
$c_sport=$_POST['sport'];
echo $c_sport;
$xpath=new DOMXPATH($xml);

foreach ($xpath->query("/member/fit[sport='$c_sport']") as $node ){

	$node->parentNode->removeChild($node);

}

 $xml->formatoutput=true;
$xml->save("xml/m.xml");









$xml= new DOMDocument('1.0');

$xml->load('xml/m.xml');

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



$xml->save("xml/m.xml");
echo"<xmp>".$xml->saveXML()."</xmp>";






















// $xml= new DOMDocument('1.0');
// $xml->load('xml/m.xml');
// $c_sport=$_POST['sport'];
// echo $c_sport;
// $i=-1;
// foreach ($xml->children() as $value) {
// 	$i=$i+1;
// 	$sport=$value->sport;
// 	if($sport==$c_sport){
// 		$value->sport[$i]=$c_sport;

// 	}

// }

// file_put_contents('xml/m.xml', $xml->saveXml());

// $sport=$_POST['sport'];
// $tall=$_POST['tall'];
// $weight=$_POST['weight'];
// $speed=$_POST['speed'];
// $xml= new DOMDocument('1.0');
// $xml->load("xml/m.xml");
// foreach ($xml->children() as $chil) {
// 	if($_POST['sport']==$chil->sport){
// 		 $sportf=$chil->sport;
// 	     $tallf=$chil->tall;
// 	     $weightf=$chil->weight;
// 	     $speedf=$chil->speed;
          
//          $sportf= $sport;
//          $tallf= $tall;
//          $weightf= $weight;
//          $speedf= $speed;

	   
// 	}


// }

// file_put_contents('xml/m.xml', $xml->saveXml());




// $xml= new DOMDocument('1.0');
// $xml->load('xml/m.xml');
// $c_sport=$_GET['sport'];
// echo $c_sport;
// $xpath=new DOMXPATH($xml);

// foreach ($xpath->query("/member/fit[sport='$c_sport']") as $node ){

// 	$node->parentNode->removeChild($node);

// }

//  $xml->formatoutput=true;
// $xml->save("xml/m.xml");