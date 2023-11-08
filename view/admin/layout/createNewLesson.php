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
                        <h3 class="tile-title">Tạo mới bài học</h3>
                        <div class="tile-body">
                            <div class="row element-button">
                                <div class="col-sm-2">
                                    <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#adddanhmuc"><i
                                            class="fas fa-folder-plus"></i>Thêm bài học</a>
                                </div>
                            </div>

                            <form class="row" action="productmanager?action=insertproduct" method="POST" enctype="multipart/form-data">
                        
                                
                                <div class="form-group col-md-3">
                                    <label class="control-label">Tên bài học</label>
                                    <input class="form-control" name="nameLesson" type="text">
                                </div>
                                <div class="form-group  col-md-3">
                                    <label class="control-label">Video URL</label>
                                    <input class="form-control" type="file" name="videoURL" id="fileToUpload">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleSelect1" class="control-label">Phần Bài học</label>
                                    <select name="category_id" class="form-control" id="exampleSelect1">
                                        <option>-- Chọn danh mục --</option>
                                        <div >
                                            <option >${cat.category_name}</option>
                                        </div>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleSelect1" class="control-label">Khóa Học</label>
                                    <select name="category_id" class="form-control" id="exampleSelect1">
                                        <option>-- Chọn danh mục --</option>
                                        <div >
                                            <option >${cat.category_name}</option>
                                        </div>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label">Nội Dung</label>
                                    <textarea class="form-control" name="content" id="describe"></textarea>
                                </div>
                                <button class="btn btn-save" type="submit">Lưu lại</button>
                                &nbsp;
                                <a class="btn btn-cancel" href="productmanager">Hủy bỏ</a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </main>

        <!-- <div class="modal fade" id="adddanhmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
        </div> -->