<?php
    function saveVideo(){
        $error = array();
        echo "...file";
        $file_name = $_FILES['videoURL']['name'];
        $file_tmp = $_FILES['videoURL']['tmp_name'];
        $path = "./video/" .$file_name;
        if(empty($error) == true){
            echo "...file run"; 
            $path_parts = pathinfo($file_name);
            $extension = $path_parts['extension'];
            move_uploaded_file($file_tmp, "video/" .$file_name);
            echo "success";
            return $path;
        }
        else echo "fail";
    }
?>