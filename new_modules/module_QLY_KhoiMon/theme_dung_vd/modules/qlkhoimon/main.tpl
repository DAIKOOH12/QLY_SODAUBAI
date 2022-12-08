<!-- BEGIN: main -->
<div class="page">
    <form method='post'>
        <input class='btn btn-success' type='button' name='themBoMon' value='Thêm bộ môn' data-toggle="modal" data-target="#exampleModal">
    </form>
    <div>
        <form method='post'>
        <table class="table">
            <tr>
                <th class='text-center'>STT</th>
                <th class='text-center'>Mã khối môn</th>
                <th class='text-center'>Môn học</th>
                <th class='text-center'>Khối</th>
                <th class='text-center'>Số tiết</th>
                <th class='text-center'>Ghi chú</th>
                <th class='text-center'>Tác vụ</th>
            </tr>
            <!-- BEGIN: loop -->
            <tr>
                <td class='text-center'>{STT}</td>
                <td class='text-center'>{KHOIMON.makhoimon}</td>
                <td class='text-center'>{KHOIMON.tenmon}</td>
                <td class='text-center'>{KHOIMON.tenkhoi}</td>
                <td class='text-center'>{KHOIMON.sotiet}</td>
                <td class='text-center'>{KHOIMON.ghichu}</td>
                <td class='text-center'>
                    <button class='btn btn-primary' type='submit' name='sua' value={KHOIMON.makhoimon}>Sửa</button>
                </td>
            </tr>
            <!-- END: loop -->
        </table>
        </form>
    </div>
    <form method='post'>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nhập khối môn</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Mã khối môn:</p>
            <input name='makhoimon' type='text' id="makhoimon" value>
            <p>Môn học:</p>
            <select name='monhoc' id="monhoc">
                <!-- BEGIN: mon-->
                <option value={MON.mamon}>{MON.tenmon}</option>
                <!-- END: mon-->
            </select>
            <p>Khối:</p>
            <select name='khoi' id="khoi">
                <!-- BEGIN: khoi-->
                <option value={KHOI.makhoi}>{KHOI.tenkhoi}</option>
                <!-- END: khoi-->
            </select>
            <p>Số tiết:</p>
            <input name='sotiet' type='number' id="diachi">
            <p>Ghi chú:</p>
            <input name='ghichu' type='text' id="ghichu">
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