@extends('hospital.Layout.master')
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
										@if ($reviews->isNotEmpty())
    <table>
        <thead>
            <tr>
                <th>اسم المريض</th>
                <th>اسم الطبيب</th>
                <th>اسم المستشفى</th>
                <th>التقييم</th>
                <th>التعليق</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                    <tr>
                        <td>{{ $review->appointments->user->name }}</td>
                        <td>{{ $review->appointments->doctor->name }}</td>
                        <td>{{ $review->appointments->hospital->name }}</td>
                        <td>
                            <div class="rating text-right" dir="rtl">
                                @php
                                    $rating = $review->review ?? 0;
                                    $filledStars = floor($rating);
                                    $remainingStar = $rating - $filledStars;
                                @endphp

                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $filledStars)
									<svg width="30px" height="30px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#FAD97F">
										<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
										<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
										<g id="SVGRepo_iconCarrier">
											<path d="M923.2 429.6H608l-97.6-304-97.6 304H97.6l256 185.6L256 917.6l256-187.2 256 187.2-100.8-302.4z" stroke="#CCCCCC"></path>
										</g>
									</svg>
                                    @else
                                        @if ($remainingStar > 0 && $i == ($filledStars + 1))
										<svg fill="#FAD97F" width="28px" height="28px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)">
											<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
											<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
											<g id="SVGRepo_iconCarrier">
												<path d="M30.383 12.699c-0.1-0.303-0.381-0.519-0.713-0.519-0 0-0 0-0 0h-9.898l-3.059-9.412c-0.1-0.303-0.381-0.518-0.712-0.518-0.083 0-0.163 0.014-0.238 0.039l0.005-0.002c-0.226 0.078-0.399 0.256-0.468 0.48l-0.001 0.005-0.012-0.004-3.059 9.412h-9.897c-0.414 0-0.749 0.336-0.749 0.75 0 0.248 0.121 0.469 0.307 0.605l0.002 0.001 8.007 5.818-3.059 9.412c-0.023 0.069-0.037 0.149-0.037 0.232 0 0.414 0.336 0.75 0.75 0.75 0.165 0 0.318-0.053 0.442-0.144l-0.002 0.001 8.008-5.819 8.006 5.819c0.122 0.090 0.275 0.144 0.441 0.144 0.414 0 0.75-0.336 0.75-0.75 0-0.083-0.014-0.164-0.039-0.239l0.002 0.005-3.059-9.412 8.010-5.818c0.188-0.138 0.308-0.357 0.308-0.605 0-0.083-0.014-0.163-0.038-0.238l0.002 0.005zM20.779 18.461c-0.188 0.138-0.309 0.358-0.309 0.607 0 0.083 0.014 0.163 0.039 0.238l-0.002-0.005 2.514 7.736-6.581-4.783c-0.116-0.080-0.259-0.128-0.414-0.128-0.009 0-0.018 0-0.028 0l0.001-0v-16.701l2.514 7.737c0.1 0.303 0.381 0.519 0.713 0.519 0 0 0 0 0 0h8.135z"></path>
											</g>
										</svg>
                                        @else
										<svg width="28px" height="28px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="">
											<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
											<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
											<g id="SVGRepo_iconCarrier">
												<g id="icomoon-ignore"></g>
												<path d="M19.38 12.803l-3.38-10.398-3.381 10.398h-11.013l8.925 6.397-3.427 10.395 8.896-6.448 8.895 6.448-3.426-10.395 8.925-6.397h-11.014zM20.457 19.534l2.394 7.261-6.85-4.965-6.851 4.965 2.64-8.005-0.637-0.456-6.228-4.464h8.471l2.606-8.016 2.605 8.016h8.471l-6.864 4.92 0.245 0.744z" stroke="#CCCCCC"></path>
											</g>
										</svg>
                                        @endif
                                    @endif
                                @endfor
                            </div>
                        </td>
                        <td>{{ $review->comment }}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>لا يوجد تقييمات لحد الآن</p>
@endif
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