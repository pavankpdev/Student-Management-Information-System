<?php
    include 'db_connect.php';
    $query1 = "SELECT COUNT(*) 'total1' FROM `st_ma_2018_jun_1`";
    $result1 = mysqli_query($con, $query1);
    $result1check = mysqli_num_rows($result1);
	if($result1check>0)
	{
		while($row= mysqli_fetch_assoc($result1))
		{
			$total1= $row['total1'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
	}
    $query2 = "SELECT COUNT(*) 'total2' FROM `st_ma_2019_jan_2`";
    $result2 = mysqli_query($con, $query2);
    $result2check = mysqli_num_rows($result2);
	if($result2check>0)
	{
		while($row= mysqli_fetch_assoc($result2))
		{
			$total2= $row['total2'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
	}
    $query3 = "SELECT COUNT(*) 'total3' FROM `st_ma_2018_jun_3`";
    $result3 = mysqli_query($con, $query3);
    $result3check = mysqli_num_rows($result3);
	if($result3check>0)
	{
		while($row= mysqli_fetch_assoc($result3))
		{
			$total3= $row['total3'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
	}
    $query4 = "SELECT COUNT(*) 'total4' FROM `st_ma_2019_jan_4`";
    $result4 = mysqli_query($con, $query4);
    $result4check = mysqli_num_rows($result4);
	if($result4check>0)
	{
		while($row= mysqli_fetch_assoc($result4))
		{
			$total4= $row['total4'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
	}
    $query5 = "SELECT COUNT(*) 'total5' FROM `st_ma_2018_jun_5`";
    $result5 = mysqli_query($con, $query5);
    $result5check = mysqli_num_rows($result5);
	if($result5check>0)
	{
		while($row= mysqli_fetch_assoc($result5))
		{
			$total5= $row['total5'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
	}
    $query6 = "SELECT COUNT(*) 'total6' FROM `st_ma_2019_jan_6`";
    $result6 = mysqli_query($con, $query6);
    $result6check = mysqli_num_rows($result6);
	if($result6check>0)
	{
		while($row= mysqli_fetch_assoc($result6))
		{
			$total6= $row['total6'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    #--------------------------------------------------Pass Query-----------------------------------------
    $query1p = "SELECT COUNT(*) 'total1p' FROM `st_ma_2018_jun_1` where result='pass'";
    $result1p= mysqli_query($con, $query1p);
    $result1pcheck = mysqli_num_rows($result1p);
	if($result1pcheck>0)
	{
		while($row= mysqli_fetch_assoc($result1p))
		{
			$total1p= $row['total1p'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $pp1=round($total1p*100/$total1);
    $query2p = "SELECT COUNT(*) 'total2p' FROM `st_ma_2019_jan_2` where result='pass'";
    $result2p= mysqli_query($con, $query2p);
    $result2pcheck = mysqli_num_rows($result2p);
	if($result2pcheck>0)
	{
		while($row= mysqli_fetch_assoc($result2p))
		{
			$total2p= $row['total2p'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $pp2=round($total2p*100/$total2);
    $query3p = "SELECT COUNT(*) 'total3p' FROM `st_ma_2018_jun_3` where result='pass'";
    $result3p= mysqli_query($con, $query3p);
    $result3pcheck = mysqli_num_rows($result3p);
	if($result3pcheck>0)
	{
		while($row= mysqli_fetch_assoc($result3p))
		{
			$total3p= $row['total3p'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $pp3=round($total3p*100/$total3);
    $query4p = "SELECT COUNT(*) 'total4p' FROM `st_ma_2019_jan_4` where result='pass'";
    $result4p= mysqli_query($con, $query4p);
    $result4pcheck = mysqli_num_rows($result4p);
	if($result4pcheck>0)
	{
		while($row= mysqli_fetch_assoc($result4p))
		{
			$total4p= $row['total4p'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $pp4=round($total4p*100/$total4);
    $query5p = "SELECT COUNT(*) 'total5p' FROM `st_ma_2018_jun_5` where result='pass'";
    $result5p= mysqli_query($con, $query5p);
    $result5pcheck = mysqli_num_rows($result5p);
	if($result5pcheck>0)
	{
		while($row= mysqli_fetch_assoc($result5p))
		{
			$total5p= $row['total5p'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $pp5=round($total5p*100/$total5);
    $query6p = "SELECT COUNT(*) 'total6p' FROM `st_ma_2019_jan_6` where result='pass'";
    $result6p= mysqli_query($con, $query6p);
    $result6pcheck = mysqli_num_rows($result6p);
	if($result6pcheck>0)
	{
		while($row= mysqli_fetch_assoc($result6p))
		{
			$total6p= $row['total6p'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $pp6=round($total6p*100/$total6);
    #--------------------------------------------------fail Query-----------------------------------------
    $query1f = "SELECT COUNT(*) 'total1f' FROM `st_ma_2018_jun_1` where result='fail'";
    $result1f= mysqli_query($con, $query1f);
    $result1fcheck = mysqli_num_rows($result1f);
	if($result1fcheck>0)
	{
		while($row= mysqli_fetch_assoc($result1f))
		{
			$total1f= $row['total1f'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $ff1=round($total1f*100/$total1);
    $query2f = "SELECT COUNT(*) 'total2f' FROM `st_ma_2019_jan_2` where result='fail'";
    $result2f= mysqli_query($con, $query2f);
    $result2fcheck = mysqli_num_rows($result2f);
	if($result2fcheck>0)
	{
		while($row= mysqli_fetch_assoc($result2f))
		{
			$total2f= $row['total2f'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $ff2=round($total2f*100/$total2);
    $query3f = "SELECT COUNT(*) 'total3f' FROM `st_ma_2018_jun_3` where result='fail'";
    $result3f= mysqli_query($con, $query3f);
    $result3fcheck = mysqli_num_rows($result3f);
	if($result3fcheck>0)
	{
		while($row= mysqli_fetch_assoc($result3f))
		{
			$total3f= $row['total3f'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $ff3=round($total3f*100/$total3);
    $query4f = "SELECT COUNT(*) 'total4f' FROM `st_ma_2019_jan_4` where result='fail'";
    $result4f= mysqli_query($con, $query4f);
    $result4fcheck = mysqli_num_rows($result4f);
	if($result4fcheck>0)
	{
		while($row= mysqli_fetch_assoc($result4f))
		{
			$total4f= $row['total4f'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $ff4=round($total4f*100/$total4);
    $query5f = "SELECT COUNT(*) 'total5f' FROM `st_ma_2018_jun_5` where result='fail'";
    $result5f= mysqli_query($con, $query5f);
    $result5fcheck = mysqli_num_rows($result5f);
	if($result5fcheck>0)
	{
		while($row= mysqli_fetch_assoc($result5f))
		{
			$total5f= $row['total5f'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $ff5=round($total5f*100/$total5);
    $query6f = "SELECT COUNT(*) 'total6f' FROM `st_ma_2019_jan_6` where result='fail'";
    $result6f= mysqli_query($con, $query6f);
    $result6fcheck = mysqli_num_rows($result6f);
	if($result6fcheck>0)
	{
		while($row= mysqli_fetch_assoc($result6f))
		{
			$total6f= $row['total6f'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $ff6=round($total6f*100/$total6);
    #-----------------------------------------year query------------------------------------------------
    $queryy1= "SELECT 	exam_month_year 'year1' FROM `st_ma_2018_jun_1`";
    $resulty1= mysqli_query($con, $queryy1);
    $resulty1check = mysqli_num_rows($resulty1);
	if($resulty1check>0)
	{
		while($row= mysqli_fetch_assoc($resulty1))
		{
			$y1= $row['year1'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $queryy2= "SELECT 	exam_month_year 'year2' FROM `st_ma_2019_jan_2`";
    $resulty2= mysqli_query($con, $queryy2);
    $resulty2check = mysqli_num_rows($resulty2);
	if($resulty2check>0)
	{
		while($row= mysqli_fetch_assoc($resulty2))
		{
			$y2= $row['year2'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $queryy3= "SELECT 	exam_month_year 'year3' FROM `st_ma_2018_jun_3`";
    $resulty3= mysqli_query($con, $queryy3);
    $resulty3check = mysqli_num_rows($resulty3);
	if($resulty3check>0)
	{
		while($row= mysqli_fetch_assoc($resulty3))
		{
			$y3= $row['year3'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $queryy4= "SELECT 	exam_month_year 'year4' FROM `st_ma_2019_jan_4`";
    $resulty4= mysqli_query($con, $queryy4);
    $resulty4check = mysqli_num_rows($resulty4);
	if($resulty4check>0)
	{
		while($row= mysqli_fetch_assoc($resulty4))
		{
			$y4= $row['year4'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $queryy5= "SELECT 	exam_month_year 'year5' FROM `st_ma_2018_jun_5`";
    $resulty5= mysqli_query($con, $queryy5);
    $resulty5check = mysqli_num_rows($resulty5);
	if($resulty5check>0)
	{
		while($row= mysqli_fetch_assoc($resulty5))
		{
			$y5= $row['year5'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }
    $queryy6= "SELECT 	exam_month_year 'year6' FROM `st_ma_2019_jan_6`";
    $resulty6= mysqli_query($con, $queryy6);
    $resulty6check = mysqli_num_rows($resulty6);
	if($resulty6check>0)
	{
		while($row= mysqli_fetch_assoc($resulty6))
		{
			$y6= $row['year6'];
		}
    }
    else
	{
		echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- sem1</h1>";
    }



?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ADMIN - STUDENT MIS</title>

  <!--datatable css-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">MIS Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">

        </div>
      </div>
    </form>

    <!-- Navbar -->
    
  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="attdsem1.php">
          <i class="fas fa-fw fa-list-alt"></i>
          <span>Attendence</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="attduselect.php">
          <i class="fas fa-fw fa-list-alt"></i>
          <span>Update Total Attendence</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="s1i1n.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Internals</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="upload.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Externals</span></a>
      </li>
    </ul>
<!--end slidebar-->
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-check-circle"></i>
                </div>
                <div class="mr-5">Complaints.!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="http://localhost/newtest/adminPanel/tickets.php">
                <span class="float-left">View Details...</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-newspaper"></i>
                </div>
                <div class="mr-5">Manage News</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="http://localhost/newtest/adminPanel/news.php">
                <span class="float-left">Click Here...</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-smile"></i>
                </div>
                <div class="mr-5">Manage Event</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="http://localhost/newtest/adminPanel/event.php">
                <span class="float-left">Click Here...</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">Update Message</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="http://localhost/newtest/adminPanel/msg.php">
                <span class="float-left">Click Here...</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="card mb-3">
            <div class="card-header bg-dark text-white ">
              <i class="fas fa-table"></i>
              Semester Result Overview</div>
            <div class="card-body">
              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Semester</th>
                      <th>Year</th>
                      <th>Total Students</th>
                      <th>Total Students Passed</th>
                      <th>Total Students Failed</th>
                      <th>Pass Rate</th>
                      <th>Fail Rate</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td>1<sup>st</sup> Sem</td>
                    <td><center><?php print("Dec/2018");?></center></td>
                    <td><center><?php print("$total1");?></center></td>
                    <td><center><?php print("$total1p");?></center></td>
                    <td><center><?php print("$total1f");?></center></td>
                    <td>
                    <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar"  aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php print("$pp1");?>%" ><b><?php print("$pp1");?>%</b></div>
                    </div>
                    </td>
                    <td>
                    <div class="progress">
                    <div class="progress-bar bg-red" role="progressbar"  aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php print("$ff1");?>%" ><b><?php print("$ff1");?>%</b></div>
                    </div></td>
                    </tr>
                    <tr>
                    <td>2<sup>nd</sup> Sem</td>
                    <td><center><?php print("$y2");?></center></td>
                    <td><center><?php print("$total2");?></center></td>
                    <td><center><?php print("$total2p");?></center></td>
                    <td><center><?php print("$total2f");?></center></td>
                    <td>
                    <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar"  aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php print("$pp2");?>%" ><b><?php print("$pp2");?>%</b></div>
                    </div>
                    </td>
                    <td>
                    <div class="progress">
                    <div class="progress-bar bg-red" role="progressbar"  aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php print("$ff2");?>%" ><b><?php print("$ff2");?>%</b></div>
                    </div></td>
                    </tr>
                    <tr>
                    <td>3<sup>rd</sup> Sem</td>
                    <td><center><?php print("Dec/2018");?></center></td>
                    <td><center><?php print("$total3");?></center></td>
                    <td><center><?php print("$total3p");?></center></td>
                    <td><center><?php print("$total3f");?></center></td>
                    <td>
                    <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar"  aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php print("$pp3");?>%" ><b><?php print("$pp3");?>%</b></div>
                    </div>
                    </td>
                    <td>
                    <div class="progress">
                    <div class="progress-bar bg-red" role="progressbar"  aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php print("$ff3");?>%" ><b><?php print("$ff3");?>%</b></div>
                    </div></td>
                    </tr>
                    <tr>
                    <td>4<sup>th</sup> Sem</td>
                    <td><center><?php print("$y4");?></center></td>
                    <td><center><?php print("$total4");?></center></td>
                    <td><center><?php print("$total4p");?></center></td>
                    <td><center><?php print("$total4f");?></center></td>
                    <td>
                    <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar"  aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php print("$pp4");?>%" ><b><?php print("$pp4");?>%</b></div>
                    </div>
                    </td>
                    <td>
                    <div class="progress">
                    <div class="progress-bar bg-red" role="progressbar"  aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php print("$ff4");?>%" ><b><?php print("$ff4");?>%</b></div>
                    </div></td>
                    </tr>
                    <tr>
                    <td>5<sup>th</sup> Sem</td>
                    <td><center><?php print("$y5");?></center></td>
                    <td><center><?php print("$total5");?></center></td>
                    <td><center><?php print("$total5p");?></center></td>
                    <td><center><?php print("$total5f");?></center></td>
                    <td>
                    <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar"  aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php print("$pp5");?>%" ><b><?php print("$pp5");?>%</b></div>
                    </div>
                    </td>
                    <td>
                    <div class="progress">
                    <div class="progress-bar bg-red" role="progressbar"  aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php print("$ff5");?>%" ><b><?php print("$ff5");?>%</b></div>
                    </div></td>
                    </tr>
                    <tr>
                    <td>6<sup>th</sup> Sem</td>
                    <td><center><?php print("$y6");?></center></td>
                    <td><center><?php print("$total6");?></center></td>
                    <td><center><?php print("$total6p");?></center></td>
                    <td><center><?php print("$total6f");?></center></td>
                    <td>
                    <div class="progress">
                    <div class="progress-bar bg-green" role="progressbar"  aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php print("$pp6");?>%" ><b><?php print("$pp6");?>%</b></div>
                    </div>
                    </td>
                    <td>
                    <div class="progress">
                    <div class="progress-bar bg-red" role="progressbar"  aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: <?php print("$ff6");?>%" ><b><?php print("$ff6");?>%</b></div>
                    </div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday</div>
          </div>
        <!-- Area Chart Example--
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Area Chart Example</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>-->
        <!-- DataTables Example -->
        <div class="card mb-3">
        <div class="card-header bg-dark text-white">
              <i class="fas fa-table"></i>
              Semester Result </div>
        <div class="card-body">

        <div class="table-responsive">
        <table id="js-exportable" class="display nowrap" style="width:100%">
           <thead>
              <tr>
                <th>Sl no</th>
                <th>Reg No</th>
                <th>Name</th>
                <th>Grand Total</th>
                <th>Result</th>
                <th>Percentage</th>
              </tr>
           </thead>
           <tbody>
           <?php
                include "db_connect.php";
                $i=1;
                $sql = "SELECT st_ma_2018_jun_1.*,student_pro_1.name FROM st_ma_2018_jun_1 INNER JOIN student_pro_1 ON st_ma_2018_jun_1.reg_no=student_pro_1.id";
                $result = mysqli_query($con, $sql);
                if ($result !=NULL)
                {
                // output data of each row
                    while($row= mysqli_fetch_assoc($result))
                    {
                        $reg=$row['reg_no'];
                        $name=$row['name'];
                        $gt=$row['grand_total'];
                        echo "<tr><td>";
                        print("$i");
                        echo "</td><td>";
                        print("$reg");
                        echo "</td><td>";
                        print("$name");
                        echo "</td><td>";
                        print("$gt");
                        echo "</td>";
                        echo "<td>" . $row['result'] . "</td>";
                        echo "<td>";
                        print("$gt"*100/625);
                        echo "%</td></tr>";
                        $i++;
                    }
                      echo "</tbody>";
                      echo "</table>";
                }
                else
                {
                      echo "0 results";
                }
                $con->close();
            ?>
       </div>
       </div>
       <div class="card-footer small text-muted">Updated yesterday</div>
       </div>
      <!-- /.container-fluid -->
<!--
      php
      $output = '';
      $connect = mysqli_connect("localhost", "root", "", "internaldb");

           $procedure = "
           CREATE PROCEDURE selectUser()
           BEGIN
           SELECT * FROM student_pro_1 ORDER BY id DESC;
           END;
           ";
           if(mysqli_query($connect, "DROP PROCEDURE IF EXISTS selectUser"))
           {
                if(mysqli_query($connect, $procedure))
                {
                     $query = "CALL selectUser()";
                     $result = mysqli_query($connect, $query);
                     $output .= '
                     <table id="js-exportable1" class="display nowrap" style="width:100%">

                               <tr>
                               <th width="10%">regno</th>
                                    <th width="5%">name</th>
                                    <th width="5%">email</th>
                                    <th width="5%">mother name</th>
                                    <th width="5%">mother number</th>
                                    <th width="5%">father number</th>
                                    <th width="5%">father name</th>
                                    <th width="5%">year of join</th>
                                    <th width="5%">current sem</th>
                                    <th width="5%">department</th>
                                    <th width="5%">date of birth</th>
                                    <th width="5%">year</th>
                                    <th width="5%">phone number</th>

                               </tr>
                     ';
                     if(mysqli_num_rows($result) > 0)
                     {
                          while($row = mysqli_fetch_array($result))
                          {
                               $output .= '
                                    <tr>
                                    <td>'.$row["id"].'</td>
                                         <td>'.$row["name"].'</td>
                                         <td>'.$row["email"].'</td>
                                         <td>'.$row["Mother_Name"].'</td>
                                         <td>'.$row["Mother_Number"].'</td>
                                         <td>'.$row["Father_Number"].'</td>
                                         <td>'.$row["Father_Name"].'</td>
                                         <td>'.$row["year_of_join"].'</td>
                                         <td>'.$row["current_sem"].'</td>
                                         <td>'.$row["department"].'</td>
                                         <td>'.$row["date_of_birth"].'</td>
                                         <td>'.$row["year"].'</td>
                                         <td>'.$row["ph_no"].'</td>

                                         <td><button type="button" name="update" id="'.$row["id"].'" class="update btn btn-success btn-xs">Update</button></td>
                                         <td><button type="button" name="delete" id="'.$row["id"].'" class="delete btn btn-danger btn-xs">Delete</button></td>
                                    </tr>
                               ';
                          }
                     }
                     else
                     {
                          $output .= '
                               <tr>
                                    <td colspan="4">Data not Found</td>
                               </tr>
                          ';
                     }
                     $output .= '</table>';
                     echo $output;
                }
           }

      -->
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © S.J.P UNITED 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="http://localhost/M.I.S/adminPanel/login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!--area chart data-->
<script>
  // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5", "Mar 6", "Mar 7", "Mar 8", "Mar 9", "Mar 10", "Mar 11", "Mar 12", "Mar 13"],
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [10000, 30162, 26263, 18394, 18287, 28682, 31274, 33259, 25849, 24159, 32651, 31984, 38451],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 40000,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
</script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Jquery DataTable Plugin Js -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
  <script>
        $(document).ready(function() {
            $('#js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
  </script>
  <script>
        $(document).ready(function() {
            $('#js-exportable1').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
  </script>

  <!-- Page level plugin JavaScript-->

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
  <!--chart JS-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script>
    var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5", "Mar 6", "Mar 7", "Mar 8", "Mar 9", "Mar 10", "Mar 11", "Mar 12", "Mar 13"],
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [10000, 30162, 26263, 18394, 18287, 28682, 31274, 33259, 25849, 24159, 32651, 31984, 38451],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 40000,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

  </script>

</body>

</html>
