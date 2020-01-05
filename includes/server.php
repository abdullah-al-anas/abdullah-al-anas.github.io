<?php 

session_start();

$username = "";
$email = "";

 $errors = array();

//connect to db

$db = mysql_connect('localhost','root','','resturant') or die("could not connect to database");

//register user

$username = mysqli_real_escape_strint($db, $_POST['username']);
$email = mysqli_real_escape_strint($db, $_POST['email']);
$password_1 = mysqli_real_escape_strint($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_strint($db, $_POST['password_2']);


//from validation

if(empty($username)) {array_push($errors, "username is required")};
if(empty($email)) {array_push($errors, "email is required")};
if(empty($password_1)) {array_push($errors, "password is required")};
if($password_1 != $password_2){array_push($errors, "Password do not match")};

//chech db for existing user with same username

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);


if($user){
	if($user['username'] === $username){array_push($errors, "username already exists")};
	if($user['email'] === $email){array_push($errors, "email id already exists as username")};
}


//register the user if no error

if(count($errors) == 0 ){
	$password = md5($password_1);//encrypt password!
	$query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

	mysqli_query($db, $query);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in";

	header('location:../myaccount.php');

}




?>