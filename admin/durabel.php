<?php session_start();
	include('../config.php');
$sql = "SELECT * FROM table_durabel ORDER BY durabel_id ASC";
$query = mysqli_query($connection, $sql);


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
      <?php include('modal/form_add_modal.php') ?>
      <button type="button" class="btn btn bg-green" data-toggle="modal" data-target="#add_durabel"><span class="fa fa-plus"></span> เพิ่มรายการ</button>

          <div class="box">
            <div class="box-header text-center bg-blue">
              <h3 class="box-title">ข้อมูลรายการความต้องการครุภัณฑ์</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              	<form method="post">
                <table id="table" width="100%" class="table table-hover">
                <thead>
                  <tr>
                    <th>ลำดับ</th>
                    <th>รหัสครุภัณฑ์</th>
                    <th>ชื่อรายการ</th>
                    <th>วัตถุประสงค์และความจำเป็น</th>
                    <th>สถานที่ใช้งาน</th>
                    <th>ผลกระทบหากไม่ได้รับการสนับสนุน</th>
                    <th>เบิกอัตรา</th>
                    <th>จำนวน</th>
                    <th>หน่วยนับ</th>
                    <th>ราคาต่อหน่วย</th>
                    <th>จำนวนเงินรวม</th>
                    <th>ที่มาของราคา</th>
                    <th>ชื่อผู้แจ้งและเบอร์โทรติดต่อ</th>
                    <th>แผนก/ฝ่าย</th>
                    <th>หมายเหตุ</th>                 
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while($rows = mysqli_fetch_array($query)) {  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $rows['durabel_id']; ?></td>
                    <td><?php echo $rows['durabel_name']; ?></td>
                    <td><?php echo $rows['durabel_objective']; ?></td>
                    <td><?php echo $rows['durabel_building']; ?></td>
                    <td><?php echo $rows['durabel_effect']; ?></td>
                    <td><?php echo $rows['durabel_rate']; ?></td>
                    <td><?php echo $rows['durabel_amount']; ?></td>
                    <td><?php echo $rows['durabel_unit']; ?></td>
                    <td><?php echo $rows['durabel_priceunit']; ?></td>
                    <td><?php echo $rows['durabel_total']; ?></td>
                    <td><?php echo $rows['durabel_pricesource']; ?></td>
                    <td><?php echo $rows['durabel_contact']; ?></td>
                    <td><?php echo $rows['durabel_agency']; ?></td>
                    <td><?php echo $rows['durabel_note']; ?></td>

                    <td><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="modal" data-target="#edit_durabel<?php echo $rows['durabel_id']; ?>"><span class="fa fa-edit"></span> </button></td>
                    <td><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="modal" data-target="#delete_durabel<?php echo $rows['durabel_id']; ?>"><span class="fa fa-trash"></span> </button></td>
                  </tr>
                  <?php include('modal/form_edit_modal.php'); ?>
                  <?php include('modal/form_delete_modal.php'); ?>
                  <?php $i++; } ?>
                 
                  
                </tbody>

                </table>
                </form>
                  <?php include('action/action_insert.php'); ?>
                  <?php include('action/action_update.php'); ?>
                  <?php include('action/action_delete.php') ?>
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