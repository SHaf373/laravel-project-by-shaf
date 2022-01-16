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

    <h2>Update Record</h2>

    <?php
            $conn = mysqli_connect("localhost", "root", "", "merit") or die("Connection Failed");
            $stu_id = $_GET['id'];
            $sql = "SELECT * FROM student where ID = {$stu_id}";
            $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
        ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>First Name</label>
          <input type="hidden" class="form-control" name="sid" value="<?php echo $row['ID'];?>"/>
          <input type="text" class="form-control" name="sname" value="<?php echo $row['First_Name'];?>"/>
      </div>
      <div class="form-group">
          <label>Last Name</label>
          <input type="text" class="form-control" name="LastName" value="<?php echo $row['Last_Name'];?>"/>
      </div>


 

      <div class="form-group">
          <label>Total Marks</label>

          <input type="number" class="form-control" min = "1100" max="1100" name="tMarks" value="<?php echo $row['Total_Marks'];?>"/>
      </div>

      <div class="form-group">
          <label>Obtained Marks</label>
          <input type="number" class="form-control" min = "0" max="1100" name="oMarks" value="<?php echo $row['FSc_Mark'];?>"/>
      </div>



      <div class="form-group">
          <label>Entry Test Marks</label>
          <input type="number" class="form-control" min = "0" max="100" name="eMarks" value="<?php echo $row['Test_Marks'];?>"/>
      </div>



      <div class="form-group">
          <label>Interview Marks</label>
          <input type="number" class="form-control" min = "0" max="10" name="iMarks" value="<?php echo $row['Interview_Marks'];?>"/>
      </div>
      
      <div class="form-group">
                <label for="Program">Program</label>
                <div>
                  <label for="BSSE" class="radio-inline">
                      <input type="radio" name="Program" value="BSSE" id="se1"/>Software Eng</label>
                  <label for="female" class="radio-inline">
                      <input type="radio" name="Program" value="BCS" id="cs1"/>Computer Sci</label>
                  <label for="BSDS" class="radio-inline">
                      <input type="radio" name="Program" value="BDS" id="ds1"/>Data Sci</label>
                </div>
        </div>
      
      <div class="form-group">
                <button type="submit" class="button-84" name="Save">Update</button>
              
    </div>
        
<!-- 
      <input class="submit" type="submit" value="Update"/> -->


    </form>
    <?php }
    }
    ?>
</div>
</div>
</body>
</html>
