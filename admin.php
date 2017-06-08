<?php
include 'settings.php';
$sql= "SELECT * FROM student ORDER BY firstname";
$result = mysqli_query($conn, $sql);

Echo "<table id='admintable'>
<tr style='color: indianred;'><td>Id</td><td>First Name</td><td>Last Name</td><td>Email</td><td>Experience</td><td>Country</td><td>Action</td></tr>";
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
Echo "<tr><td>".$row['id']."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td><td>".$row['experience']."</td><td>".$row['country']."</td><td><button name='delete' class='delete' value='".$row['id']."'>Delete</button></td></tr>";
}
}
else {
  echo "0 results";
}
Echo "</table>";
?>

<script>
$(document).ready(function(){
$('.delete').click(function(){
	
var invoker= $(this).attr('value') ;
var line = $(this).parent().parent();
 $.ajax({
        url: 'delete.php',
        type: 'POST',
        data:'post_id=' + invoker,
    	success: function() {
    		line.fadeOut('slow');
        },
        error: function() {
          alert("There was an error. Try again please!");
        }
    });
});
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
    $('select').material_select();
  });
    
</script>

       

<style type="text/css">
    #admintable{
        width: 50%;
    }
    #admintable td{
        border: 1px solid grey;
        padding: 15px;
    }
</style>
