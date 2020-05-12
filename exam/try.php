<?php
 include 'config.php';
 if(isset($_POST['register'])) {
   $Item = $_POST['Item_sold'];
   $Price = $_POST['Price'];
   $Expenses = $_POST['Expenses'];
   $Debts = $_POST['Debts'];
   $Total = $_POST['Total'];
   $Sub_total =$_POST['Sub_total'];
   $Expected_cash = $_POST['Expected_cash'];

  if(!empty($Item) && !empty($Price) && !empty($Expected) && !empty($Debts) && !empty($Total) && !empty($Sub_total) && !empty($Expected_cash)) {

      $sql="INSERT INTO `registerpage`(`Price`, `Item_sold`, `Expenses`,`Debts`,`cash_athand`,`final_total`,`sub_total`,`Expected_cash`)
      VALUES('$Item','$Price','$Expenses','$Debts','$Total','$Sub_total','$Expected_cash')";
      $query = mysqli_query($con, $sql);

 if($query){
    echo "<h1 style='text-align: center; color:white; background:red;'>Sales Registered Successfully!!</h1>";
  }else{
   echo "<p>error</p>".mysqli_errror($con);
  }      
  }else{
    echo "<h1 style=text-align: center; color:white; background:red;'>All Fields Are Required!!</h1>";  
  }
  }

 if(isset($_POST['register'])) {
   $t = $_POST['Item_sold'];
   $validate =  true;
 if (!is_numeric($t)) {   
    $validate = false;
    $error_msg = "<div class='alert alert-danger'>Field Must Be A Number</div>";
  }
  }

   // $n = $_POST['Item_sold'];
   // $validate = true;

   // if(!is_numeric($n)){
   //  $validate = false;
   //  $errorMsg ="<div class='alert alert-danger'>field must be a number</div>";

   // }

   // if(empty($n)){
   // $validate = false;
    // $errrorMsg = "<div class='alert alert-danger'>filed is required</div>";
      
    //}
    // if ($validate ==true){

    //}
    // $Item = $_POST['Item'];
   // $Price = $_POST['Price'];
   // $Expenses = $_POST['Expenses'];
    // $Debts = $_P0ST['Debt'];
    // $Cash = $_POST['Cash'];
    // $Total = $_POST['Total'];

   //$sql= "INSERT INTO `regtable`(`Item`,`Price`,`Expenses`,`Debt`,`Cash``Total`)VALUES()  "
     //}
?>
