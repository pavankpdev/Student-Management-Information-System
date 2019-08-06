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

$st='';
if(isset($_POST['m1'])){
    $st=$_POST['m1'];
}

$nsm='';
if(isset($_POST['sci'])){
    $nsm=$_POST['sci'];
}

$cc='';
if(isset($_POST['ceee'])){
    $cc=$_POST['ceee'];
}

$nsl='';
if(isset($_POST['sci_lab'])){
    $nsl=$_POST['sci_lab'];
}

$stl='';
if(isset($_POST['be_lab'])){
    $stl=$_POST['be_lab'];
}


switch($opsel)
{
    case 'up' :
    {
        switch($intsel)
        {
            case 'umonth1':
            {
                $query="UPDATE `sem6internal1` SET `month`='$month',`CC`='$cc',`NSM`='$nsm',`ST`='$st',`NSM_lab`='$nsl',`ST_lab`='$stl'    WHERE `regno`='$regno'";
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
                $query="UPDATE `sem6internal2` SET `month`='$month',`CC`='$cc',`NSM`='$nsm',`ST`='$st',`NSM_lab`='$nsl',`ST_lab`='$stl'    WHERE `regno`='$regno'";
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
                $query="UPDATE `sem6internal3` SET `month`='$month',`CC`='$cc',`NSM`='$nsm',`ST`='$st',`NSM_lab`='$nsl',`ST_lab`='$stl'    WHERE `regno`='$regno'";
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
                $query="DELETE FROM `sem6internal1` WHERE `regno`='$regno'";
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
                $query="DELETE FROM `sem6internal2` WHERE `regno`='$regno'";
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
                $query="DELETE FROM `sem6internal3` WHERE `regno`='$regno'";
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
