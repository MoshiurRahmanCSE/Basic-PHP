<?php
    include_once("connect.php");
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        //echo $id;
        $sql = "SELECT id, name, marks, grade, image FROM studentdb where id=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result); 
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
                <h2>Update Student Infornation</h2>
              </div>
              <div class="form  d-flex justify-content-center">
                <form method="POST" action="updateaction.php" enctype="multipart/form-data">  
                  Change Student Name: <input type="text" name="name" value="<?php echo $row["name"];?>" placeholder="Enter student Name">
                  <br><br>
                  Change Student Marks: <input type="double" name="marks" value="<?php echo $row["marks"];?>" placeholder="Enter student Marks">
                  <br><br>
                  <img src="photo/<?php echo $row["image"];?>" height="100" width="100" alt="<?php echo $row["name"];?>" title="<?php echo $row["name"];?>"/>
                  <br><br>
                  Change Image: <input type="file" name="image" id="image">
                  <br><br>
                  <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                  <input type="submit" name="submit" value="Update">  
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