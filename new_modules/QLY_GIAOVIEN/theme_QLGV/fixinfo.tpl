<!-- BEGIN: main -->
<div class="page">
    <h1>Chỉnh sửa thông tin giáo viên</h1>
    <form action="" method="post">
        <div class="form-group">
          <input name='magiaovien' type='text' id="magiaovien" value="{GIAOVIEN.magiaovien}" style="visibility: hidden;""> 
        </div>
        <div class="form-group">
            <label for="magiaovien">Tên giáo viên:</label>
            <input name='tengiaovien' type='text' id="tengiaovien" value="{GIAOVIEN.tengiaovien}">
        </div>
        <div class="form-group">
            <label for="bomon">Bộ môn:</label>
            <input name='bomon' type='text' id="bomon" value="{GIAOVIEN.bomon}">
        </div>
        <div class="form-group">
            <label for="gioitinh">Giới tính:</label>
            <input name='gioitinh' type='text' id="gioitinh" value="{GIAOVIEN.gioitinh}">
        </div>
        <div class="form-group">
            <label for="diachi">Đia chỉ:</label>
            <input name='diachi' type='text' id="diachi" value="{GIAOVIEN.diachi}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input name='email' type='text' id="email" value="{GIAOVIEN.email}">
        </div>
        <div class="form-group">
            <label for="sdt">Số điện thoại:</label>
            <input name='sdt' type='text' id="sdt" value="{GIAOVIEN.sdt}">
        </div>
        <input type="submit" name="update" value="Lưu" class="btn btn-success">
      </form>
</div>
<!-- END: main -->