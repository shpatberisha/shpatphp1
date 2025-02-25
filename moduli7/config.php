<?

$host = "localhost";
$db = "db";
$user = "root";
$user = "";

try{
    
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $username="John";
    $password = password_hash("mypassword",PASSWORD_DEFAULT);
 
    $sql = "INSERT INTO user1 (username, password) VALUES ('$username', '$password')" ;


    $pdo->exec($sql);
    
    echo "Table created successfully";


    
}
catch (Exception $e) {

    echo "Error creating table: " .$e->getMessage();
}




?>