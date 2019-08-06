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

$ds='';
if(isset($_POST['m1'])){
    $ds=$_POST['m1'];
}

$ja='';
if(isset($_POST['sci'])){
    $ja=$_POST['sci'];
}

$os='';
if(isset($_POST['ceee'])){
    $os=$_POST['ceee'];
}

$pe='';
if(isset($_POST['sci_lab'])){
    $pe=$_POST['sci_lab'];
}

$dl='';
if(isset($_POST['be_lab'])){
    $dl=$_POST['be_lab'];
}

$jal='';
if(isset($_POST['bcs_lab'])){
    $jal=$_POST['bcs_lab'];
}
$li='';
if(isset($_POST['na'])){
    $li=$_POST['na'];
}

switch($opsel)
{
    case 'up' :
    {
        switch($intsel)
        {
            case 'umonth1':
            {
                $query="UPDATE `sem4internal1` SET `month`='$month',`Datastructure_using_c`='$ds',`Oop_with_java`='$ja',`Operating_system`='$os',`Pe&ic`='$pe',`ds_lab`='$dl',`Java_lab`='$jal',`Linux_lab`='$li'    WHERE `reg_no`='$regno'";
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
                $query="UPDATE `sem4internal2` SET `month`='$month',`Datastructure_using_c`='$ds',`Oop_with_java`='$ja',`Operating_system`='$os',`Pe&ic`='$pe',`ds_lab`='$dl',`Java_lab`='$jal',`Linux_lab`='$li'    WHERE `reg_no`='$regno'";
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
                $query="UPDATE `sem4internal3` SET `month`='$month',`Datastructure_using_c`='$ds',`Oop_with_java`='$ja',`Operating_system`='$os',`Pe&ic`='$pe',`ds_lab`='$dl',`Java_lab`='$jal',`Linux_lab`='$li'    WHERE `reg_no`='$regno'";
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
                $query="DELETE FROM `sem4internal1` WHERE `reg_no`='$regno'";
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
                $query="DELETE FROM `sem4internal2` WHERE `reg_no`='$regno'";
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
                $query="DELETE FROM `sem4internal3` WHERE `reg_no`='$regno'";
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
