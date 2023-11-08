<?php
    function getAllLesson($data) {
        $sql_get_lesson = "SELECT * FROM lesson";
        $result = $data->query($sql_get_lesson);
        return $result;
    }


    function getLessonById($id_lesson, $data){
        $sql_get_lesson_byid = "SELECT * FROM lesson WHERE idLesson = ?";
        $query = $data->prepare($sql_get_lesson_byid);
        $query->bind_param("i", $id_lesson);
        $query->execute();
        $result = $query->get_result();
        $Product = $result->fetch_assoc();
        return $Product;
    }


    function updateLessonById($title, $videoURL, $content, $id_lesson, $data) {
        $sql_update_lesson_byId = "UPDATE lesson SET title = ? , VideoURL = ? , Content = ? WHERE idLesson = ?";
        $query = $data->prepare($sql_update_lesson_byId);
        $query->bind_param("sssi",$title, $videoURL, $content, $id_lesson);
        $query->execute();
    }
?>