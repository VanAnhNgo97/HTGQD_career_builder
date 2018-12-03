<header class="fixed-header">
	<div class="header-top">
		<div class="container">
			<div class="pull-left">
				<a href="{{ route('getAdminHome') }}" class="logo">Nhóm 3</a>
			</div>
			<!-- /.pull-left -->
			<div class="pull-right">
				<div class="ico-item hidden-on-desktop">
					<button type="button" class="menu-button js__menu_button fa fa-bars waves-effect waves-light"></button>
				</div>
				<!-- /.ico-item hidden-on-desktop -->
				<div class="ico-item">
					<a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
					<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
					<!-- /.searchform -->
				</div>
				<!-- /.ico-item -->
				<div class="ico-item fa fa-arrows-alt js__full_screen"></div>
				<!-- /.ico-item fa fa-fa-arrows-alt -->
				<div class="ico-item toggle-hover js__drop_down ">
					<span class="fa fa-th js__drop_down_button"></span>
				</div>
				<!-- /.ico-item -->
				<div class="ico-item">
					<a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
				</div>
				<!-- /.ico-item -->
				<div class="ico-item">
					<a href="#" class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></a>
				</div>
				<!-- /.ico-item -->
				<div class="ico-item">
					<a href="#" class="ico-item fa fa-user js__toggle_open" data-target="#user-status"></a>
				</div>
				<!-- /.ico-item -->
			</div>
			<!-- /.pull-right -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.header-top -->
	<nav class="nav-horizontal">
		<button type="button" class="menu-close hidden-on-desktop js__close_menu"><i class="fa fa-times"></i><span>CLOSE</span></button>
		<div class="container">
			
			<ul class="menu">
					<li class="current">
						<a href="{{ route('getAdminHome') }}"><i class="ico fa fa-home"></i><span>Trang Chủ</span></a>
					</li>
					<li class="has-sub">
						<a href=""><i class="ico fa fa-adjust"></i><span>Quản Lý Công Việc</span></a>
						<ul class="sub-menu mega" >
							<li class="has-sub" >
								<ul class="child-list">
									<h3 class="title">Công Việc</h3>
									<li><a href="{{ route('getAdminHome') }}"><i class="fa fa-list"></i> Danh Sách Công Việc</a></li>
									<li><a href="{{ route('getAddWork') }}"><i class="fa fa-plus-square-o"></i> Thêm Công Việc</a></li>
									<li><a href="{{ route('getEdit') }}"><i class="fa fa-pencil"></i> Chỉnh Sửa Trọng Số</a></li>
								</ul>
								<!-- /.child-list -->
							</li>
						</ul>
						<!-- /.sub-menu mega -->
					</li>
			</ul>
			<!-- /.menu -->
		</div>
		<!-- /.container -->
	</nav>
	<!-- /.nav-horizontal -->
</header>
<!-- /.fixed-header -->

<div id="color-switcher">
	<div id="color-switcher-button" class="btn-switcher">
		<div class="inside waves-effect waves-circle waves-light">
			<i class="ico fa fa-gear"></i>
		</div>
		<!-- .inside waves-effect waves-circle -->
	</div>
	<!-- .btn-switcher -->
	<div id="color-switcher-content" class="content">
		<a href="#" data-color="red" class="item js__change_color"><span class="color" style="background-color: #f44336;"></span><span class="text">Red</span></a>
		<a href="#" data-color="violet" class="item js__change_color"><span class="color" style="background-color: #673ab7;"></span><span class="text">Violet</span></a>
		<a href="#" data-color="dark-blue" class="item js__change_color"><span class="color" style="background-color: #3f51b5;"></span><span class="text">Dark Blue</span></a>
		<a href="#" data-color="blue" class="item js__change_color active"><span class="color" style="background-color: #304ffe;"></span><span class="text">Blue</span></a>
		<a href="#" data-color="light-blue" class="item js__change_color"><span class="color" style="background-color: #2196f3;"></span><span class="text">Light Blue</span></a>
		<a href="#" data-color="green" class="item js__change_color"><span class="color" style="background-color: #4caf50;"></span><span class="text">Green</span></a>
		<a href="#" data-color="yellow" class="item js__change_color"><span class="color" style="background-color: #ffc107;"></span><span class="text">Yellow</span></a>
		<a href="#" data-color="orange" class="item js__change_color"><span class="color" style="background-color: #ff5722;"></span><span class="text">Orange</span></a>
		<a href="#" data-color="chocolate" class="item js__change_color"><span class="color" style="background-color: #795548;"></span><span class="text">Chocolate</span></a>
		<a href="#" data-color="dark-green" class="item js__change_color"><span class="color" style="background-color: #263238;"></span><span class="text">Dark Green</span></a>
		<span id="color-reset" class="btn-restore-default js__restore_default">Reset</span>
	</div>
	<!-- /.content -->
</div>