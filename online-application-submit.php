<?php

    session_start();
    require('connection.php');
    

    $response = [];

    

    // Assuming your $_POST array contains the values for these fields

    $applicant_name = input_field_validation($_POST['applicant_name'] ?? '');
    $father_name = input_field_validation($_POST['father_name'] ?? '');
    $mother_name = input_field_validation($_POST['mother_name'] ?? '');
    $birth_date = input_field_validation($_POST['birth_date'] ?? '');
    $mobile = input_field_validation($_POST['mobile'] ?? '');
    $gender = input_field_validation($_POST['gender'] ?? '');
    $religion = input_field_validation($_POST['religion'] ?? '');
    $blood_group = input_field_validation($_POST['blood_group'] ?? '');
    $nationality = input_field_validation($_POST['nationality'] ?? '');
    $national_id = input_field_validation($_POST['national_id'] ?? '');
    $email = input_field_validation($_POST['email'] ?? '');
    $present_address = input_field_validation($_POST['present_address'] ?? '');
    $permanent_address = input_field_validation($_POST['permanent_address'] ?? '');

     // SSC Level
     $ssc_exam_type = $_POST['ssc_exam_type'] ?? null;
     $ssc_board = $_POST['ssc_board'] ?? null;
     $ssc_roll_no = $_POST['ssc_roll_no'] ?? null;
     $ssc_result = $_POST['ssc_result'] ?? null;
     $ssc_gpa = $_POST['ssc_gpa'] ?? null;
     $ssc_group = $_POST['ssc_group'] ?? null;
     $ssc_pass_year = $_POST['ssc_pass_year'] ?? null;
 
     // HSC Level
     $hsc_exam_type = $_POST['hsc_exam_type'] ?? null;
     $hsc_board = $_POST['hsc_board'] ?? null;
     $hsc_roll_no = $_POST['hsc_roll_no'] ?? null;
     $hsc_result = $_POST['hsc_result'] ?? null;
     $hsc_gpa = $_POST['hsc_gpa'] ?? null;
     $hsc_group = $_POST['hsc_group'] ?? null;
     $hsc_pass_year = $_POST['hsc_pass_year'] ?? null;
 
     // Graduation Level
     $grad_exam_type = $_POST['grad_exam_type'] ?? null;
     $grad_subject = $_POST['grad_subject'] ?? null;
     $grad_university = $_POST['grad_university'] ?? null;
     $grad_result = $_POST['grad_result'] ?? null;
     $grad_cgpa = $_POST['grad_cgpa'] ?? null;
     $grad_pass_year = $_POST['grad_pass_year'] ?? null;
 
     // Masters Level
     $ms_exam_type = $_POST['ms_exam_type'] ?? null;
     $ms_subject = $_POST['ms_subject'] ?? null;
     $ms_university = $_POST['ms_university'] ?? null;
     $ms_result = $_POST['ms_result'] ?? null;
     $ms_cgpa = $_POST['ms_cgpa'] ?? null;
     $ms_pass_year = $_POST['ms_pass_year'] ?? null;

     $timestamp = date('Y-m-d H:i:s');

    // Insert data into the database
    $query_insert = "INSERT INTO `applicants`(`applicant_name`, `father_name`, `mother_name`, `birth_date`, `mobile`, `gender`, `religion`, `blood_group`, `nationality`, `national_id`, `email`, `present_address`, `permanent_address`, `ssc_exam_type`, `ssc_board`, `ssc_roll_no`, `ssc_result`, `ssc_gpa`, `ssc_group`, `ssc_pass_year`, `hsc_exam_type`, `hsc_board`, `hsc_roll_no`, `hsc_result`, `hsc_gpa`, `hsc_group`, `hsc_pass_year`, `grad_exam_type`, `grad_subject`, `grad_university`, `grad_result`, `grad_cgpa`, `grad_pass_year`, `ms_exam_type`, `ms_subject`, `ms_university`, `ms_result`, `ms_cgpa`, `ms_pass_year`,`created_at`) 
    VALUES ('$applicant_name', '$father_name', '$mother_name', '$birth_date', '$mobile', '$gender', '$religion', '$blood_group', '$nationality', '$national_id', '$email', '$present_address', '$permanent_address', '$ssc_exam_type', '$ssc_board', '$ssc_roll_no', '$ssc_result', $ssc_gpa, '$ssc_group', $ssc_pass_year, '$hsc_exam_type', '$hsc_board', '$hsc_roll_no', '$hsc_result', $hsc_gpa, '$hsc_group', $hsc_pass_year, '$grad_exam_type', '$grad_subject', '$grad_university', '$grad_result', $grad_cgpa, $grad_pass_year, '$ms_exam_type', '$ms_subject', '$ms_university', '$ms_result', $ms_cgpa, $ms_pass_year,$timestamp)";

    $result_insert = mysqli_query($conn, $query_insert);



    if (!$result_insert) {
        // Form submission failed
        $response['result'] = 'error';
        $response['message'] = 'আপনার ফরম জমা হয়নি। আবার চেষ্টা করুন।' . mysqli_error($conn);
    } else {
        // Form submission successful
        $response['result'] = 'success';
        $response['message'] = 'আপনার ফরম সফলভাবে জমা হয়েছে।';
    }

    // If $response['result'] is still not defined, set an error message indicating a general form submission error
    if (!isset($response['result'])) {
        $response['result'] = 'error';
        $response['message'] = 'আপনার মনোনয়ন ফরম জমা হয়নি। আবার চেষ্টা করুন।';
    }

    echo json_encode($response);

?>