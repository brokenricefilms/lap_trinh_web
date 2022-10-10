<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dir="tam\\";
    $hinh=array("jpg","jpeg","gif");
    if(isset($_POST['btnSubmit']))
    {
        if(isset($_FILES['file1']))
        {
            if($_FILES['file1']['error']!=0)
            {
                echo "Upload co loi"; die;
            }
            $ex=strtolower(pathinfo($_FILES['file1']['name'],PATHINFO_EXTENSION));
            $ten=strtolower(pathinfo($_FILES['file1']['name'],PATHINFO_FILENAME));
            echo "Ten file la: $ten<br>";
            echo "Ex file la: $ex<br>";
            if(!in_array($ex,$hinh))
            {
                die("File ko dung dinh dang");
            }
            if($_FILES['file1']['size']>300000)
                die("File lon qua");
            $ten=$ten.time().".".$ex;
            //if(file_exists($dir.$_FILES['file1']['name']))
            //    die("File nay da co");
            move_uploaded_file($_FILES['file1']['tmp_name'],$dir.$ten);
            echo "Upload thanh cong";
        }
    
    }
    ?>
<form action="form.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file1" id="file1">
    <input type="submit" name="btnSubmit" value="Submit">
</form>    
</body>
</html>