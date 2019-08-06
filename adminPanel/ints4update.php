<?php
$mon='';
if(isset($_POST['umonselect'])){
  $mon=$_POST['umonselect'];
}
$mont='';
switch($mon)
{
  case "umon1" :
  {
      $mont='Internal 1';
  }
  break;
  case "umon2" :
  {
      $mont='Internal 2';
  }
  break;
  case "umon3" :
  {
      $mont='Internal 3';
  }
  break;
  default :
  echo "invalid Internal";
  break;
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

  <title>SB Admin - Tables</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="http://localhost/newtest/adminPanel/index.php">MIS Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>


  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
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
          <li class="breadcrumb-item active">Internals</li>
        </ol>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">select sem <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://localhost/newtest/adminPanel/s1i1n.html">sem1</a></li>
            <li><a href="http://localhost/newtest/adminPanel/s2i1n.html">sem2</a></li>
            <li><a href="http://localhost/newtest/adminPanel/s3i1n.html">sem3</a></li>
        <li><a href="http://localhost/newtest/adminPanel/s4i1n.html">sem4</a></li>
        <li><a href="http://localhost/newtest/adminPanel/s5i1n.html">sem5</a></li>
        <li><a href="http://localhost/newtest/adminPanel/s6i1n.html">sem6</a></li>
          </ul>
        </li>
        <!-- DataTables Example -->

          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


        <div class="container">
          <h2><strong>Sem4-<?php print("$mont"); ?></strong></h2>
          <form class="form-horizontal" method="POST" action="http://localhost/newtest/adminPanel/ints4up.php">
            <div class="form-group">
              <label class="control-label col-sm-2" for="month"> Operation:</label>
              <select name="uop">
                <option value="up">Update</option>
                <option value="del">Delete</option>
              </select>
            </div>
            <?php
                  switch($mon)
                  {
                    case "umon1" :
                    {
                        echo "<div class='form-group'>";
                        echo "<label class='control-label col-sm-2' for='month'> Select:</label>";
                        echo "<select name='umonthselect'>";
                        echo "<option value='umonth1' selected>1<sup>st</sup> Internal</option>";
                        echo "<option value='umonth2'>2<sup>nd</sup>  Internal</option>";
                        echo "<option value='umonth3'>3<sup>rd</sup> Internal</option>";
                        echo "</select>";
                        echo "</div>";
                    }
                    break;
                    case "umon2" :
                    {
                      echo "<div class='form-group'>";
                      echo "<label class='control-label col-sm-2' for='month'> Select:</label>";
                      echo "<select name='umonthselect'>";
                      echo "<option value='umonth1' >1<sup>st</sup> Internal</option>";
                      echo "<option value='umonth2' selected>2<sup>nd</sup>  Internal</option>";
                      echo "<option value='umonth3'>3<sup>rd</sup> Internal</option>";
                      echo "</select>";
                      echo "</div>";
                  }
                    break;
                    case "umon3" :
                    {
                      echo "<div class='form-group'>";
                      echo "<label class='control-label col-sm-2' for='month'> Select:</label>";
                      echo "<select name='umonthselect'>";
                      echo "<option value='umonth1' >1<sup>st</sup> Internal</option>";
                      echo "<option value='umonth2'>2<sup>nd</sup>  Internal</option>";
                      echo "<option value='umonth3' selected>3<sup>rd</sup> Internal</option>";
                      echo "</select>";
                      echo "</div>";
                  }
                    break;
                    default :
                    echo "invalid Month";
                    break;
                  }

            ?>
            <div class="form-group">
              <label class="control-label col-sm-2" for="regno">Regno:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control"   name="regno" id="regno" size="30">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="month"> month:</label>

              <select name="monthint">
                <option value="jan">January</option>
                <option value="feb">February</option>
                <option value="march">March</option>
                <option value="april">April</option>

                <option value="may">May</option>

                <option value="june">June</option>
                <option value="july">July</option>

                  <option value="aug">August</option>
                  <option value="sep">September</option>
                  <option value="oct">October</option>
                  <option value="nov">November</option>

                  <option value="dec">December</option>




              </select>


			</div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="m1">Data Structures:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="m1" id="m1">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="sci">OOP with JAVA:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="sci" id="sci">
              </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="ceee">Operating System:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="ceee" id="ceee">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-sm-2" for="sci_lab">P.E & I.C:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="sci_lab" id="sci_lab">
                </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2" for="be_lab">Data Structres lab:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="be_lab" id="be_lab">
                  </div>
                  </div>
                 <div class="form-group">
                                    <label class="control-label col-sm-2" for="bcs_lab">JAVA lab:</label>
                                    <div class="col-sm-4">
                                      <input type="text" class="form-control" name="bcs_lab" id="bcs_lab">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-sm-2" for="bcs_lab">Linux lab:</label>
                                    <div class="col-sm-4">
                                      <input type="text" class="form-control" name="na" id="na">
                                    </div>
                                    </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
        <div class="container">
        <div class="panel panel-default">
        <div class="panel-heading"><strong>Records</strong></div>
        <div class="panel-body>">
  <table class="table table-hover " id="table">
  <th>
      <tr>
        <th>Reg No</th>
        <th>Data Structres</th>
        <th>OOP with JAVA</th>
        <th>Operating System</th>
        <th>P.E & I.C</th>
        <th>Data Structres Lab</th>
        <th>JAVA Lab</th>
        <th>Linux Lab</th>
        <th>Month</th>
      </tr>
    </th>
     <?php
     include 'db_connect.php';
            switch($mon)
            {
              case 'umon1':
              {
                    $query1 = "SELECT * FROM `sem4internal1`";
                    $result1 = mysqli_query($con, $query1);
                    $result1check = mysqli_num_rows($result1);
                    if($result1check>0)
                    {
                      while($row= mysqli_fetch_assoc($result1))
                      {
                        echo "<tr>";
                        echo "<td>".$row['Reg_no']."</td>";
                        echo "<td>".$row['Datastructure_using_c']."</td>";
                        echo "<td>".$row['Oop_with_java']."</td>";
                        echo "<td>".$row['Operating_system']."</td>";
                        echo "<td>".$row['Pe&ic']."</td>";
                        echo "<td>".$row['ds_lab']."</td>";
                        echo "<td>".$row['Java_lab']."</td>";
                        echo "<td>".$row['Linux_lab']."</td>";
                        echo "<td>".$row['month']."</td>";
                        echo "</tr>";
                      }
                    }
                      else
                    {
                      echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- attds1uptb</h1>";
                    }
              }
              break;
              case 'umon2':
              {
                    $query1 = "SELECT * FROM `sem4internal2`";
                    $result1 = mysqli_query($con, $query1);
                    $result1check = mysqli_num_rows($result1);
                    if($result1check>0)
                    {
                      while($row= mysqli_fetch_assoc($result1))
                      {
                        echo "<tr>";
                        echo "<td>".$row['Reg_no']."</td>";
                        echo "<td>".$row['Datastructure_using_c']."</td>";
                        echo "<td>".$row['Oop_with_java']."</td>";
                        echo "<td>".$row['Operating_system']."</td>";
                        echo "<td>".$row['Pe&ic']."</td>";
                        echo "<td>".$row['ds_lab']."</td>";
                        echo "<td>".$row['Java_lab']."</td>";
                        echo "<td>".$row['Linux_lab']."</td>";
                        echo "<td>".$row['month']."</td>";
                        echo "</tr>";
                      }
                    }
                      else
                    {
                      echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- attds1uptb</h1>";
                    }
              }
              break;
              case 'umon3':
              {
                    $query1 = "SELECT * FROM `sem4internal3`";
                    $result1 = mysqli_query($con, $query1);
                    $result1check = mysqli_num_rows($result1);
                    if($result1check>0)
                    {
                      while($row= mysqli_fetch_assoc($result1))
                      {
                        echo "<tr>";
                        echo "<td>".$row['Reg_no']."</td>";
                        echo "<td>".$row['Datastructure_using_c']."</td>";
                        echo "<td>".$row['Oop_with_java']."</td>";
                        echo "<td>".$row['Operating_system']."</td>";
                        echo "<td>".$row['Pe&ic']."</td>";
                        echo "<td>".$row['ds_lab']."</td>";
                        echo "<td>".$row['Java_lab']."</td>";
                        echo "<td>".$row['Linux_lab']."</td>";
                        echo "<td>".$row['month']."</td>";
                        echo "</tr>";
                      }
                    }
                      else
                    {
                      echo "We Are Facing A DataBase Error, Sorry For The InConvenince <h1>err_code -- attds1uptb</h1>";
                    }
              }
              break;
              default:
              echo "Something Is Wrong, Please Try Again :|";
              break;
            }
     ?>
  </table>
  </div>
</div>
</div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->

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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script>
    
    var table = document.getElementById('table');
    
    for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
             //rIndex = this.rowIndex;
             document.getElementById("regno").value = this.cells[0].innerHTML;
             document.getElementById("m1").value = this.cells[1].innerHTML;
             document.getElementById("sci").value = this.cells[2].innerHTML;
              document.getElementById("ceee").value = this.cells[3].innerHTML;
             document.getElementById("sci_lab").value = this.cells[4].innerHTML;
             document.getElementById("be_lab").value = this.cells[5].innerHTML;
              document.getElementById("bcs_lab").value = this.cells[6].innerHTML;
              document.getElementById("na").value = this.cells[7].innerHTML;
              document.getElementById("monthint").value = this.cells[8].innerHTML;
        };
    }
var column = "table ." + $(this).attr("des");
$(column).hide();

</script>
</body>

</html>

