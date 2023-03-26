
<?php
// check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// get input values
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	// check if username and password are correct
	if ($username == 'pavithra.01' && $password == 'Garudan2023') {
		// redirect to next page
		header('Location: docx.html');
		exit;
	} else {
		// show error message
		echo 'Invalid username or password';
	}
}
?>
