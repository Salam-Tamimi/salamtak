			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>رئيسي</span>
							</li>
							<li> 
								<a href="{{ url('/admin') }}"><i class="fe fe-home"></i> <span>لوحة التحكم</span></a>
							</li>
							{{-- <li> 
								<a href="{{ url('appointments-admin') }}"><i class="fe fe-layout"></i> <span>الحجوزات</span></a>
							</li> --}}
							<li> 
								<a href="{{ url('hospitals-admin') }}"><i class="fe fe-layout"></i> <span>المستشفيات</span></a>
							</li>
							{{-- <li> 
								<a href="{{ url('departments-admin') }}"><i class="fe fe-users"></i> <span>الأقسام</span></a>
							</li> --}}
							<li> 
								<a href="{{ url('/doctors-list') }}"><i class="fe fe-user-plus"></i> <span>الأطباء</span></a>
							</li>
							<li> 
								<a href="{{ url('patients-list') }}"><i class="fe fe-user"></i> <span>المرضى</span></a>
							</li>
							<li> 
								<a href="{{ url('reviews-admin') }}"><i class="fe fe-star-o"></i> <span>التقييمات</span></a>
							</li>
							<li> 
								<a href="{{ url('/transactions-list') }}"><i class="fe fe-activity"></i> <span>المعاملات</span></a>
							</li>
							<li> 
								<a href="{{ url('/settings-admin') }}"><i class="fe fe-vector"></i> <span>الإعدادات</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> التقارير</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{ url('/invoice-report') }}">تقارير الفواتير</a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>الصفحات</span>
							</li>
							<li> 
								<a href="{{ url('/admin-profile') }}"><i class="fe fe-user-plus"></i> <span>الحساب</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span> المصادقة </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{ url('/admin-login') }}"> تسجيل دخول </a></li>
									<li><a href="{{ url('/admin-register') }}"> إنشاء حساب </a></li>
									<li><a href="{{ url('/admin-forgot-password') }}"> نسيت كلمة المرور </a></li>
									<li><a href="{{ url('/admin-lock-screen') }}"> اقفل الشاشة </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-warning"></i> <span> صفحات الخطأ </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{ url('error-404-admin') }}">خطأ ٤٠٤ </a></li>
									<li><a href="{{ url('error-500-admin') }}">خطأ ٥٠٠ </a></li>
								</ul>
							</li>
							<li> 
								<a href="{{ url('blank-page-admin') }}"><i class="fe fe-file"></i> <span>صفحة فارغة</span></a>
							</li>
							<li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li> 
								<a href="{{ url('components-admin') }}"><i class="fe fe-vector"></i> <span>محتويات</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-layout"></i> <span> نماذج </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{ url('form-basic-inputs') }}">المدخلات الأساسية </a></li>
									<li><a href="{{ url('form-input-groups') }}">مجموعات الإدخال </a></li>
									<li><a href="{{ url('form-horizontal') }}">النموذج الأفقي </a></li>
									<li><a href="{{ url('form-vertical') }}"> النموذج العمودي </a></li>
									<li><a href="{{ url('form-mask') }}"> Form Mask </a></li>
									<li><a href="{{ url('form-validation') }}"> التحقق من صحة النموذج </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-table"></i> <span> الجداول </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{ url('tables-basic') }}">الجداول الأساسية </a></li>
									<li><a href="{{ url('data-tables') }}">جدول البيانات </a></li>
								</ul>
							</li>
							{{-- <li class="submenu">
								<a href="javascript:void(0);"><i class="fe fe-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul style="display: none;">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li> --}}
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->