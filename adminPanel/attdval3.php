<?php
include 'db_connect.php';
$intse4='';
if(isset($_POST['monthselect'])){
    $intse4=$_POST['monthselect'];
}
$regno='';
if(isset($_POST['regno'])){
    $regno=$_POST['regno'];
}
$month='';
if(isset($_POST['monthint'])){
    $month=$_POST['monthint'];
}

$c='';
if(isset($_POST['c'])){
    $c=$_POST['c'];
}

$co='';
if(isset($_POST['co'])){
    $co=$_POST['co'];
}

$dbms='';
if(isset($_POST['dbms'])){
    $dbms=$_POST['dbms'];
}

$cn='';
if(isset($_POST['cn'])){
    $cn=$_POST['cn'];
}

$clab='';
if(isset($_POST['c_lab'])){
    $clab=$_POST['c_lab'];
}

$dbmslab='';
if(isset($_POST['dbms_lab'])){
    $dbmslab=$_POST['dbms_lab'];
}
$netlab='';
if(isset($_POST['net_lab'])){
    $netlab=$_POST['net_lab'];
}

switch($intse4)
{
    case 'month1' :
    $query="INSERT INTO `sem3attdm1`(`reg_no`, `prog_with_c`, `co`, `dbms`, `cn`, `c_lab`, `dbms_lab`,`network_admin_lab`, `Month_of_admin`) VALUES ('$regno','$c','$co','$dbms','$cn','$clab','$dbmslab','$netlab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month2' :
    $query="INSERT INTO `sem3attdm2`(`reg_no`, `prog_with_c`, `co`, `dbms`, `cn`, `c_lab`, `dbms_lab`,`network_admin_lab`, `Month_of_admin`) VALUES ('$regno','$c','$co','$dbms','$cn','$clab','$dbmslab','$netlab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month3' :
    $query="INSERT INTO `sem3attdm3`(`reg_no`, `prog_with_c`, `co`, `dbms`, `cn`, `c_lab`, `dbms_lab`,`network_admin_lab`, `Month_of_admin`) VALUES ('$regno','$c','$co','$dbms','$cn','$clab','$dbmslab','$netlab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month4' :
    $query="INSERT INTO `sem3attdm4`(`reg_no`, `prog_with_c`, `co`, `dbms`, `cn`, `c_lab`, `dbms_lab`,`network_admin_lab`, `Month_of_admin`) VALUES ('$regno','$c','$co','$dbms','$cn','$clab','$dbmslab','$netlab','$month')";
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
