<!---
UPDATE `subject` SET `attdm1` = '12', `attdm2` = '12', `attdm3` = '12', `attdm4` = '12' WHERE `subject`.`subject_code` = '15KA4KT'
-->

<?php
session_start();
include 'db_connect.php';
$reg='';
if(isset($_POST["reg"])){
  $reg=$_POST['reg'];
}
$regno=$reg;
$cs='';
if(isset($_POST["csem"])){
  $cs=$_POST['csem'];
}
$csem=$cs;
$_SESSION['regno']=$regno;
$_SESSION['csem']=$csem;
//query for student profile
$query = "SELECT * from student_pro_1 where id='$regno'";  
$result = mysqli_query($con, $query);   
$resultcheck = mysqli_num_rows($result);
if($resultcheck>0)
{
  while($row= mysqli_fetch_assoc($result))
  {
    $name= $row['name'];
    $id= $row['id'];
    #$current_sem= $row['current_sem'];
    $DOB= $row['date_of_birth'];
    $mob= $row['ph_no'];
    $email= $row['email'];
    $fn= $row['Father_Name'];
    $fnum= $row['Father_Number'];
    $mn= $row['Mother_Name'];
    $mnum= $row['Mother_Number'];
    $Yearofadm= $row['year_of_join'];
    $dept= $row['department'];
  }
}


$queryexsub="SELECT `semester`, `subject_name`, `subject_code`, `attdm1`, `attdm2`, `attdm3`, `attdm4` FROM `subject` WHERE Semester='1' ORDER BY FIELD(`subject_code`,'15SC01M','15SC03S','15EC01T','15SC04P','15EC02P','15CS11P')";
$resultexsub = mysqli_query($con, $queryexsub);
$resultcheckexsub = mysqli_num_rows($resultexsub);
if($resultcheckexsub>0)
{
  while($row= mysqli_fetch_assoc($resultexsub))
  {
    $subcode[]=$row['subject_code'];
	  $subname[]=$row['subject_name'];
  }
}

$queryexsub2="SELECT `semester`, `subject_name`, `subject_code`, `attdm1`, `attdm2`, `attdm3`, `attdm4` FROM `subject` WHERE Semester='2' ORDER BY FIELD(`subject_code`,'15cs02m','15cp01e','15cs21t','15ec03p','15cs22p','15cs23p')";
$resultexsub2 = mysqli_query($con, $queryexsub2);
$resultcheckexsub2 = mysqli_num_rows($resultexsub2);
if($resultcheckexsub2>0)
{
  while($row= mysqli_fetch_assoc($resultexsub2))
  {
    $subcode2[]=$row['subject_code'];
	  $subname2[]=$row['subject_name'];
  }
}
$queryexsub3="SELECT `semester`, `subject_name`, `subject_code`, `attdm1`, `attdm2`, `attdm3`, `attdm4` FROM `subject` WHERE Semester='3' ORDER BY FIELD(`subject_code`,'15cs31t','15cs32t','15cs33t','15cs34t','15cs35p','15cs36p','15cs37p')";
$resultexsub3 = mysqli_query($con, $queryexsub3);
$resultcheckexsub3 = mysqli_num_rows($resultexsub3);
if($resultcheckexsub3>0)
{
  while($row= mysqli_fetch_assoc($resultexsub3))
  {
    $subcode3[]=$row['subject_code'];
	  $subname3[]=$row['subject_name'];
  }
}

$queryexsub4="SELECT `semester`, `subject_name`, `subject_code`, `attdm1`, `attdm2`, `attdm3`, `attdm4` FROM `subject` WHERE Semester='4' ORDER BY FIELD(`subject_code`,'15cs41t','15cs42t','15cs43t','15cs44t','15cs45p','15cs46p','15cs47p','15KA4KT')";
$resultexsub4 = mysqli_query($con, $queryexsub4);
$resultcheckexsub4 = mysqli_num_rows($resultexsub4);
if($resultcheckexsub4>0)
{
  while($row= mysqli_fetch_assoc($resultexsub4))
  {
    $subcode4[]=$row['subject_code'];
	  $subname4[]=$row['subject_name'];
  }
}

$queryexsub5="SELECT `semester`, `subject_name`, `subject_code`, `attdm1`, `attdm2`, `attdm3`, `attdm4` FROM `subject` WHERE Semester='5' ORDER BY FIELD(`subject_code`,'15cs51t','15cs52t','15cs53t','15cs53t','15cs54t','15cs55p','15cs56p','15cs57p')";
$resultexsub5 = mysqli_query($con, $queryexsub5);
$resultcheckexsub5 = mysqli_num_rows($resultexsub5);
if($resultcheckexsub5>0)
{
  while($row= mysqli_fetch_assoc($resultexsub5))
  {
    $subcode5[]=$row['subject_code'];
	  $subname5[]=$row['subject_name'];
  }
}

$queryexsub6="SELECT `semester`, `subject_name`, `subject_code`, `attdm1`, `attdm2`, `attdm3`, `attdm4` FROM `subject` WHERE Semester='6' ORDER BY FIELD(`subject_code`,'15cs61t','15cs62t','15cs63t','15cs64p','15cs65p')";
$resultexsub6 = mysqli_query($con, $queryexsub6);
$resultcheckexsub6 = mysqli_num_rows($resultexsub6);
if($resultcheckexsub6>0)
{
  while($row= mysqli_fetch_assoc($resultexsub6))
  {
    $subcode6[]=$row['subject_code'];
	  $subname6[]=$row['subject_name'];
  }
}


$queryex="SELECT `m1_external`, `applied_science_external`, `ceee_external`, `applied_science_lab_external`, `bcs_lab_external`, `be_lab_external` FROM `st_ma_2018_jun_1` WHERE reg_no='$regno'";
$resultex = mysqli_query($con, $queryex);
$resultcheckex = mysqli_num_rows($resultex);
if($resultcheckex>0)
{
  while($row= mysqli_fetch_assoc($resultex))
  {
    $m1ex=$row['m1_external'];
	  $apscex=$row['applied_science_external'];
	  $ceeeex=$row['ceee_external'];
	  $apsclabex=$row['applied_science_lab_external'];
	  $bcslabex=$row['bcs_lab_external'];
	  $belabex=$row['be_lab_external'];
  }
}

$queryex1="SELECT `m2_external`, `communication_skills_in_english_external`, `dcf_external`, `de_lab_external`, `web_design_lab_external`, `multimedia_lab_external` FROM `st_ma_2019_jan_2` WHERE reg_no='$regno'";
$resultex1 = mysqli_query($con, $queryex1);
$resultcheckex1 = mysqli_num_rows($resultex1);
if($resultcheckex1>0)
{
  while($row= mysqli_fetch_assoc($resultex1))
  {
    $m2ex=$row['m2_external'];
	  $engex=$row['communication_skills_in_english_external'];
	  $dcfex=$row['dcf_external'];
	  $delabex=$row['de_lab_external'];
	  $bwebex=$row['web_design_lab_external'];
	  $mmlabex=$row['multimedia_lab_external'];
  }
}

$queryex3="SELECT `prog_with_C_external`, `CO_external`, `dbms_external`, `CN_external`, `prog_with_C_lab_external`, `dbms_and_gui_lab_external`, `network_admin_lab_external` FROM `st_ma_2018_jun_3` WHERE reg_no='$regno'";
$resultex3 = mysqli_query($con, $queryex3);
$resultcheckex3 = mysqli_num_rows($resultex3);
if($resultcheckex3>0)
{
  while($row= mysqli_fetch_assoc($resultex3))
  {
    $cex=$row['prog_with_C_external'];
	  $coex=$row['CO_external'];
	  $dbex=$row['dbms_external'];
	  $cnex=$row['CN_external'];
	  $clabex=$row['prog_with_C_lab_external'];
    $dblabex=$row['dbms_and_gui_lab_external'];
    $naex=$row['network_admin_lab_external'];
  }
}

$queryex4="SELECT `DS_using_C_external`, `OOP_with_java_external`, `OS_external`, `PE_and_IC_external`, `DS_lab_external`, `OOP_with_java_lab_external`, `linux_lab_external`, `kannada` FROM `st_ma_2019_jan_4` WHERE reg_no='$regno'";
$resultex4 = mysqli_query($con, $queryex4);
$resultcheckex4 = mysqli_num_rows($resultex4);
if($resultcheckex4>0)
{
  while($row= mysqli_fetch_assoc($resultex4))
  {
    $dsex=$row['DS_using_C_external'];
	  $javaex=$row['OOP_with_java_external'];
	  $osex=$row['OS_external'];
	  $peex=$row['PE_and_IC_external'];
	  $dslabex=$row['DS_lab_external'];
    $javalabex=$row['OOP_with_java_lab_external'];
    $linuxes=$row['linux_lab_external'];
    $kanex=$row['kannada'];
  }
}
$queryex5="SELECT `SE_external`, `web_prog_external`, `ada_external`, `GC_external`, `web_prog_lab_external`, `ada_lab_external`, `pp_eternal` FROM `st_ma_2018_jun_5` WHERE reg_no='$regno'";
$resultex5 = mysqli_query($con, $queryex5);
$resultcheckex5 = mysqli_num_rows($resultex5);
if($resultcheckex5>0)
{
  while($row= mysqli_fetch_assoc($resultex5))
  {
    $seex=$row['SE_external'];
	  $webpex=$row['web_prog_external'];
	  $adaex=$row['ada_external'];
	  $gcex=$row['GC_external'];
	  $webplabex=$row['web_prog_lab_external'];
    $adalabex=$row['ada_lab_external'];
    $ppex=$row['pp_eternal'];
  }
}
$queryex6="SELECT `ST_external`, `NS_management_external`, `CC_MC_IOT_ISM_external`, `ST_lab_external`, `NS_lab_external` FROM `st_ma_2019_jan_6` WHERE reg_no='$regno'";
$resultex6 = mysqli_query($con, $queryex6);
$resultcheckex6 = mysqli_num_rows($resultex6);
if($resultcheckex6>0)
{
  while($row= mysqli_fetch_assoc($resultex6))
  {
    $stex=$row['ST_external'];
	  $nsmex=$row['NS_management_external'];
	  $ccex=$row['CC_MC_IOT_ISM_external'];
	  $stlabex=$row['ST_lab_external'];
	  $nsmlabex=$row['NS_lab_external'];
  }
}


$query1ia="SELECT * FROM `sem1ia`  WHERE reg_no='$regno'";
$result1ia= mysqli_query($con, $query1ia);
$resultcheck1ia = mysqli_num_rows($result1ia);
if($resultcheck1ia>0)
{
  while($row= mysqli_fetch_assoc($result1ia))
  {
    $m11ia=$row['Engg_maths1'];
	  $apsc1ia=$row['Science'];
	  $ceee1ia=$row['Ceee'];
	  $apsclab1ia=$row['Science_lab'];
	  $bcslab1ia=$row['Bcs_lab'];
	  $belab1ia=$row['Be_lab'];
  }
}

$query2ia="SELECT * FROM `sem2ia`  WHERE reg_no='$regno'";
$result2ia= mysqli_query($con, $query2ia);
$resultcheck2ia = mysqli_num_rows($result2ia);
if($resultcheck2ia>0)
{
  while($row= mysqli_fetch_assoc($result2ia))
  {
    $m22ia=$row['Engg_maths2'];
	  $eng2ia=$row['English'];
	  $dcf2ia=$row['Dcf'];
	  $delab2ia=$row['De_lab'];
	  $bweblab2ia=$row['Basic_web_design_lab'];
	  $mmlab2ia=$row['Multimedia_lab'];
  }
}

$query3ia="SELECT * FROM `sem3ia`  WHERE reg_no='$regno'";
$result3ia= mysqli_query($con, $query3ia);
$resultcheck3ia = mysqli_num_rows($result3ia);
if($resultcheck3ia>0)
{
  while($row= mysqli_fetch_assoc($result3ia))
  {
    $c3ia=$row['programming_with_c'];
	  $co3ia=$row['Computer_organisation'];
	  $db3ia=$row['Dbms'];
	  $cn3ia=$row['Computer_networks'];
	  $clab3ia=$row['C_lab'];
    $dblab3ia=$row['Dbms_lab'];
    $na3ia=$row['Networking_administration_lab'];
    $kan4ia=$row['kannada'];
  }
}

$query4ia="SELECT * FROM `sem4ia`  WHERE reg_no='$regno'";
$result4ia= mysqli_query($con, $query4ia);
$resultcheck4ia = mysqli_num_rows($result4ia);
if($resultcheck4ia>0)
{
  while($row= mysqli_fetch_assoc($result4ia))
  {
    $ds4ia=$row['Datastructure_using_c'];
	  $java4ia=$row['Oop_with_java'];
	  $os4ia=$row['Operating_system'];
	  $pe4ia=$row['Pe&ic'];
	  $dslab4ia=$row['ds_lab'];
    $javalab4ia=$row['Java_lab'];
    $linux4ia=$row['Linux_lab'];
  }
}

$query5ia="SELECT * FROM `sem5ia`  WHERE reg_no='$regno'";
$result5ia= mysqli_query($con, $query5ia);
$resultcheck5ia = mysqli_num_rows($result5ia);
if($resultcheck5ia>0)
{
  while($row= mysqli_fetch_assoc($result5ia))
  {
    $se5ia=$row['Software_engg'];
	  $web5ia=$row['Web_programming'];
	  $daa5ia=$row['Daa'];
	  $gc5ia=$row['Green_computing'];
	  $weblab5ia=$row['Web_lab'];
    $daalab5ia=$row['Daa_lab'];
    $pp5ia=$row['Professional_practice'];
  }
}

$query6ia="SELECT `CC`, `NSM`, `ST`, `NSM_lab`, `ST_lab` FROM `sem6ia` WHERE regno='$regno'";
$result6ia= mysqli_query($con, $query6ia);
$resultcheck6ia = mysqli_num_rows($result6ia);
if($resultcheck6ia>0)
{
  while($row= mysqli_fetch_assoc($result6ia))
  {
    $cc6ia=$row['CC'];
	  $nsm6ia=$row['NSM'];
	  $st6ia=$row['ST'];
	  $nsmlab6ia=$row['NSM_lab'];
	  $stlab6ia=$row['ST_lab'];
  }
}

switch($csem)
{
  case '1':
  {
    $querycasesub="SELECT `semester`, `subject_name`, `subject_code`, `attdm1`, `attdm2`, `attdm3`, `attdm4` FROM `subject` WHERE Semester='1' ORDER BY FIELD(`subject_code`,'15SC01M','15SC03S','15EC01T','15SC04P','15EC02P','15CS11P')";
    $resultcasesub = mysqli_query($con, $querycasesub);
    $resultcheckcasesub = mysqli_num_rows($resultcasesub);
    if($resultcheckcasesub>0)
    {
      while($row= mysqli_fetch_assoc($resultcasesub))
      {
        $subcodec[]=$row['subject_code'];
        $subnamec[]=$row['subject_name'];
        $attdm1[]=$row['attdm1'];
        $attdm2[]=$row['attdm2'];
        $attdm3[]=$row['attdm3'];
        $attdm4[]=$row['attdm4'];
      }
    }
      $queryintsem1="SELECT sem1internal1.`Engg_maths1` AS 'm11', sem1internal1.`Science` AS 'sci1', sem1internal1.`Ceee` AS 'ceee1', sem1internal1.`Be_lab` AS 'belab1', sem1internal1.`Science_lab` AS 'scilab1', sem1internal1.`Bcs_lab` AS 'bcslab1',sem1internal2.`Engg_maths1` AS 'm12', sem1internal2.`Science` AS 'sci2', sem1internal2.`Ceee` AS 'ceee2', sem1internal2.`Be_lab` AS 'belab2', sem1internal2.`Science_lab` AS 'scilab2', sem1internal2.`Bcs_lab` AS 'bcslab2',sem1internal3.`Engg_maths1` AS 'm13', sem1internal3.`Science` AS 'sci3', sem1internal3.`Ceee` AS 'ceee3', sem1internal3.`Be_lab` AS 'belab3', sem1internal3.`Science_lab` AS 'scilab3', sem1internal3.`Bcs_lab` AS 'bcslab3' FROM `sem1internal1` INNER JOIN `sem1internal2` ON sem1internal1.Reg_no=sem1internal2.Reg_no INNER JOIN `sem1internal3` ON sem1internal3.Reg_no=sem1internal2.Reg_no WHERE sem1internal1.Reg_no='$regno' && sem1internal2.Reg_no='$regno' && sem1internal3.Reg_no='$regno'";
      $resultintsem1= mysqli_query($con,$queryintsem1);
      $resultcheckintsem1= mysqli_num_rows($resultintsem1);
      if($resultcheckintsem1>0)
      {
        while($row= mysqli_fetch_assoc($resultintsem1))
        {
          $subt11=$row['m11'];
          $subt21=$row['sci1'];
          $subt31=$row['ceee1'];
          $subl11=$row['scilab1'];
          $subl21=$row['belab1'];
          $subl31=$row['bcslab1'];
          $subt12=$row['m12'];
          $subt22=$row['sci2'];
          $subt32=$row['ceee2'];
          $subl12=$row['scilab2'];
          $subl22=$row['belab2'];
          $subl32=$row['bcslab2'];
          $subt13=$row['m13'];
          $subt23=$row['sci3'];
          $subt33=$row['ceee3'];
          $subl13=$row['scilab3'];
          $subl23=$row['belab3'];
          $subl33=$row['bcslab3'];
        }
      }
      else
      echo "we're Facing a DataBase Error Code : int1sem1...";
  }
  break;
  case '2':
  {
    $querycasesub="SELECT `semester`, `subject_name`, `subject_code`, `attdm1`, `attdm2`, `attdm3`, `attdm4` FROM `subject` WHERE Semester='2' ORDER BY FIELD(`subject_code`,'15cs02m','15cp01e','15cs21t','15ec03p','15cs22p','15cs23p')";
    $resultcasesub = mysqli_query($con, $querycasesub);
    $resultcheckcasesub = mysqli_num_rows($resultcasesub);
    if($resultcheckcasesub>0)
    {
      while($row= mysqli_fetch_assoc($resultcasesub))
      {
        $subcodec[]=$row['subject_code'];
        $subnamec[]=$row['subject_name'];
        $attdm1[]=$row['attdm1'];
        $attdm2[]=$row['attdm2'];
        $attdm3[]=$row['attdm3'];
        $attdm4[]=$row['attdm4'];
      }
    }
      $queryintsem1="SELECT sem2internal1.`Engg_maths2` AS 'm21', sem2internal1.`English` AS 'eng1', sem2internal1.`Dcf`AS 'dcf1', sem2internal1.`De_lab` AS 'delab1', sem2internal1.`Basic_web_design_lab` AS 'bweblab1', sem2internal1.`Multimedia_lab` AS 'mmlab1',sem2internal2.`Engg_maths2` AS 'm22', sem2internal2.`English` AS 'eng2', sem2internal2.`Dcf`AS 'dcf2', sem2internal2.`De_lab` AS 'delab2', sem2internal2.`Basic_web_design_lab` AS 'bweblab2', sem2internal2.`Multimedia_lab` AS 'mmlab2',sem2internal3.`Engg_maths2` AS 'm23', sem2internal3.`English` AS 'eng3', sem2internal3.`Dcf`AS 'dcf3', sem2internal3.`De_lab` AS 'delab3', sem2internal3.`Basic_web_design_lab` AS 'bweblab3', sem2internal3.`Multimedia_lab` AS 'mmlab3' FROM `sem2internal1` INNER JOIN `sem2internal2` ON sem2internal1.Reg_no=sem2internal2.Reg_no INNER JOIN `sem2internal3` ON sem2internal3.Reg_no=sem2internal2.Reg_no WHERE sem2internal1.Reg_no='$regno' && sem2internal2.Reg_no='$regno' && sem2internal3.Reg_no='$regno'";
      $resultintsem1= mysqli_query($con,$queryintsem1);
      $resultcheckintsem1= mysqli_num_rows($resultintsem1);
      if($resultcheckintsem1>0)
      {
        while($row= mysqli_fetch_assoc($resultintsem1))
        {
          $subt11=$row['m21'];
          $subt21=$row['eng1'];
          $subt31=$row['dcf1'];
          $subl11=$row['delab1'];
          $subl21=$row['bweblab1'];
          $subl31=$row['mmlab1'];
          $subt12=$row['m22'];
          $subt22=$row['eng2'];
          $subt32=$row['dcf2'];
          $subl12=$row['delab2'];
          $subl22=$row['bweblab2'];
          $subl32=$row['mmlab2'];
          $subt13=$row['m23'];
          $subt23=$row['eng3'];
          $subt33=$row['dcf3'];
          $subl13=$row['delab3'];
          $subl23=$row['bweblab3'];
          $subl33=$row['mmlab3'];
        }
      }
  }
  break;
  case '3':
  {
    $querycasesub="SELECT `semester`, `subject_name`, `subject_code`, `attdm1`, `attdm2`, `attdm3`, `attdm4` FROM `subject` WHERE Semester='3' ORDER BY FIELD(`subject_code`,'15cs31t','15cs32t','15cs33t','15cs34t','15cs35p','15cs36p','15cs37p')";
    $resultcasesub = mysqli_query($con, $querycasesub);
    $resultcheckcasesub = mysqli_num_rows($resultcasesub);
    if($resultcheckcasesub>0)
    {
      while($row= mysqli_fetch_assoc($resultcasesub))
      {
        $subcodec[]=$row['subject_code'];
        $subnamec[]=$row['subject_name'];
        $attdm1[]=$row['attdm1'];
        $attdm2[]=$row['attdm2'];
        $attdm3[]=$row['attdm3'];
        $attdm4[]=$row['attdm4'];
      }
    }
      $queryintsem1="SELECT sem3internal1.`programming_with_c` AS 'c1', sem3internal1.`Computer_organisation` AS 'co1', sem3internal1.`Dbms` AS 'db1', sem3internal1.`Computer_networks` AS 'cn1', sem3internal1.`C_lab` AS 'clab1', sem3internal1.`Dbms_lab` AS 'dblab1', sem3internal1.`Networking_administration_lab` AS 'nalab1',sem3internal2.`programming_with_c` AS 'c2', sem3internal2.`Computer_organisation` AS 'co2', sem3internal2.`Dbms` AS 'db2', sem3internal2.`Computer_networks` AS 'cn2', sem3internal2.`C_lab` AS 'clab2', sem3internal2.`Dbms_lab` AS 'dblab2', sem3internal2.`Networking_administration_lab` AS 'nalab2',sem3internal3.`programming_with_c` AS 'c3', sem3internal3.`Computer_organisation` AS 'co3', sem3internal3.`Dbms` AS 'db3', sem3internal3.`Computer_networks` AS 'cn3', sem3internal3.`C_lab` AS 'clab3', sem3internal3.`Dbms_lab` AS 'dblab3', sem3internal3.`Networking_administration_lab` AS 'nalab3' FROM `sem3internal1` INNER JOIN `sem3internal2` ON sem3internal1.Reg_no=sem3internal2.Reg_no INNER JOIN `sem3internal3` ON sem3internal3.Reg_no=sem3internal2.Reg_no WHERE sem3internal1.Reg_no='$regno' && sem3internal2.Reg_no='$regno' && sem3internal3.Reg_no='$regno'; ";
      $resultintsem1= mysqli_query($con,$queryintsem1);
      $resultcheckintsem1= mysqli_num_rows($resultintsem1);
      if($resultcheckintsem1>0)
      {
        while($row= mysqli_fetch_assoc($resultintsem1))
        {
          $subt11=$row['c1'];
          $subt21=$row['co1'];
          $subt31=$row['db1'];
          $subt41=$row['cn1'];
          $subl11=$row['clab1'];
          $subl21=$row['dblab1'];
          $subl31=$row['nalab1'];
          $subt12=$row['c2'];
          $subt22=$row['co2'];
          $subt32=$row['db2'];
          $subt42=$row['cn2'];
          $subl12=$row['clab2'];
          $subl22=$row['dblab2'];
          $subl32=$row['nalab2'];
          $subt13=$row['c3'];
          $subt23=$row['co3'];
          $subt33=$row['db3'];
          $subt43=$row['cn3'];
          $subl13=$row['clab3'];
          $subl23=$row['dblab3'];
          $subl33=$row['nalab3'];
        }
      }
  }
  break;
  case '4':
  {

    $querycasesub="SELECT `semester`, `subject_name`, `subject_code`, `attdm1`, `attdm2`, `attdm3`, `attdm4` FROM `subject` WHERE Semester='4' ORDER BY FIELD(`subject_code`,'15cs41t','15cs42t','15cs43t','15cs44t','15cs45p','15cs46p','15cs47p','15KA4KT')";
    $resultcasesub = mysqli_query($con, $querycasesub);
    $resultcheckcasesub = mysqli_num_rows($resultcasesub);
    if($resultcheckcasesub>0)
    {
      while($row= mysqli_fetch_assoc($resultcasesub))
      {
        $subcodec[]=$row['subject_code'];
        $subnamec[]=$row['subject_name'];
        $attdm1[]=$row['attdm1'];
        $attdm2[]=$row['attdm2'];
        $attdm3[]=$row['attdm3'];
        $attdm4[]=$row['attdm4'];
      }
    }
    $queryintsem1="SELECT sem4internal1.`Datastructure_using_c` AS 'ds1', sem4internal1.`Oop_with_java` AS 'java1', sem4internal1.`Operating_system` AS 'os1', sem4internal1.`Pe&ic` AS 'pe1', sem4internal1.`ds_lab` AS 'dslab1', sem4internal1.`Java_lab` AS 'javalab1', sem4internal1.`Linux_lab` AS 'li1',sem4internal2.`Datastructure_using_c` AS 'ds2', sem4internal2.`Oop_with_java` AS 'java2', sem4internal2.`Operating_system` AS 'os2', sem4internal2.`Pe&ic` AS 'pe2', sem4internal2.`ds_lab` AS 'dslab2', sem4internal2.`Java_lab` AS 'javalab2', sem4internal2.`Linux_lab` AS 'li2',sem4internal3.`Datastructure_using_c` AS 'ds3', sem4internal3.`Oop_with_java` AS 'java3', sem4internal3.`Operating_system` AS 'os3', sem4internal3.`Pe&ic` AS 'pe3', sem4internal3.`ds_lab` AS 'dslab3', sem4internal3.`Java_lab` AS 'javalab3', sem4internal3.`Linux_lab` AS 'li3' FROM `sem4internal1` INNER JOIN `sem4internal2` ON sem4internal1.Reg_no=sem4internal2.Reg_no INNER JOIN `sem4internal3` ON sem4internal3.Reg_no=sem4internal2.Reg_no WHERE sem4internal1.Reg_no='$regno' && sem4internal2.Reg_no='$regno' && sem4internal3.Reg_no='$regno';";
      $resultintsem1= mysqli_query($con,$queryintsem1);
      $resultcheckintsem1= mysqli_num_rows($resultintsem1);
      if($resultcheckintsem1>0)
      {
        while($row= mysqli_fetch_assoc($resultintsem1))
        {
          $subt11=$row['ds1'];
          $subt21=$row['java1'];
          $subt31=$row['os1'];
          $subt41=$row['pe1'];
          $subl11=$row['dslab1'];
          $subl21=$row['javalab1'];
          $subl31=$row['li1'];
          $subt12=$row['ds2'];
          $subt22=$row['java2'];
          $subt32=$row['os2'];
          $subt42=$row['pe2'];
          $subl12=$row['dslab2'];
          $subl22=$row['javalab2'];
          $subl32=$row['li2'];
          $subt13=$row['ds3'];
          $subt23=$row['java3'];
          $subt33=$row['os3'];
          $subt43=$row['pe3'];
          $subl13=$row['dslab3'];
          $subl23=$row['javalab3'];
          $subl33=$row['li3'];
        }
      }
  }
  break;
  case '5':
  {
    $querycasesub="SELECT `semester`, `subject_name`, `subject_code`, `attdm1`, `attdm2`, `attdm3`, `attdm4` FROM `subject` WHERE Semester='5' ORDER BY FIELD(`subject_code`,'15cs51t','15cs52t','15cs53t','15cs53t','15cs54t','15cs55p','15cs56p','15cs57p')";
    $resultcasesub = mysqli_query($con, $querycasesub);
    $resultcheckcasesub = mysqli_num_rows($resultcasesub);
    if($resultcheckcasesub>0)
    {
      while($row= mysqli_fetch_assoc($resultcasesub))
      {
        $subcodec[]=$row['subject_code'];
        $subnamec[]=$row['subject_name'];
        $attdm1[]=$row['attdm1'];
        $attdm2[]=$row['attdm2'];
        $attdm3[]=$row['attdm3'];
        $attdm4[]=$row['attdm4'];
      }
    }
    $queryintsem1="SELECT sem5internal1.`Software_engg` AS 'se1', sem5internal1.`Web_programming` AS 'wp1', sem5internal1.`Daa` AS 'ada1', sem5internal1.`Green_computing` AS 'gc1', sem5internal1.`Web_lab` AS 'wplab1', sem5internal1.`Daa_lab` AS 'adalab1', sem5internal1.`Professional_practice` AS 'pplab1',sem5internal2.`Software_engg` AS 'se2', sem5internal2.`Web_programming` AS 'wp2', sem5internal2.`Daa` AS 'ada2', sem5internal2.`Green_computing` AS 'gc2', sem5internal2.`Web_lab` AS 'wplab2', sem5internal2.`Daa_lab` AS 'adalab2', sem5internal2.`Professional_practice` AS 'pplab2',sem5internal3.`Software_engg` AS 'se3', sem5internal3.`Web_programming` AS 'wp3', sem5internal3.`Daa` AS 'ada3', sem5internal3.`Green_computing` AS 'gc3', sem5internal3.`Web_lab` AS 'wplab3', sem5internal3.`Daa_lab` AS 'adalab3', sem5internal3.`Professional_practice` AS 'pplab3' FROM `sem5internal1` INNER JOIN `sem5internal2` ON sem5internal1.Reg_no=sem5internal2.Reg_no INNER JOIN `sem5internal3` ON sem5internal3.Reg_no=sem5internal2.Reg_no WHERE sem5internal1.Reg_no='$regno' && sem5internal2.Reg_no='$regno' && sem5internal3.Reg_no='$regno';";
      $resultintsem1= mysqli_query($con,$queryintsem1);
      $resultcheckintsem1= mysqli_num_rows($resultintsem1);
      if($resultcheckintsem1>0)
      {
        while($row= mysqli_fetch_assoc($resultintsem1))
        {
          $subt11=$row['se1'];
          $subt21=$row['wp1'];
          $subt31=$row['ada1'];
          $subt41=$row['gc1'];
          $subl11=$row['wplab1'];
          $subl21=$row['adalab1'];
          $subl31=$row['pplab1'];
          $subt12=$row['se2'];
          $subt22=$row['wp2'];
          $subt32=$row['ada2'];
          $subt42=$row['gc2'];
          $subl12=$row['wplab2'];
          $subl22=$row['adalab2'];
          $subl32=$row['pplab2'];
          $subt13=$row['se3'];
          $subt23=$row['wp3'];
          $subt33=$row['ada3'];
          $subt43=$row['gc3'];
          $subl13=$row['wplab3'];
          $subl23=$row['adalab3'];
          $subl33=$row['pplab3'];
        }
      }
  }
  break;
  case '6':
  {
    $querycasesub="SELECT `semester`, `subject_name`, `subject_code`, `attdm1`, `attdm2`, `attdm3`, `attdm4` FROM `subject` WHERE Semester='6' ORDER BY FIELD(`subject_code`,'15cs61t','15cs62t','15cs63t','15cs64p','15cs65p')";
    $resultcasesub = mysqli_query($con, $querycasesub);
    $resultcheckcasesub = mysqli_num_rows($resultcasesub);
    if($resultcheckcasesub>0)
    {
      while($row= mysqli_fetch_assoc($resultcasesub))
      {
        $subcodec[]=$row['subject_code'];
        $subnamec[]=$row['subject_name'];
        $attdm1[]=$row['attdm1'];
        $attdm2[]=$row['attdm2'];
        $attdm3[]=$row['attdm3'];
        $attdm4[]=$row['attdm4'];
      }
    }

    $queryintsem1="SELECT sem6internal1.`CC` AS 'cc1', sem6internal1.`NSM` AS 'nsm1', sem6internal1.`ST` AS 'st1', sem6internal1.`NSM_lab` AS 'namlab1', sem6internal1.`ST_lab` AS 'stlab1',sem6internal2.`CC` AS 'cc2', sem6internal2.`NSM` AS 'nsm2', sem6internal2.`ST` AS 'st2', sem6internal2.`NSM_lab` AS 'namlab2', sem6internal2.`ST_lab` AS 'stlab2',sem6internal3.`CC` AS 'cc3', sem6internal3.`NSM` AS 'nsm3', sem6internal3.`ST` AS 'st3', sem6internal3.`NSM_lab` AS 'namlab3', sem6internal3.`ST_lab` AS 'stlab3' FROM `sem6internal1` INNER JOIN `sem6internal2` ON sem6internal1.regno=sem6internal2.regno INNER JOIN `sem6internal3` ON sem6internal3.regno=sem6internal2.regno WHERE sem6internal1.regno='$regno' && sem6internal2.regno='$regno' && sem6internal3.regno='$regno';";
      $resultintsem1= mysqli_query($con,$queryintsem1);
      $resultcheckintsem1= mysqli_num_rows($resultintsem1);
      if($resultcheckintsem1>0)
      {
        while($row= mysqli_fetch_assoc($resultintsem1))
        {
          $subt11=$row['cc1'];
          $subt21=$row['nsm1'];
          $subt31=$row['st1'];
          $subl11=$row['namlab1'];
          $subl21=$row['stlab1'];
          $subt12=$row['cc2'];
          $subt22=$row['nsm2'];
          $subt32=$row['st2'];
          $subl12=$row['namlab2'];
          $subl22=$row['stlab2'];
          $subt13=$row['cc3'];
          $subt23=$row['nsm3'];
          $subt33=$row['st3'];
          $subl13=$row['namlab3'];
          $subl23=$row['stlab3'];
        }
      }
  }
  break;
  default :
  echo "Something Went Wrong. Please Try Agian :|";
  break;
}

switch($csem)
{
  case '1':
    {
      $queryattdcase="SELECT sem1attdm1.`maths_1` AS 'm11', sem1attdm1.`applied_science` AS 'apsc1', sem1attdm1.`Ceee` AS 'ceee1', sem1attdm1.`Science_lab` AS 'sclab1', sem1attdm1.`Be_lab`AS 'belab1', sem1attdm1.`Bcs_lab` AS 'bcs1',sem1attdm2.`maths_1` AS 'm12', sem1attdm2.`applied_science` AS 'apsc2', sem1attdm2.`Ceee` AS 'ceee2', sem1attdm2.`Science_lab` AS 'sclab2', sem1attdm2.`Be_lab`AS 'belab2', sem1attdm2.`Bcs_lab` AS 'bcs2',sem1attdm3.`maths_1` AS 'm13', sem1attdm3.`applied_science` AS 'apsc3', sem1attdm3.`Ceee` AS 'ceee3', sem1attdm3.`Science_lab` AS 'sclab3', sem1attdm3.`Be_lab`AS 'belab3', sem1attdm3.`Bcs_lab` AS 'bcs3',sem1attdm4.`maths_1` AS 'm14', sem1attdm4.`applied_science` AS 'apsc4', sem1attdm4.`Ceee` AS 'ceee4', sem1attdm4.`Science_lab` AS 'sclab4', sem1attdm4.`Be_lab`AS 'belab4', sem1attdm4.`Bcs_lab` AS 'bcs4' FROM `sem1attdm1` INNER JOIN `sem1attdm2` ON sem1attdm1.reg_no=sem1attdm2.reg_no INNER JOIN `sem1attdm3` ON sem1attdm3.reg_no=sem1attdm2.reg_no INNER JOIN `sem1attdm4` ON sem1attdm4.reg_no=sem1attdm3.reg_no WHERE sem1attdm1.reg_no='$regno' && sem1attdm2.reg_no='$regno' && sem1attdm3.reg_no='$regno' && sem1attdm4.reg_no='$regno'";
      $resultattdcase= mysqli_query($con,$queryattdcase);
      $resultcheckattdcase= mysqli_num_rows($resultattdcase);
      if($resultcheckattdcase>0)
      {
        while($row= mysqli_fetch_assoc($resultattdcase))
        {
          $adt11=$row['m11'];
          $adt21=$row['apsc1'];
          $adt31=$row['ceee1'];
          $adl11=$row['sclab1'];
          $adl21=$row['belab1'];
          $adl31=$row['bcs1'];
          $adt12=$row['m12'];
          $adt22=$row['apsc2'];
          $adt32=$row['ceee2'];
          $adl12=$row['sclab2'];
          $adl22=$row['belab2'];
          $adl32=$row['bcs2'];
          $adt13=$row['m13'];
          $adt23=$row['apsc3'];
          $adt33=$row['ceee3'];
          $adl13=$row['sclab3'];
          $adl23=$row['belab3'];
          $adl33=$row['bcs3'];
          $adt14=$row['m14'];
          $adt24=$row['apsc4'];
          $adt34=$row['ceee4'];
          $adl14=$row['sclab4'];
          $adl24=$row['belab4'];
          $adl34=$row['bcs4'];
        }
      }
    }
  break;
  case '2':
    {
      $queryattdcase="SELECT sem2attdm1.`maths_2` AS 'm21', sem2attdm1.`english` AS 'eng1', sem2attdm1.`dcf` AS 'dcf1', sem2attdm1.`de_lab` AS 'delab1', sem2attdm1.`basic_web_lab` AS 'bcs1', sem2attdm1.`multimedia_lab`AS 'mm1',sem2attdm2.`maths_2` AS 'm22', sem2attdm2.`english` AS 'eng2', sem2attdm2.`dcf` AS 'dcf2', sem2attdm2.`de_lab` AS 'delab2', sem2attdm2.`basic_web_lab` AS 'bcs2', sem2attdm2.`multimedia_lab`AS 'mm2',sem2attdm3.`maths_2` AS 'm23', sem2attdm3.`english` AS 'eng3', sem2attdm3.`dcf` AS 'dcf3', sem2attdm3.`de_lab` AS 'delab3', sem2attdm3.`basic_web_lab` AS 'bcs3', sem2attdm3.`multimedia_lab`AS 'mm3',sem2attdm4.`maths_2` AS 'm24', sem2attdm4.`english` AS 'eng4', sem2attdm4.`dcf` AS 'dcf4', sem2attdm4.`de_lab` AS 'delab4', sem2attdm4.`basic_web_lab` AS 'bcs4', sem2attdm4.`multimedia_lab`AS 'mm4' FROM `sem2attdm1` INNER JOIN `sem2attdm2` ON sem2attdm1.reg_no=sem2attdm2.reg_no INNER JOIN `sem2attdm3` ON sem2attdm3.reg_no=sem2attdm2.reg_no INNER JOIN `sem2attdm4` ON sem2attdm4.reg_no=sem2attdm4.reg_no WHERE sem2attdm1.reg_no='$regno' && sem2attdm2.reg_no='$regno' && sem2attdm3.reg_no='$regno' && sem2attdm4.reg_no='$regno'";
      $resultattdcase= mysqli_query($con,$queryattdcase);
      $resultcheckattdcase= mysqli_num_rows($resultattdcase);
      if($resultcheckattdcase>0)
      {
        while($row= mysqli_fetch_assoc($resultattdcase))
        {
          $adt11=$row['m21'];
          $adt21=$row['eng1'];
          $adt31=$row['dcf1'];
          $adl11=$row['delab1'];
          $adl21=$row['bcs1'];
          $adl31=$row['mm1'];
          $adt12=$row['m22'];
          $adt22=$row['eng2'];
          $adt32=$row['dcf2'];
          $adl12=$row['delab2'];
          $adl22=$row['bcs2'];
          $adl32=$row['mm2'];
          $adt13=$row['m23'];
          $adt23=$row['eng3'];
          $adt33=$row['dcf3'];
          $adl13=$row['delab3'];
          $adl23=$row['bcs3'];
          $adl33=$row['mm3'];
          $adt14=$row['m24'];
          $adt24=$row['eng4'];
          $adt34=$row['dcf4'];
          $adl14=$row['delab4'];
          $adl24=$row['bcs4'];
          $adl34=$row['mm4'];


        }
      }
    }
  break;
  case '3':
  {
    $queryattdcase="SELECT sem3attdm1.`prog_with_c` AS 'c1', sem3attdm1.`co` AS 'co1', sem3attdm1.`dbms` AS 'db1', sem3attdm1.`cn` AS 'cn1', sem3attdm1.`c_lab` AS 'cl1', sem3attdm1.`dbms_lab` AS 'dbl1', sem3attdm1.`network_admin_lab` AS 'nal1',sem3attdm3.`prog_with_c` AS 'c3', sem3attdm3.`co` AS 'co3', sem3attdm3.`dbms` AS 'db3', sem3attdm3.`cn` AS 'cn3', sem3attdm3.`c_lab` AS 'cl3', sem3attdm3.`dbms_lab` AS 'dbl3', sem3attdm3.`network_admin_lab` AS 'nal3',sem3attdm2.`prog_with_c` AS 'c2', sem3attdm2.`co` AS 'co2', sem3attdm2.`dbms` AS 'db2', sem3attdm2.`cn` AS 'cn2', sem3attdm2.`c_lab` AS 'cl2', sem3attdm2.`dbms_lab` AS 'dbl2', sem3attdm2.`network_admin_lab` AS 'nal2',sem3attdm4.`prog_with_c` AS 'c4', sem3attdm4.`co` AS 'co4', sem3attdm4.`dbms` AS 'db4', sem3attdm4.`cn` AS 'cn4', sem3attdm4.`c_lab` AS 'cl4', sem3attdm4.`dbms_lab` AS 'dbl4', sem3attdm4.`network_admin_lab` AS 'nal4' FROM `sem3attdm1` INNER JOIN `sem3attdm2` ON sem3attdm1.reg_no=sem3attdm2.reg_no INNER JOIN `sem3attdm3` ON sem3attdm3.reg_no=sem3attdm2.reg_no INNER JOIN `sem3attdm4` ON sem3attdm4.reg_no=sem3attdm3.reg_no WHERE sem3attdm1.reg_no='$regno' && sem3attdm2.reg_no='$regno' && sem3attdm3.reg_no='$regno' && sem3attdm4.reg_no='$regno'";
      $resultattdcase= mysqli_query($con,$queryattdcase);
      $resultcheckattdcase= mysqli_num_rows($resultattdcase);
      if($resultcheckattdcase>0)
      {
        while($row= mysqli_fetch_assoc($resultattdcase))
        {
          $adt11=$row['c1'];
          $adt21=$row['co1'];
          $adt31=$row['db1'];
          $adt41=$row['cn1'];
          $adl11=$row['cl1'];
          $adl21=$row['dbl1'];
          $adl31=$row['nal1'];
          $adt12=$row['c2'];
          $adt22=$row['co2'];
          $adt32=$row['db2'];
          $adt42=$row['cn2'];
          $adl12=$row['cl2'];
          $adl22=$row['dbl2'];
          $adl32=$row['nal2'];
          $adt13=$row['c3'];
          $adt23=$row['co3'];
          $adt33=$row['db3'];
          $adt43=$row['cn3'];
          $adl13=$row['cl3'];
          $adl23=$row['dbl3'];
          $adl33=$row['nal3'];
          $adt14=$row['c4'];
          $adt24=$row['co4'];
          $adt34=$row['db4'];
          $adt44=$row['cn4'];
          $adl14=$row['cl4'];
          $adl24=$row['dbl4'];
          $adl34=$row['nal4'];

        }
      }
  }
  break;
  case '4':
  {
    $queryattdcase="SELECT sem4attdm1.`Ds` AS 'ds1', sem4attdm1.`oop_with_java` AS 'java1', sem4attdm1.`os` AS 'os1' , sem4attdm1.`pe&ic` AS 'pe1', sem4attdm1.`ds_lab` AS 'dsl1', sem4attdm1.`java_lab` AS'jl1' , sem4attdm1.`linux_lab` AS 'linux1',sem4attdm2.`Ds` AS 'ds2', sem4attdm2.`oop_with_java` AS 'java2', sem4attdm2.`os` AS 'os2' , sem4attdm2.`pe&ic` AS 'pe2', sem4attdm2.`ds_lab` AS 'dsl2', sem4attdm2.`java_lab` AS'jl2' , sem4attdm2.`linux_lab` AS 'linux2',sem4attdm3.`Ds` AS 'ds3', sem4attdm3.`oop_with_java` AS 'java3', sem4attdm3.`os` AS 'os3' , sem4attdm3.`pe&ic` AS 'pe3', sem4attdm3.`ds_lab` AS 'dsl3', sem4attdm3.`java_lab` AS'jl3' , sem4attdm3.`linux_lab` AS 'linux3',sem4attdm4.`Ds` AS 'ds4', sem4attdm4.`oop_with_java` AS 'java4', sem4attdm4.`os` AS 'os4' , sem4attdm4.`pe&ic` AS 'pe4', sem4attdm4.`ds_lab` AS 'dsl4', sem4attdm4.`java_lab` AS'jl4' , sem4attdm4.`linux_lab` AS 'linux4' FROM `sem4attdm1` INNER JOin `sem4attdm2` ON sem4attdm1.reg_no=sem4attdm2.reg_no INNER JOIN `sem4attdm3` ON sem4attdm3.reg_no=sem4attdm2.reg_no INNER JOIN `sem4attdm4` ON sem4attdm4.reg_no=sem4attdm3.reg_no WHERE sem4attdm1.reg_no='$regno' && sem4attdm2.reg_no='$regno' && sem4attdm3.reg_no='$regno' && sem4attdm4.reg_no='$regno'";
      $resultattdcase= mysqli_query($con,$queryattdcase);
      $resultcheckattdcase= mysqli_num_rows($resultattdcase);
      if($resultcheckattdcase>0)
      {
        while($row= mysqli_fetch_assoc($resultattdcase))
        {
          $adt11=$row['ds1'];
          $adt21=$row['java1'];
          $adt31=$row['os1'];
          $adt41=$row['pe1'];
          $adl11=$row['dsl1'];
          $adl21=$row['jl1'];
          $adl31=$row['linux1'];
          $adt12=$row['ds2'];
          $adt22=$row['java2'];
          $adt32=$row['os2'];
          $adt42=$row['pe2'];
          $adl12=$row['dsl2'];
          $adl22=$row['jl2'];
          $adl32=$row['linux2'];
          $adt13=$row['ds3'];
          $adt23=$row['java3'];
          $adt33=$row['os3'];
          $adt43=$row['pe3'];
          $adl13=$row['dsl3'];
          $adl23=$row['jl3'];
          $adl33=$row['linux3'];
          $adt14=$row['ds4'];
          $adt24=$row['java4'];
          $adt34=$row['os4'];
          $adt44=$row['pe4'];
          $adl14=$row['dsl4'];
          $adl24=$row['jl4'];
          $adl34=$row['linux4'];

        }
      }  
  }
  break;
  case '5':
  {
    $queryattdcase="SELECT sem5attdm1.`web_prog`AS 'wp1', sem5attdm1.`software_engg` AS 'se1', sem5attdm1.`daa` AS 'da1', sem5attdm1.`green_computing` AS'gc1', sem5attdm1.`web_lab` AS 'wpl1', sem5attdm1.`daa_lab` AS 'dal1', sem5attdm1.`pp_lab` AS 'pp1',sem5attdm2.`web_prog`AS 'wp2', sem5attdm2.`software_engg` AS 'se2', sem5attdm2.`daa` AS 'da2', sem5attdm2.`green_computing` AS'gc2', sem5attdm2.`web_lab` AS 'wpl2', sem5attdm2.`daa_lab` AS 'dal2', sem5attdm2.`pp_lab` AS 'pp2',sem5attdm3.`web_prog`AS 'wp3', sem5attdm3.`software_engg` AS 'se3', sem5attdm3.`daa` AS 'da3', sem5attdm3.`green_computing` AS'gc3', sem5attdm3.`web_lab` AS 'wpl3', sem5attdm3.`daa_lab` AS 'dal3', sem5attdm3.`pp_lab` AS 'pp3',sem5attdm4.`web_prog`AS 'wp4', sem5attdm4.`software_engg` AS 'se4', sem5attdm4.`daa` AS 'da4', sem5attdm4.`green_computing` AS'gc4', sem5attdm4.`web_lab` AS 'wpl4', sem5attdm4.`daa_lab` AS 'dal4', sem5attdm4.`pp_lab` AS 'pp4' FROM `sem5attdm1` INNER JOIN `sem5attdm2` ON sem5attdm1.reg_no=sem5attdm2.reg_no INNER JOIN `sem5attdm3` ON sem5attdm3.reg_no=sem5attdm2.reg_no INNER JOIN `sem5attdm4` ON sem5attdm4.reg_no=sem5attdm3.reg_no WHERE sem5attdm1.reg_no='$regno' && sem5attdm2.reg_no='$regno' && sem5attdm3.reg_no='$regno' && sem5attdm4.reg_no='$regno'";
      $resultattdcase= mysqli_query($con,$queryattdcase);
      $resultcheckattdcase= mysqli_num_rows($resultattdcase);
      if($resultcheckattdcase>0)
      {
        while($row= mysqli_fetch_assoc($resultattdcase))
        {
          $adt11=$row['wp1'];
          $adt21=$row['se1'];
          $adt31=$row['da1'];
          $adt41=$row['gc1'];
          $adl11=$row['wpl1'];
          $adl21=$row['dal1'];
          $adl31=$row['pp1'];
          $adt12=$row['wp2'];
          $adt22=$row['se2'];
          $adt32=$row['da2'];
          $adt42=$row['gc2'];
          $adl12=$row['wpl2'];
          $adl22=$row['dal2'];
          $adl32=$row['pp2'];
          $adt13=$row['wp3'];
          $adt23=$row['se3'];
          $adt33=$row['da3'];
          $adt43=$row['gc3'];
          $adl13=$row['wpl3'];
          $adl23=$row['dal3'];
          $adl33=$row['pp3'];
          $adt14=$row['wp4'];
          $adt24=$row['se4'];
          $adt34=$row['da4'];
          $adt44=$row['gc4'];
          $adl14=$row['wpl4'];
          $adl24=$row['dal4'];
          $adl34=$row['pp4'];

        }
      }  
  }
  break;
  case '6':
  {
    $queryattdcase="SELECT sem6attdm1.`st` AS 'st1', sem6attdm1.`nsm` AS 'nsm1', sem6attdm1.`cc` AS 'cc1', sem6attdm1.`st_lab` AS 'stl1', sem6attdm1.`nsm_lab` AS 'nsml1',sem6attdm2.`st` AS 'st2', sem6attdm2.`nsm` AS 'nsm2', sem6attdm2.`cc` AS 'cc2', sem6attdm2.`st_lab` AS 'stl2', sem6attdm2.`nsm_lab` AS 'nsml2',sem6attdm3.`st` AS 'st3', sem6attdm3.`nsm` AS 'nsm3', sem6attdm3.`cc` AS 'cc3', sem6attdm3.`st_lab` AS 'stl3', sem6attdm3.`nsm_lab` AS 'nsml3',sem6attdm4.`st` AS 'st4', sem6attdm4.`nsm` AS 'nsm4', sem6attdm4.`cc` AS 'cc4', sem6attdm4.`st_lab` AS 'stl4', sem6attdm4.`nsm_lab` AS 'nsml4' FROM `sem6attdm1` INNER JOIN `sem6attdm2` ON sem6attdm1.regno=sem6attdm2.regno INNER JOIN `sem6attdm3` ON sem6attdm3.regno=sem6attdm2.regno INNER JOIN `sem6attdm4` ON sem6attdm4.regno=sem6attdm3.regno WHERE sem6attdm1.regno='$regno' && sem6attdm2.regno='$regno' && sem6attdm3.regno='$regno' && sem6attdm4.regno='$regno'";
      $resultattdcase= mysqli_query($con,$queryattdcase);
      $resultcheckattdcase= mysqli_num_rows($resultattdcase);
      if($resultcheckattdcase>0)
      {
        while($row= mysqli_fetch_assoc($resultattdcase))
        {
          $adt11=$row['st1'];
          $adt21=$row['nsm1'];
          $adt31=$row['cc1'];
          $adl11=$row['stl1'];
          $adl21=$row['nsml1'];
          $adt12=$row['st2'];
          $adt22=$row['nsm2'];
          $adt32=$row['cc2'];
          $adl12=$row['stl2'];
          $adl22=$row['nsml2'];
          $adt13=$row['st3'];
          $adt23=$row['nsm3'];
          $adt33=$row['cc3'];
          $adl13=$row['stl3'];
          $adl23=$row['nsml3'];
          $adt14=$row['st4'];
          $adt24=$row['nsm4'];
          $adt34=$row['cc4'];
          $adl14=$row['stl4'];
          $adl24=$row['nsml4'];
        }
      }   
  }
  break;
  default:
  echo "Something Went Wrong. Please Try Agian :|";
  break;
}

?>
<html>
<head>
<title>STUDENT - MIS</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<style>
	.navbar-inverse {
	background-color:#1E1C1C;
     }
	 .td{
		 color:#1E1C1C;
	 }

   th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}
</style>
  <script>
function myFunction() {
  window.print();
}
</script>
 <script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-desktop',
            	message: "Welcome to <b>STUDENT M.I.S</b>"

            },{
                type: 'success',
                timer: 2500
            });

    	});
	</script>
<style>


.container {
  max-width: 500px;
}

.table>tbody>tr.active>td,
.table>tbody>tr.active>th,
.table>tbody>tr>td.active,
.table>tbody>tr>th.active,
.table>tfoot>tr.active>td,
.table>tfoot>tr.active>th,
.table>tfoot>tr>td.active,
.table>tfoot>tr>th.active,
.table>thead>tr.active>td,
.table>thead>tr.active>th,
.table>thead>tr>td.active,
.table>thead>tr>th.active {
  background-color: #fff;
}

.table-bordered > tbody > tr > td,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > td,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > thead > tr > th {
  border-color: #e4e5e7;
}

.table tr.header {
  font-weight: bold;
  background-color: #fff;
  cursor: pointer;
  -webkit-user-select: none;
  /* Chrome all / Safari all */
  -moz-user-select: none;
  /* Firefox all */
  -ms-user-select: none;
  /* IE 10+ */
  user-select: none;
  /* Likely future */
}

.table tr:not(.header) {
  display: none;
}

.table .header td:after {
  content: "\002b";
  position: relative;
  top: 1px;
  display: inline-block;
  font-style: normal;
  font-weight: 400;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  float: right;
  color: #999;
  text-align: center;
  padding: 3px;
  transition: transform .25s linear;
  -webkit-transition: -webkit-transform .25s linear;
}

.table .header.active td:after {
  content: "\2212";
}
</style>
</head>
<body>
<img src="mis.png">
<p align="right" style="font-family: Verdana;"><b><a href="http://localhost/newtest/adminPanel/contact.html"><u>Report Here</u></a> If Your Data Is Incorrect..</b></p>
<br>
<!-----------------navigation bar------------------------->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/newtest/index.php">Home</a>
    </div>
	<ul class="nav navbar-nav navbar-right">
	  <li><a href="#" onclick="myFunction()"><span class="glyphicon glyphicon-print"></span> Print</a></li>
      <li><a href="http://localhost/newtest/student/student.php"><span class="glyphicon glyphicon-search"></span> Search Again</a></li>
    </ul>
  </div>
</nav>
<!-----------------navigation bar end------------------------->
<!----------------student profile------------------------->
<div class="row">
  <div class="col-xs-12 col-sm-6">
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Student Profile</strong>
	  </div>
      <div class="panel-body">
	  <div class="tab-content no-border padding-24">
				<div id="home" class="tab-pane in active">
					<div class="row">
						<div class="col-xs-12 col-sm-3 center">
							<span class="profile-picture">
								<img class="editable img-responsive" alt=" Avatar" id="avatar2" src="https://image.flaticon.com/icons/png/512/16/16480.png">
                <h4><?php print("$regno");?></h4>
              </span>
							<div class="space space-4"></div>
						</div><!-- /.col -->

						<div class="col-xs-12 col-sm-6">
							<h4 class="blue">
								<span class="middle"><?php print("$name");?><br>Sem : <?php print("$csem");?></span><br>
                
								<span class="label label-purple arrowed-in-right">
									<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
									online
								</span>
							</h4>


                <div class="profile-user-info">
								<div class="profile-info-row">
									<div class="profile-info-name"> DOB </div>
									<div class="profile-info-value">
										<span><?php print("$DOB");?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Email </div>
									<div class="profile-info-value">
										<i class="fa fa-map-marker light-orange bigger-110"></i>
										<span><?php print("$email");?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Phone </div>

									<div class="profile-info-value">
										<span><?php print("$mob");?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Father name</div>
									<div class="profile-info-value">
										<span><?php print("$fn");?></span>
									</div>
								</div>

                <div class="profile-info-row">
									<div class="profile-info-name"> Father phone</div>
									<div class="profile-info-value">
										<span><?php print("$fnum");?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Year of Admission </div>

									<div class="profile-info-value">
										<span><?php print("$Yearofadm");?></span>
									</div>
								</div>
							</div>
	  </div>
  </div>
  </div>
</div>
</div>
</div>
</div>
<!-----------------student profile end------------------------->

<!-----sem wise result---------------------------->
<div class="col-xs-12 col-sm-6">
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Semester Result of <?php print("$name");?></strong></div>
      <div class="panel-body">
      <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel">
                                            <div class="panel-heading" role="tab" id="headingOne_1">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
                                                    <strong>Sem 1 </strong>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
                                                <div class="panel-body">
                                                <center>
                                                <table border="1.0">
        <thead>
            <tr>
                <th>Subject </th>
                <th> Subject Code </th>
                <th> Obtained <br>Marks </th>
                <th> Internal<br> Marks </th>
                <th> Grand Total </th>
			        	<th>Result </th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td><?php print("$subname[0]");?></td>
                <td><?php print("$subcode[0]");?></td>
                <td><?php if($csem>=2)
                print("$bcslabex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=2)
                print("$bcslab1ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=2)
                print("$bcslabex"+"$bcslab1ia");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname[1]");?></td>
                <td><?php print("$subcode[1]");?></td>
                <td><?php if($csem>=2)
                print("$ceeeex");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                print("$ceee1ia");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                print("$ceee1ia"+"$ceeeex");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                echo "pass";
                else
                echo "-----";
                ?></td>
            </tr>
            <tr>
                <td><?php print("$subname[2]");?></td>
                <td><?php print("$subcode[2]");?></td>
                <td><?php if($csem>=2)
                print("$belabex");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                print("$belab1ia");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                print("$belab1ia"+"$belabex");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                echo "pass";
                else
                echo "-----";
                ?></td>
            </tr>
            <tr>
                <td><?php print("$subname[3]");?></td>
                <td><?php print("$subcode[3]");?></td>
                <td><?php if($csem>=2)
                print("$m1ex");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                print("$m11ia");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                print("$m11ia"+"$m1ex");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                echo "pass";
                else
                echo "-----";
                ?></td>
            </tr>
            <tr>
                <td><?php print("$subname[4]");?></td>
                <td><?php print("$subcode[4]");?></td>
                <td><?php if($csem>=2)
                print("$apscex");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                print("$apsc1ia");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                print("$apsc1ia"+"$apscex");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                echo "pass";
                else
                echo "-----";
                ?></td>
            </tr>
            <tr>
                <td><?php print("$subname[5]");?></td>
                <td><?php print("$subcode[5]");?></td>
                <td><?php if($csem>=2)
                print("$apsclabex");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                print("$apsclab1ia");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                print("$apsclab1ia"+"$apsclabex");
                else
                  echo "-----";?></td>
                <td><?php if($csem>=2)
                echo "pass";
                else
                echo "-----";
                ?></td>
            </tr>
		</tbody>
    </table>
</center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel">
                                            <div class="panel-heading" role="tab" id="headingTwo_1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
                                                       aria-controls="collapseTwo_1">
                                                       <strong>Sem 2 </strong>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
                                                <div class="panel-body">
                                                <center>
                                                <table border="1.0">
        <thead>
            <tr>
                <th>Subject </th>
                <th> Subject Code </th>
                <th> Obtained <br>Marks </th>
                <th> Internal<br> Marks </th>
                <th> Grand Total </th>
			        	<th>Result </th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td><?php print("$subname2[0]");?></td>
                <td><?php print("$subcode2[0]");?></td>
                <td><?php if($csem>=3)
                print("$engex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                print("$eng2ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                print("$engex"+"$eng2ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname2[1]");?></td>
                <td><?php print("$subcode2[1]");?></td>
                <td><?php if($csem>=3)
                print("$m2ex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                print("$m22ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                print("$m2ex"+"$m22ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname2[2]");?></td>
                <td><?php print("$subcode2[2]");?></td>
                <td><?php if($csem>=3)
                print("$dcfex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                print("$dcf2ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                print("$dcfex"+"$dcf2ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname2[3]");?></td>
                <td><?php print("$subcode2[3]");?></td>
                <td><?php if($csem>=3)
                print("$bwebex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                print("$bweblab2ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                print("$bwebex"+"$bweblab2ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname2[4]");?></td>
                <td><?php print("$subcode2[4]");?></td>
                <td><?php if($csem>=3)
                print("$mmlabex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                print("$mmlab2ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                print("$mmlabex"+"$mmlab2ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname2[5]");?></td>
                <td><?php print("$subcode2[5]");?></td>
                <td><?php if($csem>=3)
                print("$delabex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                print("$delab2ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                print("$delabex"+"$delab2ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=3)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
		</tbody>
    </table>
</center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel">
                                            <div class="panel-heading" role="tab" id="headingTwo_1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false"
                                                       aria-controls="collapseThree_1">
                                                       <strong>Sem 3 </strong>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
                                                <div class="panel-body">
                                                <center>
                                                <table border="1.0">
        <thead>
            <tr>
                <th>Subject </th>
                <th> Subject Code </th>
                <th> Obtained <br>Marks </th>
                <th> Internal<br> Marks </th>
                <th> Grand Total </th>
			        	<th>Result </th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td><?php print("$subname3[0]");?></td>
                <td><?php print("$subcode3[0]");?></td>
                <td><?php if($csem>=4)
                print("$cex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                print("$c3ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                print("$cex"+"$c3ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname3[1]");?></td>
                <td><?php print("$subcode3[1]");?></td>
                <td><?php if($csem>=4)
                print("$coex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                print("$co3ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                print("$coex"+"$co3ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname3[2]");?></td>
                <td><?php print("$subcode3[2]");?></td>
                <td><?php if($csem>=4)
                print("$dbex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                print("$db3ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                print("$dbex"+"$db3ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname3[3]");?></td>
                <td><?php print("$subcode3[3]");?></td>
                <td><?php if($csem>=4)
                print("$cnex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                print("$cn3ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                print("$cnex"+"$cn3ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname3[4]");?></td>
                <td><?php print("$subcode3[4]");?></td>
                <td><?php if($csem>=4)
                print("$clabex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                print("$clab3ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                print("$clabex"+"$clab3ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname3[5]");?></td>
                <td><?php print("$subcode3[5]");?></td>
                <td><?php if($csem>=4)
                print("$dblabex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                print("$dblab3ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                print("$dblabex"+"$dblab3ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname3[6]");?></td>
                <td><?php print("$subcode3[6]");?></td>
                <td><?php if($csem>=4)
                print("$nsmlabex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                print("$na3ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                print("$nsmlabex"+"$na3ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=4)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
		</tbody>
    </table>
</center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel">
                                            <div class="panel-heading" role="tab" id="headingFour_1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseFour_1" aria-expanded="false"
                                                       aria-controls="collapseThree_1">
                                                       <strong>Sem 4 </strong>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_1">
                                                <div class="panel-body">
                                                <center>
                                                <table border="1.0">
        <thead>
            <tr>
                <th>Subject </th>
                <th> Subject Code </th>
                <th> Obtained <br>Marks </th>
                <th> Internal<br> Marks </th>
                <th> Grand Total </th>
			        	<th>Result </th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td><?php print("$subname4[0]");?></td>
                <td><?php print("$subcode4[0]");?></td>
                <td><?php if($csem>=5)
                print("$kanex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$kan4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$kanex"+"$kan4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                echo "pass";
                else
                echo "-----";?></td>
        </tr>
        <tr>
                <td><?php print("$subname4[1]");?></td>
                <td><?php print("$subcode4[1]");?></td>
                <td><?php if($csem>=5)
                print("$dsex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$ds4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$dsex"+"$ds4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname4[2]");?></td>
                <td><?php print("$subcode4[2]");?></td>
                <td><?php if($csem>=5)
                print("$javaex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$java4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$javaex"+"$java4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname4[3]");?></td>
                <td><?php print("$subcode4[3]");?></td>
                <td><?php if($csem>=5)
                print("$osex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$os4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$osex"+"$os4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname4[4]");?></td>
                <td><?php print("$subcode4[4]");?></td>
                <td><?php if($csem>=5)
                print("$peex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$pe4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$peex"+"$pe4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname4[5]");?></td>
                <td><?php print("$subcode4[5]");?></td>
                <td><?php if($csem>=5)
                print("$dslabex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$dslab4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$dslabex"+"$dslab4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname4[6]");?></td>
                <td><?php print("$subcode4[6]");?></td>
                <td><?php if($csem>=5)
                print("$javalabex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$javalab4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$javalabex"+"$javalab4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname4[7]");?></td>
                <td><?php print("$subcode4[7]");?></td>
                <td><?php if($csem>=5)
                print("$linuxes");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$linux4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                print("$linuxes"+"$linux4ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=5)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
		</tbody>
    </table>
</center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel">
                                            <div class="panel-heading" role="tab" id="headingFive_1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseFive_1" aria-expanded="false"
                                                       aria-controls="collapseFive_1">
                                                       <strong>Sem 5 </strong>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFive_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive_1">
                                                <div class="panel-body">
                                                <center>
                                                <table border="1.0">
        <thead>
            <tr>
                <th>Subject </th>
                <th> Subject Code </th>
                <th> Obtained <br>Marks </th>
                <th> Internal<br> Marks </th>
                <th> Grand Total </th>
			        	<th>Result </th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td><?php print("$subname5[0]");?></td>
                <td><?php print("$subcode5[0]");?></td>
                <td><?php if($csem>=6)
                print("$seex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                print("$se5ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                print("$seex"+"$se5ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                echo "pass";
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname5[1]");?></td>
                <td><?php print("$subcode5[1]");?></td>
                <td><?php if($csem>=6)
                print("$webpex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                print("$web5ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                print("$webpex"+"$web5ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                echo "pass";                 
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname5[2]");?></td>
                <td><?php print("$subcode5[2]");?></td>
                <td><?php if($csem>=6)
                print("$adaex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                print("$daa5ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                print("$adaex"+"$daa5ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                echo "pass";                 
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname5[3]");?></td>
                <td><?php print("$subcode5[3]");?></td>
                <td><?php if($csem>=6)
                print("$gcex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                print("$gc5ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                print("$gcex"+"$gc5ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                echo "pass";                 
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname5[4]");?></td>
                <td><?php print("$subcode5[4]");?></td>
                <td><?php if($csem>=6)
                print("$webplabex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                print("$weblab5ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                print("$webplabex"+"$weblab5ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                echo "pass";                 
                else
                echo "-----";?></td>
            </tr>
            <tr>
                <td><?php print("$subname5[5]");?></td>
                <td><?php print("$subcode5[5]");?></td>
                <td><?php if($csem>=6)
                print("$daalab5ia");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                print("$adalabex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                print("$daalab5ia"+"$adalabex");
                else
                echo "-----";?></td>
                <td><?php if($csem>=6)
                echo "pass";                 
                else
                echo "-----";?></td>
            </tr>
		</tbody>
    </table>
</center>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
</div>
</div>

</div>
</div>
<!-----------------semester result ends------------------------->
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Internals Overview Of <?php print("$name");?></strong>
	  </div>
      <div class="panel-body">
      <center>
      <table style="width : 1250px";>
        <thead>
            <tr>
                <th>Subject</th>
                <th>Subject Code</th>
                <th>Internal Max Marks</th>
                <th>1<sup>st</sup> Internals</th>
                <th>2<sup>nd</sup> Internals</th>
                <th>3<sup>rd</sup> Internals</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php if(isset($subnamec[0]))
            print("$subnamec[0]");
            else
            echo "----";?></td>
            <td><?php if(isset($subcodec[0]))
            print("$subcodec[0]");
            else
            echo "----";?></td>
            <td><center>20</center></td>
            <td><center><?php print("$subt11");?></center></td>
            <td><center><?php print("$subt12");?></center></td>
            <td><center><?php print("$subt13");?></center></td>
        </tr>
        <tr>
        <td><?php if(isset($subnamec[1]))
            print("$subnamec[1]");
            else
            echo "----";?></td>
            <td><?php if(isset($subcodec[1]))
            print("$subcodec[1]");
            else
            echo "----";?></td>
            <td><center>20</center></td>
            <td><center><?php print("$subt21");?></center></td>
            <td><center><?php print("$subt22");?></center></td>
            <td><center><?php print("$subt23");?></center></td>
        </tr>
        <tr>
        <td><?php if(isset($subnamec[2]))
            print("$subnamec[2]");
            else
            echo "----";?></td>
            <td><?php if(isset($subcodec[2]))
            print("$subcodec[2]");
            else
            echo "----";?></td>
            <td><center>20</center></td>
            <td><center><?php print("$subt31");?></center></td>
            <td><center><?php print("$subt32");?></center></td>
            <td><center><?php print("$subt33");?></center></td>
        </tr>
        <tr>
        <td><?php if(isset($subnamec[3]))
            print("$subnamec[3]");
            else
            echo "----";?></td>
            <td><?php if(isset($subcodec[3]))
            print("$subcodec[3]");
            else
            echo "----";?></td>
            <td><center>20</center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$subt41");
            else
            print("$subl11");?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$subt42");
            else
            print("$subl12");?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$subt43");
            else
            print("-----");?></center></td>
        </tr>
        <tr>
        <td><?php if(isset($subnamec[4]))
            print("$subnamec[4]");
            else
            echo "----";?></td>
            <td><?php if(isset($subcodec[4]))
            print("$subcodec[4]");
            else
            echo "----";?></td>
            <td><center>20</center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$subl11");
            else
            print("$subl21");?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$subl12");
            else
            print("$subl22");?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("-----");
            else
            print("------");?></center></td>
        </tr>
        <tr>
        <td><?php if(isset($subnamec[5]))
            print("$subnamec[5]");
            else
            echo "----";?></td>
            <td><?php if(isset($subcodec[5]))
            print("$subcodec[5]");
            else
            echo "----";?></td>
            <td><center>20</center></td>
            <td><center><?php 
            if($csem!='6')
            {
              if(($csem=='3') || ($csem=='4'))
                print("$subl21");
              else
                print("$subl31");
            }
            else
            echo "----";
            ?></center></td>
            <td><center><?php 
            if($csem!='6')
            {
              if(($csem=='3') || ($csem=='4'))
                print("$subl22");
              else
                print("$subl32");
            }
            else
            echo "----";
            ?></center></td>
            <td><center><?php 
            if($csem!='6')
            {
              if(($csem=='3') || ($csem=='4'))
                print("-----");
              else
                print("-----");
            }
            else
            echo "----";
            ?></center></td>
        </tr>
        <tr>
            <td><?php if(isset($subnamec[6]))
            print("$subnamec[6]");
            else
            echo "-----";?></td>
            <td><?php if(isset($subcodec[6]))
            print("$subcodec[6]");
            else
            echo "-----";?></td>
            <td><center>20</center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$subl31");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$subl32");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("-----");
            else
            echo "-----";?></center></td>
        </tr>
        <tr>
            <td><?php if(isset($subnamec[7]))
            print("$subnamec[7]");
            else
            echo "-----";?></td>
            <td><?php if(isset($subcodec[7]))
            print("$subcodec[7]");
            else
            echo "-----";?></td>
            <td><center>20</center></td>
            <td><center><?php if(($csem=='4'))
            print("$subl31");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='4'))
            print("$subl32");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='4'))
            print("------");
            else
            echo "-----";?></center></td>
        </tr>
        </tbody>
        </table>
        </center>
      </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-6">
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Internals Overview Of <?php print("$name");?></strong>
	  </div>
      <div class="panel-body">
      <div id="chart_div" style="width: 600px; height: 400px;"></div>
      </div>
      </div>
      </div>
      <div class="col-sm-6">
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Attendence Overview Of <?php print("$name");?></strong>
	  </div>
      <div class="panel-body">
      <div id="chart_div1" style="width: 600px; height: 400px;"></div>
      </div>
      </div>
      </div>
    </div>
    <div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Attendence Overview Of <?php print("$name");?></strong>
	  </div>
      <div class="panel-body">
      <table>
      <tr>
                <th>Subject</th>
                <th>Subject Code</th>
                <th><center>1<sup>st</sup> Month Total Attendence</center></th>
                <th><center>1<sup>st</sup> Month Obtained Attendence</center></th>
                <th><center>2<sup>nd</sup> Month Total Attendence</center></th>
                <th><center>2<sup>nd</sup> Month Obtained Attendence</center></th>
                <th><center>3<sup>rd</sup> Month Total Attendence</center></th>
                <th><center>3<sup>rd</sup> Month Obtained Attendence</center></th>
                <th><center>4<sup>th</sup> Month Total Attendence</center></th>
                <th><center>4<sup>th</sup> Month Obtained Attendence</center></th>
            </tr>
            <td><?php if(isset($subnamec[0]))
            print("$subnamec[0]");
            else
            echo "----";?></td>
            <td><?php if(isset($subcodec[0]))
            print("$subcodec[0]");
            else
            echo "----";?></td>
            <td><center><?php if(isset($attdm1[0]))
            print("$attdm1[0]");
            else
            echo "-----";?></center></td>
            <td><center><?php print("$adt11");?></center></td>
            <td><center><?php if(isset($attdm2[0]))
            print("$attdm2[0]");
            else
            echo "-----";?></center></td>
            <td><center><?php print("$adt12");?></center></td>
            <td><center><?php if(isset($attdm3[0]))
            print("$attdm3[0]");
            else
            echo "-----";?></center></td>
            <td><center><?php print("$adt13");?></center></td>
            <td><center><?php if(isset($attdm4[0]))
            print("$attdm4[0]");
            else
            echo "-----";?></center></td>
            <td><center><?php print("$adt14");?></center></td>

        </tr>
        <tr>
        <td><?php if(isset($subnamec[1]))
            print("$subnamec[1]");
            else
            echo "----";?></td>
            <td><?php if(isset($subcodec[1]))
            print("$subcodec[1]");
            else
            echo "----";?></td>
            <td><center><?php if(isset($attdm1[1]))
            print("$attdm1[1]");
            else
            echo "-----";?></center></td>
            <td><center><?php print("$adt21");?></center></td>
            <td><center><?php if(isset($attdm2[1]))
            print("$attdm2[1]");
            else
            echo "-----";?></center></td>
            <td><center><?php print("$adt22");?></center></td>
            <td><center><?php if(isset($attdm3[1]))
            print("$attdm3[1]");
            else
            echo "-----";?></center></td>
            <td><center><?php print("$adt23");?></center></td>
            <td><center><?php if(isset($attdm4[1]))
            print("$attdm4[1]");
            else
            echo "-----";?></center></td>
            <td><center><?php print("$adt24");?></center></td>
        </tr>
        <tr>
        <td><?php if(isset($subnamec[2]))
            print("$subnamec[2]");
            else
            echo "----";?></td>
            <td><?php if(isset($subcodec[2]))
            print("$subcodec[2]");
            else
            echo "----";?></td>
            <td><center><?php if(isset($attdm1[2]))
            print("$attdm1[2]");
            else
            echo "-----";?></center></td>
            <td><center><?php print("$adt31");?></center></td>
            <td><center><?php if(isset($attdm2[2]))
            print("$attdm2[2]");
            else
            echo "-----";?></center></td>
            <td><center><?php print("$adt32");?></center></td>
            <td><center><?php if(isset($attdm3[2]))
            print("$attdm3[2]");
            else
            echo "-----";?></center></td>
            <td><center><?php print("$adt33");?></center></td>
            <td><center><?php if(isset($attdm4[2]))
            print("$attdm4[2]");
            else
            echo "-----";?></center></td>
            <td><center><?php print("$adt34");?></center></td>
        </tr>
        <tr>
        <td><?php if(isset($subnamec[3]))
            print("$subnamec[3]");
            else
            echo "----";?></td>
            <td><?php if(isset($subcodec[3]))
            print("$subcodec[3]");
            else
            echo "----";?></td>
            <td><center><?php if(isset($attdm1[3]))
            print("$attdm1[3]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$adt41");
            else
            print("$adl11");?></center></td>
            <td><center><?php if(isset($attdm2[3]))
            print("$attdm2[3]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$adt42");
            else
            print("$adl12");?></center></td>
            <td><center><?php if(isset($attdm3[3]))
            print("$attdm3[3]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$adt43");
            else
            print("$adl13");?></center></td>
            <td><center><?php if(isset($attdm4[3]))
            print("$attdm4[3]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$adt44");
            else
            print("$adl14");?></center></td>
        </tr>
        <tr>
        <td><?php if(isset($subnamec[4]))
            print("$subnamec[4]");
            else
            echo "----";?></td>
            <td><?php if(isset($subcodec[4]))
            print("$subcodec[4]");
            else
            echo "----";?></td>
            <td><center><?php if(isset($attdm1[4]))
            print("$attdm1[4]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$adl11");
            else
            print("$adl21");?></center></td>
            <td><center><?php if(isset($attdm2[4]))
            print("$attdm2[4]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$adl12");
            else
            print("$adl22");?></center></td>
            <td><center><?php if(isset($attdm3[4]))
            print("$attdm3[4]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$adl13");
            else
            print("$adl23");?></center></td>
            <td><center><?php if(isset($attdm4[4]))
            print("$attdm4[4]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$adl14");
            else
            print("$adl24");?></center></td>
        </tr>
        <tr>
        <td><?php if(isset($subnamec[5]))
            print("$subnamec[5]");
            else
            echo "----";?></td>
            <td><?php if(isset($subcodec[5]))
            print("$subcodec[5]");
            else
            echo "----";?></td>
            <td><center><?php if(isset($attdm1[5]))
            print("$attdm1[5]");
            else
            echo "-----";?></center></td>
            <td><center><?php 
            if($csem!='6')
            {
              if(($csem=='3') || ($csem=='4'))
                print("$adl21");
              else
                print("$adl31");
            }
            else
            echo "----";
            ?></center></td>
            <td><center><?php if(isset($attdm2[5]))
            print("$attdm2[5]");
            else
            echo "-----";?></center></td>
            <td><center><?php 
            if($csem!='6')
            {
              if(($csem=='3') || ($csem=='4'))
                print("$adl22");
              else
                print("$adl32");
            }
            else
            echo "----";
            ?></center></td>
            <td><center><?php if(isset($attdm3[5]))
            print("$attdm3[5]");
            else
            echo "-----";?></center></td>
            <td><center><?php 
            if($csem!='6')
            {
              if(($csem=='3') || ($csem=='4'))
                print("$adl23");
              else
                print("$adl33");
            }
            else
            echo "----";
            ?></center></td>
            <td><center><?php if(isset($attdm4[5]))
            print("$attdm4[5]");
            else
            echo "";?></center></td>
            <td><center><?php 
            if($csem!='6')
            {
              if(($csem=='3') || ($csem=='4'))
                print("$adl24");
              else
                print("$adl34");
            }
            else
            echo "----";
            ?></center></td>
        </tr>
        <tr>
            <td><?php if(isset($subnamec[6]))
            print("$subnamec[6]");
            else
            echo "-----";?></td>
            <td><?php if(isset($subcodec[6]))
            print("$subcodec[6]");
            else
            echo "-----";?></td>
            <td><center><?php if(isset($attdm1[6]))
            print("$attdm1[6]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$adl31");
            else
            echo "-----";?></center></td>
            <td><center><?php if(isset($attdm2[6]))
            print("$attdm2[6]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$adl32");
            else
            echo "-----";?></center></td>
            <td><center><?php if(isset($attdm3[6]))
            print("$attdm3[6]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$adl33");
            else
            echo "-----";?></center></td>
            <td><center><?php if(isset($attdm4[6]))
            print("$attdm4[6]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='3') || ($csem=='4'))
            print("$adl34");
            else
            echo "-----";?></center></td>
        </tr>
        <tr>
            <td><?php if(isset($subnamec[7]))
            print("$subnamec[7]");
            else
            echo "-----";?></td>
            <td><?php if(isset($subcodec[7]))
            print("$subcodec[7]");
            else
            echo "-----";?></td>
            <td><center><?php if(isset($attdm1[7]))
            print("$attdm1[7]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='4'))
            print("$adl31");
            else
            echo "-----";?></center></td>
            <td><center><?php if(isset($attdm2[7]))
            print("$attdm2[7]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='4'))
            print("$adl32");
            else
            echo "-----";?></center></td>
            <td><center><?php if(isset($attdm3[7]))
            print("$attdm3[7]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='4'))
            print("$adl33");
            else
            echo "-----";?></center></td>
            <td><center><?php if(isset($attdm4[7]))
            print("$attdm4[7]");
            else
            echo "-----";?></center></td>
            <td><center><?php if(($csem=='4'))
            print("$adl34");
            else
            echo "-----";?></center></td>
        </tr>      
      </table>
      </div>
    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#internal').DataTable();
} );
</script>
<script>
$(document).ready(function() {
    $('#attendence').DataTable();
} );
</script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Internal 1', 'Internal 2', 'Internal 3'],
          ['<?php if(isset($subnamec[0]))
            print("$subnamec[0]");?>',  <?php print("$subt11");?>,      <?php print("$subt12");?>,         <?php print("$subt13");?>],
          ['<?php if(isset($subnamec[1]))
            print("$subnamec[1]");?>',  <?php print("$subt21");?>,      <?php print("$subt22");?>,         <?php print("$subt23");?>],
          ['<?php if(isset($subnamec[2]))
            print("$subnamec[2]");?>',  <?php print("$subt31");?>,      <?php print("$subt32");?>,        <?php print("$subt33");?>],
          ['<?php if(isset($subnamec[3]))
            print("$subnamec[3]");?>',  <?php if(($csem=='3') || ($csem=='4'))
            print("$subt41");
            else
            print("$subl11");?>,      <?php if(($csem=='3') || ($csem=='4'))
            print("$subt42");
            else
            print("$subl12");?>,        <?php if(($csem=='3') || ($csem=='4'))
            print("$subt43");
            else
            print("0");?>],
          ['<?php if(isset($subnamec[4]))
            print("$subnamec[4]");?>',  <?php if(($csem=='3') || ($csem=='4'))
            print("$subl11");
            else
            print("$subl21");?>,      <?php if(($csem=='3') || ($csem=='4'))
            print("$subl12");
            else
            print("$subl22");?>,        <?php if(($csem=='3') || ($csem=='4'))
            print("0");
            else
            print("0");?>],
          ['<?php if(isset($subnamec[5]))
            print("$subnamec[5]");
            else
            echo "----";?>',  <?php 
            if($csem!='6')
            {
              if(($csem=='3') || ($csem=='4'))
                print("$subl21");
              else
                print("$subl31");
            }
            else
            echo "0";
            ?>,      <?php 
            if($csem!='6')
            {
              if(($csem=='3') || ($csem=='4'))
                print("$subl22");
              else
                print("$subl32");
            }
            else
            echo "0";
            ?>,        <?php 
            if($csem!='6')
            {
              if(($csem=='3') || ($csem=='4'))
                print("0");
              else
                print("0");
            }
            else
            echo "0";
            ?>],
          ['<?php if(isset($subnamec[6]))
                  print("$subnamec[6]");
                  else
                             echo "----";?>',  <?php if(($csem=='3') || ($csem=='4'))
                             print("$subl31");
                             else
                             echo "0";?>,      <?php if(($csem=='3') || ($csem=='4'))
                             print("$subl32");
                             else
                             echo "0";?>,        <?php if(($csem=='3') || ($csem=='4'))
                             print("0");
                             else
                             echo "0";?>,
              ],
              ['<?php if(isset($subnamec[7]))
                  print("$subnamec[7]");
                  else
                             echo "----";?>',  <?php if(($csem=='4'))
                             print("$subl31");
                             else
                             echo "0";?>,      <?php if(($csem=='4'))
                             print("$subl32");
                             else
                             echo "0";?>,        <?php if(($csem=='4'))
                             print("0");
                             else
                             echo "0";?>,
              ]
        ]);

        var options = {
          hAxis: {title: 'Subjects'},
          seriesType: 'bars',
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Month 1', 'Month 2', 'Month 3', 'Month 4'],
          ['<?php if(isset($subnamec[0]))
            print("$subnamec[0]");?>',  <?php print("$adt11");?>,      <?php print("$adt12");?>,         <?php print("$adt13");?>,         <?php print("$adt14");?>],
          ['<?php if(isset($subnamec[1]))
            print("$subnamec[1]");?>',  <?php print("$adt21");?>,      <?php print("$adt22");?>,        <?php print("$adt23");?>,         <?php print("$adt24");?>],
          ['<?php if(isset($subnamec[2]))
            print("$subnamec[2]");?>',  <?php print("$adt31");?>,      <?php print("$adt32");?>,        <?php print("$adt33");?>,         <?php print("$adt34");?>],
          ['<?php if(isset($subnamec[3]))
            print("$subnamec[3]");?>',  <?php if(($csem=='3') || ($csem=='4'))
            print("$adt41");
            else
            print("$adl11");?>,      <?php if(($csem=='3') || ($csem=='4'))
            print("$adt42");
            else
            print("$adl12");?>,        <?php if(($csem=='3') || ($csem=='4'))
            print("$adt43");
            else
            print("$adl13");?>,         <?php if(($csem=='3') || ($csem=='4'))
            print("$adt44");
            else
            print("$adl14");?>],
          ['<?php if(isset($subnamec[4]))
            print("$subnamec[4]");?>',  <?php if(($csem=='3') || ($csem=='4'))
            print("$adl11");
            else
            print("$adl21");?>,      <?php if(($csem=='3') || ($csem=='4'))
            print("$adl12");
            else
            print("$adl22");?>,        <?php if(($csem=='3') || ($csem=='4'))
            print("$adl13");
            else
            print("$adl23");?>,         <?php if(($csem=='3') || ($csem=='4'))
            print("$adl14");
            else
            print("$adl24");?>],
          ['<?php if(isset($subnamec[5]))
            print("$subnamec[5]");
            else
            echo "----";?>',  <?php 
            if($csem!='6')
            {
              if(($csem=='3') || ($csem=='4'))
                print("$adl21");
              else
                print("$adl31");
            }
            else
            echo "0";
            ?>,      <?php 
            if($csem!='6')
            {
              if(($csem=='3') || ($csem=='4'))
                print("$adl22");
              else
                print("$adl32");
            }
            else
            echo "0";
            ?>,        <?php 
            if($csem!='6')
            {
              if(($csem=='3') || ($csem=='4'))
                print("$adl22");
              else
                print("$adl32");
            }
            else
            echo "0";
            ?>,         <?php 
            if($csem!='6')
            {
              if(($csem=='3') || ($csem=='4'))
                print("$adl24");
              else
                print("$adl34");
            }
            else
            echo "0";
            ?>],
          ['<?php if(isset($subnamec[6]))
                  print("$subnamec[6]");
                  else
                             echo "----";?>',  <?php if(($csem=='3') || ($csem=='4'))
                             print("$adl31");
                             else
                             echo "0";?>,      <?php if(($csem=='3') || ($csem=='4'))
                             print("$adl32");
                             else
                             echo "0";?>,        <?php if(($csem=='3') || ($csem=='4'))
                             print("$adl33");
                             else
                             echo "0";?>,         <?php if(($csem=='3') || ($csem=='4'))
                             print("$adl34");
                             else
                             echo "0";?>],
                              ['<?php if(isset($subnamec[7]))
                  print("$subnamec[7]");
                  else
                             echo "----";?>',  <?php if(($csem=='4'))
                             print("$adl31");
                             else
                             echo "0";?>,      <?php if(($csem=='4'))
                             print("$adl32");
                             else
                             echo "0";?>,        <?php if(($csem=='4'))
                             print("$adl33");
                             else
                             echo "0";?>,         <?php if(($csem=='4'))
                             print("$adl34");
                             else
                             echo "0";?>]
        ]);

        var options = {
          hAxis: {title: 'Subjects'},
          seriesType: 'bars',
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
      }
    </script>
    <?php include 'footer.php';?>
</body>
</html>
