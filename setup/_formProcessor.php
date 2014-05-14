<?php 
  $sitePath = realpath(dirname(__FILE__));
  $pathPartsArray = split("/",$sitePath);
  unset($pathPartsArray[count($pathPartsArray) - 1]);
  unset($pathPartsArray[count($pathPartsArray) - 1]);
  $rootPath = join("/",$pathPartsArray);
  $masterPath = $rootPath.'/_quicksiteMasterFiles';

	// echo $sitePath.'<br>';
	// echo $rootPath.'<br>';
	// echo $masterPath;


include $masterPath.'/setup/_formProcessor.php';
?>