<?php
session_start();
require('connection.php');

$response = [];

// Assuming your $_POST array contains the values for these fields
$name = input_field_validation($_POST['name']) ?? '';
$phone = input_field_validation($_POST['phone']) ?? '';
$nominee_age = input_field_validation($_POST['nominee_age']) ?? '';
$email = input_field_validation($_POST['email']) ?? '';
$address = input_field_validation($_POST['address']) ?? '';
$nominee_name = input_field_validation($_POST['nominee_name']) ?? '';
$category = input_field_validation($_POST['category']) ?? '';
$nominee_phone = input_field_validation($_POST['nominee_phone']) ?? '';
$nominee_email = input_field_validation($_POST['nominee_email']) ?? '';
$age = input_field_validation($_POST['age']) ?? '';
$nominee_address = input_field_validation($_POST['nominee_address']) ?? '';
$achievement = input_field_validation($_POST['achievement']) ?? '';
$lifetime_khamar = input_field_validation($_POST['lifetime_khamar']) ?? '';
$lifetime_abiskar = input_field_validation($_POST['lifetime_abiskar']) ?? '';
$lifetime_protithan = input_field_validation($_POST['lifetime_protithan']) ?? '';
$best_utpadan = input_field_validation($_POST['best_utpadan']) ?? '';
$best_khamar = input_field_validation($_POST['best_khamar']) ?? '';
$best_income = input_field_validation($_POST['best_income']) ?? '';
$best_facts = input_field_validation($_POST['best_facts']) ?? '';


    $timestamp = date('Y-m-d H:i:s');

    // Insert data into the database
    $query_insert = "INSERT INTO `agri_award` 
                (`name`, `phone`, `nominee_age`, `email`, `address`, `nominee_name`, `category`, `nominee_phone`, 
                `nominee_email`, `age`, `nominee_address`, `achievement`, `lifetime_khamar`, `lifetime_abiskar`, 
                `lifetime_protithan`, `best_utpadan`, `best_khamar`, `best_income`, `best_facts`, `timestamp`) 
                VALUES 
                ('$name', '$phone', '$nominee_age', '$email', '$address', '$nominee_name', '$category', '$nominee_phone', 
                '$nominee_email', '$age', '$nominee_address', '$achievement', '$lifetime_khamar', '$lifetime_abiskar', 
                '$lifetime_protithan', '$best_utpadan', '$best_khamar', '$best_income', '$best_facts', '$timestamp')";

    $result_insert = mysqli_query($conn, $query_insert);

    if (!$result_insert) {
        // Form submission failed
        $response['result'] = 'error';
        $response['message'] = 'আপনার মনোনয়ন ফরম জমা হয়নি। আবার চেষ্টা করুন।' . mysqli_error($conn);
    } else {
        // Form submission successful
        $response['result'] = 'success';
        $response['message'] = 'আপনার মনোনয়ন ফরম সফলভাবে জমা হয়েছে। যাচাই বাছাইয়ের পর ফলাফল জানানো হবে।';
    }

    // If $response['result'] is still not defined, set an error message indicating a general form submission error
    if (!isset($response['result'])) {
        $response['result'] = 'error';
        $response['message'] = 'আপনার মনোনয়ন ফরম জমা হয়নি। আবার চেষ্টা করুন।';
    }

    echo json_encode($response);

?>