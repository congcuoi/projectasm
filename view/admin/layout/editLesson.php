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
                            <form class="row" action="index.php?page=updateLesson&idLesson=<?php echo $lessonById['idLesson']?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group col-md-3">
                                    <label class="control-label">Tiêu đề bài học</label>
                                    <input class="form-control" name="title" type="text" value="<?php echo $lessonById['title']?>">
                                </div>
                                <div class="form-group  col-md-3">
                                    <label class="control-label">Video URL</label>
                                    <input class="form-control" name="video" type="text" value="<?php echo $lessonById['VideoURL']?>">
                                    <input class="form-control" type="file" name="videoURL" id="fileToUpload">
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label class="control-label">Nội Dung</label>
                                    <textarea class="form-control" name="content" id="describe"><?php echo $lessonById['Content']?></textarea>
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