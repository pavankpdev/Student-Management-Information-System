<?php
include 'db_connect.php';
$intse4='';
if(isset($_POST['internalselect'])){
    $intse4=$_POST['internalselect'];
}
$regno='';
if(isset($_POST['regno'])){
    $regno=$_POST['regno'];
}
$month='';
if(isset($_POST['monthint'])){
    $month=$_POST['monthint'];
}

$ds='';
if(isset($_POST['ds'])){
    $ds=$_POST['ds'];
}

$java='';
if(isset($_POST['java'])){
    $java=$_POST['java'];
}

$os='';
if(isset($_POST['os'])){
    $os=$_POST['os'];
}

$pe='';
if(isset($_POST['pe'])){
    $pe=$_POST['pe'];
}

$dslab='';
if(isset($_POST['ds_lab'])){
    $dslab=$_POST['ds_lab'];
}

$javalab='';
if(isset($_POST['java_lab'])){
    $javalab=$_POST['java_lab'];
}

$linuxlab='';
if(isset($_POST['linux_lab'])){
    $linuxlab=$_POST['linux_lab'];
}

switch($intse4)
{
    case 'int1' :
    $query="INSERT INTO `sem4internal1`(`Reg_no`, `month`, `Datastructure_using_c`, `Oop_with_java`, `Operating_system`, `Pe&ic`,`ds_lab`, `Java_lab`,`Linux_lab`) VALUES ('$regno','$month','$ds','$java','$os','$pe','$dslab','$javalab','$linuxlab')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s4i1n.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'int2' :
    $query="INSERT INTO `sem4internal2`(`Reg_no`, `month`, `Datastructure_using_c`, `Oop_with_java`, `Operating_system`, `Pe&ic`,`ds_lab`, `Java_lab`,`Linux_lab`) VALUES ('$regno','$month','$ds','$java','$os','$pe','$dslab','$javalab','$linuxlab')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s4i1n.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'int3' :
    $query="INSERT INTO `sem4internal3`(`Reg_no`, `month`, `Datastructure_using_c`, `Oop_with_java`, `Operating_system`, `Pe&ic`,`ds_lab`, `Java_lab`,`Linux_lab`) VALUES ('$regno','$month','$ds','$java','$os','$pe','$dslab','$javalab','$linuxlab')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s4i1n.html'>Let's Go Back</a>";
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
