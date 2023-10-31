<div class="container">		 
	<div class="title-style-1 clearfix"><h1><?=$title_detail?></h1></div>
	<div class="row">
		<div class="col-12">
			<div class="contact-form-body">
				<form method="post" action="dang-ky/" enctype="multipart/form-data">					
					<div class="form-row">
						<div class="form-group input-group col-lg-6">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-user"></i></div>
							</div>
							<input class="form-control" type="text" name="name" required placeholder="<?=_hoten?> *">
						</div>
						<div class="form-group input-group col-lg-6">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
							</div>
							<input class="form-control" type="text" name="address" required placeholder="<?=_diachi?> *">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group input-group col-lg-6">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-phone-volume"></i></div>
							</div>
							<input class="form-control" type="text" required name="phone" pattern=".{10}" title="10 số" onkeypress="return isNumberKey(event)" placeholder="<?=_dienthoai?> *">
						</div>
						<div class="form-group input-group col-lg-6">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-envelope"></i></div>
							</div>
							<input class="form-control" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required name="email" placeholder="Email *">
						</div>
					</div>
					<div class="form-group">
						<select class="form-control" id="chonlop" name="chonlop">
							<option>Chọn lớp</option>
							<option value="Lớp 1">Lớp 1</option>
							<option value="Lớp 2">Lớp 2</option>
							<option value="Lớp 3">Lớp 3</option>
							<option value="Lớp 4">Lớp 4</option>
							<option value="Lớp 5">Lớp 5</option>
							<option value="Lớp 6">Lớp 6</option>
							<option value="Lớp 7">Lớp 7</option>
							<option value="Lớp 8">Lớp 8</option>
							<option value="Lớp 9">Lớp 9</option>
							<option value="Lớp 10">Lớp 10</option>
							<option value="Lớp 11">Lớp 11</option>
							<option value="Lớp 12">Lớp 12</option>
							<option value="Ôn đại học">Ôn đại học</option>
							<option value="Lớp năng khiếu">Lớp năng khiếu</option>
							<option value="Lớp ngoại ngữ">Lớp ngoại ngữ</option>
							<option value="Lớp khác">Lớp khác</option>
							<option value="Lớp lá">Lớp lá</option>
							<option value="Hệ đại học">Hệ đại học</option>
						</select>
					</div>
					<div class="form-row">
						<div class="form-group input-group col-lg-6">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-book"></i></div>
							</div>
							<input class="form-control" type="text" required name="monhoc" placeholder="Môn học *">
						</div>
						<div class="form-group input-group col-lg-6">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-users"></i></div>
							</div>
							<input class="form-control" type="text" required name="soluong" placeholder="Số lượng học sinh *">
						</div>
					</div>
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fas fa-user-graduate"></i></div>
						</div>
						<input class="form-control" type="text" name="hocluc" required placeholder="Học lực hiện tại *">
					</div>
					<div class="form-group">
						<select class="form-control" id="sobuoi" name="sobuoi">
							<option>Số buổi</option>
							<option value="1 buổi">1 buổi</option>
							<option value="2 buổi">2 buổi</option>
							<option value="3 buổi">3 buổi</option>
							<option value="4 buổi">4 buổi</option>
							<option value="5 buổi">5 buổi</option>
							<option value="6 buổi">6 buổi</option>
							<option value="7 buổi">7 buổi</option>
						</select>
					</div>
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="far fa-clock"></i></div>
						</div>
						<input class="form-control" type="text" name="thoigian" required placeholder="Thời gian học *">
					</div>
					<div class="form-group">
						<select class="form-control" id="yeucau" name="yeucau">
							<option>Chọn yêu cầu</option>
							<option value="Sinh viên nam">Sinh viên nam</option>
							<option value="Sinh viên nữ">Sinh viên nữ</option>
							<option value="Sinh viên">Sinh viên</option>
							<option value="Giáo viên nam">Giáo viên nam</option>
							<option value="Giáo viên nữ">Giáo viên nữ</option>
							<option value="Giáo viên">Giáo viên</option>
							<option value="Cử nhân">Cử nhân</option>
							<option value="Cử nhân nam">Cử nhân nam</option>
							<option value="Cử nhân nữ">Cử nhân nữ</option>
							<option value="Thạc sỹ">Thạc sỹ</option>
							<option value="Thạc sỹ nam">Thạc sỹ nam</option>
							<option value="Thạc sỹ nữ">Thạc sỹ nữ</option>
							<option value="Tiến sỹ">Tiến sỹ</option>
							<option value="Tiến sỹ nam">Tiến sỹ nam</option>
							<option value="Tiến sỹ nữ">Tiến sỹ nữ</option>
						</select>
					</div>
					<div class="form-group">
						<textarea class="form-control" name="content" placeholder="Yêu cầu khác"></textarea>
					</div>
					<div class="form-group">
						<div id="captcha-wrap">
							<div class="boxrecapcha"><div id="recaptcha"></div></div>
						</div>
						<button class="btn btn-danger btn-color px-4 py-2">Gửi</button>
					</div>
				</form>
			</div>
		</div> 
	</div>
	<?= $row_detail['content_'.$lang] != '' ? '<article class="my-3">'.$row_detail['content_'.$lang].'</article>' : '' ?>
</div>