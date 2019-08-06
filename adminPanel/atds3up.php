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

$c='';
if(isset($_POST['um1'])){
    $c=$_POST['um1'];
}

$co='';
if(isset($_POST['usci'])){
    $co=$_POST['usci'];
}

$db='';
if(isset($_POST['uceee'])){
    $db=$_POST['uceee'];
}

$cn='';
if(isset($_POST['usci_lab'])){
    $cn=$_POST['usci_lab'];
}

$cl='';
if(isset($_POST['ube_lab'])){
    $cl=$_POST['ube_lab'];
}

$dbl='';
if(isset($_POST['ubcs_lab'])){
    $dbl=$_POST['ubcs_lab'];
}
$na='';
if(isset($_POST['nalab'])){
    $na=$_POST['nalab'];
}
switch($opsel)
{
    case 'up' :
    {
        switch($intsel)
        {
            case 'umonth1':
            {
                $query="UPDATE `sem3attdm1` SET `prog_with_c`='$c',`co`='$co',`dbms`='$db',`cn`='$cn',`c_lab`='$cl',`dbms_lab`='$dbl',`network_admin_lab`='$na',`Month_of_admin`='$month'  WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem3.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth2':
            {
                $query="UPDATE `sem3attdm2` SET `prog_with_c`='$c',`co`='$co',`dbms`='$db',`cn`='$cn',`c_lab`='$cl',`dbms_lab`='$dbl',`network_admin_lab`='$na',`Month_of_admin`='$month'  WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem3.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth3':
            {
                $query="UPDATE `sem3attdm3` SET `prog_with_c`='$c',`co`='$co',`dbms`='$db',`cn`='$cn',`c_lab`='$cl',`dbms_lab`='$dbl',`network_admin_lab`='$na',`Month_of_admin`='$month'  WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem3.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth4':
            {
                $query="UPDATE `sem3attdm4` SET `prog_with_c`='$c',`co`='$co',`dbms`='$db',`cn`='$cn',`c_lab`='$cl',`dbms_lab`='$dbl',`network_admin_lab`='$na',`Month_of_admin`='$month'  WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem3.php'>Let's Go Back</a>";
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
                $query="DELETE FROM `sem3attdm1` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "Record Deleted successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem3.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth2':
            {
                $query="DELETE FROM `sem3attdm2` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem3.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth3':
            {
                $query="DELETE FROM `sem3attdm3` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem3.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth4':
            {
                $query="DELETE FROM `sem3attdm4` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem3.php'>Let's Go Back</a>";
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
