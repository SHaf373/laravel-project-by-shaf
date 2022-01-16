<?php
 $stu_id = $_GET['id'];

     $conn = mysqli_connect("localhost", "root", "", "merit") or die("Connection Failed");
     $sql = "DELETE FROM student WHERE ID = {$stu_id}";
     $result = mysqli_query($conn, $sql) or die("Query unsuccessful");

     header("Location: http://localhost/lab%20project/admin/index.html");
     mysqli_close($conn);
          ?>