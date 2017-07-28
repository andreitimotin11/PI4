<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 28.07.2017
 * Time: 10:52
 */
//var_dump($_FILES);

if(!empty($_FILES)){
	$uploaded = $_FILES['newimage'];
	if($uploaded['error'] == 0){
		move_uploaded_file(
			$uploaded['tmp_name'] ,
			__DIR__ . '/test.png'
		);
	}
}