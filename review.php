<?php 
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $rev=$_POST['rev'];

    
$host ='localhost';
$user = 'root';
$pass = '';
$database = 'rem';
 $con=mysqli_connect($host,$user,$pass,$database);

 $sql="INSERT INTO review(name,rev)VALUES('$name','$rev')";
 $succ=mysqli_query($con,$sql);

 echo '<script>alert("Your review has been submitted")</script>';



}


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stle.css">
</head>
<body>
<form action="#" method="POST">
    <div class="review">
        <h2>REVIEW</h2>
        <P >Enter the User Name</P><br>
        <input type="text" name="name"><br>
        <p >Write your experience</p><br>
        <textarea name="rev" ></textarea><br><br>
        <button type="submmit" value="save" onclick="index.php" name="submit">Submit</button>
        <h4> <a href="index.php">Go back</a></h4>
    </div>
</form>
</body>
</html>