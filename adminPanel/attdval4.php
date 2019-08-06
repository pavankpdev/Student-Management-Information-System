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
    case 'month1' :
    $query="INSERT INTO `sem4attdm1`(`reg_no`, `Ds`, `oop_with_java`, `os`,`pe&ic`, `ds_lab`, `java_lab`, `linux_lab`, `Month_of_admin`) VALUES ('$regno','$ds','$java','$os','$pe','$dslab','$javalab','$linuxlab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month2' :
    $query="INSERT INTO `sem4attdm2`(`reg_no`, `Ds`, `oop_with_java`, `os`,`pe&ic`, `ds_lab`, `java_lab`, `linux_lab`, `Month_of_admin`) VALUES ('$regno','$ds','$java','$os','$pe','$dslab','$javalab','$linuxlab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month3' :
    $query="INSERT INTO `sem4attdm3`(`reg_no`, `Ds`, `oop_with_java`, `os`,`pe&ic`, `ds_lab`, `java_lab`, `linux_lab`, `Month_of_admin`) VALUES ('$regno','$ds','$java','$os','$pe','$dslab','$javalab','$linuxlab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month4' :
    $query="INSERT INTO `sem4attdm4`(`reg_no`, `Ds`, `oop_with_java`, `os`,`pe&ic`, `ds_lab`, `java_lab`, `linux_lab`, `Month_of_admin`) VALUES ('$regno','$ds','$java','$os','$pe','$dslab','$javalab','$linuxlab','$month')";
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
