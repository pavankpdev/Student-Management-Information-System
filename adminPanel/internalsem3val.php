<?php
include 'db_connect.php';
$intse3='';
if(isset($_POST['internalselect'])){
    $intse3=$_POST['internalselect'];
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

switch($intse3)
{
    case 'int1' :
    $query="INSERT INTO `sem3internal1`(`Reg_no`, `month`, `programming_with_c`, `Computer_organisation`, `Dbms`, `Computer_networks`, `C_lab`, `Dbms_lab`,`Networking_administration_lab`) VALUES ('$regno','$month','$c','$co','$dbms','$cn','$clab','$dbmslab','$netlab')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s3i1n.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'int2' :
    $query="INSERT INTO `sem3internal2`(`Reg_no`, `month`, `programming_with_c`, `Computer_organisation`, `Dbms`, `Computer_networks`, `C_lab`, `Dbms_lab`,`Networking_administration_lab`) VALUES ('$regno','$month','$c','$co','$dbms','$cn','$clab','$dbmslab','$netlab')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s3i1n.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'int3' :
    $query="INSERT INTO `sem3internal3`(`Reg_no`, `month`, `programming_with_c`, `Computer_organisation`, `Dbms`, `Computer_networks`, `C_lab`, `Dbms_lab`,`Networking_administration_lab`) VALUES ('$regno','$month','$c','$co','$dbms','$cn','$clab','$dbmslab','$netlab')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s3i1n.html'>Let's Go Back</a>";
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
