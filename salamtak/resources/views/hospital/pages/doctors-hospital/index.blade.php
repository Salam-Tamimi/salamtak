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
					<div class="row my-4 mx-2">
						<a href="{{ route('doctors-hospital.create') }}" data-toggle="modal" class="btn btn-success float-right mt-2">إضافة</a>
					</div>

					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th> الطبيب</th>
													<th>القسم</th>
													<th>الخبرة</th>
													{{-- <th>مشترك منذ</th> --}}
													{{-- <th>التحصيل</th> --}}
													<th>الكشفية</th>
													<th>حالة الحساب</th>
													<th> الإجراءات</th>
													
												</tr>
											</thead>
											<tbody>
												@foreach ($doctors as $doctor)
													<tr>
													<td>
														<h2 class="table-avatar">
															<img class="avatar-img rounded-circle" src="{{ asset($doctor->image) }}" alt="User Image">
															<a href="profile.html" class="mx-2">&nbsp;{{ $doctor->name }}</a>
														</h2>
													</td>
													<td>{{ $doctor->departments->name }}</td>
													{{-- <td>{{ $doctor->department ? $doctor->department->name : 'N/A' }}</td> --}}

													
													{{-- <td>١١ تشرين الثاني ٢٠٢٣ <br><small>١٢.٣٠م</small></td> --}}
													
													<td>{{ $doctor->experience }}</td>
													<td>{{ $doctor->price }} JOD</td>
													
													<td>
														<div class="status-toggle">
															<input type="checkbox" id="{{ $doctor->id }}" class="check" checked>
															<label for="{{ $doctor->id }}" class="checktoggle">الحالة</label>
														</div>
													</td>

													<td class="text-right">
														<div class="actions">
															<div style="margin-bottom: 5px; width: 100px;"> 
																<a class="btn btn-info btn-sm" href="{{ route('doctors-hospital.edit', $doctor->id) }}" style="width: 100%;">
																	<i class="fas fa-pencil-alt"></i>
																	تعديل
																</a>
															</div>
															<div style="margin-bottom: 5px; width: 100px;"> 
															<form action="{{ route('doctors-hospital.destroy', $doctor->id) }}" method="POST" style="display: inline;">
																@method('DELETE')
																@csrf
																<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل انت متاكد من عملية الحذف ؟')" style="width: 100%;">
																	<i class="fas fa-trash"></i> 
																	حذف
																</button>
															</form>
															</div>
														</div>
													</td>
												</tr>
												@endforeach
												
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

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/doctor-hospital.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>