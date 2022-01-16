 
<div id="main-content">

    <?php
            $conn = mysqli_connect("localhost", "root", "", "merit") or die("Connection Failed");
            $sql = "SELECT * FROM stddetails ORDER BY Total DESC";
            $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
    if(mysqli_num_rows($result) > 0){
        ?>
    <table cellpadding="6px" class="tb">
     

    <thead>
        <th> ID </th>
        <th> Name</th>
        <th> Father Name</th>
        <th> Total Marks </th>
        <th> Obtained Marks</th>
        <th> Entry Test Marks</th>
        <th> Interview Marks</th>
        <th> Total</th>
        <th>Action</th>

</thead>

<tbody>
    <?php
    $i = 1;
        while($row = mysqli_fetch_assoc($result)){

        
    ?>

<tr>
    <td><?php echo $i;?> </td>
    <td><?php echo $row['Name']; ?>  </td>
    <td><?php echo $row['Father_Name']; ?>  </td>
    <td> <?php echo $row['Total_Marks'];?> </td>
    <td> <?php echo $row['Obtained_Marks'];?> </td>
    <td> <?php echo $row['Entry_Test'];?> </td>
    <td> <?php echo $row['Interview'];?> </td>
    <td> <?php echo $row['Total'];?> </td>
    <td> 
        <a href="edit.php?id=<?php echo $row['ID'];?>"> Edit </a>
        <a href="delete-inline.php?id=<?php echo $row['ID'];?>" > Delete </a>
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





