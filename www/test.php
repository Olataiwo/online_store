<?php #test.php sandbox


define('DBNAME','test');
define('DBUSER','root');
define('DBPASS','riddle1');

$conn = new PDO("mysql:host=localhost;dbname=".DBNAME,DBUSER,DBPASS);


?>