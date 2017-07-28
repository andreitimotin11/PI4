<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 28.07.2017
 * Time: 17:41
 */

function getGuests()
{
	$res = file('guestbook');
	return $res;
}

//var_dump(getGuests());

function addGuest()
{
//    var_dump($_POST);
	$oldGuests = getGuests();
//    var_dump($oldGuests);
	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];
	$newGuest = $name . '|' . $email . '|' . $msg;
	array_push($oldGuests, $newGuest);
//	var_dump($oldGuests);
	
	$str = implode("", $oldGuests);
	$str .= "\n";
//	var_dump($str);
	file_put_contents('guestbook', $str);
}
