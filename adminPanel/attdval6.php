<?php
include 'db_connect.php';
$intse6='';
if(isset($_POST['monthselect'])){
    $intse6=$_POST['monthselect'];
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

$nsm='';
if(isset($_POST['nsm'])){
    $nsm=$_POST['nsm'];
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
    case 'month1' :
    $query="INSERT INTO `sem6attdm1`(`regno`, `st`, `nsm`, `cc`, `st_lab`, `nsm_lab`, `month`) VALUES ('$regno','$st','$nsm','$cc','$stlab','$nslab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month2' :
    $query="INSERT INTO `sem6attdm2`(`regno`, `st`, `nsm`, `cc`, `st_lab`, `nsm_lab`, `month`) VALUES ('$regno','$st','$nsm','$cc','$stlab','$nslab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month3' :
    $query="INSERT INTO `sem6attdm3`(`regno`, `st`, `nsm`, `cc`, `st_lab`, `nsm_lab`, `month`) VALUES ('$regno','$st','$nsm','$cc','$stlab','$nslab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
    break;
    case 'month4' :
    $query="INSERT INTO `sem6attdm4`(`regno`, `st`, `nsm`, `cc`, `st_lab`, `nsm_lab`, `month`) VALUES ('$regno','$st','$nsm','$cc','$stlab','$nslab','$month')";
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
