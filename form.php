<?php
/*$servername = "localhost:50";
$username = "admin";
$password = "IrpLzX71wZnd";
$dbname = "data_contactform";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



// link form 

echo "<pre>";
print_r($_POST);

// returns
Array
(
    [name] => Lou 
    [email] => 
    [message] => 68
)

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

// 2. Validation
if (true ==== filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "This cleaned email address is considered valid."
} else {
	echo "This cleaned email address is not valid. Sorry. xoxo."
}
?>
*/ 

$name = $_POST['name']; 
echo "here's your input"; 
echo $name; 
echo $mail; 
echo $message; 


