<!DOCTYPE html>
<html>
<head>
  <title>Upload multiple files to gochocit.com!</title>
</head>

<body>
<?php
if(isset($_POST["submit"])) {
    if(isset($_FILES['fileUpload'])){
     // var_dump($_FILES['fileUpload']['name']);exit;
      
        // for($i=0;$i<count($_FILES['fileUpload']['name']);$i++)
        // {  
        //   echo "ten: ",$_FILES['fileUpload']['name'][$i],"<br>";
        //   echo "ten: ",$_FILES['fileUpload']['size'][$i],"<br>";
        // }
        
      
         //Thông tin các file được upload
         $files = $_FILES['fileUpload'];
        
        $names = $files['name'];
       // var_dump($names);exit;
        $types = $files['type'];
        $tmp_names = $files['tmp_name'];
        $errors = $files['error'];
        $sizes = $files['size'];

        //Số file được upload
        $numitems = count($names);
        $numfiles = 0;
        for ($i = 0; $i < $numitems; $i++) {
            if ($errors[$i] == 0) {
                $numfiles++;
                echo "<b>Uploaded file $numfiles:</b><br>";
                echo "Name: ",$_FILES['fileUpload']['name'][$i];//"Name: $names[$i] <br>";
                echo "Temporary saved at: $tmp_names[$i] <br>";
                echo "Size: $sizes[$i] bytes<br><hr>";
                $ex=strtolower(pathinfo($names[$i],PATHINFO_EXTENSION));
                $name=strtolower(basename($names[$i],".".$ex)); 
                move_uploaded_file($tmp_names[$i],$name.time().".".$ex);
            }
        }
        echo "Number of uploaded files: " .$numfiles;
    }
}
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <b>Select one or more files to upload:</b>
  <br>
  <input type="file" name="fileUpload[]" id="fileUpload" multiple="multiple">
  <br><br>
  <input type="submit" value="Upload" name="submit">
</form>

</body>
</html>