<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Grade</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="action.php">
  <link rel="stylesheet" href="result.php">
  <link rel="stylesheet" href="update.php">
  <link rel="stylesheet" href="updateaction.php">
  <link rel="stylesheet" href="delete.php">
</head>
<body>  
  <div class="header-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header">
            <div class="input">
              <div class="heading  d-flex justify-content-center">
                <h2>Student Marks</h2>
              </div>
              <div class="form  d-flex justify-content-center">
                <form method="POST" action="action.php" enctype="multipart/form-data">  
                  Enter Student Name: <input type="text" name="name" placeholder="Enter student Name">
                  <br><br>
                  Enter Student Marks: <input type="double" name="marks" placeholder="Enter student Marks">
                  <br><br>
                  Select Image: <input type="file" name="image" id="image">
                  <br><br>
                  <input type="submit" name="submit" value="Get Grade">  
                </form>
                <script>action.href</script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="javascript/text" src="js/popper.min.js"></script>
  <script type="javascript/text" src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>