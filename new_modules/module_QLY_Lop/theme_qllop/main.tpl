<!-- BEGIN: main -->
<div class="page">
    <form method='post'>
        <input class='btn btn-success' type='button' name='themBoMon' value='Thêm lớp' data-toggle="modal" data-target="#exampleModal">
    </form>
    <div>
        <form method='post'>
        <table class="table">
            <tr>
                <th class='text-center'>STT</th>
                <th class='text-center'>Mã lớp</th>
                <th class='text-center'>Khối</th>
                <th class='text-center'>Tên lớp</th>
                <th class='text-center'>GVCN</th>
                <th class='text-center'>Ghi chú</th>
                <th class='text-center'>Tác vụ</th>
            </tr>
            <!-- BEGIN: loop -->
            <tr>
                <td class='text-center'>{STT}</td>
                <td class='text-center'>{LOP.malop}</td>
                <td class='text-center'>{LOP.tenkhoi}</td>
                <td class='text-center'>{LOP.tenlop}</td>
                <td class='text-center'>{LOP.tengv}</td>
                <td class='text-center'>{LOP.ghichu}</td>
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
            <p>Mã lớp:</p>
            <input name='malop' type='text' id="malop">
            <p>Khối:</p>
            <select name='khoi' id="khoi">
                <!-- BEGIN: khoi-->
                <option value={KHOI.makhoi}>{KHOI.tenkhoi}</option>
                <!-- END: khoi-->
            </select>
            <p>Tên lớp:</p>
            <input name='tenlop' type='text' id="tenlop">
            <p>GVCN:</p>
            <select name='giaovien' id="giaovien">
                <!-- BEGIN: giaovien-->
                <option value={GV.magv}>{GV.tengv}</option>
                <!-- END: giaovien-->
            </select>
            <p>Ghi chú:</p>
            <input name='ghichu' type='text' id="ghichu">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <input type="submit" class="btn btn-success" name="them" value='save'>
        </div>
        </div>
    </div>
    </div>
    </form>
</div>
<!-- END: main -->