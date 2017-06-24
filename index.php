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


  $sql2 = "CREATE TABLE selectuni (
  id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  grade DECIMAL(3,2) NOT NULL,
  percentage VARCHAR(30) NOT NULL,
  university VARCHAR(30) NOT NULL,
  study VARCHAR(30) NOT NULL
  )";

  mysqli_query($conn, $sql);
  mysqli_query($conn, $sql2);

  
  Echo '<!DOCTYPE html>
<html>
  <head>
    <title>Check your eligibility for canadian universities</title>
  </head>
  <body> <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> <nav>
  <div class="nav-wrapper">
    <a href="#" class="brand-logo">&nbsp;&nbsp;UniSearch</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="">Blog</a></li>
      <li><a href="">Store</a></li>
      <li><a href="">About</a></li>
    </ul>
  </div>
</nav>

 
  
    <div id="thankyoumessage1" class="card center-block" style="display:none;">
      Thank you for filling this info. Please provide a little more information about your academic interest.
    </div>
    

 
  

    <!--Sign Up form -->
    <div class="container">
      <div class="row">
        
        <div class="card center-block" style="margin-top:50px;">
          
          <form id="form1">
            <h5>Sign Up Form</h5>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" id="firstName" name="firstName" style="text-transform:capitalize" required>
                <label for="firstName">First Name: </label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" id="lastName" name="lastName" style="text-transform:capitalize" >
                <label for="lastName">Last Name: </label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email" required>
                <label for="email">Email Id:</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">work</i>
                <input type="text" name="experience" id="experience" required>
                <label for="experience">Work Experience:</label>
                
              </div>
            </div>
            <input type="hidden" name= "age">
            <input type="hidden" name= "sex">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">location_on</i>
                <input type="text" id="country" name="country" style="text-transform:capitalize" required>
                <label for="country">Country:</label>
              </div>
            </div>
            <input type="hidden" name= "language" style="text-transform:capitalize">
            <div class="sendform" id="sendform1">
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
              </button>
            </div>
          </form>
        </div>
      </div>
      
      <!--University Selector Form -->
      
      
      <div class="row">
        <div class="col-md-6">
          <div class="card center-block" style="display:none;" >
            <form id="form2" >
              <fieldset id="myFieldsetForm2" >
                <h5>Click submit to show available results.</h5>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">grade</i>
                    <input type="text" id="grade" name="grade" required>
                    <label for="grade">CGPA:</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">assessment</i>
                    <input type="text" id="percentage" name="percentage" required>
                    <label for="percentage">Percentage:</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">textsms</i>
                        <input type="text" id="university" name="university" class="autocomplete" required>
                        <label for="university">Enter the university of your choice</label>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">school</i>
                    <select id="study" name="study" required>
                      <option value="" disabled="" selected="">Select your field of study</option>
                      <option value="M.Eng">M.Eng</option>
                      <option value="MAC">MAC</option>
                      <option value="M.Sc">M.Sc</option>
                    </select>
                    <label for="study">Field of Study</label>
                  </div>
                  
                </div>
                
                <div class="sendform" id="sendform2">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
                  </button>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
          <!--Recommendations -->
          
          <div class="col-md-6" id="recommend" style="display:none;">
            <div class="card center-block"  style="margin-top:50px;">
              <label> Recommendations </label><br>
              <p id="recommendations">
              List of recommended universities according to your credentials:
              <br> 
              <br>
              <br>

              Disclaimer: We do not have tie-ups with these universities.
              The suggestions are purly based on student experience.
              </p>
            </div>
          </div>
        </div>
    </div>

         
        
    
    <!--Courses Available -->
    
    <section>
      <div class="card" id="coursedetails" style="display:none;">
        <label>Details of Courses available</label><br>
        <textarea rows="15" cols="100" readonly>
        </textarea>
      </div>
    </section>
    <!--Connect to People -->
    <section>
      <div class="card" id="connect" style="display:none;">
        <label>Connect to people</label><br>
        <textarea rows="15" cols="100" readonly>
        </textarea>
      </div>
    </section>
    <!--Queries -->
    <section>
      <div class="card center-block" id="query">
        <label for="query">Any queries, feel free to ask </label>
        <textarea name="query" id="query" class="materialize-textarea"></textarea>
        
        <div class="sendform" id="sendform3">
          <button class="btn waves-effect waves-light" type="submit" name="action" id="submit3">Send
          <i class="material-icons right">send</i>
          </button>
        </div>
        
      </div>
    </section>

      

    <!-- Footer Section -->
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Canadian Universities Search Engine</h5>
            <p class="grey-text text-lighten-4">Content</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">About</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Work</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Services</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2017 Copyright
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>
  </body>
</html>';
      ?>

      <script>
        $(document).ready(function()
        {
          $("#myFieldsetForm2").prop( "disabled", true );
          
          $("select").material_select();
          $('.caret').html("");
          $("#form1").submit(function(e)
          {
            e.preventDefault();
            $("#sendform1").html('<div class="preloader-wrapper small active">    <div class="spinner-layer spinner-green-only">      <div class="circle-clipper left">        <div class="circle"></div>      </div><div class="gap-patch">        <div class="circle"></div>      </div><div class="circle-clipper right">        <div class="circle"></div>      </div>    </div>  </div>');
            var userinfo= $( this ).serializeArray();
          
              $.ajax(
                {
                  url: "userinfo.php",
                  type: "POST",
                  data: userinfo,
                 
                  success: function() 
                  {
                    $("#form1").delay(2000).parent().fadeOut();
                    $("#thankyoumessage1").delay(1999).show();

                    $("#form2").delay(2000).parent().show();
                    $("#myFieldsetForm2").prop( "disabled", false );
                    
                    $("select").material_select();
                    $('.caret').html("");
                  },
                  error: function() 
                  {
                    alert("There was an error. Try again please!");
                  }
                });
             });
               

             $("#university").autocomplete({
              data: {
                "Acadia University": null,
                "Brock University": null,
                "Cape Breton University": null,
                "Capilano University": null,
                "Carleton University": null,
                "Concordia University of Edmonton": null,
                "Dalhousie University": null,
                "Fairleigh Dickinson University": null,
                "Fairleigh Dickinson University": null,
                "Kwantlen Polytechnic University": null,
                "MacEwan University": null,
                "Mcmaster University": null,
                "Memorial University of Newfoundland": null,
                "Mount Allison University": null,
                "Royal Roads University": null,
                "Saskatchewan Polytechnic": null,
                "University of Winnipeg": null,
                "Thompson Rivers University": null,
                "Trent University": null,
                "University of New Brunswick": null,
                "University Canada West": null,
                "University of Lethbridge": null,
                "University of Manitoba": null,
                "University of Ontario Institute of Technology": null,
                "University of Prince Edward Island": null,
                "University of Regina": null,
                "University of Saskatchewan": null,
                "University of the Fraser Valley": null,
                "University of Victoria": null,
                "University of Waterloo": null,
                "University of Windsor": null,

              },
              limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
              onAutocomplete: function(val) {
                // Callback function when value is autcompleted.
                
              },
              minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
            });


        $("#form2").submit(function(e)
          {
            e.preventDefault();
            $("#sendform2").html('<div class="preloader-wrapper small active">    <div class="spinner-layer spinner-green-only">      <div class="circle-clipper left">        <div class="circle"></div>      </div><div class="gap-patch">        <div class="circle"></div>      </div><div class="circle-clipper right">        <div class="circle"></div>      </div>    </div>  </div>');
            var fieldofstudy= $( this ).serializeArray();
          
              $.ajax(
                {
                  url: "fieldofstudy.php",
                  type: "POST",
                  data: fieldofstudy,
                 
                  success: function() 
                  {
                    $("#form2").delay(2000).parent().fadeOut();
                    
                    $("#recommend").delay(2000).show();

                    
                    $("select").material_select();
                    
                   
                  },
                  error: function() 
                  {
                    alert("There was an error. Try again please!");
                  }
                });
          });


        });
      </script>

      

