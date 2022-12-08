<!-- BEGIN: main -->
<div class="container">
  <div class="row">
    <div class="col-md-4">
        <button type="submit" class="btn btn-success" id='loc'>Lọc</button>
    </div>
    <div class="col-md-10">
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<label class="input-group-text" for="inputGroupSelect01">Buổi</label>
				</span>
				<select class="form-control">
					<option selected>Chọn buổi...</option>
                    <option value="1">Sáng</option>
                    <option value="2">Chiều</option>
				</select>
			</div>
		</div>
    </div>
    <div class="col-md-10>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
                    <label class="input-group-text" for="inputGroupSelect01">Lớp</label>
				</span>
				<select class="form-control">
					<option selected>Chọn lớp...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
				</select>
			</div>
		</div>
    </div>
  </div>
</div>

<table class="table table-bordered table-success">
			<thead>
				<tr>
					<th class='text-center'>Thứ/Ngày</th>
					<th class='text-center'>Tiết</th>
					<th class='text-center'>Môn</th>
					<th class='text-center'>PPCT</th>
					<th class='text-center'>Tên bài dạy</th>
					<th class='text-center'>Số học sinh vắng</th>
					<th class='text-center'>Nhận xét tiết học</th>
					<th class='text-center'>Cho điểm xếp loại</th>
					<th class='text-center'>Giáo viên</th>
					<th class='text-center'>Ghi chú</th>
					<th class='text-center'>Chức năng</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class='text-center' rowspan='5'>Thứ hai<br/>Ngày 14/11/2022</td>
					<td class='text-center'>1</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>2</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>3</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>4</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>5</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center' rowspan='5'>Thứ ba<br/>Ngày 15/11/2022</td>
					<td class='text-center'>1</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>2</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>3</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>4</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>5</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center' rowspan='5'>Thứ tư<br/>Ngày 16/11/2022</td>
					<td class='text-center'>1</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>2</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>3</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>4</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>5</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center' rowspan='5'>Thứ năm<br/>Ngày 18/11/2022</td>
					<td class='text-center'>1</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>2</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>3</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>4</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>5</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center' rowspan='5'>Thứ sáu<br/>Ngày 19/11/2022</td>
					<td class='text-center'>1</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>2</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>3</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>4</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>5</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center' rowspan='5'>Thứ bảy<br/>Ngày 20/11/2022</td>
					<td class='text-center'>1</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>2</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>3</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>4</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>				</tr>
				<tr>
					<td class='text-center'>5</td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'></td>
					<td class='text-center'><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id='them'>+</button></td>
				</tr>
			</tbody>
		</table>
		
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nhập sổ đầu bài</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Môn:</p>
				<select>
					<option>A</option>
					<option>B</option>
					<option>C</option>
				</select>
				<p>PPCT:</p>
				<input type='text'>
				<p>Tên bài dạy:</p>
				<input type='text'>
				<p>Số học sinh vắng:</p>
				<input type='text'>
				<p>Nhận xét tiết học:</p>
				<input type='text'>
				<p>Cho điểm xếp loại:</p>
				<input type='text'>
				<p>Ghi chú:</p>
				<input type='text'>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
			</div>
		</div>
		</div>
<!-- END: main -->