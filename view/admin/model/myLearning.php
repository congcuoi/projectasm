<?php
    function getCourseByIdUser($id_user, $data){
        $sql_course_by_idUser = "SELECT mylearning.* , course.CourseTitle FROM mylearning 
                                INNER JOIN course ON mylearning.idCourse = course.idCourse
                                WHERE idUser = $id_user ";
        $result = $data->query($sql_course_by_idUser);
        return $result;
    }
?>