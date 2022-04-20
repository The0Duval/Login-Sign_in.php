 <?php 
 $engine = "mysql";
 $host = "localhost";
 $port = "3306";
 $dbname="etidant";
 $username ="root";
 $password = "root";
 $pdo = new PDO("$engine:host=$host:$port",$username,$password)
 ?>