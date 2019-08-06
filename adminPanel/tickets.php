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



    <!-- Navbar -->

  

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
          <li class="breadcrumb-item active">Complaints</li>
        </ol>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

          <div class="container-fluid">
	<div class="row">
  <div class="panel panel-default" style="width:400px;">
        <div class="panel-heading"><strong>Complaints Lodged</strong></div>
        <div class="panel-body"><br>
		<div class="col-md-6 " >

			<table class="table table-hover " id="table" >
				<tr >
					
					<th ><center>Sl No</center></th >
					<th ><center>Name</center></th>
					<th ><center>Reg no</center></th>
          <th ><center>Subject</center></th>
					<th style="visibility:hidden;"><center>Date</center></th>
					<th style="visibility:hidden;"><center>Module</center></th>
					<th style="visibility:hidden;"><center>Description</center></th>
					
				</tr >
				<?php
					include 'db_connect.php';
					$query = "SELECT * from `tickets`";  
					$result = mysqli_query($con, $query);   
					$resultcheck = mysqli_num_rows($result);
					if($resultcheck>0)
					{
					while($row= mysqli_fetch_assoc($result))
						{
							$slno=$row['slno'];
							$name=$row['name'];
							$reg=$row['reg'];
							$type=$row['type'];
							$sub=$row['sub'];
							$des=$row['des'];
							$date=$row['date'];
							echo "<tr>";
							echo "<td>".$slno."</td>";
							echo "<td>".$name."</td>";
              echo "<td>".$reg."</td>";
              echo "<td style='font-weight: bold;'>".$sub."</td>";
							echo "<td style='visibility:hidden;'>".$date."</td>";
							echo "<td style='visibility:hidden;'>".$type."</td>";
							echo "<td style='visibility:hidden;'>".$des."</td>";
							echo "</tr>";
						}
					}
				?>


			</table >
     </div>
     </div>     
		</div >
	<div class="panel panel-default" >
    <div class="panel-heading" ><strong>Details Of the Complaints Lodged</strong></div>
    <div class="panel-body" >
  <p><b>The Details Of the Complaints Are Displayed Here</b></p>
  
    <div class="col-sm-4">

    <dl >
      <dt >Sl No</dt >
      <dd ><input type="text" id="slno"></dd>
      <dt >Name</dt >
      <dd ><input type="text" id="fname"></dd>
      <dt >Register Number</dt >
      <dd ><input type="text" id="reg"></dd>
      <dt >Date</dt >
      <dd ><input type="text" id="date"></dd>
    </div>
	
    <div class="col-sm-8">
      
	<dt >Module</dt >
	<dd ><input type="text" id="type"></dd>
	<dt >Subject</dt >
	<dd ><input type="text" id="sub"></dd>
	<dt>Description</dt>
	<dd ><textarea rows="4" cols="50" id="des"></textarea></dd>
	</dl>

	</div>
</div>
	</div>
  </div>
</div>
        <div class="container">
        
		</div>
        </div>
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span><p>Copyright &copy; 2019 Sri Jayachamarajendra (Govt.) Polytechnic. All rights reserved.<br><br>
              Developed  By:S.J.P UNITED</p></span>
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
  <script src="../libs/angular/angular.min.js" ></script>
<script>
    
                var table = document.getElementById('table');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                         document.getElementById("slno").value = this.cells[0].innerHTML;
                         document.getElementById("fname").value = this.cells[1].innerHTML;
                         document.getElementById("reg").value = this.cells[2].innerHTML;
						 document.getElementById("date").value = this.cells[3].innerHTML;
                         document.getElementById("type").value = this.cells[4].innerHTML;
                         document.getElementById("sub").value = this.cells[5].innerHTML;
						 document.getElementById("des").value = this.cells[6].innerHTML;
                    };
                }
				var column = "table ." + $(this).attr("des");
    			$(column).hide();
    
         </script>
</body>

</html>
