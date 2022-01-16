<?php
include 'connect.php';
if (isset($_POST['login'])) {

    if (empty($_POST['email'])) {
            $errors['email'] = 'Username or email required';
        }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query="Select * from student where Email='$email' and Password='$password' ";
    
    $result=mysqli_query($mysqli,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        session_start();
        $_SESSION['sid']=session_id();
        header('location: /lab project/stmerit.php');
    }
    else{
        echo '<script>alert("Email or Password is wrong")</script>';
        echo "Go back enter Correct Email and Password";
        
        
    }
   
    

}   
?>