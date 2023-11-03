<?php
    function getAllLesson($data) {
        $sql_get_lesson = "SELECT * FROM lesson";
        $result = $data->query($sql_get_lesson);
        return $result;
    }
?>