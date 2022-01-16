


<?php



if (isset($_POST['Save'])){

    $stu_id = $_POST['sid'];
    $stu_name = $_POST['sname'];
    $l_name = $_POST['LastName'];   
    $stu_tmarks = $_POST['tMarks'];
    $stu_omarks = $_POST['oMarks'];
    $stu_emarks = $_POST['eMarks'];
    $stu_imarks = $_POST['iMarks'];
    $Program=$_POST['Program'];





    $aggregate = (($stu_omarks * 50 )/$stu_tmarks) + (($stu_emarks * 40 )/ 100) + (($stu_imarks * 10 )/ 10) ; 

    // $conn = mysqli_connect("localhost", "root", "", "merit") or die("Connection Failed");
// // $sql = "UPDATE student SET First_Name = '{$stu_name}', Last_Name = '{$l_name }',FSc_Marks = '{$stu_omarks}' , Total_Marks= '{$stu_tmarks}', Test_Marks = '{$stu_emarks}', Interview_Marks = '{$stu_imarks}' , Aggregate = '{$aggregate}' WHERE ID = {$stu_id}";
    
    $mysqli=new mysqli('localhost','root','','merit') or die(mysqli_error($mysqli));
    $mysqli->query("INSERT INTO merit (ID,First_Name, Last_Name, FSc_Marks,Total_Marks,Test_Marks,Interview_Marks,Aggregate,Program) values ('$stu_id','$stu_name','$l_name','$stu_omarks','$stu_tmarks','$stu_emarks','$stu_imarks','$aggregate','$Program')") or die($mysqli->error);
    echo" <script>alert('Registration successfully')</script>";
    header("Location: http://localhost/lab%20project/admin/index.html");
    mysqli_close($conn);
}
?>

