<?php 
$fullName = $_POST['fullName'];
$city = $_POST['city'];
$subCity = $_POST['subCity'];
$woreda = $_POST['woreda'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$educationalInstitution = $_POST['educationalInstitution'];
$department = $_POST['department'];
$level_year = $_POST['level_year'];
$gender = $_POST['gender'];
$Age = $_POST['Age'];


if (!empty($fullName)|| !empty($city)|| !empty($subCity)|| !empty($woreda)||!empty($phone)|| !empty($email)|| !empty($educationalInstitution)|| !empty($department)|| !empty($level_year)|| !empty($gender)|| !empty($Age)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "volunteer_application_request";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

   if (mysqli_connect_error()){
        die ('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
        $SELECT = "SELECT email From volunteer_application_request Where email = ? Limit 1 ";
        $INSERT = "INSERT Into volunteer_application_request (fullName, city, subCity, woreda, phone, email, educationalInstitution, department, level_year, gender, Age ) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        //prempare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bnd_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result()
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param(s, s, s, i, i, s, s, s, s, s, i, $fullName, $city, $subCity, $woreda, $phone, $email, $educationalInstitution, $department, $level_year, $gender, $Age )
            $stmt->execute();
            echo "New record inserted sucessfully";
        } else {
            echo "Someone has already registred using this email";
        }
         $stmt->close();
         $conn->close();

    }
}else {
    echo "All fields are required";
    die();
} 
print_r($_POST);
?>