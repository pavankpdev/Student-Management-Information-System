<?php
include 'db_connect.php';
$intse5='';
if(isset($_POST['monthselect'])){
    $intse5=$_POST['monthselect'];
}
$regno='';
if(isset($_POST['regno'])){
    $regno=$_POST['regno'];
}
$month='';
if(isset($_POST['monthint'])){
    $month=$_POST['monthint'];
}

$se='';
if(isset($_POST['se'])){
    $se=$_POST['se'];
}

$web='';
if(isset($_POST['web'])){
    $web=$_POST['web'];
}

$ada='';
if(isset($_POST['ada'])){
    $ada=$_POST['ada'];
}
$gc='';
if(isset($_POST['gc'])){
    $gc=$_POST['gc'];
}


$weblab='';
if(isset($_POST['web_lab'])){
    $weblab=$_POST['web_lab'];
}

$adalab='';
if(isset($_POST['ada_lab'])){
    $adalab=$_POST['ada_lab'];
}

$pplab='';
if(isset($_POST['pp_lab'])){
    $pplab=$_POST['pp_lab'];
}

switch($intse5)
{
    case 'month1' :
    $query="INSERT INTO `sem5attdm1`(`reg_no`, `web_prog`, `software_engg`, `daa`,`green_computing`, `web_lab`, `daa_lab`, `pp_lab`, `Month_of_admin`) VALUES ('$regno','$web','$se','$ada','$gc','$weblab','$adalab','$pplab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month2' :
    $query="INSERT INTO `sem5attdm2`(`reg_no`, `web_prog`, `software_engg`, `daa`,`green_computing`, `web_lab`, `daa_lab`, `pp_lab`, `Month_of_admin`) VALUES ('$regno','$web','$se','$ada','$gc','$weblab','$adalab','$pplab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month3' :
    $query="INSERT INTO `sem5attdm3`(`reg_no`, `web_prog`, `software_engg`, `daa`,`green_computing`, `web_lab`, `daa_lab`, `pp_lab`, `Month_of_admin`) VALUES ('$regno','$web','$se','$ada','$gc','$weblab','$adalab','$pplab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month4' :
    $query="INSERT INTO `sem5attdm4`(`reg_no`, `web_prog`, `software_engg`, `daa`,`green_computing`, `web_lab`, `daa_lab`, `pp_lab`, `Month_of_admin`) VALUES ('$regno','$web','$se','$ada','$gc','$weblab','$adalab','$pplab','$month')";
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
