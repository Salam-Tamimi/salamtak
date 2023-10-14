@extends('admin.Layout.master')
@section('title', 'المستشفيات')
@section('content')
			{{-- l --}}
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">المستشفيات</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ url('/admin') }}">لوحة التحكم</a></li>
									<li class="breadcrumb-item active">المستشفيات</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-md-12">
						
							<!-- Recent Orders -->
							<div class="card card-table">
								{{-- <div class="card-header">
									<h4 class="card-title">لائحة المستشفيات</h4>
										<a class="btn btn-primary btn-sm float-left" href="{{ route('hospitals-details.create') }}">
											<i class="fas fa-th nav-icon"></i> إضافة مستشفى
										</a>
									</div> --}}
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>اسم المستشفى </th>
													<th>الأقسام </th>
													<th> الموقع</th>
													<th> فيديو</th>
													<th>صورة </th>
													<th>جولة إفتراضية </th>
													<th> الإجراء </th>
												</tr>
											</thead>
											<tbody>
												{{-- @if(isset($hospitals) && count($hospitals) > 0)
												@foreach ($hospitals as $hospital)
													<tr>
													<td>
														{{ $hospital->name }}
													</td>
													<td>
                                                    @foreach ($activeDepartments as $activeDepartment)
                                                        <li>{{ $activeDepartment->name }}</li>
                                                    @endforeach
                                                    </td>
													<td>
														{{ $hospital->location }}
													</td>
													<td>                                
                                                        <iframe width="150" src="{{ $hospital->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>  
                                                    </td>
                                                    <td><img src="{{ asset($hospital->image) }}" alt="" width="100px" height="100px"></td>
													
                                                    <td>                                
                                                        <iframe loading="lazy" style="width:150px;" src="{{ $hospital->virtual_tour }}"></iframe>
                                                    </td>
                                                    <td>                                
														<div style="margin-bottom: 5px; width: 100px;"> 
															<a class="btn btn-info btn-sm" href="{{ route('hospitals-admin.edit', $hospital->id) }}" style="width: 100%;">
																<i class="fas fa-pencil-alt"></i>
																تعديل
															</a>
														</div>
													
														<div style="margin-bottom: 5px; width: 100px;"> 
															<form action="{{ route('hospitals-details.destroy', $hospital->id) }}" method="POST" style="display: inline;">
																@method('DELETE')
																@csrf
																<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل انت متاكد من عملية الحذف ؟')" style="width: 100%;">
																	<i class="fas fa-trash"></i> 
																	حذف
																</button>
															</form>
														</div>                                                    
													</td>
						
												</tr>
												@endforeach
												@else
												<p style="margin-left:50%;">لا يوجد مستشفيات لحد الآن</p>
											    @endif												 --}}
											<tr>
												<td>{{ Auth::user()->name }}</td>
												<td></td>
												<td>{{ $hospital->location }}</td>
												<td>{{ $hospital->video }}</td>
												<td>{{ $hospital->image }}</td>
												<td>{{ $hospital->virtual_tour }}</td>
												<td>
													<div style="margin-bottom: 5px; width: 100px;"> 
														<a class="btn btn-info btn-sm" href="{{ route('hospitals-details.edit', Auth::user()->id ) }}" style="width: 100%;">
															<i class="fas fa-pencil-alt"></i>
															تعديل
														</a>
													</div>
													<div style="margin-bottom: 5px; width: 100px;"> 
														<a class="btn btn-info btn-sm" href="{{ route('hospitals-details.edit', Auth::user()->id ) }}" style="width: 100%;">
															<i class="fas fa-pencil-alt"></i>
															اضافة أقسام
														</a>
													</div>
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
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:49 GMT -->
</html>