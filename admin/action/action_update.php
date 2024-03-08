<?php 
	if(isset($_POST['btnEditdurabel'])){
		//echo "<pre>";
		//print_r($_POST);
		//echo "</pre>";
		//exit();

		$durabel_id = mysqli_real_escape_string($connection, $_POST['durabel_id']);
		$durabel_name = mysqli_real_escape_string($connection, $_POST['durabel_name']);
		$durabel_objective = mysqli_real_escape_string($connection, $_POST['durabel_objective']);
		$durabel_building = mysqli_real_escape_string($connection, $_POST['durabel_building']);
		$durabel_effect = mysqli_real_escape_string($connection, $_POST['durabel_effect']);
		$durabel_rate = mysqli_real_escape_string($connection, $_POST['durabel_rate']);
		$durabel_amount = mysqli_real_escape_string($connection, $_POST['durabel_amount']);
		$durabel_unit = mysqli_real_escape_string($connection, $_POST['durabel_unit']);
		$durabel_priceunit = mysqli_real_escape_string($connection, $_POST['durabel_priceunit']);
		$durabel_total = mysqli_real_escape_string($connection, $_POST['durabel_total']);
		$durabel_pricesource = mysqli_real_escape_string($connection, $_POST['durabel_pricesource']);
		$durabel_contact = mysqli_real_escape_string($connection, $_POST['durabel_contact']);
		$durabel_agency = mysqli_real_escape_string($connection, $_POST['durabel_agency']);
		$durabel_note = mysqli_real_escape_string($connection, $_POST['durabel_note']);

		$sql_update_durabel = "UPDATE table_durabel SET
		durabel_name = '$edurabel_name',
		durabel_objective = '$durabel_objective',
		durabel_building = '$durabel_building',
		durabel_effect = '$durabel_effect',
		durabel_rate = '$durabel_rate',
		durabel_amount = '$durabel_amount',
		durabel_unit = '$durabel_unit',
		durabel_priceunit = '$durabel_priceunit',
		durabel_total = '$durabel_total',
		durabel_pricesource = '$durabel_pricesource',
		durabel_contact = '$durabel_contact',
		durabel_agency = '$durabel_agency',
		durabel_note = '$durabel_note'

		WHERE durabel_id = '$durabel_id' ";
		$query_update_durabel = mysqli_query($connection, $sql_update_durabel);
		if($query_update_durabel){
			echo '
				<script>
					swal({
						title: "แก้ไขข้อมูลสำเร็จ", 
						icon: "success",
						button: "ตกลง",
						}).then( () => {
							location.href = "'.$_SERVER['REQUEST_URI'].'"
										
						});	
				</script>
			';
		}
		else
		{
			echo '
				<script>
					swal({
						title: "Error แก้ไขข้อมูลไม่สำเร็จ!!", 
						icon: "error",
						button: "ตกลง",
						}).then( () => {
							location.href = "'.$_SERVER['REQUEST_URI'].'"
										
						});	
				</script>
			';	
		}

	}

?>