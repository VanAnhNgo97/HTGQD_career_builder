@extends('admin.layouts.master')

@section('title')
	Trang Quản Trị
@endsection

@section('content')
	<div class="box-content">
					<h4 class="box-title">Danh Sách Công Việc</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>Tên Công Việc</th>
								<th>Lương</th>
								<th width="15px">Giới Tính</th>
								<th width="15px">Tuổi</th>
								<th width="15px">Kỹ Năng Mềm</th>
								<th width="25px">Kinh Nghiệm (Năm)</th>
								<td width="10px"></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Lập Trình Web</td>
								<td>2.500.000</td>
								<td>Nam</td>
								<td>26</td>
								<td>Tốt</td>
								<td>2</td>
								<td>
									<a href="{{ route('getEditWork') }}"><i class="fa fa-edit"></i></a>
									<a href=""><i class="fa fa-remove"></i></a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
@endsection

@section('script')
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ asset('admin/scripts/jquery.min.js') }}"></script>
	<script src="{{ asset('admin/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/plugin/nprogress/nprogress.js') }}"></script>
	<script src="{{ asset('admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	<script src="{{ asset('admin/plugin/waves/waves.min.js') }}"></script>
	<!-- Full Screen Plugin -->
	<script src="{{ asset('admin/plugin/fullscreen/jquery.fullscreen-min.js') }}"></script>
	<script src="{{ asset('admin/plugin/datatables/media/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin/plugin/datatables/media/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/scripts/datatables.demo.min.js') }}"></script>
	<!-- Percent Circle -->
	<script src="{{ asset('admin/scripts/main.min.js') }}"></script>
	<script src="{{ asset('admin/scripts/horizontal-menu.min.js') }}"></script>
	<script src="{{ asset('admin/color-switcher/color-switcher.min.js') }}"></script>
@endsection