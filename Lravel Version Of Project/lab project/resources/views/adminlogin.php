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
    $query="Select * from admin where Email='$email' and Password='$password' ";
    $result=mysqli_query($mysqli,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        session_start();
        $_SESSION['sid']=session_id();
        header('location: /lab project/resources/views/admin/index.blade.php');
    }
    else{
        echo '<script>alert("Email or Password is wrong")</script>';
        echo "Go back enter Correct Email and Password";
        
        
    }
   
    

}             
                

    // if (count($errors) === 0) {
    // $query = "SELECT * FROM admin WHERE Email=?  LIMIT 1";
    // $stmt = $mysqli->prepare($query);
    // $stmt->bind_param($username, $password);

    // if ($stmt->execute()) {
    //     $result = $stmt->get_result();
    //     $user = $result->fetch_assoc();
    //     if (password_verify($password, $user['Password'])) { // if password matches
    //         $stmt->close();

    //         $_SESSION['id'] = $user['id'];
    //         $_SESSION['username'] = $user['username'];
    //         $_SESSION['email'] = $user['email'];
    //         $_SESSION['verified'] = $user['verified'];
    //         $_SESSION['message'] = 'You are logged in!';
    //         $_SESSION['type'] = 'alert-success';
    //         header('location: /admin/index.html');
    //         exit(0);
    //         } else { // if password does not match
    //             $errors['login_fail'] = "Wrong username / password";
    //         }
    // } 
    // else {
    //         $_SESSION['message'] = "Database error. Login failed!";
    //         $_SESSION['type'] = "alert-danger";
    // }
    

?>