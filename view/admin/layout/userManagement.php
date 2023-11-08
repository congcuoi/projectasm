<main class="app-content">
            <div class="app-title">
                <ul class="app-breadcrumb breadcrumb side">
                    <li class="breadcrumb-item active"><a href="#"><b>Danh sách người dùng</b></a></li>
                </ul>
                <div id="clock"></div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">

                            <div class="row element-button">
                            </div>

                            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
                                   id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>ID Người dùng</th>
                                        <th>Tên Người dùng</th>
                                        <th>Tên đăng nhập</th>
                                        <th>Mật khẩu</th>
                                        <th>Email</th>
                                        <th width="100">Tính năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($row = $user->fetch_assoc() ) {
                                    ?>
                                        <tr>
                                            <form action="">
                                                <td><?php echo $row['idUser']?></td>
                                                <td><?php echo $row['name']?></td>
                                                <td><?php echo $row['Username']?></td>
                                                <td><?php echo $row['Password']?></td>
                                                <td><?php echo $row['Email']?></td>
                                                <td><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal">
                                                        <a href="index.php?page=editUser&idUser=<?php echo $row['idUser']?>"><i class="fas fa-edit"></i></a>
                                                    </button>
                                                    <button class="btn btn-primary btn-sm trash" type="button" title="Xóa" value="${p.product_id}">
                                                        <a href="index.php?page=deleteUser&idUser=<?php echo $row['idUser']?>"><i class="fas fa-trash-alt"></i></a>
                                                    </button>       
                                                </td>
                                            </form>
                                            
                                        </tr>
                                    <?php 
                                    }
                                    ?>
                                        
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        <c:forEach items="${user}" var="u">           
            <div class="modal fade" id="ModalUP${u.user_id}" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
                 data-keyboard="false">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form method="POST" action="customermanager?action=update">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group  col-md-12">
                                        <span class="thong-tin-thanh-toan">
                                            <h5>Thêm Làm quản trị viên</h5>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleSelect1" class="control-label">Quyền quản trị</label>
                                        <input hidden name="user_id" value="${u.user_id}">
                                        <select name="permission" class="form-control" id="exampleSelect1">
                                            <option value="True">Cho phép</option>
                                            <option value="False">Hủy bỏ</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-save" type="submit">Lưu lại</button>
                                <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                                <br>
                            </div>
                        </form>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </c:forEach>