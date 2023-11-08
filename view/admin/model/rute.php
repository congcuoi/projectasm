<?php
    function getRuteAndCourse($data) {
        $sql_get_rute_and_course = "SELECT course.CourseTitle , rute.* FROM rute 
                                    INNER JOIN course ON course.idRute = rute.idRutes 
                                    ORDER BY idRute ASC";
        $result = $data->query($sql_get_rute_and_course);
        return $result;
    }
?>