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
                                <div class="col-md-12" >
                                    <p>Bình Luận Bài Học</p>
                                </div>
                            </div>
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>ID Bình Luận</th>
                                        <th>Nội Dung</th>
                                        <th>Ngày Bình Luận</th>
                                        <th>Bài học</th>
                                        <th>Người dùng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($rowLesson = $commentLesson->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $rowLesson['idComment']?></td>
                                        <td><?php echo $rowLesson['Content']?></td>
                                        <td><?php echo $rowLesson['Date']?></td>
                                        <td><?php echo $rowLesson['title']?></td>
                                        <td><?php echo $rowLesson['name']?></td>
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

            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="row element-button">
                                <div class="col-md-12" >
                                    <p>Bình Luận Bài Viết</p>
                                </div>
                            </div>
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>ID Bình Luận</th>
                                        <th>Nội Dung</th>
                                        <th>Ngày Bình Luận</th>
                                        <th>Bài Viết</th>
                                        <th>Người dùng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($rowPost = $commentPost->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $rowPost['idComment']?></td>
                                        <td><?php echo $rowPost['Content']?></td>
                                        <td><?php echo $rowPost['Date']?></td>
                                        <td><?php echo $rowPost['Title']?></td>
                                        <td><?php echo $rowPost['name']?></td>
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