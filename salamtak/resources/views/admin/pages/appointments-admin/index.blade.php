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
															<a href="{{ url('/admin-profile') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset($appointment->doctors->image) }}" alt="Doctor Image"></a>
															<a href="{{ url('/admin-profile') }}" class="mx-2">{{ $appointment->doctors->name }}  </a>
														</h2>
													</td>
													<td>{{ $appointment->departments->name }}</td>
													<td>
														<h2 class="table-avatar">
															<a href="{{ url('/admin-profile') }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset($appointments->users->image) }}" alt="User Image"></a>
															<a href="{{ url('/admin-profile') }}"class="mx-2"> {{ $appointment->users->name }}</a>
														</h2>
													</td>
													<td>{{ $appointment->date }}</td>
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="status_1" class="check" checked>
															<label for="status_1" class="checktoggle">الحالة</label>
														</div>
													</td>
													<td class="text-right">
														{{ $appointment->doctors->price }} JOD
													</td>
												</tr>
												@endforeach
												@else
												<p style="margin-left:50%;">لا يوجد حجوزات لحد الآن</p>
											    @endif												
												
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