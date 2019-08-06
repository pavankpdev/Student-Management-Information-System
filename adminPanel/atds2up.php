<?php
include 'db_connect.php';
$intsel='';
if(isset($_POST['umonthselect'])){
    $intsel=$_POST['umonthselect'];
}
$opsel='';
if(isset($_POST['op'])){
    $opsel=$_POST['op'];
}
$regno='';
if(isset($_POST['uregno'])){
    $regno=$_POST['uregno'];
}
$month='';
if(isset($_POST['umonthint'])){
    $month=$_POST['umonthint'];
}

$m2='';
if(isset($_POST['um1'])){
    $m2=$_POST['um1'];
}

$eng='';
if(isset($_POST['usci'])){
    $eng=$_POST['usci'];
}

$dcf='';
if(isset($_POST['uceee'])){
    $dcf=$_POST['uceee'];
}

$delab='';
if(isset($_POST['usci_lab'])){
    $delab=$_POST['usci_lab'];
}

$bwlab='';
if(isset($_POST['ube_lab'])){
    $bwlab=$_POST['ube_lab'];
}

$mm='';
if(isset($_POST['ubcs_lab'])){
    $mm=$_POST['ubcs_lab'];
}

switch($opsel)
{
    case 'up' :
    {
        switch($intsel)
        {
            case 'umonth1':
            {
                $query="UPDATE `sem2attdm1` SET `maths_2`='$m2',`english`='$eng',`dcf`='$dcf',`de_lab`='$delab',`basic_web_lab`='$bwlab',`multimedia_lab`='$mm',`Month_of_admin`='$month' WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem2.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth2':
            {
                $query="UPDATE `sem2attdm2` SET `maths_2`='$m2',`english`='$eng',`dcf`='$dcf',`de_lab`='$delab',`basic_web_lab`='$bwlab',`multimedia_lab`='$mm',`Month_of_admin`='$month' WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem2.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth3':
            {
                $query="UPDATE `sem2attdm3` SET `maths_2`='$m2',`english`='$eng',`dcf`='$dcf',`de_lab`='$delab',`basic_web_lab`='$bwlab',`multimedia_lab`='$mm',`Month_of_admin`='$month' WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem2.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth4':
            {
                $query="UPDATE `sem2attdm4` SET `maths_2`='$m2',`english`='$eng',`dcf`='$dcf',`de_lab`='$delab',`basic_web_lab`='$bwlab',`multimedia_lab`='$mm',`Month_of_admin`='$month' WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem2.php'>Let's Go Back</a>";
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
                $query="DELETE FROM `sem2attdm1` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "Record Deleted successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem2.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth2':
            {
                $query="DELETE FROM `sem2attdm2` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem2.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth3':
            {
                $query="DELETE FROM `sem2attdm3` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem2.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth4':
            {
                $query="DELETE FROM `sem2attdm4` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem2.php'>Let's Go Back</a>";
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
