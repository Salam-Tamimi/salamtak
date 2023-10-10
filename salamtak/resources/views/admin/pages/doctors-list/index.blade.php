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
					{{-- <!-- /Page Header -->
					<div class="row my-4 mx-2">
						<a href="{{ route('doctors-list.create') }}" data-toggle="modal" class="btn btn-success float-right mt-2">إضافة</a>
					</div> --}}

					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="mb-3">
									<label for="category"><h5>المستشفى</h5> </label>
									<select name="category_id" id="category" class="form-control">
										<option value="">اختر المستشفى</option>
										@foreach ($hospitals as $hospital)
											<option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
										@endforeach
									</select>
								</div>
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
													{{-- <th> الإجراءات</th> --}}
													
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

													{{-- <td class="text-right">
														<div class="actions">
															<div style="margin-bottom: 5px; width: 100px;"> 
																<a class="btn btn-info btn-sm" href="{{ route('doctors-list.edit', $doctor->id) }}" style="width: 100%;">
																	<i class="fas fa-pencil-alt"></i>
																	تعديل
																</a>
															</div>
															<div style="margin-bottom: 5px; width: 100px;"> 
															<form action="{{ route('doctors-list.destroy', $doctor->id) }}" method="POST" style="display: inline;">
																@method('DELETE')
																@csrf
																<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل انت متاكد من عملية الحذف ؟')" style="width: 100%;">
																	<i class="fas fa-trash"></i> 
																	حذف
																</button>
															</form>
															</div>
														</div>
													</td> --}}
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
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#hospital').on('change', function() {
        var hospitalId = $(this).val();
        
        // Make an AJAX request to fetch doctors for the selected hospital
        $.ajax({
            url: '/get-doctors-by-hospital/' + hospitalId, // Replace with your actual API endpoint
            method: 'GET',
            success: function(data) {
                // Update the table with the retrieved doctor data
                var tableBody = $('#doctor-table tbody');
                tableBody.empty();
                
                $.each(data, function(index, doctor) {
                    var row = '<tr>';
                    row += '<td><h2 class="table-avatar"><img class="avatar-img rounded-circle" src="' + doctor.image + '" alt="User Image"><a href="profile.html" class="mx-2">&nbsp;' + doctor.name + '</a></h2></td>';
                    row += '<td>' + doctor.departments.name + '</td>';
                    row += '<td>' + doctor.experience + '</td>';
                    row += '<td>' + doctor.price + ' JOD</td>';
                    row += '<td><div class="status-toggle"><input type="checkbox" id="' + doctor.id + '" class="check" checked><label for="' + doctor.id + '" class="checktoggle">الحالة</label></div></td>';
                    row += '</tr>';
                    
                    tableBody.append(row);
                });
            }
        });
    });
});
</script>

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