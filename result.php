<?php include_once("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Result</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="action.php">
    <link rel="stylesheet" href="update.php">
    <link rel="stylesheet" href="updateaction.php">
    <link rel="stylesheet" href="delete.php">
</head>

<body>

    <?php
        $sql = "SELECT id, name, marks, grade, image FROM studentdb";
        $result = mysqli_query($conn, $sql);
    ?>
    <table class='table'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Marks</th>
            <th>Grade</th>
            <th>Image</th>
        </tr>
        <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row    
                while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["marks"];?></td>
            <td><?php echo $row["grade"];?></td>
            <td><img src="photo/<?php echo $row["image"];?>" height="100" width="100" alt="<?php echo $row["name"];?>" title="<?php echo $row["name"];?>"/></td>
            <td>
                <a href="update.php?id=<?php echo $row["id"];?>">
                    <button>Update</button>
                </a>
                <a href="delete.php?id=<?php echo $row["id"];?>">
                    <button>Delete</button>
                </a>             
            </td>
        </tr>
         <?php }
            
            } else {
                echo "0 results";
            }
        ?>
    </table>
    <script type="javascript/text" src="js/popper.min.js"></script>
    <script type="javascript/text" src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>