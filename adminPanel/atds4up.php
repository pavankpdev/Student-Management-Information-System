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

$ds='';
if(isset($_POST['um1'])){
    $ds=$_POST['um1'];
}

$java='';
if(isset($_POST['usci'])){
    $java=$_POST['usci'];
}

$os='';
if(isset($_POST['uceee'])){
    $os=$_POST['uceee'];
}

$pe='';
if(isset($_POST['usci_lab'])){
    $pe=$_POST['usci_lab'];
}

$dsl='';
if(isset($_POST['ube_lab'])){
    $dsl=$_POST['ube_lab'];
}

$javal='';
if(isset($_POST['ubcs_lab'])){
    $javal=$_POST['ubcs_lab'];
}
$li='';
if(isset($_POST['nalab'])){
    $li=$_POST['nalab'];
}
switch($opsel)
{
    case 'up' :
    {
        switch($intsel)
        {
            case 'umonth1':
            {
                $query="UPDATE `sem4attdm1` SET `Ds`='$ds',`oop_with_java`='$java',`os`='$os',`pe&ic`='$pe',`ds_lab`='$dsl',`java_lab`='$javal',`linux_lab`='$li',`Month_of_admin`='$month'  WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem4.php'>Let's Go Back</a>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth2':
            {
                $query="UPDATE `sem4attdm2` SET `Ds`='$ds',`oop_with_java`='$java',`os`='$os',`pe&ic`='$pe',`ds_lab`='$dsl',`java_lab`='$javal',`linux_lab`='$li',`Month_of_admin`='$month'  WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem4.php'>Let's Go Back</a>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth3':
            {
                $query="UPDATE `sem4attdm3` SET `Ds`='$ds',`oop_with_java`='$java',`os`='$os',`pe&ic`='$pe',`ds_lab`='$dsl',`java_lab`='$javal',`linux_lab`='$li',`Month_of_admin`='$month'  WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem4.php'>Let's Go Back</a>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth4':
            {
                $query="UPDATE `sem4attdm4` SET `Ds`='$ds',`oop_with_java`='$java',`os`='$os',`pe&ic`='$pe',`ds_lab`='$dsl',`java_lab`='$javal',`linux_lab`='$li',`Month_of_admin`='$month'  WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "New record Updated successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem4.php'>Let's Go Back</a>";
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
                $query="DELETE FROM `sem4attdm1` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                echo "Record Deleted successfully";
                echo "<a href='http://localhost/newtest/adminPanel/attdsem4.php'>Let's Go Back</a>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth2':
            {
                $query="DELETE FROM `sem4attdm2` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem4.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth3':
            {
                $query="DELETE FROM `sem4attdm3` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem4.php'>Let's Go Back</a>";
                } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
                }
            }
            break;
            case 'umonth4':
            {
                $query="DELETE FROM `sem4attdm4` WHERE `reg_no`='$regno'";
                if (mysqli_query($con, $query)) {
                    echo "Record Deleted successfully";
                    echo "<a href='http://localhost/newtest/adminPanel/attdsem4.php'>Let's Go Back</a>";
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
