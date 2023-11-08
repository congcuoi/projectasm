<?php
    function getAllUser($data) {
        $sql_get_all_user = "SELECT * FROM user";
        $result = $data->query($sql_get_all_user);
        return $result;
    }


    function getUserById($data, $id_user) {
        $sql_get_user_byid = "SELECT * FROM user WHERE idUser = ?";
        $query = $data->prepare($sql_get_user_byid);
        $query->bind_param("i", $id_user);
        $query->execute();
        $result = $query->get_result();
        $User = $result->fetch_assoc();
        return $User;
    }

    function deleteUserById($data, $id_user) {
        $sql_del_user_byId = "DELETE FROM user WHERE idUser=?";
        $query = $data->query($sql_del_user_byId);
    }
?>