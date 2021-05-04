<?php if ( ! defined('BASEPATH')) exit('No direct script accessallowed');
if ( ! function_exists('converti')) {
 function converti($text) {
	$tab = array();
	$tab = str_split($text);
	$valiny = $tab[count($tab)-1];
	$init=2;
	for($i=count($tab)-1;$i>=0;$i+=-1) {
		if($init%3==0){
			$valiny=' '.$tab[$i].$valiny;
		}
		else {
			$valiny = $tab[$i].$valiny;
		}
		$init++;
	}
	echo $valiny .' ar';
 }
 }
?>