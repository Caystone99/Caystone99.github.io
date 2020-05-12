<?php

$con = mysqli_connect("localhost", "root", "" ,"exam_table");

if (!$db) {
	echo "Error Selecting database".mysqli_error($con);
}else{
	echo "database selected succcessfully";
}

$errors = array();
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

$full_name = $_POST['full_name'];

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
$size = sizeof($question_count);

echo "<h2>Hi,".$full_name."</h2>";
echo "<h2>Number of questions:", $size. "</h2>";
/*
$i = 1;
foreach ($marks as $mark){
    echo '<br/>';
    echo '<b>'.$i++.'</b>.';
    echo $mark.'<br/>';

}
*/

$score = array_sum($marks);
$new_size = $size * 2;
echo "<h3> You Scored:".$score."/ ".$new_size."</h3>";


echo "<h4>YOUR RESULT HAS BEEN SUBMITTED SUCCESSFULLY</h4>";
echo "<a href='../index.html'><button class='clearance-btn'>Exit</button></a>";
?>
</div>
</center>
</div>


</body>
<script src="../js/main.js"></script>
<script src="../fontawesome/js/all.js"></script>
</html>