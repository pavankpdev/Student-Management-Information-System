<?php
include 'db_connect.php';
$intsel='';
if(isset($_POST['monthselect'])){
    $intsel=$_POST['monthselect'];
}
$regno='';
if(isset($_POST['regno'])){
    $regno=$_POST['regno'];
}
$month='';
if(isset($_POST['monthint'])){
    $month=$_POST['monthint'];
}

$m2='';
if(isset($_POST['m2'])){
    $m2=$_POST['m2'];
}

$eng='';
if(isset($_POST['eng'])){
    $eng=$_POST['eng'];
}

$dcf='';
if(isset($_POST['dcf'])){
    $dcf=$_POST['dcf'];
}

$delab='';
if(isset($_POST['de'])){
    $delab=$_POST['de'];
}

$weblab='';
if(isset($_POST['web'])){
    $weblab=$_POST['web'];
}
$mmlab='';
if(isset($_POST['mul'])){
    $mmlab=$_POST['mul'];
}

switch($intsel)
{
    case 'month1' :
    $query="INSERT INTO `sem2attdm1`(`reg_no`, `maths_2`, `english`, `dcf`, `de_lab`, `basic_web_lab`, `multimedia_lab`, `Month_of_admin`) VALUES ('$regno','$m2','$eng','$dcf','$delab','$weblab','$mmlab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem2.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month2' :
    $query="INSERT INTO `sem2attdm2`(`reg_no`, `maths_2`, `english`, `dcf`, `de_lab`, `basic_web_lab`, `multimedia_lab`, `Month_of_admin`) VALUES ('$regno','$m2','$eng','$dcf','$delab','$weblab','$mmlab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month3' :
    $query="INSERT INTO `sem2attdm3`(`reg_no`, `maths_2`, `english`, `dcf`, `de_lab`, `basic_web_lab`, `multimedia_lab`, `Month_of_admin`) VALUES ('$regno','$m2','$eng','$dcf','$delab','$weblab','$mmlab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month4' :
    $query="INSERT INTO `sem2attdm4`(`reg_no`, `maths_2`, `english`, `dcf`, `de_lab`, `basic_web_lab`, `multimedia_lab`, `Month_of_admin`) VALUES ('$regno','$m2','$eng','$dcf','$delab','$weblab','$mmlab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    default :
    echo "Something Went Wrong Please Try Again :|";
    break;
}
/*
$query="INSERT INTO `sem1internal1`(`Reg_no`, `month`, `Engg_maths1`, `Science`, `Ceee`, `Be_lab`, `Science_lab`, `Bcs_lab`) VALUES ('$regno','$month','$m1','$apsc','$ceee','$belab','$apsclab','$bcslab')";
if (mysqli_query($con, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}
*/
?>
