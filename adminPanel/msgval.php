<?php
include 'db_connect.php';

$type='';
if(isset($_POST['type'])){
    $type=$_POST['type'];
}
$msg='';
if(isset($_POST['msg'])){
    $msg=$_POST['msg'];
}
switch($type)
{
    case 'hod' :
    {
        $query="UPDATE `collegeinfo_master` SET `info`='$msg' WHERE info_type='hod';";
        if (mysqli_query($con, $query)) {
        echo "Success, The Message Would Be Conveyed :)";
        echo "<a href='http://localhost/newtest/adminPanel/msg.php'>Let's Go Back</a>";
        } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
    }
    break;
    case 'principal' :
    {
        $query="UPDATE `collegeinfo_master` SET `info`='$msg' WHERE info_type='principal';";
        if (mysqli_query($con, $query)) {
        echo "Success, The Message Would Be Conveyed :)";
        echo "<a href='http://localhost/newtest/adminPanel/msg.php'>Let's Go Back</a>";
        } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
    }
    break;
    default :
    {
        echo "Something Went Wrong :|";
    }
    break;
}
?>
