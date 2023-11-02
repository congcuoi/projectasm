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
                                        <th>ID khóa học</th>
                                        <th>Tiêu đề khóa học</th>
                                        <th>Giáo Viên</th>
                                        <th>Giá</th>
                                        <th>Decription</th>
                                        <th width="350">Tk đăng kí</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>${b.bill_id}</td>
                                            <td>${b.user.user_name}</td>
                                            <td>(+84)${b.phone}</td>
                                            <td>${b.address}</td>
                                            <td>${b.date}</td>
                                            <td>
                                                <div class="accordion-item">
                                                        <button class="accordion-button accordion-header" type="button" data-bs-toggle="collapse" 
                                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Danh Sách người dùng đăng kí
                                                        </button>
                                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li>Từ Công Hòa</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                </div>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>