<?php
include 'db_connect.php';
$fname='';
if(isset($_POST['fname'])){
    $fname=$_POST['fname'];
}

$month='';
if(isset($_POST['monthint'])){
    $month=$_POST['monthint'];
}

$reg='';
if(isset($_POST['reg'])){
    $reg=$_POST['reg'];
}

$issue='';
if(isset($_POST['issue'])){
    $issue=$_POST['issue'];
}

$sub='';
if(isset($_POST['sub'])){
    $sub=$_POST['sub'];
}

$des='';
if(isset($_POST['des'])){
    $des=$_POST['des'];
}

$date='';
if(isset($_POST['date'])){
    $date=$_POST['date'];
}
$query="INSERT INTO `tickets`(`name`, `reg`, `type`, `sub`, `des`, `date`) VALUES ('$fname','$reg','$issue','$sub','$des','$date')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/contact.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }

?>
