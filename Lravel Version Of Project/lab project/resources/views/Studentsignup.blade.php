<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <div class="container" id="admlog1">
        <img src="student.png" alt="">
        <h1>Student SignUp</h1>
        <?php require_once 'formdata.php'; ?>
        <form action="formdata.php" method="post">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName"/>
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline">
                      <input type="radio" name="gender" value="m" id="male"/>Male</label>
                  <label for="female" class="radio-inline">
                      <input type="radio" name="gender" value="f" id="female"/>Female</label>
                  <label for="others" class="radio-inline">
                      <input type="radio" name="gender" value="o" id="others"/>Others</label>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email"/>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"/>
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input type="number" class="form-control"id="number" name="number"/>
              </div>
              <div class="form-group">
                <label for="marks">Fsc Marks</label>
                <input type="number" class="form-control"id="marks" name="marks"/>
              </div>
        
              <div class="form-group">
                <label for="Program">Program</label>
                <div>
                  <label for="BSSE" class="radio-inline">
                      <input type="radio" name="Program" value="BSSE" id="se1"/>Software Eng</label>
                  <label for="female" class="radio-inline">
                      <input type="radio" name="Program" value="BCS" id="cs1"/>Computer Sci</label>
                  <label for="BSDS" class="radio-inline">
                      <input type="radio" name="Program" value="BSDS" id="ds1"/>Data Sci</label>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="button-84" name="save">Signup</button>
              
              </div>
              <!-- <button type="button" class="button-84" onclick="parent.open('result.php')" name="check">Check</button> -->
              
        </form>

    </div>
    
</body>
</html>