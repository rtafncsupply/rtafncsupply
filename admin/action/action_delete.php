<?php	
	//ลบ durabel			
	if(isset($_POST['btnDeletedurabel'])){
		//echo "<pre>";
		//print_r($_POST);
		//echo "<pre>";
		
		$durabel_id = mysqli_real_escape_string($connection,$_POST["durabel_id"]);
		$sqlcheck = "SELECT durabel_id AS durabel_id FROM table_durabel WHERE durabel_id = '$durabel_id'";
		$querycheck = mysqli_query($connection, $sqlcheck);
		$rowcheck = mysqli_fetch_array($querycheck);
		$Student_ID2 = $rowcheck['durabel_id'];
		//echo 'durabel_ID2 => '.$durabel_ID2;
		//exit();
		if($Student_ID2 == $durabel_id)
		{
			$sqld_delete = "DELETE FROM table_durabel WHERE durabel_id = '$durabel_id'";
			$queryd_delete = mysqli_query($connection, $sqld_delete);
			if($queryd_delete){
				echo '
					<script>
						swal({
							title: "ลบข้อมูลสำเร็จ", 
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
							title: "Error ลบข้อมูลไม่สำเร็จ", 
							icon: "error",
							button: "ตกลง",
							}).then( () => {
								location.href = "'.$_SERVER['REQUEST_URI'].'"
											
							});	
					</script>
				';	
			}
		}	
	}
?>