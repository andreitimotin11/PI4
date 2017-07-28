<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 28.07.2017
 * Time: 17:39
 */
require 'func.php';
if ($_POST['name']) addGuest();
header('Location:DZ.php');
?>