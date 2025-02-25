<?

$host = "localhost";
$db = "db";
$user = "root";
$user = "";

try{
    
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    
 
    $sql = "DROP TABLE user1";


    $pdo->exec($sql);
    
    echo "Drop table successfully";


    
}
catch (Exception $e) {

    echo "Error creating table: " .$e->getMessage();
}




?>