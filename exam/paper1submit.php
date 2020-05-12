<?php
include 'config.php';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$errors = array();
if(isset($_POST['full_name'])){
    $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
    $matric_num = mysqli_real_escape_string($con, $_POST['matric_num']);
    $one = $_POST['one'];
    $two = $_POST['two'];
    $three = $_POST['three'];
    $four = $_POST['four'];
    $five = $_POST['five'];
    $six = $_POST['six'];
    $seven = $_POST['seven'];
    $eight = $_POST['eight'];
    $nine = $_POST['nine'];
    $ten = $_POST['ten'];
}
//Question Count
$question_count = array($one, $two, $three, $four, $five, $six, $seven, $eight, $nine, $ten);
//Marking System
$marks = array();
if ($one == "C"){
    $marks[0] = 2;
}
else if($one != "C" || $one == ""){
    $marks[0] = 0;
}


if ($two == "B"){
    $marks[1] = 2;
}
else if($two != "B" || $two == ""){
    $marks[1] = 0;
}


if ($three == "C"){
    $marks[2] = 2;
}
else if($three != "C" || $three == ""){
    $marks[2] = 0;
}


if ($four == "B"){
    $marks[3] = 2;
}
else if($four != "B" || $four == ""){
    $marks[3] = 0;
}


if ($five == "A"){
    $marks[4] = 2;
}
else if($five != "A"  || $five == ""){
    $marks[4] = 0;
}


if ($six == "C"){
    $marks[5] = 2;
}
else if($six != "C"  || $six == ""){
    $marks[5] = 0;
}


if ($seven == "C"){
    $marks[6] = 2;
}
else if($seven != "C"  || $seven == ""){
    $marks[6] = 0;
}


if ($eight == "C"){
    $marks[7] = 2;
}
else if($eight != "C" || $eight == ""){
    $marks[7] = 0;
}


if ($nine == "C"){
    $marks[8] = 2;
}
else if($nine != "C" || $nine == ""){
    $marks[8] = 0;
}

if ($ten == "C"){
    $marks[9] = 2;
}
else if($ten != "C" || $ten == ""){
    $marks[9] = 0;
}
$size = sizeof($question_count);
$score = array_sum($marks);
$new_size = $size * 2;

$result_check = "SELECT * FROM `csc_302` WHERE `full_name` = '$full_name' OR `matric_num` = '$matric_num' LIMIT 1";
$result = mysqli_query($con, $result_check);
$user = mysqli_fetch_assoc($result);

if($user){
    if ($user['full_name'] === $full_name){
        array_push($errors, "Result already exist with this Name");
    }
    if ($user['matric_num'] === $matric_num){
        array_push($errors, "Result already exist with this Matric Number");
    }
}

if(count($errors) == 0){
    $sql = "INSERT INTO `csc_302` (`id`, `full_name`, `matric_num`, `score`)
    VALUES('', '$full_name', '$matric_num', '$score')";
    $query = mysqli_query($con, $sql);
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">

</head>
<body>

    <div id="result">
    <center>
        <div class="result-item">

<?php
    echo "<br>";

    echo "<h2>Hi,".$full_name."</h2>";
    echo "<h2>Number of questions:", $size. "</h2>";

    echo "<h3> You Scored:".$score."/ ".$new_size."</h3>";

    if($query === true){
        echo "<h4>YOUR RESULT HAS BEEN SUBMITTED SUCCESSFULLY</h4>";
    } else{
        echo "<h4>Oops,Your result was not submitted, seems like you tried submitting twice</h4>";
    }
   
    echo "<a href='../index.html'><button class='clearance-btn'>Exit</button></a>";
?>

</div>
</center>
</div>


</body>
<script src="../js/main.js"></script>
<script src="../fontawesome/js/all.js"></script>
</html>