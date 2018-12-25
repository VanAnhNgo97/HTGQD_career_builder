@extends('client.layouts.master')

@section('title')
	Find Jobs
@endsection

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('styles/fontawesome/styles.min.css') }}">
    <script src="{{ asset('admin/scripts/jquery.min.js') }}"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbkOBi-458tGiaTCpyZmddDXrPv6klvBc">
    </script>
@endsection

@section('content')
	<div>
        <div class="container body-container">
            <div class="page-header">
                <h1>Tìm Kiếm Việc Làm</h1>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <form id="save-job-form" name="frmForm" action="" method="get">
                        <input type="hidden" name="current_route" value="_job_search_by_category" />
                        <input type="hidden" name="current_route_params[category_name]" value="cntt-phan-mem" />
                        <input type="hidden" name="current_route_params[category_id]" value="19" />
                        <input type="hidden" name="current_route_params[view]" value="headline" />
                        <input type="hidden" name="current_page" value="1" />
                        <div class="list-group list-search-result-group tlp headline">
                            @foreach ($jobs as $job)
                            <div class="list-group-item bold-red">
                                <h2 class="list-group-item-heading">
                                    <i class="saved-job-star fa fa-star-o" data-title="Lưu việc làm này" data-job-id="1389075"></i>
                                    <a target="_blank" href="{{ route('getWorkInfo',['id' => $job->id]) }}">{{$job->name}}
                                        @if($job->gender == 1)
                                            (Yêu cầu Nam giới)
                                        @elseif($job->gender == 2)
                                            (Yêu cầu Nữ giới)
                                        @else
                                            (Yêu cầu cả Nam và Nữ)
                                        @endif
                                    </a>
                                </h2>
                                <div class="list-group-item-text clearfix">
                                    <p class="priority-data">
                                        <a class="text-accent" href="javascript:void(0)">{{$job->location}}</a> 
                                        <!-- -
                                        <a href="javascript:void(0)" title="View Jobs at Location: Hà Nội">Hà Nội</a>, <a href="" title="View Jobs at Location: Hưng Yên">Hưng Yên</a> -->
                                    </p>
                                    <div class="pull-left">
                                        <small>{{$job->salary . ",000,000"}}             
                                        </small>
                                    </div>
                                    <p class="date pull-right">
                                        <small>
                                            {{$job->created_at->format('d-m-Y')}}
                                        </small>
                                    </p>
                                </div>
                            </div>
                            @endforeach                            
                        </div>
                    </form>

                    <div class="text-center search-result-paginator" id="pagination">
                        <nav>
                            @if($paginate)
                            {{ $jobs->links() }}
                            @endif
                        </nav>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="search-form-right-col-container">
                        <div class="panel panel-form modify-search-container">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tìm việc làm</h3>
                            </div>
                            <div class="panel-body">
                                <form id="searchFormRightCol" action="{{ route('postSearchWork') }}" method="post" role="form">
                                    <div class="form-group col-sm-8">
                                        <label class="control-label">Ngành nghề</label>
                                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                                        <select id="advancedJobSearch_categories" name="career_id" class="input-sm form-control" size="1" required>
                                            @if (isset($data_input['career_id']))
                                            @php
                                                $career_id=$data_input['career_id'];
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
                                            @else
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
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label">Trọng số</label>
                                        <input type="number" name="career_sim_w" class="input-sm form-control" placeholder="" min="0" max="5" @if(isset($data_input['career_sim_w']))
                                        value="{{ $data_input['career_sim_w'] }}" 
                                        @else
                                        value="0"
                                        @endif
                                         />
                                    </div>
                                    <div class="form-group col-sm-8">
                                        <label class="control-label">Tuổi</label>
                                        <input type="number" id="age" name="age" class="input-sm form-control" placeholder="Tuổi Của Bạn..." @if (isset($data_input['age']))
                                            value="{{ $data_input['age'] }}"
                                        @endif required />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label">&nbsp</label>
                                        <input type="number" name="age_w" class="input-sm form-control" placeholder="" min="0" max="5" @if(isset($data_input['age_w']))
                                        value="{{ $data_input['age_w'] }}" 
                                        @else
                                        value="0"
                                        @endif />
                                    </div>
                                    <div class="form-group col-sm-8">
                                        <label class="control-label">Địa điểm</label>
                                        <input type="text" id="location" name="location" class="input-sm form-control" placeholder="Địa Điểm Của Bạn..." @if (isset($data_input['location']))
                                            value="{{ $data_input['location'] }}"
                                        @endif required/>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label">&nbsp</label>
                                        <input type="number" name="distance_w" class="input-sm form-control" placeholder="" min="0" max="5" @if(isset($data_input['distance_w']))
                                        value="{{ $data_input['distance_w'] }}" 
                                        @else
                                        value="0"
                                        @endif />
                                    </div>
                                    <div class="form-group col-sm-8">
                                        <label class="control-label">Giới Tính</label>
                                        <select id="gender" name="gender" class="input-sm form-control" size="1" required>
                                            @if (isset($data_input['gender']))
                                                @php
                                                    $gender=$data_input['gender'];
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
                                            @else
                                                <option value="">Chọn giới tính</option>
                                                <option value="1">Nam</option>
                                                <option value="2">Nữ</option>
                                                <option value="0">Cả 2</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label">&nbsp</label>
                                        <input type="number" name="sex_w" class="input-sm form-control" placeholder="" min="0" max="5" @if(isset($data_input['sex_w']))
                                        value="{{ $data_input['sex_w'] }}" 
                                        @else
                                        value="0"
                                        @endif />
                                    </div>
                                    <div class="form-group col-sm-8">
                                        <label class="control-label">Cấp Bậc</label>
                                        <select id="advancedJobSearch_educationLevels" name="position_id" class="input-sm form-control" size="1" required>
                                            @if (isset($data_input['position_id']))
                                                @php
                                                    $position_id=$data_input['position_id'];
                                                @endphp
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
                                            @else
                                                <option value="">Chọn cấp bậc</option>
                                                <option value="1">Sinh viên thực tập</option>
                                                <option value="2">Mới tốt nghiệp</option>
                                                <option value="3">Nhân viên</option>
                                                <option value="4">Trưởng nhóm giám sát</option>
                                                <option value="5">Quản lý</option>
                                                <option value="6">Quản lý cấp cao</option>
                                                <option value="7">Điều hành cấp cao</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label">&nbsp</label>
                                        <input type="number" name="position_w" class="input-sm form-control" placeholder="" min="0" max="5" @if(isset($data_input['position_w']))
                                        value="{{ $data_input['position_w'] }}" 
                                        @else
                                        value="0"
                                        @endif />
                                    </div>
                                    <div class="form-group col-sm-8">
                                        <label class="control-label">Kinh nghiệm</label>
                                        <input type="number" id="experience" name="experience" class="input-sm form-control" placeholder="Kinh Nghiệm Của Bạn...(năm)" min="1" @if (isset($data_input['experience']))
                                            value="{{ $data_input['experience'] }}"
                                        @endif required />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label">&nbsp</label>
                                        <input type="number" name="experience_w" class="input-sm form-control" placeholder="" min="0" max="5" @if(isset($data_input['experience_w']))
                                        value="{{ $data_input['experience_w'] }}" 
                                        @else
                                        value="0"
                                        @endif />
                                    </div>

                                    <div class="form-group col-sm-8">
                                        <label for="advancedJobSearch_salaryType" class="control-label">Mức lương</label>

                                        <div class="form-inline">
                                            <input type="number" id="advancedJobSearch_keywords" name="salary" class="input-sm form-control" placeholder="Lương...(triệu)" min="1" @if (isset($data_input['salary']))
                                                value="{{ $data_input['salary'] }}" 
                                            @endif required/>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label">&nbsp</label>
                                        <input type="number" name="salary_w" class="input-sm form-control" placeholder="" min="0" max="5" @if(isset($data_input['salary_w']))
                                        value="{{ $data_input['salary_w'] }}" 
                                        @else
                                        value="0"
                                        @endif />
                                    </div>
                                    <div class="form-group col-sm-8">
                                        <label for="advancedJobSearch_salaryType" class="control-label">Kỹ năng mềm</label>

                                        <div class="form-inline">
                                            <select id="advancedJobSearch_educationLevels" name="soft_skill" class="input-sm form-control" size="1" required>
                                            @if(isset($data_input['soft_skill']))
                                            @php
                                                $soft_skill=$data_input['soft_skill'];
                                            @endphp
                                                <option value="">Chọn kỹ năng mềm</option>
                                                <option value="1" @if($soft_skill==1) 
                                                selected 
                                                @endif>Kém</option>
                                                <option value="2" @if($soft_skill==2) 
                                                selected 
                                                @endif>Khá</option>
                                                <option value="3" @if($soft_skill==3) 
                                                selected 
                                                @endif>Trung Bình</option>
                                                <option value="4" @if($soft_skill==4) 
                                                selected 
                                                @endif>Tốt</option>
                                                <option value="5" @if($soft_skill==5) 
                                                selected 
                                                @endif>Rất Tốt</option>
                                            @else
                                                <option value="">Chọn kỹ năng mềm</option>
                                                <option value="1">Kém</option>
                                                <option value="2">Khá</option>
                                                <option value="3">Trung Bình</option>
                                                <option value="4">Tốt</option>
                                                <option value="5">Rất Tốt</option>
                                            @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="control-label">&nbsp</label>
                                        <input type="number" name="soft_skill_w" class="input-sm form-control" placeholder="" min="0" max="5" @if(isset($data_input['soft_skill_w']))
                                        value="{{ $data_input['soft_skill_w'] }}" 
                                        @else
                                        value="0"
                                        @endif />
                                    </div>
                                    <div class="form-group col-sm-8">
                                        <input type="hidden" name="khoangcachs" id="khoangcachs">
                                        <input type="button" id="btnSearch" class="btn btn-primary" value="Tìm kiếm"  url='{{ route('postListLocation') }}' getLocations='{{ route('postListLocation') }}'/>
                                    </div>

                                    <input type="hidden" name="view" value="headline" />

                                </form>
                            </div>
                        </div>
                    </div>
                        <script type="text/javascript">
                            document.addEventListener("DOMContentLoaded", function() {
                                require(['main_multi'], function() {
                                    require(['jquery'], function($) {
                                        $.ajax("/job/summary_impressions?tid=cyxvbsdlzv8xiaqtd20fvn6gx81ndq3n");
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')

    <script type="text/javascript">
        $(document).ready(function(){
            $("#pagination ul li.active").find("span").css("padding","10px 15px");
            geocoder = new GClientGeocoder();
            //pagination

        });
    </script>

    <script type="text/javascript" src="{{ asset('js/pagination.js') }}"></script>

    <!-- <script type="text/javascript" src="{{ asset('js/pagination.js') }}"></script> -->


    <script type="text/javascript" src="{{ asset('js/calculateDistance.js') }}"></script>

    <div id="messenger-widget"></div>
@endsection