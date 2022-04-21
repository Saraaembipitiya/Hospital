<?php
include 'db.php';

if(isset($_POST['delete'])){
    $all_id = $_POST['check'];
    $extract_id = implode(',', $all_id);
    $sql = "DELETE FROM user_table WHERE UserID='$extract_id'";
    
    if($db->query($sql)){
        header("Location:/myproject.org/patients.php");
    }
    
}


?>