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
            
            
            default:
                # code...
                break;
        }
    }
    require_once "./layout/footer.php";
?>