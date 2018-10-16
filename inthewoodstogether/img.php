<?php
$dir = "img/";
$allPhotos = array();
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
	  if (($report == ".") || ($report == ".."))
	  {
     continue;
	  }	
	  array_push($allPhotos,$file);	
			
		//echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}
echo implode(',',$allPhotos);
?>