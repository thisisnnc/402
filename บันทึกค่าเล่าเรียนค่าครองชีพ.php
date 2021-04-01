<?php
session_start();

//connect db
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "trackkingsystem";

$objConnect = mysqli_connect($serverName, $userName, $userPassword, $dbName);
mysqli_select_db($objConnect, "trackkingsystem");
mysqli_set_charset($objConnect, "utf8");
mysqli_query($objConnect, "SET NAMES UTF8");
//



$feemoney = $_POST['FeeMoney'];
$cost_of_living = $_POST['Cost_Of_Living'];
$student_id = $_SESSION['studentID'];
$select = "SELECT * FROM fee_cost WHERE Student_ID = '$student_id' ";
$objQuerySelect = mysqli_query($objConnect, $select);

$count = 0;

while ($row = mysqli_fetch_assoc($objQuerySelect)) {
    $count++;
}

if ($count == 1) {
    $update = "UPDATE fee_cost SET FeeMoney='$feemoney', Cost_Of_Living='$cost_of_living'
        WHERE Student_ID = $student_id";
    $objQuery = mysqli_query($objConnect, $update);

    if (!$objQuery) {
        echo "Error: " . $objQuery . "<br>" . $objConnect->error;
    } else {
        echo "บันทึกข้อมูลสำเร็จ";
    }
} else {
    $insert = "INSERT INTO fee_cost (Student_ID,FeeMoney, Cost_Of_Living)
            VALUES ('$student_id', $feemoney, $cost_of_living)";

    $objQuery = mysqli_query($objConnect, $insert);

    if (!$objQuery) {
        echo "Error: " . $objQuery . "<br>" . $objConnect->error;
    } else {
        echo "บันทึกข้อมูลสำเร็จ";
    }
}

mysqli_close($objConnect);