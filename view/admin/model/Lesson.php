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
?>