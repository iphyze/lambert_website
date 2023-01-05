<?php

include_once('includes/connection.php');

$subject = "";
$position = "";
$other_position = "";
$location = "";
$other_country = "";
$fullname = "";
$email = "";
$phone = "";
$message = "";
$terms = "";
$prompt = "";
$subjectErr = "";
$fullnameErr = "";
$phoneErr = "";
$messageErr = "";
$termsErr = "";
$emailErr = "";
$invalidEmail = "";
$termsErr = "";
$positionErr = "";
$locationErr = "";
$countryErr = "";
$otherCountryErr = "";
$otherPositionErr = "";
$fileErr = "";
$fileTypeErr = "";
$fileSizeErr = "";
$status = "";
$rand = "123456789";



$subject = mysqli_real_escape_string($db, $_POST['subject']);
$position = mysqli_real_escape_string($db, $_POST['position']);
$location = mysqli_real_escape_string($db, $_POST['location']);
$other_position = mysqli_real_escape_string($db, $_POST['other_position']);
$other_country = mysqli_real_escape_string($db, $_POST['other_country']);
$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$message = mysqli_real_escape_string($db, $_POST['message']);
$status = "Unread";
$shuffle_rand = str_shuffle($rand);
$sub_rand = substr($shuffle_rand, 0, 3);

if($subject == ""){
    $subjectErr = '<div class="error-msg">Please select a subject! <span class="error-msg-icon fas fa-exclamation-circle"></span></div>';
    echo json_encode(['message' => $subjectErr, 'status' => 'subjectErr']);
}



if($subject == "Job Vacancy"){

if(!empty($_FILES['file'])){

$file = basename($_FILES['file']['name']);
$file_size = $_FILES['file']['size'];
$file_dir = $_FILES['file']['tmp_name'];
$file_type = pathinfo($file, PATHINFO_EXTENSION);
$new_file = $sub_rand . '_' . $file;
$file_loc = "assets/css/files/" . $new_file;
    

if($_FILES['file']['name'] == ""){
    $fileErr = "<div class='error-msg'>Please make sure you upload a file if you're an applicant!</div>";
    $_SESSION['fileSizeErr'] = $fileErr;
    echo json_encode(['message' => $fileErr, 'status' => 'fileErr']);
}elseif(isset($_FILES['file'])){


if($file_size > 2000048){
    $_SESSION['fileSizeErr'] = "<div class='error-msg'>Image must be less than 2mb!</div>";
    $fileSizeErr = $_SESSION['fileSizeErr'];
    echo json_encode(['message' => $fileSizeErr, 'status' => 0]);
}
if($file_type != "pdf" && $file_type != "doc" && $file_type != "docx"){
    $_SESSION['fileTypeErr'] = "<div class='error-msg'>File must be pdf or word extensions!</div>";
    $fileTypeErr = $_SESSION['fileTypeErr'];
    echo json_encode(['message' => $fileTypeErr, 'status' => 0]);
}
    
}
    
}        
 
    
if($_POST['position'] == ""){
    $positionErr = "<div class='error-msg'>Please Select Position!</div>";
    //$_SESSION['positionErr'] = $positionErr;
    //$positionErr;
    echo json_encode(['message' => $positionErr, 'status' => 'positionErr']);
}

if($_POST['position'] == "Others" && $_POST['other_position'] == ""){
    $otherPositionErr = "<div class='error-msg'>Please fill out other positions field!</div>";
    //$_SESSION['otherPositionErr'] = $otherPositionErr;
    //$prompt = $otherPositionErr;
    echo json_encode(['message' => $otherPositionErr, 'status' => 'otherPositionErr']);
}
    

if($_POST['location'] == ""){
    $countryErr = "<div class='error-msg'>Please select location!</div>";
    //$_SESSION['otherCountryErr'] = $countryErr;
    //$prompt = $countryTypeErr;
    echo json_encode(['message' => $countryErr, 'status' => 'countryErr']);
}

if($_POST['location'] == "Others" && $_POST['other_country'] == ""){
    $otherCountryErr = "<div class='error-msg'>Please fill out other locations field!</div>";
    //$_SESSION['otherCountryErr'] = $otherCountryErr;
    //$prompt = $otherCountryErr;
    echo json_encode(['message' => $otherCountryErr, 'status' => 'otherCountryErr']);
}    
    
    
}else{
$file = "";
$file_size = "";
$file_dir = "";
$file_type = "";
$new_file = "";
$file_loc = "";
}
    

if($fullname == ""){
    $fullnameErr = '<div class="error-msg">Please fill out form!<span class="error-msg-icon fas fa-exclamation-circle"></span></div>';
    //$_SESSION['fullnameErr'] = $fullnameErr;
    echo json_encode(['message' => $fullnameErr, 'status' => 'fullnameErr']);
}    

if($phone == ""){
    $phoneErr = '<div class="error-msg">Please fill out form!<span class="error-msg-icon fas fa-exclamation-circle"></span></div>';
    //$_SESSION['phoneErr'] = $phoneErr;
    echo json_encode(['message' => $phoneErr, 'status' => 'phoneErr']);
}    

if($message == ""){
    $messageErr = '<div class="error-msg">Please fill out form!<span class="error-msg-icon fas fa-exclamation-circle"></span></div>';
    //$_SESSION['messageErr'] = $messageErr;
    echo json_encode(['message' => $messageErr, 'status' => 'messageErr']);
}    

if(!isset($_POST['terms'])){
    $termsErr = '<div class="error-msg">Please check the box above!<span class="error-msg-icon fas fa-exclamation-circle"></span></div>';
    //$_SESSION['termsErr'] = $termsErr;
    echo json_encode(['message' => $termsErr, 'status' => 'termsErr']);
}else{
    $terms = mysqli_real_escape_string($db, $_POST['terms']);
}    

if($email == ""){
    $emailErr = '<div class="error-msg">Please fill out form!<span class="error-msg-icon fas fa-exclamation-circle"></span></div>';
    //$_SESSION['emailErr'] = $emailErr;
    echo json_encode(['message' => $emailErr, 'status' => 'emailErr']);
}   

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $invalidEmail = "<div class='error-msg'>" . $email . " not a valid email address!<span class='error-msg-icon fas fa-exclamation-circle'></span></div>";
    //$_SESSION['invalidEmail'] = $invalidEmail;
    //$prompt = $invalidEmail;
    echo json_encode(['message' => $invalidEmail, 'status' => 'invalidEmail']);
}    

$select = mysqli_query($db, "SELECT * FROM contact_table WHERE fullname = '$fullname' && message = '$message'");
$num = mysqli_num_rows($select);
 
    
if($num != 1 && !$subjectErr && !$fullnameErr && !$phoneErr && !$messageErr && !$termsErr && !$emailErr && !$invalidEmail && !$fileErr && !$fileTypeErr && !$fileSizeErr && !$otherPositionErr && !$otherCountryErr && !$positionErr && !$countryErr){
    
    if(!empty($_FILES['file'])){
     move_uploaded_file($file_dir, $file_loc);   
    }
    
    mysqli_query($db, "INSERT INTO contact_table
    (
    subject,
    file,
    position,
    other_position,
    location,
    other_country,
    fullname,
    email,
    phone,
    message,
    status
    )VALUES(
    '$subject',
    '$new_file',
    '$position',
    '$other_position',
    '$location',
    '$other_country',
    '$fullname',
    '$email',
    '$phone',
    '$message',
    '$status'
    )
    ");
    
    $_SESSION['prompt'] = "<div class='success-msg'>Your message has been submitted successfully!</div>";
    $success = $_SESSION['prompt'];
    echo json_encode(['message' => $success, 'status' => "success"]);

}

if($num == 1){
    $_SESSION['error'] = "<div class='success-msg'>We have received your message!</div>";
    $error = $_SESSION['error'];
    echo json_encode(['message' => $error, 'status' => "failed"]);
}


?>