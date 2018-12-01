<nav class="navbar navbar-default topbar">
        <div class="container">
            <div class="collapse navbar-collapse">
                <br>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-default globalnavi">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="margin-right: 30px;">
                <a class="navbar-brand" href="" title="Viec lam, tim viec, tuyen dung, tim viec lam">
                    <img src="{{ asset('images/common/header/logo-navbar-brand@1x.png?v522') }}" srcset="{{ asset('images/common/header/logo-navbar-brand@1x.png?v522') }} 1x, {{ asset('images/common/header/logo-navbar-brand@1x.png?v522') }} 2x" alt="Tìm kiếm việc làm trên mạng tuyển dụng trực tuyến" height="50" />                
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <form id="advanced-job-search-form" action="/tim-viec-lam-nang-cao" method="post" class="navbar-form navbar-left advanced-search-widget advanced-search-select2" role="search">
    				<div class="dropdown">
        				<div class="row row-0">
            				<div class="col-sm-3">
                				<input type="text" id="advancedJobSearch_keywords" name="advancedJobSearch[keywords]" placeholder="Nhập từ khóa công việc..." class="form-control" />
            				</div>
            				<div class="col-sm-4 categories">
                				<select id="advancedJobSearch_categories" name="advancedJobSearch[categories][]" class="multiselect-selected-items form-control" size="6" style="visibility: hidden;" multiple="multiple">
        							<option value="197">An Ninh / Bảo Vệ</option><option value="191">An Toàn Lao Động</option><option value="31">Bán hàng</option><option value="190">Bán lẻ / Bán sỉ</option><option value="24">Báo chí / Biên tập viên / Xuất bản</option><option value="17">Bảo hiểm</option><option value="195">Bảo trì / Sửa chữa</option><option value="29">Bất động sản</option><option value="18">Biên phiên dịch / Thông dịch viên</option><option value="154">Biên phiên dịch (tiếng Nhật)</option><option value="14">Chăm sóc sức khỏe / Y tế</option><option value="130">CNTT - Phần cứng / Mạng</option><option value="19">CNTT - Phần mềm</option><option value="26">Dầu khí / Khoáng sản</option><option value="33">Dệt may / Da giày</option><option value="9">Dịch vụ khách hàng</option><option value="199">Điện lạnh / Nhiệt lạnh</option><option value="28">Dược / Sinh học</option><option value="148">Điện / Điện tử</option><option value="192">Đồ Gỗ</option><option value="10">Giáo dục / Đào tạo / Thư viện</option><option value="189">Hàng gia dụng</option><option value="127">Hóa chất / Sinh hóa / Thực phẩm</option><option value="1">Kế toán / Kiểm toán</option><option value="15">Khách sạn / Du lịch</option><option value="139">Kiến trúc</option><option value="11">Kỹ thuật ứng dụng / Cơ khí</option><option value="20">Lao động phổ thông</option><option value="142">Môi trường / Xử lý chất thải</option><option value="118">Mới tốt nghiệp / Thực tập</option><option value="5">Ngân hàng / Chứng khoán</option><option value="4">Nghệ thuật / Thiết kế / Giải trí</option><option value="12">Người nước ngoài</option><option value="30">Nhà hàng / Dịch vụ ăn uống</option><option value="16">Nhân sự</option><option value="193">Nội thất / Ngoại thất</option><option value="3">Nông nghiệp / Lâm nghiệp</option><option value="151">Ô tô</option><option value="21">Pháp lý / Luật</option><option value="25">Phi chính phủ / Phi lợi nhuận</option><option value="145">Quản lý chất lượng (QA / QC)</option><option value="22">Quản lý điều hành</option><option value="2">Quảng cáo / Khuyến mãi / Đối ngoại</option><option value="23">Sản xuất / Vận hành sản xuất</option><option value="196">Tài chính / Đầu tư</option><option value="194">Thời trang</option><option value="198">Thuỷ Hải Sản</option><option value="6">Thư ký / Hành chánh</option><option value="136">Tiếp thị</option><option value="7">Tư vấn</option><option value="34">Vận chuyển / Giao thông / Kho bãi</option><option value="27">Vật tư / Mua hàng</option><option value="32">Viễn Thông</option><option value="8">Xây dựng</option><option value="13">Xuất nhập khẩu / Ngoại thương</option><option value="35">Khác</option>
        						</select>
            				</div>
            				<div class="col-sm-4 provinces">
                				<select id="advancedJobSearch_provinces" name="advancedJobSearch[provinces][]" class="multiselect-selected-items form-control" size="6" style="visibility: hidden;" multiple="multiple">
        							<option value="23">Hồ Chí Minh</option><option value="27">Hà Nội</option><option value="17">Đà Nẵng</option><option value="1">An Giang</option><option value="9">Bà Rịa - Vũng Tàu</option><option value="5">Bắc Cạn</option><option value="4">Bắc Giang</option><option value="6">Bạc Liêu</option><option value="7">Bắc Ninh</option><option value="11">Bến Tre</option><option value="3">Bình Định</option><option value="2">Bình Dương</option><option value="8">Bình Phước</option><option value="10">Bình Thuận</option><option value="13">Cà Mau</option><option value="14">Cần Thơ</option><option value="12">Cao Bằng</option><option value="16">Đắk Lắk</option><option value="18">Đăk Nông</option><option value="15">Điện Biên</option><option value="19">Đồng Nai</option><option value="20">Đồng Tháp</option><option value="21">Gia Lai</option><option value="25">Hà Giang</option><option value="28">Hà Nam</option><option value="30">Hà Tây</option><option value="31">Hà Tĩnh</option><option value="24">Hải Dương</option><option value="29">Hải Phòng</option><option value="26">Hậu Giang</option><option value="22">Hòa Bình</option><option value="32">Hưng Yên</option><option value="33">Kiên Giang</option><option value="34">Khánh Hòa</option><option value="35">Kon Tum</option><option value="65">Lai Châu</option><option value="38">Lâm Đồng</option><option value="39">Lạng Sơn</option><option value="66">Lào Cai</option><option value="36">Long An</option><option value="42">Nam Định</option><option value="40">Nghệ An</option><option value="41">Ninh Bình</option><option value="43">Ninh Thuận</option><option value="44">Phú Thọ</option><option value="45">Phú Yên</option><option value="46">Quảng Bình</option><option value="47">Quảng Nam</option><option value="49">Quảng Ngãi</option><option value="48">Quảng Ninh</option><option value="50">Quảng Trị</option><option value="52">Sóc Trăng</option><option value="51">Sơn La</option><option value="56">Tây Ninh</option><option value="53">Thái Bình</option><option value="57">Thái Nguyên</option><option value="55">Thanh Hóa</option><option value="74">Thừa Thiên - Huế</option><option value="54">Tiền Giang</option><option value="75">Trà Vinh</option><option value="73">Tuyên Quang</option><option value="76">Vĩnh Long</option><option value="77">Vĩnh Phúc</option><option value="78">Yên Bái</option><option value="79">Khác</option><option value="80">Nước Ngoài</option><option value="134">Nhật Bản</option>
        						</select>
            				</div>
            				<div class="col-sm-1">
                				<button class="btn btn-primary" type="submit" title="Tìm kiếm">
                    				<i class="fa fa-search"></i>
                				</button>
            				</div>
        				</div>
        				<i class="fa fa-play-circle-o fa-rotate-90" data-toggle="dropdown" title="Tìm kiếm việc làm nâng cao"></i>
        				<div class="dropdown-menu form-horizontal" role="menu">
            				<div class="form-group">
                				<div class="col-sm-6">
                    				<label>Trình độ học vấn</label>
                    				<select id="advancedJobSearch_educationLevels" name="advancedJobSearch[educationLevels][]" class="form-control" multiple="multiple">
        								<option value="1">PTCS</option><option value="2">Trung học</option><option value="3">Chứng chỉ</option><option value="4">Trung cấp</option><option value="5">Cao đẳng</option><option value="6">Cử nhân</option><option value="7">Kỹ sư</option><option value="8">Thạc sĩ</option><option value="9">Thạc sĩ Nghệ thuật</option><option value="10">Thạc sĩ Thương mại</option><option value="11">Thạc sĩ Khoa học</option><option value="12">Thạc sĩ Kiến trúc</option><option value="13">Thạc sĩ QTKD</option><option value="14">Thạc sĩ Kỹ thuật ứng dụng</option><option value="15">Thạc sĩ Luật</option><option value="16">Thạc sĩ Y học</option><option value="17">Thạc sĩ Dược phẩm</option><option value="18">Tiến sĩ</option><option value="19">Khác</option>
        							</select>
                				</div>
                				<div class="col-sm-6">
                    				<label>Cấp bậc</label>
                    				<select id="advancedJobSearch_careerLevels" name="advancedJobSearch[careerLevels][]" class="form-control" multiple="multiple">
        								<option value="I">Sinh viên/ Thực tập sinh</option><option value="N">Mới đi làm</option><option value="L">Nhân viên</option><option value="T">Kỹ thuật viên/Kỹ sư</option><option value="P">Trưởng nhóm / Giám sát</option><option value="M">Quản lý / Trưởng phòng</option><option value="D">Giám đốc</option><option value="S">Quản lý cấp cao</option><option value="E">Điều hành cấp cao</option>
        							</select>
                				</div>
           					</div>
            				<div class="form-group">
                				<div class="col-sm-6">
                    				<label>Loại công việc</label>
                    				<select id="advancedJobSearch_positionTypes" name="advancedJobSearch[positionTypes][]" class="form-control" multiple="multiple">
        								<option value="A">Toàn thời gian cố định</option><option value="B">Toàn thời gian tạm thời</option><option value="C">Bán thời gian</option><option value="D">Bán thời gian tạm thời</option><option value="E">Hợp đồng</option><option value="F">Khác</option>
        							</select>
                				</div>
                				<div class="col-sm-6">
                    				<label>Mức kinh nghiệm</label>
                    				<select id="advancedJobSearch_experienceLevels" name="advancedJobSearch[experienceLevels][]" class="form-control" multiple="multiple">
        								<option value="A">0-1 năm kinh nghiệm</option><option value="B">1-2 năm kinh nghiệm</option><option value="C">2-5 năm kinh nghiệm</option><option value="D">5-10 năm kinh nghiệm</option><option value="E">Hơn 10 năm kinh nghiệm</option>
        							</select>
                				</div>
            				</div>
            				<div class="form-group">
                				<div class="col-sm-12">
                    				<div>
                        				<label>Mức lương</label>
                    				</div>
                    				<div>
                        				<select id="advancedJobSearch_salaryType" name="advancedJobSearch[salaryType]" class="input-sm form-control">
        									<option value="">Chọn</option><option value="I">Nhập</option><option value="M">Hơn</option><option value="N">Thương lượng</option><option value="C">Cạnh tranh</option>
        								</select>
				                        <span class="salary-from-field">
				                        	<input type="text" id="advancedJobSearch_salaryFrom" name="advancedJobSearch[salaryFrom]" data-pattern="digits" data-msg-digits="Please enter the minimum Salary" data-msg-required="Vui lòng nhập mức lương tối thiểu." data-rule-min="1" data-msg-min="Vui lòng nhập mức lương tối thiểu." class="input-sm form-control" />
                            				<select id="advancedJobSearch_salaryFromMoney" name="advancedJobSearch[salaryFromMoney]" class="money-rate input-sm form-control">
        										<option value="2">VNĐ</option><option value="1">USD</option>
        									</select>
                    					</span>
                        				<span class="salary-to-field"> -
				                            <input type="text" id="advancedJobSearch_salaryTo" name="advancedJobSearch[salaryTo]" data-pattern="digits" data-msg-digits="Please enter the maximum Salary" data-msg-required="Vui lòng nhập mức lương tối đa." data-rule-min="1" data-msg-min="Vui lòng nhập mức lương tối đa." data-rule-moreThan="#advancedJobSearch_salaryFrom" data-msg-moreThan="Vui lòng nhập mức lương chính xác" class="input-sm form-control" />
				                            <select id="advancedJobSearch_salaryToMoney" name="advancedJobSearch[salaryToMoney]" class="money-rate input-sm form-control">
        										<option value="2">VNĐ</option><option value="1">USD</option>
        									</select>
                    					</span>
				                        <div class="error-block">
				                        </div>
                    				</div>
                				</div>
            				</div>
	            			<div class="form-group">
	                			<div class="col-sm-12">
	                    			<div>
	                        			<label>Công việc đăng trong vòng</label>
	                    			</div>
	                    			<div>
	                        			<select id="advancedJobSearch_postedWithIn" name="advancedJobSearch[postedWithIn]" class="input-sm form-control">
	        								<option value="">Chọn</option><option value="1">Hôm nay</option><option value="2">2 ngày</option><option value="3">3 ngày</option><option value="4">4 ngày</option><option value="5">5 ngày</option><option value="6">6 ngày</option><option value="7">7 ngày</option><option value="8">8 ngày</option><option value="9">9 ngày</option><option value="10">10 ngày</option><option value="11">11 ngày</option><option value="12">12 ngày</option><option value="13">13 ngày</option><option value="14">14 ngày</option><option value="15">15 ngày</option><option value="16">16 ngày</option><option value="17">17 ngày</option><option value="18">18 ngày</option><option value="19">19 ngày</option><option value="20">20 ngày</option><option value="21">21 ngày</option><option value="22">22 ngày</option><option value="23">23 ngày</option><option value="24">24 ngày</option><option value="25">25 ngày</option><option value="26">26 ngày</option><option value="27">27 ngày</option><option value="28">28 ngày</option><option value="29">29 ngày</option><option value="30">30 ngày</option>
	        							</select>
	                    			</div>
	                			</div>
	            			</div>
	            			<button class="btn btn-primary btn-sm" type="submit" title="Tìm kiếm">
	                			<i class="fa fa-search"></i>
	            			</button>
        				</div>
    				</div>
				</form>                
                <div class="navbar-right navbar-btn grid-icon-container">
					<a class="btn btn-warning btn-sm" href="">Đăng ký</a>
					<a class="btn btn-primary btn-sm" href="">Đăng nhập</a>
                </div>
            </div>
        </div>
        <div class="hide">
            <div class="popover-content-menu"></div>   
        </div>
    </nav>  