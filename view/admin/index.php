<?php
    require_once "./model/Database.php";
    require_once "./layout/header.php";
    require_once "./layout/sidebar.php";
    $data = Connect();
    if(isset($_GET['page']) && $_GET['page'] != ""){
        $page = $_GET['page'];
        switch ($page) {
            case 'userManagement':{
                require_once "./model/user.php";
                $user = getAllUser($data);
                require_once "./layout/userManagement.php";
                break;
            }
            case 'CourseManagement':{
                require_once "./model/course.php";
                $course = getAllCourse($data);
                require_once "./layout/CourseManagement.php";
                break;
            }
            case 'LessonManagement':{
                require_once "./model/Lesson.php";
                $lesson = getAllLesson($data);
                require_once "./layout/LessonManagement.php";
                break;
            }
            case 'PostManagement':{
                require_once "./model/post.php";
                $post = getAllPost($data);
                require_once "./layout/PostManagement.php";
                break;
            }
            case 'createNewLesson':{
                require_once "./layout/createNewLesson.php";
                break;
            }
            case 'RuteManagement':{
                require_once "./model/rute.php";
                $rute = getRuteAndCourse($data);
                require_once "./layout/RuteManagement.php";
                break;
            }
            case 'CommentManagement':{
                require_once "./model/Comment.php";
                $commentLesson = getAllCommentLesson($data);
                $commentPost =getAllCommentPost($data);
                require_once "./layout/CommentManagement.php";
                break;
            }


            //page LessonManagement
            case 'deleteLesson': {
                            
                break;
            }
            case 'editLesson':{
                if(isset($_GET['idLesson']) && $_GET['idLesson'] != ""){
                    require_once "./model/Lesson.php";
                    $id_lesson = $_GET['idLesson'];
                    $lessonById = getLessonById($id_lesson, $data);
                    require_once "./layout/editLesson.php";
                }
                break;
            }
            case 'updateLesson':{
                if(isset($_GET['idLesson']) && $_GET['idLesson'] != ""){
                    require_once "./model/Lesson.php";
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $video = $_POST['video'];
                    $id_lesson = $_GET['idLesson'];
                    $videoURL = "";
                    if(!empty($_POST['videoURL']) && isset($_FILES['videoURL'])){
                        require_once "./model/saveVideo.php";
                        $videoURL = saveVideo();
                    }else{
                        $videoURL = $video;
                    }
                    updateLessonById($title, $videoURL, $content, $id_lesson, $data);
                    $lesson = getAllLesson($data);
                    require_once "./layout/LessonManagement.php";
                }
                break;
            }


            //page userManagement
            case 'editUser': {
                if(isset($_GET['idUser']) && $_GET['idUser'] != ""){
                    require_once "./model/user.php";
                    require_once "./model/myLearning.php";
                    $id_user = $_GET['idUser'];
                    $Learning = getCourseByIdUser($id_user, $data);
                    $userById = getUserById($data, $id_user);
                    $role = $userById['Role'];
                    if($role == 1){
                        $role = 'Admin';
                    }if($role == 0){
                        $role = 'Người Dùng';
                    }
                    require_once "./layout/editUser.php";
                    
                }  
                break;
            }
            case 'deleteUser': {
                if(isset($_GET['idUser']) && $_GET['idUser'] != ""){
                    require_once "./model/user.php";
                    $id_user = $_GET['idUser'];
                    $delUser = deleteUserById($data, $id_user);
                    $user = getAllUser($data);
                    require_once "./layout/userManagement.php";
                }
                
                break;
            }
            case 'formEditUser': {
                if(isset($_GET['idUser']) && $_GET['idUser'] != ""){
                    $name = $_POST['name'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $role = $_POST['role'];
                    if($role == 'Admin'){
                        $role = 1;
                    }if($role == 'Người Dùng'){
                        $role = 0;
                    }
                    
                    require_once "./model/user.php";
                    $id_user = $_GET['idUser'];
                    $updateUser = updateUserById($data, $id_user, $name, 
                                                $username, $password, $email, $role);
                    //echo $username;
                    $user = getAllUser($data);
                    require_once "./layout/userManagement.php";
                }
                break;
            }
            
            
            default:

                break;
        }
    }
    require_once "./layout/footer.php";
?>