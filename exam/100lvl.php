<?php
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
    <form class="clearance-form" action="exam/page1.php" method="post">
        <input type="text"  class="clearance-input" name="matric_num" placeholder="Matriculation Number" required>
        <input type="text"  class="clearance-input" name="clearance" placeholder="Clearance" required><br>
        <button type="submit" class="clearance-btn">Submit</button>
    </form>
</div>
</div>

</body>
<script src="../js/main.js"></script>
<script src="../fontawesome/js/all.js"></script>
</html>

<?php

?>