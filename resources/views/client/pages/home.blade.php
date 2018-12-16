@extends('client.layouts.master')

@section('title')
	CareerLink.vn
@endsection

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('styles/fontawesome/styles.min.css') }}">
    <script src="{{ asset('admin/scripts/jquery.min.js') }}"></script>
    <script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAA7j_Q-rshuWkc8HyFI4V2HxQYPm-xtd00hTQOC0OXpAMO40FHAxT29dNBGfxqMPq5zwdeiDSHEPL89A" type="text/javascript"></script>
    
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
                    <div class="row">
                        <div class="col-md-7">
                            <p class="lead-sm">
                                Tìm thấy 1,352 việc làm đáp ứng yêu cầu tìm kiếm của bạn: Ngành nghề - <strong>"CNTT - Phần mềm"</strong>
                            </p>
                        </div>
                        <div class="col-md-5 text-right">
                            <p class="form-inline">
                                <span class="hidden-xs">Sắp xếp</span>
                                <select class="form-control input-sm sort-changer">
                                    <option value=''>Ngày cập nhật</option>
                                    <option value=''>Ngày đăng</option>
                                </select>
                            </p>
                        </div>
                    </div>
                    <div class="clearfix">
                        <dl id="switch-view" class="dl-horizontal pull-left">
                            <dt class="hidden-xs">Xem:</dt>
                            <dd>
                                <label class="radio-inline">
                                    <input name="view" type="radio" value="detail" /> 
                                    Chi tiết 
                                </label>
                                <label class="radio-inline">
                                    <input checked="checked" name="view" type="radio" value="headline" /> 
                                    Tóm tắt 
                                </label>
                            </dd>
                        </dl>
                    </div>
                    <form id="save-job-form" name="frmForm" action="" method="get">
                        <input type="hidden" name="current_route" value="_job_search_by_category" />
                        <input type="hidden" name="current_route_params[category_name]" value="cntt-phan-mem" />
                        <input type="hidden" name="current_route_params[category_id]" value="19" />
                        <input type="hidden" name="current_route_params[view]" value="headline" />
                        <input type="hidden" name="current_page" value="1" />
                        <div class="list-group list-search-result-group tlp headline">
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

                            <div class="list-group-item">
                                <h2 class="list-group-item-heading">
                                    <i class="saved-job-star fa fa-star-o" data-title="Lưu việc làm này" data-job-id="1400697"></i>
                                    <a target="_blank" href="{{ route('getWorkInfo') }}">Nhân Viên Chụp Ảnh (Photographer)
                                    </a>
                                </h2>

                                <div class="list-group-item-text clearfix">
                                    <p class="priority-data">
                                        <a class="text-accent" href="">Công Ty Cổ Phần M2 Việt Nam</a> -
                                        <a href="" title="View Jobs at Location: Hà Nội">Hà Nội</a>
                                    </p>
                                    <div class="pull-left">
                                        <small>12,000,000VNĐ|Nhân viên                                                
                                        </small>
                                    </div>
                                    <p class="date pull-right"><small>01/12/2018</small></p>
                                </div>
                            </div>

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

                            <div class="list-group-item bold-red">
                                <h2 class="list-group-item-heading">
                                    <i class="saved-job-star fa fa-star-o" data-title="Lưu việc làm này" data-job-id="1389075"></i>
                                    <a target="_blank" href="{{ route('getWorkInfo') }}">Kế Toán Tổng Hợp (Yêu cầu Nam giới)
                                    </a>
                                </h2>
                                <div class="list-group-item-text clearfix">
                                    <p class="priority-data">
                                        <a class="text-accent" href="">Công Ty TNHH Minh Long</a> -
                                        <a href="" title="View Jobs at Location: Hà Nội">Hà Nội</a>, <a href="/tim-viec-lam-tai/hung-yen/HY" title="View Jobs at Location: Hưng Yên">Hưng Yên</a>
                                    </p>
                                    <div class="pull-left">
                                        <small>9,000,000VNĐ - 712,000,000VNĐ|Nhân viên                                                
                                        </small>
                                    </div>
                                    <p class="date pull-right"><small>01/12/2018</small></p>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="text-center search-result-paginator">
                        <nav>
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href="">5</a></li>
                                <li><a href="">6</a></li>
                                <li><a href="">7</a></li>
                                <li class="omit"><span>...</span></li>
                                <li><a href="">28</a></li>
                                <li><a href=""><span aria-hidden="true">&raquo;</span><span class="sr-only">Tiếp tục</span></a></li>
                            </ul>
                        </nav>
                    </div>

                    <ul class="list-inline text-center share-buttons ">
                        <li>
                            <a href="" target="_blank" class="facebook" onclick="ga('send', 'event', 'Fixed Share Buttons for PC', 'Click', 'Facebook', 1);"><img src="{{ asset('images/common/btn/text-facebook.png?v522') }}" width="32" height="32" /></a>
                        </li>
                        <li>
                            <a href="" target="_blank" class="google-plus" onclick="ga('send', 'event', 'Fixed Share Buttons for PC', 'Click', 'Google+', 1);"><img src="{{ asset('images/common/btn/btn_google+_signin_dark_normal_web@2x.png?v522') }}" width="32" height="32" /></a>
                        </li>
                        <li><a href="" target="_blank" class="linkedin" onclick="ga('send', 'event', 'Fixed Share Buttons for PC', 'Click', 'LinkedIn', 1);"><i class="fa fa-linkedin fa-2x"></i></a></li>
                        <li><a href="" target="_blank" class="twitter" onclick="ga('send', 'event', 'Fixed Share Buttons for PC', 'Click', 'Twitter', 1);"><i class="fa fa-twitter fa-2x"></i></a></li>
                        <li><a href="mailto:?subject=" class="envelope" onclick="ga('send', 'event', 'Fixed Share Buttons for PC', 'Click', 'Mail', 1);"><i class="fa fa-envelope fa-2x"></i></a></li>
                    </ul>
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
                                        <select id="advancedJobSearch_categories" name="career_id" class="input-sm form-control" size="1" >
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
                                            <option value="">Chọn cấp bậc</option>
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
                                        <input type="number" id="experience" name="experience" class="input-sm form-control" placeholder="Kinh Nghiệm Của Bạn..." />
                                    </div>

                                    <div class="form-group">
                                        <label for="advancedJobSearch_salaryType" class="control-label">Mức lương</label>

                                        <div class="form-inline">
                                            <input type="number" id="advancedJobSearch_keywords" name="salary" class="input-sm form-control" placeholder="Lương..." />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" id="btnSearch" class="btn btn-primary" value="Tìm kiếm" url='{{ route('postListLocation') }}'/>
                                    </div>

                                    <input type="hidden" name="view" value="headline" />

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-related-links">
                        <div class="panel-heading">
                            <h3 class="panel-title">Việc làm CNTT - Phần mềm</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li>
                                    <a href='/tim-viec-lam-tai/ha-noi/HN/c/cntt-phan-mem/19'>Hà Nội</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/ho-chi-minh/HCM/c/cntt-phan-mem/19'>Hồ Chí Minh</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/da-nang/DN/c/cntt-phan-mem/19'>Đà Nẵng</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/binh-duong/BD/c/cntt-phan-mem/19'>Bình Dương</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/nhat-ban/JP/c/cntt-phan-mem/19'>Nhật Bản</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/dong-nai/DNI/c/cntt-phan-mem/19'>Đồng Nai</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/bac-ninh/BN/c/cntt-phan-mem/19'>Bắc Ninh</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/hai-phong/HP/c/cntt-phan-mem/19'>Hải Phòng</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/long-an/LA/c/cntt-phan-mem/19'>Long An</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/ba-ria-vung-tau/BRVT/c/cntt-phan-mem/19'>Bà Rịa - Vũng Tàu</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/quang-ninh/QNH/c/cntt-phan-mem/19'>Quảng Ninh</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/thua-thien-hue/TTH/c/cntt-phan-mem/19'>Thừa Thiên - Huế</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/lam-dong/LD/c/cntt-phan-mem/19'>Lâm Đồng</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/quang-nam/QN/c/cntt-phan-mem/19'>Quảng Nam</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/nghe-an/NA/c/cntt-phan-mem/19'>Nghệ An</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/hung-yen/HY/c/cntt-phan-mem/19'>Hưng Yên</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/khanh-hoa/KH/c/cntt-phan-mem/19'>Khánh Hòa</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/tay-ninh/TN/c/cntt-phan-mem/19'>Tây Ninh</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/bac-giang/BG/c/cntt-phan-mem/19'>Bắc Giang</a>
                                </li>
                                <li>
                                    <a href='/tim-viec-lam-tai/binh-phuoc/BP/c/cntt-phan-mem/19'>Bình Phước</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="recommend-jobs-container">
                        <div class="page-header" style="margin-top: 35px; margin-bottom: 0; padding-bottom: 0;">
                            <h3>Gợi Ý Việc Làm</h3>
                        </div>
                        <div class="list-group list-search-result-group recommend-jobs clearfix">
                            <div class="list-group-item" style="padding-bottom: 10px;">
                                <h2 class="list-group-item-heading">
                                    <i class="saved-job-star fa fa-star-o" data-title="Lưu việc làm này" data-job-id="1381431" data-tid="cyxvbsdlzv8xiaqtd20fvn6gx81ndq3n"></i>
                                    <a target="_blank" href="/tim-viec-lam/nhan-vien-giam-sat-ky-thuat-tai-tttm-melinh-plaza-ha-dong/1381431?tid=cyxvbsdlzv8xiaqtd20fvn6gx81ndq3n&utm_source=site&utm_medium=job_search_result_1&utm_content=default">Nhân Viên Giám Sát Kỹ Thuật Tại TTTM Melinh Plaza Hà Đông</a>
                                    <span><i class="fa fa-thumbs-up"></i></span>
                                </h2>
                                <div class="list-group-item-text clearfix">
                                    <p class="priority-data">
                                        <a class="text-accent" href="/viec-lam-cua/cong-ty-co-phan-eurowindow-holding/29970?tid=cyxvbsdlzv8xiaqtd20fvn6gx81ndq3n&utm_source=site&utm_medium=job_search_result_1&utm_content=default">Công Ty Cổ Phần Eurowindow Holding</a> -
                                        <a href="/tim-viec-lam-tai/ha-noi/HN?tid=cyxvbsdlzv8xiaqtd20fvn6gx81ndq3n&utm_source=site&utm_medium=job_search_result_1&utm_content=default" title="View Jobs at Location: Hà Nội">Hà Nội</a> </p>
                                    <div class="pull-left">
                                        <small>Cạnh tranh</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item" style="padding-bottom: 10px;">
                                <h2 class="list-group-item-heading">
                                    <i class="saved-job-star fa fa-star-o" data-title="Lưu việc làm này" data-job-id="1381431" data-tid="cyxvbsdlzv8xiaqtd20fvn6gx81ndq3n"></i>
                                    <a target="_blank" href="/tim-viec-lam/nhan-vien-giam-sat-ky-thuat-tai-tttm-melinh-plaza-ha-dong/1381431?tid=cyxvbsdlzv8xiaqtd20fvn6gx81ndq3n&utm_source=site&utm_medium=job_search_result_1&utm_content=default">Nhân Viên Giám Sát Kỹ Thuật Tại TTTM Melinh Plaza Hà Đông</a>
                                    <span><i class="fa fa-thumbs-up"></i></span>
                                </h2>
                                <div class="list-group-item-text clearfix">
                                    <p class="priority-data">
                                        <a class="text-accent" href="/viec-lam-cua/cong-ty-co-phan-eurowindow-holding/29970?tid=cyxvbsdlzv8xiaqtd20fvn6gx81ndq3n&utm_source=site&utm_medium=job_search_result_1&utm_content=default">Công Ty Cổ Phần Eurowindow Holding</a> -
                                        <a href="/tim-viec-lam-tai/ha-noi/HN?tid=cyxvbsdlzv8xiaqtd20fvn6gx81ndq3n&utm_source=site&utm_medium=job_search_result_1&utm_content=default" title="View Jobs at Location: Hà Nội">Hà Nội</a> </p>
                                    <div class="pull-left">
                                        <small>Cạnh tranh</small>
                                    </div>
                                </div>
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
    <script type="text/javascript">
        $(document).ready(function(){
            geocoder = new GClientGeocoder();
        });
    </script>
   {{--  <script type="text/javascript" src="{{ asset('js/calculateDistance.js') }}"></script> --}}
    <div id="messenger-widget"></div>
@endsection