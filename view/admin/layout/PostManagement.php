<main class="app-content">
            <div class="app-title">
                <ul class="app-breadcrumb breadcrumb side">
                    <li class="breadcrumb-item active"><a href="#"><b>Chi tiết đơn hàng</b></a></li>
                </ul>
                <div id="clock"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="row element-button">
                                <div class="col-sm-2">
                                    <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                                            class="fas fa-print"></i> In dữ liệu</a>
                                </div>
                            </div>
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>ID Bài Viết</th>
                                        <th>Tiêu đề bài viết</th>
                                        <th>Hình ảnh</th>
                                        <th>Nội Dung</th>
                                        <th>Ngày Đăng</th>
                                        <th>Tên Người Đăng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        while ($row = $post->fetch_assoc()) {
                                    ?> 
                                        <tr>
                                            <td><?php echo $row['idPost']?></td>
                                            <td><?php echo $row['Title']?></td>
                                            <td><?php echo $row['imgPort']?></td>
                                            <td><?php echo $row['Content']?></td>
                                            <td><?php echo $row['Date']?></td>
                                            <td><?php echo $row['name']?></td>
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