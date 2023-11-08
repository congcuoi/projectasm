<?php
    function getAllPost($data){
        $sql_get_all_post = "SELECT post.* , user.name  FROM post 
                            INNER JOIN user ON post.idUser = user.idUser";
        $query = $data->query($sql_get_all_post);
        return $query;
    }
?>