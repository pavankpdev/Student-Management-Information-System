<?php
include 'db_connect.php';

$id='';
if(isset($_POST['eid'])){
    $id=$_POST['eid'];
}
$title='';
if(isset($_POST['title'])){
    $title=$_POST['title'];
}
$sd='';
if(isset($_POST['sd'])){
    $sd=$_POST['sd'];
}
$ed='';
if(isset($_POST['ed'])){
    $ed=$_POST['ed'];
}
$des='';
if(isset($_POST['des'])){
    $des=$_POST['des'];
}

$query="INSERT INTO `event_master`(`event_name`, `start_date`, `end_date`, `dis`, `event_id`) VALUES('$title','$sd','$ed','$des','$id');";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/event.php'><br>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
?>
