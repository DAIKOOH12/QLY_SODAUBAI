<!-- BEGIN: main -->
<div class="page">
    <form method='post'>
        <input class='btn btn-success' type='button' name='themBoMon' value='Thêm PPCT' data-toggle="modal" data-target="#exampleModal">
    </form>
    <div>
        <form method='post'>
        <table class="table">
            <tr>
                <th class='text-center'>STT</th>
                <th class='text-center'>Mã PPCT</th>
                <th class='text-center'>Năm học</th>
                <th class='text-center'>Khối môn</th>
                <th class='text-center'>Bài học</th>
                <th class='text-center'>Tiết</th>
                <th class='text-center'>Tác vụ</th>
            </tr>
            <!-- BEGIN: loop -->
            <tr>
                <td class='text-center'>{STT}</td>
                <td class='text-center'>{PPCT.mappct}</td>
                <td class='text-center'>{PPCT.tennamhoc}</td>
                <td class='text-center'>{PPCT.tenmon} - {PPCT.tenkhoi}</td>
                <td class='text-center'>{PPCT.tenbaihoc}</td>
                <td class='text-center'>{PPCT.tiet}</td>
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
            <h5 class="modal-title" id="exampleModalLabel">Nhập PPCT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Năm học:</p>
            <select name='namhoc' id="namhoc">
                <!-- BEGIN: namhoc-->
                <option value={NAMHOC.manamhoc}>{NAMHOC.tennamhoc}</option>
                <!-- END: namhoc-->
            </select>
            <p>Khối môn:</p>
            <select name='khoimon' id="khoimon">
                <!-- BEGIN: khoimon-->
                <option value={KHOIMON.makhoimon}>{KHOIMON.tenmon} - {KHOIMON.tenkhoi}</option>
                <!-- END: khoimon-->
            </select>
            <p>Bài học:</p>
            <input name='baihoc' type='text' id="baihoc">
            <p>Tiết:</p>
            <input name='tiet' type='number' id="tiet">
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