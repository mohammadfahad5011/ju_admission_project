<?php 

$conn = mysqli_connect('localhost', 'root','password', 'JU_AdmissionDB');
mysqli_set_charset( $conn, 'utf8');
if(!$conn){
    mysqli_connect_error('Connection Problem. Try again');
}

 $base_url = 'http://localhost/php_projects/practice_project/';

?>