<?php 

// Enter the name of directory 
$pathdir = "./fotos/".$_GET['pasta_fotos']; 

// Enter the name to creating zipped directory 
$zipcreated = $_GET['pasta_fotos'].".zip"; 

// Create new zip class 
$zip = new ZipArchive; 

if($zip -> open($zipcreated, ZipArchive::CREATE ) === TRUE) { 
	
	// Store the path into the variable 
	$dir = opendir($pathdir); 
	
	while($file = readdir($dir)) { 
		if(is_file($pathdir.$file)) { 
			$zip -> addFile($pathdir.$file, $file); 
		} 
	} 
	$zip ->close(); 
} 

?> 
