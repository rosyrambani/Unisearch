<?php 
include 'settings.php';

$sql = "CREATE TABLE student (
id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
experience VARCHAR(30),
age VARCHAR(30),
sex VARCHAR(50),
country VARCHAR(50),
language VARCHAR(50)
)";
mysqli_query($conn, $sql);

 Echo "<!DOCTYPE html>
<html>
<head>

	<title>Check your eligibility for canadian universities</title>
	<link rel='stylesheet' type='text/css' href='style.css'>

</head>
<h1 align='middle'>Canadian Universities Search Engine</h1>
<body>";



Echo "<div class='middle'>
 <section class='inline'>
 <div>
 	<form method='POST' action='userinfo.php'>
  <label>Full Name:</label><br>
  <input type='text' name='firstName' placeholder='FirstName'>
  <input type='text' name='lastName' placeholder='LastName'><br>
  <label>Email Id:</label><br>
  <input type='email' name='email'>
  <br>
  <label>Work Experience(In Years):</label><br>
  <input type='text' name='experience'>
  <br>
  <input type='hidden' name= 'age'>
  <input type='hidden' name= 'sex'>
  <label>Country: </label><br>
  <input type='text' name= 'country'>
  <input type='hidden' name= 'language'>
  <input type='submit' value='Submit' id='submit1'>
</form> 
</div>
<div class='uniresult'>
<p>Click the submit button to show available results.</p>

<form>
  CGPA:<br>
  <input type='text' name='CGPA' >
  <br>
  Percentage:<br>
  <input type='text' name='Percentage' placeholder='Use your uni multiplier'><br>";

  Echo "Field of Study:<br>

  <select>
  <option value='nothing'>Select the course </option>
  <option value='meng'>M.Eng</option>
  
</select>
 
  <br>
  <input type='submit' value='Submit' id='submit2'>
</form>
</div> 
<div>
<label>Requirements </label><br>
	<textarea rows='10' cols='50' readonly>
The application requirements for the universities you are eligible for will show up here.
</textarea>
</div>
 </section>
 
 <section>
 <div>
 	 <label>Details of Courses available</label><br>
 	 <textarea rows='15' cols='100' readonly>

 	 </textarea>
 	 </div>
 </section>

 <section>
 	<label>Connect to people</label><br>
 	 <textarea rows='15' cols='100' readonly>
 	 </textarea>
 </section>
 <section>
 	<label>Any further queries, feel free to ask </label><br>
 	 <textarea type='submit' name='Query' value='Send' rows='5' cols='100'></textarea> <br>
 	 <input type='submit' name='Send'>
 </section>
 </div>
</body>
</html>";
?>