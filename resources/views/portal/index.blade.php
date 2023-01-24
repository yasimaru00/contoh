
<!-- kalau belum login : fullLayoutMaster -->
<!-- kalau sudah login : recruitmentLayoutMaster -->
@extends($guest ? 'layouts/fullLayoutMaster': 'layouts/recruitmentLayoutMaster')

@section('title', 'Portal')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/search.css')) }}">
@endsection
@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection
@section('content')
<!-- Search Bar -->
<section id="search-bar">
	<div class="search-bar">
    	<form>
        	<fieldset class="form-group position-relative has-icon-left">
            	<input type="text" class="form-control round" id="searchbar" placeholder="Search for a location or job title">
				<div class="form-control-position">
					<i class="feather icon-search px-1"></i>
				</div>
          	</fieldset>
      	</form>
  	</div>
  	<div class="row search-menu">
      	<!-- <div class="col-md-12 float-right text-sm-right">Advanced search </div> -->
		<div class="col-md-12">
			@include('portal.advanced_search')
		</div>
  	</div>
  	<div class="row search-result-info">
		<div class="col-sm-8 float-left">
			<p class="mt-1" id="pagination-total">Approx 84,00,00,000 results (0.35s)</p>
		</div>
      	<div class="col-sm-4 float-right text-sm-right"></div>
  	</div>
</section>
<!-- Search Bar end -->
<!-- Search Form  -->
<section id="search-website">
  	<div class="row">
      	<div class="col-md-8 col-12 order-2 order-md-1">
          	<div class="card">
              	<div class="card-content">
                  	<!--Search Result-->
                  	<div id="vacancy" class="card-body pb-0" data-href="{{ url('api/v1/vacancy/paginate') }}">
                      	<ul class="media-list p-0" id="list-vacancy">
						  	@foreach([1,2,3,4,5] as $dt)
                          	<!--search with list-->
						  	<li class="media">
                              	<div class="media-body">
                                	<h3 class="text-bold-400 mb-0"><a href="{{ url('vacancy/show/uuid') }}">Backend Engineer</a></h3>
									<ul class="list-inline list-inline-pipe">
                                    	<li>8 vacancy</li>
										<li>12 applicants</li>
										<li>IDR 9.000.000 / month</li>
                                  	</ul>
                                  	<p class="mb-0"><a href="https://1.envato.market/pixinvent_portfolio" class="success" target="_blank">https://1.envato.market/pixinvent_portfolio</a></p>
                                  	<p>Wafer liquorice sweet roll jelly beans cake soufflé. Oat cake marzipan chocolate cake sesame snaps jujubes. Dragée biscuit dessert. Chocolate muffin wafer. Sugar plum icing tootsie roll gummi bears marzipan candy canes biscui...</p>
                              	</div>
                          	</li>
						  	@endforeach
                      	</ul>
                  	</div>
              	</div>
          	</div>
      	</div>
      	<div class="col-md-4 col-12 order-1 order-md-2">
          	<div class="card bg-transparent border-light shadow-none">
              	<div class="card-body">
					<div class="text-center">
						<h3 class="mt-1 primary">Featured Job</h3>
					</div>
					<h4 class="mt-1">Backend Developer</h4>
					<small>Jawa Timur, Malang</small>
					<p class="card-text">Responsible for building and maintaining the technology needed to power the component which enables user-facing sides of the website to exist. The backend of the website consists of three parts, a server, application, and database.</p>
					<div class="knowledge-panel text-center">
						<div class="panel-1 border-right border-1 d-inline-block pr-2">
							<p class="mb-0">2</p>
							<small>Vacancy</small>
						</div>
						<div class="panel-3 d-inline-block pl-2">
							<p class="mb-0">14</p>
							<small>Applicants</small>
						</div>
					</div>
					<div class="py-1 knowledge-panel-info">
						<div><strong>Starting :  </strong> Oct 8 2021</div>
						<div><strong>Expired :  </strong> Oct 28 2021</div>
					</div>
              	</div>
          	</div>
      	</div>
		<!-- Search Pagination -->
		<div class="col-md-12 order-3 order-md-3 search-pagination">
			<ul class="pagination pagination-separate pagination-round pagination-flat justify-content-center">
				<li class="page-item prev-item" id="pagination-prev">
					<a class="page-link" id="pagination-prev-link" href="#" data-href="#" onClick="getVacancy('prev');"></a>
				</li>
				<li class="page-item active pagination-active"><a class="page-link" id="pagination-active-link" href="#">page 1</a></li>
				<li class="page-item next-item" id="pagination-next">
					<a class="page-link" id="pagination-next-link" href="#" data-href="#" onClick="getVacancy('next');"></a>
				</li>
			</ul>
		</div>
		<!-- Search Pagination end -->
  	</div>
</section>
<!--/ Search form -->
@endsection
@section('vendor-script')
	<!-- vendor files -->
	<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection
@section('page-script')
	<script src="{{ asset('js/portal/get-vacancy.js') }}"></script>
	<script>
		// Basic Select2 select
		$(".select2").select2({
			// the following code is used to disable x-scrollbar when click in select input and
			// take 100% width in responsive also
			dropdownAutoWidth: true,
			width: '100%',
			containerCssClass: 'select-sm'
		});
	</script>
@endsection
