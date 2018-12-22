@extends('client.layouts.master')

@section('title')
	{{$job->name}} - {{$job->location}}
@endsection

@section('content')
	<div>
        <div class="container"></div>
    	<div class="container body-container" itemscope itemtype="http://schema.org/JobPosting">
        	<div class="page-header job-header">   
            	<h1>
                	<span itemprop="title">{{$job->name}}</span>
					<i class="fa fa-star-o saved-job-star" data-title="Lưu việc làm này" data-job-id="1389075" data-placement="top"></i>
            	</h1>
        	</div>
	        <div class="row">
	            <div class="col-sm-9">
	                <div class="job-data">
	                    <ul class="list-unstyled critical-job-data">
	                        <li>
	                            <a class="text-accent" href='javascript:void(0)'>
	                                <span itemprop="hiringOrganization" itemscope itemtype="http://schema.org/Organization">
	    								<span itemprop="name">{{$job->location}}</span>
									</span>
	                            </a>
	                        </li>
	                        <li>
	                            <span itemprop="jobLocation" itemscope itemtype="http://schema.org/Place">	<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
	                      {{--      	<span itemprop="streetAddress">Thôn Như Lân, Xã Long Hưng</span>
	                            	<span itemprop="addressLocality">, Huyện Văn Giang</span>,
	                    			<span itemprop="addressRegion">Hưng Yên</span>,
	                    			<span itemprop="addressCountry">Việt Nam</span></span></span> --}}
	                        </li>
	                        <li>
	                            Lương:
	                            <span itemprop="baseSalary" itemscope itemtype="http://schema.org/MonetaryAmount">
	                                <span itemprop="minValue" content="{{$job->salary}}">{{$job->salary . ",000,000"}}</span>
	                                <span itemprop="currency">VNĐ</span>
	                                <span itemprop="unitText" class="hidden">Tháng</span>
	                            </span>  
	                        </li>
	                    </ul>
	                    <div class="clearfix fixed-header">
	                       <div class="pull-right">
	                           <a class="btn btn-primary btn-lg" href="" role="button">Nộp đơn</a>
                          </div>
	                        <div class="job-name">
	                            <span itemprop="title">{{$job->name}}</span>
	                            <p>
	                            		@if($job->gender == 1)
                                            (Yêu cầu Nam giới)
                                        @elseif($job->gender == 2)
                                            (Yêu cầu Nữ giới)
                                        @else
                                            (Yêu cầu cả Nam và Nữ)
                                        @endif</p>
	                        </div>
	                        <p class="company-name">
	                        	<span itemprop="hiringOrganization" itemscope itemtype="http://schema.org/Organization">
	    							<span itemprop="name">{{$job->location}}</span>
								</span>
							</p>
	                        <div class="create-alert">
	                            <a href="/nguoi-tim-viec/thong-bao-viec-lam/moi?jobId=1389075">
	                                <i class="fa fa-envelope"></i>
	                                Nhận email việc làm tương tự                            
	                            </a>
	                        </div>
	                    </div>
	                    <hr/>
	                    <h2>Phúc lợi</h2>
	                    <div>
	                    	{!!$job->benefits!!}
	                    </div>
	                    <!-- <h2>Mô tả chi tiết công việc</h2> -->
	                    <div itemprop="description">
	                    	{!!$job->description!!}
	                    </div>
	                    <h2>Yêu cầu công việc</h2>
	                    <div itemprop="skills">
	                        {!!$job->requirement!!}
	                    </div>
	                   
			            <h2>Thông tin liên hệ</h2>
			            <ul class="list-unstyled">
			                <li>Cách liên hệ:Nộp trực tuyến, Gửi kèm File, Trực tiếp
			                </li>
			                <li>Mô tả:
			                    <p style="text-align: justify;"><em><strong>- C&aacute;c ứng vi&ecirc;n quan t&acirc;m vui l&ograve;ng nộp hồ sơ trực tuyến qua Careerlink hoặc nộp trực tiếp tại c&ocirc;ng ty. <br /></strong></em></p>
			                </li>
			                <li>Tên liên hệ:Ms Trang</li>
			                <li>Địa chỉ:
			                    
					            <span itemprop="addressRegion">{{$job->location}}</span>
					            
			                </li>
						</ul>
	            		<div>
	                		<strong><em>** Nhận hồ sơ ứng viên bằng ngôn ngữ: <mark>Tiếng Việt</mark></em></strong>
	            		</div>       
	            		<dl>
			                <dt>Ngày gởi: </dt>
			                <dd>13/11/2018
			                    <span class="hidden" itemprop="datePosted">2018-11-13</span>
			                </dd>
			                <dt>Ngày hết hạn: </dt>
			                <dd>13/12/2018
			                    <span class="hidden" itemprop="validThrough">2018-12-13T24:00+07:00</span>
			                </dd>
	            		</dl>
			                         
	           		</div>
	        	</div>
		    {{--    <div class="col-sm-5">
		            <div class="job-side-data" itemprop="hiringOrganization">
		                <p class="text-center" itemprop="logo">
		                    <img src="" />
		                </p>
		                <dl>
		                    <dt class="company-name">
		                        <a class="text-accent" href='/viec-lam-cua/cong-ty-tnhh-minh-long/188117'>
		                            <span itemprop="hiringOrganization" itemscope itemtype="http://schema.org/Organization">
		    							<span itemprop="name">Công Ty TNHH Minh Long</span>
									</span>
		                        </a>
		                    </dt>
		                    <dd itemprop="url">
		                        <a href="https://gominhlong.com/" rel="nofollow" target="_blank">https://gominhlong.com/</a>
		                    </dd>
		                </dl>
		                <ul class="list-unstyled">
		                    <li itemscope itemtype="http://schema.org/Organization">Số nhân viên:
								<span itemprop="numberOfEmployees">100-499</span>
		                    </li>
		                    <li>Tên liên hệ:Ms Trang</li>
		                </ul>
						<div itemprop="description">
		                    <p style="text-align: justify;"><strong>C&ocirc;ng ty TNHH Minh Long</strong> tự h&agrave;o l&agrave; một trong những nh&agrave; cung cấp vật liệu nội thất gỗ c&ocirc;ng nghiệp lớn nhất tại Việt Nam. Kể từ khi th&agrave;nh lập năm 2008, trong hơn 10 năm qua, Minh Long đ&atilde; kh&ocirc;ng ngừng ph&aacute;t triển mạnh mẽ với nền tảng t&agrave;i ch&iacute;nh ổn định v&agrave; vững mạnh, d&acirc;y chuyền m&aacute;y m&oacute;c hiện đại, quy tr&igrave;nh quản l&yacute; ti&ecirc;n tiến, hệ thống nh&agrave; ph&acirc;n phối v&agrave; đại l&yacute;, cửa h&agrave;ng&hellip;c&oacute; mặt tr&ecirc;n to&agrave;n l&atilde;nh thổ Việt Nam.</p>
							<p style="text-align: justify;"><strong>Giải thưởng:</strong></p>
							<p style="text-align: justify;">Minh Long tự h&agrave;o l&agrave; một trong những doanh nghiệp vinh dự được nhận giải thưởng &ldquo;thương hiệu v&agrave;ng c&ocirc;ng nghiệp Việt Nam&rdquo; năm 2014, Đ&acirc;y l&agrave; một giải thưởng uy t&iacute;n với ti&ecirc;u ch&iacute; lựa chọn khắt khe v&agrave; c&oacute; t&iacute;nh cạnh tranh cao.</p>
							<p style="text-align: justify;"><strong>Minh Long v&agrave; 5 gi&aacute; trị cốt l&otilde;i trong văn h&oacute;a doanh nghiệp</strong><br />VHDN Minh Long ch&iacute;nh l&agrave; nh&acirc;n tố gắn kết, ph&aacute;t triển con người, tạo m&ocirc;i trường cho từng c&aacute; nh&acirc;n nỗ lực v&agrave; s&aacute;ng tạo; c&ugrave;ng nhau x&acirc;y dựng, vận h&agrave;nh hệ thống quản l&yacute; nhằm đạt được c&aacute;c mục ti&ecirc;u, chiến lược đ&atilde; đề ra, sẵn s&agrave;ng vượt qua mọi th&aacute;ch thức để đ&oacute;n nhận th&ecirc;m nhiều cơ hội mới, lập n&ecirc;n nhiều kỷ lục mới.</p>
							<p style="text-align: justify;">Hệ thống gi&aacute; trị VHDN Minh Long gồm 5 gi&aacute; trị cốt l&otilde;i:<br /> <em>&ndash; T&iacute;nh kỷ luật</em><br /><em> &ndash; T&iacute;nh ch&iacute;nh trực</em><br /><em> &ndash; T&iacute;nh s&aacute;ng tạo</em><br /><em> &ndash; Hướng tới kh&aacute;ch h&agrave;ng</em><br /><em> &ndash; T&ocirc;n trọng gi&aacute; trị c&aacute; nh&acirc;n</em></p>
							<p style="text-align: justify;">Nếu bạn muốn đi nhanh th&igrave; h&atilde;y đi một m&igrave;nh, c&ograve;n muốn đi xa th&igrave; h&atilde;y đi c&ugrave;ng nhau. Tại Minh Long, từng bước đi của bạn đều được d&igrave;u dắt, n&acirc;ng đỡ v&agrave; chia sẻ để vượt qua những kh&oacute; khăn v&agrave; đi xa hơn tr&ecirc;n con đường sự nghiệp m&igrave;nh đ&atilde; chọn. Ch&uacute;ng t&ocirc;i lu&ocirc;n mong muốn nơi bạn d&agrave;nh 1/3 thời gian mỗi ng&agrave;y phải l&agrave; nơi đ&aacute;ng sống, đ&aacute;ng để tồn tại v&agrave; cống hiến.</p>
		                </div>		                                   
		    			<h2>Việc làm từ Công ty này</h2>
		    			<ul class="fa-ul">
		                	<li>
		            			<a href='/tim-viec-lam/truong-phong-ban-hang-phan-phoi-tuyen-gap/1396723' title="TRƯỞNG PHÒNG BÁN HÀNG PHÂN PHỐI (Tuyển Gấp)">
		                			<i class="fa-li fa fa-angle-double-right"></i>
		                			TRƯỞNG PHÒNG BÁN HÀNG PHÂN PHỐI (Tuyển Gấp)
		            			</a>
		        			</li>
		                	<li>
		            			<a href='/tim-viec-lam/chi-huy-truong-cong-trinh/1389578' title="Chỉ Huy Trưởng Công Trình">
		                			<i class="fa-li fa fa-angle-double-right"></i>
		                			Chỉ Huy Trưởng Công Trình
		            			</a>
		        			</li>
		                	<li>
		            			<a href='/tim-viec-lam/truong-phong-marketing/1397083' title="TRƯỞNG PHÒNG MARKETING">
		                			<i class="fa-li fa fa-angle-double-right"></i>
		                			TRƯỞNG PHÒNG MARKETING
		            			</a>
		        			</li>
		                	<li>
		            			<a href='/tim-viec-lam/truong-phong-dich-vu-khach-hang/1396036' title="TRƯỞNG PHÒNG DỊCH VỤ KHÁCH HÀNG">
		                			<i class="fa-li fa fa-angle-double-right"></i>
		                			TRƯỞNG PHÒNG DỊCH VỤ KHÁCH HÀNG
		            			</a>
		        			</li>
		                	<li>
		            			<a href='/tim-viec-lam/thu-kho-lam-viec-tai-nha-may-hung-yen/1391652' title="Thủ Kho (Làm việc tại nhà máy Hưng Yên)">
		                			<i class="fa-li fa fa-angle-double-right"></i>
		                			Thủ Kho (Làm việc tại nhà máy Hưng Yên)
		            			</a>
		        			</li>
		            	</ul>
		    			<p class="text-right">
		        			<a href="/viec-lam-cua/cong-ty-tnhh-minh-long/188117">Việc làm khác từ Công ty này &gt;&gt;</a>
		    			</p>
		            </div>
				</div>--}}
		    </div>
    	</div>
	    
    </div>
@endsection
@section('script')
	<script type="text/javascript">
		var naviGridViewOption = {
		    templateVars: {
		        'first_li': {
		            'find_jobs': {
		                url: "/tim-viec-lam-nhanh",
		                title: "Tìm Việc Làm"
		            },
		            'my_careerlink': {
		                url: "/nguoi-tim-viec",
		                title: "My CareerLink"
		            },
		            'create_resume': {
		                url: "/nguoi-tim-viec/ho-so/moi",
		                title: "Tạo hồ sơ xin việc mới"
		            }
		        },
		        'second_li': {
		            'my_resumes': {
		                url: "/nguoi-tim-viec/ho-so",
		                title: "Tủ hồ sơ"
		            },
		            'saved_job': {
		                url: "/nguoi-tim-viec/cong-viec-luu",
		                title: "Công việc đã lưu"
		            },
		            'job_alerts': {
		                url: "/nguoi-tim-viec/thong-bao-viec-lam",
		                title: "Thông Báo Việc Làm"
		            },
		            'message': {
		                url: "/nguoi-tim-viec/message",
		                title: "Tin nhắn"
		            },
		            'career_tools': {
		                url: "/cam-nang-viec-lam",
		                title: "Cẩm Nang Việc Làm"
		            }
		        },
		        job_seeker_register: {
		            url: "/nguoi-tim-viec/dang-ky",
		            title: "Đăng ký ngay!"
		        },
		        is_granted_job_seeker: false,
		        locale: "vi"
		    }
		};
	</script>
	<script type="text/javascript">
		require(['main_multi'], function () {
		    require(['jquery', 'jquery_lazyload'], function ($) {
		        $(function () {
		            $("[data-original]").lazyload();
		        });
		    });

		    require(['models.user', 'forms.sign_in_form', 'jquery.bootstrap.tooltip'], function (user, SignInForm) {
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

		    require(['jquery', 'views.globalnavi', 'forms.advanced_job_search_form', 'views.back_to_top', 'views.advanced_search_button'], function ($, Globalnavi, AdvancedJobSearchForm, BackToTop, AdvancedSearchButton) {
		        var isMobileView = false;

		        new BackToTop();
		        new AdvancedJobSearchForm(
		            '#advanced-job-search-form',
		            {
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

		        var naviGridView = new NaviGridView({model: naviGrid}, naviGridViewOption);
		        naviGridView.show();

		        $('.message', '.grid-icon-container').each(function (index, element) {
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
		            appId  : '157848801689',
		            status : true, // check login status
		            cookie : true, // enable cookies to allow the server to access the session
		            xfbml  : true  // parse XFBML
		        });
		    };

		    (function(d) {
		        var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
		        js = d.createElement('script'); js.id = id; js.async = true;
		        js.src = "//connect.facebook.net/en_US/all.js";
		        d.getElementsByTagName('head')[0].appendChild(js);
		    }(document));

		                    require(['jquery', 'jquery.cookie'], function ($) {

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
		                                    success: function (json) {
		                                        oauthProcess(json);
		                                    }
		                                });
		                            } else {
		                                window.location = '/nguoi-tim-viec/login';
		                            }

		                        }, { scope: 'email' });
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
		                    $.cookie('PHPSESSID', json.phpsessid, { expires: 365, path: '/' });
		                    window.location = '/nguoi-tim-viec';
		                }
		            }
		        });
		            
		    });
	</script>
	{{-- <script type="text/javascript">
		require(['main_multi'], function () {require(['views.work_location_map', 'jquery'], function(WorkLocationMap, $) {
		        var offices = [
		            {
		                id: '5bd1269fdb1e464608f140d0',
		                latitude: 21.008094,
		                longitude: 105.8081387
		            },            {
		                id: '5bd12f1adb1e46ab6ff140d0',
		                latitude: 20.950159669924,
		                longitude: 105.95772177302
		            }                    ];

		        var officeIds = [
		                        '5bd1269fdb1e464608f140d0',                        '5bd12f1adb1e46ab6ff140d0'                    ];

		        var workLocationMapOptions = {
		                        apiKey: 'AIzaSyDJsEHuBO4gzMBOkHtYASdRAs8Tixri9Qs',
		                        mapApi: 'googleMaps',
		            offices: offices,
		            officeIds: officeIds,
		            officesId: 'jobStep3_offices'
		        };var map = new WorkLocationMap(workLocationMapOptions);
		    });    require(['jquery', 'jquery.flexslider', 'jquery.magnific-popup'], function ($) {
		        // The slider being synced must be initialized first
		        $('#carousel').flexslider({
		            animation: "slide",
		            controlNav: false,
		            animationLoop: false,
		            slideshow: false,
		            itemWidth: 80,
		            itemMargin: 3,
		            asNavFor: '#slider'
		        });

		        $('#slider').flexslider({
		            animation: "fade",
		            controlNav: false,
		            animationLoop: false,
		            slideshow: false,
		            directionNav: false,
		            video: true,
		            smoothHeight: true,
		            sync: "#carousel"
		        });

		        $('#slider a').magnificPopup({
		            gallery:{
		                enabled:true,
		                tPrev: '',
		                tNext: ''
		            }
		        });
		    });require(['jquery', 'models.saved_job', 'views.saved_job_view', 'models.user'], function($, SavedJob, SavedJobView, user) {
		        var isMobileView = false;
		        var $jobHeaderSavedJobStar = $('.job-header .saved-job-star');

		        var savedJob = new SavedJob(user, {
		            id: $jobHeaderSavedJobStar.data('id') ? parseInt($jobHeaderSavedJobStar.data('id'), 10) : null,
		            jobId: $jobHeaderSavedJobStar.data('jobId') ? parseInt($jobHeaderSavedJobStar.data('jobId'), 10) : null
		        }, {
		            urlRoot: "/vi/jobseeker/savedjob"
		        });

		        $('.saved-job-star').each(function(index, element) {
		            new SavedJobView(isMobileView, {model: savedJob, el: element});
		        });
		    });

		    require(['jquery'], function($) {
		        $.ajax("/job/1389075/impression");
		    });

		        require(['views.fixed_header'], function(FixedHeader) {
		        new FixedHeader('.fixed-header');
		    });
		    });
	</script> --}}
    <div id="messenger-widget"></div>
@endsection