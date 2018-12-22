@extends('admin.layouts.master')

@section('title')
	Thay Đổi Trọng Số
@endsection

@section('content')
	<div class="box-content card white ">
					<h4 class="box-title">Thông Tin Trọng Số</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form class="form-horizontal" method="post" action="{{ route('postEditWeight') }}">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Tuổi:</label>
									<div class="col-sm-8">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="text" name="age" class="form-control" placeholder="trọng số cho tuổi ..." value="{{ $weights['age'] }}">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Ngành nghề:</label>
									<div class="col-sm-8">
										<input type="text" name="career_sim" class="form-control" placeholder="trọng số cho ngành nghề ..." value="{{ $weights['career_sim'] }}">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Lương:</label>
									<div class="col-sm-8">
										<input type="text" name="salary" class="form-control" placeholder="trọng số cho lương ..." value="{{ $weights['salary'] }}">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Khoảng cách:</label>
									<div class="col-sm-8">
										<input type="text" name="distance" class="form-control" placeholder="trọng số cho khoảng cách ..." value="{{ $weights['distance'] }}">
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Kinh nghiệm:</label>
									<div class="col-sm-8">
										<input type="text" name="experience" class="form-control" placeholder="trọng số cho kinh nghiệm ..." value="{{ $weights['experience'] }}">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Kỹ năng mềm:</label>
									<div class="col-sm-8">
										<input type="text" name="soft_skill" class="form-control" placeholder="trọng số cho kỹ năng mềm ..." value="{{ $weights['soft_skill'] }}">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label">Cấp bậc:</label>
									<div class="col-sm-8">
										<input type="text" name="position" class="form-control" placeholder="trọng số cho cấp bậc ..." value="{{ $weights['position'] }}">
									</div>
								</div>
								<div class="form-group">
									<label for="inp-type-1" class="col-sm-4 control-label"></label>
									<div class="col-sm-8">
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