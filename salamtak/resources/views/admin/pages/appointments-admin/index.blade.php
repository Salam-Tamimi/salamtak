@extends('admin.Layout.master')
@section('title', 'الحجوزات')
@section('content')
			{{-- l --}}
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">الحجوزات</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ url('/admin') }}">لوحة التحكم</a></li>
									<li class="breadcrumb-item active">الحجوزات</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-md-12">
						
							<!-- Recent Orders -->
							<div class="card card-table">
								<div class="card-header">
									<h4 class="card-title">لائحة الحجوزات</h4>
										<a class="btn btn-primary btn-sm float-left" href="{{ route('appointments-admin.create') }}">
											<i class="fas fa-th nav-icon"></i> إضافة حجز
										</a>
									</div>
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
												@if(isset($appointments) && count($appointments) > 0)
												@foreach ($appointments as $appointment)
													<tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ url('/admin-profile') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ $appointments->$doctors->image }}" alt="Doctor Image"></a>
															<a href="{{ url('/admin-profile') }}" class="mx-2">{{ $appointments->$doctor->name }}  </a>
														</h2>
													</td>
													<td>{{ $appointments->$department->name }}</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{ url('/admin-profile') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ $appointments->$users->image }}" alt="User Image"></a>
															<a href="{{ url('/admin-profile') }}"class="mx-2"> {{ $appointments->$user->name }}</a>
														</h2>
													</td>
													<td>{{ $appointments->date }}</td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">checkbox</label>
														</div>
													</td>
													<td class="text-right">
														{{ $appointments->$doctor->price }}JOD
													</td>
												</tr>
												@endforeach
												@else
												<p style="margin-left:50%;">لا يوجد حجوزات لحد الآن</p>
											    @endif												
												{{-- <tr>
													<td>
														<h2 class="table-avatar">
															<a href="{{ url('/admin-profile') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-02.jpg') }}" alt="User Image"></a>
															<a href="{{ url('/admin-profile') }}" class="mx-2">د. محمد محمود</a>
														</h2>
													</td>
													<td>أذن وانف وحنجرة</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{ url('/admin-profile') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient2.jpg') }}" alt="User Image"></a>
															<a href="{{ url('/admin-profile') }}"class="mx-2">حسان محمود</a>
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
															<a href="{{ url('/admin-profile') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-03.jpg') }}" alt="User Image"></a>
															<a href="{{ url('/admin-profile') }}" class="mx-2">د. يقين مازن</a>
														</h2>
													</td>
													<td>باطني</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{ url('/admin-profile') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient3.jpg') }}" alt="User Image"></a>
															<a href="{{ url('/admin-profile') }}"class="mx-2">عمر أحمد</a>
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
															<a href="{{ url('/admin-profile') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-04.jpg') }}" alt="User Image"></a>
															<a href="{{ url('/admin-profile') }}" class="mx-2">د. ربا محمد</a>
														</h2>
													</td>
													<td>جلدي</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{ url('/admin-profile') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient4.jpg') }}" alt="User Image"></a>
															<a href="{{ url('/admin-profile') }}"class="mx-2">لين صالح</a>
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
															<a href="{{ url('/admin-profile') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-05.jpg') }}" alt="User Image"></a>
															<a href="{{ url('/admin-profile') }}" class="mx-2">د. صالح محمود</a>
														</h2>
													</td>
													<td>قلب</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{ url('/admin-profile') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient5.jpg') }}" alt="User Image"></a>
															<a href="{{ url('/admin-profile') }}"class="mx-2">راما سعيد</a>
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
												</tr> --}}
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
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:49 GMT -->
</html>