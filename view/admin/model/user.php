<?php
    function getAllUser($data) {
        $sql_get_all_user = "SELECT * FROM user";
        $result = $data->query($sql_get_all_user);
        return $result;
    }
?>