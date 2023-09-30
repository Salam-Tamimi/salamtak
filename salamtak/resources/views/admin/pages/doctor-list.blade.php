@extends('admin.Layout.master')
@section('title','قائمة الأطباء')
@section('content')
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">قائمة الأطباء</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">المستخدمين</a></li>
									<li class="breadcrumb-item active">الأطباء</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>اسم الطبيب</th>
													<th>القسم</th>
													<th>مشترك منذ</th>
													<th>التحصيل</th>
													<th>حالة الحساب</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-01.jpg') }}" alt="User Image"></a>
															<a href="profile.html" class="mx-2">&nbsp;د. مريم عامر</a>
														</h2>
													</td>
													<td>باطني</td>
													
													<td>١١ تشرين الثاني ٢٠٢٣ <br><small>١٢.٣٠م</small></td>
													
													<td>١٠٠٠$</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-02.jpg') }}" alt="User Image"></a>
															<a href="profile.html" class="mx-2">&nbsp;د. محمد محمود</a>
														</h2>
													</td>
													<td>أذن وانف وحنجرة</td>
													
													<td>١١ كانون الثاني ٢٠٢٣ <br><small>١٢.٣٠م</small></td>
													
													<td>٣٠٠٠$</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-03.jpg') }}" alt="User Image"></a>
															<a href="profile.html" class="mx-2">&nbsp;د. يقين مازن</a>
														</h2>
													</td>
													<td>باطني</td>
													
													<td>١١ تشرين الثاني ٢٠٢٣ <br><small>١٢.٣٠م</small></td>
													
													<td>٣٣٠٠$</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-04.jpg') }}" alt="User Image"></a>
															<a href="profile.html" class="mx-2">&nbsp;د. ربا محمد</a>
														</h2>
													</td>
													<td>جلدي</td>
													
													<td>١١ كانون الثاني ٢٠٢٣ <br><small>١١.٣٠ص</small></td>
													
													<td>٣٠٠٠$</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-05.jpg') }}" alt="User Image"></a>
															<a href="profile.html" class="mx-2">&nbsp;د. صالح محمود</a>
														</h2>
													</td>
													<td>قلب</td>
													
													<td>١١ تشرين الثاني ٢٠٢٣ <br><small>١١.٣٠م</small></td>
													
													<td>٣٠٠٠$</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-06.jpg') }}" alt="User Image"></a>
															<a href="profile.html">&nbsp;د أشرف الأسعد</a>
														</h2>
													</td>
													<td>عظام</td>
													
													<td>٣ كانون الثاني ٢٠٢٣ <br><small>١١.٣٠م</small></td>
													
													<td>٣٥٠٠$</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-07.jpg') }}" alt="User Image"></a>
															<a href="profile.html">&nbsp;د. بيسان محمد</a>
														</h2>
													</td>
													<td>أطفال</td>
													
													<td>٣ كانون الثاني ٢٠٢٣ <br><small>١١.٠٠ص</small></td>
													
													<td>١٥٠٠$</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-08.jpg') }}" alt="User Image"></a>
															<a href="profile.html">&nbsp;د. عروة محمد</a>
														</h2>
													</td>
													<td>باطني</td>
													
													<td>٣ تشرين الثاني ٢٠٢٣ <br><small>١٢.٣٠م</small></td>
													
													<td>٢٥٠٠$</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-09.jpg') }}" alt="User Image"></a>
															<a href="profile.html">&nbsp;د. رامز محمود</a>
														</h2>
													</td>
													<td>جراحة</td>
													
													<td>١١ كانون الثاني ٢٠٢٣ <br><small>١١.٠٠ص</small></td>
													
													<td>٢٥٠٠$</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-10.jpg') }}" alt="User Image"></a>
															<a href="profile.html">&nbsp;د. عدي ناصر</a>
														</h2>
													</td>
													<td>أعصاب</td>
													
													<td>٣ كانون الثاني ٢٠٢٣ <br><small>١٢.٣٠م</small></td>
													
													<td>١٥٠٠$</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
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
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/doctor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>