@extends('client.layouts.master')

@section('title')
	CareerLink.vn
@endsection

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('styles/fontawesome/styles.min.css') }}">
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
                                <h3 class="panel-title">Sửa yêu cầu tìm việc làm</h3>
                            </div>
                            <div class="panel-body">
                                <form id="searchFormRightCol" action="/tim-viec-lam-nang-cao" method="post" role="form">
                                    <div class="form-group">
                                        <label class="control-label">Từ khoá</label>
                                        <input type="text" id="advancedJobSearch_keywords" name="advancedJobSearch[keywords]" class="input-sm form-control" placeholder="Nhập từ khóa..." />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Điều kiện</label>
                                        <select id="advancedJobSearch_keywordUse" name="advancedJobSearch[keywordUse]" class="input-sm form-control">
                                            <option value="A" selected="selected">Tất cả từ khoá</option>
                                            <option value="B">Bất kỳ từ khoá nào</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Ngành nghề</label>
                                        <select id="advancedJobSearch_categories" name="advancedJobSearch[categories][]" class="input-sm form-control" size="1" multiple="multiple">
                                            <option value="197">An Ninh / Bảo Vệ</option>
                                            <option value="191">An Toàn Lao Động</option>
                                            <option value="31">Bán hàng</option>
                                            <option value="190">Bán lẻ / Bán sỉ</option>
                                            <option value="24">Báo chí / Biên tập viên / Xuất bản</option>
                                            <option value="17">Bảo hiểm</option>
                                            <option value="195">Bảo trì / Sửa chữa</option>
                                            <option value="29">Bất động sản</option>
                                            <option value="18">Biên phiên dịch / Thông dịch viên</option>
                                            <option value="154">Biên phiên dịch (tiếng Nhật)</option>
                                            <option value="14">Chăm sóc sức khỏe / Y tế</option>
                                            <option value="130">CNTT - Phần cứng / Mạng</option>
                                            <option value="19">CNTT - Phần mềm</option>
                                            <option value="26">Dầu khí / Khoáng sản</option>
                                            <option value="33">Dệt may / Da giày</option>
                                            <option value="9">Dịch vụ khách hàng</option>
                                            <option value="199">Điện lạnh / Nhiệt lạnh</option>
                                            <option value="28">Dược / Sinh học</option>
                                            <option value="148">Điện / Điện tử</option>
                                            <option value="192">Đồ Gỗ</option>
                                            <option value="10">Giáo dục / Đào tạo / Thư viện</option>
                                            <option value="189">Hàng gia dụng</option>
                                            <option value="127">Hóa chất / Sinh hóa / Thực phẩm</option>
                                            <option value="1">Kế toán / Kiểm toán</option>
                                            <option value="15">Khách sạn / Du lịch</option>
                                            <option value="139">Kiến trúc</option>
                                            <option value="11">Kỹ thuật ứng dụng / Cơ khí</option>
                                            <option value="20">Lao động phổ thông</option>
                                            <option value="142">Môi trường / Xử lý chất thải</option>
                                            <option value="118">Mới tốt nghiệp / Thực tập</option>
                                            <option value="5">Ngân hàng / Chứng khoán</option>
                                            <option value="4">Nghệ thuật / Thiết kế / Giải trí</option>
                                            <option value="12">Người nước ngoài</option>
                                            <option value="30">Nhà hàng / Dịch vụ ăn uống</option>
                                            <option value="16">Nhân sự</option>
                                            <option value="193">Nội thất / Ngoại thất</option>
                                            <option value="3">Nông nghiệp / Lâm nghiệp</option>
                                            <option value="151">Ô tô</option>
                                            <option value="21">Pháp lý / Luật</option>
                                            <option value="25">Phi chính phủ / Phi lợi nhuận</option>
                                            <option value="145">Quản lý chất lượng (QA / QC)</option>
                                            <option value="22">Quản lý điều hành</option>
                                            <option value="2">Quảng cáo / Khuyến mãi / Đối ngoại</option>
                                            <option value="23">Sản xuất / Vận hành sản xuất</option>
                                            <option value="196">Tài chính / Đầu tư</option>
                                            <option value="194">Thời trang</option>
                                            <option value="198">Thuỷ Hải Sản</option>
                                            <option value="6">Thư ký / Hành chánh</option>
                                            <option value="136">Tiếp thị</option>
                                            <option value="7">Tư vấn</option>
                                            <option value="34">Vận chuyển / Giao thông / Kho bãi</option>
                                            <option value="27">Vật tư / Mua hàng</option>
                                            <option value="32">Viễn Thông</option>
                                            <option value="8">Xây dựng</option>
                                            <option value="13">Xuất nhập khẩu / Ngoại thương</option>
                                            <option value="35">Khác</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Địa điểm</label>
                                        <select id="advancedJobSearch_provinces" name="advancedJobSearch[provinces][]" class="input-sm form-control" size="1" multiple="multiple">
                                            <option value="23">Hồ Chí Minh</option>
                                            <option value="27">Hà Nội</option>
                                            <option value="17">Đà Nẵng</option>
                                            <option value="1">An Giang</option>
                                            <option value="9">Bà Rịa - Vũng Tàu</option>
                                            <option value="5">Bắc Cạn</option>
                                            <option value="4">Bắc Giang</option>
                                            <option value="6">Bạc Liêu</option>
                                            <option value="7">Bắc Ninh</option>
                                            <option value="11">Bến Tre</option>
                                            <option value="3">Bình Định</option>
                                            <option value="2">Bình Dương</option>
                                            <option value="8">Bình Phước</option>
                                            <option value="10">Bình Thuận</option>
                                            <option value="13">Cà Mau</option>
                                            <option value="14">Cần Thơ</option>
                                            <option value="12">Cao Bằng</option>
                                            <option value="16">Đắk Lắk</option>
                                            <option value="18">Đăk Nông</option>
                                            <option value="15">Điện Biên</option>
                                            <option value="19">Đồng Nai</option>
                                            <option value="20">Đồng Tháp</option>
                                            <option value="21">Gia Lai</option>
                                            <option value="25">Hà Giang</option>
                                            <option value="28">Hà Nam</option>
                                            <option value="30">Hà Tây</option>
                                            <option value="31">Hà Tĩnh</option>
                                            <option value="24">Hải Dương</option>
                                            <option value="29">Hải Phòng</option>
                                            <option value="26">Hậu Giang</option>
                                            <option value="22">Hòa Bình</option>
                                            <option value="32">Hưng Yên</option>
                                            <option value="33">Kiên Giang</option>
                                            <option value="34">Khánh Hòa</option>
                                            <option value="35">Kon Tum</option>
                                            <option value="65">Lai Châu</option>
                                            <option value="38">Lâm Đồng</option>
                                            <option value="39">Lạng Sơn</option>
                                            <option value="66">Lào Cai</option>
                                            <option value="36">Long An</option>
                                            <option value="42">Nam Định</option>
                                            <option value="40">Nghệ An</option>
                                            <option value="41">Ninh Bình</option>
                                            <option value="43">Ninh Thuận</option>
                                            <option value="44">Phú Thọ</option>
                                            <option value="45">Phú Yên</option>
                                            <option value="46">Quảng Bình</option>
                                            <option value="47">Quảng Nam</option>
                                            <option value="49">Quảng Ngãi</option>
                                            <option value="48">Quảng Ninh</option>
                                            <option value="50">Quảng Trị</option>
                                            <option value="52">Sóc Trăng</option>
                                            <option value="51">Sơn La</option>
                                            <option value="56">Tây Ninh</option>
                                            <option value="53">Thái Bình</option>
                                            <option value="57">Thái Nguyên</option>
                                            <option value="55">Thanh Hóa</option>
                                            <option value="74">Thừa Thiên - Huế</option>
                                            <option value="54">Tiền Giang</option>
                                            <option value="75">Trà Vinh</option>
                                            <option value="73">Tuyên Quang</option>
                                            <option value="76">Vĩnh Long</option>
                                            <option value="77">Vĩnh Phúc</option>
                                            <option value="78">Yên Bái</option>
                                            <option value="79">Khác</option>
                                            <option value="80">Nước Ngoài</option>
                                            <option value="134">Nhật Bản</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Trình độ học vấn</label>
                                        <select id="advancedJobSearch_educationLevels" name="advancedJobSearch[educationLevels][]" class="input-sm form-control" size="1" multiple="multiple">
                                            <option value="1">PTCS</option>
                                            <option value="2">Trung học</option>
                                            <option value="3">Chứng chỉ</option>
                                            <option value="4">Trung cấp</option>
                                            <option value="5">Cao đẳng</option>
                                            <option value="6">Cử nhân</option>
                                            <option value="7">Kỹ sư</option>
                                            <option value="8">Thạc sĩ</option>
                                            <option value="9">Thạc sĩ Nghệ thuật</option>
                                            <option value="10">Thạc sĩ Thương mại</option>
                                            <option value="11">Thạc sĩ Khoa học</option>
                                            <option value="12">Thạc sĩ Kiến trúc</option>
                                            <option value="13">Thạc sĩ QTKD</option>
                                            <option value="14">Thạc sĩ Kỹ thuật ứng dụng</option>
                                            <option value="15">Thạc sĩ Luật</option>
                                            <option value="16">Thạc sĩ Y học</option>
                                            <option value="17">Thạc sĩ Dược phẩm</option>
                                            <option value="18">Tiến sĩ</option>
                                            <option value="19">Khác</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Loại công việc</label>
                                        <select id="advancedJobSearch_positionTypes" name="advancedJobSearch[positionTypes][]" class="input-sm form-control" size="1" multiple="multiple">
                                            <option value="A">Toàn thời gian cố định</option>
                                            <option value="B">Toàn thời gian tạm thời</option>
                                            <option value="C">Bán thời gian</option>
                                            <option value="D">Bán thời gian tạm thời</option>
                                            <option value="E">Hợp đồng</option>
                                            <option value="F">Khác</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Cấp bậc</label>
                                        <select id="advancedJobSearch_careerLevels" name="advancedJobSearch[careerLevels][]" class="input-sm form-control" size="1" multiple="multiple">
                                            <option value="I">Sinh viên/ Thực tập sinh</option>
                                            <option value="N">Mới đi làm</option>
                                            <option value="L">Nhân viên</option>
                                            <option value="T">Kỹ thuật viên/Kỹ sư</option>
                                            <option value="P">Trưởng nhóm / Giám sát</option>
                                            <option value="M">Quản lý / Trưởng phòng</option>
                                            <option value="D">Giám đốc</option>
                                            <option value="S">Quản lý cấp cao</option>
                                            <option value="E">Điều hành cấp cao</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Mức kinh nghiệm</label>
                                        <select id="advancedJobSearch_experienceLevels" name="advancedJobSearch[experienceLevels][]" class="input-sm form-control" size="1" multiple="multiple">
                                            <option value="A">0-1 năm kinh nghiệm</option>
                                            <option value="B">1-2 năm kinh nghiệm</option>
                                            <option value="C">2-5 năm kinh nghiệm</option>
                                            <option value="D">5-10 năm kinh nghiệm</option>
                                            <option value="E">Hơn 10 năm kinh nghiệm</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="advancedJobSearch_salaryType" class="control-label">Mức lương</label>

                                        <div class="form-inline">
                                            <select id="advancedJobSearch_salaryType" name="advancedJobSearch[salaryType]" class="input-sm form-control">
                                                <option value="">Chọn</option>
                                                <option value="I">Nhập</option>
                                                <option value="M">Hơn</option>
                                                <option value="N">Thương lượng</option>
                                                <option value="C">Cạnh tranh</option>
                                            </select>

                                            <div class="salary-from-field" style="margin-top: 6px; margin-bottom: 6px;">
                                                <input type="text" id="advancedJobSearch_salaryFrom" name="advancedJobSearch[salaryFrom]" data-pattern="digits" data-msg-digits="Please enter the minimum Salary" data-msg-required="Vui lòng nhập mức lương tối thiểu." data-rule-min="1" data-msg-min="Vui lòng nhập mức lương tối thiểu." class="input-sm form-control" size="14" />
                                                <select id="advancedJobSearch_salaryFromMoney" name="advancedJobSearch[salaryFromMoney]" class="money-rate input-sm form-control">
                                                    <option value="2">VNĐ</option>
                                                    <option value="1">USD</option>
                                                </select>
                                            </div>
                                            <div class="salary-to-field"> -
                                                <input type="text" id="advancedJobSearch_salaryTo" name="advancedJobSearch[salaryTo]" data-pattern="digits" data-msg-digits="Please enter the maximum Salary" data-msg-required="Vui lòng nhập mức lương tối đa." data-rule-min="1" data-msg-min="Vui lòng nhập mức lương tối đa." data-rule-moreThan="#advancedJobSearch_salaryFrom" data-msg-moreThan="Vui lòng nhập mức lương chính xác" class="input-sm form-control" size="14" />
                                                <select id="advancedJobSearch_salaryToMoney" name="advancedJobSearch[salaryToMoney]" class="money-rate input-sm form-control">
                                                    <option value="2">VNĐ</option>
                                                    <option value="1">USD</option>
                                                </select>
                                            </div>

                                            <div class="error-block">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Công việc đăng trong vòng</label>
                                        <p class="form-inline">
                                            <select id="advancedJobSearch_postedWithIn" name="advancedJobSearch[postedWithIn]" class="input-sm form-control">
                                                <option value="">Chọn</option>
                                                <option value="1">Hôm nay</option>
                                                <option value="2">2 ngày</option>
                                                <option value="3">3 ngày</option>
                                                <option value="4">4 ngày</option>
                                                <option value="5">5 ngày</option>
                                                <option value="6">6 ngày</option>
                                                <option value="7">7 ngày</option>
                                                <option value="8">8 ngày</option>
                                                <option value="9">9 ngày</option>
                                                <option value="10">10 ngày</option>
                                                <option value="11">11 ngày</option>
                                                <option value="12">12 ngày</option>
                                                <option value="13">13 ngày</option>
                                                <option value="14">14 ngày</option>
                                                <option value="15">15 ngày</option>
                                                <option value="16">16 ngày</option>
                                                <option value="17">17 ngày</option>
                                                <option value="18">18 ngày</option>
                                                <option value="19">19 ngày</option>
                                                <option value="20">20 ngày</option>
                                                <option value="21">21 ngày</option>
                                                <option value="22">22 ngày</option>
                                                <option value="23">23 ngày</option>
                                                <option value="24">24 ngày</option>
                                                <option value="25">25 ngày</option>
                                                <option value="26">26 ngày</option>
                                                <option value="27">27 ngày</option>
                                                <option value="28">28 ngày</option>
                                                <option value="29">29 ngày</option>
                                                <option value="30">30 ngày</option>
                                            </select>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Tìm kiếm" />
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
    <div id="messenger-widget"></div>
@endsection