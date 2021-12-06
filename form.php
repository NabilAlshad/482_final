<?php
include('db_connection.php')

?>

<?php
if(isset($_POST["submit"])){
   $user_name=$_POST["username"];
   $password=$_POST["password"];
   $gender= $_POST['gender'];
   
  $query="INSERT INTO  login(userName,password,gender) VALUES('{$user_name}','{$password}','$gender');";
   $perform=mysqli_query($connection,$query);
   if(!$perform)
       echo "query unsuccessfull"; 
   else 
       echo "query successfull";
     $insertedId=mysqli_insert_id($connection);
    

}

?>


<?php mysqli_close($connection);?>
