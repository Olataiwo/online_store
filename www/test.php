<?php #test.php sandbox


define('DBNAME','test');
define('DBUSER','root');
define('DBPASS','riddle1');



try {

	# prepare a pdo instance
	$conn = new PDO("mysql:host=localhost;dbname=".DBNAME,DBUSER,DBPASS);

	#set Verbose error modes

	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);


} catch (PDOException $e){

	echo $e->getMessage();
}

if (array_key_exists('save', $_POST)){

	print_r ($_FILES);

}

?>


<form id="register" method="POST" enctype="multipart/form-data">

<p>Please upload a file</p>

<input type="file" name="pic">

<input type="submit" name="save">
	


</form>