<?php 
$conn = mysqli_connect('localhost', 'root','password', 'JU_AdmissionDB');
//$conn = mysqli_connect('service-web-db-01-prod.cpp3bhfn8bmv.ap-south-1.rds.amazonaws.com','admin','Pal0w3bo!1','adiservicedb');
mysqli_set_charset( $conn, 'utf8');
if(!$conn){
    mysqli_connect_error('Connection Problem. Try again');
}

function input_field_validation($data) {
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$base_url = 'http://localhost/php_projects/practice_project/';

?>