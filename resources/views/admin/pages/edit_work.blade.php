@extends('admin.layouts.master')

@section('title')
	Sửa Công Việc
@endsection

@section('content')
	<div class="box-content card white ">
					<h4 class="box-title">Thông Tin Công Việc</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form class="form-horizontal" action="{{ route('postEditWork') }}" method="post">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Tên Nghề Nghiệp:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="job_name" placeholder="tên công việc ..." value="{{ $job->name }}">
										<input type="hidden" name="id" value="{{ $job->id }}">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-3" class="col-sm-4 control-label">Yêu cầu giới tính:</label>
									<div class="col-sm-8">
										<select class="form-control" name="gender">
											@php
												$gender=$job->gender;
											@endphp
											<option value="">Chọn giới tính</option>
											<option value="1" @if ($gender==1)
												selected 
											@endif>Nam</option>
											<option value="2" @if ($gender==2)
												selected 
											@endif>Nữ</option>
											<option value="0" @if ($gender==0)
												selected 
											@endif>Cả 2</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Mức Lương:</label>
									<div class="col-sm-8">
										<input type="number" class="form-control" name="salary" placeholder="mức lương chấp nhận ..." value="{{ $job->salary }}">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Nghành Nghề:</label>
									<div class="col-sm-8">
										<select class="form-control" name="career_id">
											@php
												$career_id=$job->career_id;
											@endphp
											<option value="">Chọn ngành nghề</option>
											<option value="1" @if ($career_id==1)
												selected 
											@endif>CNTT Phần Mềm</option>
											<option value="2" @if ($career_id==2)
												selected 
											@endif>Bán Hàng Kinh Doanh</option>
											<option value="3" @if ($career_id==3)
												selected 
											@endif>Cơ Khí Ô Tô Tự Động Hóa</option>
											<option value="4" @if ($career_id==4)
												selected 
											@endif>Quảng Cáo Đối Ngoại Truyền Thông</option>
											<option value="5" @if ($career_id==5)
												selected 
											@endif>Kế Toán Kiểm Toán</option>
											<option value="6" @if ($career_id==6)
												selected 
											@endif>Thực Phẩm Và Đồ Uống</option>
											<option value="7" @if ($career_id==7)
												selected 
											@endif>Tài Chính Đầu Tư</option>
											<option value="8" @if ($career_id==8)
												selected 
											@endif>Ngân Hàng</option>
											<option value="9" @if ($career_id==9)
												selected 
											@endif>Y Tế Sức Khỏe</option>
											<option value="10" @if ($career_id==10)
												selected 
											@endif>Giáo Dục Đào Tạo</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Kỹ Năng Mềm:</label>
									<div class="col-sm-8" >
										<select class="form-control" name="soft_skill">
											@php
												$soft_skill=$job->soft_skill;
											@endphp
											<option value="">Chọn mức độ</option>
											<option value="1" @if ($soft_skill==1)
												selected 
											@endif>Kém</option>
											<option value="2" @if ($soft_skill==2)
												selected 
											@endif>Khá</option>
											<option value="3" @if ($soft_skill==3)
												selected 
											@endif>Trung Bình</option>
											<option value="4" @if ($soft_skill==4)
												selected 
											@endif>Tốt</option>
											<option value="5" @if ($soft_skill==5)
												selected 
											@endif>Rất tốt</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Phúc Lợi:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="benefits" placeholder="phúc lợi..." value="{{ $job->benefits }}">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-5" class="col-sm-4 control-label">Mô Tả</label>
									<div class="col-sm-8">
										<textarea class="form-control" name="description" placeholder="mô tả về công việc">{{ $job->description }}</textarea>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Cấp Bậc:</label>
									<div class="col-sm-8">
										@php
											$position_id=$job->position_id;
										@endphp
										<select class="form-control" name="position_id">
											<option value="">Chọn cấp bậc</option>
											<option value="1" @if ($position_id==1)
												selected 
											@endif>Sinh viên thực tập</option>
											<option value="2" @if ($position_id==2)
												selected 
											@endif>Mới tốt nghiệp</option>
											<option value="3" @if ($position_id==3)
												selected 
											@endif>Nhân viên</option>
											<option value="4" @if ($position_id==4)
												selected 
											@endif>Trưởng nhóm giám sát</option>
											<option value="5" @if ($position_id==5)
												selected 
											@endif>Quản lý</option>
											<option value="6" @if ($position_id==6)
												selected 
											@endif>Quản lý cấp cao</option>
											<option value="7" @if ($position_id==7)
												selected 
											@endif>Điều hành cấp cao</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Yêu Cầu Tuổi:</label>
									<div>
										<div class="col-sm-4">
											<input type="number" name="min_age" class="form-control" placeholder="tuổi nhỏ nhất chấp nhận ..." value="{{ $job->min_age }}">
										</div>
										<div class="col-sm-4">
											<input type="number" name="max_age" class="form-control" placeholder="tuổi lớn nhất chấp nhận ..." value="{{ $job->max_age }}">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Địa Điểm:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="position_name" placeholder="địa điểm làm việc ...">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Kinh Nghiệm:</label>
									<div class="col-sm-8">
										<input type="number" class="form-control" name="experience" placeholder="số năm kinh nghiệm ..." value="{{ $job->experience }}">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-5" class="col-sm-4 control-label">Yêu Cầu:</label>
									<div class="col-sm-8">
										<textarea class="form-control" name="requirement" placeholder="yêu cầu về công việc">{{ $job->requirement }}</textarea>
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