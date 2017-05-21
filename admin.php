<?php
include 'settings.php';
$sql= "SELECT * FROM student ORDER BY firstname";
$result = mysqli_query($conn, $sql);

Echo "<table>
<tr style='color: indianred;'><td>Id</td><td>First Name</td><td>Last Name</td><td>Email</td><td>Experience</td><td>Country</td><td>Action</td></tr>";
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
Echo "<tr><td>".$row['id']."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td><td>".$row['experience']."</td><td>".$row['country']."</td><td><button name='delete' id='delete' value='".$row['id']."' onclick='deleteit(this.value)'>Delete</button></td></tr>";
}
}
else {
  echo "0 results";
}
Echo "</table>";
?>

<script>
function deleteit(idofbutton){
	console.log("invoker");
var invoker= idofbutton ;

 $.ajax({
        url: 'delete.php',
        type: 'POST',
        data:'post_id=' + invoker,
    	success: function() {
          location.reload();
        },
        error: function() {
          alert("There was an error. Try again please!");
        }
    });
}
</script>
