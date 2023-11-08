<?php
    function getAllCommentLesson($data) {
        $sql_get_commentLesson = "SELECT user.name , lesson.title, commentlesson.* FROM commentlesson
                                INNER JOIN user ON user.idUser = commentlesson.idUSer 
                                INNER JOIN lesson ON lesson.idLesson = commentlesson.idLesson";
        $result = $data->query($sql_get_commentLesson);
        return $result;
    }


    function getAllCommentPost($data) {
        $sql_get_commentLesson = "SELECT user.name , post.Title, commentPost.* FROM commentPost
                                INNER JOIN user ON user.idUser = commentPost.idUSer 
                                INNER JOIN post ON post.idPost = commentPost.idPost";
        $result = $data->query($sql_get_commentLesson);
        return $result;
    }
?>