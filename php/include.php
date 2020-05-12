<?php
include 'config.php';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$errors = array();
if(isset($_POST['full_name'])){
    $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
    $matric_num = mysqli_real_escape_string($con, $_POST['matric_num']);
    $dept = $_POST['dept'];
    $lvl = $_POST['lvl'];
    $matric_num = $_POST['matric_num'];
    $email = $_POST['email'];
    $phone_num = $_POST['phone_num'];
    $pword = mysqli_real_escape_string($con, $_POST['pword']);
    $con_pword = mysqli_real_escape_string($con, $_POST['con_pword']);

    if($pword != $con_pword){array_push($errors, "Your Password Does Not Match");}
}

//CHECK IF USER ALREADY EXIST
$result_check = "SELECT * FROM `student_profile` WHERE `full_name` = '$full_name' OR `matric_num` = '$matric_num'  OR `dept` = '$dept' OR `lvl` = '$lvl' LIMIT 1";
$result = mysqli_query($con, $result_check);
$user = mysqli_fetch_assoc($result);

if($user){
    if ($user['full_name'] === $full_name){
        array_push($errors, "Error 1");
    }
    if ($user['matric_num'] === $matric_num){
        array_push($errors, "Error 2");
    }
}

if(count($errors) == 0){
    $password = md5($pword);
    $sql = "INSERT INTO `student_profile` ( `full_name`, `matric_num`, `dept`, `lvl`, `email`, `phone_num`, `psword`) 
    VALUES('$full_name', '$matric_num',  '$dept', '$lvl', '$email', '$phone_num', '$password')";
    $query = mysqli_query($con, $sql);
}


if (isset($_SESSION["full_name"])){
    header("Location:../profile.php");
    echo "<script>alert('Your profile has been created successfuly, please proceed by logging in with your matric number and password');</script>";
}
?>

<?php
/*
session_start();

include "config.php";

if(count($_POST)>0){

    $sql = "SELECT * FROM `student_table` WHERE `matric_num` ='". $_POST['matric_num']." 'AND `pword` ='". $_POST["pword"]."'";
    $result = mysqli_query($con, $sql);

    $query2 = "SELECT * FROM `student_table`";
    $result2 = mysqli_query($con, $query2);

    if(is_array($result)){
        $_SESSION["matric_num"] = $result2['matric_num'];
        $_SESSION["full_name"] = $result2['full_name'];
        
    }
    else{
        echo "Invalid Matric Number or Password";
    }

    if(mysqli_num_rows($result) > 0){
        header("Location:../profile.php");
    }
}
*/

