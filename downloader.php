<?php
$info = new SplFileInfo("document.pdf");
$ext = $info->getExtension();

$nombre =  "caracteristica_LatamPOS" . ".". $ext;

$filename = "document.pdf"; 
$size = filesize($filename); 
header("Content-Transfer-Encoding: binary"); 
header("Content-type: application/force-download"); 
header("Content-Disposition: attachment; filename=$nombre"); 
header("Content-Length: $size"); 
readfile("$filename"); 

?>  