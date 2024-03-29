@extends('admin.Layout.master')
@section('title', 'التقييمات')
@section('content')
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">التقييمات</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ url('/admin') }}">لوحة التحكم</a></li>
									<li class="breadcrumb-item active">التقييمات</li>
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
													<th>اسم المريض</th>
													<th>اسم الطبيب</th>
													<th>اسم المستشفى</th>
													<th>التقييم</th>
													<th>التعليق</th>
													{{-- <th>التاريخ</th> --}}
													{{-- <th class="text-right">الإجراءات</th> --}}
												</tr>
											</thead>
											<tbody>
												@if ($reviews)
													
												@foreach ($reviews as $review)
													<tr>
													<td>
														<h2 class="table-avatar">
															<img class="avatar-img rounded-circle" src="{{ asset($review->appointments->user->image) }}" style="width: 60px;" alt="User Image">
															<p>{{ $review->appointments->user->name }}</p>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<img class="avatar-img rounded-circle" src="{{ asset($review->appointments->doctor->image) }}" style="width: 60px;" alt="User Image">
															<p>{{ $review->appointments->doctor->name }}</p>
														</h2>
													</td>

													<td>
														<p>{{ $review->appointments->hospital->name }}</p>
													</td>
													
													<td>
														{{-- <div class="form-group">
															<label for="rating">Rating:</label>
															<select name="rating" id="rating" class="form-control">
																<option value="1" {{ $ratingFromDatabase == 1 ? 'selected' : '' }}>														
																	<i class="fe fe-star text-warning"></i>
														            <i class="fe fe-star-o text-secondary"></i>
														            <i class="fe fe-star-o text-secondary"></i>
														            <i class="fe fe-star-o text-secondary"></i>
														            <i class="fe fe-star-o text-secondary"></i>
																</option>
																<option value="2" {{ $ratingFromDatabase == 2 ? 'selected' : '' }}>														
																	<i class="fe fe-star text-warning"></i>
																	<i class="fe fe-star text-warning"></i>
																	<i class="fe fe-star-o text-secondary"></i>
																	<i class="fe fe-star-o text-secondary"></i>
																	<i class="fe fe-star-o text-secondary"></i>
																</option>
																<option value="3" {{ $ratingFromDatabase == 3 ? 'selected' : '' }}>
																	<i class="fe fe-star text-warning"></i>
																	<i class="fe fe-star text-warning"></i>
																	<i class="fe fe-star text-warning"></i>
																	<i class="fe fe-star-o text-secondary"></i>
																	<i class="fe fe-star-o text-secondary"></i>
																</option>
																<option value="4" {{ $ratingFromDatabase == 4 ? 'selected' : '' }}>
																	<i class="fe fe-star text-warning"></i>
																	<i class="fe fe-star text-warning"></i>
																	<i class="fe fe-star text-warning"></i>
																	<i class="fe fe-star text-warning"></i>
																	<i class="fe fe-star-o text-secondary"></i>
																</option>
																<option value="5" {{ $ratingFromDatabase == 5 ? 'selected' : '' }}>
																	<i class="fe fe-star text-warning"></i>
																	<i class="fe fe-star text-warning"></i>
																	<i class="fe fe-star text-warning"></i>
																	<i class="fe fe-star text-warning"></i>
																	<i class="fe fe-star text-warning"></i>
																</option>
															</select>
														</div> --}}
													</td>
													
													<td>
														{{ $review->comment }}
													{{-- </td>
														<td>3 Nov 2019 <br><small>09.59 AM</small>
													</td> --}}
													{{-- <td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
															
														</div>
													</td> --}}
												</tr>
												@endforeach
												@endif
												
												{{-- <tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient2.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Travis Trimble </a>
														</h2>
													</td>
													
												
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-02.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Dr. Darren Elder</a>
														</h2>
													</td>
													
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
													
													<td>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit
													</td>
														<td>2 Nov 2019<br> <small>08.50 AM</small></td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient3.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Carl Kelly</a>
														</h2>
													</td>
												
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-03.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Dr. Deborah Angel</a>
														</h2>
													</td>
													
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
													
													<td>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit
													</td>
														<td>1 Nov 2019<br> <small>02.59 PM</small></td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient4.jpg') }}" alt="User Image"></a>
															<a href="profile.html"> Michelle Fairfax</a>
														</h2>
													</td>
													
												
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-04.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Dr. Sofia Brient</a>
														</h2>
													</td>
													
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
													
													<td>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit
													</td>
														<td>27 Sep 2019 <br><small>03.40 PM</small></td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient5.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Gina Moore</a>
														</h2>
													</td>
													
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-05.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Dr. Marvin Campbell</a>
														</h2>
													</td>
													
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
													
													<td>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit
													</td>
														<td>24 Sep 2019 <br><small>04.38 PM</small></td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient6.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Elsie Gilley</a>
														</h2>
													</td>
													
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-06.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Dr. Katharine Berthold</a>
														</h2>
													</td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
													
													<td>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit
													</td>
														<td>22 Aug 2019 <br><small>01.50 PM</small></td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient7.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Joan Gardner</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-07.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Dr. Linda Tobin</a>
														</h2>
													</td>
													
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
													
													<td>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit
													</td>
														<td>21 Jul 2019 <br><small>05.50 PM</small></td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient8.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Daniel Griffing</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-08.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Dr. Paul Richard</a>
														</h2>
													</td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
													
													<td>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit
													</td>
														<td>16 Jun 2019 <br><small>04.50 PM</small></td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient9.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Walter Roberson</a>
														</h2>
													</td>
													
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-09.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Dr. John Gibbs</a>
														</h2>
													</td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
													
													<td>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit
													</td>
														<td>11 Mar 2019 <br><small>05.55 PM</small></td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
															
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/patient10.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Harry Williams</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('images/doctor-thumb-10.jpg') }}" alt="User Image"></a>
															<a href="profile.html">Dr. Olga Barlow</a>
														</h2>
													</td>
													
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
													
													<td>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit
													</td>
														<td>15 Feb 2019 <br><small>07.30 PM</small></td>
													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
															
														</div>
													</td>
												</tr> --}}
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
			
			<!-- Delete Modal -->
			<div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
					<!--	<div class="modal-header">
							<h5 class="modal-title">Delete</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>-->
						<div class="modal-body">
							<div class="form-content p-2">
								<h4 class="modal-title">Delete</h4>
								<p class="mb-4">Are you sure want to delete?</p>
								<button type="button" class="btn btn-primary">Save </button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete Modal -->
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

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:52 GMT -->
</html>