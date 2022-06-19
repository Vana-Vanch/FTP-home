<?php 
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.',$fileName);
        $fileActExt = strtolower(end($fileExt));

        if($fileError === 0){
            if($fileSize < 50000000){
                $fileNewName = $fileName.'.'.$fileActExt;
                $fileDestination = 'uploads/'.$fileNewName;
                move_uploaded_file($fileTmpName,$fileDestination);
                header("Location: index.php?UploadSuccess");
            }else{
                echo "File is too big";
            }
        }else{
            echo "There was an error in the process";
        }


    }

?>