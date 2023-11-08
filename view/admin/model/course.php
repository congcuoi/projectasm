<?php
    function getAllCourse($data) {
        $sql_get_all_course = "SELECT * FROM Course";
        $result = $data->query($sql_get_all_course);
        return $result;
    }


    function getUserRegisterCourse($data, $idCourse) {
        $get_user_register_course = "SELECT user.idUser, user.name FROM mylearning
                                    INNER JOIN user ON mylearning.idUser = user.idUser
                                    WHERE idCourse = $idCourse";
        $result = $data->query($get_user_register_course);
        return $result;
    }
?>