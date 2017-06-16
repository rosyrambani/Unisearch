<?php 
include 'settings.php';
$grade = mysqli_real_escape_string($conn, $_REQUEST['grade']);
$percentage = mysqli_real_escape_string($conn, $_REQUEST['percentage']);
$university = mysqli_real_escape_string($conn, $_REQUEST['university']);
$study = mysqli_real_escape_string($conn, $_REQUEST['study']);



$sql2 = "INSERT INTO selectuni (grade, percentage, university, study) VALUES ('$grade', '$percentage', '$university', '$study')";
if(mysqli_query($conn, $sql2)){

} 
else{
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