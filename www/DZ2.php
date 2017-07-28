<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 28.07.2017
 * Time: 17:54
 */
/*
2. Решите задачу загрузки файла от пользователя в заданное место на сервере с тем же именем файла, что он имел на компьютере пользователя.
 */
if (isset($_FILES['file'])) {
//	echo 1;
	var_dump($_FILES['file']);
	$name = $_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], $name);
}
?>
<form enctype="multipart/form-data" method="post" action="DZ2.php">
    <input type="file" name="file">
    <button type="submit"> GO!</button>
</form>
