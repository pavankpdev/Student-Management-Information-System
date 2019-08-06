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

$se='';
if(isset($_POST['um1'])){
    $se=$_POST['um1'];
}

$we='';
if(isset($_POST['usci'])){
    $we=$_POST['usci'];
}

$da='';
if(isset($_POST['uceee'])){
    $da=$_POST['uceee'];
}

$gc='';
if(isset($_POST['usci_lab'])){
    $gc=$_POST['usci_lab'];
}

$wel='';
if(isset($_POST['ube_lab'])){
    $wel=$_POST['ube_lab'];
}

$dal='';
if(isset($_POST['ubcs_lab'])){
    $dal=$_POST['ubcs_lab'];
}
$pp='';
if(isset($_POST['nalab'])){
    $pp=$_POST['nalab'];
}
switch($opsel)
{
    case 'up' :
    {
        switch($intsel)
        {
            case 'umonth1':
            {
                $query="UPDATE `sem5attdm1` SET `web_prog`='$we',`software_engg`='$se',`daa`='$da',`green_computing`='$gc',`web_lab`='$wel',`daa_lab`='$dal',`pp_lab`='$pp',`Month_of_admin`='$month'   WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem5.php'>Let's Go Back</a>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth2':
            {
                $query="UPDATE `sem5attdm2` SET `web_prog`='$we',`software_engg`='$se',`daa`='$da',`green_computing`='$gc',`web_lab`='$wel',`daa_lab`='$dal',`pp_lab`='$pp',`Month_of_admin`='$month'   WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem5.php'>Let's Go Back</a>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth3':
            {
                $query="UPDATE `sem5attdm3` SET `web_prog`='$we',`software_engg`='$se',`daa`='$da',`green_computing`='$gc',`web_lab`='$wel',`daa_lab`='$dal',`pp_lab`='$pp',`Month_of_admin`='$month'   WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem5.php'>Let's Go Back</a>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth4':
            {
                $query="UPDATE `sem5attdm4` SET `web_prog`='$we',`software_engg`='$se',`daa`='$da',`green_computing`='$gc',`web_lab`='$wel',`daa_lab`='$dal',`pp_lab`='$pp',`Month_of_admin`='$month'   WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem5.php'>Let's Go Back</a>";
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
                $query="DELETE FROM `sem5attdm1` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "Record Deleted successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem5.php'>Let's Go Back</a>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth2':
            {
                $query="DELETE FROM `sem5attdm2` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem5.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth3':
            {
                $query="DELETE FROM `sem5attdm3` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem5.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth4':
            {
                $query="DELETE FROM `sem5attdm4` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem5.php'>Let's Go Back</a>";
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
