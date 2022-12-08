<!-- BEGIN: main -->
<div class="page">
    <form method='post'>
        <input class='btn btn-success' type='button' name='themBoMon' value='Thêm bộ môn' data-toggle="modal" data-target="#exampleModal">
    </form>
    <div>
    <h1>jhjkhjj</h1>
    </div>
    <form method='post'>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nhập bộ môn</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Mã bộ môn:</p>
            <input name='mabomon' type='text' id="mabomon">
            <p>Tên bộ môn:</p>
            <input name='tenbomon' type='text' id="tenbomon">
            <p>Địa chỉ:</p>
            <input name='diachi' type='text' id="diachi">
            <p>Ghi chú:</p>
            <input name='ghichu' type='text' id="ghichu">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <button type="button" class="btn btn-success" name="them" onclick="addBoMon()" value='save'>Lưu</button>
        </div>
        </div>
    </div>
    </div>
    </form>
</div>
<!-- END: main -->