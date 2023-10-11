@extends('admin.Layout.master')
@section('title','قائمة المستشفى')
@section('content')
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">قائمة المستشفى</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">لوحة التحكم</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">الأقسام</a></li>
									<li class="breadcrumb-item active">الأطباء/</li>
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
									{{-- <label><h5>{{ $hospital->name }}</h5> </label> --}}
									<ul name="category_id" id="category" class="form-control">
										<p>أقسام المستشفى</p>
										@foreach ($departments as $department)
											<li value="{{ $department->id }}">{{ $department->name }}</م>
										@endforeach
                                    </ul>
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