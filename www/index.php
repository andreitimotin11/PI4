<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 27.07.2017
 * Time: 20:06
 */
/*
$res = fopen(__DIR__. '/db.txt', 'r');
//var_dump(__DIR__. '/db.txt');


while (!feof($res)){
	$str = fgets($res);
	echo $str . "<br>";
}
fclose($res);
*/
$res = file(__DIR__. '/db.txt');
var_dump($res);