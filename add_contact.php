<?php
include('core/init.php');
include('libraries/Database.php');
?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("INSERT INTO `contacts` (first_name, last_name, email, phone)
								VALUES (:first_name, :last_name, :email, :phone)");

//Bind Values
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':email', $_POST['email']);
$db->bind(':phone', $_POST['phone']);

if($db->execute()){
	echo "Contact was added";
} else {
	echo "Could not add contact";
}
?>