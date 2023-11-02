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
                                        <th>Nội Dung</th>
                                        <th>Ngày Đăng</th>
                                        <th>Tên Người Đăng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div class="accordion-item">
                                                        <button class="accordion-button accordion-header" type="button" data-bs-toggle="collapse" 
                                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Accordion Item #1
                                                        </button>
                                                        <div width = "100" style="width: 120px;" id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>
                                                                    Build vertically collapsing accordions in combination 
                                                                    with our Collapse JavaScript plugin
                                                                </p>
                                                            </div>
                                                        </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="accordion-item">
                                                        <button class="accordion-button accordion-header" type="button" data-bs-toggle="collapse" 
                                                        data-bs-target="#ContentPost" aria-expanded="true" aria-controls="ContentPost">
                                                            Accordion Item #1
                                                        </button>
                                                        <div width = "100" style="width: 120px;" id="ContentPost" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>
                                                                    Build vertically collapsing accordions in combination 
                                                                    with our Collapse JavaScript plugin
                                                                </p>
                                                            </div>
                                                        </div>
                                                </div>
                                            </td>
                                            <td>${d.size}</td>
                                            <td>${d.color}</td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>