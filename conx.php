<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$username = "root";
$password = "";
$database = new PDO ("mysql:host=localhost;dbname=port", $username,$password);
if (isset($_POST['submit'])){
  $input1 = $_POST["nom"];
  $input2 = $_POST["email"];
  $input3 = $_POST["sujet"];
  $input4 = $_POST["message"];
  $addData = $database->prepare("INSERT INTO name VALUE (' $input1',' $input2','$input3','$input4')");
  if($addData->execute()){
  echo "Done";
  }else 
  echo "No Data";


}


?>
    
</body>
</html>