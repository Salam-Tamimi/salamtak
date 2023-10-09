@extends('admin.Layout.master')
@section('title','لائحة المرضى')
@section('content')
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">لائحة المرضى</h3></h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
									{{-- <li class="breadcrumb-item"><a href="javascript:(0);">المستخدمين</a></li> --}}
									<li class="breadcrumb-item active">المرضى</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row my-4 mx-2">
						<a href="{{ route('users.create') }}" data-toggle="modal" class="btn btn-success float-right mt-2">إضافة</a>
					</div>

					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>  المريض</th>
													{{-- <th>صورة المريض</th> --}}
													<th>البريد الالكتروني</th>
													<th>رقم الهاتف المحمول</th>
													<th> الإجراءات</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($users as $user)
													<tr>
													<td>
														<h2 class="table-avatar">
															<img class="avatar-img rounded-circle" src="{{ asset($user->image) }}" alt="User Image">
															<a href="profile.html" class="mx-2">&nbsp;{{ $user->name }}</a>
														</h2>
													</td>
													<td>{{ $user->email }}</td>

													<td>{{ $user->mobile }}</td>
													
													<td class="text-right">
															<div style="margin-bottom: 5px; width: 100px;"> 
															<form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
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

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/doctor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>