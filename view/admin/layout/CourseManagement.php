<main class="app-content">
            <div class="app-title">
                <ul class="app-breadcrumb breadcrumb side">
                    <li class="breadcrumb-item active"><a href="#"><b>Quản lý người dùng</b></a></li>
                    <li class="breadcrumb-item active"><a href="#"><b>Php ...</b></a></li>
                </ul>
                <div id="clock"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="row element-button">
                                <div class="col-sm-2" >
                                    <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                                            class="fas fa-print"></i> In dữ liệu</a>
                                </div>
                            </div>
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>ID khóa học</th>
                                        <th>Tiêu đề khóa học</th>
                                        <th>Hình ảnh khóa học</th>
                                        <th>Giáo Viên</th>
                                        <th>Giá</th>
                                        <th width="350">Tk đăng kí</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($row = $course->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['idCourse']?></td>
                                            <td><?php echo $row['CourseTitle']?></td>
                                            <td><img src="<?php echo $row['imgCourse']?>" alt="" style="width: 150px; height: 100px;"></td>
                                            <td><?php echo $row['idTeacher']?></td>
                                            <td><?php echo $row['Price']?></td>
                                            <td>
                                                <div class="accordion-item">
                                                        <button class="accordion-button accordion-header" type="button" data-bs-toggle="collapse" 
                                                        data-bs-target="#collapseOne<?php echo $row['idCourse']?>" aria-expanded="true" aria-controls="collapseOne<?php echo $row['idCourse']?>">
                                                            Danh Sách người dùng đăng kí
                                                        </button>
                                                        <div id="collapseOne<?php echo $row['idCourse']?>" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <?php
                                                                        $URC = getUserRegisterCourse($data, $row['idCourse']);
                                                                        while ($rowCoures = $URC->fetch_assoc()) {
                                                                    ?>
                                                                            <li><?php echo $rowCoures['idUser']?></li>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                }?>
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>