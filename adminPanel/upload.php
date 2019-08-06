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
          <li class="breadcrumb-item active">External</li>
        </ol>
        <!-- DataTables Example -->

          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php
          $connect = mysqli_connect("localhost", "root", "", "test");
$output = '';
if(isset($_POST["import"]))
{
 $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";
    $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $regno = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $sem = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $s1 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $s2 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $s3 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $s4 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
    $s5 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
    $s6 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
    $s7 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
    $s7 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
    $totle = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(11, $row)->getValue());
    $IA = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(12, $row)->getValue());
    $gd_total = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(13, $row)->getValue());
    $result = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(14, $row)->getValue());
    $sems=$sem;
    switch($sems)
    {
      case '1':
      {
              $query = "INSERT INTO `st_ma_2018_jun_1`(`reg_no`, `exam_month_year`, `m1_external`, `applied_science_external`, `ceee_external`, `applied_science_lab_external`, `bcs_lab_external`, `be_lab_external`, `grand_total`, `result`) VALUES ('".$regno."','' ,'".$s1."','".$s2."','".$s3."','".$s4."','".$s5."','".$s6."','".$gd_total."','".$result."')";
              mysqli_query($connect, $query);
              $output .= '<td>'.$regno.'</td>';
              $output .= '<td>'.$s1.'</td>';
              $output .= '<td>'.$s2.'</td>';
              $output .= '<td>'.$s3.'</td>';
              $output .= '<td>'.$s4.'</td>';
              $output .= '<td>'.$s5.'</td>';
              $output .= '<td>'.$s6.'</td>';
              $output .= '<td>'.$gd_total.'</td>';
              $output .= '<td>'.$result.'</td>';
              $output .= '</tr>';
                
      }
      break;
      case '2':
      {
        $query = "INSERT INTO `st_ma_2019_jan_2`(`reg_no`, `exam_month_year`, `m2_external`, `communication_skills_in_english_external`, `dcf_external`, `de_lab_external`, `web_design_lab_external`, `multimedia_lab_external`, `grand_total`, `result`) VALUES ('".$regno."','' ,'".$s1."','".$s2."','".$s3."','".$s4."','".$s5."','".$s6."','".$gd_total."','".$result."')";
        mysqli_query($connect, $query);
        $output .= '<td>'.$regno.'</td>';
        $output .= '<td>'.$s1.'</td>';
        $output .= '<td>'.$s2.'</td>';
        $output .= '<td>'.$s3.'</td>';
        $output .= '<td>'.$s4.'</td>';
        $output .= '<td>'.$s5.'</td>';
        $output .= '<td>'.$s6.'</td>';
        $output .= '<td>'.$gd_total.'</td>';
        $output .= '<td>'.$result.'</td>';
        $output .= '</tr>';
          
      }
      break;
      case '3':
      {
        $query = "INSERT INTO `st_ma_2018_jun_3`(`reg_no`, `exam_month_year`, `prog_with_C_external`, `CO_external`, `dbms_external`, `CN_external`, `prog_with_C_lab_external`, `dbms_and_gui_lab_external`, `network_admin_lab_external`, `grand_total`, `result`) VALUES ('".$regno."','' ,'".$s1."','".$s2."','".$s3."','".$s4."','".$s5."','".$s6."','".$s7."','".$gd_total."','".$result."')";
        mysqli_query($connect, $query);
        $output .= '<td>'.$regno.'</td>';
        $output .= '<td>'.$s1.'</td>';
        $output .= '<td>'.$s2.'</td>';
        $output .= '<td>'.$s3.'</td>';
        $output .= '<td>'.$s4.'</td>';
        $output .= '<td>'.$s5.'</td>';
        $output .= '<td>'.$s6.'</td>';
        $output .= '<td>'.$s7.'</td>';
        $output .= '<td>'.$gd_total.'</td>';
        $output .= '<td>'.$result.'</td>';
        $output .= '</tr>';
         

      }
      break;
      case '4':
      {
        $query = "INSERT INTO `st_ma_2019_jan_4`(`reg_no`, `exam_month_year`, `DS_using_C_external`, `OOP_with_java_external`, `OS_external`, `PE_and_IC_external`, `DS_lab_external`, `OOP_with_java_lab_external`, `linux_lab_external`, `kannada`, `grand_total`, `result`) VALUES ('".$regno."','' ,'".$s1."','".$s2."','".$s3."','".$s4."','".$s5."','".$s6."','".$s7."','".$s8."','".$gd_total."','".$result."')";
        mysqli_query($connect, $query);
        $output .= '<td>'.$regno.'</td>';
        $output .= '<td>'.$s1.'</td>';
        $output .= '<td>'.$s2.'</td>';
        $output .= '<td>'.$s3.'</td>';
        $output .= '<td>'.$s4.'</td>';
        $output .= '<td>'.$s5.'</td>';
        $output .= '<td>'.$s6.'</td>';
        $output .= '<td>'.$s7.'</td>';
        $output .= '<td>'.$s8.'</td>';
        $output .= '<td>'.$gd_total.'</td>';
        $output .= '<td>'.$result.'</td>';
        $output .= '</tr>';
          

      }
      break;
      case '5':
      {
        $query = "INSERT INTO `st_ma_2018_jun_5`(`reg_no`, `exam_month_year`, `SE_external`, `web_prog_external`, `ada_external`, `GC_external`, `web_prog_lab_external`, `ada_lab_external`, `pp_eternal`,`grand_total`, `result`) VALUES('".$regno."','' ,'".$s1."','".$s2."','".$s3."','".$s4."','".$s5."','".$s6."','".$s7."','".$gd_total."','".$result."')";
        mysqli_query($connect, $query);
        $output .= '<td>'.$regno.'</td>';
        $output .= '<td>'.$s1.'</td>';
        $output .= '<td>'.$s2.'</td>';
        $output .= '<td>'.$s3.'</td>';
        $output .= '<td>'.$s4.'</td>';
        $output .= '<td>'.$s5.'</td>';
        $output .= '<td>'.$s6.'</td>';
        $output .= '<td>'.$s7.'</td>';
        $output .= '<td>'.$gd_total.'</td>';
        $output .= '<td>'.$result.'</td>';
        $output .= '</tr>';
          

      }
      break;
      case '6':
      {
        $query = "INSERT INTO `st_ma_2019_jan_6`(`reg_no`, `exam_month_year`, `ST_external`, `NS_management_external`, `CC_MC_IOT_ISM_external`, `ST_lab_external`, `NS_lab_external`, `grand_total`, `result`) VALUES ('".$regno."','' ,'".$s1."','".$s2."','".$s3."','".$s4."','".$s5."','".$gd_total."','".$result."')";
        mysqli_query($connect, $query);
        $output .= '<td>'.$regno.'</td>';
        $output .= '<td>'.$s1.'</td>';
        $output .= '<td>'.$s2.'</td>';
        $output .= '<td>'.$s3.'</td>';
        $output .= '<td>'.$s4.'</td>';
        $output .= '<td>'.$s5.'</td>';
        $output .= '<td>'.$gd_total.'</td>';
        $output .= '<td>'.$result.'</td>';
        $output .= '</tr>';
         
      }
      break;
      default :
      echo "Sorry the file didn't process properly, try again";
      break;
    }
    
  }
} 
$output .= '</table>';

}
else
{
$output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
}
}
?>


<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:1000px;
   border:7px solid #ccc;
   background-color:#fff;
   border-radius:20px;
   margin-top:100px;
  }

  </style>
 </head>
 <body>
  <div class="container box">
   <h3 align="center">Update External Marks</h3><br />
   <form method="post" enctype="multipart/form-data">
    <label>Select Excel File</label>
    <input type="file" name="excel" />
    <br />
    <input type="submit" name="import" class="btn btn-info" value="Import" />
   </form>
   <br />
   <br />
   <?php
   echo $output;
   ?>
  </div>
 </body>
</html>
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
</body>
</html>