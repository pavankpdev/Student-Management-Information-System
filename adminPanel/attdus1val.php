<?php
include 'db_connect.php';

$sub='';
if(isset($_POST['subselect'])){
    $sub=$_POST['subselect'];
}
$month='';
if(isset($_POST['monthselect'])){
    $month=$_POST['monthselect'];
}

$attd='';
if(isset($_POST['attd'])){
    $attd=$_POST['attd'];
}

switch($sub)
{
    case 's1':
    {
        switch("$month")
        {
                case 'month1':$query="UPDATE `subject` SET `attdm1` = '$attd' WHERE `subject`.`subject_code` = '15SC01M'";
                        if (mysqli_query($con, $query)) {
                            echo "New record created successfully";
                            echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                            } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($con);
                            }
                break;
                case 'month2':$query="UPDATE `subject` SET `attdm2` = '$attd' WHERE `subject`.`subject_code` = '15SC01M'";
                        if (mysqli_query($con, $query)) {
                            echo "New record created successfully";
                            echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                            } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($con);
                            }

                break;
                case 'month3':$query="UPDATE `subject` SET `attdm3` = '$attd' WHERE `subject`.`subject_code` = '15SC01M'";
                                if (mysqli_query($con, $query)) {
                                    echo "New record created successfully";
                                    echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                                    } else {
                                    echo "Error: " . $query . "<br>" . mysqli_error($con);
                                    }
                break;
                case 'month4':$query="UPDATE `subject` SET `attdm4` = '$attd' WHERE `subject`.`subject_code` = '15SC01M'";
                                if (mysqli_query($con, $query)) {
                                    echo "New record created successfully";
                                    echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                                    } else {
                                    echo "Error: " . $query . "<br>" . mysqli_error($con);
                                    }
                break;
                default : 
                echo "something went wrong , Sorry :|";
                break;
        }
    }
    break;
    case 's2':
    {
        switch("$month")
        {
                case 'month1':$query="UPDATE `subject` SET `attdm1` = '$attd' WHERE `subject`.`subject_code` = '15SC03S'";
                        if (mysqli_query($con, $query)) {
                            echo "New record created successfully";
                            echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                            } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($con);
                            }
                break;
                case 'month2':$query="UPDATE `subject` SET `attdm2` = '$attd' WHERE `subject`.`subject_code` = '15SC03S'";
                        if (mysqli_query($con, $query)) {
                            echo "New record created successfully";
                            echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                            } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($con);
                            }

                break;
                case 'month3':$query="UPDATE `subject` SET `attdm3` = '$attd' WHERE `subject`.`subject_code` = '15SC03S'";
                                if (mysqli_query($con, $query)) {
                                    echo "New record created successfully";
                                    echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                                    } else {
                                    echo "Error: " . $query . "<br>" . mysqli_error($con);
                                    }
                break;
                case 'month4':$query="UPDATE `subject` SET `attdm4` = '$attd' WHERE `subject`.`subject_code` = '15SC03S'";
                                if (mysqli_query($con, $query)) {
                                    echo "New record created successfully";
                                    echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                                    } else {
                                    echo "Error: " . $query . "<br>" . mysqli_error($con);
                                    }
                break;
                default : 
                echo "something went wrong , Sorry :|";
                break;
        }
    }
    break;
    case 's3':
    {
        switch("$month")
        {
                case 'month1':$query="UPDATE `subject` SET `attdm1` = '$attd' WHERE `subject`.`subject_code` = '15EC01T'";
                        if (mysqli_query($con, $query)) {
                            echo "New record created successfully";
                            echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                            } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($con);
                            }
                break;
                case 'month2':$query="UPDATE `subject` SET `attdm2` = '$attd' WHERE `subject`.`subject_code` = '15EC01T'";
                        if (mysqli_query($con, $query)) {
                            echo "New record created successfully";
                            echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                            } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($con);
                            }

                break;
                case 'month3':$query="UPDATE `subject` SET `attdm3` = '$attd' WHERE `subject`.`subject_code` = '15EC01T'";
                                if (mysqli_query($con, $query)) {
                                    echo "New record created successfully";
                                    echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                                    } else {
                                    echo "Error: " . $query . "<br>" . mysqli_error($con);
                                    }
                break;
                case 'month4':$query="UPDATE `subject` SET `attdm4` = '$attd' WHERE `subject`.`subject_code` = '15EC01T'";
                                if (mysqli_query($con, $query)) {
                                    echo "New record created successfully";
                                    echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                                    } else {
                                    echo "Error: " . $query . "<br>" . mysqli_error($con);
                                    }
                break;
                default : 
                echo "something went wrong , Sorry :|";
                break;
        }
    }
    break;
    case 's4':
    {
        switch("$month")
        {
                case 'month1':$query="UPDATE `subject` SET `attdm1` = '$attd' WHERE `subject`.`subject_code` = '15SC04P'";
                        if (mysqli_query($con, $query)) {
                            echo "New record created successfully";
                            echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                            } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($con);
                            }
                break;
                case 'month2':$query="UPDATE `subject` SET `attdm2` = '$attd' WHERE `subject`.`subject_code` = '15SC04P'";
                        if (mysqli_query($con, $query)) {
                            echo "New record created successfully";
                            echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                            } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($con);
                            }

                break;
                case 'month3':$query="UPDATE `subject` SET `attdm3` = '$attd' WHERE `subject`.`subject_code` = '15SC04P'";
                                if (mysqli_query($con, $query)) {
                                    echo "New record created successfully";
                                    echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                                    } else {
                                    echo "Error: " . $query . "<br>" . mysqli_error($con);
                                    }
                break;
                case 'month4':$query="UPDATE `subject` SET `attdm4` = '$attd' WHERE `subject`.`subject_code` = '15SC04P'";
                                if (mysqli_query($con, $query)) {
                                    echo "New record created successfully";
                                    echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                                    } else {
                                    echo "Error: " . $query . "<br>" . mysqli_error($con);
                                    }
                break;
                default : 
                echo "something went wrong , Sorry :|";
                break;
        }
    }
    break;
    case 's5':
    {
        switch("$month")
        {
                case 'month1':$query="UPDATE `subject` SET `attdm1` = '$attd' WHERE `subject`.`subject_code` = '15EC02P'";
                        if (mysqli_query($con, $query)) {
                            echo "New record created successfully";
                            echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                            } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($con);
                            }
                break;
                case 'month2':$query="UPDATE `subject` SET `attdm2` = '$attd' WHERE `subject`.`subject_code` = '15EC02P'";
                        if (mysqli_query($con, $query)) {
                            echo "New record created successfully";
                            echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                            } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($con);
                            }

                break;
                case 'month3':$query="UPDATE `subject` SET `attdm3` = '$attd' WHERE `subject`.`subject_code` = '15EC02P'";
                                if (mysqli_query($con, $query)) {
                                    echo "New record created successfully";
                                    echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                                    } else {
                                    echo "Error: " . $query . "<br>" . mysqli_error($con);
                                    }
                break;
                case 'month4':$query="UPDATE `subject` SET `attdm4` = '$attd' WHERE `subject`.`subject_code` = '15EC02P'";
                                if (mysqli_query($con, $query)) {
                                    echo "New record created successfully";
                                    echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                                    } else {
                                    echo "Error: " . $query . "<br>" . mysqli_error($con);
                                    }
                break;
                default : 
                echo "something went wrong , Sorry :|";
                break;
        }
    }
    break;
    case 's6':
    {
        switch("$month")
        {
                case 'month1':$query="UPDATE `subject` SET `attdm1` = '$attd' WHERE `subject`.`subject_code` = '15CS11P'";
                        if (mysqli_query($con, $query)) {
                            echo "New record created successfully";
                            echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                            } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($con);
                            }
                break;
                case 'month2':$query="UPDATE `subject` SET `attdm2` = '$attd' WHERE `subject`.`subject_code` = '15CS11P'";
                        if (mysqli_query($con, $query)) {
                            echo "New record created successfully";
                            echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                            } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($con);
                            }

                break;
                case 'month3':$query="UPDATE `subject` SET `attdm3` = '$attd' WHERE `subject`.`subject_code` = '15CS11P'";
                                if (mysqli_query($con, $query)) {
                                    echo "New record created successfully";
                                    echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                                    } else {
                                    echo "Error: " . $query . "<br>" . mysqli_error($con);
                                    }
                break;
                case 'month4':$query="UPDATE `subject` SET `attdm4` = '$attd' WHERE `subject`.`subject_code` = '15CS11P'";
                                if (mysqli_query($con, $query)) {
                                    echo "New record created successfully";
                                    echo "<a href='http://localhost/newtest/adminPanel/attdus1.html'><br>Let's Go Back</a>";
                                    } else {
                                    echo "Error: " . $query . "<br>" . mysqli_error($con);
                                    }
                break;
                default : 
                echo "something went wrong , Sorry :|";
                break;
        }
    }
    break;
    default:
    echo "something went wrong , Sorry :| (O.A)";
    break;

}

?>
