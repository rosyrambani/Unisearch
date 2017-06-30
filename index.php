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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> 
 

 <nav>
  <div class="nav-wrapper" id="header">
    <a href="#" class="brand-logo">&nbsp;&nbsp;Engineering Mentor</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      
      <div class="input-field" id="divsearch">
          <input id="search" type="search">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      
    </ul>
  </div>
</nav>





<div class="row">
  <div class="center-block" >
    <div class="card-panel" id="panel1">
      <span>Student assistance for education options in Canada to match your skills.
      </span>
    </div>
  </div>
</div>



<!--Sign Up form -->
<div class="container">

 <div class="row">
  <div class="col-md-4">


    
      <div class="card left-align">
        <span>Engineering Mentor is a website for guidance and resolution to all your queries about studying engineering in Canada. Our team is comprised of people who came to Canada as students and have now established themselves as successful engineers. Who can be a better mentor for you than a person who has passed that struggling phase with dedication and hard work?  We aim at assisting students to study in the best universities in Canada, and create great career opportunities for them.
        </span>
      </div>
    
    
  </div>
  
  
  <div class="col-md-4">
    <div class="card" style="margin-top:50px;">
      
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
  
  
  
  <!--University Selector Form -->
  
  
  
  
    <div class="card" style="display:none;">
      <form id="form2" >
      <h5>Thank you for filling this info. Please provide a little more information about your academic interest.</h5>
        <fieldset id="myFieldsetForm2" >
        
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
              <label for="study"></label>
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

    
    <div class="card" id="recommend" style="display:none;">
      <label>Top Recommendations </label><br>
      <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header">University of Windsor</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header">University of Carleton</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header">University of Ottawa</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>
    </div>
  
  </div>


    <div class="col-md-4" id="details2">
      <div class="card">
        <span>News Feed 
        </span>
      </div>
    </div>
  
  
  
</div>
</div>




<div class="container">

  <p class="center-block">Top Universities in Canada. Click Apply Now for admission details</p> 
  <div class="row">
  <div class="col-md-4">           
  <table class="table table-striped table-responsive table-bordered">
    <thead>
      <tr>
        <th>Ontario</th>
        <th>Apply</th>

      </tr>
    </thead>
    <tbody>
      
      <tr>
        <td>Brock University</td>
        <td><a href="https://brocku.ca/admissions/international/" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      
     
      <tr>
        <td>Carleton University</td>
        <td><a href="https://graduate.carleton.ca/international/admission-requirements/" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      
      <tr>
        <td>Mcmaster University</td>
        <td><a href="http://future.mcmaster.ca/admission/" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
     <tr>
        <td>University of Windsor</td>
        <td><a href="http://www.uwindsor.ca/intl/" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      
      <tr>
        <td>Trent University</td>
        <td><a href="https://www.trentu.ca/futurestudents/graduate-students" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
       </tr>

      <tr>
        <td>University of Ontario Institute of Tech</td>
        <td><a href="http://admissions.uoit.ca/applicant-information/international-applicants.php" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>University of Waterloo</td>
        <td><a href="https://uwaterloo.ca/discover-graduate-studies/admission-requirements" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>Queens University</td>
        <td><a href="http://www.queensu.ca/apply/international" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>University of Toronto</td>
        <td><a href="https://www.sgs.utoronto.ca/international/Pages/Check-Minimum-Requirements.aspx"_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>University of Western Ontario</td>
        <td><a href="http://www.grad.uwo.ca/prospective_students/international/index.html"_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>York University</td>
        <td><a href="http://gradstudies.yorku.ca/prospective-students/international-students/"_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>Ryerson University</td>
        <td><a href="http://www.ryerson.ca/graduate/admissions/apply/international-applicants/"_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>University of Guelph</td>
        <td><a href="https://www.uoguelph.ca/graduatestudies/future/international"_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>University of Ottawa</td>
        <td><a href="https://www.uottawa.ca/graduate-studies/international/study-uottawa/admission-equivalencies"_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>Wilfrid Laurier University</td>
        <td><a href="https://www.wlu.ca/admissions-toolkits/graduate-admissions-toolkit/index.html"_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>Lakehead University</td>
        <td><a href="https://www.lakeheadu.ca/academics/graduate/applying/masters"_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      
      
      

      
    </tbody>
  </table>
  <table class="table table-striped table-responsive table-bordered">
    <thead>
      <tr>
        <th>Prince Edward Island</th>
        <th>Apply</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>University of Prince Edward Island</td>
        <td><a href="http://www.upei.ca/programsandcourses/graduate-admissions" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>

     </tbody>
      </table>

  </div>

<div class="col-md-4">           
  
  <table class="table table-striped table-responsive table-bordered">
    <thead>
      <tr>
        <th>British Columbia</th>
        <th>Apply</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>University of British Columbia</td>
        <td><a href="https://www.grad.ubc.ca/prospective-students/application-admission/minimum-academic-requirements-international-credentials" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>Kwantlen Polytechnic University</td>
        <td><a href="http://www.kpu.ca/international/future-students" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>Fairleigh Dickinson University</td>
        <td><a href="http://view2.fdu.edu/vancouver-campus/admissions/undergraduate-admissions/how-to-apply-international-students/" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
     <tr>
        <td>Royal Roads University</td>
        <td><a href="http://international.royalroads.ca/" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>University Canada West</td>
        <td><a href="http://www.uwo.ca/international/students/index.html" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
       </tr>
       <tr>
        <td>Capilano University</td>
        <td><a href="https://www.capilanou.ca/international/" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>University of the Fraser Valley</td>
        <td><a href="http://international.ufv.ca/study-in-canada/admission-requirements/" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>University of Victoria</td>
        <td><a href="http://www.uvic.ca/future-students/international/index.php" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>Simon Fraser University</td>
        <td><a href="http://www.sfu.ca/content/sfu/main/programs/for-international-students.html" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>University of Northern British Columbia</td>
        <td><a href="http://www.unbc.ca/international-studies-graduate-program" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
       </tr>
       <tr>
        <td>Thompson Rivers University</td>
        <td><a href="http://www.tru.ca/campus/admissions/international/application-instructions-graduate-masters-programs.html" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>

    </tbody>
  </table>
  
  <table class="table table-striped table-responsive table-bordered">
    <thead>
      <tr>
        <th>Qubec</th>
        <th>Apply</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>McGill University</td>
        <td><a href="http://www.mcgill.ca/gradapplicants/apply/prepare/requirements" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
       
      </tr>
      <tr>
        <td>Concordia University</td>
        <td><a href="https://www.concordia.ca/admissions/graduate/international.html" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
       
      </tr>

     </tbody>
      </table>

      <table class="table table-striped table-responsive table-bordered">
    <thead>
      <tr>
        <th>Nova Scotia</th>
        <th>Apply</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Dalhousie University</td>
        <td><a href="https://www.dal.ca/admissions/international_students/admissions.html" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>Acadia University</td>
        <td><a href="http://www2.acadiau.ca/international.html" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
       
      </tr>
      <tr>
        <td>Cape Breton University</td>
        <td><a href="https://www.cbu.ca/come-to-cbu/admissions/admission-requirements/international-admissions/" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
       

     </tbody>
      </table>




  </div>
<div class="col-md-4"> 
<table class="table table-striped table-responsive table-bordered">
    <thead>
      <tr>
        <th>Alberta</th>
        <th>Apply</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>MacEwan University</td>
        <td><a href="http://www.macewan.ca/wcm/International/MacEwanInternational/index.htm" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
     
      <tr>
        <td>Concordia University of Edmonton</td>
        <td><a href="http://concordia.ab.ca/international/international-students/admissions/" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>University of Lethbridge</td>
        <td><a href="http://www.uleth.ca/graduate-studies/" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
       </tr>

       <tr>
        <td>University of Alberta</td>
        <td><a href="https://www.ualberta.ca/graduate-studies/prospective-students/international-admissions-protocol" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
       </tr>
        <tr>
        <td>University of Calgary</td>
        <td><a href="https://www.ucalgary.ca/future-students/graduate/international" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
       </tr>
       
      
      
      
    </tbody>
  </table>          
  <table class="table table-striped table-responsive table-bordered">
    <thead>
      <tr>
        <th>Saskatchewan</th>
        <th>Apply</th>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        <td>Saskatchewan Polytechnic</td>
        <td><a href="http://saskpolytech.ca/programs-and-courses/international/programs.aspx" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>University of Regina</td>
        <td><a href="https://www.uregina.ca/gradstudies/future-students/international-students/index.html" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
      <tr>
        <td>University of Saskatchewan</td>
        <td><a href="http://explore.usask.ca/international.php" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>
       </tbody>
        </table>
      <table class="table table-striped table-responsive table-bordered">
    <thead>
      <tr>
        <th>Manitoba</th>
        <th>Apply</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>University of Winnipeg</td>
        <td><a href="http://www.uwinnipeg.ca/future-student/intl-students.html" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
       </tr>
       
       
       
       <tr>
        <td>University of Manitoba</td>
        <td><a href="http://umanitoba.ca/graduate_studies/" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
       </tr>
       
      
    </tbody>
  </table>

  <table class="table table-striped table-responsive table-bordered">
    <thead>
      <tr>
        <th>New Brunswick</th>
        <th>Apply</th>
      </tr>
    </thead>
    <tbody>



      <tr>
        <td>University of New Brunswick</td>
        <td><a href="http://www.unb.ca//gradstudies/admissions/international.html" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
       </tr>
       <tr>
        <td>Mount Allison University</td>
        <td><a href="https://www.mta.ca/intl/" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>

      <tr>
        <td>St.Thomas University</td>
        <td><a href="https://www.stthomas.edu/admissions/graduate/collegesschools/schoolofengineering/"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
        
      </tr>

    </tbody>
      </table>
       <table class="table table-striped table-responsive table-bordered">
    <thead>
      <tr>
        <th>Newfoundland</th>
        <th>Apply</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Memorial University of Newfoundland</td>
        <td><a href="http://www.mun.ca/become/graduate/programs/" target="_blank"><button class="btn waves-effect waves-light">Apply Now</button></a></td>
       
      </tr>

     </tbody>
      </table>
      
       
      

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
    <textarea rows="15" cols="100" readonly>2
    </textarea>
  </div>
</section>
<!--Queries -->
<section>
  <div class="card center-block" id="query" style="display:none;">
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
          $('.collapsible').collapsible();
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
                    // $("#thankyoumessage1").delay(1999).show();

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
                "Queens University": null,

              },
              limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
              onAutocomplete: function(val) {
                // Callback function when value is autcompleted.
                
              },
              minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
            });

              $("#search").autocomplete({
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
                "Queens University": null,

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

      

