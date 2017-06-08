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
   

</head>
<body>";

Echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js'></script>
<script type='text/javascript' src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>";

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
 <div id='thankyoumessage1' class='card thankyoumessage' style='display:none;'>
 Thank you for filling this info. Please provide a little more information about your academic interest.
 </div>

  <div class='card'>
    
 	<form id='form1'>
  <div class='row'>

 
  <div class='input-field col s12'>
  <i class='material-icons prefix'>account_circle</i>
  <input type='text' id='firstName' name='firstName' style='text-transform:capitalize' required>
  <label for='firstName'>First Name: </label> 
  </div>
  </div>
  <div class='row'>
  <div class='input-field col s12'>
  <i class='material-icons prefix'>account_circle</i>
  <input type='text' id='lastName' name='lastName' style='text-transform:capitalize' >
  <label for='lastName'>Last Name: </label>
  </div>
  </div>
  <div class='row'>
  <div class='input-field col s12'>
  <i class='material-icons prefix'>email</i>
  <input type='email' name='email' id='email' required>
  <label for='email'>Email Id:</label>
  </div>
  </div>
  <div class='row'>
  <div class='input-field col s12'>
  <i class='material-icons prefix'>work</i>
  <input type='text' name='experience' id='experience' required>
  <label for='experience'>Work Experience:</label>
  <br>
 </div>
  </div>

  <input type='hidden' name= 'age'>
  <input type='hidden' name= 'sex'>
  <div class='row'>
  <div class='input-field col s12'>
  <i class='material-icons prefix'>location_on</i>
  <input type='text' id='country' name='country' style='text-transform:capitalize' required>
  <label for='country'>Country:</label>
  </div>
  </div>
  <input type='hidden' name= 'language' style='text-transform:capitalize'>
  <div id='sendform'>
   <button class='btn waves-effect waves-light' type='submit' name='action'>Submit
    <i class='material-icons right'>send</i>
  </button>
  </div>
        

</form> 
</div>

<div class='container'>
  <div class='row'>
<div class='col-md-6'>
<div class='card'>


<form id='form2' >
<!-- <fieldset disabled /> -->
<p>Click the submit button to show available results.</p>
  CGPA:<br>
  <input type='text' name='CGPA' >
  <br>
  Percentage:<br>
  <input type='text' name='Percentage' placeholder='Use your uni multiplier'><br>
  Field of Study:<br>
  <div class='row'>
  <div class='input-field col s12 m6'>
  <div class='select-wrapper'>
  <span class='caret'>▼</span>
  <input type='text' class='select-dropdown' readonly='true' data-activates='select-options-274a5784-d394-4f54-11f2-76cd75963661' value='Choose your option'>

  <ul id='select-options-274a5784-d394-4f54-11f2-76cd75963661' class='dropdown-content select-dropdown' style='width: 358px; position: absolute; top: 0px; left: 0px; opacity: 1; display: none;'>
  <li class='disabled'><span>Choose your option</span></li><li class=''><span>Option 1</span></li><li class=''><span>Option 2</span></li><li class=''><span>Option 3</span></li></ul>
  <select class='initialized'>
                  <option value='' disabled='' selected=''>Choose your option</option>
                  <option value='1'>Option 1</option>
                  <option value='2'>Option 2</option>
                  <option value='3'>Option 3</option>
                </select>
  </div>
  </div>
  </div>
  </div>

 
 
  <br>
  <button class='btn waves-effect waves-light' type='submit' name='action' id='submit2'>Submit
  </button>
  
</form>

</div>
</div>

<div class='col-md-6'>
<div class='card'>
<label>Requirements </label><br>
	<textarea rows='10' cols='50' readonly>
The application requirements for the universities you are eligible for will show up here.
</textarea>
</div>
</div>

 </section>
 </div>
  </div>
 
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
  $('#sendform').html('<div class="preloader-wrapper small active">    <div class="spinner-layer spinner-green-only">      <div class="circle-clipper left">        <div class="circle"></div>      </div><div class="gap-patch">        <div class="circle"></div>      </div><div class="circle-clipper right">        <div class="circle"></div>      </div>    </div>  </div>');
var userinfo= $( this ).serializeArray() ;
  
 $.ajax({
        url: "userinfo.php",
        type: "POST",
        data: userinfo,
       
      success: function() {
        $('#form1').delay(2000).fadeOut();
        $('#thankyoumessage1').delay(1999).show();
        $('#form2').delay(5000).show();
        },
        
        
        error: function() {
          alert("There was an error. Try again please!");
        }
    });
});
});
</script>
