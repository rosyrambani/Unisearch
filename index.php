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
<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>

	<title>Check your eligibility for canadian universities</title>
   

</head>
<body>";

Echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js'></script>
<script type='text/javascript' src='https://code.jquery.com/jquery-2.1.1.min.js'></script>";

Echo "
<nav>
    <div class='nav-wrapper'>
      <a href='#'' class='brand-logo'>&nbsp;&nbsp;UniSearch</a>
      <ul id='nav-mobile' class='right hide-on-med-and-down'>
        <li><a href=''>Blog</a></li>
        <li><a href=''>Store</a></li>
        <li><a href=''>About</a></li>
      </ul>
    </div>
  </nav>
<div class='middle' style='margin-top:100px;'>
 <section class='inline'>
 <div class='card'>
 	<form id='form1'>
  <div class='row'>
  <div class='input-field col s12'>
  <i class='material-icons prefix'>account_circle</i>
  <input type='text' id='firstName' name='firstName' style='text-transform:capitalize'>
  <label for='firstName'>First Name: </label> 
  </div>
  </div>
  <div class='row'>
  <div class='input-field col s12'>
  <i class='material-icons prefix'>account_circle</i>
  <input type='text' id='lastName' name='lastName' style='text-transform:capitalize'>
  <label for='lastName'>Last Name: </label>
  </div>
  </div>
  <div class='row'>
  <div class='input-field col s12'>
  <i class='material-icons prefix'>email</i>
  <input type='email' name='email' id='email'>
  <label for='email'>Email Id:</label>
  </div>
  </div>
  <div class='row'>
  <div class='input-field col s12'>
  <label for='experience'>Work Experience:</label>
  <input type='text' name='experience' id='experience'>
  <br>
 </div>
  </div>

  <input type='hidden' name= 'age'>
  <input type='hidden' name= 'sex'>
  <div class='row'>
  <div class='input-field col s12'>
  <label for='country'>Country:</label>
  <input type='text' id='country' name='country' style='text-transform:capitalize'>
  </div>
  </div>
  <input type='hidden' name= 'language' style='text-transform:capitalize'>
  
   <input class='btn waves-effect waves-light amber darken-4' type='submit' name='submit1' id='submit1'>
        

</form> 
</div>
<div class='card'>
<p>Click the submit button to show available results.</p>

<form id='form2'>
<fieldset disabled />
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
  <button class='btn waves-effect waves-light' type='submit' name='action' id='submit2'>Submit
  </button>
  
</form>

</div> 
<div class='card'>
<label>Requirements </label><br>
	<textarea rows='10' cols='50' readonly>
The application requirements for the universities you are eligible for will show up here.
</textarea>
</div>
 </section>
 
 <section>
 <div class='card'>
 	 <label>Details of Courses available</label><br>
 	 <textarea rows='15' cols='100' readonly>

 	 </textarea>
 	 </div>
 </section>

 <section>
 <div class='card'>
 	<label>Connect to people</label><br>
 	 <textarea rows='15' cols='100' readonly>
 	 </textarea>
   </div>
 </section>
 <section>
 <div class='card'>
 	<label>Any further queries, feel free to ask </label><br>
 	 <textarea name='Query' rows='5' cols='100'></textarea> <br>
 	 <button class='btn waves-effect waves-light' type='submit' name='action' id='submit3'>Send
  </button>
   
   </div>
 </section>
 </div>

 <footer class='page-footer'>
          <div class='container'>
            <div class='row'>
              <div class='col l6 s12'>
                <h5 class='white-text'>Canadian Universities Search Engine</h5>
                <p class='grey-text text-lighten-4'>Content</p>
              </div>
              <div class='col l4 offset-l2 s12'>
                <h5 class='white-text'>Links</h5>
                <ul>
                  <li><a class='grey-text text-lighten-3' href='#!'>About</a></li>
                  <li><a class='grey-text text-lighten-3' href='#!'>Work</a></li>
                  <li><a class='grey-text text-lighten-3' href='#!'>Services</a></li>
                  <li><a class='grey-text text-lighten-3' href='#!'>Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class='footer-copyright'>
            <div class='container'>
            © 2017 Copyright
            <a class='grey-text text-lighten-4 right' href='#!'>More Links</a>
            </div>
          </div>
        </footer>
</body>
</html>";
?>
<script>
$(document).ready(function(){
$('#form1').submit(function(e){
  e.preventDefault();
  alert("heyyyyyy");
console.log( $( this ).serializeArray() );
 //  var firstName = document.getElementById("firstName").value;
 //  var lastName = document.getElementById("lastName").value;
 //  var email = document.getElementById("email").value;
 //  var experience = document.getElementById("experience").value;
 //  var country = document.getElementById("country").value;
 //  event.preventDefault();
  
 // $.ajax({
 //        url: "userinfo.php",
 //        type: "POST",
 //         dataType: "json",
 //       // data:{type:"student",firstName:"firstName", lastName:lastName, email:email, experience:experience, country:country},
 //          contentType : "application/json",

 //      success: function() {



 //        alert("Record Added Successfully");
 //        },
        
        
 //        error: function() {
 //          alert("There was an error. Try again please!");
 //        }
 //    });
});
});
</script>
