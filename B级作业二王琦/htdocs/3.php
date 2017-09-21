<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<<?php 
$dir = "doublef/";  //要获取的目录
if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh))!= false){
            $filePath = $dir.$file;
            echo "<img src='".$filePath."'/>";
        }
        
    }
}
 ?>

</body>
</html>
