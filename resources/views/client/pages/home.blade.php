@extends('client.layouts.master')

@section('title')
	CareerLink.vn
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
        <div class="container">
            <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="" title="Kiếm việc làm trên Mạng tuyển dụng trực tuyến" itemprop="item" itemtype="http://schema.org/Thing"><span itemprop="name">CareerLink</span></a>
                    <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href='' title='Tìm Việc Làm Nhanh' itemprop="item"><span class="glyphicon glyphicon-play"></span><span itemprop="name">Tìm Việc Làm</span></a>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
        <div class="container body-container">
            <div class="page-header">
                <h1>Tìm Kiếm Việc Làm</h1>
            </div>
            <div class="row">
                <div class="col-sm-9">
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
                                    <a target="_blank" href="{{ route('getWorkInfo') }}">Kế Toán Tổng Hợp (Yêu cầu Nam giới)
                                    </a>
                                </h2>
                                <div class="list-group-item-text clearfix">
                                    <p class="priority-data">
                                        <a class="text-accent" href="">Công Ty TNHH Minh Long</a> -
                                        <a href="" title="View Jobs at Location: Hà Nội">Hà Nội</a>, <a href="" title="View Jobs at Location: Hưng Yên">Hưng Yên</a>
                                    </p>
                                    <div class="pull-left">
                                        <small>9,000,000VNĐ - 712,000,000VNĐ|Nhân viên                                                
                                        </small>
                                    </div>
                                    <p class="date pull-right"><small>01/12/2018</small></p>
                                </div>
                            </div>
                            @endforeach                            
                        </div>
                    </form>

                    <div class="text-center search-result-paginator" id="pagination">
                        <nav>
                            {{ $jobs->links() }}
                        </nav>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search-form-right-col-container">
                        <div class="panel panel-form modify-search-container">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tìm việc làm</h3>
                            </div>
                            <div class="panel-body">
                                <form id="searchFormRightCol" action="{{ route('postSearchWork') }}" method="post" role="form">
                                    <div class="form-group">
                                        <label class="control-label">Ngành nghề</label>
                                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                                        <select id="advancedJobSearch_categories" name="career_id" class="input-sm form-control" size="1">
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
                                    <div class="form-group">
                                        <label class="control-label">Tuổi</label>
                                        <input type="number" id="age" name="age" class="input-sm form-control" placeholder="Tuổi Của Bạn..." />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Địa điểm</label>
                                        <input type="text" id="location" name="location" class="input-sm form-control" placeholder="Địa Điểm Của Bạn..." />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Giới Tính</label>
                                        <select id="gender" name="gender" class="input-sm form-control" size="1">
                                            <option value="">Chọn giới tính</option>
                                            <option value="1">Nam</option>
                                            <option value="2">Nữ</option>
                                            <option value="0">Cả 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Cấp Bậc</label>
                                        <select id="advancedJobSearch_educationLevels" name="position_id" class="input-sm form-control" size="1">
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
                                    <div class="form-group">
                                        <label class="control-label">Kinh nghiệm</label>
                                        <input type="number" id="experience" name="experience" class="input-sm form-control" placeholder="Kinh Nghiệm Của Bạn...(năm)" min="1" />
                                    </div>

                                    <div class="form-group">
                                        <label for="advancedJobSearch_salaryType" class="control-label">Mức lương</label>

                                        <div class="form-inline">
                                            <input type="number" id="advancedJobSearch_keywords" name="salary" class="input-sm form-control" placeholder="Lương...(triệu)" min="1" />
                                        </div>
                                    </div>
                                    <div class="form-group">
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
        require(['main_multi'], function() {
            require(['jquery', 'jquery_lazyload'], function($) {
                $(function() {
                    $("[data-original]").lazyload();
                });
            });

            require(['models.user', 'forms.sign_in_form', 'jquery.bootstrap.tooltip'], function(user, SignInForm) {
                user.signedInAsJobSeeker = false;

                if (!user.signedInAsJobSeeker) {
                    new SignInForm('#sign-in-modal-form', user, {
                        jobseekerLoginModalPath: "/vi/jobseeker/login-modal"
                    });
                }

                $(document).tooltip({
                    selector: '[data-toggle="tooltip"]'
                });
            });

            require(['jquery', 'views.globalnavi', 'forms.advanced_job_search_form', 'views.back_to_top', 'views.advanced_search_button'], function($, Globalnavi, AdvancedJobSearchForm, BackToTop, AdvancedSearchButton) {
                var isMobileView = false;

                new BackToTop();
                new AdvancedJobSearchForm(
                    '#advanced-job-search-form', {
                        language: "vi",
                        placeholderAll: "Tất cả",
                        placeholderLocations: "Tất cả địa điểm",
                        placeholderCategories: "Tất cả ngành nghề"
                    },
                    isMobileView,
                    true
                );

                new Globalnavi();
                new AdvancedSearchButton();
            });

            require(['views.navi_grid_view', 'views.navi_icon_view', 'models.navi_grid'], function(NaviGridView, NaviIconView, NaviGrid) {
                var naviGrid = new NaviGrid([
                    'find_jobs',
                    'my_careerlink',
                    'create_resume',
                    'my_resumes',
                    'saved_job',
                    'job_alerts',
                    'message',
                    'career_tools'
                ], []);

                var naviGridView = new NaviGridView({
                    model: naviGrid
                }, naviGridViewOption);
                naviGridView.show();

                $('.message', '.grid-icon-container').each(function(index, element) {
                    var messageIcon = naviGrid.get('icons').get('message');
                    var messageIconView = new NaviIconView({
                        model: messageIcon,
                        className: 'grid-icon_' + messageIcon.get('id')
                    });

                    $(element).html(messageIconView.render().el);
                });
            });

            window.fbAsyncInit = function() {
                FB.init({
                    appId: '157848801689',
                    status: true, // check login status
                    cookie: true, // enable cookies to allow the server to access the session
                    xfbml: true // parse XFBML
                });
            };

            (function(d) {
                var js, id = 'facebook-jssdk';
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement('script');
                js.id = id;
                js.async = true;
                js.src = "//connect.facebook.net/en_US/all.js";
                d.getElementsByTagName('head')[0].appendChild(js);
            }(document));

            require(['jquery', 'jquery.cookie'], function($) {

                $(function() {
                    $(document).on('click', '.btn-facebook', function(e) {
                        e.preventDefault();
                        setDisabled();
                        try {
                            FB.login(function(response) {
                                if (response.authResponse) {
                                    $.ajax({
                                        type: 'POST',
                                        url: '/auth/facebook/callback?contact_type=job_seeker',
                                        dataType: 'json',
                                        data: response,
                                        success: function(json) {
                                            oauthProcess(json);
                                        }
                                    });
                                } else {
                                    window.location = '/nguoi-tim-viec/login';
                                }

                            }, {
                                scope: 'email'
                            });
                        } catch (e) {
                            alert('It seems that Facebook Login is not available on your browser. Please try username/password login instead.');
                        }
                    });
                });

                $(function() {
                    $(document).on('click', '.btn-google', function(e) {
                        e.preventDefault();
                        setDisabled();
                        $('<form action="/auth/google_oauth2?contact_type=job_seeker' +
                                '&sign_up_uri=https://www.careerlink.vn/nguoi-tim-viec/dang-ky-oauth' +
                                '&target_uri=https://www.careerlink.vn/nguoi-tim-viec" method="POST"/>')
                            .appendTo($('body'))
                            .submit();
                    });
                });

                function setDisabled() {
                    $('.btn-facebook').addClass('disabled');
                    $('.btn-google').addClass('disabled');
                }

                function oauthProcess(json) {
                    if (json['sign_up_required'] == true) {
                        window.location = '/nguoi-tim-viec/dang-ky-oauth';
                    } else {
                        $.cookie('PHPSESSID', json.phpsessid, {
                            expires: 365,
                            path: '/'
                        });
                        window.location = '/nguoi-tim-viec';
                    }
                }
            });

        });
    </script>

    <script type="text/javascript">
        require(['main_multi'], function() {
            require(['forms.advanced_job_search_form', 'views.sort_changer', 'views.routing'], function(AdvancedJobSearchForm, SortChanger, Routing) {
                var isMobileView = false;

                if (isMobileView) {
                    var urlDeviceViewFull = "/viec-lam/cntt-phan-mem/19?_route=_vi_job_search_by_category&_route_params%5B_locale%5D=vi&_route_params%5B_format%5D=html&_route_params%5Bcategory_name%5D=cntt-phan-mem&_route_params%5Bcategory_id%5D=19&view=headline&device_view=full";
                    var urlDeviceViewMobile = "/viec-lam/cntt-phan-mem/19?_route=_vi_job_search_by_category&_route_params%5B_locale%5D=vi&_route_params%5B_format%5D=html&_route_params%5Bcategory_name%5D=cntt-phan-mem&_route_params%5Bcategory_id%5D=19&view=headline&device_view=mobile";

                    setTimeout(function() {
                        $('.search-form-right-col-container').load(urlDeviceViewFull + " .modify-search-container", function(response, status, xhr) {

                            $.ajax({
                                url: urlDeviceViewMobile
                            });

                            if (status === "success") {
                                applyAdvancedJobSearchForm();
                            }
                        });
                    }, 5000);
                } else {
                    applyAdvancedJobSearchForm();
                }

                function applyAdvancedJobSearchForm() {
                    new AdvancedJobSearchForm(
                        '#searchFormRightCol', {
                            isTagsOneLine: false,
                            language: "vi",
                            placeholderAll: "Tất cả",
                            placeholderLocations: "Tất cả địa điểm",
                            placeholderCategories: "Tất cả ngành nghề"
                        },
                        isMobileView,
                        true
                    );
                }

                new Routing({
                    queryParams: {
                        "category_name": "cntt-phan-mem",
                        "category_id": 19,
                        "view": "headline"
                    }
                });
                new SortChanger();
            });
        });
    </script>
    <script type="text/javascript">
        require(['main_multi'], function() {
            require(['jquery', 'models.saved_job', 'views.saved_job_view', 'models.user'], function($, SavedJob, SavedJobView, user) {
                var isMobileView = false;

                $('.saved-job-star').each(function(index, element) {
                    var savedJob = new SavedJob(user, {
                        id: $(element).data('id') ? parseInt($(element).data('id'), 10) : null,
                        jobId: $(element).data('jobId') ? parseInt($(element).data('jobId'), 10) : null
                    }, {
                        urlRoot: "/vi/jobseeker/savedjob"
                    });
                    new SavedJobView(isMobileView, {
                        model: savedJob,
                        el: element
                    });
                });
            });
        });
    </script>
    <script type="text/javascript" src="{{ asset('js/calculateDistance.js') }}"></script>
    <div id="messenger-widget"></div>
@endsection