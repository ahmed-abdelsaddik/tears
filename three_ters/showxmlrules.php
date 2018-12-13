<?php
$x=simplexml_load_file("xml/m.xml");
$i=-1;
    echo"<table border='2px'>";
   	echo "<tr>";
   	echo"<td>tall</td>";
   	echo"<td>weight</td>";
   	echo"<td>speed</td>";
   	echo"<td>sport</td>";
    echo"<td>control</td>";
     // echo"<td>id</td>";
     
   echo "</tr>"; 

      
     	foreach ($x->children() as $rule) {
       $i=$i+1; 
       echo "<tr>";
     	echo "<td>".$rule->tall."</td>";
     	echo "<td>".$rule->weight."</td>";
        echo "<td>".$rule->speed."</td>";
     	echo "<td>".$rule->sport."</td>";
     	echo "<td>"."<button type='button'><a href='editxml.php?sport=".$rule->sport."' style='padding-right=10px;'>edit</a></button>".
      "<span>...</span>".

         "<button type='button'><a href='deletexml.php?sport=$rule->sport'>Delete</a></button>".
      "</td>";
     	
     	echo "</tr>";
     }
     	echo "</table>";


     	echo"<a  href='views/create.php'>back</a>";
