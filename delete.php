<?php include 'settings.php';

if ($_POST['post_id']){
  $id = $_POST['post_id'];
  $sql = "DELETE FROM student WHERE id = $id";
if(mysqli_query($conn, $sql)){
  Echo "<h1 class='display-1' style='text-align: center; color: #F50057; font-size:50px !important;'>Record Deleted Successfully</h1>";
    
     header( "refresh:2;url=admin.php" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
?>
