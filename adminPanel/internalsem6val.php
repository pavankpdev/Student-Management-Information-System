<?php
include 'db_connect.php';
$intse6='';
if(isset($_POST['internalselect'])){
    $intse6=$_POST['internalselect'];
}
$regno='';
if(isset($_POST['regno'])){
    $regno=$_POST['regno'];
}
$month='';
if(isset($_POST['monthint'])){
    $month=$_POST['monthint'];
}

$st='';
if(isset($_POST['st'])){
    $st=$_POST['st'];
}

$ns='';
if(isset($_POST['ns'])){
    $ns=$_POST['ns'];
}

$cc='';
if(isset($_POST['cc'])){
    $cc=$_POST['cc'];
}

$stlab='';
if(isset($_POST['st_lab'])){
    $stlab=$_POST['st_lab'];
}

$nslab='';
if(isset($_POST['ns_lab'])){
    $nslab=$_POST['ns_lab'];
}



switch($intse6)
{
    case 'int1' :
    $query="INSERT INTO `sem6internal1`(`regno`, `month`, `CC`, `NSM`, `ST`, `NSM_lab`, `ST_lab`) VALUES ('$regno','$month','$cc','$ns','$st','$nslab','$stlab')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s6i1n.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'int2' :
    $query="INSERT INTO `sem6internal1`(`regno`, `month`, `CC`, `NSM`, `ST`, `NSM_lab`, `ST_lab`) VALUES ('$regno','$month','$cc','$ns','$st','$nslab','$stlab')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s6i1n.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'int3' :
    $query="INSERT INTO `sem6internal1`(`regno`, `month`, `CC`, `NSM`, `ST`, `NSM_lab`, `ST_lab`) VALUES ('$regno','$month','$cc','$ns','$st','$nslab','$stlab')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/s6i1n.html'>Let's Go Back</a>";
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
