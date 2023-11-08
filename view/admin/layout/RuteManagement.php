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
                                        <th>ID Lộ Trình</th>
                                        <th>Tên lộ Trình</th>
                                        <th>Khóa học</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($row = $rute->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['idRutes']?></td>
                                        <td><?php echo $row['nameRute']?></td>
                                        <td><?php echo $row['CourseTitle']?></td>
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