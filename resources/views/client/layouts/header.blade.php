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
                <a class="navbar-brand" href="{{ route('getHome') }}" title="Viec lam, tim viec, tuyen dung, tim viec lam">
                    <img src="{{ asset('images/common/header/logo.jpg') }}" srcset="{{ asset('images/common/header/logo.jpg') }} 1x, {{ asset('images/common/header/logo.jpg') }} 2x" alt="Tìm kiếm việc làm trên mạng tuyển dụng trực tuyến" height="50" />                
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">               
                {{-- <div class="navbar-right navbar-btn grid-icon-container">
					<a class="btn btn-warning btn-sm" href="">Đăng ký</a>
					<a class="btn btn-primary btn-sm" href="">Đăng nhập</a>
                </div> --}}
            </div>
        </div>
        <div class="hide">
            <div class="popover-content-menu"></div>   
        </div>
    </nav>  