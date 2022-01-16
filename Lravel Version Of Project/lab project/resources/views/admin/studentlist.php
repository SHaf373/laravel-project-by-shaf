
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="result.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student List</h1>
    
    <div class='container' >

<?php
        $conn = mysqli_connect("localhost", "root", "", "merit") or die("Connection Failed");
        $sql = "SELECT * FROM student ORDER BY FSc_Mark DESC";
        $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
if(mysqli_num_rows($result) > 0){
    ?>
<table class="table">
 

<thead>
    <th> ID </th>
    <th> First Name</th>
    <th> Last Name</th>
    <th> Gender</th>
    <th> Email</th>
    <th> Password</th>
    <th> F.Sc Marks</th>
    <th> Total Marks </th>
    <th> Test Marks</th>
    <th> Interview Marks</th>
    <th> Aggregate</th>
    <th> Program</th>
    <th> Contact</th>
    <th>Delete</th>
    <th>Edit</th>
</thead>

<tbody>
<?php
$i = 1;
    while($row = mysqli_fetch_assoc($result)){

?>

<tr>
<td><?php echo $i;?> </td>
<td><?php echo $row['First_Name']; ?>  </td>
<td><?php echo $row['Last_Name']; ?>  </td>
<td><?php echo $row['Gender']; ?>  </td>
<td><?php echo $row['Email']; ?>  </td>
<td><?php echo $row['Password']; ?>  </td>
<td> <?php echo $row['FSc_Mark'];?> </td>
<td> <?php echo $row['Total_Marks'];?> </td>
<td> <?php echo $row['Test_Marks'];?> </td>
<td> <?php echo $row['Interview_Marks'];?> </td>
<td> <?php echo $row['Aggregate'];?> </td>
<td> <?php echo $row['Program'];?> </td>
<td> <?php echo $row['Number'];?> </td>

<td> 
    <button class="btn-danger btn"> <a href="delete-inline.php?id=<?php echo $row['ID'];?>" class="text-white"> Delete </a>  </button> 
</td> 
<td>
    <button class="btn-primary btn"> <a href="edit.php?id=<?php echo $row['ID'];?>" class="text-white"> Update </a> </button>
</td>

</tr>
<?php $i++; ?>
<?php } ?>

</tbody>
</table>

<?php  }else{
  echo"<h2> No Record Found</h2>";
} 
mysqli_close($conn);
?>


</div>

</div>
</body>
</html>