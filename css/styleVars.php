<?php 

  $sitePath = realpath(dirname(__FILE__));
  $pathPartsArray = split("/",$sitePath);
  unset($pathPartsArray[count($pathPartsArray) - 1]);
  $sitePath = join("/",$pathPartsArray);
  unset($pathPartsArray[count($pathPartsArray) - 1]);
  $rootPath = join("/",$pathPartsArray);
  $masterPath = $rootPath.'/_quicksiteMasterFiles';

	include $sitePath.'/config/_array.php';
	include $masterPath.'/config/_vars.php';
	include $masterPath.'/css/styleVars.php';


?>