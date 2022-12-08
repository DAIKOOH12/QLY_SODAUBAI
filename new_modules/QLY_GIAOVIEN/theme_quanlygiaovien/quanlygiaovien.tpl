<!-- BEGIN: main -->
<div class="page">
    <form method='post'>
        <input class='btn btn-success' type='button' name='themBoMon' value='Thêm giáo viên' data-toggle="modal" data-target="#exampleModal">
    </form>
    <div>
        <table class="table" id="tbladd">
            <tr>
                <td>STT</td>
                <td>Mã giáo viên</td>
                <td>Tên giáo vien</td>
                <td>Bộ môn</td>
                <td>Giới tính</td>
                <td>Địa chỉ</td>
                <td>Email</td>
                <td>Số điện thoại</td>
            </tr>
            <!-- BEGIN: loop -->
            <tr id="trKey">
                <td>{STT}</td>
                <td>{GIAOVIEN.magiaovien}</td>
                <td>{GIAOVIEN.tengiaovien}</td>
                <td>{GIAOVIEN.bomon}</td>
                <td>{GIAOVIEN.gioitinh}</td>
                <td>{GIAOVIEN.diachi}</td>
                <td>{GIAOVIEN.email}</td>
                <td>{GIAOVIEN.sdt}</td>
                <td>
                    <button class="fixGV btn btn-primary" value="{GIAOVIEN.magiaovien}">Sửa</button>
                </td>
            </tr>
            <!-- END: loop -->
        </table>
    </div>
    <form method='post'>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thêm giáo viên</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Mã giáo viên:</p>
            <input name='magiaovien' type='text' id="magiaovien">
            <p>Tên giáo viên:</p>
            <input name='tengiaovien' type='text' id="tengiaovien">
            <p>Bộ môn:</p>
            <input name='bomon' type='text' id="bomon">
            <p>Giới tính:</p>
            <input name='gioitinh' type='text' id="gioitinh">
            <p>Địa chỉ:</p>
            <input name='diachi' type='text' id="diachi">
            <p>Email: </p>
            <input name='email' type='text' id="email">
            <p>Số điện thoại:</p>
            <input name='sdt' type='text' id="sdt">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <input type="submit" class="btn btn-success" name="them" onclick="addBoMon()" value='save'>
        </div>
        </div>
    </div>
    </div>
    </form>
</div>
<!-- END: main -->