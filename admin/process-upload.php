<?php
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])){
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }else{
        if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["filetoupload"]["name"])). " has been uploaded.";
          } else {
            echo "Sorry, there was an error uploading your file.";
          }
      }
}
    
?>