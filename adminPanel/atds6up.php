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

$st='';
if(isset($_POST['um1'])){
    $st=$_POST['um1'];
}

$nm='';
if(isset($_POST['usci'])){
    $nm=$_POST['usci'];
}

$cc='';
if(isset($_POST['uceee'])){
    $cc=$_POST['uceee'];
}

$stl='';
if(isset($_POST['usci_lab'])){
    $stl=$_POST['usci_lab'];
}

$nl='';
if(isset($_POST['ube_lab'])){
    $nl=$_POST['ube_lab'];
}

switch($opsel)
{
    case 'up' :
    {
        switch($intsel)
        {
            case 'umonth1':
            {
                $query="UPDATE `sem6attdm1` SET `st`='$st',`nsm`='$nm',`cc`='$cc',`st_lab`='$stl',`nsm_lab`='$nl',`month`='$month'    WHERE `regno`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem6.php'>Let's Go Back</a>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth2':
            {
                $query="UPDATE `sem6attdm2` SET `st`='$st',`nsm`='$nm',`cc`='$cc',`st_lab`='$stl',`nsm_lab`='$nl',`month`='$month'    WHERE `regno`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem6.php'>Let's Go Back</a>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth3':
            {
                $query="UPDATE `sem6attdm3` SET `st`='$st',`nsm`='$nm',`cc`='$cc',`st_lab`='$stl',`nsm_lab`='$nl',`month`='$month'    WHERE `regno`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem6.php'>Let's Go Back</a>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth4':
            {
                $query="UPDATE `sem6attdm4` SET `st`='$st',`nsm`='$nm',`cc`='$cc',`st_lab`='$stl',`nsm_lab`='$nl',`month`='$month'    WHERE `regno`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem6.php'>Let's Go Back</a>";
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
                $query="DELETE FROM `sem6attdm1` WHERE `regno`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "Record Deleted successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem6.php'>Let's Go Back</a>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth2':
            {
                $query="DELETE FROM `sem6attdm2` WHERE `regno`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem6.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth3':
            {
                $query="DELETE FROM `sem6attdm3` WHERE `regno`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem6.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth4':
            {
                $query="DELETE FROM `sem6attdm4` WHERE `regno`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem6.php'>Let's Go Back</a>";
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
$query="INSERT INTO `sem1attdm1`(`regno`, `maths_1`, `applied_science`, `Ceee`, `Science_lab`, `Be_lab`, `Bcs_lab`, `Month_of_admin`) VALUES ('$regno','$m1','$apsc','$ceee','$belab','$apsclab','$bcslab','$month')";
    if (mysqli_query($con, $query)) {
    echo "New record created successfully";
    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.html'>Let's Go Back</a>";
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
*/
?>
