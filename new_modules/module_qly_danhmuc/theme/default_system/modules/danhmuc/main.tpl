<!--BEGIN: main-->
<div class="panel">
    <div class="panel-heading text-center"><h1>DANH MỤC</h1></div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" style="width: 2rem;">STT</th>
                    <th class="text-center">Tên danh mục</th>
                    <th class="text-center">Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="">Năm Học</td>
                    <td class="text-center">
                        <button class="btn btn-primary" name="btn_modal_namhoc" data-toggle="modal" data-target="#modal_monhoc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" style="color: rgb(255, 255, 255); font-weight: 600;" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </button>
                        <button class="btn btn-success" name="btn_import_namhoc"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
                    </td>
                    <!--Modal năm h-->
                    <div class="modal fade" id="modal_monhoc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h2 class="modal-title" id="exampleModalLabel">Thêm dữ liệu bảng năm học</h2>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Tên năm học(vd: 2020-2021):</label>
                                  <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Thời gian bắt đầu:</label>
                                  <input type="date" name="" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-form-lable">Thời gian kết thúc:</label>
                                    <input type="date" name="" id="" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="" class="col-form-lable">Ghi chú:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                              <button type="button" class="btn btn-primary">Thêm</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td class="">Môn Học</td>
                    <td class="text-center">
                        <button class="btn btn-primary" name="btn_modal_monhoc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" style="color: rgb(255, 255, 255); font-weight: 600;" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </button>
                        <button class="btn btn-success" name="btn_import_monhoc"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td class="">Khối</td>
                    <td class="text-center">
                        <button class="btn btn-primary" name="btn_add_khoi">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" style="color: rgb(255, 255, 255); font-weight: 600;" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </button>
                        <button class="btn btn-success" name="btn_import_khoi"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td class="">Bộ Môn</td>
                    <td class="text-center">
                        <button class="btn btn-primary" name="btn_add_bomon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" style="color: rgb(255, 255, 255); font-weight: 600;" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </button>
                        <button class="btn btn-success" name="btn_import_bomon"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td class="">Sở Giáo Dục</td>
                    <td class="text-center">
                        <button class="btn btn-primary" name="btn_add_so">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" style="color: rgb(255, 255, 255); font-weight: 600;" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </button>
                        <button class="btn btn-success" name="btn_import_so"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">6</td>
                    <td class="">Phòng Giáo Dục</td>
                    <td class="text-center">
                        <button class="btn btn-primary" name="btn_add_phong">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" style="color: rgb(255, 255, 255); font-weight: 600;" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </button>
                        <button class="btn btn-success" name="btn_import_phong"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">7</td>
                    <td class="">Loại Trường</td>
                    <td class="text-center">
                        <button class="btn btn-primary" name="btn_add_loaitruong">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" style="color: rgb(255, 255, 255); font-weight: 600;" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </button>
                        <button class="btn btn-success" name="btn_import_loaitruong"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">8</td>
                    <td class="">Trường</td>
                    <td class="text-center">
                        <button class="btn btn-primary" name="btn_add_truong">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" style="color: rgb(255, 255, 255); font-weight: 600;" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </button>
                        <button class="btn btn-success" name="btn_import_excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>
<!--END: main-->