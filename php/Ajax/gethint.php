<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kaushal";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
$a[] = "Krishna";
$a[] = "Komal";


	// get the q parameter from URL
	$q = $_REQUEST["q"];
	$hint = "";

	// lookup all hints from array if $q is different from "" 
	if ($q !== "") 
	{
		$q = strtolower($q);
		$len=strlen($q);
		foreach($a as $name) 
		{
			// stristr: it search first occurrence of string inside another string
			// substr: extract part of string
			if (stristr($q, substr($name, 0, $len))) 
			{
				if ($hint === "") 
				{
					$hint = $name;
				} 
				else 
				{
					$hint .= ", $name";
				}
			}
		}
	}

	// Output "no suggestion" if no hint was found or output correct values 
	echo $hint === "" ? "no suggestion" : $hint;
?>