<main class="app-content">
            <div class="app-title">
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item">Danh sách bài học</li>
                    <li class="breadcrumb-item"><a href="#">Thêm bài học</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <h3 class="tile-title">Sửa bài học</h3>
                        <div class="tile-body">
                            <form class="row" action="productmanager?action=insertproduct" method="POST" enctype="multipart/form-data">
                                <div class="form-group col-md-3">
                                    <label class="control-label">Tiêu đề bài học</label>
                                    <input class="form-control" name="product_name" type="text" value="<?php echo $lessonById['title']?>">
                                </div>
                                <div class="form-group  col-md-3">
                                    <label class="control-label">Video URL</label>
                                    <input class="form-control" name="price" type="text" value="<?php echo $lessonById['VideoURL']?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleSelect1" class="control-label">Khóa học</label>
                                    <select name="category_id" class="form-control" id="exampleSelect1">
                                        <option>-- Chọn danh mục --</option>
                                        <div items="${CategoryData}" var="cat">
                                            <option value="${cat.category_id}">${cat.category_name}</option>
                                        </div>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleSelect1" class="control-label">Chương Học</label>
                                    <select name="category_id" class="form-control" id="exampleSelect1">
                                        <option>-- Chọn danh mục --</option>
                                        <div items="${CategoryData}" var="cat">
                                            <option value="${cat.category_id}">${cat.category_name}</option>
                                        </div>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label">Nội Dung</label>
                                    <textarea class="form-control" name="describe" id="describe"><?php echo $lessonById['Content']?></textarea>
                                </div>
                                <button class="btn btn-save" type="submit">Lưu Lại</button>
                                &nbsp;
                                <a class="btn btn-cancel" href="productmanager">Hủy bỏ</a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </main>