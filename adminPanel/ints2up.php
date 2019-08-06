<?php
include 'db_connect.php';
$intsel='';
if(isset($_POST['umonthselect'])){
    $intsel=$_POST['umonthselect'];
}

$opsel='';
if(isset($_POST['uop'])){
    $opsel=$_POST['uop'];
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
if(isset($_POST['m1'])){
    $m2=$_POST['m1'];
}

$eng='';
if(isset($_POST['sci'])){
    $eng=$_POST['sci'];
}

$dcf='';
if(isset($_POST['ceee'])){
    $dcf=$_POST['ceee'];
}

$delab='';
if(isset($_POST['sci_lab'])){
    $delab=$_POST['sci_lab'];
}

$bwlab='';
if(isset($_POST['be_lab'])){
    $bwlab=$_POST['be_lab'];
}

$mm='';
if(isset($_POST['bcs_lab'])){
    $mm=$_POST['bcs_lab'];
}

switch($opsel)
{
    case 'up' :
    {
        switch($intsel)
        {
            case 'umonth1':
            {
                $query="UPDATE `sem2internal1` SET `month`='$month',`Engg_maths2`='$m2',`English`='$eng',`Dcf`='$dcf',`De_lab`='$delab',`Basic_web_design_lab`='$bwlab',`Multimedia_lab`='$mm'  WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/s1i1n.html'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth2':
            {
                $query="UPDATE `sem2internal2` SET `month`='$month',`Engg_maths2`='$m2',`English`='$eng',`Dcf`='$dcf',`De_lab`='$delab',`Basic_web_design_lab`='$bwlab',`Multimedia_lab`='$mm'  WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/s1i1n.html'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth3':
            {
                $query="UPDATE `sem2internal3` SET `month`='$month',`Engg_maths2`='$m2',`English`='$eng',`Dcf`='$dcf',`De_lab`='$delab',`Basic_web_design_lab`='$bwlab',`Multimedia_lab`='$mm'  WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/s1i1n.html'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            default:
            echo "Something Went Wrong Please Try Again :|";
            break;
        }
    }
    break;
    case 'del' :
    {
        switch($intsel)
        {
            case 'umonth1':
            {
                $query="DELETE FROM `sem2internal1` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "Record Deleted Successfully";
                echo "<a href='http://localhost/newtest/adminPanel/s1i1n.html'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth2':
            {
                $query="DELETE FROM `sem2internal2` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted Successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/s1i1n.html'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth3':
            {
                $query="DELETE FROM `sem2internal3` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted Successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/s1i1n.html'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            default:
            echo "Something Went Wrong Please Try Again :|";
            break;
        }
    }
    break;
    default :
    echo "Something Went Wrong Please Try Again :|";
    break;
}
/*
$query="INSERT INTO `sem1attdm1`(`reg_no`, `maths_1`, `applied_science`, `Ceee`, `Science_lab`, `Be_lab`, `Bcs_lab`, `Month_of_admin`) VALUES ('$regno','$m1','$apsc','$ceee','$belab','$apsclab','$bcslab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
*/
?>
