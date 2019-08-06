<?php
include 'db_connect.php';
$intse2='';
if(isset($_POST['internalselect2'])){
    $intse2=$_POST['internalselect2'];
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

$de='';
if(isset($_POST['de'])){
    $de=$_POST['de'];
}

$web='';
if(isset($_POST['web'])){
    $web=$_POST['web'];
}

$mul='';
if(isset($_POST['mul'])){
    $mul=$_POST['mul'];
}

switch($intse2)
{
    case 'int1' :
    $query="INSERT INTO `sem2internal1`(`Reg_no`, `month`, `Engg_maths2`, `English`, `Dcf`, `De_lab`, `Basic_web_design_lab`, `Multimedia_lab`) VALUES ('$regno','$month','$m2','$eng','$dcf','$de','$web','$mul')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s2i1n.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'int2' :
    $query="INSERT INTO `sem2internal2`(`Reg_no`, `month`, `Engg_maths2`, `English`, `Dcf`, `De_lab`, `Basic_web_design_lab`, `Multimedia_lab`) VALUES ('$regno','$month','$m2','$eng','$dcf','$de','$web','$mul')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s2i1n.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'int3' :
    $query="INSERT INTO `sem2internal3`(`Reg_no`, `month`, `Engg_maths2`, `English`, `Dcf`, `De_lab`, `Basic_web_design_lab`, `Multimedia_lab`) VALUES ('$regno','$month','$m2','$eng','$dcf','$de','$web','$mul')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s2i1n.html'>Let's Go Back</a>";
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
