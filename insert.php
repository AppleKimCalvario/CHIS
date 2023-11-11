<?php
include("dbcon.php");
if(isset($_POST["add_resident"])){
    
    $fname = $_POST['inputfname'];
    $mname = $_POST['inputmname'];
    $lname = $_POST['inputlname'];
    $sex = $_POST['sex'];
    $date_of_birth = $_POST['inputdob'];
    $age = $_POST['inputAge'];
    $civilStatus = $_POST['civilstatus'];
    $worker = $_POST['sampleworker'];
    $barangay = $_POST['inputbarangay'];
    $currentDate = date("Y-m-d");

    if (!preg_match("/^[A-Za-z]+$/", $fname)) {
        header("location: resident.php?message=Invalid First Name");
        exit();
    }
    else{

        $query = "INSERT INTO `resident_list`(`res_firstname`, `res_middlename`, `res_lastname`, `date_of_birth`, `sex`, `civil_status`, `date_added`, `res_barangay`, `age`, `worker_id`) VALUES ('$fname','$mname','$lname','$date_of_birth','$sex','$civilStatus', '$currentDate', '$barangay', '$age', '$worker')";
        
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed".mysqli_error($conn));
        }

        else {
            header("location:resident.php?insert_msg=Successfully Added!");
        }
    }
}

?>