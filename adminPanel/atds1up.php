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
if(isset($_POST['uregno'])){
    $regno=$_POST['uregno'];
}
$month='';
if(isset($_POST['umonthint'])){
    $month=$_POST['umonthint'];
}

$m1='';
if(isset($_POST['um1'])){
    $m1=$_POST['um1'];
}

$apsc='';
if(isset($_POST['usci'])){
    $apsc=$_POST['usci'];
}

$ceee='';
if(isset($_POST['uceee'])){
    $ceee=$_POST['uceee'];
}

$apsclab='';
if(isset($_POST['usci_lab'])){
    $apsclab=$_POST['usci_lab'];
}

$belab='';
if(isset($_POST['ube_lab'])){
    $belab=$_POST['ube_lab'];
}

$bcslab='';
if(isset($_POST['ubcs_lab'])){
    $bcslab=$_POST['ubcs_lab'];
}

switch($opsel)
{
    case 'up' :
    {
        switch($intsel)
        {
            case 'umonth1':
            {
                $query="UPDATE `sem1attdm1` SET `maths_1`='$m1',`applied_science`='$apsc',`Ceee`='$ceee',`Science_lab`='$apsclab',`Be_lab`='$belab',`Bcs_lab`='$bcslab',`Month_of_admin`='$month' WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem1.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth2':
            {
                $query="UPDATE `sem1attdm2` SET `maths_1`='$m1',`applied_science`='$apsc',`Ceee`='$ceee',`Science_lab`='$apsclab',`Be_lab`='$belab',`Bcs_lab`='$bcslab',`Month_of_admin`='$month' WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem1.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth3':
            {
                $query="UPDATE `sem1attdm3` SET `maths_1`='$m1',`applied_science`='$apsc',`Ceee`='$ceee',`Science_lab`='$apsclab',`Be_lab`='$belab',`Bcs_lab`='$bcslab',`Month_of_admin`='$month' WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem1.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth4':
            {
                $query="UPDATE `sem1attdm4` SET `maths_1`='$m1',`applied_science`='$apsc',`Ceee`='$ceee',`Science_lab`='$apsclab',`Be_lab`='$belab',`Bcs_lab`='$bcslab',`Month_of_admin`='$month' WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem1.php'>Let's Go Back</a>";
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
                $query="DELETE FROM `sem1attdm1` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "Record Deleted Successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem1.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth2':
            {
                $query="DELETE FROM `sem1attdm2` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted Successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth3':
            {
                $query="DELETE FROM `sem1attdm3` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted Successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth4':
            {
                $query="DELETE FROM `sem1attdm4` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted Successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem1.php'>Let's Go Back</a>";
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
