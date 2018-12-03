@extends('admin.layouts.master')

@section('title')
	Thêm Công Việc
@endsection

@section('content')
	<div class="box-content card white ">
					<h4 class="box-title">Thông Tin Công Việc</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form class="form-horizontal" action="{{ route('postAddWork') }}" method="post">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Tên Nghề Nghiệp:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="job_name" placeholder="tên công việc ...">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-3" class="col-sm-4 control-label">Yêu cầu giới tính:</label>
									<div class="col-sm-8">
										<select class="form-control" name="gender">
											<option value="">Chọn giới tính</option>
											<option value="1">Nam</option>
											<option value="2">Nữ</option>
											<option value="0">Cả 2</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Mức Lương:</label>
									<div class="col-sm-8">
										<input type="number" class="form-control" name="salary" placeholder="mức lương chấp nhận ...">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Nghành Nghề:</label>
									<div class="col-sm-8">
										<select class="form-control" name="career_id">
											<option value="">Chọn ngành nghề</option>
											<option value="1">CNTT Phần Mềm</option>
											<option value="2">Bán Hàng Kinh Doanh</option>
											<option value="3">Cơ Khí Ô Tô Tự Động Hóa</option>
											<option value="4">Quảng Cáo Đối Ngoại Truyền Thông</option>
											<option value="5">Kế Toán Kiểm Toán</option>
											<option value="6">Thực Phẩm Và Đồ Uống</option>
											<option value="7">Tài Chính Đầu Tư</option>
											<option value="8">Ngân Hàng</option>
											<option value="9">Y Tế Sức Khỏe</option>
											<option value="10">Giáo Dục Đào Tạo</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Kỹ Năng Mềm:</label>
									<div class="col-sm-8" >
										<select class="form-control" name="soft_skill">
											<option value="">Chọn mức độ</option>
											<option value="1">Kém</option>
											<option value="2">Khá</option>
											<option value="3">Trung Bình</option>
											<option value="4">Tốt</option>
											<option value="5">Rất tốt</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Phúc Lợi:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="benefits" placeholder="phúc lợi...">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-5" class="col-sm-4 control-label">Mô Tả</label>
									<div class="col-sm-8">
										<textarea class="form-control" name="description" placeholder="mô tả về công việc"></textarea>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Cấp Bậc:</label>
									<div class="col-sm-8">
										<select class="form-control" name="position_id">
											<option value="">Chọn cấp bậc</option>
											<option value="1">Sinh viên thực tập</option>
											<option value="2">Mới tốt nghiệp</option>
											<option value="3">Nhân viên</option>
											<option value="4">Trưởng nhóm giám sát</option>
											<option value="5">Quản lý</option>
											<option value="6">Quản lý cấp cao</option>
											<option value="7">Điều hành cấp cao</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Yêu Cầu Tuổi:</label>
									<div>
										<div class="col-sm-4">
											<input type="number" name="min_age" class="form-control" placeholder="tuổi nhỏ nhất chấp nhận ...">
										</div>
										<div class="col-sm-4">
											<input type="number" name="max_age" class="form-control" placeholder="tuổi lớn nhất chấp nhận ...">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Địa Điểm:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="location" placeholder="địa điểm làm việc ...">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Kinh Nghiệm:</label>
									<div class="col-sm-8">
										<input type="number" class="form-control" name="experience" placeholder="số năm kinh nghiệm ...">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-5" class="col-sm-4 control-label">Yêu Cầu:</label>
									<div class="col-sm-8">
										<textarea class="form-control" name="requirement" placeholder="yêu cầu về công việc"></textarea>
										<br>
										<button type="submit" class="btn btn-primary waves-effect waves-light">Hoàn Thành</button>
									</div>
								</div>
							</div>	
							
						</form>
					</div>
				</div>
@endsection

@section('script')
	<script src="{{ asset('admin/scripts/jquery.min.js') }}"></script>
	<script src="{{ asset('admin/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/plugin/nprogress/nprogress.js') }}"></script>
	<script src="{{ asset('admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	<script src="{{ asset('admin/plugin/waves/waves.min.js') }}"></script>
	<!-- Full Screen Plugin -->
	<script src="{{ asset('admin/plugin/fullscreen/jquery.fullscreen-min.js') }}"></script>
	<!-- Percent Circle -->
	<script src="{{ asset('admin/scripts/main.min.js') }}"></script>
	<script src="{{ asset('admin/scripts/horizontal-menu.min.js') }}"></script>
	<script src="{{ asset('admin/color-switcher/color-switcher.min.js') }}"></script>
@endsection