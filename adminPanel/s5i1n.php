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


    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Externals</li>
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
        <h2><strong>Sem5-Internals</strong></h2>
          <form class="form-horizontal" method="POST" action="http://localhost/newtest/adminPanel/internalsem5val.php">
		  <div class="form-group">
              <label class="control-label col-sm-2" for="internals">Internals:</label>
              <div class="col-sm-4">
			<select name="internalselect">
                <option value="int1">Internal1</option>
                <option value="int2">Internal2</option>
                <option value="int3">Internal3</option>
			</select>
			</div>
			</div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="regno">Regno:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control"   name="regno" size="30">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="exam"> month:</label>
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
              <label class="control-label col-sm-2" for="se">Software Engg:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="se">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="web">Web programming:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="web">
              </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="ada">D.A.A:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control"name="ada">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-sm-2" for="gc">Green Computing:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="gc">
                </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2" for="web_lab">Web programming lab:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="web_lab">
                  </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="ada_lab">D.A.A Lab:</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="ada_lab">
                    </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pp_lab">Professional practices:</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="pp_lab">
                        </div>
                        </div>








            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
          <p><h3><strong>Need To Modify Some Data Select the Month Below And Click GO....</strong></h3></p><br>
          <form class="form-horizontal" method="POST" action="http://localhost/newtest/adminPanel/ints5update.php">
            <div class="form-group">
              <label class="control-label col-sm-2" for="month"> Select:</label>
              <select name="umonselect">
                <option value="umon1">1<sup>st</sup> Internals</option>
                <option value="umon2">2<sup>nd</sup>  Internals</option>
                <option value="umon3">3<sup>rd</sup> Internals</option>
              </select>
            </div>        <div class="form-group">
              <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-primary" style="width:75px;">Let's Go</button>
              </div>
            </div>        
            </form>
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

</body>

</html>
