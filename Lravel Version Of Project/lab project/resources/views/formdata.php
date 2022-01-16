<?php
    include 'connect.php';
    if (isset($_POST['save'])){
        $f_name=$_POST['firstName'];
        $l_name=$_POST['lastName'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $password=$_POST['password'];  
	    $marks=$_POST['marks'];
        $Program=$_POST['Program'];
        $mob_number=$_POST['number'];
        // echo "marks:".$marks;
        $mysqli->query("INSERT INTO student(First_Name, Last_Name, Gender, Email, Password,FSc_Mark,Program,Number) values ('$f_name','$l_name','$gender','$email','$password','$marks','$Program','$mob_number')") or die($mysqli->error);
        echo" <script>alert('Registration successfully')</script>";
        header('location: /lab project/studentlogin.html');
    }
    
    
?>