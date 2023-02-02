<?php 
require "User.php";
$db = new PDO(
    'mysql:host=db.3wa.io;port=3306;dbname=victoroustiakine_site0',
    'victoroustiakine',
    'c6aaac523840dc2129f6449e52582bf0'
);

var_dump(db);
$user = [
	"firstName" => "Clark",
	"lastName" => "Kent",
	"email" => "clark.kent@test.fr"
];

$newwww = new User($user["firstName"],$user["lastName"],$user["email"]);

// var_dump($newwww);

$query = $db->prepare('SELECT * FROM users LIMIT 1');
$query->execute();
$soloUser = $query->fetch(PDO::FETCH_ASSOC);



$query = $db->prepare('SELECT * FROM users');
$query->execute();
$tabUser = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($soloUser);
var_dump($tabUser);


?>