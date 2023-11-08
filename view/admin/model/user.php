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
        $sql_del_user_byId = "DELETE FROM user WHERE idUser = ?";
        $query = $data->prepare($sql_del_user_byId);
        $query->bind_param("i", $id_user);
        $query->execute();
    }

    function updateUserById($data, $id_user, $name, $username, $password, $email, $role) {
        $sql_update_user_byId = "UPDATE user SET name = ? , Username = ?, Password = ?, Email = ? , Role = ? WHERE idUser = ?";
        $query = $data->prepare($sql_update_user_byId);
        $query->bind_param("ssssii", $name, $username, $password, $email, $role, $id_user);
        $query->execute();
    }
    
?>