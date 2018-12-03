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
							@if (count($jobs)>0)
								@foreach ($jobs as $job)
									<tr>
										<td>{{ $job->name }}</td>
										<td>{{ $job->salary }}</td>
										<td>@if ($job->gender==0)
											Cả 2
										@elseif($job->gender==1)
											Nam
										@else
											Nữ
										@endif</td>
										<td>{{ $job->min_age.'-'.$job->max_age }}</td>
										<td>{{ $job->getSoft_Skill() }}</td>
										<td>{{ $job->experience }}</td>
										<td>
											<a href="{{ route('getEditWork',$job->id) }}"><i class="fa fa-edit"></i></a>
											<a href="{{ route('getDeleteJob',$job->id) }}"><i class="fa fa-remove"></i></a>
										</td>
									</tr>
								@endforeach
							@endif
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