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
                require_once "./layout/PostManagement.php";

                break;
            }
            case 'createNew':{
                require_once "./layout/createNew.php";

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

            //page userManagement
            case 'editUser': {
                if(isset($_GET['idUser']) && $_GET['idUser'] != ""){
                    require_once "./model/user.php";
                    $id_user = $_GET['idUser'];
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
                header('Location: ./layout/userManagement.php');
                break;
            }
            
            
            default:

                break;
        }
    }
    require_once "./layout/footer.php";
?>