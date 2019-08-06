<?php
include 'db_connect.php';
$intse5='';
if(isset($_POST['internalselect'])){
    $intse5=$_POST['internalselect'];
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
    case 'int1' :
    $query="INSERT INTO `sem5internal1`(`Reg_no`, `month`, `Software_engg`, `Web_programming`, `Daa`, `Green_computing`, `Web_lab`, `Daa_lab`, `Professional_practice`) VALUES ('$regno','$month','$se','$web','$ada','$gc','$weblab','$adalab','$pplab')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s5i1n.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'int2' :
    $query="INSERT INTO `sem5internal2`(`Reg_no`, `month`, `Software_engg`, `Web_programming`, `Daa`, `Green_computing`, `Web_lab`, `Daa_lab`, `Professional_practice`) VALUES ('$regno','$month','$se','$web','$ada','$gc','$weblab','$adalab','$pplab')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s5i1n.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'int3' :
    $query="INSERT INTO `sem5internal3`(`Reg_no`, `month`, `Software_engg`, `Web_programming`, `Daa`, `Green_computing`, `Web_lab`, `Daa_lab`, `Professional_practice`) VALUES ('$regno','$month','$se','$web','$ada','$gc','$weblab','$adalab','$pplab')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s5i1n.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    default :
    echo "Something Went Wrong Please Try Again :|";
    break;
}
/*
$query="INSERT INTO 'sem1internal1'('Reg_no', 'month', 'Engg_maths1', 'Science', 'Ceee', 'Be_lab', 'Science_lab', 'Bcs_lab') VALUES ('$regno','$month','$m1','$apsc','$ceee','$belab','$apsclab','$bcslab')";
if (mysqli_query($con, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}
*/
?>
