@extends('hospital.Layout.master')
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
						<a href="{{ route('hospitals-details.index') }}"class="btn btn-success float-right mt-2 mx-2"><svg width="24px" height="24px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ffffff" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#ffffff" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg>الرجوع الى تفاصيل المستشفى</a>
						<a href="{{ route('doctors-hospital.create') }}" data-toggle="modal" class="btn btn-success float-right mt-2 mx-2">إضافة طبيب</a>
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
													{{-- <th>القسم</th> --}}
													{{-- <th>الخبرة</th> --}}
													{{-- <th>مشترك منذ</th> --}}
													{{-- <th>التحصيل</th> --}}
													<th>البريد الإلكتروني</th>
													<th>الكشفية</th>
													{{-- <th>حالة الحساب</th> --}}
													<th> الإجراءات</th>
													
												</tr>
											</thead>
											<tbody>
												@if ($doctors)
												@foreach ($doctors as $doctor)
													<tr>
													<td>
														<h2 class="table-avatar">
															{{-- <img class="avatar-img rounded-circle" src="{{ asset('storage/' . $doctor->image) }}" alt="{{ $doctor->name }}"> --}}
															@if($doctor->image)
															<img src="{{ asset($doctor->image) }}" alt="صورة {{ $doctor->name }}" width="100px">
															@endif
															<a href="profile.html" class="mx-2">&nbsp;{{ $doctor->name }}</a>
														</h2>
													</td>
													{{-- <td>
														{{ $doctor->department->name }}
													</td> --}}
													{{-- <td>{{ $doctor->department ? $doctor->department->name : 'N/A' }}</td> --}}

													
													{{-- <td>١١ تشرين الثاني ٢٠٢٣ <br><small>١٢.٣٠م</small></td> --}}
													
													{{-- <td>{{ $doctor->experience }}</td> --}}
													<td>{{ $doctor->email }} </td>
													<td>{{ $doctor->price }} JOD</td>
													
													{{-- <td>
														<div class="status-toggle">
															<input type="checkbox" id="{{ $doctor->id }}" class="check" checked>
															<label for="{{ $doctor->id }}" class="checktoggle">الحالة</label>
														</div>
													</td> --}}

													<td class="text-right">
														<div class="actions">
															{{-- <div style="margin-bottom: 5px; width: 100px;"> 
																<a class="btn btn-info btn-sm" href="{{ route('doctors-hospital.edit', $doctor->id) }}" style="width: 100%;">
																	<i class="fas fa-pencil-alt"></i>
																	تعديل
																</a> --}}
															</div>
															<div style="margin-bottom: 5px; width: 100px;"> 
															<form action="{{ route('doctors-hospital.destroy', $doctor->id) }}" method="POST" style="display: inline;">
																@method('DELETE')
																@csrf
																<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل انت متاكد من عملية الحذف ؟')" style="width: 100%;">
																	{{-- <i class="fas fa-trash"></i>  --}}
																	حذف
																</button>
															</form>
															</div>
														</div>
													</td>
												</tr>
												@endforeach
												@else
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												@endif
												
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