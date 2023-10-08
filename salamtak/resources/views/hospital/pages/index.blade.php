@extends('admin.Layout.master')
@section('title', 'سلامتك - لوحة التحكم')
@section('content')
			

			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">مرحبا</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">لوحة التحكم </li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-primary border-primary">
											<i class="fe fe-users"></i>
										</span>
										<div class="dash-count">
											<h3>١٢١</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										<h6 class="text-muted">الأطباء</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-success">
											<i class="fe fe-credit-card"></i>
										</span>
										<div class="dash-count">
											<h3>٣١٢</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										
										<h6 class="text-muted">المرضى</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-success w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-danger border-danger">
											<i class="fe fe-money"></i>
										</span>
										<div class="dash-count">
											<h3>٢٢١</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										
										<h6 class="text-muted">الحجوزات</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-danger w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-warning border-warning">
											<i class="fe fe-folder"></i>
										</span>
										<div class="dash-count">
											<h3>$٦٢١١</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										
										<h6 class="text-muted">الأرباح</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-warning w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-6">
						
							<!-- Sales Chart -->
							<div class="card card-chart">
								<div class="card-header">
									<h4 class="card-title">الأرباح</h4>
								</div>
								<div class="card-body">
									<div id="morrisArea"></div>
								</div>
							</div>
							<!-- /Sales Chart -->
							
						</div>
						<div class="col-md-12 col-lg-6">
						
							<!-- Invoice Chart -->
							<div class="card card-chart">
								<div class="card-header">
									<h4 class="card-title">الحالة</h4>
								</div>
								<div class="card-body">
									<div id="morrisLine"></div>
								</div>
							</div>
							<!-- /Invoice Chart -->
							
						</div>	
					</div>
					<div class="row">
						<div class="col-md-6 d-flex">
						
							<!-- Recent Orders -->
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">لائحة الأطباء</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>اسم الطبيب</th>
													<th>القسم</th>
													<th>التحصيل</th>
													<th>التقييمات</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-01.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="mx-2">د. مريم عامر</a>
														</h2>
													</td>
													<td>باطني</td>
													<td>١٥٠٠.٠٠$</td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-04.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="mx-2">د. ربا محمد</a>
														</h2>
													</td>
													<td>جلدي</td>
													<td>٢٥٠٠.٠٠$</td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-03.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="mx-2">د. يقين مازن</a>
														</h2>
													</td>
													<td>باطني</td>
													<td>٢٠٠٠.٠٠$</td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
												</tr>
												<tr>
													<td>
													<h2 class="table-avatar">
														<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-02.jpg') }}" alt="User Image"></a>
														<a href="{{ asset('admin.pages.profile.blade.php') }}" class="mx-2">د. محمد محمود</a>
													</h2>
												</td>
												<td>أذن وانف وحنجرة</td>
													<td>٣٢٠٠.٠٠$</td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-01.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="mx-2">د. مريم عامر</a>
														</h2>
													</td>
													<td>باطني</td>
													<td>١٥٠٠.٠٠$</td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->
							
						</div>
						<div class="col-md-6 d-flex">
						
							<!-- Feed Activity -->
							<div class="card  card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">لائحة المرضى</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>													
													<th>اسم المريض</th>
													<th>رقم الهاتف</th>
													<th>آخر زيارة</th>
													<th>الدفع</th>													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient1.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}"class="mx-2">رانيا وليد</a>
														</h2>
													</td>
													<td>8286329170</td>
													<td>20 Oct 2019</td>
													<td class="text-right">$100.00</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient2.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}"class="mx-2">حسان محمود</a>
														</h2>
													</td>
													<td>2077299974</td>
													<td>22 Oct 2019</td>
													<td class="text-right">$200.00</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient3.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}"class="mx-2">عمر أحمد</a>
														</h2>
													</td>
													<td>2607247769</td>
													<td>21 Oct 2019</td>
													<td class="text-right">$250.00</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient4.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="mx-2">د. ربا محمد</a>
														</h2>
													</td>
													<td>5043686874</td>
													<td>21 Sep 2019</td>
													<td class="text-right">$150.00</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient5.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}"class="mx-2">عمر أحمد</a>
														</h2>
													</td>
													<td>9548207887</td>
													<td>18 Sep 2019</td>
													<td class="text-right">$350.00</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Feed Activity -->
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						
							<!-- Recent Orders -->
							<div class="card card-table">
								<div class="card-header">
									<h4 class="card-title">لائحة الحجوزات</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>اسم الطبيب</th>
													<th>القسم</th>
													<th>اسم المريض</th>
													<th>موعد الحجز</th>
													<th>الحالة</th>
													<th class="text-right">الدفع</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-01.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="mx-2">د. مريم عامر</a>
														</h2>
													</td>
													<td>باطني</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient1.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}"class="mx-2">رانيا وليد</a>
														</h2>
													</td>
													<td>٩ تشرين الثاني ٢٠٢٣ <span class="text-primary d-block">١١.٠٠ص -  ١١.٣٠ص</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														١٠٠$
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-02.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="mx-2">د. محمد محمود</a>
														</h2>
													</td>
													<td>أذن وانف وحنجرة</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient2.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}"class="mx-2">حسان محمود</a>
														</h2>
													</td>
													<td>٩ تشرين الأول ٢٠٢٣ <span class="text-primary d-block">١١.٠٠ص -  ١١.٣٠ص</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														٢٠٠$
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-03.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="mx-2">د. يقين مازن</a>
														</h2>
													</td>
													<td>باطني</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient3.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}"class="mx-2">عمر أحمد</a>
														</h2>
													</td>
													<td>٩ تشرين الثاني ٢٠٢٣ <span class="text-primary d-block">١١.٠٠ص -  ١١.٣٠ص</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														١٥٠$
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-04.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="mx-2">د. ربا محمد</a>
														</h2>
													</td>
													<td>جلدي</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient4.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}"class="mx-2">لين صالح</a>
														</h2>
													</td>
													<td>٣ كانون الثاني ٢٠٢٣ <span class="text-primary d-block">١١.٠٠ص -  ١١.٣٠ص</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														١٥٠$
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-05.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="mx-2">د. صالح محمود</a>
														</h2>
													</td>
													<td>قلب</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{ asset('admin.pages.profile.blade.php') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient5.jpg') }}" alt="User Image"></a>
															<a href="{{ asset('admin.pages.profile.blade.php') }}"class="mx-2">راما سعيد</a>
														</h2>
													</td>
													<td>٩ تشرين الثاني ٢٠٢٣ <span class="text-primary d-block">١١.٠٠ص -  ١١.٣٠ص</span></td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														١٠٠$
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->
							
						</div>
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->

			
@endsection
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<script src="assets/plugins/raphael/raphael.min.js"></script>    
		<script src="assets/plugins/morris/morris.min.js"></script>  
		<script src="assets/js/chart.morris.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:34 GMT -->
</html>