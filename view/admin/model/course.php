<?php
    function getAllCourse($data) {
        $sql_get_all_course = "SELECT * FROM Course";
        $result = $data->query($sql_get_all_course);
        return $result;
    }


    function getUserRegisterCourse($data, $idCourse) {
        $get_user_register_course = "SELECT idUser FROM mylearning WHERE idCourse = $idCourse";
        $result = $data->query($get_user_register_course);
        return $result;
    }
?>