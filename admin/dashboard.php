<?php session_start();
	include('../config.php');

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ระบบแจ้งความต้องการครุภัณฑ์</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, durabel-scalable=no" name="viewport">
  <?php include('import_style.php');?>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300&amp;subset=thai" rel="stylesheet">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <?php include('header.php');?>
  
  <?php include('menu_left.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <?php
    	include('menu_main.php');
	?>

    <!-- Main content -->
    <section class="content">
	<!--เนื้อหา-->




<div class="row">
		<div class="col-md-12">
          <div class="box">
            <div class="box-header text-center bg-blue">
              <h3 class="box-title">Dashboard รายงานแสดงข้อมูลทั้งหมด</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-3"></div>
                  <div class="col-md-12" align="center">
<!-- Main content -->

      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-3 col-6">
            <div class="small-box bg-blue">
              <div class="inner">
                <p>จำนวนครุภัณฑ์ที่แจ้งเข้ามาในระบบ</p>
                <h3>150</h3> 
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
              <a href="#" class="small-box-footer">รายการ</a>
          </div>
        </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-green">
              <div class="inner">
                <p>จำนวนเงินในการจัดซื้อครุภัณฑ์ทั้งหมด</p>
                <h3>53</h3>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">บาท</a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <p>บุคลาการที่แจ้งความต้องการ</p>
                <h3>44</h3>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">คน</a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <p>จำนวนครุภัณฑ์ที่แจ้งความต้องการ</p>
                <h3>65</h3>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
<!-- ./col -->
       

        
    <!-- /.content -->
  </div>
                                    <div class="col-md-3"></div>
                                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
     
</div> <!-- ./row-->

    <!--ปิดเนื้อหา-->

    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
  
  <?php include('footer.php');?>

  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

	<?php include('import_script.php');?>
</body>
</html>
<?php
  mysqli_close($connection);
?>