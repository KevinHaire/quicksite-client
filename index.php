<?php 


  $sitePath = realpath(dirname(__FILE__));
  $pathPartsArray = explode("/",$sitePath);
  unset($pathPartsArray[count($pathPartsArray) - 1]);
  $rootPath = join("/",$pathPartsArray);
  $masterPath = $rootPath.'/_quicksiteMasterFiles';

	// echo $sitePath.'<br>';
	// echo $rootPath.'<br>';
	// echo $masterPath;


include $masterPath.'/index.php';


?>