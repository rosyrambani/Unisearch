<?php 
include 'settings.php';
$firstname = mysqli_real_escape_string($conn, $_REQUEST['firstName']);
$lastname = mysqli_real_escape_string($conn, $_REQUEST['lastName']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$experience = mysqli_real_escape_string($conn, $_REQUEST['experience']);
$age = mysqli_real_escape_string($conn, $_REQUEST['age']);
$sex = mysqli_real_escape_string($conn, $_REQUEST['sex']);
$country = mysqli_real_escape_string($conn, $_REQUEST['country']);
$language = mysqli_real_escape_string($conn, $_REQUEST['language']);


$sql = "INSERT INTO student (firstname, lastname, email, experience, age, sex, country, language) VALUES ('$firstname', '$lastname', '$email', '$experience', 0, 0,'$country',0)";
if(mysqli_query($conn, $sql)){
	if($_POST['type']=='student'){

		$firstname = $_POST['firstName'];
		$lastname = $_POST['lastName'];
		$email = $_POST['email'];
		$experience = $_POST['experience'];
		$country = $_POST['country'];
	}
	 

	Echo "<h1 class='display-1' style='text-align: center; color: #F50057; font-size:50px !important;'>Record Added Successfully</h1>";
     header( "refresh:2;url=index.php" );

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
<style type="text/css">
	.display-1 {
    margin:0px;
    font-size: 25px !important;
    font-size: 3.4rem;
    line-height: 40px;
    line-height: 4rem;
    letter-spacing: 0px;
    letter-spacing: 0rem;
    font-weight: 300;
    color: #757575;
    text-transform: inherit;
  }
</style>