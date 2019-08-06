<!DOCTYPE html>

<html>
<head>

<title>MIS - Home</title>

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="css/images/logo1.png" />


<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />


<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	<!--[if IE 6]>

<script src="js/DD_belatedPNG-min.js" type="text/javascript" charset="utf-8"></script>
	<![endif]-->



<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>

<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
</head>

<body>

<!-- Begin Wrapper -->
	<div id="wrapper">

<!-- Begin Header -->

<div id="header">

<body style="margin-bottom:80px;background-color: #c9bda7;
	background-image: url(css/images/templatemo_body.jpg);">
<div class="shell" style="margin-bottom:45px;">

<center><br><img src="http://4.bp.blogspot.com/-9AE9euNv3I8/T_2pyYyXZQI/AAAAAAAAADE/0-PQRPLYqhk/s1600/web.png">
</center>
</body>
<div class="cl">&nbsp;</div>


</div>

<!-- End Shell -->

</div>
		<!-- End Header -->

<!-- Begin Navigation -->

<div id="navigation">

<!-- Begin Shell -->

<div class="shell">

<ul>

<li ><a href="../index.php" title="home">Home</a></li>


<li><a href="http://localhost/newtest/student/student.php" title="student">Student</a>	</li>
</ul>
</div>
</li>
<li><a href="http://localhost/newtest/adminPanel/login.php" title="admin">Admin</a></li>

</ul>

<div class="cl">&nbsp;</div>

</div>
			<!-- End Shell -->

</div>
		<!-- End Navigation -->
		<!-- Begin Slider -->

<div id="slider" style="">

<!-- Begin Shell -->

<div class="shell">

<ul class="slider-items" >

<li>

<img src="css/images/first.jpg" width="1000" height="525" alt="Slide Image" />

</li>

<li>
<img src="css/images/2.jpg"  width="1000" height="525" alt="Slide Image" />

</li>

<li>

<img src="css/images/side.jpg"  width="1000" height="525" alt="Slide Image" />

</li>

<li>

<img src="css/images/4.jpg"  width="1000" height="525" alt="Slide Image" />

</li>

<li>

<img src="css/images/5.jpg" width="1000" height="525" alt="Slide Image" />

</li>

<li>

<img src="css/images/first.jpg" width="1000" height="525" alt="Slide Image" />

</li>

</ul>

<div class="cl">&nbsp;
</div>

<div class="slider-nav">

</div>

</div>

<!-- End Shell -->

</div>

<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />




<div id="templatemo_main_top"></div>

<div id="templatemo_main_wrapper1">
<div class="post" style="width:800px;margin-left:26px;">
<br>
<center><h2 style="margin-left:12px;margin-top:;font-size:24px;">A message from Your Principal</h2>
</center>
<br>
<img src="css/images/avatar.png" alt="Post Image" width="135" height="159"/>

<p style="color:#6E6E6E;font: 18px Arial, Helvetica, sans-serif;margin-left:12px;text-align:justify;">
<?php
include 'db_connect.php';
$res10=mysqli_query($con, "select info from collegeinfo_master where info_type='principal';");
$row10=mysqli_fetch_assoc($res10);
echo $row10['info'];

?>
<br><br>  <strong> <h3 style="font-size:22px;text-align:right;color:#87CEFA;margin-top:px;">Smt.Tajunnisa </p>
					</p>
					<div class="cl">&nbsp;</div>
						</div>
			<!-- End Content -->
							<div class="cl">&nbsp;</div>

<h2 style="margin-left:350px;margin-top:;width:500px;font-size:20px;"><center>A message from your HOD (C.S)</center></h2>

<br>
<img src="css/images/avatar.png" alt="Post Image" align="right" width="135" style="margin-left:10px;margin-right:10px;" height="159" />

<p style="color:#6E6E6E;font: 18px vardna, Helvetica, sans-serif;margin-left:340px;margin-right:50px;text-align:justify;"><?php $res10=mysqli_query($con, "select info from collegeinfo_master where info_type='hod';");
$row10=mysqli_fetch_assoc($res10);
echo $row10['info'];
?><br><br>  <strong> <h3 style="font-size:22px;text-align:right;color:#87CEFA;margin-top:-10px;">Ms Haritha</p>
			</p>

<h6 style="font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: normal;
    color: #ffffff;
    background: url(css/images/contact_but.png) no-repeat top left;
    text-align: center;
    width: 274px;
    height: 40px;
    padding-top: 14px;margin-top:-215px;margin-left:15px;">Event</h6>




<div   style="margin-top:-14px;margin-left:18px;height:18em;width:265px;-moz-border-radius: 1em 4em 1em 4em;
border-radius: 0em 0em 2em 2em;
border-bottom: 1px  black solid;border-left: 1px  black solid;border-right: 1px  black solid;font: 15px Arial, Helvetica, sans-serif;color:#666666;">
<div class="align-content">
<marquee onmouseover="stop()"  onmouseout="start()" direction="up" align="center"  scrollamount="2"
            scrolldelay="1">
<ul>
<?php
include 'db_connect.php';
$day=date("d");
$mon=date("m");
$year=date("Y");

$res=mysqli_query($con, "select * from event_master;");

while($row=mysqli_fetch_array($res))
{
	$sdate=$row['start_date'];
	$edate=$row['end_date'];
	$syear=substr($sdate,0,4);
	$eyear=substr($edate,0,4);
	$mon=substr($sdate,5,2);
	$emon=substr($edate,5,2);
	$smon=substr($sdate,5,2);
	$sday=substr($sdate,8,2);
	$eday=substr($edate,8,2);
	if($eyear==$year)
	{
		if($emon==$mon)
		{
			if($eday>=$day)
			{
				$name=$row['event_name'];
				echo "<li style='margin-left:35px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['dis'];
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</div>";


			}
		}
		else
		{
			if($emon>=$mon)
			{
				$name=$row['event_name'];
				echo "<li style='margin-left:35px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['dis'];
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</div>";
			}
			else
			{

			}

		}
	}
	else
	{
		if($eyear>=$year && $emon<$mon)
		{

				$name=$row['event_name'];
				echo "<li style='margin-left:35px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['dis'];
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</div>";

		}
	}
}

?>
</li>
</ul>
</marquee>
</div>

</div>

<div style="margin-top:100px;margin-left:60px;">
<h6 style="font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: normal;
    color: #ffffff;
    background: url(css/images/contact_but.png) no-repeat top left;
    text-align: center;
    width: 274px;
    height: 40px;
    padding-top: 14px;margin-left:-37px;">Fresh News</h6>

<div   style="margin-top:-14px;margin-left:-35px;height:18em;width:265px;-moz-border-radius: 1em 4em 1em 4em;
border-radius: 0em 0em 2em 2em;
border-bottom: 1px  black solid;border-left: 1px  black solid;border-right: 1px  black solid;font: 15px Arial, Helvetica, sans-serif;color:#666666;">
			<div class="align-content">
<marquee onmouseover="stop()"  onmouseout="start()" direction="up" align="center"  scrollamount="2"
            scrolldelay="1">
<?php
$day=date("d");
$mon=date("m");
$year=date("Y");
$res=mysqli_query($con, "select * from news_master;");

while($row=mysqli_fetch_array($res))
{
	$sdate=$row['start_date'];
	$edate=$row['end_date'];
	$syear=substr($sdate,0,4);
	$eyear=substr($edate,0,4);
	$mon=substr($sdate,5,2);
	$emon=substr($edate,5,2);
	$smon=substr($sdate,5,2);
	$sday=substr($sdate,8,2);
	$eday=substr($edate,8,2);
	if($eyear==$year)
	{
		if($emon==$mon)
		{
			if($eday>=$day)
			{
				$name=$row['news_name'];
				$id=$row['down_id'];
				if($id>0)
				{
				$res1=mysqli_query($con, "select * from news_master where down_id=$id;");
				$row1=mysqli_fetch_array($res1);
				?><a href="<?php echo $path?>"><?php
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:;'>";
				echo $row['dis'];
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
				else
				{
				$name=$row['news_name'];
				echo "<li style='margin-left:35px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['dis'];
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}


			}
		}
		else
		{
			if($emon>=$mon)
			{
				$name=$row['news_name'];
				$id=$row['down_id'];
				if($id>0)
				{
				$res1=mysql_query("select * from download_master where down_id=$id;");
				$row1=mysql_fetch_array($res1);
				$path="../../../../../".$row1['path'];
				?><a href="<?php echo $path?>"><?php
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:;'>";
				echo $row['dis'];
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
				else
				{
				$name=$row['news_name'];
				echo "<li style='margin-left:35px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['dis'];
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}

			}
			else
			{

			}

		}
	}
	else
	{
		if($eyear>=$year && $emon<$mon)
		{

			$name=$row['news_name'];
				$id=$row['down_id'];
				if($id>0)
				{
				$res1=mysql_query("select * from download_master where down_id=$id;");
				$row1=mysql_fetch_array($res1);
				$path="../../../../../".$row1['path'];
				?><a href="<?php echo $path?>"><?php
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:;'>";
				echo $row['dis'];
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
				else
				{
				$name=$row['news_name'];
				echo "<li style='margin-left:35px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['dis'];
				?>
				<img src="css/images/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}

		}
	}
}

?>
</li>
</ul>
</marquee>
</div>
<div style="margin-top:-237px;margin-left:630px;width: 253px;
	float: left;
	margin-left: ;">
<br><br><br><br><br><br><h6 style="font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: normal;
    color: #ffffff;
    background: url(css/images/contact_but.png) no-repeat top left;
    text-align: center;
    width: 274px;
    height: 40px;
    padding-top: 14px;margin-left:-65px;">Contact Information</h6>
<div style="margin-top:-15px;margin-left:-61px;height:18em;width:265px;-moz-border-radius: 1em 4em 1em 4em;
border-radius: 0em 0em 2em 2em;
border-bottom: 1px  black solid;border-left: 1px  black solid;border-right: 1px  black solid;color:#454545;text-align:left">
                <div style="height:15px"></div>
                <div style="padding-left:10px">
                    <div  class="box_us">
                          <div  class="box_us_l">
                            <img src="css/images/fish_us1.png" alt="" />
                          </div>
                          <div  class="box_us_r">
                                <b class="lh">Sri Jayachamarajendra (Govt.) Polytechnic
																Sheshadri Road,	Bangalore - 560008</b>
                          </div>
                          <div style="clear: both; height:10px;"></div>
                    </div>
			<br>
                    <div  class="box_us">
                          <div  class="box_us_l">
                            <img src="css/images/fish_us2.png" alt="" />
                          </div>
                          <div  class="box_us_r">
                                <b class="lh">Phone: (+91) 123456789
                                </b>
                          </div>
                          <div style="clear: both; height:10px;"></div>
                    </div>
			<br>
                    <div  class="box_us">
                          <div  class="box_us_l">
                            <img src="css/images/fish_us3.png" alt="" />
                          </div>
                          <div  class="box_us_r">
                                <b class="lh" >E-mail: sjpcshod@gmail.com</b>
                          </div>
                          <div style="clear: both; height:10px;"></div>
                    </div>
           		</div>
   		</div>


<h6 style="font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: normal;
    color: #ffffff;
    background: url(css/images/contact_but.png) no-repeat top left;
    text-align: center;
    width: 274px;
    height: 40px;
    padding-top: 14px;margin-left:-350px;margin-top:-50px;">You Are Visitor No :

				<?php
				$count_my_page = ("hitcounter.txt");
				$hits = file($count_my_page);
				$hits[0] ++;
				$fp = fopen($count_my_page , "w");
				fputs($fp , "$hits[0]");
				fclose($fp);
				echo $hits[0];
				 ?>

</h6>





</div></div>








</div> <!-- end of main -->
</div> <!-- end of main wrapper -->
<div id="templatemo_footer" style="margin-bottom:-10px;">
	</div>

    <div class="cleaner"></div>
<div id="footercopy"  style="margin-bottom:-50px;">
	<p>Copyright &copy; 2019 Sri Jayachamarajendra (Govt.) Polytechnic. All rights reserved.<br />
	Developed  By:S.J.P UNITED</p>

</div>
</div> <!-- end of footer -->

</body>
</html>
