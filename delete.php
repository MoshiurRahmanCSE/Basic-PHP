<?php
    include_once("connect.php");
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        // echo $id;
        $sql = "DELETE FROM studentdb WHERE id= $id";
        $result = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_assoc($result); 

        if (mysqli_query($conn, $sql)) {
            // echo "Record deleted successfully";
          } else {
            echo "Error deleting record: " . mysqli_error($conn);
          }
    }
?>

<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information Update</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="index.php">
  <link rel="stylesheet" href="action.php">
  <link rel="stylesheet" href="result.php">
  <link rel="stylesheet" href="updateaction.php">
</head>
<body>  
  <div class="header-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header">
            <div class="input">
              <div class="heading  d-flex justify-content-center">
                <h2>Delete Student Infornation</h2>
              </div>
              <div class="form  d-flex justify-content-center">
                <form method="POST" action="result.php" enctype="multipart/form-data">  
                  <input type="submit" name="submit" value="Delete">  
                </form>
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