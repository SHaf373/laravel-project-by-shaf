


<?php




$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$fath_name = $_POST['LastName'];
$stu_tmarks = $_POST['tMarks'];
$stu_omarks = $_POST['oMarks'];
$stu_emarks = $_POST['eMarks'];
$stu_imarks = $_POST['iMarks'];
$Program=$_POST['Program'];





$stu_tot_marks = (($stu_omarks * 50 )/$stu_tmarks) + (($stu_emarks * 40 )/ 100) + (($stu_imarks * 10 )/ 10) ; 

$conn = mysqli_connect("localhost", "root", "", "merit") or die("Connection Failed");
$sql = "UPDATE merit SET First_Name = '{$stu_name}', Last_Name = '{$fath_name }', FSc_Marks = '{$stu_omarks}' ,Total_Marks= '{$stu_tmarks}',  Test_Marks = '{$stu_emarks}', Interview_Marks = '{$stu_imarks}' , Aggregate = '{$stu_tot_marks}',Program = '{$Program}' WHERE ID = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query unsuccessful");
header("Location: http://localhost/lab%20project/admin/index.html");
mysqli_close($conn);

?>

