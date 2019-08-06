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

$m1='';
if(isset($_POST['m1'])){
    $m1=$_POST['m1'];
}

$apsc='';
if(isset($_POST['sci'])){
    $apsc=$_POST['sci'];
}

$ceee='';
if(isset($_POST['ceee'])){
    $ceee=$_POST['ceee'];
}

$apsclab='';
if(isset($_POST['sci_lab'])){
    $apsclab=$_POST['sci_lab'];
}

$belab='';
if(isset($_POST['be_lab'])){
    $belab=$_POST['be_lab'];
}

$bcslab='';
if(isset($_POST['bcs_lab'])){
    $bcslab=$_POST['bcs_lab'];
}

switch($opsel)
{
    case 'up' :
    {
        switch($intsel)
        {
            case 'umonth1':
            {
                $query="UPDATE `sem1internal1` SET `month`='$month',`Engg_maths1`='$m1',`Science`='$apsc',`Ceee`='$ceee',`Be_lab`='$belab',`Science_lab`='$apsclab',`Bcs_lab`='$bcslab'  WHERE `reg_no`='$regno'";
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
                $query="UPDATE `sem1internal2` SET `month`='$month',`Engg_maths1`='$m1',`Science`='$apsc',`Ceee`='$ceee',`Be_lab`='$belab',`Science_lab`='$apsclab',`Bcs_lab`='$bcslab'  WHERE `reg_no`='$regno'";
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
                $query="UPDATE `sem1internal3` SET `month`='$month',`Engg_maths1`='$m1',`Science`='$apsc',`Ceee`='$ceee',`Be_lab`='$belab',`Science_lab`='$apsclab',`Bcs_lab`='$bcslab'  WHERE `reg_no`='$regno'";
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
                $query="DELETE FROM `sem1internal1` WHERE `reg_no`='$regno'";
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
                $query="DELETE FROM `sem1internal2` WHERE `reg_no`='$regno'";
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
                $query="DELETE FROM `sem1internal3` WHERE `reg_no`='$regno'";
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
