<?php
// session_start();
// echo $_SESSION['UserID'];
$db = new mysqli('localhost','root','','hospital');

if($db->connect_errno){
    echo 'Database Connection Failed';
}else{
    //echo 'Database Connected';
};



?>