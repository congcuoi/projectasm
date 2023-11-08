<main class="app-content">
            <div class="app-title">
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item">Danh sách người dùng</li>
                    <li class="breadcrumb-item"><a href="#">Thêm người dùng</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <h3 class="tile-title">Chỉnh sửa thông tin người dùng</h3>
                        <div class="tile-body">

                            <form class="row" action="index.php?page=formEditUser&idUser=<?php echo $userById['idUser']?>" method="POST" enctype="multipart/form-data">
                                <div class="text-center">
                                    <img src="<?php echo $userById['avatar']?>" class="rounded" alt="">
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="control-label">Mã người dùng</label>
                                    <input class="form-control" name="id" type="text" value="<?php echo $userById['idUser']?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="control-label">Tên người dùng</label>
                                    <input class="form-control" name="name" type="text" value="<?php echo $userById['name']?>">
                                </div>
                                <div class="form-group  col-md-3">
                                    <label class="control-label">Tên đăng nhập</label>
                                    <input class="form-control" name="username" type="text" value="<?php echo $userById['Username']?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="control-label">Mật khẩu</label>
                                    <input class="form-control" name="password" type="text" value="<?php echo $userById['Password']?>">
                                </div>
                                <div class="form-group  col-md-3">
                                    <label class="control-label">Email</label>
                                    <input class="form-control" name="email" type="text" value="<?php echo $userById['Email']?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="control-label">Vai trò</label>
                                    <input class="form-control" name="role" type="text" value="<?php echo $role?>">
                                </div>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id Khóa học đã đăng kí</th>
                                            <th scope="col">Tên khóa học</th>
                                            <th scope="col">Tiến độ học tập</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <?php 
                                                while ($row = $Learning->fetch_assoc()) { ?>
                                                <tr>
                                                    <td><?php echo $row['idCourse']?></td>
                                                    <td><?php echo $row['CourseTitle']?></td>
                                                    <td><?php echo $row['CompletionPercentage']?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                            
                                        
                                    </tbody>
                                </table>

                                
                                <button class="btn btn-save" type="submit">Lưu lại</button>
                                &nbsp;
                                <a class="btn btn-cancel" href="productmanager">Hủy bỏ</a>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </main>

        <div class="modal fade" id="adddanhmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
             data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group  col-md-12">
                                <span class="thong-tin-thanh-toan">
                                    <h5>Thêm mới danh mục </h5>
                                </span>
                            </div>

                            <div class="form-group col-md-12" >

                                <h2 style="color: red; padding-left: 10px">
                                    ${error}</h2>
                                <label class="control-label">Nhập tên danh mục mới</label>
                                <form action="productmanager?action=insertcategory" method="post"> 
                                    <input class="form-control" type="text" name="name" required>
                                    <br>
                                    <button class="btn btn-save" type="submit">Lưu lại</button>
                                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                                </form>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Danh mục sản phẩm hiện đang có</label>
                                <ul style="padding-left: 20px;">
                                    <div items="${CategoryData}" var="cat">
                                        <li>${cat.category_name}</li>
                                        </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>