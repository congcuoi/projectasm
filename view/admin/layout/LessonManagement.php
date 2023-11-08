<main class="app-content">
            <div class="app-title">
                <ul class="app-breadcrumb breadcrumb side">
                    <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
                </ul>
                <div id="clock"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="row element-button">
                                <div class="col-sm-2">
                                    <a class="btn btn-add btn-sm" href="index.php?page=createNewLesson" title="Thêm"><i class="fas fa-plus"></i>
                                        Tạo mới sản phẩm</a>
                                </div>
                                <div class="col-sm-2">
                                    <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                                            class="fas fa-print"></i> In dữ liệu</a>
                                </div>
                            </div>
                            <form action="productmanager?action=updateproduct" method="POST">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>ID bài học</th>
                                            <th>Tiêu đề bài học</th>
                                            <th>Video URL</th>
                                            <th>Content</th>
                                            <th>Tên Chương</th>
                                            <th>Tên khóa học</th>
                                            <th width="100">Tính năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while ($row = $lesson->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['idLesson']?></td>
                                                <td><?php echo $row['title']?></td>
                                                <td><?php echo $row['VideoURL']?></td>
                                                <td><?php echo $row['Content']?></td>
                                                <td><?php echo $row['idPartLesson']?></td>
                                                <td>Chưa liên kết bảng</td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm trash" type="button" title="Xóa" value="${p.product_id}">
                                                        <a href="index.php?page=deleteLesson"><i class="fas fa-trash-alt"></i></a>
                                                    </button>
                                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                                                            data-toggle="modal" data-target="#ModalUP${p.product_id}">
                                                            <a href="index.php?page=editLesson&idLesson=<?php echo $row['idLesson']?>"><i class="fas fa-edit"></i></a>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                            <!--
                                            MODAL
                                            -->

                                        <!-- <div class="modal fade" id="ModalUP${p.product_id}" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
                                             data-keyboard="false">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="form-group  col-md-12">
                                                                <span class="thong-tin-thanh-toan">
                                                                    <h5>Chỉnh sửa thông tin sản phẩm</h5>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">Mã sản phẩm </label>
                                                                <input class="form-control" type="text" readonly name="product_id" value="${p.product_id}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="exampleSelect1" class="control-label">Danh mục</label>
                                                                <select name="category_id" class="form-control" id="exampleSelect1">
                                                                    <option>-- Chọn danh mục --</option>
                                                                    <c:forEach items="${CategoryData}" var="cat">
                                                                        <option value="${cat.category_id}">${cat.category_name}</option>
                                                                    </c:forEach>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">Tên sản phẩm</label>
                                                                <input class="form-control" type="text" name="product_name" required value="${p.product_name}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">Giá</label>
                                                                <input class="form-control" type="number" name="product_price" required value="${p.product_price}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">Màu</label>
                                                                <input class="form-control" name="product_color" type="text" value="<c:forEach items="${ColorData}" var="c"><c:if test="${p.product_id==c.product_id}">${c.color},</c:if></c:forEach>">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label class="control-label">Size</label>
                                                                        <input class="form-control" name="product_size" type="text" value="<c:forEach items="${SizeData}" var="s"><c:if test="${p.product_id==s.product_id}">${s.size},</c:if></c:forEach>">
                                                                    </div>

                                                                    <div class="form-group col-md-6">
                                                                        <label class="control-label">Thông tin</label>
                                                                        <input class="form-control" type="text" name="product_describe" value="${p.product_describe}">
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">Số lượng</label>
                                                                <input class="form-control" type="text" name="product_quantity" value="${p.quantity}">
                                                            </div>
                                                            anh san pham
                                                            <div class="form-group col-md-12">
                                                                <label class="control-label">Ảnh sản phẩm</label>
                                                                <div id="myfileupload">
                                                                    <input type="file" id="uploadfile" name="product_img" value="${p.img}" onchange="readURL(this);" />
                                                                </div>
                                                                <div id="thumbbox">
                                                                    <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                                                                    <a class="removeimg" href="javascript:"></a>
                                                                </div>
                                                                <div id="boxchoice">
                                                                    <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a>
                                                                    <p style="clear:both"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <BR>
                                                        <button class="btn btn-save" type="submit">Lưu lại</button>
                                                        <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                                                        <BR>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!--
                                      MODAL
                                        -->
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>