<?php
 include 'db.php';
 if(isset($_POST['delete'])){
    $all_id = $_POST['check'];
    $extract_id = implode(',', $all_id);
    print_r($extract_id);
 }
 
 $sql  = "DELETE FROM doctor_table WHERE DoctorID='$extract_id'";
	
 if( $db->query($sql)){
    header("Location:/myproject/admin/doctors.php");
 }						 
									 
?>