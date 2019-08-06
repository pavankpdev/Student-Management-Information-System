<?php 
include 'dbconnect.php';

$email='';
if(isset($_POST['mail'])){
    $email=$_POST['mail'];
}
$name='';
if(isset($_POST['name'])){
    $name=$_POST['name'];
}
$id='';
if(isset($_POST['reg'])){
    $id=$_POST['reg'];
}

$mn='';
if(isset($_POST['mother_name'])){
    $mn=$_POST['mother_name'];
}

$mnum='';
if(isset($_POST['mother_number'])){
    $mnum=$_POST['mother_number'];
}

$fnum='';
if(isset($_POST['father_number'])){
    $fnum=$_POST['father_number'];
}

$fn='';
if(isset($_POST['father_name'])){
    $fn=$_POST['father_name'];
}

$yoj='';
if(isset($_POST['year_of_join'])){
    $yoj=$_POST['year_of_join'];
}
$dept='';
if(isset($_POST['department'])){
    $dept=$_POST['department'];
}
$dob='';
if(isset($_POST['date_of_birth'])){
    $dob=$_POST['date_of_birth'];
}
$phno='';
if(isset($_POST['phno'])){
    $phno=$_POST['phno'];
}

$sql="INSERT INTO `student_pro_1`(`id`, `name`, `email`, `Mother_Name`, `Mother_Number`, `Father_Number`, `Father_Name`, `year_of_join`, `department`, `date_of_birth`, `ph_no`) VALUES ('$id','$name','$email','$mn','$mnum','$fnum','$fn','$yoj','$dept','$dob','$phno')";
if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
  echo "You're good to go just <a href='http://localhost/newtest/student/student.php'> click here</a>";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>
