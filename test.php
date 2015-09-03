<?php


$name = 'test_1_epm3mon192.168.175.114_TLS1-CGNL-NMS-WEB_55e56a65529cc_201509100930.log.lzo';

//preg_match("/(\w+)_(\S+)([0-9]{12})/i" , $name, $match_arr);

function getTextForNewDir($filename){
	unset($data);
	preg_match("/(\w+)_\S+_([0-9]{10})/i" , $filename, $filename_arr);
	return $filename_arr;
/*
	if(preg_match("/(\w+)_\S+___([0-9]{10})/i" , $filename, $filename_arr) ){
		$data[0] = $filename_arr[1];
		$data[1] = $filename_arr[2];
	}else{

		//$data[] = $filename_arr[1];
		//$data[] = 0;
	}	return $data;
*/
}

if( count(getTextForNewDir($name)) > 0 ) echo "string if";
else echo "string else";


echo '<pre>';
var_dump( getTextForNewDir($name) );
echo '</pre>';


/*

echo $match_arr[1].'<br>';
echo $match_arr[2].'<br>';
echo $match_arr[3].'<br>';


echo '<br>';

echo str_replace(' ', '', 'epm3mon  192.168.175.114');

*/
?>