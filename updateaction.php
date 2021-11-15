<?php
    include_once("connect.php");


    // define variables and set to empty values
    $name = $marks = $image = $grade="";$imgUpload=0;
    //
    if (isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $marks = $_POST['marks'];

        if ($marks>=80)
        {
            $grade = "A+";
        }
        else if($marks>=70)
        {
            $grade = "A";
        }
        else if($marks>=60)
        {
            $grade = "A-";
        }
        else if ($marks>=50)
        {
            $grade = "B";
        }
        else if($marks>=40)
        {
            $grade = "C";
        }
            else if($marks>=33)
        {
            $grade = "D";
        }
        else
        {
            $grade = "Fail";
        }
        $image = $_FILES['image'];

        // Image upload and save file
        if(isset($_FILES['image'])){
          $file_name = $_FILES['image']['name'];
          $file_size = $_FILES['image']['size'];
          $file_tmp = $_FILES['image']['tmp_name'];
          $file_type = $_FILES['image']['type'];


          //Image upload and set in folder
          if(move_uploaded_file($file_tmp,"photo/"  . $file_name)){
            echo "Successfully Uploaded.";
            $imgUpload=1;
          }else{
            echo  "Could not upload the file.";
            $imgUpload=2;
          }
        }

        $sql = "UPDATE studentdb
        SET Name= '".$name."', 
        Marks='".$marks."',";
        if($imgUpload==1){$sql .= "Image='".$file_name."',";}
        $sql .="Grade='".$grade."'
        WHERE id= '".$id."'";


        // echo $sql; die();

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header("Location: result.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      }
?>